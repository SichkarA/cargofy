<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Loads;
use App\Routes;

class RouteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $load_id;

    public function get(Routes $routes)
    {
        return view('cargofy')->with(['stdClass' => $routes->get(),
                                            'total' => $routes->getTotal()]);
    }
    public function create(Request $request, Loads $loads, Routes $routes)
    {
        $loads->create($request);
        $this->load_id = $loads->getCurrentId();

        $routes->create($request, $this->load_id);
    }
}