<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Falhous Team</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>
<body>
<header>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="#" style="color: cyan;">Falhous</a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="{{route('home')}}">Add Receipt</a></li>
                <li><a href="{{route('report')}}">Reports</a> </li>
                <li><a href="{{route('pdf')}}">PDF</a> </li>
            </ul>
        </div>
    </nav>
</header>

@yield('content')

<footer style="background-color: black;padding: 20px 0;">
    <h3 style="text-align: center; color: gray; margin:4px;">About</h3>

    <div style="align-items: center; margin-left: 590px; font-size: 40px;">
        <a href="https://www.facebook.com/fal7oos/" target="_blank" class="fa fa-facebook" title="facebook page"></a>
        <a href="#" class="fa fa-twitter" title="twitter page"></a>
        <a href="#" class="fa fa-google-plus" title="google+ page"></a>
        <a href="#" class="fa fa-github" title="github page source code"></a>
    </div>
</footer>

</body>
</html>
