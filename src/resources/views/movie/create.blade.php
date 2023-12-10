@extends('layouts.app')

@section('content')

<div class="container py-5">
  <div class="card text-center">
    <div class="card-header">
      Featured
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        
        <form class="d-flex flex-column align-items-center g-3" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
          
          <label for="formFile" class="form-label">File input example</label>
          <input class="form-control" type="file" name="image" id="formFile">
          <button type="submit" class="btn btn-primary mt-3 w-100">Confirm identity</button>
        </form>
    
    </div>
    <div class="card-footer text-body-secondary">
      2 days ago
    </div>
  </div>
</div>


    
@endsection