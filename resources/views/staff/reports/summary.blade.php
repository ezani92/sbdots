@include('staff.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	<div class="row">
        		<div class="col-md-12">
        			<h3>Summart Report</h3>
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
                                <td><strong>Total User Registered</strong></td>
                                <td>{{ $total_user }}</td>
                            </tr>
                            <tr>
                                <td><strong>Total Transaction</strong></td>
                                <td>{{ $total_transaction }}</td>
                            </tr>
                            <tr>
                                <td><strong>Total Deposit</strong></td>
                                <td>{{ $count_deposit }}</td>
                            </tr>
                            <tr>
                                <td><strong>Total Withdrawal</strong></td>
                                <td>{{ $count_withdrawal }}</td>
                            </tr>
                        </tbody>
                    </table>
				</div>
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><strong>Deposit Worth</strong></td>
                                <td>RM {{ $worth_deposit }}</td>
                            </tr>
                            <tr>
                                <td><strong>Withdrawal Worth</strong></td>
                                <td>RM {{ $worth_withdrawal }}</td>
                            </tr>
                            <tr>
                                <td><strong>Bonus Worth</strong></td>
                                <td>RM {{ $worth_bonus }}</td>
                            </tr>
                            <tr>
                                <td><strong>WIN / LOSE</strong></td>
                                <td>
                                    @if($winlose < 0)
                                        <span class="label label-danger">RM {{ $winlose }}</span>
                                    @else
                                        <span class="label label-success">RM {{ $winlose }}</span>
                                    @endif
                                </td>
                            </tr>
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
                                        <th>Transaction ID</th>
                                        <th>Type</th>
                                        <th>Approve Date</th>
                                        <th>Fullname</th>
                                        <th>Group</th>
                                        <th>Bank</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $transaction)
                                        @if($transaction->deposit_type == 'bonus')

                                        @else
                                            <tr>
                                                <td>#{{ sprintf('%06d', $transaction->id) }}</td>
                                                <td>
                                                    @if($transaction->transaction_type == 'deposit')
                                                        <span class="label label-success">Deposit</span>
                                                    @elseif($transaction->transaction_type == 'withdraw')
                                                        <span class="label label-danger">Withdraw</span>
                                                    @else
                                                        <span class="label label-info">Transfer</span>
                                                    @endif
                                                </td>
                                                <td>{{ $transaction->updated_at->format('d M Y, h:i A') }}</td>
                                                <td>{{ $transaction->user->name }}</td>
                                                <td>{{ $transaction->user->group->name }}</td>
                                                <td>
                                                    @if($transaction->transaction_type == 'transfer')
                                                        -
                                                    @else
                                                        {{ $transaction->bank->name }}
                                                    @endif
                                                <td>{{ $transaction->amount }}</td>
                                            </tr>
                                        @endif
                                    @endforeach
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
@include('staff.footer')
<script type="text/javascript">
	$('[data-toggle="datepicker"]').datepicker({
	  	dateFormat: 'dd-mm-yy'
	});
</script>
</body></html>