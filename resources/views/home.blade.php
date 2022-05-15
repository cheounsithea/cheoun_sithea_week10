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
            <li><a href="{{route('post.index')}}" class="nav-link px-2 link-dark">My Post</a></li>
        </ul>

        <div class="col-md-3 text-end">
           
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
        
        </header>
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">All Posts <span> <button type="button" class="btn btn-success">Create Post</button></span></h1>
               
                <div class="col-md-12">
                        <h5>Alice in Wonderland, part dos <span><button type="button" class="btn btn-primary btn-sm">Edit Post</button><button type="button" class="btn btn-danger btn-sm">Delete</button></span></h5>
                        <p>'You ought to be ashamed of yourself for asking such a simple question,' added the Gryphon; and then they both sat silent and looked at poor Alice, who felt ready to sink into the earth. At last the Gryphon said to the Mock Turtle, 'Drive on, old fellow! Don't be all day about it!' and he went on in these words:
                        'Yes, we went to school in the sea, though you mayn't believe it—'
                        'I never said I didn't!' interrupted Alice.
                        'You did,' said the Mock Turtle.</p>
                        <div>
                        <span class="badge bg-secondary">Post: 05/15/2022</span>
                        <span class="badge bg-secondary">Post by user</span>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>