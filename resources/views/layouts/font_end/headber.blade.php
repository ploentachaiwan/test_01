<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.php">ร้านเพชรปลาทูโอมาน</a></h1>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto" href="#about">หน้าแรก</a></li>
        <li><a class="nav-link scrollto" href="#menu">เมนู</a></li>
        <li><a class="nav-link scrollto" href="#contact">ติดต่อ</a></li>
        <li><a class="nav-link scrollto" href="#team">ผู้จัดทำ</a></li>
        @if (Route::has('login'))
        
        <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>

        @if (Route::has('register'))
        <li><a class="nav-link scrollto" href="{{ route('register') }}">Register</a></li>
        @endif
        
  </div>
  @endif

  </ul>
  <i class="bi bi-list mobile-nav-toggle"></i>
  </nav><!-- .navbar -->

  </div>
</header><!-- End Header -->