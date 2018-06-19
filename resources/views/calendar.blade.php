{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('user_type', 'User_type:') }}
			{{ Form::text('user_type') }}
		</li>
		<li>
			{{ Form::label('user', 'User:') }}
			{{ Form::text('user') }}
		</li>
		<li>
			{{ Form::label('activity_type', 'Activity_type:') }}
			{{ Form::text('activity_type') }}
		</li>
		<li>
			{{ Form::label('activity_id', 'Activity_id:') }}
			{{ Form::text('activity_id') }}
		</li>
		<li>
			{{ Form::label('start_date', 'Start_date:') }}
			{{ Form::text('start_date') }}
		</li>
		<li>
			{{ Form::label('end_date', 'End_date:') }}
			{{ Form::text('end_date') }}
		</li>
		<li>
			{{ Form::label('school', 'School:') }}
			{{ Form::text('school') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}