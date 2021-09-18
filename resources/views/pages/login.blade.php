@extends('layouts.login')
@section('title', 'Login')


@section('content')
    <main>
        <div class="login-container">
            <div class="container">
                <div class="row page-login d-flex align-items-center">
                    <div class="section-left col-12 col-md-6">
                        <h1 class="mb-4">
                            We explore the new <br />life much better
                        </h1>
                        <img src="frontend/images/login-images.png" alt="" class="w-75 d-none d-sm-flex" />
                    </div>
                    <div class="section-right col-12 col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="frontend/images/logo.png" alt="" class="w-50 mb-4" />
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" />
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                                        <label class="form-check-label mb-4" for="exampleCheck1">Remember Me</label>
                                    </div>
                                    <button type="submit" class="btn btn-login btn-block">
                                        Sign In
                                    </button>
                                    <p class="text-center mt-4">
                                        <a href="#">Saya Lupa Password</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
