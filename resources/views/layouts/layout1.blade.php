<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href={{asset("css/app.css")}}>

</head>

<body>
  <div class="container">
      @include('partials.header')

      @yield('content')

      @include('partials.footer')
  </div>
</body>

</html>
