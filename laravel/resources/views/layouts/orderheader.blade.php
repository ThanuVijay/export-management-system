
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="{{url('/')}}">Autoaum</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{Request::is('/orders') ? 'active' : ''}}"  href="{{url('/orders')}}">Order Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('add_order') ? 'active' : ''}}" href="{{url('/add_order')}}">Add Order</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>