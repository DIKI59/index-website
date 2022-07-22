<?php
session_start();
//koneksi ke database
include 'koneksi.php';
$menu = 'home';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Skutweek Apparel</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="boostrap/css/styles.css" rel="stylesheet" />


        <style>
	/*Tombol Chat WhatsApp*/
.fixed-whatsapp{position:fixed;bottom:70px;right:20px;width:50px;height:50px;z-index:9999}
.fixed-whatsapp:before{content:"";background-repeat:no-repeat;background-size:34px 34px;background-position:center center;width:50px;height:50px;background-image:url("data:image/svg+xml;charset=utf8,%3csvg viewBox='0 0 24 24' width='32' height='32' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3e%3cg%3e%3cpath style='fill:%23ffffff' d='M16.75,13.96C17,14.09 17.16,14.16 17.21,14.26C17.27,14.37 17.25,14.87 17,15.44C16.8,16 15.76,16.54 15.3,16.56C14.84,16.58 14.83,16.92 12.34,15.83C9.85,14.74 8.35,12.08 8.23,11.91C8.11,11.74 7.27,10.53 7.31,9.3C7.36,8.08 8,7.5 8.26,7.26C8.5,7 8.77,6.97 8.94,7H9.41C9.56,7 9.77,6.94 9.96,7.45L10.65,9.32C10.71,9.45 10.75,9.6 10.66,9.76L10.39,10.17L10,10.59C9.88,10.71 9.74,10.84 9.88,11.09C10,11.35 10.5,12.18 11.2,12.87C12.11,13.75 12.91,14.04 13.15,14.17C13.39,14.31 13.54,14.29 13.69,14.13L14.5,13.19C14.69,12.94 14.85,13 15.08,13.08L16.75,13.96M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22C10.03,22 8.2,21.43 6.65,20.45L2,22L3.55,17.35C2.57,15.8 2,13.97 2,12A10,10 0 0,1 12,2M12,4A8,8 0 0,0 4,12C4,13.72 4.54,15.31 5.46,16.61L4.5,19.5L7.39,18.54C8.69,19.46 10.28,20 12,20A8,8 0 0,0 20,12A8,8 0 0,0 12,4Z'%3e%3c/path%3e%3c/g%3e%3c/svg%3e");background-color:#00C853;position:absolute;top:0;left:0;border-radius:100%;box-shadow:0 1px 1.5px 0 rgba(0,0,0,.12),0 1px 1px 0 rgba(0,0,0,.24)}
.fixed-whatsapp:after{content:"Silahkan Chat Admin Disini Yah Kak!";width:100px;padding:5px 10px;position:absolute;bottom:100%;margin-bottom:10px;right:-150px;text-align:right;color:#555;border:1px solid #dedede;background:rgba(255,255,255,.5);border-radius:4px;opacity:0;transition:all .4s ease-in-out;font-size:90%;line-height:1.1}
.fixed-whatsapp:hover:after{opacity:1;right:0}	
	</style>

    </head>
    <body>
        <!-- Navigation-->
        <?php include 'templates/header.php'; ?>

&nbsp;
&nbsp;
&nbsp;
&nbsp;
        <!-- Header-->
        <header class="container-fluid bg-light border border-success py-5">
           
                 <div class="d-flex justify-content-center">
                     <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                 <div class="carousel-item active">
      <img src="image/diki.jpeg" alt="..." style="height: 500px; width: 800px;">
    </div>
    <div class="carousel-item">
      <img src="image/image3.jpeg" alt="..." style="height: 500px; width: 800px;">
    </div>
    <div class="carousel-item">
      <img src="image/image4.jpeg" alt="..." style="height: 500px; width: 800px;">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

        </header>

<!-- Slider-->
<!-- slider-->



        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
      $ambil = $koneksi->query("SELECT * FROM produk");
      while($perproduk = $ambil->fetch_assoc()):
      ?>
                
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="foto_produk/<?= $perproduk['foto_produk']; ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?= $perproduk['nama_produk']; ?></h5>
                                    <!-- Product price-->
                                    Rp &nbsp; <?= number_format($perproduk['harga_produk']); ?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-danger mt-auto" href="beli.php?id=<?= $perproduk['id_produk']; ?>">Beli</a>
                                    <a class="btn btn-primary mt-auto" href="detail.php?id=<?= $perproduk['id_produk']; ?>">Details</a>
                            </div>
                            </div>
                           
                        </div>
                    </div>
                    <?php endwhile; ?>
                   
                </div>
            </div>
            <a class='fixed-whatsapp' href='https://api.whatsapp.com/send?phone=6282231448396' rel='nofollow noopener' target='_blank' title='Whatsapp' />

           
        </section>
        <!-- Footer-->
        <!-- Footer -->
        <?php include 'templates/footer.php'; ?>
        <!-- Footer -->
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="boostrap/js/scripts.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>	
    </body>
</html>