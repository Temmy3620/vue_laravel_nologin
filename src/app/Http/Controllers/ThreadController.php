<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ThreadController extends Controller
{
    public function index(Request $request)
    {
        
        $startDate = $request->input("start_date_at") ?? null;
        $startTime = $request->input("start_time") ?? null;
        $endDate = $request->input("end_date_at") ?? null;
        $endTime = $request->input("end_time") ?? null;
        $sortOrder = $request->input("select_order") ?? null;
        $searchForms = $request->input("searchForms") ?? null;
        

        $query = Thread::query();
        
        if (!empty($startDate) && !empty($startTime)) {
            $query->where('date_and_time', '>=', $startDate . " " . $startTime . ":00");

        }else if (!empty($startDate)) {
            $query->where('date_and_time', '>=', $startDate);
        
        }

        if (!empty($endDate) && !empty($endTime)) {
            $query->where('date_and_time', '<=', $endDate . " " . $endTime . ":99");
        }else if (!empty($endDate = $request->input("end_date_at"))) {
            $query->where('date_and_time', '<=', $endDate);
            
        }

        if(!empty($searchForms)){
            $query->where(function ($query) use ($searchForms) {
                foreach ($searchForms as $keyword) {
                    $query->orWhere('comment', 'like', '%' . $keyword . '%');
                }
            });
        }

        if (!empty($sortOrder)) {
            $query->orderBy('date_and_time', $sortOrder);
        }

        $threads = $query->paginate(50)
        ->appends([
            'start_date_at' => $startDate,
            'start_time' => $startTime,
            'end_date_at' => $endDate,
            'end_time' => $endTime,
            'select_order' => $sortOrder,
            'searchForms' => $searchForms
        ]);
        
        return view('threads.index',compact('threads', 'startDate', 'startTime', 'endDate', 'endTime', 'sortOrder'));


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
