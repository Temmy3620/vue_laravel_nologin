@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-4 sidebar">
      
        <h2>Coment Analysis</h2>
        <p>Let's enjoy!!</p>
        <div class="d-flex flex-row-reverse">
          <button type="button" class="btn btn-secondary">Search</button>
        </div>
        
        <input class="form-control form-control-sm mt-5" type="text" placeholder="XXXX/XX/XX XX:XX:XX"/>
        <input class="form-control form-control-sm mt-1" type="text" placeholder="XXXX/XX/XX XX:XX:XX"/>
        
        <select class="form-select form-select-sm mt-5 w-50" aria-label=".form-select-sm example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
        
        <div id="app" class="mt-5"></div>
        
        <div class="space-5"></div>
        

        
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