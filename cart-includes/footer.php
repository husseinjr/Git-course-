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
  <script src="assets/js/custom.js"></script>
  <!-- swiper liberary  -->
  <script src="assets/js/lib/swiper-bundle.js"></script>
  <!-- swiper file to custom from peogramer  -->
  <script src="assets/js/lib/swiper.js"></script>
  <!-- bootstrap library  -->
  <script src="assets/js/lib/bootstrap.bundle.js"></script>
  <!-- font Awsome liberary  -->
  <script src="assets/js/lib/all.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- Alertify js -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

  
  <script>
      <?php   
              if(isset($_SESSION['message'])) {?>
                  alertify.set('notifier','position', 'bottom-right');
                  alertify.success('<?= $_SESSION['message']; ?>');
      <?php 
                  unset($_SESSION['message']);
              }
      ?>
  </script>
  <script src="https://www.paypal.com/sdk/js?client-id=AaBxKAXqWXDhjjBfZaniKJnZeLOaqU3JHctPS-MzTcGmbkB2h109E2uGENTsjHhjPUqqAllUEZ39bWoI&currency=USD"></script>
<script>


  paypal.Buttons({
      onClick(){
        var name = $('#name').val();
        var email = $('#email').val();
        var phone = $('#phone').val();
        var pincode = $('#pincode').val();
        var address = $('#address').val();
        if(name.length == 0)
        {
          $('.name').text("*name field is required")
        }
        else
        {
          $('.name').text("")
        }
        if(email.length == 0)
        {
          $('.email').text("*email field is required")
        }
        else
        {
          $('.email').text("")
        }
        if(phone.length == 0)
        {
          $('.phone').text("*phone field is required")
        }
        else
        {
          $('.phone').text("")
        }
        if(pincode.length == 0)
        {
          $('.pincode').text("*pincode field is required")
        }
        else
        {
          $('.pincode').text("")
        }
        if(address.length == 0)
        {
          $('.address').text("*address field is required")
        }
        else
        {
          $('.address').text("")
        }
        if( name.length == 0 || email.length == 0 || phone.length == 0 || pincode.length == 0 || address.length == 0 )
        {
            // alert('من فضلك أدخل البيانات المطلوبة');
            return false;
        }
      },
      createOrder: (data, actions) => {
          return actions.order.create({
              purchase_units: [{
                  amount: {
                      value: '<?=$price_cart / $EGP_USD ?>'
                  }
              }]
          });
      },
      onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
              // console.log('capture result',orderData, JSON.stringify(orderData, null, 2));
              const transaction = orderData.purchase_units[0].payments.captures[0];
              // alert(`Transaction ${transaction.status} : ${transaction.id}\n\n console for all available details`);
              var name = $('#name').val();
              var email = $('#email').val();
              var phone = $('#phone').val();
              var pincode = $('#pincode').val();
              var address = $('#address').val();
              var totalprice = $('#totalprice').val();
              var data = {
                'name' : name ,
                'email' : email ,
                'phone' : phone ,
                'pincode' : pincode ,
                'address' : address ,
                'totalprice' : totalprice ,
                'payment_mode' : "Paid by PayPal",
                'payment_id' : transaction.id,
              }
              $.ajax({
                method: 'POST',
                url: 'functions/placeorder.php',
                data:  data,
                success: function(response) {
                  if(response == 201 )
                  {
                    alertify.success('جارى معالجه الطلب');
                    actions.redirect('my-order.php');
                  }
                }
              })
          });
      }
  }).render('#paypal-button-container');
</script>
</body>

</html>