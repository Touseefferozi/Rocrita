@extends('layouts.master')

@section('content')
    <div class="container">
        <h1 class="text-center">Add To Cart</h1>
        <div class="row">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Product price</th>
                        <th>Product Quantity</th>
                        <th>Product Subtotal</th>
                        <th>Image</th>

                    </tr>
                </thead>
                <tbody>
                    @php $total = 0;  @endphp
                    @if (session('add'))
                        @foreach (session('add') as $id => $product)
                            <tr>
                                <td>Product Image and product name</td>
                                <td>Product Price</td>
                                <td>Product Quantity</td>
                                <td>Product Subtotal</td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm">X</a>
                                </td>

                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>

                    <tr>

                        <td>Product Image and product name</td>
                        <td> <a href="/" class="btn btn-primary">Continue Shopping</a>  </td>
                        <td>Sub Total</td>
                        <td>Total</td>
                        <td>
                            <a href="#" class="btn btn-danger btn-sm">X</a>
                        </td>

                    </tr>
                </tfoot>

            </table>








        </div>

    </div>
@endsection
