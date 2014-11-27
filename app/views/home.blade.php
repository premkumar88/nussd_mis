@extends('layouts.main')

@section('content')

	<h1>Your Items</h1>

	<!-- LOGOUT BUTTON -->
	<a href="{{ URL::route('logout') }}">Sign Out</a>

<ul>
	@foreach ($items as $item)
		<li>
			{{Form::open()}}

				<!-- CSRF Token -->
    				<!-- <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> -->
				<!-- ./ csrf token -->
				{{ Auth::user() }}

				<input 
					type="checkbox" 
					name="{{$item->id}}" 
					id="{{$item->id}}" 
					value="{{$item->id}} {{ $item->done ? 'checked' : ''}}"
					class="checkbox_click"
					/>  
					{{$item->name}}
			{{Form::close()}}
		
		</li>
	@endforeach
</ul>

@stop