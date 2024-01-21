@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-4 sidebar">
      
      <h2>Coment Analysis</h2>
      <p>Let's enjoy!!</p>

      <form method="get" action="{{ route('threads.index') }}">
        @csrf
        <div class="mt-5">
          <button type="submit" class="btn btn-secondary" @submit.prevent="submitData">Search<i class="ms-2 fas fa-search"></i></button>
        </div>

        <div class="input-group mt-5">
          <input type="date" class="form-control" name="start_date_at" value="{{ $startDate }}">
          <span class="input-group-text">:</span>
          <input type="time" class="form-control" name="start_time" value="{{ $startTime }}">
        </div>

        <div class="input-group mt-1">
          <input type="date" class="form-control" name="end_date_at" value="{{ $endDate }}">
          <span class="input-group-text">:</span>
          <input type="time" class="form-control" name="end_time" value="{{ $endTime }}">
        </div>

        <select class="form-select form-select-sm mt-5 w-50" name="select_order" aria-label=".form-select-sm example">
          <option value="desc" {{ $sortOrder == 'desc' ? 'selected' : '' }}>new date</option>
          <option value="asc" {{ $sortOrder == 'asc' ? 'selected' : '' }}>old date</option>
          
        </select>

        <div id="app" class="mt-5"></div>

        <div class="space-5"></div>
      </form>
        

        
    </div>
  
    <div class="col-8 ms-auto px-md-4" data-bs-theme="dark">
        <div class="d-flex flex-column align-items-stretch flex-shrink-0 w-100" style="width: 380px;">
            <div class="list-group list-group-flush border-bottom scrollarea">
              @if(!empty($threads))
                @foreach ($threads as $thread)
                  <div class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                      <strong class="mb-1">{{ $thread->date_and_time }}</strong>
                      <small>{{ $thread->thread_title }}</small>
                    </div>
                    <div class="col-10 mb-1 small">{{ $thread->comment }}</div>
                  </div>  
                @endforeach
                      
              @endif
              
              
            </div>
          </div>
    </div>
  </div>


  
@endsection