@extends('layouts.app')

@section('content')
<h1>Events</h1>
<ul>
	@forelse($events as $event)
		<li>{{ $event->name }}</li>
	@empty
		<li>No Events Found!</li>
	@endforelse
</ul>
{!! $events->links('vendor.pagination.bootstrap-4') !!}
@endsection