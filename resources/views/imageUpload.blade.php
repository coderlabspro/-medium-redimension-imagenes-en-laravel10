<!DOCTYPE html>
<html>
<head>
    <title>Redimensiona las imágenes de tus formularios</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <h1>Redimensiona las imágenes de tus formularios </h1>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Hubo algunos problemas con tu entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($message = Session::get('success'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="row">
            <div class="col-md-4">
                <strong>Imagen original:</strong>
                <br/>
                <img src="/images/{{ Session::get('imageName') }}" width="300px"/>
            </div>
            <div class="col-md-4">
                <strong>Imagen redimensionada:</strong>
                <br/>
                <img src="/thumbnail/{{ Session::get('imageName') }}"/>
            </div>
        </div>
    @endif

    <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <br/>
                <input type="file" name="image" class="image">
            </div>
            <div class="col-md-12">
                <br/>
                <button type="submit" class="btn btn-primary">Carga tu imagen</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
