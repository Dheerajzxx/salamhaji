@extends('layouts.app')

@section('title')
Food Category | 
@endsection

@section('style')
  @include('layouts.includes.datatablesCss') 
@endsection

@section('content')
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Manage Food Category</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
            <li class="breadcrumb-item active">Food Category</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid">  
    <div class="card mb-0">
      <div class="card-header">
        <a href="{{route('food_category.create')}}" class="btn btn-warning " style=""><i class="fas fa-user-plus"></i> Add Food Category</a>
      </div>
      <div class="card-body">
        {!! $dataTable->table(['class' => 'table table-bordered table-dark table-striped dataTable dtr-inline'], false) !!}
      </div>
    </div>
  </div>    
@endsection

@section('script')
  @include('layouts.includes.datatablesJs') 
  @include('layouts.includes.deleteFunction')
@endsection