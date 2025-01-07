<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Admin\Commune;
use App\Models\Admin\District;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use App\Traits\Filterable;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    use Filterable;

    public function show($id)
    {
        $products = Product::findOrFail($id);

        return view('web.searchs.products.show', compact('products'));
    }


    public function search(Request $request)
    {
        $districts = District::pluck('name', 'id')->toArray();
        $communes = Commune::pluck('name', 'id')->toArray();
        $uniqueSubmissionYears = Product::select(DB::raw('DISTINCT EXTRACT(YEAR FROM submission_date) as year'))
            ->orderBy('year')
            ->pluck('year')
            ->toArray();

        $query = Product::query();
        $filters = ['district_id', 'commune_id', 'name', 'owner', 'representatives', 'submission_date'];
        $query = $this->applyFilters($request, $query, $filters);

        // Order by updated_at in descending order
        $products = $query->with('commune.district')->orderBy('updated_at', 'desc')->paginate(10);

        if ($request->ajax()) {
            return view('web.searchs.products.ajax_list', compact('products'))->render();
        }

        return view('web.searchs.products.index', compact(
            'products',
            'districts',
            'communes',
            'uniqueSubmissionYears'
        ));
    }

    public function ajaxList(Request $request)
    {
        $query = Product::query();
        $filters = ['district_id', 'commune_id', 'name', 'owner', 'representatives', 'submission_date'];
        $query = $this->applyFilters($request, $query, $filters);

        // Order by updated_at in descending order
        $products = $query->with('commune.district')->orderBy('updated_at', 'desc')->paginate(10);

        return view('web.searchs.products.ajax_list', compact('products'))->render();
    }
}
