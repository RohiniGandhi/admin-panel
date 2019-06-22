@extends('lap::layouts.auth')

@section('title', 'Resource')
@section('child-content')
	<h2>@yield('title')</h2>

	<form method="POST" action="{{ route('admin.settings') }}" novalidate data-ajax-form>
		@csrf
		@method('PATCH')

		<div class="list-group">
			<div class="list-group-item">
				<div class="form-group row mb-0">
					<label for="example" class="col-md-2 form-label col-form-label">Url</label>
					<div class="col-md-8">
						<input type="text" name="url" id="url" class="form-control" required>
					</div>
				</div>
			</div>

			<div class="list-group-item">
				<div class="form-group row mb-0">
					<label for="example" class="col-md-2 form-label col-form-label">Page Title*</label>
					<div class="col-md-8">
						<input type="text" name="pageTitle" id="pageTitle" class="form-control" required>
					</div>
				</div>
			</div>

			<div class="list-group-item">
				<div class="form-group row mb-0">
					<label for="example" class="col-md-2 form-label col-form-label">Meta Title*</label>
					<div class="col-md-8">
						<input type="text" name="metaTitle" id="metaTitle" class="form-control" required>
					</div>
				</div>
			</div>

			<div class="list-group-item">
				<div class="form-group row mb-0">
					<label for="example" class="col-md-2 form-label col-form-label">Meta Keyword*</label>
					<div class="col-md-8">
						<input type="text" name="metaKeyword" id="metaKeyword" class="form-control" required>
					</div>
				</div>
			</div>

			<div class="list-group-item">
				<div class="form-group row mb-0">
					<label for="example" class="col-md-2 form-label col-form-label">Meta Description*</label>
					<div class="col-md-8">
						<input type="text" name="metaDescription" id="metaDescription" class="form-control" required>
					</div>
				</div>
			</div>
			<div class="list-group-item">
				<div class="form-group row mb-0">
					<label for="example" class="col-md-2 form-label col-form-label">Breadcrumb*</label>
					<div class="col-md-2">
						<input class="form-control textbox-width" type="text" name="breadcrumb" id="breadcrumb" value="Home" disabled="disabled">
					</div>
					<div class="col-md-8">
						<div class="row" id="textBoxesGroup">
							<div class="col-md-10">
								<div class="add fas fa-plus" id="addButton"></div>
								<div class="remove fas fa-minus close-btn" id="removeButton"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="list-group-item">
				<div class="form-group row mb-0">
					<label for="example" class="col-md-2 form-label col-form-label">Heading</label>
					<div class="col-md-8">
						<input type="text" name="heading" id="heading" class="form-control" required>
					</div>
				</div>
			</div>
			<div class="list-group-item">
				<div class="form-group row mb-0">
					<label for="example" class="col-md-2 form-label col-form-label">Subcontent*</label>
					<div class="col-md-8">
						<input type="text" name="subContent" id="subContent" class="form-control" required>
					</div>
				</div>
			</div>
			 <div class="list-group-item">
				<div class="form-group row mb-0">
					<label for="example" class="col-md-2 form-label col-form-label">InnerContent*</label>
					<div class="col-md-8">
						<form method="post">
						  <textarea name="mytextarea" id="mytextarea">Hello World!</textarea>
						</form>
					</div>
				</div>
			</div>
			<div class="list-group-item bg-light text-left text-md-right">
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</div>
	</form>
@endsection