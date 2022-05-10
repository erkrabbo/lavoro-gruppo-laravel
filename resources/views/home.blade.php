@extends('templates/base')

@section('pageTitle', 'Home')

@section('content')
    <div class="container">
        @foreach ($carList as $car)
            <div class="card">
                <h2>{{ $car->brand }}</h2>
                <p>{{ $car->model }}</p>
                <p>{{ $car->year }}</p>
            </div>
        @endforeach
        {{ $carList->links() }}
    </div>
@endsection
