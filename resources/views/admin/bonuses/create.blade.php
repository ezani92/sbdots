@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Add New Bonus</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('admin/bonuses') }}" enctype="multipart/form-data">
			                	@csrf
							    <div class="form-group">
							        <label>Bonus Code (without space)</label>
							        <input type="text" name="code" class="form-control" required>
							    </div>
							    <div class="form-group">
							        <label>Bonus Name</label>
							        <input type="text" name="name" class="form-control" required>
							    </div>
							    <div class="form-group">
							        <label>Bonus Description</label>
							        <textarea name="description" class="form-control" required></textarea>
							    </div>
							    <div class="form-group">
							        <label>Bonus Type</label>
							        <select name="bonus_type" class="form-control" required>
							        	<option value="">Select</option>
							        	<option value="fixed">fixed</option>
							        	<option value="percentage">percentage</option>
							        </select>
							    </div>
							    <div class="form-group">
							        <label>Value</label>
							        <input type="number" name="value" class="form-control" required>
							    </div>
							    <div class="form-group">
							        <label>Allow Multiple Used?</label>
							        <select name="multi_used" class="form-control" required>
							        	<option value="1">Yes</option>
							        	<option value="0">No</option>
							        </select>
							    </div>
							    <div class="form-group">
							        <label>Daily Used Once</label>
							        <select name="daily" class="form-control" required>
							        	<option value="0">No</option>
							        	<option value="1">Yes</option>
							        </select>
							    </div>
							    <div class="form-group">
							        <label>Minimum Deposit To Used This Code</label>
							        <input type="number" name="min_deposit" class="form-control" required>
							    </div>
							    <div class="form-group">
							        <label>Exclude Games To Used This Code</label>
							        <select class="form-control multiselect" name="exclude_games[]" multiple="multiple">
										@foreach($games as $game)
											<option value="{{ $game->id }}">{{ $game->name }}</option>
										@endforeach
									</select>
							    </div>
							    <div class="form-group">
							        <button type="submit" class="btn btn-info">Submit</button>
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
<script type="text/javascript">
	
	$(document).ready(function() {
	    $('.multiselect').select2();
	});

</script>
</body></html>