@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Add New Bank</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('admin/banks/') }}" enctype="multipart/form-data">
			                	@csrf
							    <div class="form-group">
							        <label>Bank Name</label>
							        <input type="text" name="name" class="form-control" required>
							    </div>
							    <div class="form-group">
							        <label>Bank Account Name</label>
							        <input type="text" name="account_name" class="form-control" required>
							    </div>
							    <div class="form-group">
							        <label>Bank Account No</label>
							        <input type="text" name="account_no" class="form-control" required>
							    </div>
							    
							    <div class="form-group">
							        <button type="submit" class="btn btn-info">Add New Bank</button>
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