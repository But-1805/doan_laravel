<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">MiniShop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
          <li class="nav-item"><a class="nav-link" href="/">Trang chủ</a></li>
          <li class="nav-item"><a class="nav-link" href="/products">Sản phẩm</a></li>
        </ul>
        <ul class="navbar-nav">
          @auth
            <li class="nav-item"><span class="nav-link">Chào, {{ Auth::user()->name }}</span></li>
            <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn btn-link nav-link">Đăng xuất</button>
              </form>
            </li>
          @else
            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Đăng nhập</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Đăng ký</a></li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>
  