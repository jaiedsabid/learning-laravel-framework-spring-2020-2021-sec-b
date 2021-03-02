@extends('layout.common')

    @section('css')
        .sold-items {
            margin: 20px 10px;
        }
        .sold-items > table, th, td {
            border: 1px solid black;
        }
    @endsection

    @section('title')
        Physical Store
    @endsection

    @section('page-title')
        <h1>Physical Store</h1>
    @endsection

    @section('content')
        <div class="sold-items">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product ID</th>
                        <th>Product name</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Date Sold</th>
                        <th>Payment Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($sold_items as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->product_id }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->unit_price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->total_price }}</td>
                        <td>{{ $item->date_sold }}</td>
                        <td>{{ $item->payment_type }}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    @endsection
