@include('affiliate.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	<div class="row">
        		<div class="col-md-12">
        			<h3>Win/lose Summary Report</h3>
        		</div>
        	</div>
        	<hr />
        	<form method="get">
        	<div class="row">
        		@php

        			if(isset($input['date_from']))
        			{
        				$date_from= $input['date_from'];
        				$date_to = $input['date_to'];
        			}
        			else
        			{
        				$date_from = '';
        				$date_to = '';
        			}

        		@endphp
        		<div class="col-md-6">
        			<div class="form-group">
						<label>From</label>
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
                                <td>{{ $deposit_sum }}</td>
                            </tr>
                            <tr>
                                <td><strong>Total Withdraw</strong></td>
                                <td>{{ $withdraw_sum }}</td>
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
    </div>
@include('affiliate.footer')
<script type="text/javascript">
	$('[data-toggle="datepicker"]').datepicker({
	  	dateFormat: 'dd-mm-yy'
	});
</script>
</body></html>