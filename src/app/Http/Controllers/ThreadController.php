<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ThreadController extends Controller
{
    public function index(Request $request)
    {
        
        //$start_time = $request->input("start_time");
        //dd($start_time);

        $query = Thread::query();
        
        if (!empty($startDate = $request->input("start_date_at")) && !empty($startTime = $request->input("start_time"))) {
            $query->where('date_and_time', '>=', $startDate . " " . $startTime . ":00");

        }else if (!empty($startDate = $request->input("start_date_at"))) {
            $query->where('date_and_time', '>=', $startDate);
        
        }

        if (!empty($endDate = $request->input("end_date_at")) && !empty($endTime = $request->input("end_time"))) {
            $query->where('date_and_time', '<=', $endDate . " " . $endTime . ":99");
        }else if (!empty($endDate = $request->input("end_date_at"))) {
            $query->where('date_and_time', '<=', $endDate);
            
        }

        if (!empty($sortOrder = $request->input("select_order"))) {
            $query->orderBy('date_and_time', $sortOrder);
        }
        
        $threads = $query->get();

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
