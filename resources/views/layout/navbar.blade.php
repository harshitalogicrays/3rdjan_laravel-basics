<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{asset('images/logo.png')}}" height="40px" width='40px'/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/about')}}">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/products')}}">products</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Customer
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Add</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">View</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
            <div class="input-group">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-danger" type="submit"><i class="bi bi-search"></i></button>
            </div>
        </form>
        <ul class="navbar-nav  mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/register')}}">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/signin')}}">Login</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" style="position: relative" href="#" ><i class="bi bi-cart-fill" style="font-size:25px"></i>
                    <span class="badge rounded-pill text-bg-danger" style="position:absolute;right:-5px;">0</span >
                </a>               
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Guest
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#"> <i class="bi bi-person-circle"></i>  profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-cart"></i> my cart</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"> <i class="bi bi-arrow-left"></i> logout</a></li>
              </ul>
            </li>
          </ul>
      </div>
    </div>
  </nav>