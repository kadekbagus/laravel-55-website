@extends('layouts.header-admin')

@section('content')
<div class="container">
    <div class="row">
        <ul class="collection with-header">
            <li class="collection-header"><h4>System Information</h4></li>
            <li class="collection-item avatar">
                <i class="material-icons circle pink">show_chart</i>
                <span class="title">Laravel version</span>
                <p>{{{ $laravel_version }}}</p>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle blue">verified_user</i>
                <span class="title">PHP version</span>
                <p>{{{ $php_version }}}</p>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle green">folder</i>
                <span class="title">Database type</span>
                <p>{{{ $database_type }}}</p>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle green">folder</i>
                <span class="title">Database version</span>
                <p>{{{ $database_version }}}</p>
            </li>
            <li class="collection-item avatar">
                <i class="material-icons circle red">wb_cloudy</i>
                <span class="title">Server info</span>
                <p>{{{ $server_info }}}</p>
            </li>
        </ul>
    </div>
</div>
@endsection
