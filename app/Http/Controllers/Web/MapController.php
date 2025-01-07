<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Admin\IndustrialDesign;
use App\Models\Admin\Patent;
use App\Models\Admin\ScienceInnovation;
use App\Models\Admin\Trademark;
use App\Models\Map\Commune;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    public function index()
    {
        return view('web.map.index');
    }

    public function getCommunesByDistrict($districtId)
    {
        $communes = Commune::where('district_id', $districtId)->get(['id', 'name']);
        return response()->json($communes);
    }

    public function layer($layer, Request $request)
    {
        if ($layer === 'borders') {
            $geoJson =
                Cache::rememberForever('border', function () {
                    return DB::select("SELECT
                        row_to_json(fc) AS data
                    FROM (
                        SELECT
                            'FeatureCollection' AS TYPE,
                            array_to_json(array_agg(f)) AS features
                        FROM (
                            SELECT
                                'Feature' AS TYPE,
                                ST_AsGeoJSON(b.geom)::json AS geometry,
                                row_to_json((
                                    SELECT
                                        p FROM (
                                            SELECT
                                               b.id, 'border' layer ) AS p)) AS properties
                            FROM
                                map_borders b

                            GROUP BY
                                b.id) AS f) AS fc");
                });

            $geoJson = collect($geoJson)->first();

            return json_decode($geoJson->data);
        }

        if ($layer === 'districts') {
            $geoJson =
                Cache::rememberForever('districts', function () {
                    return DB::select("SELECT
                        row_to_json(fc) AS data
                    FROM (
                        SELECT
                            'FeatureCollection' AS TYPE,
                            array_to_json(array_agg(f)) AS features
                        FROM (
                            SELECT
                                'Feature' AS TYPE,
                                ST_AsGeoJSON(d.geom)::json AS geometry,
                                row_to_json((
                                    SELECT
                                        p FROM (
                                            SELECT
                                                d.id, d.name, d.area, d.population, d.color, 'districts' layer) AS p)) AS properties
                            FROM
                                map_districts d
                            GROUP BY
                                d.id) AS f) AS fc");
                });

            $geoJson = collect($geoJson)->first();

            return json_decode($geoJson->data);
        }

        if ($layer === 'communes') {
            $geoJson =
                Cache::rememberForever('communes', function () {
                    return DB::select("SELECT
                                        row_to_json(fc) AS data
                                    FROM (
                                        SELECT
                                            'FeatureCollection' AS TYPE,
                                            array_to_json(array_agg(f)) AS features
                                        FROM (
                                            SELECT
                                                'Feature' AS TYPE,
                                                ST_AsGeoJSON(c.geom)::json AS geometry,
                                                row_to_json((
                                                    SELECT
                                                        p FROM (
                                                            SELECT
                                                                c.id, c.district_id, c.name AS commune, d.name AS district, c.area, c.population, 'communes' layer) AS p)) AS properties
                                            FROM
                                                map_communes c
                                                JOIN map_districts d ON d.id = c.district_id::INTEGER
                                            GROUP BY
                                                c.id,
                                                d.id) AS f) AS fc");
                });

            $geoJson = collect($geoJson)->first();

            return json_decode($geoJson->data);
        }

        if ($layer === 'patents') {
            $districtId = $request->input('district_id');
            $communeId = $request->input('commune_id');

            // Build the query based on the presence of districtId and communeId
            $query = DB::table(DB::raw("(SELECT
                'FeatureCollection' AS TYPE,
                array_to_json(array_agg(f)) AS features
            FROM (
                SELECT
                    'Feature' AS TYPE,
                    ST_AsGeoJSON(p.geom)::json AS geometry,
                    row_to_json((
                        SELECT
                            p FROM (
                                SELECT
                                    p.id, 
                                    p.commune_id, 
                                    p.title AS name,
                                    'patents' AS layer
                            ) AS p
                    )) AS properties
                FROM
                    patents p
                    " . ($districtId ? "JOIN map_communes c ON p.commune_id = c.id WHERE c.district_id = ?" : "") . "
                    " . ($communeId ? "AND p.commune_id = ?" : "") . "
                GROUP BY
                    p.id
            ) AS f
            ) AS fc"));

            // Set bindings if needed
            $bindings = [];
            if ($districtId) {
                $bindings[] = $districtId;
            }
            if ($communeId) {
                $bindings[] = $communeId;
            }

            $geoJson = $query->when(count($bindings) > 0, function ($query) use ($bindings) {
                return $query->setBindings($bindings);
            })->first();

            return json_decode($geoJson->features ?? '[]');

            // Ensure valid GeoJSON
            if (is_string($geoJson)) {
                $geoJson = json_decode($geoJson);
            }
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception("Invalid GeoJSON returned from database");
            }

            return $geoJson;
        }

        if ($layer === 'trademarks') {
            $districtId = $request->input('district_id');
            $communeId = $request->input('commune_id');

            // Build the query based on the presence of districtId and communeId
            $query = DB::table(DB::raw("(SELECT
                'FeatureCollection' AS TYPE,
                array_to_json(array_agg(f)) AS features
            FROM (
                SELECT
                    'Feature' AS TYPE,
                    ST_AsGeoJSON(t.geom)::json AS geometry,
                    row_to_json((
                        SELECT
                            t FROM (
                                SELECT
                                    t.id, 
                                    t.commune_id, 
                                    t.mark AS name,
                                    'trademarks' AS layer
                            ) AS t
                    )) AS properties
                FROM
                    trademarks t
                    " . ($districtId ? "JOIN map_communes c ON t.commune_id = c.id WHERE c.district_id = ?" : "") . "
                    " . ($communeId ? "AND t.commune_id = ?" : "") . "
                GROUP BY
                    t.id
            ) AS f
            ) AS fc"));

            // Set bindings if needed
            $bindings = [];
            if ($districtId) {
                $bindings[] = $districtId;
            }
            if ($communeId) {
                $bindings[] = $communeId;
            }

            $geoJson = $query->when(count($bindings) > 0, function ($query) use ($bindings) {
                return $query->setBindings($bindings);
            })->first();

            return json_decode($geoJson->features ?? '[]');

            // Ensure valid GeoJSON
            if (is_string($geoJson)) {
                $geoJson = json_decode($geoJson);
            }
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception("Invalid GeoJSON returned from database");
            }

            return $geoJson;
        }

        if ($layer === 'industrial_designs') {
            $districtId = $request->input('district_id');
            $communeId = $request->input('commune_id');

            // Build the query based on the presence of districtId and communeId
            $query = DB::table(DB::raw("(SELECT
                'FeatureCollection' AS TYPE,
                array_to_json(array_agg(f)) AS features
            FROM (
                SELECT
                    'Feature' AS TYPE,
                    ST_AsGeoJSON(i.geom)::json AS geometry,
                    row_to_json((
                        SELECT
                            i FROM (
                                SELECT
                                    i.id, 
                                    i.commune_id, 
                                    i.name AS name,
                                    'industrial_designs' AS layer
                            ) AS i
                    )) AS properties
                FROM
                    industrial_designs i
                    " . ($districtId ? "JOIN map_communes c ON i.commune_id = c.id WHERE c.district_id = ?" : "") . "
                    " . ($communeId ? "AND i.commune_id = ?" : "") . "
                GROUP BY
                    i.id
            ) AS f
            ) AS fc"));

            // Set bindings if needed
            $bindings = [];
            if ($districtId) {
                $bindings[] = $districtId;
            }
            if ($communeId) {
                $bindings[] = $communeId;
            }

            $geoJson = $query->when(count($bindings) > 0, function ($query) use ($bindings) {
                return $query->setBindings($bindings);
            })->first();

            return json_decode($geoJson->features ?? '[]');

            // Ensure valid GeoJSON
            if (is_string($geoJson)) {
                $geoJson = json_decode($geoJson);
            }
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception("Invalid GeoJSON returned from database");
            }

            return $geoJson;
        }

        if ($layer === 'science_innovations') {
            $districtId = $request->input('district_id');
            $communeId = $request->input('commune_id');

            // Build the query based on the presence of districtId and communeId
            $query = DB::table(DB::raw("(SELECT
                'FeatureCollection' AS TYPE,
                array_to_json(array_agg(f)) AS features
            FROM (
                SELECT
                    'Feature' AS TYPE,
                    ST_AsGeoJSON(si.geom)::json AS geometry,
                    row_to_json((
                        SELECT
                            si FROM (
                                SELECT
                                    si.id, 
                                    si.commune_id, 
                                    si.name AS name,
                                    'science_innovations' AS layer
                            ) AS si
                    )) AS properties
                FROM
                    science_innovations si
                    " . ($districtId ? "JOIN map_communes c ON si.commune_id = c.id WHERE c.district_id = ?" : "") . "
                    " . ($communeId ? "AND si.commune_id = ?" : "") . "
                GROUP BY
                    si.id
            ) AS f
            ) AS fc"));

            // Set bindings if needed
            $bindings = [];
            if ($districtId) {
                $bindings[] = $districtId;
            }
            if ($communeId) {
                $bindings[] = $communeId;
            }

            $geoJson = $query->when(count($bindings) > 0, function ($query) use ($bindings) {
                return $query->setBindings($bindings);
            })->first();

            return json_decode($geoJson->features ?? '[]');

            // Ensure valid GeoJSON
            if (is_string($geoJson)) {
                $geoJson = json_decode($geoJson);
            }
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new \Exception("Invalid GeoJSON returned from database");
            }

            return $geoJson;
        }
    }
}
