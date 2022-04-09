<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Matrix</title>
    <?php include_once(__DIR__ . '/layouts/styles.php'); ?>
</head>

<body>
    <?php include_once(__DIR__ . '/layouts/partials/header.php'); ?>


  <main id="main" class="py-5">

    
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="bi bi-box-arrow-in-down-right"></i>
              <h4><a href="/project/frontend/dinhthuc.php">Định thức của ma trận</a></h4>
              <p>Định thức, trong đại số tuyến tính, là một hàm cho mỗi ma trận vuông A, tương ứng với số vô hướng, ký hiệu là det(A). Ý nghĩa hình học của định thức là tỷ lệ xích cho thể tích khi A được coi là một biến đổi tuyến tính. Định thức được sử dụng để giải (và biện luận) các hệ phương trình đại số tuyến tính.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-chevron-contract"></i>
              <h4><a href="/project/frontend/nghichdao.php">Ma trận khả nghịch</a></h4>
              <p>Trong đại số tuyến tính, một ma trận khả nghịch hay ma trận không suy biến là một ma trận vuông và có ma trận nghịch đảo trong phép nhân ma trận.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-recycle"></i>
              <h4><a href="/project/frontend/chuyenvi.php">Ma trận chuyển vị</a></h4>
              <p>Trong đại số tuyến tính, ma trận chuyển vị (tiếng Anh: transpose) là một ma trận mà ở đó các hàng được thay thế bằng các cột, và ngược lại. Để có được ma trận chuyển vị, chúng ta có thể sử dụng toán tử lật ma trận theo đường chéo chính của nó. Ma trận chuyển vị của ma trận A được ký hiệu là A<sup>T</sup>.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="bi bi-search"></i>
              <h4><a href="/project/frontend/timhang.php">Tìm hạng</a></h4>
              <p>Trong đại số tuyến tính, hạng (rank) của một ma trận A là số chiều của không gian vectơ được sinh (span) bởi các vectơ cột của nó. Điều này tương đương với số cột độc lập tuyến tính tối đa của A, và như vậy, cũng chính là số chiều của không gian vectơ sinh bởi các hàng của ma trận trên. Vì vậy hạng là một con số chỉ sự "không suy biến" của hệ phương trình tuyến tính và phép biến đổi tuyến tính được biểu diễn bởi A.Hạng của A thường được ký hiệu là rank(A) hay rk(A), r(A); hoặc đôi khi cũng có thể viết không có dấu ngoặc như sau, rank A.</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->


  </main><!-- End #main -->
  <?php include_once(__DIR__ . '/layouts/partials/footer.php'); ?>
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php include_once(__DIR__ . '/layouts/script.php');  ?> 
</body>

</html>