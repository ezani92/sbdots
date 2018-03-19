@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Game Details</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <div class="row">
			                	<div class="col-md-6">
			                		<table class="table table-bordered table-striped">
			                			<tbody>
			                				<tr>
			                					<td width="30%"><strong>Game Name</strong></td>
			                					<td>{{ $game->name }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Category</strong></td>
			                					<td>{{ $game->category }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Logo</strong></td>
			                					<td><img width="100%" src="{{ url('storage/games/'.$game->logo) }}"></td>
			                				</tr>
			                				<tr>
			                					<td><strong>Created At</strong></td>
			                					<td>{{ $game->created_at->format('d M Y,  h:iA') }}</td>
			                				</tr>
			                			</tbody>
			                		</table>
			                	</div>
			                	<div class="col-md-6">
			                		<a href="{{ url('admin/games/'.$game->id.'/edit') }}" class="btn btn-info btn-block">Edit Games</a><br />
			                		<form method="post" action="{{ url('admin/games/'.$game->id) }}">
			                		@csrf
			                		@method('delete')
			                		<button type="submit" class="btn btn-danger btn-block" onclick="return confirm('Are you sure?');">Delete</button>
			                		</form>
			                	</div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
    </div>
@include('admin.footer')
</body></html>