<?php

namespace App\Http\Controllers;

//use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;



class TasksController extends Controller
{
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|max:255'
        ]);

        if ($validate->errors()) {
            redirect('/')
                ->withErrors($validate)
                ->withInput();
        }

        //Testing

    }
}
