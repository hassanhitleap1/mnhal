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
			{{ Form::label('order', 'Order:') }}
			{{ Form::text('order') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}