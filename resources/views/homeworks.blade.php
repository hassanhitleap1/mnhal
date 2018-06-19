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
			{{ Form::label('category', 'Category:') }}
			{{ Form::text('category') }}
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
			{{ Form::label('productid', 'Productid:') }}
			{{ Form::text('productid') }}
		</li>
		<li>
			{{ Form::label('product_type', 'Product_type:') }}
			{{ Form::text('product_type') }}
		</li>
		<li>
			{{ Form::submit() }}
		</li>
	</ul>
{{ Form::close() }}