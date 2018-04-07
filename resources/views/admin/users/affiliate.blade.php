@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>User Details [Affiliate Role]</h3>
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
			                						Affiliate
			                					</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>Phone Number</strong></td>
			                					<td>{{ $user->phone }}</td>
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
			                					<td width="30%"><strong>Commision Rate</strong></td>
			                					<td>{{ $user->affiliate_rate }}%</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Register At</strong></td>
			                					<td>{{ $user->created_at->format('d M Y,  h:iA') }}</td>
			                				</tr>
			                			</tbody>
			                		</table>
			                	</div>
			                	<div class="col-md-6">
			                		<table class="table table-bordered table-striped">
			                			<tbody>
			                				<tr>
			                					<td width="30%"><strong>Affiliate ID</strong></td>
			                					<td>{{ $user->affiliate_id }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Affiliate Link</strong></td>
			                					<td>{{ url('/') }}/?ref={{ $user->affiliate_id }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Total Affiliate Members Register</strong></td>
			                					<td>{{ $count_aff = \App\User::where('referred_by',$user->affiliate_id)->count() }}</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>Total Affiliate Members Deposit</strong></td>
			                					<td>{{ $user->transactions->where('transaction_type','deposit')->where('status',2)->count() }} (RM {{ $user->transactions->where('transaction_type','deposit')->where('status',2)->sum('amount') }})</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>Total Affiliate Members Withdraw</strong></td>
			                					<td>{{ $user->transactions->where('transaction_type','withdraw')->where('status',2)->count() }} (RM {{ $user->transactions->where('transaction_type','withdraw')->where('status',2)->sum('amount') }})</td>
			                				</tr>
			                			</tbody>
			                		</table>

			                		
			                		<a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-info btn-block">Edit User</a><br />

			                		@if($user->is_ban == 0)
			                			<a href="{{ url('admin/users/'.$user->id.'/ban') }}" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-block">Ban User</a><br />
			                		@else
			                			<a href="{{ url('admin/users/'.$user->id.'/unban') }}" onclick="return confirm('Are you sure?');" class="btn btn-success btn-block">Un-Ban User</a><br />
			                		@endif
			                	</div>
			                </div>
			                <div class="row">
			                	<div class="col-md-12">
			                		<h3>All List of Members Under This Affiliate</h3>
			                		<table id="user-transaction-table" class="table table-striped table-hover table-fw-widget">
					                    <thead>
					                        <tr>
					                            <th>Fullname</th>
					                            <th>Email</th>
					                            <th>Phone Number</th>
					                            <th>Registered at</th>
					                            <th>Win/Lose</th>
					                            <th>Action</th>
					                        </tr>
					                    </thead>
					                    <tbody>
					                    	@foreach($members as $member)
					                    		<tr>
					                    			<td>{{ $member->name }}</td>
					                    			<td>{{ $member->email }}</td>
					                    			<td>{{ $member->phone }}</td>
					                    			<td>{{ $member->created_at->format('d M Y, h:iA') }}</td>
					                    			<td>
					                    				@php
								                    		$member_dep = \App\Transaction::where('user_id',$member->id)->where('transaction_type','deposit')->where('status',2)->sum('amount');

								                    		$member_withdraw = \App\Transaction::where('user_id',$member->id)->where('transaction_type','withdraw')->where('status',2)->sum('amount');
								                    	
								                    		$winlose_raw = $member_dep - $member_withdraw;

								                    		if($winlose_raw < 0)
								                    		{
								                    			$winlose = '<span class="label label-danger">RM '.number_format($winlose_raw,2).'</span>';
								                    		}
								                    		else
								                    		{
								                    			$winlose = '<span class="label label-success">RM '.number_format($winlose_raw,2).'</span>';
								                    		}

								                    	@endphp
								                    	{!! $winlose !!}
					                    			</td>
					                    			<td><a class="label label-info" href="{{ url('admin/users/'.$member->id) }}">View</a></td>
					                    		</tr>
					                    	@endforeach
					                    </tbody>
					                </table>
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