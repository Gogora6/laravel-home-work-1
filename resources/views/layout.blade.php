<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">
    <link href="/resources/css/app.css" rel="stylesheet">
    <title>{{ $title  ?? 'No title' }} Page</title>
    <style>
        .theme--dark {
            background: #1a202c;
            color: white;
        }
        .theme--light {
            background: #a0aec0;
        }
        footer{
            background: green;
            padding: 30px;
        }
        .logo{
            width: 100px;
        }
    </style>
</head>
<body class={{ isset($theme) ? $theme : 'theme--light' }}>
<img class="logo" src="https://i.pinimg.com/originals/42/48/b2/4248b25404a6a1006265937473cf1d89.jpg">
@include('components.menu')

<h1>
    This is {{ $pageName }} Page!!
</h1>


@if ($showFooter ?? false)
    @include('components.footer')
@endif

</body>
</html>
