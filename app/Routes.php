<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Loads;

class Routes extends Model
{
    public function get()
    {
        $result = DB::table('routes')
            ->select('date', 'from', 'to', 'name', 'weight')
            ->join('loads', 'routes.load_id', '=', 'loads.id')
            ->get()
            ->toArray();
        return $result;
    }

    public function getTotal()
    {
        $total = DB::table('routes')
            ->count('id');
        return $total;
    }

    public function create($request, $load_id)
    {
        DB::table('routes')->insert(
            ['from' => $request->get('from'),
                'to' => $request->get('to'),
                'date' => $request->get('date'),
                'load_id' => $load_id[0]->id,
            ]
        );
    }
}
