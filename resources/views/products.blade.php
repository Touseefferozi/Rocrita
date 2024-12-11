@extends('layouts.master')
@section('content')

    <a  href="/products/"class="btn btn-warning btn-sm">Products</a>
    <a  href="/create/"class="btn btn-warning btn-sm">Create</a>

    <br>
    <h1 class="text-center">Product List</h1>
    
    <div class="Container">
        <div class="text-right">
            <a href="/create" class="btn btn-dark mt-2">New Product
            </a>
        </div>
    </div>
    
    <div class="container">
        
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Sno.</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
            
                @foreach ($products as $product)
                                                                                            
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->price}}</td>

                <td>


                    <img src="/product/{{$product->image}}" class="rounded-circle" width="50" height="50"/>
                    </td>
                    {{-- <td>john@example.com</td> --}}

                    <td> 
                    <a href="/products/{{ $product->id }}/edit" class="btn btn-dark btn-sm" >Edit</a>

                    {{-- <a href="/products/{{ $product->id }}/delete" class="btn btn-danger btn-sm">Delete</a>
                     </td> --}}


                    <form  method="POST" class="d-inline" action="/products/{{ $product->id }}/delete">
                    @csrf
                    @method('Delete')
                                                
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    
                    </form>
        
                </tr>
                
            
                     @endforeach
            </tbody>
        </table>
    </div>




   
       
   @endsection
