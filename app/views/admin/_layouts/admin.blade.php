<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>My Admin Panel</title>
    {{HTML::style('css/admin.css')}}
</head>
<body>
<header>
  <div class="container">
    <h1>My Admin Panel</h1>
  </div>
</header>
<main class="container">
    @yield('content')
</main>
<footer>
    <div class="container">
        &copy; {{ date('Y') }} Tasks
    </div>
</footer>

</body>
</html>