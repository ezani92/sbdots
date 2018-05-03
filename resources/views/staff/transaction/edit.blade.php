@include('staff.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
				@if($transaction->transaction_type == 'deposit')
			    <div class="col-md-12">
			        <h3>Edit Transaction [#{{ sprintf('%06d', $transaction->id) }}]</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('staff/transaction/'.$transaction->id) }}" enctype="multipart/form-data">
			                	@csrf
			                	@method('patch')
			                	<input type="hidden" name="type_transaction" value="{{ $transaction->transaction_type }}">
							    <div class="form-group">
							        <label>Amount (RM)</label>
							        <input type="number" step="0.01" name="amount" class="form-control" value="{{ $transaction->amount }}" required readonly="true">
							    </div>

							    @if($transaction->bank == null)
								
								<div class="form-group">
							        <label>Bank</label>
							        {{ Form::select('bank', \App\Bank::pluck('name','id'), null, ['class' => 'form-control', 'required' => 'required']) }}
							    </div>

							    @endif
			                	
							    <div class="form-group">
							        <label>Status</label>
							        {{ Form::select('status', ['' => 'Select', '2' => 'Completed', '3' => 'Rejected'], $transaction->status, ['class' => 'form-control', 'required' => 'required']) }}
							    </div>

							    <div class="form-group">
							        <label>Remarks</label>
							        <textarea name="remarks" class="form-control">{{ $transaction->remarks }}</textarea>
							    </div>
							    
							    <div class="form-group">
							    	<a href="{{ url()->previous() }}"><button type="button" class="btn btn-default">Back To Transaction Details</button></a>
							        <button type="submit" class="btn btn-info">Update Transaction</button>
							    </div>
							</form>
			                <br />
			            </div>
			        </div>
			    </div>
			    @elseif($transaction->transaction_type == 'withdraw')
			    <div class="col-md-12">
			        <h3>Edit Transaction [#{{ sprintf('%06d', $transaction->id) }}]</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('staff/transaction/'.$transaction->id) }}" enctype="multipart/form-data">
			                	@csrf
			                	@method('patch')
			                	<input type="hidden" name="type_transaction" value="{{ $transaction->transaction_type }}">
							    <div class="form-group">
							        <label>Amount (RM)</label>
							        <input type="number" step="0.01" name="amount" class="form-control" value="{{ $transaction->amount }}" required>
							    </div>
			                	
							    <div class="form-group">
							        <label>Status</label>
							        {{ Form::select('status', ['' => 'Select', '2' => 'Completed', '3' => 'Rejected'], $transaction->status, ['class' => 'form-control', 'required' => 'required']) }}
							    </div>

							    <div class="form-group">
							        <label>Bank</label>
							        <select class="form-control" name="bank">
							        	@foreach(\App\Bank::all() as $bank)
							        		<option value="{{ $bank->id }}">{{ $bank->name }} - {{ $bank->account_name }}</option>
							        	@endforeach
							        </select>
							    </div>

							    <div class="form-group">
							        <label>Remarks</label>
							        <textarea name="remarks" class="form-control">{{ $transaction->remarks }}</textarea>
							    </div>
							    
							    <div class="form-group">
							    	<a href="{{ url()->previous() }}"><button type="button" class="btn btn-default">Back To Transaction Details</button></a>
							        <button type="submit" class="btn btn-info">Update Transaction</button>
							    </div>
							</form>
			                <br />
			            </div>
			        </div>
			    </div>
			    @elseif($transaction->transaction_type == 'transfer')
			    <div class="col-md-12">
			        <h3>Edit Transaction [#{{ sprintf('%06d', $transaction->id) }}]</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('staff/transaction/'.$transaction->id) }}" enctype="multipart/form-data">
			                	@csrf
			                	@method('patch')
			                	<input type="hidden" name="type_transaction" value="{{ $transaction->transaction_type }}">
							    <div class="form-group">
							        <label>Amount (RM)</label>
							        <input type="number" step="0.01" name="amount" class="form-control" value="{{ $transaction->amount }}" required>
							    </div>
			                	
							    <div class="form-group">
							        <label>Status</label>
							        {{ Form::select('status', ['' => 'Select', '2' => 'Completed', '3' => 'Rejected'], $transaction->status, ['class' => 'form-control', 'required' => 'required']) }}
							    </div>

							    <div class="form-group">
							        <label>Remarks</label>
							        <textarea name="remarks" class="form-control">{{ $transaction->remarks }}</textarea>
							    </div>
							    
							    <div class="form-group">
							    	<a href="{{ url()->previous() }}"><button type="button" class="btn btn-default">Back To Transaction Details</button></a>
							        <button type="submit" class="btn btn-info">Update Transaction</button>
							    </div>
							</form>
			                <br />
			            </div>
			        </div>
			    </div>
			    @endif
			</div>
		</div>
    </div>
@include('staff.footer')
</body></html>