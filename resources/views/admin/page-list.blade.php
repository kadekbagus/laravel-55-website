@extends('layouts.header-admin')

@section('content')
<div class="container">
    <h4>Pages</h4>
     <table class="striped">
        <thead>
          <tr>
		    <th>Page Name</th>
		    <th>Status</th>
		    <th>Action</th>
          </tr>
        </thead>
        <tbody>
       	@foreach ($data as $page)
          <tr>
	        <td>{{ $page->page_name }}</td>
	        <td>{{ $page->status }}</td>
	        <td>
	        	<a href="{{ route('admin-page-edit', $page->page_id) }}" class="btn-floating blue btn-small"><i class="material-icons">edit</i></a>
	        	<a href="#" class="btn-floating red btn-small delete-button" data-id="{{ $page->page_id }}" data-token="{{ csrf_token() }}"><i class="material-icons">close</i></a>
	        </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <a href="{{ route('admin-page-create') }}" class="btn-floating green btn-large"><i class="material-icons">add</i></a>
</div>
@endsection
