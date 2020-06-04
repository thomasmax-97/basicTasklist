<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use App\Task;




class TasksController extends Controller
{
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|max:255',
        ]);

        if ($validate->errors()) {
            return redirect('/')
                ->withErrors($validate)
                ->withInput();
        } else {
            $task = new Task;
            $task->name = $request->name;
            $task->save();
            return redirect('/');
        }
    }
}
