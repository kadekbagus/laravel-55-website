@extends('layouts.header-admin')

@section('content')
<div class="container">
    <form class="col s12" action="{{ route('admin-page-store') }}" method="POST">
    	{{ csrf_field() }}
	    <div class="row">
	        <div class="input-field col s6">
	          <i class="material-icons prefix">content_paste</i>
	          	<input id="page_name" type="text" class="validate">
	          <label>Page Name</label>
	        </div>
	    </div>
	    <div class="row">
	    	<div class="switch col s6">
	    		<div id="page_content"></div>
	    	</div>
	    </div>
	   	<div class="row">
        	<div class="col s6">
        		<p>
			      <input name="page_type" type="radio" id="main_page" value="main_page" checked/>
			      <label for="main_page">Main Page</label>
			      <input name="page_type" type="radio" id="child_page" value="child_page"/>
			      <label for="child_page">Child Page</label>
			    </p>
        	</div>
        </div>
        <div class="row">
		      <div class="switch col s6">
			    <label>Inactive<input type="checkbox"><span class="lever"></span>Active</label>
			  </div>
	    </div>
	    <button class="btn waves-effect waves-light" type="submit">Submit
			<i class="material-icons right">send</i>
		</button>
    </form>
</div>
@endsection