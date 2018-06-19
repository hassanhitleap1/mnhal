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
			{{ Form::label('description_ar', 'Description_ar:') }}
			{{ Form::text('description_ar') }}
		</li>
		<li>
			{{ Form::label('description_en', 'Description_en:') }}
			{{ Form::text('description_en') }}
		</li>
		<li>
			{{ Form::label('category', 'Category:') }}
			{{ Form::text('category') }}
		</li>
		<li>
			{{ Form::label('school', 'School:') }}
			{{ Form::text('school') }}
		</li>
		<li>
			{{ Form::label('points', 'Points:') }}
			{{ Form::text('points') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}