@include('staff.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>All Bank List's</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <table id="banks-table" class="table table-striped table-hover table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th>Bank Name</th>
			                            <th>Account No</th>
			                            <th>Account Name</th>
			                            <th>Balance</th>
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
@include('staff.footer')
<script>
    $(function() {
        $('#banks-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: 'banks/data',
            columns: [
                { data: 'name', name: 'name' },
                { data: 'account_no', name: 'account_no' },
                { data: 'account_name', name: 'account_name' },
                { data: 'balance', name: 'balance' }
            ]
        });
    });
</script>
</body></html>