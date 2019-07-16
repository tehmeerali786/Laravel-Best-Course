@extends('layouts.app')



@section('content')



	@if(count($errors) > 0)

		<ul class="list-group" >


			@foreach($errors->all() as $error)


			<li class="list-group-item text-danger" >


				{{ $error }}
				


			</li>





			@endforeach
			


		</ul>



	@endif

	<div class="panel panel-default" >
		
		<div class="panel-heading" >
			

			Create a new post

		</div>

		<div class="panel-body" >
			
			<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
				
				{{ csrf_field() }}

				<div class="form-group" >

					<label for="title" >Title</label>

					<input type="text" name="title"  class="form-control">


					

				</div>


				<div class="form-group" >

					<label for="featured" >Featured image</label>

					<input type="file" name="featured"  class="form-control">


				</div>


				<div class="form-group" >
					
					<label for="category" >

						Select a Category
						
					</label>


				</div>

				<div class="form-group" >

					<select name="category_id" id="category"  class="form-control" >

						@foreach($categories as $category)


							<option value="{{ $category->id }}" >{{ $category -> name }}</option>

						@endforeach
						

					</select>
					

				</div>

				<div class="form-group">

					<label for="tags" >Select tags</label>

					@foreach($tags as $tag)


						<div class="checkbox">

						<label> <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tag->tag }}</label>
						

						</div>

					@endforeach
					


				</div>


				<div class="form-group" >

					<label for="content" >Content</label>

					<textarea name="content" id="content" cols="5" rows="5" class="form-control">
						

					</textarea>


				</div>


				<div class="form-group">

					<div class="text-area">
						
						<button class="btn btn-success" type="submit">
							
							Store post

						</button>

						<p>I am a paragraph</p>

					</div>
					

				</div>

			</form>


		</div>

	</div>


@stop

@section('styles')







<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">


@stop


@section('scripts')

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 

 

   




<script>
	

	$(document).ready(function(){
  $("p").click(function(){
    $(this).hide();


  });

  $('#content').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
});
</script>

@stop