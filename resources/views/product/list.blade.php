@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btnsuccess" href="{{ route('product/register') }}" role="button"> {{ __('New Product') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Product list') }}
 </div>
 <div class="card-body">
 <table border="1"  class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr bgcolor="lightgreen">
 
 <th><i>
 id
 </th></i>
<th><i>
 Product
 </th></i>
<th><i>
 unit
 </th></i>
 <th><i>
 price
 </th><i>
 <th><i>
 quantity
 </th></i>
 <th>Operation perform</th></i>
 </tr>
 </thead>
 <tbody bgcolor="lightblue">
 @foreach($product as $product)
 <tr>
 <td> {{ $product->id }}</td>
 <td> {{ $product->name }}</td>
 <td> {{ $product->unit }}</td>
 <td> {{ $product->price }}</td>
 <td> {{ $product->quantity}}</td>
 <td>
 <a class="btn btn-xs btninfo" title="Detail" href="/product/search/{{ $product->id }}">Details</a>
 <a class="btn btn-xs btnsuccess" title="Edit" href="/product/edit/{{$product->id }}">Edit</a>
 <a class="btn btn-xs btndanger" title="Delete" href="/product/delete/{{ $product->id }}">Delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection