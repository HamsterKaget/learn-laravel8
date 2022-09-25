<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    private $tasklist = [
        'first' => 'Sakurajima',
        'second' => 'Chizuru',
        'third' => 'Chisato'
    ];

    public function index(Request $request) {

        if($request->search) {
            $result = DB::table('waifu')->
            where('waifu', 'LIKE', "%$request->search%")->
            get();

            return $result;
        } else {
            return DB::table('waifu')->get();

        }

        // if($request->search) {
        //     $result = DB::select("select * from waifu where waifu like '%?%'", [$request->search]);
        //     return $result;
        // }

        // $result = DB::select('select * from waifu');

        // return $result;

    }

    public function show($id) {

       $result = DB::table('waifu')->
       where('id', $id)->first();
       ddd($result);

    }

    public function store(Request $request) {
        DB::table('waifu')->insert([
            'waifu' => $request->waifu,
            'anime' => $request->anime
        ]);

        return 'success';
    }

    public function update(Request $request, $id) {
        $result = DB::table('waifu')->where('id', $id)->update([
            'waifu' => $request->waifu,
            'anime' => $request->anime
        ]);

        if($result == 1) {
            return 'success';
        } else {
            return 'failed';
        }

    }

    public function destroy($id) {
        $result = DB::table('waifu')->where('id', $id)->delete();

        if($result == 1) {
            return 'success';
        } else {
            return 'failed';
        }
    }
}
