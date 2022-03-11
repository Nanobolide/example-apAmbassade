<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel 9 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 Post CRUD Tutorial</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{'create'}}"> Create New Post</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Image</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($image_testes as $image_teste)
        <tr>
            <td>{{ $image_teste->id }}</td>
            <td><img src="{{ Storage::url($image_teste->image) }}" height="75" width="75" alt="" /></td>
            <td>{{ $image_teste->title }}</td>
            <td>{{ $image_teste->description }}</td>
            <td>
                {{-- <form action="{{ route('image.destroy',$image_teste->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('image.edit',$image_teste->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> --}}
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $image_teste->links() !!} --}}
</body>
</html>