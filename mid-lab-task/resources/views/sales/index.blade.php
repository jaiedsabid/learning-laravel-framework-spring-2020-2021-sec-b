@extends('layout.common')

    @section('css')
        body {
            box-sizing: border-box;
        }
        .container {
            width: 800px;
            padding: 20px 0;
            margin-left: 20px;
            display: flex;
            flex-flow: nowrap row;
            justify-content: space-between;
        }
        .container > div > a {
            font-size: 1.1rem;
            font-weight: bold;
            text-decoration: none;
            cursor: pointer;
        }
    @endsection

    @section('title')
        Sales
    @endsection

    @section('page-title')
        <h1>Sales</h1>
    @endsection

    @section('content')
        <div class="container">
            <div class="physical-store">
                <a href="{{ route('sales.physical') }}">Physical Store Total Sale: {{ $physical_store }}</a>
            </div>
            <div class="social-media">
                <a href="{{ route('sales.physical') }}">Social Media Total Sale: {{ $physical_store }}</a>
            </div>
            <div class="ecommerce">
                <a href="{{ route('sales.physical') }}">Ecommerce Web App Total Sale: {{ $physical_store }}</a>
            </div>
        </div>
    @endsection
