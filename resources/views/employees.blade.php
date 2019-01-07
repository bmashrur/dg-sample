<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--<meta name="csrf_token" content="{ csrf_token() }" />--}}

        <title>Employees</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Fonts -->

        <!-- Styles -->
        <style>

        </style>
    </head>
    <body>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            {!! Form::open(['route' => ["get-employees"], 'class' => 'form', 'files' => true]) !!}
            <div class="form-group">
                <label for="employees">Select Employee</label>
                {!! Form::select('employees', $employees, null, ['class' => 'form-control', 'id' => 'employees' ]) !!}
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
        <div class="col-md-4"></div>
    </div>

    </body>
</html>
