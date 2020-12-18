@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>Create New User</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
</div>
</div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your input.<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="container">

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <strong>Nmae:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>

            <div class="col-md-12">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>

            <div class="col-md-12">
                <strong>Password:</strong>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>

            <div class="col-md-12">
                <strong>Email:</strong>
                <input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Role Name:</strong>
                {!! Form::select('roles-name[]', $roles,[], array('class' => 'form-control','multiple')) !!}
               
                </div>
            </div>

           
            <div class="col-lg-12">
                <label class="form-label">حالة المستخدم</label>
                <select name="status" id="select-beast" class="form-control  nice-select  custom-select">
                    <option value="مفعل">مفعل</option>
                    <option value="غير مفعل">غير مفعل</option>
                </select>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
           

        </div>
    </form>



   
</div>


<p class="text-center text-primary"><small>Tutorial by rscoder.com</small></p>
@endsection