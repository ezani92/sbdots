@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Add New Annoucement</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('admin/annoucement') }}" enctype="multipart/form-data">
			                	@csrf
							    <div class="form-group">
							        <label>Title</label>
							        <input type="text" name="title" class="form-control" required>
							    </div>
							    <div class="form-group">
							        <label>Image</label>
							        <input type="file" name="image" class="form-control" required>
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