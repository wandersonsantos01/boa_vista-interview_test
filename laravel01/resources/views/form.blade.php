<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
</head>
<body>

<div class="container">

    <div class="jumbotron vertical-center">
        <form id="main_form">
            <h5>{{ $fieldLabel }}</h5>
            <div class="form-group">
                <input type="{{ $field['type'] }}" class="form-control" id="field1" placeholder="{{ $field['placeHolder'] }}" name="{{ $field['name'] }}">
            </div>
            <input type="hidden" name="next_step" id="next_step" value="{{ $nextStep }}">
            <button type="submit" class="btn btn-primary">{{ $buttonLabel }}</button>
            <div class="row">
                <div class="col-12" id="loader">
                    <div class="loader mx-auto d-block"></div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/general.js') }}"></script>

</body>
</html>
