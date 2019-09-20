<?php include 'header.php'; ?>
   <body>
      <div class="xb-global-container">
         <div class="top-part-page" id="scrolling">
            <header class="header desktop-version">
              <?php include 'menu.php'; ?>
            </header>
         </div>
         <div class="relative">
            <div class="free-consultation-bg">
               <div class="free-consultation-bg__left"></div>
               <div class="free-consultation-bg__right" style="background: url(images/bg-free-consultation.jpeg);background-size: cover;background-position: right;background-repeat: no-repeat;"></div>
            </div>
            <div class="xb-container">
               <div class="xb-col-6">
                  <div class="page-main-description">
                     <div class="breadcrumbs"> <span><span><a href="index.php" >Home</a> <span class="breadcrumbs-divider gray"></span> <span class="breadcrumb_last">Free Consultation</span></span></span></div>
                     <h1 class="page-title"> Free Consultation</h1>
                     <div class="xb-content">
                        <p><em>Do you have any questions regarding information system, our services, or technology obstacle at you company? with pleasure we will help your concern with our time, resources and solution we have. </em></p>
                        <p><strong style="font-size: 20px;color:#09a91f">Don’t Worry.. </strong></p>
                        <p>You can contact us on several line as your preferense. You can create schedule consultation in the form beside. We have flexible times from 09:00 am to 05:00 pm on WIB business days</p>
                        <p>it will be an introductory call to discuss your needs and necessities, to understand how we can be helpful for your company need and what is required from our side  and define the next steps to future cooperation.</p>
                        <p><strong style="font-size: 20px;">And All <label style="color:green;">Free</label> for You….</strong></p>
                     </div>
                     <div class="xb-content top-25"> </div>
                  </div>
               </div>
               <div class="xb-col-6 form-consultation-block">
                  <div class="xb-contact-form xb-contact-form--consultation js-form-block">
                     <h2 class="xb-contact-form-title">Please fill in all fields</h2>

                     <?php 
                           if(isset($_POST['request']))
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
                                 email_consultation($_POST);
                           ?>
                              <script type="text/javascript">
                                 window.location = 'alert.php';
                              </script>
                           <?php 
                              }  
                           }
                        ?>

                     <div role="form" class="wpcf7" id="wpcf7-f8658-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>
                        <form action="" method="post" class="wpcf7-form wpcf7-acceptance-as-validation" novalidate="novalidate">
                           <div class="form-row required-field"> 
                              <span class="wpcf7-form-control-wrap user_first_name">
                                 <input type="text" name="full_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contacts-text-field" aria-required="true" aria-invalid="false" placeholder="Name" />
                              </span>
                           </div>
                           <div class="form-row required-field"> 
                              <span class="wpcf7-form-control-wrap user_company_name">
                                 <input type="text" name="company_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contacts-text-field" aria-required="true" aria-invalid="false" placeholder="Company" />
                              </span>
                           </div>
                           <div class="form-row required-field"> 
                              <span class="wpcf7-form-control-wrap user_email">
                                 <input type="email" name="email_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email contacts-text-field" aria-required="true" aria-invalid="false" placeholder="Your Email" />
                              </span>
                           </div>
                           <div class="form-row required-field"> 
                              <span class="wpcf7-form-control-wrap user_messaging">
                                 <input type="text" name="contact" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required contacts-text-field" aria-required="true" aria-invalid="false" placeholder="Telepon" />
                              </span>
                           </div>
                           <div class="form-row required-field"> 
                              <span class="wpcf7-form-control-wrap user_message">
                                 <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required contacts-textarea" aria-required="true" aria-invalid="false" placeholder="Message"></textarea>
                              </span>
                           </div>
                           <div class="form-row required-field free-consultation-select">
                              <span class="wpcf7-form-control-wrap user_role">
                                 <select name="user_role" class="wpcf7-form-control wpcf7-select wpcf7-validates-as-required xb-request-select" id="user_role" aria-required="true" aria-invalid="false">
                                    <option value="How Can We Help">How Can We Help</option>
                                    <option>IT Services</option>
                                    <option> -- Custome Software Development</option>
                                    <option> -- SaaS Application Developement</option>
                                    <option> -- Cloud Software Developement</option>
                                    <option> -- Application Enhancement</option>
                                    <option> -- UI/UX Developement and Design</option>
                                    <option> -- Mobile Application Developement</option>
                                    <option> -- Full Life Cycle Software Testing</option>
                                    <option> -- Dedicated In House Programmer</option>
                                    <option>HR Services</option>
                                    <option> -- Recruitment & Head Hunting</option>
                                    <option> -- Contract & Temporary Staffing</option>
                                    <option> -- Payroll</option>
                                    <option>ERP Solution</option>
                                    <option> --- ERP Solutions</option>
                                    <option> --- HR Solutions</option>
                                    <option> --- SLIK</option>
                                    <option>Others</option>
                                 </select>
                              </span>
                           </div>
                           <div class="material-field"> 
                                 <span class="wpcf7-form-control-wrap" style="min-height: 50px">
                                    <div class="g-recaptcha" data-sitekey="6Lcz25EUAAAAAGaygnfQ2Orku6WsX91gNCbxIOeb"></div>
                                 </span>
                              </div>
                           <div class="center top-20"> <input type="submit" value="Contact Me" class="wpcf7-form-control wpcf7-submit pink-filled-btn send-btn" id="contact-form-send" /></div>
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