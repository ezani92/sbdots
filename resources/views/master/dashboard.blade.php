@include('master.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	<div class="row">
        		<div class="col-md-12">
        			<div class="well"><h3>My Referral Link : {{ url('/') }}/aff/?ref={{ \Auth::user()->affiliate_id }}</h3></div>
        		</div>
        	</div>
			<div class="row">
				<div class="col-md-6">
					<div class="well"><h3>Total Agent Under  : {{ $total_agent }}</h3></div>
				</div>
				<div class="col-md-6">
					<div class="well"><h3>Total Win/Lose  : RM{{ $total_win_lose }}</h3></div>
				</div>
        	</div>
        	<div class="row">
			    <div class="col-md-12">
			        <h3>All List of Agent Under My Account</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
					        <table id="user-transaction-table" class="table table-striped table-hover table-fw-widget">
					            <thead>
					                <tr>
					                    <th>Fullname</th>
					                    <th>Email</th>
					                    <th>Phone Number</th>
					                    <th>Registered at</th>
					                    <th>Win/Lose</th>
					                    <th>View</th>
					                </tr>
					            </thead>
					            <tbody>
					            	@if($agents->count() == 0)
					            		<tr>
					            			<td colspan="5">You have no affiliate members.</td>
					            		</tr>
					            	@else
						                @foreach($agents as $agent)
						                <tr>
						                    <td>{{ $agent->name }}</td>
						                    <td>{{ $agent->email }}</td>
						                    <td>{{ $agent->phone }}</td>
						                    <td>{{ $agent->created_at->format('d M Y, h:iA') }}</td>
						                    <td>
						                    	@php
						                    		$members = \App\User::where('referred_by',$agent->affiliate_id)->get();

								                    $deposit_sum = 0;
								                    $withdraw_sum = 0;

								                    foreach($members as $member)
								                    {
								                        $dep = \App\Transaction::where('user_id',$member->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->sum('amount');
								                        $with = \App\Transaction::where('user_id',$member->id)->where('transaction_type','withdraw')->where('status',2)->sum('amount');

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
						                    <td><a href="{{ url('master/agent/'.$agent->id) }}" class="label label-info">View</a></td>
						                </tr>
						                @endforeach
						            @endif
					            </tbody>
					        </table>
					    </div>
					</div>
			    </div>
			</div>

            
                    
        </div>
    </div>
@include('master.footer')
</body></html>