@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Transaction Details [#{{ sprintf('%06d', $transaction->id) }}]</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <div class="row">
			                	<div class="col-md-6">
			                		<table class="table table-bordered table-striped">
			                			<tbody>
			                				<tr>
			                					<td width="30%"><strong>Fullname</strong></td>
			                					<td>{{ $transaction->user->name }}</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>Transaction Type</strong></td>
			                					<td>{{ $transaction->transaction_type }}</td>
			                				</tr>
			                				@if($transaction->transaction_type == 'deposit')
			                					@php

                                                    $data = json_decode($transaction->data, true);
                                                    $game = \App\Game::find($data['game_id']);

                                                @endphp
			                					<tr>
				                					<td><strong>Game Name</strong></td>
				                					<td>{{ $game->name }}</td>
				                				</tr>
				                				<tr>
				                					<td><strong>Amount Deposit</strong></td>
				                					<td>RM {{ $transaction->amount }}</td>
				                				</tr>
				                				<tr>
				                					<td><strong>To Bank Account Name</strong></td>
				                					<td>{{ $transaction->bank->account_name }}</td>
				                				</tr>
				                				<tr>
				                					<td><strong>To Bank Account No</strong></td>
				                					<td>{{ $transaction->bank->account_no }}</td>
				                				</tr>
				                				<tr>
				                					<td><strong>Payment Menthod</strong></td>
				                					<td>{{ $data['payment_method'] }}</td>
				                				</tr>
				                				<tr>
				                					<td><strong>Receipt Image</strong></td>
				                					<td><a href="{{ url('storage/receipt/'.$transaction->receipt_file) }}" target="_blank">{{ $transaction->receipt_file }}</a></td>
				                				</tr>
				                				<tr>
				                					<td><strong>Payment Date & Time</strong></td>
				                					<td>{{ $transaction->datetime }}</td>
				                				</tr>
				                				<tr>
				                					<td><strong>Referrence No</strong></td>
				                					<td>{{ $transaction->refference_no }}</td>
				                				</tr>
				                				@if($transaction->bonus_id == 0)
				                					<tr>
					                					<td><strong>Bonus</strong></td>
					                					<td>No Bonus Code</td>
					                				</tr>
				                				@else
				                					<tr>
					                					<td><strong>Bonus</strong></td>
					                					<td>{{ $transaction->bonus->name }}</td>
					                				</tr>
				                				@endif
			                				@elseif($transaction->transaction_type == 'withdraw')
			                					@php

                                                    $data = json_decode($transaction->data, true);
                                                    $game = \App\Game::find($data['game_id']);

                                                @endphp
			                					<tr>
				                					<td><strong>Game Name</strong></td>
				                					<td>{{ $game->name }}</td>
				                				</tr>
				                				<tr>
				                					<td><strong>Amount Withdraw</strong></td>
				                					<td>RM {{ $transaction->amount }}</td>
				                				</tr>
				                				@if($transaction->bank_id == null)

				                				@else
				                					<tr>
					                					<td><strong>Withdraw From Bank</strong></td>
					                					<td>{{ $transaction->bank->name }} - {{ $transaction->bank->account_name }}</td>
					                				</tr>
				                				@endif

				                				<tr>
				                					<td><strong>User Bank Account Name</strong></td>
				                					<td>{{ $transaction->user->bank_name }}</td>
				                				</tr>
				                				<tr>
				                					<td><strong>User Bank Account Number</strong></td>
				                					<td>{{ $transaction->user->bank_account_no }}</td>
				                				</tr>
				                				
			                				@elseif($transaction->transaction_type == 'transfer')

			                					@if($transaction->status == 1)
					                				<tr>
					                					<td><strong>Status</strong></td>
					                					<td><span class="label label-warning">Progress</span></td>
					                				</tr>
				                				@elseif($transaction->status == 2)
				                					<tr>
					                					<td><strong>Status</strong></td>
					                					<td><span class="label label-success">Success</span></td>
					                				</tr>
				                				@elseif($transaction->status == 3)
				                					<tr>
					                					<td><strong>Status</strong></td>
					                					<td><span class="label label-danger">Decline</span></td>
					                				</tr>
				                				@endif
				                				@php

	                                                $data = json_decode($transaction->data, true);
	                                                $transfer_from = \App\Game::find($data['from_game']);
	                                                $transfer_to = \App\Game::find($data['to_game']);

	                                            @endphp
	                                            <tr>
				                					<td><strong>From Game</strong></td>
				                					<td>{{ $transfer_from->name }}</td>
				                				</tr>
				                				<tr>
				                					<td><strong>To Game</strong></td>
				                					<td>{{ $transfer_to->name }}</td>
				                				</tr>
				                				<tr>
				                					<td><strong>Amount</strong></td>
				                					<td>RM {{ $transaction->amount }}</td>
				                				</tr>
				                				
			                				@endif

			                				
			                				<tr>
			                					<td><strong>Remarks / Notes</strong></td>
			                					<td>{{ $transaction->remarks }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Request Submited At</strong></td>
			                					<td>{{ $transaction->created_at->format('d M Y,  h:iA') }}</td>
			                				</tr>
			                			</tbody>
			                		</table>
			                	</div>
			                	<div class="col-md-6">
			                		<a href="{{ url('admin/transaction/'.$transaction->id.'/edit') }}" class="btn btn-info btn-block">Edit Transaction</a><br />
			                		<br />
			                		<h4>Transaction Logs</h4>
			                		<table class="table table-bordered table-striped">
			                			<thead>
					                        <tr>
					                            <th>Staff / Admin Name</th>
					                            <th>Details</th>
					                            <th>Date & Time</th>
					                        </tr>
					                    </thead>
			                			<tbody>
			                				@foreach($logs as $log)
			                				<tr>
			                					<td>{{ $log->user->name }}</td>
			                					<td>{!! $log->detail !!}</td>
			                					<td>{{ $log->created_at->format('d M Y, h:i A') }}</td>
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