@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Edit Bank</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('admin/banks/'.$bank->id) }}" enctype="multipart/form-data">
			                	@csrf
			                	@method('patch')
							    <div class="form-group">
							        <label>Bank Name</label>
							        <input type="text" name="name" class="form-control" value="{{ $bank->name }}" required>
							    </div>
							    <div class="form-group">
							        <label>Bank Account Name</label>
							        <input type="text" name="account_name" class="form-control" value="{{ $bank->account_name }}" required>
							    </div>
							    <div class="form-group">
							        <label>Bank Account No</label>
							        <input type="text" name="account_no" class="form-control" value="{{ $bank->account_no }}" required>
							    </div>
							    
							    <div class="form-group">
							        <button type="submit" class="btn btn-info">Update Bank Details</button>
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