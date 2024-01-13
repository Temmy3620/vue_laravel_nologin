@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-4 sidebar">
      <div id="app"></div>
        <h2>Coment Analysis</h2>
        <p>Your main content goes here.</p>

        
        <input class="form-control form-control-sm mt-4" type="text" placeholder="XXXX/XX/XX XX:XX:XX"/>
        <input class="form-control form-control-sm mt-1" type="text" placeholder="XXXX/XX/XX XX:XX:XX"/>
        
        <div class="dropdown mt-5">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown sort
            </a>
          
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <button type="button" class="btn btn-secondary mt-5">+ add search from</button>
        <div class="space-5"></div>
        <button type="button" class="btn btn-secondary">Secondary</button>

        
    </div>
  
    <div class="col-8 ms-auto px-md-4" data-bs-theme="dark">
        <div class="d-flex flex-column align-items-stretch flex-shrink-0 w-100" style="width: 380px;">
            <div class="list-group list-group-flush border-bottom scrollarea">
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small>Wed</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
        
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Wed</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Wed</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Wed</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Tues</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
              <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                <div class="d-flex w-100 align-items-center justify-content-between">
                  <strong class="mb-1">List group item heading</strong>
                  <small class="text-muted">Mon</small>
                </div>
                <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the heading and date.</div>
              </a>
            </div>
          </div>
    </div>
  </div>


  
@endsection