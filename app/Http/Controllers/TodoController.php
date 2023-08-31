<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index($todo_id = null)
    {
        $todo = null;
        if ($todo_id != null) {
            $todo = Todo::whereId($todo_id)->first();
        }
        return view(
            'welcome',
            [
                'todo' => $todo,
                'todos' => Todo::latest()->get()
            ]
        );
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

    public function update(Request $request, $todo_id)
    {
        $todo = Todo::findOrFail($todo_id);

        $todo->title = $request->title;
        $todo->save();

        return redirect('/');
    }
}
