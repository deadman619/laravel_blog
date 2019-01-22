@extends("blog_theme.main")
@section("content")

        <!-- Post Content Column -->
        <div class="col-lg-8">
          <div>
            <h2>{{$post->title}}</h2>
            <p>{{$post->post}}</p>
          </div>
      </div>
@endsection

