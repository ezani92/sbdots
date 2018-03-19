@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Edit Games</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('admin/games/'.$game->id) }}" enctype="multipart/form-data">
			                	@csrf
			                	@method('patch')
							    <div class="form-group">
							        <label>Game Name</label>
							        <input type="text" name="name" class="form-control" value="{{ $game->name }}" required>
							    </div>
							    <div class="form-group">
							        <label>Category</label>
							        {{ Form::select('category', ['livecasino' => 'livecasino', 'sportsbook' => 'sportsbook'], $game->category, ['class' => 'form-control']) }}
							    </div>
							    <div class="form-group">
							        <label>
							        	Game Logo <a target="_blank" href="{{ url('storage/games/'.$game->logo) }}"><span class="label label-info">Current Logo</span></a>
							        </label>
							        <input type="file" name="logo" class="form-control">
							    </div>
							    <div class="form-group">
							        <button type="submit" class="btn btn-info">Add New</button>
							    </div>
							</form>
			                <br />
			            </div>
			        </div>
			    </div>
			</div>
		</div>
    </div>
@include('admin.footer')
</body></html>