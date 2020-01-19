<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Loads extends Model
{
    //
    public function create($request)
    {
        DB::table('loads')->insert(
            ['name' => $request->get('name'),
                'weight' => $request->get('weight'),]
        );
    }
    public function getCurrentId(){
        $load_id = DB::table('loads')
        ->select('id')
        ->orderBy('id', 'desc')
        ->take(1)
        ->get()
        ->toArray();

        return $load_id;
    }
}
