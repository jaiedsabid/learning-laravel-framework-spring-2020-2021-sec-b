@extends('layout.common')
    @section('css')
        body {
            box-sizing: border-box;
        }
        label {
            color: red;
            display: block;
            margin: 10px;
        }
        input[type="submit"] {
            margin: 10px;
        }
        input[type="text"] {
            margin: 10px 0px;
        }
        .errors {
            margin: 32px 10px;
            color: red;
            font-weight: bold;
        }
        .contents a {
            display: block;
            text-decoration: none;
            font-weight: bold;
            margin: 32px 0px;
        }
    @endsection
    @section('title')
        Delete {{ $item->product_name }}
    @endsection
    @section('page-title')
        <h1>Are you sure you want to delete the product, {{ $item->product_name }}?</h1>
    @endsection
    @section('content')
        <div class="contents">
            <a href="{{ route('products.existing') }}">Back</a>
            <form action="" method="POST">
                @csrf
                <label for="confirm">Please, Type "Yes" to delete the item. <br>
                    <input type="text" name="confirm" value="{{ old('confirm') }}">
                </label>
                <input type="submit" name="submit" value="submit">
            </form>
            <div class="errors">
                {{ $errors->first('confirm') }}
            </div>
        </div>
    @endsection

