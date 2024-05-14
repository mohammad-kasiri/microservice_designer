<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid my-5">

    <form class="row justify-content-center" action="/add" method="post">
        @csrf
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Functionality
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="functionality">Enter Functionality Name:</label>
                        <input type="text" class="form-control" name="functionality" id="functionality" placeholder="Enter Functionality Name:">
                    </div>
                </div>
            </div>
        </div>
        @foreach($services as $service)
            <div class="col-md-8 my-2">
                <div class="card">
                    <div class="card-header">
                        <b>{{$service->name}}</b>
                    </div>
                    <div class="card-body">
                        @foreach($service->tables as $table)
                            <div class="form-check form-check-inline">

                                <input class="form-check-input" type="checkbox"
                                       value="{{$table->id}}"
                                       name="tables[]"
                                       id="checkbox{{$table->id}}">

                                <label class="form-check-label" for="checkbox{{$table->id}}">
                                    {{$table->name}}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
        <div class="col-md-8 my-2">
            <button class="btn btn-primary" type="submit"> add functionality</button>
        </div>

        <div class="col-md-8">
            <ul class="list-group">
                @foreach($functionalities as $functionality)
                    <li class="list-group-item">
                        {{$functionality->name}}
                        @foreach($functionality->tables as $table)
                            <span class="badge text-bg-success">{{$table->name}}</span>
                        @endforeach
                    </li>
                @endforeach
            </ul>
        </div>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
