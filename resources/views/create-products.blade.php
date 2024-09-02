@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Create-product</h3>
                    {{--                 --}}
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route("products.store")}}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                   placeholder="Product Name">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="email" type="text" class="form-control @error('email') is-invalid @enderror"
                                   name="description" value="{{ old('description') }}" required
                                   placeholder="Product Description">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="email" type="number" class="form-control @error('email') is-invalid @enderror"
                                   name="price" value="{{ old('price') }}" required autocomplete="email"
                                   placeholder="Price">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="email" type="number" class="form-control @error('email') is-invalid @enderror"
                                   name="quantity" value="{{ old('quantity') }}" required
                                   placeholder="Quantity">

                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input class="form-control @error('email') is-invalid @enderror" name="image" type="file" id="formFile"
                                    required
                                   placeholder="Quantity">

                        </div>


                        <div class="form-group">
                            <input type="submit" value="Ajouter" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">


                </div>
            </div>
        </div>
    </div>

@endsection
