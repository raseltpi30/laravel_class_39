@extends('layout.primary')

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center mt-5">        
        <div class="col-xl-10 col-lg-12 col-md-9">
            @if (session('message'))
                <div class="alert alert-success">
                    {{session('message')}}
                </div>                        
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>      
            </div>  
        @endif
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                </div>
                                {!! Form::open([ 'route' => 'login.confirm', 'method' => 'post' ]) !!}
                                    <div class="form-group">
                                        {{ Form::email('email',NULL,['class' => 'form-control form-control-user','placeholder' => 'Enter Email Address...'])}}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::password('password',['class' => 'form-control form-control-user','placeholder' => 'Password','id' => 'exampleInputPassword'])}}
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <input type="submit" value="Login" name="login" class="btn btn-primary btn-user btn-block">

                                {!! Form::close() !!}

                                <hr>
                                <div class="text-center">
                                    <a href="{{ url('register')}}">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>