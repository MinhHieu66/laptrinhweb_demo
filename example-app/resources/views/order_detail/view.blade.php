@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <table>
                    <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>{{$order->id}}</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            {{-- <td>{{$order->id}}</td> --}}
                            {{-- <td>{{$role->name}}</td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <div class="container" style="margin-top: 20px">
        <h3>List of products</h3>
        <div class="row justify-content-center">
            <table>
                <thead>
                <tr>
                    {{-- <th>ID</th> --}}
                    <th>Name</th>
                    {{-- <th>Email</th> --}}
                </tr>
                </thead>
                <tbody>

                @foreach($products as $product)
                    <tr>
                        {{-- <th>{{$user->id}}</th> --}}
                        <th>{{$product->name}}</th>
                        {{-- <th>{{$user->email}}</th> --}}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
