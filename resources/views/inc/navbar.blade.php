<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <a href="#" class="navbar-brand">{{config('app.name', 'LSAPP')}}</a>
  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav">
          <a href="/" class="nav-item nav-link">Home</a>
          <a href="/about" class="nav-item nav-link">About</a>
          <a href="/services" class="nav-item nav-link">services</a>
          <a href="/posts" class="nav-item nav-link">Blogs</a>
      </div>
      <div class="nav navbar-nav navbar-right">
          <a href="/posts/create" class="nav-item nav-link">  CreatePost</a>
      </div>
  </div>
</nav>