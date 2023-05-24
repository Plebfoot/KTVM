<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
    @if (isset(config('app.page_titles')[Request::path()]))
        {{ config('app.page_titles')[Request::path()] }}
    @else
        KTVM - {{ config('app.name') }}
    @endif
</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css">
<link rel="stylesheet" href="/assets/css/main.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-QiEjTcGtJ7VU3pJz73OWLP9pJ6woJfo6+G2mJhs7xTj2S2+lbYCXa1+8KXvFJ+To" crossorigin="anonymous">
