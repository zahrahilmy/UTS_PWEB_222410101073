@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container">
    <div class="card-body">
            @if(isset($username))
                <div class="alert alert-success">
                    Welcome, <strong>{{ $username }}</strong>!
                </div>
            @endif
    </div>

    <h2 class="text-center mb-5">Find Your Birth Flower!</h2>
    <div class="row justify-content-center g-4">
        @foreach($flowers as $row)
            @foreach($row as $flower)
            <div class="col-xl-6 col-lg-6 col-md-6 mb-4">
                <div class="card flower-card h-100 mx-auto" style="width: 100%; max-width: 420px;">
                    <div class="row g-0 h-100">
                        <div class="col-md-5">
                            <img src="{{ asset('assets/'.$flower['image']) }}" 
                                 class="img-fluid rounded-start h-100" 
                                 alt="{{ $flower['name'] }}"
                                 style="object-fit: cover; min-height: 220px;"
                                 loading="lazy">
                        </div>
                        <div class="col-md-7 d-flex flex-column">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">{{ $flower['name'] }}</h5>
                                <p class="card-text mt-3">
                                    {{ $flower['desc'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @endforeach
    </div>
</div>

@endsection