<!DOCTYPE html>
<html lang="vn">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tổng hai ma trận</title>
    <?php include_once(__DIR__ . '/../layouts/styles.php'); ?>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
  <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>

<body>
    <?php include_once(__DIR__ . '/../layouts/partials/header.php'); ?>

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h3>Tổng Hai ma trận</h3>
          <ol>
            <li><a href="/project/index.php">Trang chủ</a></li>
            <li>Phép tính cơ bản</li>
            <li>Tổng hai ma trận</li>
          </ol>
        </div>

      </div>
    </section>
  <main id="main" class="py-5" style ="">
        <div class="container"> 
            <div class="row">
                <div class="col">
                    <form id ="matrix" >
                        <h6>Ma trận A</h6>
                        <div class ="row">
                            <div class="col">
                        <input class="A form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="A form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="A form-control" required=true type="number">
                            </div>
                        </div>
                        <div class ="row">
                            <div class="col">
                        <input class="A form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="A form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="A form-control" required=true type="number">
                            </div>
                        </div><div class ="row">
                            <div class="col">
                        <input class="A form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="A form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="A form-control" required=true type="number">
                            </div>
                        </div>
                        <br>
                        <h6>Ma trận B</h6>
                        <div class ="row">
                            <div class="col">
                        <input class="B form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="B form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="B form-control" required=true type="number">
                            </div>
                        </div>
                        <div class ="row">
                            <div class="col">
                        <input class="B form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="B form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="B form-control" required=true type="number">
                            </div>
                        </div><div class ="row">
                            <div class="col">
                        <input class="B form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="B form-control" required=true type="number">
                            </div>
                            <div class="col">
                        <input class="B form-control" required=true type="number">
                            </div>
                        </div>
                        <br>
                        <button>Tính</button>
                    </form>
                </div>
            </div>
            <div class ="row">
                <div class="col">
                    <div id="result"> </div>
                </div>
            </div>
        </div>

    
  </main><!-- End #main -->
  <?php include_once(__DIR__ . '/../layouts/partials/footer.php'); ?>
  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php include_once(__DIR__ . '/../layouts/script.php');  ?> 
<script src ="./sum.js"></script>
</body>

</html>