<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ThreadController extends Controller
{
    public function index()
    {
        $threads = Thread::all();
        return view('threads.index',compact('threads'));
    }
    
    public function search(Request $request)
    {
        $start_date = $request->input("start_date_at");
        $start_time = $request->input("start_time");
        $order_date = $request->input("order_date");
        $search_forms = $request->input("searchForms");
        dd($search_forms);
    }
}
