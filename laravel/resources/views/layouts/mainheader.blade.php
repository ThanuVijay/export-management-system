
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
            <a class="nav-link {{Request::is('/about') ? 'active' : ''}}"  href="{{url('/about')}}">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Menu
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item {{Request::is('/products') ? 'active' : ''}}" href="{{url('/products')}}">Product Details</a>
              <a class="dropdown-item {{Request::is('/vendors') ? 'active' : ''}}" href="{{url('/vendors')}}">Vendor Details</a>
              <a class="dropdown-item {{Request::is('/employees') ? 'active' : ''}}" href="{{url('/employees')}}">Employee Details</a>
              <a class="dropdown-item {{Request::is('/orders') ? 'active' : ''}}" href="{{url('/orders')}}">Order Details</a>
              <a class="dropdown-item {{Request::is('/invoices') ? 'active' : ''}}" href="{{url('/invoices')}}">Invoice Details</a>
              <a class="dropdown-item {{Request::is('/inventorys') ? 'active' : ''}}" href="{{url('/inventorys')}}">Inventory Details</a>
              <a class="dropdown-item {{Request::is('/auctions') ? 'active' : ''}}" href="{{url('/auctions')}}">Auction Details</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('/contact_us') ? 'active' : ''}}"  href="{{url('/contact_us')}}">Contact Us</a>
          </li>

        </ul>
      </div>
      
      </div>
      
    </div>
  </nav>