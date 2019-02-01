@extends("blog_theme.main")

@section('content')

        <div class="col-lg-8 mt-5">
             <div class="card">
                <div class="card-header">Welcome back, {{Auth::user()->name}}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(count($posts) > 0)
                        <h3>Your posts</h3>
                        <a href="/add-post" class='btn btn-primary my-3'>Create Post</a>
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a href="edit/{{$post->id}}" class="btn btn-warning">Edit</a></td>
                                <td><a href="delete/{{$post->id}}" class='btn btn-danger'>Delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                    @else 
                        <h3>You haven't made any posts</h3>
                        <a href="/add-post" class='btn btn-primary'>Create One Now!</a>
                    @endif
                </div>
            </div>
        </div>
@endsection
