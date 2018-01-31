@extends('layouts.header')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">System Information</div>

                <div class="panel-body">
                    <p>Laravel version : {{{ $laravel_version }}}</p>
                    <p>PHP version : {{{ $php_version }}}</p>
                    <p>Database type : {{{ $database_type }}}</p>
                    <p>Database version : {{{ $database_version }}}</p>
                    <p>Server info : {{{ $server_info }}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
