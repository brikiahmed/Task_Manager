<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class taskController extends Controller
{
    function add(Request $request, $status){
        $title = $request->input('title');
        $status= $request->input('status');
        $date=$request->input('date');

        $task = new task();
        $task->title = $title;
        $task->status = $status;
        $task->date = $date;
        $task->save();

        return task;
    }
}
