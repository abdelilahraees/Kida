@extends('layouts.app')

@section('content')


    <div class="container mt-5">
        <h1 style="color: white"> Products</h1>
        <table class="table align-middle mb-0 bg-white mt-5">
            <thead class="bg-light">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>


            </tr>
            </thead>
            <tbody>

          @foreach($products as $product )

              <tr>
                  <td>
                      <div class="d-flex align-items-center">
                          <img
                              src="{{ asset('storage/'.$product->image)}}"
                              alt=""
                              style="width: 45px; height: 45px"
                              class="rounded-circle"
                          />

                      </div>
                  </td>
                  <td>
                    {{$product->name}}
                  </td>  <td>
                    {{$product->description}}
                  </td>
                  <td>
                      <span class="badge badge-success rounded-pill d-inline">{{$product->price}}</span>
                  </td>
                  <td>{{$product->quantity}}</td>

                  <td class="text-right"> <a href="{{route('products.edit',$product)}}" style="background-color:  #D5A153FF" class="btn  btn-primary">
                          Update
                      </a></td>
                  <td class="text-left">
                      <form action="{{route('products.destroy',$product->id)}}"
                            method="post">@method('DELETE')@csrf

                          <button type="submit" class="btn btn-danger mr-3">Delete</button>
                      </form>
                  </td>

              </tr>
          @endforeach
            </tbody>
        </table>

    </div>


@endsection
