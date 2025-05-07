@extends('layouts.app')

@section('title', 'Pengelolaan')

@section('content')
<div class="container py-0">
    <div class="card-header text-center" style="color:darkred; background-color: white;">
        <h4 class="mb-4">Look for more interesting information!</h4>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead class="table-light text-center" style="color: white;">
                        <tr>
                            <th width="10%">Bulan</th>
                            <th width="25%">Birth Flower</th>
                            <th>Funfact</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr>
                            <td><strong>{{ $item['id'] }}</strong></td>
                            <td>{{ $item['name'] }}</td>
                            <td>{{ $item['ff'] }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection