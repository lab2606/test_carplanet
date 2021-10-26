@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Personal Information') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Please complete your information') }}
                    <form action="/saveUser" method="POST">  
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Your name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputFather" class="col-sm-2 col-form-label">Father's last name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputFather " placeholder="Your father´s last name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputMother" class="col-sm-2 col-form-label">Mother's last name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputMother " placeholder="Your mother´s last name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPhone" class="col-sm-2 col-form-label">Phone number </label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPhone " placeholder="Your phone number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
