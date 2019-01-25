@extends("blog_theme.main")
@section("content")

        <!-- Post Content Column -->
        <div class="col-lg-8">
          <div>
            <div class='mt-2'>
              @if(Auth::id(1) == 1)
              <a href="/edit/{{$post->id}}" class='btn btn-warning'>Edit</a>
              <a href="/delete/{{$post->id}}" class='btn btn-danger'>Delete</a>
              @endif
            </div>
            <h2>{{$post->title}}</h2>
            <p>{{$post->post}}</p>
          </div>
          <p>Category: {{$post->category->category}}</p>
      </div>
@endsection

