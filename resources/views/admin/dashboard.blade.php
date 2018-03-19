@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
			<div class="row">
				<div class="col-md-3">
					<div class="well"><h3>Total User Registered : {{ $total_user }}</h3></div>
				</div>
				<div class="col-md-3">
					<div class="well"><h3>New Registered Today : {{ $user_today }}</h3></div>
				</div>
				<div class="col-md-3">
					<div class="well"><h3>Total Transaction  : {{ $total_transaction }}</h3></div>
				</div>
				<div class="col-md-3">
					<div class="well"><h3>Total Pending Transaction  : {{ $pending_transaction_count }}</h3></div>
				</div>
        	</div>
        	<div class="row">
        		<div class="col-md-12">
        			<h3>Pending Transaction</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <table id="transaction-table" class="table table-striped table-hover table-fw-widget">
			                    <thead>
			                        <tr>
			                            <th>Transaction ID</th>
			                            <th>Name</th>
			                            <th>Transaction Type</th>
			                            <th>Status</th>
			                            <th>Date Created</th>
			                            <th>Action</th>
			                        </tr>
			                    </thead>
			                    @if($pending_transactions->count() == 0)
			                    	<tr><td colspan="6">No Pending Transaction</td></tr>
			                    @else
			                    <tbody>
			                    	@foreach($pending_transactions as $pending_transaction)
			                    	<tr>
			                    		<td>{{ $pending_transaction->transaction_id }}</td>
			                    		<td>{{ $pending_transaction->user->name }}</td>
			                    		<td>{{ $pending_transaction->transaction_type }}</td>
			                    		<td>
			                    			@if($pending_transaction->status == 1)
                								<span class="label label-warning">Progress</span>
                							@elseif($pending_transaction->status == 2)
                    							<span class="label label-success">Complete</span>
                							@elseif($pending_transaction->status == 3)
                								<span class="label label-danger">Decline</span>
                							@endif
                						</td>
			                    		<td>{{ $pending_transaction->created_at->format('d M Y, h:i A')  }}</td>
			                    		<td>
			                    			<a href="{{ URL::to('admin/transaction/'.$pending_transaction->id) }}" class="btn btn-xs btn-info">View</a>
			                    		</td>
			                    	</tr>
			                    	@endforeach
			                    </tbody>
			                    @endif
			                </table>
			                {{ $pending_transactions->links() }}
			                <br />
			            </div>
			        </div>
				</div>
        	</div>

            
                    
        </div>
    </div>
@include('admin.footer')
</body></html>