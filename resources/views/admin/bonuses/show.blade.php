@include('admin.header')
    <div class="be-content">
        <div class="main-content container-fluid">
        	@if(Session::has('message'))
				<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
			@endif
			<div class="row">
			    <div class="col-md-12">
			        <h3>Bonus Details</h3>
			        <div class="panel panel-default panel-border-color panel-border-color-primary">
			            <div class="panel-body">
			                <div class="row">
			                	<div class="col-md-6">
			                		<table class="table table-bordered table-striped">
			                			<tbody>
			                				<tr>
			                					<td width="30%"><strong>Bonus Code</strong></td>
			                					<td>{{ $bonus->bonus_code }}</td>
			                				</tr>
			                				<tr>
			                					<td width="30%"><strong>Name</strong></td>
			                					<td>{{ $bonus->name }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Description</strong></td>
			                					<td>{{ $bonus->description }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Type</strong></td>
			                					<td>{{ $bonus->type }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Value</strong></td>
			                					<td>{{ $bonus->value }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Allow Multiple Use?</strong></td>
			                					<td>
			                						@if($bonus->allow_multiple == 0)
			                							No
			                						@else
			                							Yes 
			                						@endif
			                					</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Daily Used Once?</strong></td>
			                					<td>
			                						@if($bonus->daily == 0)
			                							No
			                						@else
			                							Yes 
			                						@endif
			                					</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Minimum Deposit Required</strong></td>
			                					<td>RM {{ $bonus->min_deposit }}</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Game Exclude From Code Used</strong></td>
			                					<td>@if($bonus->exclude_games != null)
				                						@php

				                							$exclude_games = explode(',', $bonus->exclude_games);

				                						@endphp
				                						@foreach($exclude_games as $exclude_game)
				                							@php
				                								$game = \App\Game::find($exclude_game);
				                							@endphp
				                							{{ $game->name }},
				                						@endforeach
				                					@else
				                						none
				                					@endif
			                					</td>
			                				</tr>
			                				<tr>
			                					<td><strong>Created At</strong></td>
			                					<td>{{ $bonus->created_at->format('d M Y,  h:iA') }}</td>
			                				</tr>
			                			</tbody>
			                		</table>
			                	</div>
			                	<div class="col-md-6">
			                		<a href="{{ url('admin/bonuses/'.$bonus->id.'/edit') }}" class="btn btn-info btn-block">Edit Bonus</a><br />
			                		<form method="post" action="{{ url('admin/bonuses/'.$bonus->id) }}">
			                		@csrf
			                		@method('delete')
			                		<button type="submit" class="btn btn-danger btn-block" onclick="return confirm('Are you sure?');">Deactivated</button>
			                		</form>
			                	</div>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
    </div>
@include('admin.footer')
</body></html>