<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Laravelex</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/about-us">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cart">Cart</a>
      </li>
    </ul>
    @if(session('user_log'))
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">{{session('user_fname')}}  {{session('user_lname')}}</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout-process">Logout</a>
      </li>
    </ul>
    @else
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/login">Login</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/register">Register</a>
      </li>
    </ul>
    @endif
  </div>
</nav>