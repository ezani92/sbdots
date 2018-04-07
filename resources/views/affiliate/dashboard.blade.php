@include('affiliate.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	<div class="row">
        		<div class="col-md-12">
        			<div class="well"><h3>My Referral Link : {{ url('/') }}/?ref={{ \Auth::user()->affiliate_id }}</h3></div>
        		</div>
        	</div>
			<div class="row">
				<div class="col-md-3">
					<div class="well"><h3>Today Members Registered  : {{ $user_today }}</h3></div>
				</div>
				<div class="col-md-3">
					<div class="well"><h3>Today Members Deposit : RM {{ $today_deposit_sum }}</h3></div>
				</div>
				<div class="col-md-3">
					<div class="well"><h3>Today Members Withdraw : RM {{ $today_withdraw_sum }}</h3></div>
				</div>
				<div class="col-md-3">
					<div class="well"><h3>Today Win/Lose  : RM{{ $today_winlose }}</h3></div>
				</div>
        	</div>
        	<div class="row">
			    <div class="col-md-12">
			        <h3>All List of Members Under This Affiliate</h3>
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
					                </tr>
					            </thead>
					            <tbody>
					            	@if($members->count() == 0)
					            		<tr>
					            			<td colspan="5">You have no affiliate members.</td>
					            		</tr>
					            	@else
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
@include('affiliate.footer')
</body></html>