{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('title_ar', 'Title_ar:') }}
			{{ Form::text('title_ar') }}
		</li>
		<li>
			{{ Form::label('title_en', 'Title_en:') }}
			{{ Form::text('title_en') }}
		</li>
		<li>
			{{ Form::label('school', 'School:') }}
			{{ Form::text('school') }}
		</li>
		<li>
			{{ Form::label('level_number', 'Level_number:') }}
			{{ Form::text('level_number') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}