@extends('landing.layout.main')
@section('container')
<div class="row justify-content-center bg-image mx-0 mb-5">
    <div class="col-lg-6">
        <div class="bg-white p-5 my-5">
            <h1 class="text-center mb-4">Register New Account</h1>
            <form action="" method="POST">
                <div class="form-row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="padding: 30px 20px;">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="padding: 30px 20px;">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control bg-light border-0" placeholder="Your Address" style="padding: 30px 20px;">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="number" class="form-control bg-light border-0" placeholder="Your Phone Number" style="padding: 30px 20px;">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="password" class="form-control bg-light border-0" placeholder="Your Password" style="padding: 30px 20px;">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-success btn-block" type="submit" style="height: 60px;">Register Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
