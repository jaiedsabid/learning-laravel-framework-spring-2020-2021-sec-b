@extends('layout.common')
@section('css')
    body {
        box-sizing: border-box;
    }
    .content {
        width: 1000px;
    }
    form > input {
        margin: 10px 0px;
    }
    td:nth-child(2) {
        padding-left: 10px;
    }
    .contents a {
        display: block;
        text-decoration: none;
        font-weight: bold;
        margin: 32px 0px;
    }
@endsection
@section('title')
    Edit
@endsection
@section('page-title')
    <h1>Edit details of existing product, {{ $item->id }}</h1>
@endsection
@section('content')
    <div class="contents">
        <a href="{{ route('products.existing') }}">Back</a>
        <form action="" method="POST">
            @csrf
            <table>
                <tr>
                    <td>PRODUCT NAME: </td>
                    <td><input type="text" name="product_name" value="{{ $item->product_name }}"></td>
                </tr>
                <tr>
                    <td>CATEGORY: </td>
                    <td><input type="text" name="category" value="{{ $item->category }}"></td>
                </tr>
                <tr>
                    <td>UNIT PRICE: </td>
                    <td><input type="text" name="unit_price" value="{{ $item->unit_price }}"></td>
                </tr>
                <tr>
                    <td>STATUS: </td>
                    <td><input type="text" name="status" value="{{ $item->status }}"></td>
                </tr>
                <tr>
                    <td>LAST UPDATED: </td>
                    <td><input type="date" name="last_updated" value="{{ $item->last_updated }}"></td>
                </tr>
            </table>
            <input type="submit" value="Update" name="submit">
        </form>
    </div>
@endsection

