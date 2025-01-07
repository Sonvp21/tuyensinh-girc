<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class MapController extends Controller
{
    public function index()
    {
        return view('web.map.index');
    }

    public function layer($layer)
    {
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
                                districts d
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
                                                communes c
                                                JOIN districts d ON d.id = c.district_id::INTEGER
                                            GROUP BY
                                                c.id,
                                                d.id) AS f) AS fc");
                });

            $geoJson = collect($geoJson)->first();

            return json_decode($geoJson->data);
        }

        if ($layer === 'vung_trongs') {
            $geoJson =
                Cache::rememberForever('vung_trongs', function () {
                    return DB::select("SELECT
                        row_to_json(fc) AS data
                    FROM (
                        SELECT
                            'FeatureCollection' AS TYPE,
                            array_to_json(array_agg(f)) AS features
                        FROM (
                            SELECT
                                'Feature' AS TYPE,
                                ST_AsGeoJSON(vt.geom)::json AS geometry,
                                row_to_json((
                                    SELECT
                                        p FROM (
                                            SELECT
                                                vt.id, vt.dt_ha, vt.chuc_nang, vt.khoanh, vt.tieu_khu, vt.pcph, vt.chi_tra, vt.chu_sudung, vt.ma_chusd, 'vung_trongs' layer) AS p)) AS properties
                            FROM
                                vung_trongs vt
                            GROUP BY
                                vt.id, vt.dt_ha, vt.chuc_nang, vt.khoanh, vt.tieu_khu, vt.pcph, vt.chi_tra, vt.chu_sudung, vt.ma_chusd, vt.geom) AS f) AS fc");
                });
        
            $geoJson = collect($geoJson)->first();
        
            return json_decode($geoJson->data);
        }        
    }

    public function indexSidebar()
    {
        return view('web.map.index-sidebar');
    }
}
