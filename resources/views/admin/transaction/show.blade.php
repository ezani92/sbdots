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
			                				<tr>
			                					<td width="30%"><strong>Transaction Status</strong></td>
			                					<td>
			                						@if($transaction->status == 1)
			                							<span class="label label-warning">Progress</span>
			                						@elseif($transaction->status == 2)
			                							<span class="label label-success">Success</span>
			                						@elseif($transaction->status == 3)
			                							<span class="label label-danger">Rejected</span>
			                						@endif
			                					</td>
			                				</tr>
			                				@if($transaction->transaction_type == 'deposit')
			                					@php

                                                    $data = json_decode($transaction->data, true);
                                                    $game = \App\Game::find($data['game_id']);

                                                @endphp
			                					<tr>
				                					<td><strong>Game Name</strong></td>
				                					<td>
														@if(!$game)
															Game not selected
														@else
															{{ $game->name }}
														@endif
				                					</td>
				                				</tr>
				                				<tr>
				                					<td><strong>Amount Deposit</strong></td>
				                					<td>RM {{ $transaction->amount }}</td>
				                				</tr>
				                				@if($transaction->bank == null)
												<tr>
				                					<td><strong>To Bank Account Name</strong></td>
				                					<td><code>Not Set</code></td>
				                				</tr>
				                				@else
				                				<tr>
				                					<td><strong>To Bank Account Name</strong></td>
				                					<td>{{ $transaction->bank->account_name }}</td>
				                				</tr>
				                				<tr>
				                					<td><strong>To Bank Account No</strong></td>
				                					<td>{{ $transaction->bank->account_no }}</td>
				                				</tr>
				                				@endif
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
				                				<tr>
				                					<td><strong>Last Deposit Transaction</strong></td>
				                					@php

				                						$last_transaction = \App\Transaction::where('user_id',$transaction->user->id)->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->latest()->first();

				                					@endphp
				                					@if(!$last_transaction)
													<td><code style="color: red;">No Last Transaction</code></td>
				                					@else
				                					<td>
														<ul>
															<li>Transaction ID : [#{{ sprintf('%06d', $last_transaction->id) }}]</li>
															<li>Deposit Amount : RM {{ $last_transaction->amount }}</li>
															@if($last_transaction->bonus == null)
																<li>Bonus Amount : -</li>
															@else
																@php
																	$bonus = \App\Transaction::withTrashed()->where('bonus_for',$last_transaction->id)->first();
																@endphp
																<li>Bonus Amount : RM {{ $bonus->amount }}</li>
															@endif
														</ul>
				                					</td>
				                					@endif
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
				                					<td>
														@if(!$transfer_from)
															Game not selected
														@else
															{{ $transfer_from->name }}
														@endif
				                					</td>
				                				</tr>
				                				<tr>
				                					<td><strong>To Game</strong></td>
				                					<td>
				                						@if(!$transfer_to)
															Game not selected
														@else
															{{ $transfer_to->name }}
														@endif
				                					</td>
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
			                		<a href="{{ url('admin/transaction/'.$transaction->id.'/edit') }}" class="btn btn-info btn-block">Update Transaction</a><br />
			                		@if($transaction->transaction_type == 'deposit')
			                		<button data-toggle="modal" data-target="#modal-bonus" type="button" class="btn btn-info btn-block">Add Bonus For This Transaction</button>
			                		<br />
			                		<h4>Bonus</h4>
			                		<table class="table table-bordered table-striped">
			                			<thead>
					                        <tr>
					                            <th>Bonus Name</th>
					                            <th>Amount</th>
					                            <th>Date & Time</th>
					                            <th>Action</th>
					                        </tr>
					                    </thead>
			                			<tbody>
			                				@foreach($bonuses as $bonus)
			                				<tr>
			                					<td>{{ $bonus->bonus->name }}</td>
			                					<td>RM {{ $bonus->amount }}</td>
			                					<td>{{ $bonus->created_at->format('d M Y, h:i A') }}</td>
			                					<td><a href="{{ url('admin/transaction/'.$bonus->id.'/deletebonus') }}" class="label label-danger">Delete</a></td>
			                				</tr>
			                				@endforeach
			                			</tbody>
			                		</table>
			                		<br />
			                		@endif
			                		<h4>Transaction Logs</h4>
			                		<table class="table table-bordered table-striped">
			                			<thead>
					                        <tr>
					                            <th>Updated By</th>
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
		@if($transaction->bonus_id == 0)
			<div id="modal-bonus" tabindex="-1" role="dialog" class="modal fade">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
			            </div>
			            <div class="modal-body">
							<h3 class="text-center">This Transaction Has No Bonus</h3>
			            </div>
			            <div class="modal-footer"></div>
			        </div>
			    </div>
			</div> 	                					
		@else
			<div id="modal-bonus" tabindex="-1" role="dialog" class="modal fade">
			    <div class="modal-dialog">
			        <div class="modal-content">
			            <div class="modal-header">
			                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
			            </div>
			            <div class="modal-body">
							<form method="POST" action="{{ url('admin/transaction/addbonus') }}">
							    @csrf
							    <input type="hidden" name="user_id" value="{{ $transaction->user_id }}">
							    <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">

							    <div class="row">
							    	<div class="form-group col-md-12">
								        <label>Bonus Name</label>
								        <input type="text" name="bonus_name" class="form-control" value="{{ $transaction->bonus->name }}" readonly="true">
								    </div>
							    </div>
							    
							    <div class="row">
							    	<div class="form-group col-md-12">
								        <label>Bonus Amount (RM)</label>
								        <input type="number" name="bonus_amount" step="0.01" class="form-control" required>
								    </div>
							    </div>
							    
							    <div class="form-group">
							        <button type="submit" class="btn btn-info btn-block">Add Bonus</button>
							    </div>
							</form>
			            </div>
			            <div class="modal-footer"></div>
			        </div>
			    </div>
			</div>               					
		@endif
    </div>
@include('admin.footer')
</body></html>