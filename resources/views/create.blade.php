@extends('layouts.master')

@section('content')
    {{-- close  --}}
<a  href="/products/"class="btn btn-warning btn-sm">Products</a>
    <a  href="/create/"class="btn btn-warning btn-sm">Create</a>
    <br>
   <h1 class="text-center" >CREATE FORM</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="mt-3 p-3">
                    <form method="POST" action="/store"  enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" Name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                        <span class= "text-danger">{{$errors->first('name')}}</span>
                            
                        @endif
                        
                        </div>
                    
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" Name="description" value="{{ old('description') }}" >


                            @if ($errors->has('description'))
                        <span class= "text-danger">{{$errors->first('description')}}</span>
                            
                        @endif

                        </div>

                           <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" Name="price" value="{{ old('price') }}" >


                            @if ($errors->has('price'))
                        <span class= "text-danger">{{$errors->first('price')}}</span>
                            
                        @endif

                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" Name="file">

                                    @if ($errors->has('file'))
                        <span class= "text-danger">{{$errors->first('file')}}</span>
                            
                        @endif

                        </div>
                        <button class="btn btn-dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
@endsection
