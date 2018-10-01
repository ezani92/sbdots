@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>User Details [Master Affiliate Role]</h3>
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
			                						Master Affiliate
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
			                					<td>{{ url('/') }}/aff/?ref={{ $user->affiliate_id }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Total Agent  Register</strong></td>
			                					<td>{{ $count_aff = \App\User::where('referred_by',$user->affiliate_id)->count() }}</td>
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
						<input data-toggle="datepicker" type="text" name="date_from" class="form-control" value="{{ $date_from }}" required autocomplete="off">
					</div>
        		</div>
        		<div class="col-md-6">
        			<div class="form-group">
						<label>To</label>
						<input data-toggle="datepicker" type="text" name="date_to" value="{{ $date_to }}" class="form-control" required autocomplete="off">
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
                                <td><strong>Total Agent Registered</strong></td>
                                <td>{{ $members->count() }}</td>
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
                    	<div class="panel-heading">
                    		Agent Winlose Summary
                    	</div>
                        <div class="panel-body">
                            <br />
                            <table id="games-table" class="table table-striped table-hover table-fw-widget">
                                <thead>
                                    <tr>
					                    <th>Fullname</th>
					                    <th>Phone Number</th>
					                    <th>Registered at</th>
					                    <th>Win/Lose</th>
					                    <th>Action</th>
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
						                    		$childs = \App\User::where('referred_by',$member->affiliate_id)->get();

								                    $deposit_sum = 0;
								                    $withdraw_sum = 0;

								                    foreach($childs as $child)
								                    {
								                        $dep = \App\Transaction::where('user_id',$child->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->sum('amount');
								                        $with = \App\Transaction::where('user_id',$child->id)->where('transaction_type','withdraw')->where('status',2)->sum('amount');

								                        $deposit_sum = $deposit_sum + $dep;
								                        $withdraw_sum = $withdraw_sum + $with;
								                    }

								                    $winlose = $deposit_sum - $withdraw_sum;

						                    		if($winlose < 0)
						                    		{
						                    			$winlose = '<span class="label label-danger">RM '.number_format($winlose,2).'</span>';
						                    		}
						                    		else
						                    		{
						                    			$winlose = '<span class="label label-success">RM '.number_format($winlose,2).'</span>';
						                    		}

						                    	@endphp
						                    	{!! $winlose !!}
						                    </td>
						                    <td><a href="{{ url('admin/users/'.$member->id) }}" class="label label-info">view</a></td>
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