@extends("blog_theme.main")
@section("content")

<div class='col-lg-8'>
<form class="py-5" action="/store" method='post'>
	@csrf
    <div class="form-group">
    <input class="form-control " name='title' placeholder='Input Title'></input>
    </div>
    <div class="form-group">
    <select class="form-control " name='category'>
    	@foreach($categories as $category)
    	<option value={{$category->id}}>{{$category->category}}</option>
    	@endforeach
    </select>
    </div>
    <div class="form-group">
     <textarea id='article-ckeditor' class="form-control" name='post' rows="24"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection