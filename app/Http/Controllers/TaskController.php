<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Illuminate\Support\Facades\Validator;



class TaskController extends Controller
{
    public function create() {
        return view('tasks.create');
    }

    public function store(Request $request) {
        $input = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if($input->fails()){
            return back()->withErrors($input);
        }

        Task::create([
            'title'=> $request ->title,
            'user_id' => Auth()->user()->id,
            'created_at'=>date('Y-m-d H:i:s')
        ]);

        return redirect('/dashboard');
    }

    public function edit($id) {
        return view('tasks.update', ['task'=>Task::find($id)]);
    }

    public function update(Request $request) {
        $input = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        $task = Task::find($request->id);
        $task->title = $request->title;
        $task->save();

        return redirect('/dashboard');


        if($input->fails()){
            return back()->withErrors($input);
        }

        $task->update ($request->title);

        return redirect('/dashboard');
    }

    public function destroy(Request $request) {
        $task = Task::find($request->id);
        $task->delete();

        return redirect('/dashboard');

    }
}
