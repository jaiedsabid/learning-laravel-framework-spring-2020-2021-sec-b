@extends('layout.common')

    @section('css')
        .sold-items {
            margin: 20px 10px;
        }
        .sold-items > table, th, td {
            border: 1px solid black;
        }
        .sell-item {
            width: 800px;
        margin: 50px 0px;
        }
        .sell-item > form > label {
            display: block;
        }
        .sell-item > form > label > input {
            display: block;
        }
        .sales-log {
            display: block;
            margin: 15px 10px;
        }
        .sales-log button {
            width: 150px;
            height: 50px;
        }
        .sales-log a {
            text-decoration: none;
            font-weight: bold;
            font-size: large;
            color: #2d3748;
        }
    @endsection

    @section('title')
        Physical Store
    @endsection

    @section('page-title')
        <h1>Physical Store</h1>
    @endsection

    @section('content')
        <div class="sales-log">
            <button>
                <a href="{{ route('sales.log') }}">View Sales Log</a>
            </button>
        </div>
        <div class="sold-items">
            <div class="highlight">
                <h4>Total Sale Today: {{ $today }}</h4>
                <h4>Total Sale Last 7 days: {{ $last_seven }}</h4>
                <h4>Average sales amount (current month): {{ $avg_amount }}</h4>
                <h4>Max Sold Item: {{ $item_name }}</h4>
            </div>
        </div>
        <div class="sell-item">
            <h2>Sell Products</h2>
            <form action="" method="POST">
                @csrf
                <label for="name">Name:
                    <input type="text" name="name" value="{{ old('name') }}">
                </label>
                <label for="address">Address:
                    <input type="text" name="address" value="{{ old('address') }}">
                </label>
                <label for="phone">Phone:
                    <input type="text" name="phone" value="{{ old('phone') }}">
                </label>
                <label for="product_id">Product ID:
                    <input type="text" name="product_id" value="{{ old('product_id') }}">
                </label>
                <label for="product_name">Product Name:
                    <input type="text" name="product_name" value="{{ old('product_name') }}">
                </label>
                <label for="unit_price">Unit Price:
                    <input type="text" name="unit_price" value="{{ old('unit_price') }}">
                </label>
                <label for="quantity">Quantity:
                    <input type="text" name="quantity" value="{{ old('quantity') }}">
                </label>
                <label for="total_price">Total Price:
                    <input type="text" name="total_price" value="{{ old('total_price') }}">
                </label>
                <label for="date_sold">Date Sold:
                    <input type="date" name="date_sold" value="{{ old('date_sold') }}">
                </label>
                <label for="payment_type">Payment Type:
                    <select name="payment_type" id="payment_type">
                        <option value="cash">Cash</option>
                        <option value="card">Card</option>
                    </select>
                </label>
                <label for="status">Status:
                    <select name="status" id="status">
                        <option value="sold">Sold</option>
                        <option value="pending">Pending</option>
                    </select>
                </label>
                <input type="submit" name="submit" value="submit">
            </form>
        </div>
        <div class="warning">
            <div>{{ session('error-msg') }}</div>
        </div>
        <div class="success">
            {{ session('success') }}
        </div>
    @endsection
