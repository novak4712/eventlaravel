<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Styles -->

</head>
<body>


<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{ route('admin.store') }}" method="post" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name"> Name </label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <button class="btn btn-success">
                    создать
                </button>
            </form>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script href="{{ asset('js/checkout.js') }}"></script>
</body>
</html>
