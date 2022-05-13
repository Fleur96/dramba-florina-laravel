<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function remove($task)
  {

    $task = Task::find($task);


    $task->delete($task);

    return view('delete');
  }

}
