<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return view('welcome', ['todos' => Todo::latest()->get()]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        //If you want, you can validate data

        $todo = new Todo();
        $todo->title = $request->title;
        $todo->save();

        return back();
    }
}
