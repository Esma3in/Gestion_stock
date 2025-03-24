@extends('layouts.app')

@section('content')
    <div>
        <h1>total clients</h1>
        <h3>{{$totalCustomers}}</h3>
    </div>

    <div>
        <h1>total fournisseur</h1>
        <h3>{{$totalSuppliers}}</h3>
    </div>
    <div>
        <h1>links</h1>
        <ul>
            <li><a href="{{route('customers')}}">clients</a></li>
            <li><a href="{{route('suppliers')}}">suppliers</a></li>
            <li><a href="{{route('products')}}">products</a></li>
        </ul>
    </div>