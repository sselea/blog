<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Blog</title>

  	<link href="{{ asset('/css/intro.css') }}" rel="stylesheet">
  	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="{{ asset('../public/fonts/font-awesome-4.6.3/css/font-awesome.min.css') }}"> -->
  </head>
  <body>
    <h1 class="intro-head"> WanderMunch </h1>
    <div class="intro">
      <a href=" {{ route('blog.index') }}" class="intro-link"> Click to enter <i class="fa-arrow-circle-right"></i></i> </a>
    </div>
  </body>


  <script type="text/javascript" src="{{ asset('js/intro.js')}}"></script>
</html>