@extends("blog_theme.main")
@section("content")

        <!-- Post Content Column -->
        <div class="col-lg-8">
          @foreach($posts as $post)
          <div>
            <h2>{{$post->title}}</h2>
            <p>{{str_limit($post->post, 200)}}</p>
          </div>
          <a href="/post/{{$post->id}}">Read more</a>
          @endforeach
          <div class="pager mt-5">
            {{$posts->links()}}
          </div>  
      </div>
@endsection

