@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Edit Bonus</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('admin/bonuses/'.$bonus->id) }}" enctype="multipart/form-data">
			                	@csrf
			                	@method('patch')
							    <div class="form-group">
							        <label>Bonus Code</label>
							        <input type="text" name="bonus_code" class="form-control" value="{{ $bonus->bonus_code }}" required>
							    </div>
							    <div class="form-group">
							        <label>Bonus Name</label>
							        <input type="text" name="name" class="form-control" value="{{ $bonus->name }}" required>
							    </div>
							    <div class="form-group">
							        <label>Bonus Description</label>
							        <textarea name="description" class="form-control" >{{ $bonus->description }}</textarea>
							    </div>
							    <div class="form-group">
							        <label>Bonus Type</label>
							        {{ Form::select('bonus_type', ['fixed' => 'fixed', 'percentage' => 'percentage'], $bonus->type, ['class' => 'form-control']) }}
							    </div>
							    <div class="form-group">
							        <label>Value</label>
							        <input type="text" name="bonus_value" class="form-control" value="{{ $bonus->value }}" required>
							    </div>
							    <div class="form-group">
							        <label>Minimum Deposit To Use This Code</label>
							        <input type="number" step="0.01" name="min_deposit" class="form-control" value="{{ $bonus->min_deposit }}" required>
							    </div>
							    <div class="form-group">
							        <label>Allow Multiple Use?</label>
							        {{ Form::select('allow_multiple', ['0' => 'No', '1' => 'Yes'], $bonus->allow_multiple, ['class' => 'form-control']) }}
							    </div>
							    
							    <div class="form-group">
							        <button type="submit" class="btn btn-info">Update Bonus Details</button>
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
</body></html>