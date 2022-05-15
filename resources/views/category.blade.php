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
            <li><a href="/home" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Category</a></li>
            <li><a href="{{route('post.index')}}" class="nav-link px-2 link-dark">My Post</a></li>
        </ul>

        <div class="col-md-3 text-end">
           
            <button type="button" class="btn btn-outline-primary me-2">Login</button>
            <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
        
        </header>
        <div class="card">
            <div class="card-body">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">
                        <a href="" type="button" class="btn btn-block btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create</a>
                        Category</h3>
                    
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                            </button>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 350px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                        <tr>
                            <th>No:</th>
                            <th>Category Type</th>
                            
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $count=1;
                            @endphp
                            @if ($category)
                            @foreach ($category as $category)
                            <tr>
                            <th scope="no">
                                {{$count++}}
                            </th>
                            <th scope="name">
                                {{$category->category}}
                            </th>
                            
                            <td class="action">
                                <a class="btn btn-sm btn-primary" href="#" data-toggle="modal" data-bs-target="#staticBackdrop1{{$category->id}}" data-bs-toggle="modal" role="button">Edit</a>
                                <a class="btn btn-sm btn-danger" href="#" data-toggle="modal" data-bs-target="#Del_Modal{{$category->id}}" data-bs-toggle="modal">Delete</a>
                                <div class="modal fade" id="Del_Modal{{$category->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" style="font-size: 14px">Delete?</h5>
                                        <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        <div class="modal-body">
                                        <p style="font-size: 14px">Do You Want to delete {{$category->name}} ?</p>
                                        </div>
                                        <div class="modal-footer">
                                        <form action="{{route('category.destroy',$category->id)}}" method="post">
                                            @csrf
                                        <input type="hidden" name="_method" value="DELETE" >
                                        <button type="submit" class="btn-sm btn-danger">Delete</button>
                                        </form>

                                        <button type="button" class="btn-sm btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </td>
                            </tr>
                              <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1{{$category->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop1Label" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdrop1Label">Create</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form action="{{route('category.update', $category->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="_method" value="PUT">
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category Name</label>
                                            <input type="text" class="form-control" id="category" name="category" value="{{$category->category}}" aria-describedby="emailHelp">
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
                            <div style="height=20px"></div>
                            @endforeach
                            @else
                            <tr>
                                No data
                            </tr>
                            @endif
                  

                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                </div>
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
            <form action="{{route('category.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category" class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="category" name="category" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
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