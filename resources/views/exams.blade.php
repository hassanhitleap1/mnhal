{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('teacher', 'Teacher:') }}
			{{ Form::text('teacher') }}
		</li>
		<li>
			{{ Form::label('school', 'School:') }}
			{{ Form::text('school') }}
		</li>
		<li>
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::text('description') }}
		</li>
		<li>
			{{ Form::label('category', 'Category:') }}
			{{ Form::text('category') }}
		</li>
		<li>
			{{ Form::label('level', 'Level:') }}
			{{ Form::text('level') }}
		</li>
		<li>
			{{ Form::label('manhal_quizid', 'Manhal_quizid:') }}
			{{ Form::text('manhal_quizid') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}