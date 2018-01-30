@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
<!--                     @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->
                    <form action="{{ route('admin-page.store') }}" method="post">
                      <label for="GET-name">Name:</label>
                      <input type="text" name="page_name">
                      <input type="text" name="content">
                      <input type="submit" value="Save">
                      {{ csrf_field() }}
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
