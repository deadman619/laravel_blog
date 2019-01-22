@extends("blog_theme.main")
@section("content")

        <!-- Post Content Column -->
        <div class="col-lg-8">
          <div>
            <div class='mt-2'>
              <a href="/edit/{{$post->id}}" class='btn btn-warning'>Redaguoti</a>
              <a href="/delete/{{$post->id}}" class='btn btn-danger'>Salinti</a>
            </div>
            <h2>{{$post->title}}</h2>
            <p>{{$post->post}}</p>
          </div>
      </div>
@endsection

