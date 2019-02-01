@extends("blog_theme.main")
@section("content")

        <!-- Post Content Column -->
        <div class="col-lg-8">
          <div>
            <h2>{{$post->title}}</h2>
            <p>{!!$post->post!!}</p>
          </div>
          <p>Category: {{$post->category->category}}</p>
          <p>Author: <span style='color: red'>{{$post->user->name}}</span></p>
          @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                  <a href="/edit/{{$post->id}}" class='btn btn-warning'>Edit</a>
                  <a href="/delete/{{$post->id}}" class='btn btn-danger'>Delete</a>
            @endif
            <div class='mt-5'>
              <h3>Post a comment!</h3>
              <form class='mt-2' id='{{$post->id}}' action='/comment/{{$post->id}}' method='post'>
                @csrf
                <textarea name="comment" class='form-control' id="article-ckeditor" cols="30" rows="10" placeholder='comment'></textarea>
                <button class='btn btn-primary mt-2'>Post</button>
              </form>
            </div>
          @endif
          @if($comments)
            @foreach($comments as $comment)
            <div class='card my-2'>
              <h6>Posted by <span style='color: red'>{{$comment->user->name}}</span> on {{$comment->created_at}}</h6>
              {!!$comment->comment!!}
            </div>
            @endforeach
          @endif
      </div>
@endsection

