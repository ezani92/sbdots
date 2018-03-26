@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	<div class="row">
        		<div class="col-md-12">
        			<h3>Summart Report</h3>
        		</div>
        	</div>
        	<hr />
        	<form method="get">
        	<div class="row">
        		@php

        			if(isset($input['date_from']))
        			{
        				$date_from= $input['date_from'];
        				$date_to = $input['date_to'];
        			}
        			else
        			{
        				$date_from = '';
        				$date_to = '';
        			}

        		@endphp
        		<div class="col-md-6">
        			<div class="form-group">
						<label>From</label>
						<input data-toggle="datepicker" type="text" name="date_from" class="form-control" value="{{ $date_from }}" required>
					</div>
        		</div>
        		<div class="col-md-6">
        			<div class="form-group">
						<label>To</label>
						<input data-toggle="datepicker" type="text" name="date_to" value="{{ $date_to }}" class="form-control" required>
					</div>
        		</div>
        		<div class="col-md-12">
        				<div class="form-group">
							<button type="submit" class="btn btn-info btn-block">Filter</button>
						</div>
        		</div>
        	</div>
        	</form>
        	<hr />
			<div class="row">
				<div class="col-md-6">
					<div class="well"><h3>Total User Registered : {{ $total_user }}</h3></div>
				</div>
				<div class="col-md-6">
					<div class="well"><h3>Total Transaction  : {{ $total_transaction }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Total Deposit Transaction : {{ $count_deposit }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Total Withdrawal Transaction : {{ $count_withdrawal }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Total Transfer Transaction  : {{ $count_transfer }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Deposit Worth (RM) : {{ $worth_deposit }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Withdrawal Worth (RM) : {{ $worth_withdrawal }}</h3></div>
				</div>
				<div class="col-md-4">
					<div class="well"><h3>Transfer Worth (RM)  : {{ $worth_transfer }}</h3></div>
				</div>
        	</div>
        	

            
                    
        </div>
    </div>
@include('admin.footer')
<script type="text/javascript">
	$('[data-toggle="datepicker"]').datepicker({
	  	format: 'dd-mm-yyyy'
	});
</script>
</body></html>