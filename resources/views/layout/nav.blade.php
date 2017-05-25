  <!-- Bootstrap core CSS -->

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="/css/blog.css" rel="stylesheet">
</head>

<body>

  <div class="blog-masthead">
    <div class="container">
      <nav class="nav blog-nav">
        <a class="nav-link active" href="/">Home</a>
        {{-- <a class="nav-link" href="/">All Posts</a> --}}
{{--         <a class="nav-link" href="#">About</a>
<a class="nav-link" href="#">Services</a> --}}
{{--         <a class="nav-link" href="#">About</a>
<a class="nav-link" href="#">Contact</a> --}}
@if (Auth::check())
<a class="nav-link"  href="/posts/create">Create Post</a>
  <div class="nav-link ml-auto" >
  <a class="" style="color:#fff" href="">{{Auth::user()->name}}</a>&nbsp&nbsp
  <a class="" style="color:#fff" href="/logout">Logout</a>
</div>
@else
<div class="nav-link ml-auto" >
  <a class="" style="color:#fff" href="/login">Login</a> &nbsp&nbsp
  <a class="" style="color:#fff" href="/register">Register</a>
</div>
@endif

{{--         <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-danger my-2 my-sm-0" type="submit">Search</button>
        </form> --}}
      </nav>
    </div>
  </div>
  <div class="blog-header">
    <div class="container">
      <h1 class="blog-title">Welcome To Our Blog</h1>
    </div>
  </div>

  <div class="container">

    <div class="row">

      <div class="col-sm-8 blog-main">