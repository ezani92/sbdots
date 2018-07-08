@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Withdrawal Transaction List's</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <div class="row">
	                            <div class="col-xs-8 form-inline" style="position: absolute; z-index: 2;">
	                                <div class="input-daterange input-group" id="datepicker">
	                                	<span class="input-group-addon">from</span>
	                                    <input type="text" data-toggle="datepicker" class="input-sm form-control" name="from" value="{{ \Carbon\Carbon::now()->startOfMonth()->format('d-m-Y') }}" />
	                                    <span class="input-group-addon">to</span>
	                                    <input type="text" data-toggle="datepicker" class="input-sm form-control" name="to" value="{{ \Carbon\Carbon::now()->format('d-m-Y') }}"/>
	                                    <span class="input-group-addon">Status</span>
	                                    <select id="status" class="form-control input-sm" style="border-radius: 0;">
	                                    	<option value="">ALL</option>
	                                    	<option value="Complete">Complete</option>
	                                    	<option value="Decline">Decline</option>
	                                    </select>
	                                </div>
	                            </div>
	                        </div>
			                <table id="transaction-table" class="table table-striped table-hover table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th>Transaction ID</th>
			                            <th>Request Date</th>
			                            <th>Fullname</th>
			                            <th>Email</th>
			                            <th>Group</th>
			                            <th>Debit</th>
			                            <th>Bank</th>
			                            <th>Status</th>
			                            <th>Action</th>
			                        </tr>
			                    </thead>
			                </table>
			                <br />
			            </div>
			        </div>
			    </div>
			    <div class="col-md-12">
			    	<h3 class="pull-right">TOTAL CONFIRM WITHDRAW : RM <span id="totalWithdraw">0.00</span></h3>
			    </div>
			</div>
		</div>
    </div>
@include('admin.footer')
<script>
    
	var oTable = $('#transaction-table').DataTable({
            processing: true,
            serverSide: false,
            ajax: {
                url: 'withdrawal-data',
                data: function(d) {
                    d.from_date = $('input[name=from]').val();
                    d.to_date = $('input[name=to]').val();
                
            	},
            },
            columns: [
                { data: 'transaction_id', name: 'transaction_id' },
                { data: 'created_at', name: 'created_at' },
                { data: 'user_id', name: 'user_id' },
                { data: 'email', name: 'email' },
                { data: 'group', name: 'group' },
                { data: 'bank', name: 'bank' },
                { data: 'amount', name: 'amount' },
                { data: 'status', name: 'status' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });

</script>
<script type="text/javascript">
	$('[data-toggle="datepicker"]').datepicker({
	  	dateFormat: 'dd-mm-yy',
	  	autoclose: true,
	});

	$("input[name=from]").change(function(){
	    oTable.draw();
	    calculateTotal();
	});

	$("input[name=to]").change(function(){
	    oTable.draw();
	    calculateTotal();
	});

	calculateTotal();

	function calculateTotal()
	{
		var from_date = $('input[name=from]').val();
		var to_date = $('input[name=to]').val();

		$.get("{{ url('api/admin/withdrawTotal?fromdate=') }}"+ from_date + "&todate=" + to_date, function(data, status){
	        
	        $("#totalWithdraw").text(data);

	    });
	}
	$("#status").on('change', function(){
		$('#transaction-table').DataTable().search(this.value).draw();
	});
</script>
</body></html>