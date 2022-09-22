<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta value="" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
    <div class="container ">

        <div class="card  p-4">
            <div class="card-title p-2">
                <h1 class="text-center">Edit Comic</h1>
            </div>
            <div class="card-body ">
                <form action="{{ route('comics.update', [$comic->id]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-6 my-2">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter comic title" value="{{$comic->title}}" name="title">
                             </div>
                        </div>
                        <div class="col-6 my-2">
                            <div class="form-group">
                                <label for="url">Image URL</label>
                                <input type="text" class="form-control" id="url" placeholder="Enter comic image URL" value="{{$comic->thumb}}" name="thumb">
                             </div>
                        </div>
                        <div class="col-3 my-2">
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" class="form-control" id="price" placeholder="Enter comic price" value="{{$comic->price}}" name="price">
                             </div>
                        </div>
                        <div class="col-3 my-2">
                            <div class="form-group">
                                <label for="series">Series</label>
                                <input type="text" class="form-control" id="series" placeholder="Enter comic series" value="{{$comic->series}}" name="series">
                             </div>
                        </div>
                        <div class="col-3 my-2">
                            <div class="form-group">
                                <label for="sale-date">Sale date</label>
                                <input type="date" class="form-control" id="sale-date" placeholder="Enter comic series" value="{{$comic->sale_date}}" name="sale_date">
                             </div>
                        </div>
                        <div class="col-3 my-2">
                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" id="type" placeholder="Enter comic type" value="{{$comic->type}}" name="type">
                             </div>
                        </div>
                        <div class="my-2">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="5" placeholder="Enter comic description" name="description">{{$comic->description}}</textarea>
                          </div>
                    </div>

                    <div class="card-footer bg-white d-flex justify-content-between mt-3">
                        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna alla lista</a>
                         <button type="submit" class="btn btn-success">Salva</button>
                         <button type="reset" class="btn btn-danger">Cancella</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</body>
</html>