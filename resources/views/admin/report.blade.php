@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	
        	<div class="row">
        		<div class="col-md-6">
        				<div class="form-group">
							<label>From</label>
							<input type="date" name="code" class="form-control" required>
						</div>
        		</div>
        		<div class="col-md-6">
        				<div class="form-group">
							<label>To</label>
							<input type="date" name="code" class="form-control" required>
						</div>
        		</div>
        		<div class="col-md-12">
        				<div class="form-group">
							<button class="btn btn-info btn-block">Filter</button>
						</div>
        		</div>
        	</div>
			<div class="row">
				<div class="col-md-6">
					<div class="well"><h3>Total User Registered : {{ $total_user }}</h3></div>
				</div>
				<div class="col-md-6">
					<div class="well"><h3>Total Transaction  : {{ $total_transaction }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Total Deposit Count : {{ $count_deposit }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Total Withdrawal Count : {{ $count_withdrawal }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Total Transfer Count  : {{ $count_transfer }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Deposit Worth (RM) : {{ $count_deposit }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Withdrawal Worth (RM) : {{ $count_withdrawal }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Transfer Worth (RM)  : {{ $count_transfer }}</h3></div>
				</div>
        	</div>
        	

            
                    
        </div>
    </div>
@include('admin.footer')
</body></html>