<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

//    public $routes;

    public function get()
    {
        $result = DB::table('routes')
            ->select('date', 'from', 'to', 'name', 'weight')
            ->join('loads', 'routes.load_id', '=', 'loads.id')
            ->get()
            ->toArray();

        return new JsonResponse($result);
    }

    public function create(Request $request)
    {
        echo $request->get('name');
        exit;
        DB::table('loads')->insert(
            ['name' => $name,
                'weight' => $weight,]
        );

        DB::table('routes')->insert(
            ['from' => $from,
                'to' => $to,
                'date' => $date,
                'load_id' => DB::table('loads')->select('id')->where('name', $name)->orderBy('id', 'desc')
                    ->take(1)->get(),
            ]
        );
    }
}
