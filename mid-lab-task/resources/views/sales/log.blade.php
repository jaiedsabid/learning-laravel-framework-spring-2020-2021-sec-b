@extends('layout.common')
    @section('css')
        .log {
            display: flex;
            flex-flow: column nowrap;
        }
        .export {
            margin: 32px 0px;
        }
        .export a {
            text-decoration: none;
            color: black;
        }
        .import {
            margin: 32px 0px;
        }
        .import input {
            display: block;
            margin-top: 10px;
            cursor: pointer;
        }
        .message {
            margin-top: 15px;
            color: green;
            font-weight: bold;
        }
    @endsection

    @section('title')
        Sales Log
    @endsection

    @section('page-title')
        <h1>Sales Log</h1>
    @endsection

    @section('content')
        <div class="log">
            <div class="export">
                <h4>Download sales logs as Excel file</h4>
                <button>
                    <a href="{{ route('sales.log_export') }}">Download Log</a>
                </button>
            </div>
            <div class="import">
                <h4>Import sales log to database</h4>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="import">Choose xls or xlsx file:
                        <input type="file" name="import" accept=".xls,.xlsx">
                    </label>
                    <input type="submit" name="submit" value="Import">
                </form>
            </div>
            <div class="message">
                {{ session('message') }}
            </div>
        </div>
    @endsection
