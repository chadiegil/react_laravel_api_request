@extends('layouts.app')
@section('content')

    <div class="container border m-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Stocks</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($inventories as $invetory)
                    <tr>
                        <td>{{ $invetory->product_name }}</td>
                        <td>{{ $invetory->price }}</td>
                        <td>{{ $invetory->stocks }}</td>
                    </tr>
                @endforeach

          </table>
    </div>
@endsection
