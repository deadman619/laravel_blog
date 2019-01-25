@extends("blog_theme.main")
@section("content")

<div class='col-lg-8'>
<form class="py-5" action="/update/{{$post->id}}" method='post'>
	@csrf
    <div class="form-group">
    <input class="form-control " name='title' placeholder='Input Title' value='{{$post->title}}'></input>
    </div>
    <div class="form-group">
     <textarea class="form-control" name='post' rows="24">{{$post->post}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Confirm</button>
</form>
</div>
@endsection