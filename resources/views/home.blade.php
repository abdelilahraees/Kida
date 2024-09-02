@extends('layouts.app')

@section('content')

    <div class="container mt-5">
        <h1 style="color: white"> Commands</h1>
        <table class="table align-middle mb-0 bg-white mt-5">
            <thead class="bg-light">
            <tr>
                <th>#</th>
                <th>#ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Product</th>
                <th>price</th>
            </tr>
            </thead>
            <tbody>


            @foreach($commands as $command)
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <img
                                src="{{ asset('storage/'.$command->product->image)}}"
                                alt=""
                                style="width: 45px; height: 45px"
                                class="rounded-circle"
                            />

                    </td>
                    <td>
                        {{$command->id}}
                    </td>
                    <td>
                        {{$command->name}}
                    </td>
                    <td>
                        {{$command->phone}}
                    </td>
                    <td>{{$command->address}}</td>
                    <td>
                        {{$command?->product?->name}}
                    </td>
                    <td>
                        {{$command?->product?->price}}
                    </td>
                    <td class="text-left">
                        <form action="{{route('commands.destroy',$command->id)}}"
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
