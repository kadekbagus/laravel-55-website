@extends('layouts.header-admin')

@section('content')
<div class="container">
    <ul class="collection with-header">
      <li class="collection-item"><h4>Pages</h4></li>
        @foreach ($data as $page)
            <li class="collection-item">{{ $page->page_name }}<a href="{{ route('admin-page-edit', $page->page_id) }}" class="secondary-content"><i class="material-icons">edit</i></a></li>
        @endforeach
    </ul>
    <a href="{{ route('admin-page-create') }}" class="btn-floating red btn-large"><i class="material-icons">add</i></a>
</div>
@endsection
