@extends('layout.common')

@section('css')
    body {
        box-sizing: border-box;
    }
    div.products {
        width: 1000px;
        display: flex;
        flex-flow: wrap column;
    }
    table, th, tr, td {
        border: 1px solid black;
    }
    table td {
        padding: 2px 5px;
    }
    .pages {
        display: flex;
        justify-content: center;
    }
    .prev-next {
        margin: 15px 0px;
    }
    .success {
        margin: 32px 0px;
        color: green;
    }
    .error {
        margin: 32px 0px;
        color: red;
    }
@endsection

@section('title')
    Existing Products
@endsection

@section('page-title')
    <h1>Existing Products</h1>
@endsection

@section('content')
    <div class="products">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>PRODUCT NAME</th>
                    <th>CATEGORY</th>
                    <th>UNIT PRICE</th>
                    <th>STATUS</th>
                    <th>LAST UPDATED</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->unit_price }}</td>
                        <td>{{ $product->status }}</td>
                        <td>{{ $product->last_updated }}</td>
                        <td>
                            <a href="{{ route('eproduct.ex_view', $product->id) }}">View</a> |
                            <a href="{{ route('eproduct.ex_edit', $product->id) }}">Edit</a> |
                            <a href="{{ route('eproduct.ex_delete', $product->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pages">
            <div class="prev-next">
                {{ $products }}
            </div>
        </div>
        <div class="message">
            <div class="success">
                {{ session('success') }}
            </div>
        </div>
        <div class="error">
            {{ session('error-msg') }}
        </div>
    </div>
@endsection
