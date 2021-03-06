@extends('layout.common')
    @section('css')
        .message {
            margin: 32px 0px;
        }
        .success {
            font-weight: bold;
            color: green;
        }
    @endsection

    @section('title')
        Product Management
    @endsection

    @section('page-title')
        <h1>Product Management</h1>
    @endsection

    @section('content')
        <div class="products">
            <div class="existing">
                <h4>Total Existing Products: {{ $existing }}</h4>
            </div>
            <div class="upcoming">
                <h4>Total Upcoming Products: {{ $upcoming }}</h4>
            </div>
            <div class="message">
                <div class="success">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    @endsection
