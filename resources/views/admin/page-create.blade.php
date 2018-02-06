@extends('layouts.header-admin')

@section('content')
<div class="container">
    <form class="col s12" action="{{ route('admin-page-store') }}" method="POST">
    	{{ csrf_field() }}
	    <div class="row">
	        <div class="input-field col s6">
	          	<input id="page_name" name="page_name" type="text" class="validate">
	          <label>Page Name</label>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="switch col s6">
	    		<div id="page_content"></div>
	    	</div>
	    </div>
	    <button class="btn waves-effect waves-light" type="submit">Create
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
@endsection