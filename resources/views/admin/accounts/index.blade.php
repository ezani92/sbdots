@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Incomes & Expenses Summary</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <div class="row">
			                	<div class="col-md-6">
			                		<form method="get">
			                		<div class="row">
			                			<div class="col-md-6">
			                				<div class="form-group">
					                			<label>From Date</label>
					                			<input type="text" name="from_date" class="form-control datepicker" required>
					                		</div>
			                			</div>
			                			<div class="col-md-6">
			                				<div class="form-group">
					                			<label>To Date</label>
					                			<input type="text" name="to_date" class="form-control datepicker" required>
					                		</div>
			                			</div>
			                		</div>
			                		<div class="row">
			                			<div class="col-md-12">
			                				<button type="submit" class="btn btn-info btn-block">Filter Date</button>
			                			</div>
			                		</div>
			                		<br />
			                		</form>
			                		
			                		<table class="table table-bordered table-striped">
			                			<tbody>
			                				<tr>
			                					<td><strong>Total Incomes</strong></td>
			                					<td>RM {{ $total_debit }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Total Expenses</strong></td>
			                					<td>RM {{ $total_credit }}</td>
			                				</tr>
			                			</tbody>
			                		</table>
			                	</div>
			                	<div class="col-md-6">
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
			        <h3>Incomes & Expenses Transaction</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <table id="accounts-table" class="table table-striped table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th>Title</th>
			                            <th>Credit</th>
			                            <th>Debit</th>
			                            <th>Insert By</th>
			                            <th>Time / Date</th>
			                            <th>Action</th>
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
					<form method="POST" action="{{ url('admin/accounts/credit') }}" enctype="multipart/form-data">
					    @csrf
					    <div class="form-group">
					        <label>Amount</label>
					        <input type="number" step="0.01" name="amount" class="form-control" required>
					    </div>
					    <div class="form-group">
					        <label>Title</label>
					        <input type="text" name="title" class="form-control" required>
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
					<form method="POST" action="{{ url('admin/accounts/debit') }}" enctype="multipart/form-data">
					    @csrf
					    <div class="form-group">
					        <label>Amount</label>
					        <input type="number" step="0.01" name="amount" class="form-control" required>
					    </div>
					    <div class="form-group">
					        <label>Title</label>
					        <input type="text" name="title" class="form-control" required>
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

	$(".datepicker").datepicker({
		dateFormat: 'dd-mm-yy',
	});

	@if(isset($_GET['from_date']))

		$("input[name=from_date]").datepicker( "setDate" , "{{ $_GET['from_date'] }}" );
		$("input[name=to_date]").datepicker( "setDate" , "{{ $_GET['to_date'] }}" );

		@php
			$url = url('admin/accounts-data').'?from_date='.$_GET['from_date'].'&to_date='.$_GET['to_date'];
		@endphp
		$(function() {
	        $('#accounts-table').DataTable({
	            processing: true,
	            serverSide: true,
	            ajax: {
	                url: 'accounts-data?from_date={{ $_GET['from_date'] }}&to_date={{ $_GET['to_date'] }}',
	            },
	            columns: [
	                { data: 'title', name: 'title' },
	                { data: 'debit', name: 'debit' },
	                { data: 'credit', name: 'credit' },
	                { data: 'user_id', name: 'user_id' },
	                { data: 'created_at', name: 'created_at' },
	                { data: 'actions', name: 'actions', orderable: false, searchable: false }
	            ]
	        });
	    });
	@else
		$(function() {
	        $('#accounts-table').DataTable({
	            processing: true,
	            serverSide: true,
	            ajax: 'accounts-data',
	            columns: [
	                { data: 'title', name: 'title' },
	                { data: 'debit', name: 'debit' },
	                { data: 'credit', name: 'credit' },
	                { data: 'user_id', name: 'user_id' },
	                { data: 'created_at', name: 'created_at' },
	                { data: 'actions', name: 'actions', orderable: false, searchable: false }
	            ]
	        });
	    });
	@endif

    
</script>
</body></html>