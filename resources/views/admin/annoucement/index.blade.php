@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>All Annoucement <a class="btn btn-info" href="{{ url('admin/annoucement/create') }}">Create New</a></h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <table id="games-table" class="table table-striped table-hover table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th width="70%">Annoucement</th>
			                            <th>Date Created</th>
			                            <th>Action</th>
			                        </tr>
			                    </thead>
			                    <tbody>
			                    	@foreach($annoucements as $annoucement)
			                    	<tr>
			                    		<td>{{ $annoucement->body }}</td>
			                    		<td>{{ $annoucement->created_at->format('d M Y, h:i A') }}</td>
			                    		<td><a onclick="return confirm('Are you sure?');" href="{{ url('admin/annoucement/'.$annoucement->id.'/delete') }}"><span class="label label-danger">Delete</span></a></td>
			                    	</tr>
			                    	@endforeach
			                    </tbody>
			                </table>
			                <br />
			            </div>
			        </div>
			    </div>
			</div>
		</div>
    </div>
@include('admin.footer')
</body></html>