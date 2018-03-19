@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Edit Transaction [#{{ $transaction->transaction_id }}]</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('admin/transaction/'.$transaction->id) }}" enctype="multipart/form-data">
			                	@csrf
			                	@method('patch')
							    <div class="form-group">
							        <label>Amount</label>
							        <input type="number" step="0.01" name="amount" class="form-control" value="{{ $transaction->amount }}" required>
							    </div>
							    <div class="form-group">
							        <label>Status</label>
							        {{ Form::select('status', ['1' => 'Progress', '2' => 'Completed', '3' => 'Declined'], $transaction->status, ['class' => 'form-control']) }}
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
			</div>
		</div>
    </div>
@include('admin.footer')
</body></html>