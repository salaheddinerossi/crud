<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create a new post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        form{
            width: 75%;
            margin: 70px auto;

        }
    </style>

</head>
<body>
    <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">titre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="titre">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">content</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="content">
        </div>
        <div class="mb-3">
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="image">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</body>
</html>
