<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Task as Task;
use App\Name as Name;


class HomePageController extends Controller
{

    public function welcome(){
        return view('welcome');
    }

    public function login(){
        return view('login');
    }

    public function addTask(Request $request){

        $task = new Task();
        $task->serial_no = (int)$request->get('serialNo');
        $task->date = $request->get('date');
        $task->receive_date = $request->get('dateToHandle');
        $task->paper_hndlr = $request->get('paperHndlr');
        $task->name = $request->get('task');
        $task->desc = $request->get('description');
        $task->notes = $request->get('notes');
        $task->save();

        $taskd = DB::table('tasks')->where([
            ['name', $request->get('task')],
            ['desc', $request->get('description')],
            ['notes', $request->get('notes')]
        ])->value('id'); //get the task id

        $attend_name = explode("#",$request->get('attend'));


        for ($i = 0; $i < count($attend_name); $i++){

            $name = new Name();
            $name->task_id = $taskd;
            $name->name = $attend_name[$i];
            $name->attendance = 1;
            $name->save();
        }

        $absent_name = explode("#",$request->get('absent'));

        for ($i =0; $i < count($absent_name); $i++){

            $name = new Name();
            $name->task_id = $taskd;
            $name->name = $absent_name[$i];
            $name->attendance = 0;
            $name->save();
        }


        return view('success', compact('taskd'));
    }

    public function generatePDF(){

        $names = DB::table('names')->get();
        $tasks = DB::table('tasks')->orderBy('date','asc')->get();
        $attend = array();
        $absent = array();

        foreach ($names as $name){
            if($name->attendance == 1)
                $attend[] = $name;
            else
                $absent[] = $name;
        }

        return view('report', compact('attend','absent','tasks'));

    }

    public function pdf(){

        return view('pdf');
    }

}
