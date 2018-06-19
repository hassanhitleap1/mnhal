{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('school', 'School:') }}
			{{ Form::text('school') }}
		</li>
		<li>
			{{ Form::label('class', 'Class:') }}
			{{ Form::text('class') }}
		</li>
		<li>
			{{ Form::label('period', 'Period:') }}
			{{ Form::text('period') }}
		</li>
		<li>
			{{ Form::label('dayofweek', 'Dayofweek:') }}
			{{ Form::text('dayofweek') }}
		</li>
		<li>
			{{ Form::label('teacher', 'Teacher:') }}
			{{ Form::text('teacher') }}
		</li>
		<li>
			{{ Form::label('category', 'Category:') }}
			{{ Form::text('category') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}