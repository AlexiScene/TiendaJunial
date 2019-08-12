<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand main-title" href="/">JUNIAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
      </li>
    <div class="btn-group">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Categorias
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{ route('cervezas-index') }}">Cervezas</a>
    <a class="dropdown-item" href="#">Vinos</a>
    <a class="dropdown-item" href="#">Whiskys</a>
    <a class="dropdown-item" href="#">Espirituosas</a>
    <a class="dropdown-item" href="#">Licores</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#">Refrescos</a>
  </div>
</div>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">¿Quienes somos?</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar...">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
    </form>
    @include('store.partials.menu-user')
    <li><a href="{{ route('cart-show') }}"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
  </div>
</nav>