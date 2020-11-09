@extends('layouts.app')
@inject('model', 'App\Models\City')
@inject('governorates', 'App\Models\Governorate')
@section('content')
<!-- Content Header (Page header) -->
@section('page_title')
    Cities
@endsection
@section('small_title')
    list of cities
@endsection


  <!-- Main content -->
  <section class="content">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Add New City</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">

            {!! Form::model($model,[
               'action'=> 'CitiesController@store'
            ]) !!}
            <div class="form-group">
                <label for="name">Name</label>
                {!! Form::text('name', null , [
                    'class' =>'form-control'
                ]) !!}
            </div>
            <div class="form-group">
              <label for="governorate">Governorate</label>
              {!! Form::select('governorate',$governorates->pluck('name'),1
               , [
                  'class' =>'form-control'
              ]) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Add', [
                    'class' => 'btn btn-primary'
                ]) !!}
            </div>
            {!! Form::close() !!}

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            @include('partials.validation_errors')
        </div>
        <!-- /.card-footer-->
      </div>
  </section>
  <!-- /.content -->

@endsection
