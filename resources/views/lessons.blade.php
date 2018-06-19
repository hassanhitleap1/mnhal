{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::text('description') }}
		</li>
		<li>
			{{ Form::label('level', 'Level:') }}
			{{ Form::text('level') }}
		</li>
		<li>
			{{ Form::label('school', 'School:') }}
			{{ Form::text('school') }}
		</li>
		<li>
			{{ Form::label('teacher', 'Teacher:') }}
			{{ Form::text('teacher') }}
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
			{{ Form::label('category', 'Category:') }}
			{{ Form::text('category') }}
		</li>
		<li>
			{{ Form::label('start_date', 'Start_date:') }}
			{{ Form::text('start_date') }}
		</li>
		<li>
			{{ Form::label('close_date', 'Close_date:') }}
			{{ Form::text('close_date') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}