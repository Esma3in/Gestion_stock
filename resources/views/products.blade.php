@extends('layouts.app')

@section('content')

    <div>
        header
        <h1>total produits : {{$totalProducts}}</h1>
    </div>
    <div>
        @foreach ($produits as $pr)
            <h2>{{$pr->product_name}}</h2>
            <h2>{{$pr->price}}</h2>
            <h2>{{$pr->type}}</h2>
        @endforeach
    </div>
    <div>
        footer
    </div>
@endsection