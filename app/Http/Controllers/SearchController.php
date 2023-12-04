<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if ($request->ajax())
        {
            $output = "";
            $products = DB::table('products')
                ->where('name', 'LIKE', '%'.$request->search.'%')
                ->where('isDelete', '=', 0)
                ->get();
            if ($products)
            {
                foreach ($products as $key)
                {
                    $output.=
                '<form class="search-menu" method="get" action="/detail-product"  enctype="multipart/form-data">
                        <button type="submit" name="id" value="' . $key->id . '">'.
                        '<ul>'.
                        '<li>'.'<img src="' . asset($key->img) . '" style="width: 100px; height: 100px;">'.'</li>'.
                        '<li>'.$key->name.'</li>'.
                        '</ul>'.
                    '</button>
                    </form>';
                }

                return Response($output);
            }
        }
    }

}
