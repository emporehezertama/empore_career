<?php include 'header.php'; ?>
   <body>
      <div class="xb-global-container">
         <div class="contact-page">
            <header class="header desktop-version">
              <?php include 'menu.php'; ?>
            </header>
            <div id="scrolling" class="xb-full-width xb-contact-page">
               <div class="xb-col-6-0 google-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15863.114008229368!2d106.7847454!3d-6.292815!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x177efb2c5d473d7!2sUnionSPACE+-+Metropolitan+Tower!5e0!3m2!1sid!2sid!4v1549023900384" width="100%" height="850" frameborder="0" style="border:0" allowfullscreen></iframe>
               </div>
               <div class="xb-col-6-0 xb-flex-v-centered">
                  <h1 class="xb-contact-page-title">How to Find Us</h1>
                  <div class="xb-content">
                     <p style="padding-top:0; margin-top:0;">Metropolitan tower, level13-A<br /> Jl. R.A. Kartini - T.B. Simatupang Kav. 14<br /> Cilandak, Jakarta Selatan<br /> Jakarta - 12430</p>
                     <p>Phone : +62 21 2955 7450</p>
                     <p style="padding-top:0; margin-top:0;">Email : marketing@empore.co.id</p>
                  </div>
                  <div class="xb-contact-form js-form-block">
                     <h2 class="xb-contact-form-title">Get in touch</h2>
                     <div role="form" class="wpcf7" id="wpcf7-f3765-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <?php 
                           if(isset($_POST['submit']))
                           {
                              $response = $_POST["g-recaptcha-response"];
                              $url = 'https://www.google.com/recaptcha/api/siteverify';
                              $data = array(
                                 'secret' => '6Lcz25EUAAAAAECjEft2GpgPaKKksGbT7mMiAXLr',
                                 'response' => $_POST["g-recaptcha-response"]
                              );
                              $options = array(
                                 'http' => array (
                                    'method' => 'POST',
                                    'content' => http_build_query($data)
                                 )
                              );
                              $context  = stream_context_create($options);
                              $verify = file_get_contents($url, false, $context);
                              $captcha_success=json_decode($verify);
                              if ($captcha_success->success==false) 
                              {
                                 echo "<p style=\"color: red;\">Silahkan captcha diisi terlebih dahulu.</p><br />";
                              } 
                              else if ($captcha_success->success==true) 
                              {
                                 email_request_quote($_POST, 'Contact Us');
                              }
                           }
                        ?>
                        <form action="" method="post" class="wpcf7-form wpcf7-acceptance-as-validation" enctype="multipart/form-data" novalidate="novalidate">
                           <div class='wrapper-inside-request-form'>
                              <div class="form-row required-field"> 
                                 <label class="icon-label icon-label-name"></label> 
                                 <span class="wpcf7-form-control-wrap full_name">
                                    <input type="text" name="full_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contacts-text-field" aria-required="true" aria-invalid="false" placeholder="Name" />
                                 </span>
                              </div>
                              <div class="form-row"> 
                                 <label class="icon-label icon-label-company"></label> 
                                 <span class="wpcf7-form-control-wrap company_name">
                                    <input type="text" name="company_name" value="" size="40" class="wpcf7-form-control wpcf7-text contacts-text-field" aria-invalid="false" placeholder="Company" />
                                 </span>
                              </div>
                              <div class="form-row"> 
                                 <label class="icon-label icon-label-phone"></label> 
                                 <span class="wpcf7-form-control-wrap phone_number">
                                    <input type="tel" name="phone_number" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel contacts-text-field" aria-invalid="false" placeholder="Phone" />
                                 </span>
                              </div>
                              <div class="form-row required-field"> 
                                 <label class="icon-label icon-label-email"></label> 
                                 <span class="wpcf7-form-control-wrap email_address">
                                    <input type="email" name="email_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email contacts-text-field" aria-required="true" aria-invalid="false" placeholder="Email" />
                                 </span>
                              </div>
                              <div class="form-row required-field"> 
                                 <label class="icon-label icon-label-message"></label> 
                                 <span class="wpcf7-form-control-wrap message">
                                    <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required contacts-textarea" aria-required="true" aria-invalid="false" placeholder="What can we do for you?"></textarea>
                                 </span>
                              </div>
                              <div class="material-field"> 
                                 <span class="wpcf7-form-control-wrap" style="min-height: 50px">
                                    <div class="g-recaptcha" data-sitekey="6Lcz25EUAAAAAGaygnfQ2Orku6WsX91gNCbxIOeb"></div>
                                 </span>
                              </div>
                              <div class="center top-20"> <input type="submit" value="Get in touch" name="submit" class="wpcf7-form-control wpcf7-submit pink-filled-btn send-btn" id="contact-form-send" /></div>
                           </div>
                           <div class="wpcf7-response-output wpcf7-display-none"></div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="relative container-with-to-top">
            <span class="to-top-btn">
               <span class="to-top-bg-elem">
                  <svg class="to-top-bg" viewBox="0 0 65 58">
                     <path class="to-top-bg circuit" d="M62.7 16.3l-9.3 35.2c-.8 3.3-3.3 4.5-5.9 3.5L6 33.4c-2.2-1-5.3-2.9-3.4-6L19.5 5.6c1.7-2 3.1-4 5.9-3.5l34 8.2c2.5.7 4.1 3.1 3.3 6z"></path>
                  </svg>
               </span>
               <span class="to-top-arr-elem">
                  <svg class="to-top-arr" viewBox="0 0 65 58">
                     <path class="to-top-arr circuit" d="M41.2 23c-.3.3-.7.2-1-.1l-3.6-4.2v12.8c0 .4-.3.7-.7.7-.4 0-.7-.3-.7-.7V18.8L31.6 23c-.3.3-.7.3-1 .1-.2-.1-.2-.3-.2-.5s.1-.3.2-.5l4.8-5.6c0-.1.1-.1.2-.1h.1c.1 0 .2-.1.3-.1s.2 0 .3.1h.1c.1 0 .1.1.2.1l4.8 5.6c.1.2.1.7-.2.9z"></path>
                  </svg>
               </span>
            </span>
         </div>
         <?php include 'footer-link.php'; ?>
      </div>
      <?php include 'footer.php'; ?>
   </body>
</html>