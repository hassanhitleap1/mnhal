{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('student', 'Student:') }}
			{{ Form::text('student') }}
		</li>
		<li>
			{{ Form::label('school', 'School:') }}
			{{ Form::text('school') }}
		</li>
		<li>
			{{ Form::label('type', 'Type:') }}
			{{ Form::text('type') }}
		</li>
		<li>
			{{ Form::label('ref_id', 'Ref_id:') }}
			{{ Form::text('ref_id') }}
		</li>
		<li>
			{{ Form::label('min_point', 'Min_point:') }}
			{{ Form::text('min_point') }}
		</li>
		<li>
			{{ Form::label('max_point', 'Max_point:') }}
			{{ Form::text('max_point') }}
		</li>
		<li>
			{{ Form::label('points', 'Points:') }}
			{{ Form::text('points') }}
		</li>
		<li>
			{{ Form::label('percent', 'Percent:') }}
			{{ Form::text('percent') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}