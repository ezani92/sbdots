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
			                				<tr>
			                					<td width="30%"><strong>Remarks</strong></td>
			                					<td>{{ $user->remarks }}</td>
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
			                		<a data-toggle="modal" data-target="#modal-password" class="btn btn-info btn-block">Update Password</a><br />

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
			<form method="get">
        	<div class="row">
        		@php

        			if(isset($_GET['date_from']))
        			{
        				$date_from= $_GET['date_from'];
        				$date_to = $_GET['date_to'];
        			}
        			else
        			{
        				$date_from = '';
        				$date_to = '';
        			}

        		@endphp
        		<div class="col-md-6">
        			<div class="form-group">
						<label>FROM</label>
						<input data-toggle="datepicker" type="text" name="date_from" class="form-control" value="{{ $date_from }}" required>
					</div>
        		</div>
        		<div class="col-md-6">
        			<div class="form-group">
						<label>To</label>
						<input data-toggle="datepicker" type="text" name="date_to" value="{{ $date_to }}" class="form-control" required>
					</div>
        		</div>
        		<div class="col-md-12">
        				<div class="form-group">
							<button type="submit" class="btn btn-info btn-block">Filter</button>
						</div>
        		</div>
        	</div>
        	</form>

        	<div class="row">
				<div class="col-md-6">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><strong>Total Members Registered</strong></td>
                                <td>{{ $members->count() }}</td>
                            </tr>
                            <tr>
                                <td><strong>Total Deposit</strong></td>
                                <td>RM {{ number_format($deposit_sum,2) }}</td>
                            </tr>
                            <tr>
                                <td><strong>Total Withdraw</strong></td>
                                <td>RM {{ number_format($withdraw_sum,2) }}</td>
                            </tr>
                        </tbody>
                    </table>
				</div>
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tbody>
                        	@if($winlose < 0)
	                            <tr>
	                                <td><strong>WIN / LOSE</strong></td>
	                                <td><span class="label label-danger">RM {{ $winlose }}</span></td>
	                            </tr>
	                            <tr>
	                                <td><strong>FIGHT</strong></td>
	                                <td style="color: red;">RM {{ $final_commision }}</td>
	                            </tr>
                            @else
                            	<tr>
	                                <td><strong>WIN / LOSE</strong></td>
	                                <td><span class="label label-success">RM {{ $winlose }}</span></td>
	                            </tr>
	                            <tr>
	                                <td><strong>COMMISION</strong></td>
	                                <td style="color: green;">RM {{ $final_commision }}</td>
	                            </tr>
							@endif
                        </tbody>
                    </table>
                </div>
        	</div>

        	<hr />
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-body">
                            <br />
                            <table id="games-table" class="table table-striped table-hover table-fw-widget">
                                <thead>
                                    <tr>
					                    <th>Fullname</th>
					                    <th>Phone Number</th>
					                    <th>Registered at</th>
					                    <th>Total Deposit</th>
					                    <th>Total Withdraw</th>
					                    <th>Win/Lose</th>
					                </tr>
                                </thead>
                                <tbody>
                                    @if($members->count() == 0)
					            		<tr>
					            			<td colspan="6">You have no affiliate members registered in this time frame.</td>
					            		</tr>
					            	@else
						                @foreach($members as $member)
						                <tr>
						                    <td>{{ $member->name }}</td>
						                    <td>{{ $member->phone }}</td>
						                    <td>{{ $member->created_at->format('d M Y, h:iA') }}</td>
						                    <td>
						                    	@php
						                    		$member_dep_raw = \App\Transaction::where('user_id',$member->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->sum('amount');

						                    		$member_dep = 'RM '.number_format($member_dep_raw,2);

						                    	@endphp
						                    	{!! $member_dep !!}
						                    </td>
						                    <td>
						                    	@php

						                    		$member_withdraw_raw = \App\Transaction::where('user_id',$member->id)->where('transaction_type','withdraw')->where('status',2)->sum('amount');
						                    	
						                    		$member_withdraw = 'RM '.number_format($member_withdraw_raw,2);

						                    	@endphp
						                    	{!! $member_withdraw !!}
						                    </td>
						                    <td>
						                    	@php
						                    		$member_dep = \App\Transaction::where('user_id',$member->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->sum('amount');

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
						                </tr>
						                @endforeach
						            @endif
                                </tbody>
                            </table>
                            {{-- {{ $transactions->appends(Request::except('page'))->links() }} --}}
                            <br />
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
<script type="text/javascript">
	$('[data-toggle="datepicker"]').datepicker({
	  	dateFormat: 'dd-mm-yy'
	});
</script>
</body></html>