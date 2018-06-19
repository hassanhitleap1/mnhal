{{ Form::open(array('route' => 'route.name', 'method' => 'POST')) }}
	<ul>
		<li>
			{{ Form::label('product_id', 'Product_id:') }}
			{{ Form::text('product_id') }}
		</li>
		<li>
			{{ Form::label('ref_id', 'Ref_id:') }}
			{{ Form::text('ref_id') }}
		</li>
		<li>
			{{ Form::label('product_type', 'Product_type:') }}
			{{ Form::text('product_type') }}
		</li>
		<li>
			{{ Form::label('ref_type', 'Ref_type:') }}
			{{ Form::text('ref_type') }}
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