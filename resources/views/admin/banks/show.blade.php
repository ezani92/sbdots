@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Bank Details</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <div class="row">
			                	<div class="col-md-6">
			                		<table class="table table-bordered table-striped">
			                			<tbody>
			                				<tr>
			                					<td width="30%"><strong>Bank Name</strong></td>
			                					<td>{{ $bank->name }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Bank Account Name</strong></td>
			                					<td>{{ $bank->account_name }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Bank Account No</strong></td>
			                					<td>{{ $bank->account_no }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Created At</strong></td>
			                					<td>{{ $bank->created_at->format('d M Y,  h:iA') }}</td>
			                				</tr>
			                			</tbody>
			                		</table>
			                	</div>
			                	<div class="col-md-6">
			                		<a href="{{ url('admin/banks/'.$bank->id.'/edit') }}" class="btn btn-info btn-block">Edit Bank</a><br />
			                		<form style="display: none;" method="post" action="{{ url('admin/banks/'.$bank->id) }}">
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