@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>All Transaction List's</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <table id="transaction-table" class="table table-striped table-hover table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th>Transaction ID</th>
			                            <th>Request Date / Time</th>
			                            <th>Email</th>
			                            <th>Fullname</th>
			                            <th>Group</th>
			                            <th>Transaction Type</th>
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
    $(function() {
        $('#transaction-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'transaction/data',
            columns: [
                { data: 'transaction_id', name: 'transaction_id' },
                { data: 'created_at', name: 'created_at' },
                { data: 'user_email', name: 'user_email' },
                { data: 'user_id', name: 'user_id' },
                { data: 'group', name: 'group' },
                { data: 'transaction_type', name: 'transaction_type' },
                { data: 'status', name: 'status' },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });
    });
</script>
</body></html>