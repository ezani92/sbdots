@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>User Details</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <div class="row">
			                	<div class="col-md-6">
			                		<table class="table table-bordered table-striped">
			                			<tbody>
			                				<tr>
			                					<td width="30%"><strong>Full Name</strong></td>
			                					<td>{{ $user->name }}</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>Email</strong></td>
			                					<td>{{ $user->email }}</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>Role</strong></td>
			                					<td>
			                						@if($user->role == 1)
			                							Administrator
			                						@elseif($user->role == 2)
			                							Staff
			                						@elseif($user->role == 3)
			                							User
			                						@endif
			                					</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>Phone Number</strong></td>
			                					<td>{{ $user->phone }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Register At</strong></td>
			                					<td>{{ $user->created_at->format('d M Y,  h:iA') }}</td>
			                				</tr>
			                			</tbody>
			                		</table>
			                	</div>
			                	<div class="col-md-6">
			                		{{-- <table class="table table-bordered table-striped">
			                			<tbody>
			                				<tr>
			                					<td width="60%"><strong>Total Approve Deposit</strong></td>
			                					<td>{{ $user->transactions->where('transaction_type','deposit')->where('status',2)->count() }} (RM {{ $user->transactions->where('transaction_type','deposit')->where('status',2)->sum('amount') }})</td>
			                				</tr>
			                				<tr>
			                					<td width="60%"><strong>Total Approve Withdraw</strong></td>
			                					<td>{{ $user->transactions->where('transaction_type','withdraw')->where('status',2)->count() }} (RM {{ $user->transactions->where('transaction_type','withdraw')->where('status',2)->sum('amount') }})</td>
			                				</tr>
			                				<tr>
			                					<td width="60%"><strong>Win Lost Rate (Withdraw - deposit)</strong></td>
			                					<td>RM {{ $user->transactions->where('transaction_type','withdraw')->where('status',2)->sum('amount') - $user->transactions->where('transaction_type','deposit')->where('status',2)->sum('amount') }}</td>
			                				</tr>
			                			</tbody>
			                		</table> --}}

			                		<a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-info btn-block">Edit User</a><br />
			                		<a data-toggle="modal" data-target="#modal-password" class="btn btn-info btn-block">Update Password</a><br />

			                		@if($user->is_ban == 0)
			                			<a href="{{ url('admin/users/'.$user->id.'/ban') }}" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-block">Ban User</a><br />
			                		@else
			                			<a href="{{ url('admin/users/'.$user->id.'/unban') }}" onclick="return confirm('Are you sure?');" class="btn btn-success btn-block">Un-Ban User</a><br />
			                		@endif
			                	</div>
			                </div>
			                <div class="row">
			                	<div class="col-md-12">
			                		<h3>Staff Log</h3>
			                		<table id="staff-log-table" class="table table-striped table-hover table-fw-widget">
					                    <thead>
					                        <tr>
					                            <th>Date Time</th>
					                            <th>Transaction</th>
					                            <th>Details</th>
					                        </tr>
					                    </thead>
					                </table>
			                	</div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
		<div id="modal-password" tabindex="-1" role="dialog" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
		            </div>
		            <div class="modal-body">
						<form method="POST" action="{{ url('admin/users/password') }}">
						    @csrf
						    <input type="hidden" name="user_id" value="{{ $user->id }}">

						    <div class="row">
						    	<div class="form-group col-md-12">
							        <label>New Password</label>
							        <input type="password" name="password" min="6" class="form-control" required>
							    </div>
						    </div>
						    
						    <div class="row">
						    	<div class="form-group col-md-12">
							        <label>Confirm Password</label>
							        <input type="password" name="password_confirm" min="6" class="form-control" required>
							    </div>
						    </div>
						    
						    <div class="form-group">
						        <button type="submit" class="btn btn-info btn-block">Update New Password</button>
						    </div>
						</form>
		            </div>
		            <div class="modal-footer"></div>
		        </div>
		    </div>
		</div>
    </div>
@include('admin.footer')
<script>
    $(function() {
        $('#staff-log-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('admin/users/'.$user->id.'/logs-data') }}',
            columns: [
                { data: 'created_at', name: 'created_at' },
                { data: 'transaction_id', name: 'transaction_id' },
                { data: 'detail', name: 'detail' },
            ]
        });
    });
</script>
</body></html>