@if(\Auth::user()->role == 2)

<a href="{{ URL::to('admin/games/'.$game->id) }}" class="btn btn-xs btn-info">View</a>

@else

<a href="{{ URL::to('staff/games/'.$game->id) }}" class="btn btn-xs btn-info">View</a>

@endif