@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="container py-5">
        @if(session('username'))
            <div class="alert alert-info">
                Welcome, <strong>{{ session('username') }}</strong>!
            </div>
        @endif
    <div class="card shadow">
        <div class="card-body">
            <div class="">
                <h5 style="text-align: center;">Profile Information</h5>
                <hr>
                <div class="align-items-center">
                    <p class="mb-0">Email Address: user@gmail.com</p>
                    <button class="btn btn-link p-0 text-decoration-none" style="color: #4a6baf; font-size:x-small; "
                        data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">Forgot Password?
                    </button>
                </div>
                <p class="mt-2">Birthday : Dec 30, 2000</p>

            </div>
        </div>
    </div>
</div>
@endsection