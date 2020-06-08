<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\single;
class singlescontroller extends Controller
{
    public function store(Request $request){
        //dd($request::all());
        $single = new single;
        
        $this->validate($request,[
            'player1'=>'required',
            'player2'=>'required',
            'player1score'=>'required',
            'player2score'=>'required',

        ]);

        $single->player1=$request->player1;
        $single->player2=$request->player2;
        $single->player1score=$request->player1score;
        $single->player2score=$request->player2score;

        $single->save();
        $data=single::all();
        return view('singles')->with('singles',$data);
    }

    public function deletesingle($id){
        $singles=single::find($id);
        $singles->delete();
        return redirect()->back();

    }

    public function updatesingleview($id){
        $singles=single::find($id);
        return view('updatesingle')->with('singlesdata',$singles);

    }

    public function updatesingle(Request $request){

        $player1=$request->player1;
        $player2=$request->player2;
        $player1score=$request->player1score;
        $player2score=$request->player2score;

        $single->save();
        $data=single::all();
        return view('singles')->with('singles',$data);

    }
}