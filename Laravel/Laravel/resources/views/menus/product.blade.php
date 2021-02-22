@extends('menus.app')

@section('title','Product')

@section('content')
<h1>This is Product Page</h1>
<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.o8_9Vqm4PUhuoqOItqyWUwHaEi%26pid%3DApi&f=1" />
<img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse1.mm.bing.net%2Fth%3Fid%3DOIP.jx7CEZ3r4X9G9RCilywwDgHaD4%26pid%3DApi&f=1" />
@forelse($products as $product)
    <li>{{$product}}</li>
@empty
    List is empty

@endforelse

@endsection
