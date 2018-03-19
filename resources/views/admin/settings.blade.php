@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>All Website Settings</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <br />
			                <form method="POST" action="{{ url('admin/settings') }}" enctype="multipart/form-data">
			                	@csrf
			                	<div class="form-group">
							        <label>Google Analytic ID</label>
							        <input type="text" name="google_analytic_id" class="form-control" value="{{ \App\Setting::find(4)->value }}">
							    </div>
							    <div class="form-group">
							        <label>SEO Title</label>
							        <input type="text" name="seo_title" class="form-control" value="{{ \App\Setting::find(1)->value }}">
							    </div>
							    <div class="form-group">
							        <label>SEO Description</label>
							        <textarea name="seo_desc" class="form-control" >{{ \App\Setting::find(2)->value }}</textarea>
							    </div>
							    <div class="form-group">
							        <label>SEO Keyword</label>
							        <textarea name="seo_keyword" class="form-control" >{{ \App\Setting::find(3)->value }}</textarea>
							    </div>
							    <hr />
							    <div class="form-group">
							        <label>Minimum Deposit</label>
							        <input type="number" name="min_deposit" class="form-control" value="{{ \App\Setting::find(5)->value }}" required>
							    </div>
							    <div class="form-group">
							        <label>Maximum Deposit</label>
							        <input type="number" name="max_deposit" class="form-control" value="{{ \App\Setting::find(6)->value }}" required>
							    </div>
							    <div class="form-group">
							        <button type="submit" class="btn btn-info">Update Settings</button>
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