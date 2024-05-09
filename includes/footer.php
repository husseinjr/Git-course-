  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-12 mx-auto">
          <div class="contain">
            <div class="logo">
              <img src="img/logo.png" alt="logo" />
            </div>

            <p class="description">
              هو أول موقع لمتجر الكتروني يوفر لك مستلزماتك الدراسية لكل الأقسام ؛ كما أنها تقوم بتوفير
              مجموعة فائقة الجودة كما انه يوفر لك اسعار مناسبة حرصا علي تعرضك لاي مصدر غير مناسب خارج
              جامعتك
            </p>

            <ul class="socail-media">
              <li>
                <a href="https://www.linkedin.com" class="icon">
                  <i class="fa-brands fa-linkedin-in"></i>
                </a>
              </li>

              <li>
                <a href="https://www.twitter.com" class="icon2">
                  <i class="fa-brands fa-twitter"></i>
                </a>
              </li>

              <li>
                <a href="https://www.instagram.com" class="icon">
                  <i class="fa-brands fa-instagram"></i>
                </a>
              </li>

              <li>
                <a href="https://www.facebook.com" class="icon">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="coprights">
        <p>
          جميع الحقوق محفوظة لموقع
          <span>
            كلية العلوم
          </span>
          @ 2024
        </p>

        <a href="index.html" target="_blank" class="f-logo">
          <p>
            <span>Team</span>
            <i class="fa-regular fa-hand-point-right"></i>
            DR:Yasser-Fouda

          </p>


        </a>
      </div>
    </div>
  </footer>

  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/main.js"></script>
  <!-- swiper liberary  -->
  <script src="assets/js/lib/swiper-bundle.js"></script>
  <!-- swiper file to custom from peogramer  -->
  <script src="assets/js/lib/swiper.js"></script>
  <!-- bootstrap library  -->
  <script src="assets/js/lib/bootstrap.bundle.js"></script>
  <script src="assets/js/custom.js"></script>
  <!-- font Awsome liberary  -->
  <script src="assets/js/lib/all.min.js"></script>
  <!-- alertfy js -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
      alertify.set('notifier','position', 'top-right');
        <?php   
                if(isset($_SESSION['message'])) {?>
                    alertify.success('<?= $_SESSION['message']; ?>');
        <?php 
                    unset($_SESSION['message']);
                }
        ?>
    </script>
</body>

</html>