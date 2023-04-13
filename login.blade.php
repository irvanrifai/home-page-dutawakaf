@extends('landing.layout.main')
@section('container')

@section('css_login')
<!-- Font Awesome -->
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/> --}}
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<!-- MDB -->
{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet"/> --}}
{{-- custom bootstrap css --}}
<link href="{{ asset('landing/css/help-login.css') }}" rel="stylesheet">
<style>
    .nav-link {
        color: #696969
    }
</style>
@endsection

<div class="row justify-content-center bg-image mx-0 mb-5">
    <div class="col-lg-6 py-5">
        <div class="bg-transparent pb-5 pt-1 mb-5 mt-1">

            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Register</a>
                </li>
            </ul>
            <hr>
            <!-- Pills navs -->


            {{-- pills content --}}
            <div class="tab-content pt-5">
                <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form action="{{ url('/login') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="username" id="input-username" type="text" class="@error('username') is-invalid @enderror form-control bg-light border-0.25" placeholder="Username" style="padding: 25px 15px;">
                                    @error('username')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="password" id="input-password" type="password" class="@error('password') is-invalid @enderror form-control bg-light border-0.25" placeholder="Password" style="padding: 25px 15px;">
                                    @error('password')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row py-3">
                            <div class="col-sm-4">
                                <button class="btn btn-success btn-block" type="submit" style="height: 40px;">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                    <form action="{{ url('/register') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="name" id="input-name" type="text" class="@error('name') is-invalid @enderror form-control bg-light border-0.25" placeholder="Name" style="padding: 25px 15px;">
                                    @error('name')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="email" id="input-email" type="email" class="@error('email') is-invalid @enderror form-control bg-light border-0.25" placeholder="Email" style="padding: 25px 15px;">
                                    @error('email')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="password" id="input-password_register" type="password" class="@error('password') is-invalid @enderror form-control bg-light border-0.25" placeholder="Password" style="padding: 25px 15px;">
                                    @error('password')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="confirm_password" id="input-confirm_password" type="password" class="form-control bg-light border-0.25" placeholder="Repeat Password" style="padding: 25px 15px;">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input name="username" id="input-username" type="text" class="@error('username') is-invalid @enderror form-control bg-light border-0.25" placeholder="Username" style="padding: 25px 15px;">
                                    @error('username')
                                        <span class="invalid-feedback d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <button class="btn btn-success btn-block" type="submit" style="height: 53px;">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            {{-- pills content --}}
        </div>
    </div>
</div>
@endsection

@section('js_login')
<!-- MDB -->
<script src="{{ asset('landing/js/help-login.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
@endsection
