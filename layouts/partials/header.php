<!-- ======= Header ======= -->
<?php 
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="/project/index.php">The Matrix</a></h1>
    
      <nav id="navbar" class="navbar">
      <ul id="mainnav">
        <li class="<?php if ($first_part=="") {echo "active"; } else  {echo "noactive";}?>"><a href="/project/index.php">Trang chủ</a></li>
        <li class="dropdown"><a href="#"><span>Phép tính cơ bản</span> <i class="bi bi-chevron-right"></i></a>
        <ul>
          <li class="<?php if ($first_part=="sum.php") {echo "active"; } else  {echo "noactive";}?>"><a href="/project/frontend/sum.php">Tổng hai ma trận</a></li>
          <li class="<?php if ($first_part=="sub.php") {echo "active"; } else  {echo "noactive";}?>"><a href ="/project/frontend/sub.php">Hiệu hai ma trận</a></li>
          <li class="<?php if ($first_part=="mul.php") {echo "active"; } else  {echo "noactive";}?>"><a href ="/project/frontend/mul.php">Tích hai ma trận</a></li>
          <li class="<?php if ($first_part=="mulxn.php") {echo "active"; } else  {echo "noactive";}?>"><a href ="/project/frontend/mulxn.php">Tích của ma trận với một số</a></li>
        </ul>
        <li class="<?php if ($first_part=="dinhthuc.php") {echo "active"; } else  {echo "noactive";}?>"><a href="/project/frontend/dinhthuc.php">Định thức của ma trận</a></li>
        <li class="<?php if ($first_part=="nghichdao.php") {echo "active"; } else  {echo "noactive";}?>"><a href="/project/frontend/nghichdao.php">Ma trận khả nghịch</a></li>
        <li class="<?php if ($first_part=="chuyenvi.php") {echo "active"; } else  {echo "noactive";}?>"><a href="/project/frontend/chuyenvi.php">Ma trận chuyển vị</a></li>
        <li class="<?php if ($first_part=="timhang.php") {echo "active"; } else  {echo "noactive";}?>"><a href="/project/frontend/timhang.php">Hạng của ma trận</a></li>
      </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  