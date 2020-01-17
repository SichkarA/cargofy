<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\JsonResponse;

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
//        return new JsonResponse($result);
//        $result = json_encode($result);
        return (new JsonResponse($result));

    }
    public function create(Request $request)
    {
//        print_r($request);
        DB::table('loads')->insert(
            ['name' => $request->get('name'),
                'weight' => $request->get('weight'),]
        );
        $load_id = DB::table('loads')
            ->select('id')
//                    ->where('name', "=", "$request->get('name')")
            ->orderBy('id', 'desc')
            ->take(1)
            ->get()
            ->toArray();
//        $load_id = $load_id['id'];

        /*
         [items:protected] => Array
        (
        [0] => stdClass Object
        (
        [id] => 17
        )

        )

         */
        DB::table('routes')->insert(
            ['from' => $request->get('from'),
                'to' => $request->get('to'),
                'date' => $request->get('date'),
                'load_id' => $load_id[0]->id,
            ]
        );

    }
}