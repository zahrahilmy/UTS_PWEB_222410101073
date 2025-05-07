@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center container" style="padding-left: 12%; padding-top: 6%;">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header" style="text-align: center; background-color:cornsilk">Login</div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="item">
                        <button type="submit" class="btn " style="background-color:lightslategray;">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection