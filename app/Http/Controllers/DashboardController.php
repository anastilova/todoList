<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class DashboardController extends Controller
{
    public function index() {
        $tasks = Task::where('user_id', Auth()->user()->id)->get();

        return view('dashboard', ['tasks'=> $tasks]);
    }
}
