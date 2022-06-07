 

 <footer style="background-color: lightpink;" id="footer">

    <div style="background-color: lightpink;" class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3 style="color: black;"><strong>Programlama Bloğum</strong></h3>
            <p style="color:black">
             <strong>Adres:</strong><?php echo $ayarcek['ayar_adres'] ?><br>
              <strong>Telefon:</strong> <?php echo $ayarcek['ayar_telefon'] ?><br>
              <strong>Email:</strong> <?php echo $ayarcek['ayar_email'] ?><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4 style="color:black">Sayfalarımız</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a style="color:black href="index">Anasayfa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="color:black href="hakkimizda">Hakkımızda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="color:black href="ekip">Ekibimiz</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="color:black href="blog">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a style="color:black href="#">İletişim</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4 style="color:black">Hizmetlerimiz</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a style="color:black" href="#">Programlama dersleri</a></li>
             
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4 style="color: black;">E-bültene abone olun</h4>
            <p style="color:black;">E-Bültene abone olarak anında içeriklerden haberdar olabilirsiniz.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Abone Ol">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div style="color: black;" class="copyright">
          &copy; Tüm Hakları Saklıdır. <strong><span></span></strong> <?php echo date("Y") ?>
        </div>
        <div style="color:black" class="credits">
          Kodlama  <a target="_blank" href="https://programlamablogum.com/">Programlama Bloğum</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>