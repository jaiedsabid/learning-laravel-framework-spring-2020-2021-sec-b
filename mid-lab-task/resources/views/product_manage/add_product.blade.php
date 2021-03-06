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
        .message {
            margin: 32px 0px;
        }
        .error {
            font-weight: bold;
            color: red;
        }
    @endsection
    @section('title')
        Add Product
    @endsection
    @section('page-title')
        <h1>Add Product</h1>
    @endsection
    @section('content')
        <div class="contents">
            <a href="{{ route('product_manage.index') }}">Back</a>
            <form action="" method="POST">
                @csrf
                <table>
                    <tr>
                        <td>PRODUCT NAME: </td>
                        <td><input type="text" name="product_name" value="{{ old('product_name') }}"></td>
                    </tr>
                    <tr>
                        <td>CATEGORY: </td>
                        <td><input type="text" name="category" value="{{ old('category') }}"></td>
                    </tr>
                    <tr>
                        <td>UNIT PRICE: </td>
                        <td><input type="text" name="unit_price" value="{{ old('unit_price') }}"></td>
                    </tr>
                    <tr>
                        <td>STATUS: </td>
                        <td>
                            <select name="status" id="status">
                                <option value="existing">Existing</option>
                                <option value="upcoming">Upcoming</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>LAST UPDATED: </td>
                        <td><input type="date" name="last_updated" value="{{ old('last_updated') }}"></td>
                    </tr>
                </table>
                <input type="submit" value="Add" name="submit">
            </form>
            <div class="message">
                <div class="error">
                    {{ session('error-msg') }}
                </div>
            </div>
        </div>
    @endsection

