<?php

namespace App\Http\Controllers;

use App\Http\Requests\WaifuRequest;
use Illuminate\Http\Request;
use App\Models\WaifuModel;
use Facade\FlareClient\View;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Support\Facades\DB;

class WaifuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
        $this->middleware('is_admin');
    }


    public function create() {
        return view('waifu.create');
    }

    public function edit($id) {
        $data = WaifuModel::find($id);

        return view('waifu.edit', compact('data'));
    }

    public function index(Request $request) {

        if($request->search) {
            $result = WaifuModel::where('waifu', 'LIKE', "%$request->search%")->paginate(3);
            return view('waifu.index', [
                'waifus' => $result,
            ]);
        }

        $result = WaifuModel::paginate(3);
        return view('waifu.index', [
            'waifus' => $result,
        ]);


    }

    public function show($id) {

       $result = WaifuModel::find($id);
       return $result;

    }

    public function store(WaifuRequest $request) {

        WaifuModel::create([
            'waifu' => $request->waifu,
            'anime' => $request->anime
        ]);

        return redirect('/waifu');
    }

    public function update(WaifuRequest $request, $id) {

        $result = WaifuModel::find($id);

        $result->update([
            'waifu' => $request->waifu,
            'anime' => $request->anime
        ]);

        return redirect('/waifu');

    }

    public function destroy($id) {
        $result = WaifuModel::find($id);
        $result->delete();

        return redirect('/waifu');

        // if($result == 1) {
        //     return 'success';
        // } else {
        //     return 'failed';
        // }
    }
}
