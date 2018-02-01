@extends('layouts.header-admin')

@section('content')
<div class="container">
    <form class="col s12">
	    <div class="row">
	        <div class="input-field col s6">
	          <i class="material-icons prefix">content_paste</i>
	          	<input id="page_name" type="text" class="validate">
	          <label>Page Name</label>
	        </div>
	    </div>
	    <div class="row">
        	<div class="col s6">
        		<p>
			      <input name="page_type" type="radio" id="main_page" checked/>
			      <label for="main_page">Main Page</label>
			      <input name="page_type" type="radio" id="child_page" />
			      <label for="child_page">Child Page</label>
			    </p>
        	</div>
        </div>
        <div class="row">
		      <div class="switch col s6">
			    <label>Inactive<input type="checkbox"><span class="lever"></span>Active</label>
			  </div>
	    </div>
    </form>
</div>
@endsection