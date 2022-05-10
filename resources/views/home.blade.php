@extends('templates/base')

@section('pageTitle', 'Home')

@section('content')
    <div class="card">
        @foreach ($carList as $car)
            <h2>{{ $car->brand }}</h2>
            <p>{{ $car->model }}</p>
            <p>{{ $car->year }}</p>
        @endforeach
        {{ $carList->links() }}
    </div>
@endsection
