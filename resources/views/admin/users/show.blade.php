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
			                				@if($user->referred_by != null)
			                				<tr>
			                					<td><strong>Referral By</strong></td>
			                					<td>
			                						@php
			                							$referred_by = \App\User::where('affiliate_id',$user->referred_by)->first();
			                						@endphp
			                						{{ $referred_by->name }} <a href="{{ url('admin/users/'.$referred_by->id) }}" class="label label-info">view</a>

			                					</td>
			                				</tr>
			                				@endif
			                			</tbody>
			                		</table>
			                	</div>
			                	<div class="col-md-6">
			                		<table class="table table-bordered table-striped">
			                			<tbody>
			                				<tr>
			                					<td width="60%"><strong>Total Approve Deposit</strong></td>
			                					<td>{{ $user->transactions->where('transaction_type','deposit')->where('status',2)->where('deposit_type','normal')->count() }} (RM {{ $user->transactions->where('transaction_type','deposit')->where('deposit_type','normal')->where('status',2)->sum('amount') }})</td>
			                				</tr>
			                				<tr>
			                					<td width="60%"><strong>Total Approve Withdraw</strong></td>
			                					<td>{{ $user->transactions->where('transaction_type','withdraw')->where('status',2)->count() }} (RM {{ $user->transactions->where('transaction_type','withdraw')->where('status',2)->sum('amount') }})</td>
			                				</tr>
			                				<tr>
			                					<td width="60%"><strong>Win Lost Rate (Withdraw - deposit)</strong></td>
			                					<td>RM {{ $user->transactions->where('transaction_type','deposit')->where('status',2)->where('deposit_type','normal')->sum('amount') - $user->transactions->where('transaction_type','withdraw')->where('status',2)->sum('amount') }}</td>
			                				</tr>
			                			</tbody>
			                		</table>

			                		<div class="btn-toolbar">
									    <div role="group" class="btn-group btn-group-justified">
									    	<a data-toggle="modal" data-target="#modal-deposit" class="btn btn-default">Add Deposit</a>
									    	<a data-toggle="modal" data-target="#modal-withdraw" class="btn btn-default">Add Withdraw</a>
									    	<a data-toggle="modal" data-target="#modal-transfer" class="btn btn-default">Add Transfer</a>
									    </div>
									</div><br />
			                		<a href="{{ url('admin/users/'.$user->id.'/edit') }}" class="btn btn-info btn-block">Edit User</a><br />
			                		<a data-toggle="modal" data-target="#modal-password" class="btn btn-info btn-block">Update Password</a><br />

			                		@if($user->is_ban == 0)
			                			<a href="{{ url('admin/users/'.$user->id.'/ban') }}" onclick="return confirm('Are you sure?');" class="btn btn-danger btn-block">Ban User</a><br />
			                		@else
			                			<a href="{{ url('admin/users/'.$user->id.'/unban') }}" onclick="return confirm('Are you sure?');" class="btn btn-success btn-block">Un-Ban User</a><br />
			                		@endif
			                	</div>
			                </div>
			                <div class="row">
			                	<div class="col-md-12">
			                		<h3>User Transaction</h3>
			                		<table id="user-transaction-table" class="table table-striped table-hover table-fw-widget">
					                    <thead>
					                        <tr>
					                            <th>Transaction ID</th>
					                            <th>Transaction Type</th>
					                            <th>Amount (RM)</th>
					                            <th>Status</th>
					                            <th>Date Created</th>
					                            <th>Action</th>
					                        </tr>
					                    </thead>
					                </table>
			                	</div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
		<div id="modal-deposit" tabindex="-1" role="dialog" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
		            </div>
		            <div class="modal-body">
						<form method="POST" action="{{ url('admin/user/transaction/deposit') }}" enctype="multipart/form-data">
						    @csrf
						    <input type="hidden" name="user_id" value="{{ $user->id }}">
						    <div class="row">
						    	<div class="form-group col-md-6">
							        <label>Deposit Amount</label>
							        <input type="number" step="0.01" name="amount" class="form-control" required>
							    </div>
							    <div class="form-group col-md-6">
							        <label>Deposit Method</label>
							        <select name="payment_method" class="form-control">
							        	<option value="Online">Online</option>
							        	<option value="Atm">Atm</option>
							        	<option value="Cash">Cash</option>
							        </select>
							    </div>
						    </div>
						    
						    <div class="row">
							    <div class="form-group col-md-6">
							        <label>Bank</label>
							        <select name="bank" class="form-control">
							        	<option value="">Select</option>
							        	@foreach($banks as $bank)
							        		<option value="{{ $bank->id }}">{{ $bank->name }}</option>
							        	@endforeach
							        </select>
							    </div>
							    <div class="form-group col-md-6">
							        <label>Games</label>
							        <select name="game_id" class="form-control">
							        	<option value="">Select</option>
							        	@foreach($games as $game)
							        		<option value="{{ $game->id }}">{{ $game->name }}</option>
							        	@endforeach
							        </select>
							    </div>
							</div>
						    <div class="form-group">
						        <label>Date</label>
						        <input type="text" name="deposit_date" id="deposit_date" class="form-control datepicker" required>
						    </div>
						    <div class="row">
						    	<div class="form-group col-md-3">
							        <label>Time</label>
							        <select name="deposit_hour" id="deposit_hour" class="form-control" required>
								        <option value="00">00</option>
								        <option value="01">01</option>
								        <option value="02">02</option>
								        <option value="03">03</option>
								        <option value="04">04</option>
								        <option value="05">05</option>
								        <option value="06">06</option>
								        <option value="07">07</option>
								        <option value="08">08</option>
								        <option value="09">09</option>
								        <option value="10">10</option>
								        <option value="11">11</option>
								        <option value="12">12</option>
								    </select>
							    </div>
							    <div class="form-group col-md-3">
							        <label>&nbsp;</label>
							        <select name="deposit_minutes" id="deposit_minutes" class="form-control" required>
								        <option value="00">00</option>
								        <option value="01">01</option>
								        <option value="02">02</option>
								        <option value="03">03</option>
								        <option value="04">04</option>
								        <option value="05">05</option>
								        <option value="06">06</option>
								        <option value="07">07</option>
								        <option value="08">08</option>
								        <option value="09">09</option>
								        <option value="10">10</option>
								        <option value="11">11</option>
								        <option value="12">12</option>
								        <option value="13">13</option>
								        <option value="14">14</option>
								        <option value="15">15</option>
								        <option value="16">16</option>
								        <option value="17">17</option>
								        <option value="18">18</option>
								        <option value="19">19</option>
								        <option value="20">20</option>
								        <option value="21">21</option>
								        <option value="22">22</option>
								        <option value="23">23</option>
								        <option value="24">24</option>
								        <option value="25">25</option>
								        <option value="26">26</option>
								        <option value="27">27</option>
								        <option value="28">28</option>
								        <option value="29">29</option>
								        <option value="30">30</option>
								        <option value="31">31</option>
								        <option value="32">32</option>
								        <option value="33">33</option>
								        <option value="34">34</option>
								        <option value="35">35</option>
								        <option value="36">36</option>
								        <option value="37">37</option>
								        <option value="38">38</option>
								        <option value="39">39</option>
								        <option value="40">40</option>
								        <option value="41">41</option>
								        <option value="42">42</option>
								        <option value="43">43</option>
								        <option value="44">44</option>
								        <option value="45">45</option>
								        <option value="46">46</option>
								        <option value="47">47</option>
								        <option value="48">48</option>
								        <option value="49">49</option>
								        <option value="50">50</option>
								        <option value="51">51</option>
								        <option value="52">52</option>
								        <option value="53">53</option>
								        <option value="54">54</option>
								        <option value="55">55</option>
								        <option value="56">56</option>
								        <option value="57">57</option>
								        <option value="58">58</option>
								        <option value="59">59</option>
								    </select>
							    </div>
							    <div class="form-group col-md-3">
							        <label>&nbsp;</label>
							        <select name="deposit_stamp" id="deposit_stamp" class="form-control" required>
							        	<option value="AM">AM</option>
	        							<option value="PM">PM</option>
							        </select>
							    </div>
							    <div class="form-group col-md-3">
							        <label>&nbsp;</label>
							        <button type="button" id="now" class="btn btn-default form-control">now</button>
							    </div>
						    </div>
						    <div class="row">
								<div class="form-group col-md-6">
								    <label>Reference No	</label>
								    <input type="text" name="refference_no" class="form-control">
								</div>
								<div class="form-group col-md-6">
								    <label>Games</label>
								    <select name="bonus_code" class="form-control">
								       	<option value="">No Bonus</option>
								        @foreach($bonuses as $bonus)
								        	<option value="{{ $bonus->id }}">{{ $bonus->name }}</option>
								        @endforeach
								    </select>
								</div>
							</div>
						    <div class="form-group">
						        <button type="submit" class="btn btn-info btn-block">Submit</button>
						    </div>
						</form>
		            </div>
		            <div class="modal-footer"></div>
		        </div>
		    </div>
		</div>
		<div id="modal-withdraw" tabindex="-1" role="dialog" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
		            </div>
		            <div class="modal-body">
						<form method="POST" action="{{ url('admin/user/transaction/withdraw') }}" enctype="multipart/form-data">
						    @csrf
						    <input type="hidden" name="user_id" value="{{ $user->id }}">

						    <div class="row">
							    <div class="form-group col-md-6">
							        <label>User Bank Name</label>
							        <input type="text" class="form-control" value="{{ $user->bank_name }}" disabled="true">
							    </div>
							     <div class="form-group col-md-6">
							        <label>User Bank Account No</label>
							        <input type="text" class="form-control" value="{{ $user->bank_account_no }}" disabled="true">
							    </div>
							</div>

						    <div class="row">
						    	<div class="form-group col-md-12">
							        <label>Withdraw Amount</label>
							        <input type="number" step="0.01" name="amount" class="form-control" required>
							    </div>
						    </div>
						    
						    <div class="row">
							    <div class="form-group col-md-6">
							        <label>From Bank</label>
							        <select name="bank" class="form-control" required>
							        	<option value="">Select</option>
							        	@foreach($banks as $bank)
							        		<option value="{{ $bank->id }}">{{ $bank->account_name  }} ({{ $bank->account_no }})</option>
							        	@endforeach
							        </select>
							    </div>
							    <div class="form-group col-md-6">
							        <label>From Games</label>
							        <select name="game_id" class="form-control" required>
							        	<option value="">Select</option>
							        	@foreach($games as $game)
							        		<option value="{{ $game->id }}">{{ $game->name }}</option>
							        	@endforeach
							        </select>
							    </div>
							</div>
						    
						    <div class="form-group">
						        <button type="submit" class="btn btn-info btn-block">Submit</button>
						    </div>
						</form>
		            </div>
		            <div class="modal-footer"></div>
		        </div>
		    </div>
		</div>
		<div id="modal-transfer" tabindex="-1" role="dialog" class="modal fade">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
		            </div>
		            <div class="modal-body">
						<form method="POST" action="{{ url('admin/user/transaction/transfer') }}" enctype="multipart/form-data">
						    @csrf
						    <input type="hidden" name="user_id" value="{{ $user->id }}">
						    <div class="row">
						    	<div class="form-group col-md-12">
							        <label>Transfer Amount</label>
							        <input type="number" step="0.01" name="amount" class="form-control" required>
							    </div>
						    </div>
						    
						    <div class="row">
							    <div class="form-group col-md-6">
							        <label>From Games</label>
							        <select name="from_game_id" class="form-control" required>
							        	<option value="">Select</option>
							        	@foreach($games as $game)
							        		<option value="{{ $game->id }}">{{ $game->name }}</option>
							        	@endforeach
							        </select>
							    </div>
							    <div class="form-group col-md-6">
							        <label>To Games</label>
							        <select name="to_game_id" class="form-control" required>
							        	<option value="">Select</option>
							        	@foreach($games as $game)
							        		<option value="{{ $game->id }}">{{ $game->name }}</option>
							        	@endforeach
							        </select>
							    </div>
							</div>
						    
						    <div class="form-group">
						        <button type="submit" class="btn btn-info btn-block">Submit</button>
						    </div>
						</form>
		            </div>
		            <div class="modal-footer"></div>
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
<script>
    $(function() {
        $('#user-transaction-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('admin/users/'.$user->id.'/transaction-data') }}',
            columns: [
                { data: 'transaction_id', name: 'transaction_id' },
                { data: 'transaction_type', name: 'transaction_type' },
                { data: 'amount', name: 'amount' },
                { data: 'status', name: 'status' },
                { data: 'created_at', name: 'created_at' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });
    });

     	$(".datepicker").datepicker({
     		dateFormat: 'dd/mm/yy',
     		autoclose: true
     	});
</script>
<script type="text/javascript">
    
    $('#now').click(function(){
        
        $('#deposit_date').val('{{ \Carbon\Carbon::now()->format('d/m/Y') }}');
        $('#deposit_hour').val('{{ \Carbon\Carbon::now()->format('h') }}');
        $('#deposit_minutes').val('{{ \Carbon\Carbon::now()->format('i') }}');
        $('#deposit_stamp').val('{{ \Carbon\Carbon::now()->format('A') }}');

    });

</script>
</body></html>