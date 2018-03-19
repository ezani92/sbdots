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
			                					<td width="30%"><strong>Phone Verification</strong></td>
			                					<td>
			                						@if($user->phone_verification == 0)
			                							<span class="label label-warning">Not Verified</span>
			                						@else
			                							<span class="label label-success">Verified</span>
			                						@endif
			                					</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>TAC NO</strong></td>
			                					<td>{{ $user->tac_no }}</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>Bank Name</strong></td>
			                					<td>{{ $user->bank_name }}</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>Bank Account Number</strong></td>
			                					<td>{{ $user->bank_account_no }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Register At</strong></td>
			                					<td>{{ $user->created_at->format('d M Y,  h:iA') }}</td>
			                				</tr>
			                			</tbody>
			                		</table>
			                	</div>
			                	<div class="col-md-6">
			                		<a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-info btn-block">Edit User</a><br />

			                		@if($user->is_ban == 0)
			                			<a href="{{ url('admin/users/'.$user->id.'/ban') }}" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-block">Ban User</a><br />
			                		@else
			                			<a href="{{ url('admin/users/'.$user->id.'/unban') }}" onclick="return confirm('Are you sure?');" class="btn btn-success btn-block">Un-Ban User</a><br />
			                		@endif
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