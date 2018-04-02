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
			                					<td width="30%"><strong>Bank Balance</strong></td>
			                					<td>
			                						@if($bank_balance < 0)
			                							<span class="label label-danger">RM {{ number_format($bank_balance,2) }}</span>
			                						@else
			                							<span class="label label-success">RM {{ number_format($bank_balance,2) }}</span>
			                						@endif
			                					</td>
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
			                					<td><strong>Created At</strong></td>
			                					<td>{{ $bank->created_at->format('d M Y,  h:iA') }}</td>
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
			                <br />
			                <div class="row">
	                            <div class="col-xs-4 form-inline" style="position: absolute; z-index: 2;">
	                                <div class="input-daterange input-group" id="datepicker">
	                                	<span class="input-group-addon">from</span>
	                                    <input type="text" data-toggle="datepicker" class="input-sm form-control" name="from" value="{{ \Carbon\Carbon::now()->format('d-m-Y') }}" />
	                                    <span class="input-group-addon">to</span>
	                                    <input type="text" data-toggle="datepicker" class="input-sm form-control" name="to" value="{{ \Carbon\Carbon::now()->format('d-m-Y') }}"/>
	                                </div>
	                            </div>
	                        </div>
			                <table id="bank-record-table" class="table table-striped table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th>Transaction Type</th>
			                            <th>Description</th>
			                            <th>Amount (RM)</th>
			                            <th>Time / Date</th>
			                            <th>Approve By</th>
			                        </tr>
			                    </thead>
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
<script>
    
    var oTable =  $('#bank-record-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ url('admin/banks/'.$bank->id).'/data' }}',
                data: function(d) {
                    d.from_date = $('input[name=from]').val();
                    d.to_date = $('input[name=to]').val();
                
            	},
            },
            columns: [
                { data: 'transaction_type', name: 'transaction_type', orderable: false },
                { data: 'description', name: 'description', orderable: false },
                { data: 'amount', name: 'amount', orderable: false },
                { data: 'created_at', name: 'created_at', orderable: false },
                { data: 'user_id', name: 'user_id', orderable: false },
                // { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });
    
</script>
<script type="text/javascript">
	$('[data-toggle="datepicker"]').datepicker({
	  	format: 'dd-mm-yyyy',
	  	autoclose: true,
	});

	$("input[name=from]").change(function(){
	    oTable.draw();
	});

	$("input[name=to]").change(function(){
	    oTable.draw();
	});
</script>
</body></html>