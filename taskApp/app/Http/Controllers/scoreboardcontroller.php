<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scoreboardcontroller extends Controller
{
    public function store(Request $request){
        $player1=new player1;
        $player2=new player2;
        $p1score=new player1score;
        $p2score=new player2score;
        $this->validate($request,[
            'player1'=>'required',
            'player2'=>'required',
            'player1score'=>'required',
            'player2score'=>'required'
            
        ]);
        $player1->scoreboard=$request->player1;
        $player2->scoreboard=$request->player2;
        $player1score->scoreboard=$request->player1score;
        $player2score->scoreboard=$request->player2score;
        $player1->save();
        $player2->save();
        $player1score->save();
        $player2score->save();
        $data=score::all();
       // dd($data);
        return view('score')->with('scoreboard',$data);
        //dd($request->all());
    
    }
/*
    public function UpdateTaskAsCompleted($id){
        $score=Task::find($id);
        $score->iscompleted=1;
        $score->save();
        return redirect()->back();
    }

    public function UpdateTaskAsNotCompleted($id){
        $score=Task::find($id);
        $score->iscompleted=0;
        $score->save();
        return redirect()->back();
    }

    public function DeleteTask($id){
        $score=Task::find($id);
        
        $task->delete();
        return redirect()->back();
    }

    public function UpdateTaskView($id){
        $task=Task::find($id);
        
        return view('updatetask')->with('taskdata',$task);
    }

    public function UpdateTask(Request $request){
        $id=$request->id;
        $task=$request->task;
        $data=Task::find($id);
        $data->task=$task;
        $data->save();
        $datas=Task::all();
        return view('task')->with('tasks',$datas);

    }*/

}
