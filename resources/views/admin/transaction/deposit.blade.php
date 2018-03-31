@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			    	<h3>Deposit Transaction List's</h3>
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

			                <table id="transaction-table" class="table table-striped table-hover table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th>Transaction ID</th>
			                            <th>Request Date</th>
			                            <th>Fullname</th>
			                            <th>Email</th>
			                            <th>Group</th>
			                            <th>Bank</th>
			                            <th>Credit</th>
			                            <th>Status</th>
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
@include('admin.footer')
<script>
    
	var oTable = $('#transaction-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: 'deposit-data',
                data: function(d) {
                    d.from_date = $('input[name=from]').val();
                    d.to_date = $('input[name=to]').val();
                
            	},
            },
            columns: [
                { data: 'transaction_id', name: 'transaction_id' },
                { data: 'created_at', name: 'created_at' },
                { data: 'user_id', name: 'user_id' },
                { data: 'user_email', name: 'user_email' },
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