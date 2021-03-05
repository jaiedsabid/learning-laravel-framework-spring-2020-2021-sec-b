@extends('layout.common')
    @section('css')
        body {
            box-sizing: border-box;
        }
        #delete a {
            text-decoration: none;
            color: red;
        }
        .contents > a {
            text-decoration: none;
            font-weight: bold;
            margin: 20px 0px;
        }
        .details {
            margin: 32px 0px;
        }
        td:nth-child(2) {
            padding-left: 30px;
            text-align: left;
        }
    @endsection
    @section('title')
        Details
    @endsection
    @section('page-title')
        <h1>Details of existing product, {{ $item->id }}</h1>
    @endsection
    @section('content')
        <div class="contents">
            <a href="{{ route('products.existing') }}">Back</a>

            <div class="details">
                <table>
                    <tr>
                        <td>PRODUCT NAME: </td>
                        <td>{{ $item->product_name }}</td>
                    </tr>
                    <tr>
                        <td>CATEGORY: </td>
                        <td>{{ $item->category }}</td>
                    </tr>
                    <tr>
                        <td>UNIT PRICE: </td>
                        <td>{{ $item->unit_price }}</td>
                    </tr>
                    <tr>
                        <td>STATUS: </td>
                        <td>{{ $item->status }}</td>
                    </tr>
                    <tr>
                        <td>LAST UPDATED: </td>
                        <td>{{ $item->last_updated }}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button id="delete">
                                <a href="{{ route('eproduct.ex_delete', $item->id) }}">Delete</a>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    @endsection

