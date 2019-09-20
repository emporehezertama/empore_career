  <?php include 'header.php'; ?>    
  <link rel='stylesheet' id='dedicated-testing-team-style-css'  href='themes/twentyfifteen/css/pages/dedicated-testing-team/styles.min5e1f.css?v=2' type='text/css' media='all' />
   <body>
      <div class="xb-global-container">
         <div class="top-part-page line-border" id="scrolling">
            <header class="header desktop-version">
              <?php include 'menu.php'; ?>
            </header>
            <div class="service-entry">
               <div class="xb-block">
                  <div class="xb-row">
                     <div class="xb-col-7">
                        <h1 class="service-entry-title">Outsource QA and Software Testing</h1>
                        <div class="service-entry-text">
                           <p>QA outsourcing is your shortcut to creating the high-quality software you need. Hire from just one individual all the way up to a dedicated QA team for your business, and they’ll hit the ground running.</p>
                           <p>QA outsourcing raises the quality of your software testing cost-effectively. We can meet your needs with minimal costs and ensure your software products meet your high standards.</p>
                        </div>
                     </div>
                     <div class="ant-qa js-bg"></div>
                  </div>
               </div>
            </div>
            <div class="page-main-description">
               <div class="xb-block">
                  <div class="breadcrumbs"> <span><span><a href="index.php" >Home</a> <span class="breadcrumbs-divider gray"></span> <span><a href="index.php" >Quality Assurance &#038; Software Testing</a> <span class="breadcrumbs-divider gray"></span> <span class="breadcrumb_last">Outsource QA and Software Testing</span></span></span></span></div>
                  <div class="xb-row blocks-center">
                     <div class="xb-col-8">
                        <div class="page-main-description-content ant-speaks">
                           <p>Don’t worry. There’s no need to hire a whole department of QA engineers. Just one qualified, dedicated QA team is all it takes to carry out the full-scale testing of your product. They’ll be using exemplary testing practices over all software development stages, starting from requirements testing during the project design stage and completing with pre-release testing.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="bottom-60">
            <div class="xb-block">
               <h2 class="sub-caption bottom-60">Try QA Outsourcing Services, if You Need:</h2>
               <div class="xb-row blocks-center">
                  <div class="xb-col-5">
                     <div class="xb-list">
                        <ul>
                           <li>Software testing at each stage of development</li>
                           <li>Higher cost-efficiency compared to hiring contractors</li>
                           <li>Reduced development time and efforts</li>
                           <li>More accurate and unbiased representation of software quality</li>
                           <li>Higher level of project security control</li>
                           <li>To allocate more time to other business issues</li>
                           <li>To test your website or app, faster and more effectively</li>
                        </ul>
                     </div>
                     <div class="qa-page-ant-container"> 
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="images/ant-bugs-min.png" alt="Outsource QA" class="img-responsive qa-page-ant-img lazy-load js-lazy-load" /></div>
                  </div>
                  <div class="xb-col-5">
                     <div class="qa-form-container js-form-block">
                        <h3 class="qa-form-container-title">Request a quote or free trial testing</h3>
                        <div role="form" class="wpcf7" id="wpcf7-f5565-o1" lang="en-US" dir="ltr">
                           <div class="screen-reader-response"></div>
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
                                 email_request_quote($_POST, 'Outsource QA and Software Testing');
                           ?>
                              <script type="text/javascript">
                                 window.location = 'alert.php';
                              </script>
                           <?php 
                              }  
                           }
                        ?>
                           <form action="" method="post" class="wpcf7-form wpcf7-acceptance-as-validation" novalidate="novalidate">
                              <div class='wrapper-inside-request-form'>
                                 <div class='row-testing-form'> 
                                    <label class='form-row-label' for='user_name'>Name<span class='required-icon'>*</span></label> 
                                    <span class="wpcf7-form-control-wrap user_name">
                                       <input type="text" name="full_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required xb-request-field" id="user_name" aria-required="true" aria-invalid="false" placeholder="Name" />
                                    </span>
                                 </div>
                                 <div class='row-testing-form'> 
                                    <label class='form-row-label' for='user_company'>Company</label> 
                                    <span class="wpcf7-form-control-wrap user_company">
                                       <input type="text" name="company_name" value="" size="40" class="wpcf7-form-control wpcf7-text xb-request-field" id="user_company" aria-invalid="false" placeholder="Company" />
                                    </span>
                                 </div>
                                 <div class='row-testing-form'> 
                                    <label class='form-row-label' for='user_phone'>Phone</label> 
                                    <span class="wpcf7-form-control-wrap user_phone">
                                       <input type="tel" name="phone_number" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel xb-request-field" id="user_phone" aria-invalid="false" placeholder="Phone" />
                                    </span>
                                 </div>
                                 <div class='row-testing-form'> 
                                    <label class='form-row-label' for='user_email'>Email<span class='required-icon'>*</span></label> 
                                    <span class="wpcf7-form-control-wrap user_email">
                                       <input type="email" name="email_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email xb-request-field" id="user_email" aria-required="true" aria-invalid="false" placeholder="Email" /></span>
                                    </div>
                                 <div class='row-testing-form-with-textarea'> 
                                    <span class='required-icon-for-textarea'>*</span> 
                                    <span class="wpcf7-form-control-wrap user_message">
                                       <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required xb-request-textarea" aria-required="true" aria-invalid="false" placeholder="Message"></textarea>
                                    </span>
                                 </div>
                                 <div class="form-row-hidden"> <span class="wpcf7-form-control-wrap user_ref"><input type="text" name="user_ref" value="" size="40" class="wpcf7-form-control wpcf7-text form-hidden-field form-ref-field" aria-invalid="false" /></span> <span class="wpcf7-form-control-wrap user_country"><input type="text" name="user_country" value="" size="40" class="wpcf7-form-control wpcf7-text form-hidden-field form-country-field" aria-invalid="false" /></span></div>
                                 <div class="material-field"> 
                                    <span class="wpcf7-form-control-wrap" style="min-height: 50px">
                                       <div class="g-recaptcha" data-sitekey="6Lcz25EUAAAAAGaygnfQ2Orku6WsX91gNCbxIOeb"></div>
                                    </span>
                                 </div>
                                 <div class="center top-20"> 
                                    <input type="submit" name="request" value="Request a quote" class="wpcf7-form-control wpcf7-submit pink-filled-btn send-btn" id="contact-qa-form-send" />
                                 </div>
                              </div>
                              <div class="wpcf7-response-output wpcf7-display-none"></div>
                           </form>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="fc-gray-bg bottom-60">
            <div class="xb-block">
               <h2 class="sub-caption">Why Outsource Software Testing To Empore?</h2>
               <div class="flex-space-between testing-numbers center">
                  <div class="item-number">
                     <div class="n">5+</div>
                     <div class="n-caption">Years of average experience certified QA engineers</div>
                  </div>
                  <div class="item-number">
                     <div class="n">100+</div>
                     <div class="n-caption">Successfully delivered projects</div>
                  </div>
                  <div class="item-number">
                     <div class="n">93%</div>
                     <div class="n-caption">Client retention rate</div>
                  </div>
               </div>
               <div class="xb-row blocks-center">
                  <div class="xb-col-7">
                     <ul class="benefits-list top-bottom-60">
                        <li>Full-cycle software testing services that can be tailored to your needs</li>
                        <li>A unique custom approach to attain top-notch software quality</li>
                        <li>Precise documenting of the testing process</li>
                        <li>Agile methodologies and metrics for process improvement</li>
                        <li>Integration with CI (Continuous integration) systems such as Team City</li>
                        <li>Transparent workflow and direct access to each team member</li>
                        <li>Experience with QA tools: Selenium, Jmeter, Firebug and many others</li>
                        <li>You can test the quality of our testing services ABSOLUTELY FREE</li>
                     </ul>
                     <div class="center"> <a href="#" title="" class="image-link"> 
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="images/qa-test-drive-min.png" alt="QA test drive" class="img-responsive lazy-load js-lazy-load" /> </a></div>
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