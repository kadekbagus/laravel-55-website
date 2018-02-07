@extends('layouts.header-admin')

@section('content')
<div class="container">
    <form class="col s12" action="{{ route('admin-page-update', $data->page_id) }}" method="POST">
    	{{ method_field('PUT') }}
    	{{ csrf_field() }}
	    <div class="row">
	        <div class="input-field col s12">
	          	<input id="page_name" name="page_name" type="text" class="validate" value="{{ $data->page_name }}">
	          <label>Page Name</label>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="switch col s12">
	    		<textarea id="page_content" name="page_content">{{ $data->content }}</textarea>
	    	</div>
	    </div>
	    <button class="btn waves-effect waves-light" type="submit">Update
			<i class="material-icons right">send</i>
		</button>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>** {{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
</div>
<script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
	CKEDITOR.replace('page_content');	
</script>
@endsection
