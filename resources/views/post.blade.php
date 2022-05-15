<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HomePage</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="{{route('category.index')}}" class="nav-link px-2 link-dark">Category</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">My Post</a></li>
        </ul>

        <div class="col-md-3 text-end">
           
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
        
        </header>
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">My Posts <span> <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create Post</button></span></h1>
                    @php 
                    $count=1;
                    @endphp
                    @if ($post)
                    @foreach ($post as $posts)
                    <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$posts->tittle}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$posts->post}}</h6>
                        <p class="card-text">{{$posts->post}}</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                    </div>    
                    @endforeach
                    @else
                            
                        No Post
                            
                    @endif
                  

                
            </div>
        </div>
    </div>
  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Create</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{route('post.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category_id" class="form-label">Category </label>
                    <select class="form-select" aria-label="Default select example" id="category_id" name="category_id">
                    <option selected>Category</option>
                        @foreach ($categorys as $category)
                            <option value="{{$category->id}}">{{$category->category}}</option>
                        @endforeach
                    </select>
                </div> 
                <div class="mb-3">
                    <label for="tittle" class="form-label">Tittle </label>
                    <input type="text" class="form-control" id="tittle" name="tittle" aria-describedby="emailHelp">
                </div>   
                <div class="mb-3">
                    <label for="post" class="form-label">Text </label>
                    <input type="text" class="form-control" id="post" name="post" aria-describedby="emailHelp">
                </div>          
              
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>