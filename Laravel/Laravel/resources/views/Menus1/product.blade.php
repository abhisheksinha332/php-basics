@extends('Menus1.layout')

@section('title')
Product
@endsection

@section('content')
<div class="content">
<div class="title m-b-md">
    Products
</div>
</div>


@for($i=0;$i<count($product);$i++)
{{$product[$i]['brand']}},
{{$product[$i]['type']}},
{{$product[$i]['cost']}},
<br/>

@endfor


@endsection
