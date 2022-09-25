<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaifuModel;
use Illuminate\Support\Facades\DB;

class WaifuController extends Controller
{
    private $tasklist = [
        'first' => 'Sakurajima',
        'second' => 'Chizuru',
        'third' => 'Chisato'
    ];


    public function create() {
        return view('waifu.create');
    }

    public function edit() {
        return view('waifu.edit');
    }

    public function index(Request $request) {

        if($request->search) {
            $result = WaifuModel::where('waifu', 'LIKE', "%$request->search%")->get();

            return $result;
        } else {
            return WaifuModel::get();
        }

        // if($request->search) {
        //     $result = DB::select("select * from waifu where waifu like '%?%'", [$request->search]);
        //     return $result;
        // }

        // $result = DB::select('select * from waifu');

        // return $result;

    }

    public function show($id) {

       $result = WaifuModel::find($id);
       return $result;

    }

    public function store(Request $request) {
        WaifuModel::create([
            'waifu' => $request->waifu,
            'anime' => $request->anime
        ]);

        return 'success';
    }

    public function update(Request $request, $id) {
        $result = WaifuModel::find($id);

        $result->update([
            'waifu' => $request->waifu,
            'anime' => $request->anime
        ]);

        return $result;
        // if($result == 1) {
        //     return 'success';
        // } else {
        //     return 'failed';
        // }

    }

    public function destroy($id) {
        $result = WaifuModel::find($id);
        $result->delete();

        return "Succes";

        // if($result == 1) {
        //     return 'success';
        // } else {
        //     return 'failed';
        // }
    }
}
