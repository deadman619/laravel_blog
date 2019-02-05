<!-- Generate categories -->

<?php use App\Category;
use App\Post;
$categories = Category::all();

?>
<!-- Sidebar Widgets Column -->
        <div class="col-md-4">

          <!-- Search Widget -->
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <form action='/search' class="input-group">
                @csrf
                <input name='query' type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button type='submit' class="btn btn-secondary" type="button">Go!</button>
                </span>
              </form>
            </div>
          </div>

          <!-- Categories Widget -->
          <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <ul class="list-unstyled mb-0">
                    @foreach($categories as $category)
                      <li>
                        <a href="/category/{{$category->id}}">{{$category->category}}</a>
                      </li>
                    @endforeach
                  </ul>
                </div>
            </div>
          </div>

          <!-- Side Widget -->
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>
        </div>
      </div>