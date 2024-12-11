@extends('layouts.master')

@section('content')
    <br>
    

  <h1 class="text-center">Product Edit #{{$product->id}}  </h1>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="mt-3 p-3">
                    <form method="POST" action="/{{$product->id }}/update"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" Name="name" value="{{ old('name',$product->name) }}" >
                        </div>
                            
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" Name="description" value="{{ old('description',$product->description) }}" >
                        </div>

                        <div class="form-group">
                            <label> Price</label>
                            <input type="text" class="form-control" Name="price" value="{{ old('price',$product-> price) }}" >
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" Name="file"  >
                        </div>
                        <button class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
@endsection