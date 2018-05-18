@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Bank Details</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <div class="row">
			                	<div class="col-md-6">
			                		<table class="table table-bordered table-striped">
			                			<tbody>
			                				<tr>
			                					<td width="30%"><strong>Bank Name</strong></td>
			                					<td>{{ $bank->name }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Bank Account Name</strong></td>
			                					<td>{{ $bank->account_name }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Bank Account No</strong></td>
			                					<td>{{ $bank->account_no }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Bank Status</strong></td>
			                					<td>
			                						@if($bank->active == 1)
									                	<span class="label label-success">Active</span>
									                @elseif($bank->active == 0)
									                	<span class="label label-danger">Not Active</span>
									                @endif
			                					</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Created At</strong></td>
			                					<td>{{ $bank->created_at->format('d M Y,  h:iA') }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Initial Balance</strong></td>
			                					<td>RM {{ $bank->balance }}</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>Current Balance</strong></td>
			                					<td>
			                						@if($current_balance < 0)
			                							<span class="label label-danger">RM {{ number_format($current_balance,2) }}</span>
			                						@else
			                							<span class="label label-success">RM {{ number_format($current_balance,2) }}</span>
			                						@endif
			                					</td>
			                				</tr>
			                			</tbody>
			                		</table>
			                	</div>
			                	<div class="col-md-6">
			                		<a href="{{ url('admin/banks/'.$bank->id.'/edit') }}" class="btn btn-info btn-block">Edit Bank</a><br />
			                		<form method="post" action="{{ url('admin/banks/'.$bank->id) }}">
			                		@csrf
			                		@method('delete')
			                		<button type="submit" class="btn btn-danger btn-block" onclick="return confirm('Are you sure? All transaction will be deleted also!');">Delete</button>
			                		</form>
			                		<br />
			                		<button data-toggle="modal" data-target="#modal-credit" type="button" class="btn btn-block btn-primary">Credit</button>
			                		<br />
			                		<button data-toggle="modal" data-target="#modal-debit" type="button" class="btn btn-block btn-primary">Debit</button>
			                	</div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<div class="row">
			    <div class="col-md-12">
			        <h3>Bank Transaction Details</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <table id="" class="table table-striped table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th>Transaction Type</th>
			                            <th>Description</th>
			                            <th>Credit</th>
			                            <th>Debit</th>
			                            <th>Running Balance</th>
			                            <th>Time / Date</th>
			                            <th>Approve By</th>
			                        </tr>
			                    </thead>
			                    <tbody>
			                    	@php
			                    		$running_balance = $bank->balance;
			                    	@endphp
			                    	@foreach($records as $record)
			                    	@php
			                    		
			                    		if($record->record == 1)
			                    		{
			                    			$running_balance = $running_balance + $record->amount;
			                    		}
			                    		else
			                    		{
			                    			$running_balance = $running_balance - $record->amount;
			                    		}

			                    		
			                    	@endphp
			                    	<tr>
			                    		<td>{{ $record->transaction_type }}</td>
			                    		<td>{{ $record->description }}</td>
			                    		@if($record->record == 1)
			                    			<td>
			                    				<span class="label label-success">RM {{ $record->amount }}</span>
				                    		</td>
				                    		<td>
				                    			
				                    		</td>
			                    		@else
			                    			<td>
			                    				
				                    		</td>
				                    		<td>
				                    			<span class="label label-danger">RM {{ $record->amount }}</span>
				                    		</td>
			                    		@endif
			                    		<td><span class="label label-info">RM {{ number_format($running_balance,2) }}</span></td>
			                    		<td>{{ $record->created_at->format('d M Y, h:i A') }}</td>
			                    		<td>{{ $record->user->name }}</td>
			                    	</tr>
			                    	@endforeach
			                    </tbody>
			                </table>
			                <br />
			            </div>
			        </div>
			    </div>
			</div>
		</div>
    </div>
    <div id="modal-credit" tabindex="-1" role="dialog" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
	            </div>
	            <div class="modal-body">
	                <h3>Credit Form</h3>
	                <hr />
					<form method="POST" action="{{ url('admin/banks/'.$bank->id.'/credit') }}" enctype="multipart/form-data">
					    @csrf
					    <div class="form-group">
					        <label>Amount</label>
					        <input type="number" step="0.01" name="amount" class="form-control" required>
					    </div>
					    <div class="form-group">
					        <label>Description</label>
					        <textarea class="form-control" name="description"></textarea>
					    </div>
					    <div class="form-group">
					        <button type="submit" class="btn btn-info">Submit</button>
					    </div>
					</form>
	            </div>
	            <div class="modal-footer"></div>
	        </div>
	    </div>
	</div>
	<div id="modal-debit" tabindex="-1" role="dialog" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
	            </div>
	            <div class="modal-body">
	                <h3>Debit Form</h3>
	                <hr />
					<form method="POST" action="{{ url('admin/banks/'.$bank->id.'/debit') }}" enctype="multipart/form-data">
					    @csrf
					    <div class="form-group">
					        <label>Amount</label>
					        <input type="number" step="0.01" name="amount" class="form-control" required>
					    </div>
					    <div class="form-group">
					        <label>Description</label>
					        <textarea class="form-control" name="description"></textarea>
					    </div>
					    <div class="form-group">
					        <button type="submit" class="btn btn-info">Submit</button>
					    </div>
					</form>
	            </div>
	            <div class="modal-footer"></div>
	        </div>
	    </div>
	</div>
@include('admin.footer')
</body></html>