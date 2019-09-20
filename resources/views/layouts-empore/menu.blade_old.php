<div class="top-header present-top-header">
   <div class="js-menu-panel menu-panel">
      <div class="xb-container">
         <div class="xb-col-12">
            <a href="{{ route('/') }}" title="" class="xb-logo"> 
            <img src="{{ asset('images-empore/empore-2.png') }}" style="height: 40px;" class="logo_top" />
            </a>
            <div class="header-nav-panel js-mobile-menu">
               <!--a href="contact-us.php" title="" class="contacts-link">Contact us</a-->
               <nav class="main-menu" >
                  <ul id="menu-main-menu" class="site-nav">
                     <li class="dropdown-full-width first-level-menu with-dropdown-m hmenu-li hmenu-li-fdrop rd-menu-item menu-item menu-item-has-children">
                        <!--a class="menu-link" href="services.php">IT Services</a-->
                        @if(url()->current() == 'http://empore-lokal.com/index.php' || url()->current() == 'http://empore-lokal.com/')
                        <a class="menu-link menu-nav" href="#IT-Services" >IT Services</a>
                        @else
                        <a class="menu-link menu-nav" href="{{ route('it-service') }}" >IT Services</a>
                        @endif
                        <!--ul class="sub-menu">
                           <li class="mobile-menu-title menu-item"> <a class="menu-link" href="services/index.html">Services</a></li>
                           <li class="title-dropdown-purple second-level-menu hmenu-li-flist rd-menu-item menu-item "> 
                              <a class="menu-link" href="custom-software-development.php">Custom Software Development</a>
                           </li>
                           <li class="title-dropdown-purple second-level-menu hmenu-li-flist rd-menu-item menu-item "> 
                              <a class="menu-link" href="saas-application-development.php">SaaS Application Development</a>
                           </li>
                           <li class="title-dropdown-purple second-level-menu hmenu-li-flist rd-menu-item menu-item "> 
                              <a class="menu-link" href="cloud-software-development.php">Cloud Software Development</a>  
                           </li>
                           <li class="title-dropdown-pink second-level-menu hmenu-li-flist rd-menu-item menu-item"> 
                              <a class="menu-link" href="app-modernization-service.php">Application Enhancement</a>
                           </li>
                           <li class=" menu-item"> 
                              <a class="menu-link" href="ui-ux-development-service.php">UX/UI Development and Design</a>
                           </li>
                           <li class="title-dropdown-pink second-level-menu hmenu-li-flist rd-menu-item menu-item">
                              <a class="menu-link" href="cross-platform-app-development.php">Mobile Application Development</a>
                           </li>
                           <li class="title-dropdown-pink second-level-menu hmenu-li-flist rd-menu-item menu-item">
                              <a class="menu-link" href="full-qa-cycle.php">Full Life Cycle Software Testing</a>
                           </li>
                           <li class="rd-menu-item menu-item">
                              <a class="menu-link" href="hire-dedicated-web-developers-team.php">Dedicated In House Programmer</a>
                           </li>
                           <li class="free-consultation-menu menu-item"> 
                              <a class="menu-link" href="free-consultation.php">Free Consultation</a>
                           </li>
                        </ul-->
                     </li>
                     <li class="dropdown-standard first-level-menu with-dropdown-m hmenu-li hmenu-li-stdrop rd-menu-item menu-item menu-item-has-children">
                        <a class="menu-link" href="#HR-Services" >HR Services</a>
                        <!--ul class="sub-menu">
                           <li class="menu-item">
                              <a class="menu-link" href="recruitment-and-head-hunting.php">Recruitment & Head Hunting</a>
                           </li>
                           <li class="menu-item">
                              <a class="menu-link" href="contract-and-temporary-staffing.php">Contract & Temporary Staffing</a>
                           </li>
                           <li class="menu-item">
                              <a class="menu-link" href="payroll.php">Payroll</a>
                           </li>
                           
                           <li class="menu-item">
                              <a class="menu-link" href="underconstruction.php">Organization Development</a>
                           </li>
                           <li class="menu-item">
                              <a class="menu-link" href="underconstruction.php">Performance Management</a>
                           </li>
                           <li class="menu-item">
                              <a class="menu-link" href="underconstruction.php">Change Management</a>
                           </li>
                           <li class="menu-item">
                              <a class="menu-link" href="underconstruction.php">Training Development</a>
                           </li>>
                        </ul-->
                     </li>
                     <li class="dropdown-standard first-level-menu with-dropdown-m hmenu-li hmenu-li-stdrop rd-menu-item menu-item menu-item-has-children">
                        <a class="menu-link" href="enterprise-resource-planning-software.php" >Solutions</a>
                        <ul class="sub-menu">
                           <li class="menu-item">
                              <a class="menu-link" href="enterprise-resource-planning-software.php">ERP Solutions</a>
                           </li>
                           <li class="menu-item">
                              <a class="menu-link" href="http://em-hr.co.id/em-hris-application-system">HR Solutions</a>
                           </li>
                        </ul>
                     </li>
                     <!--li class="dropdown-standard first-level-menu with-dropdown-m hmenu-li hmenu-li-stdrop rd-menu-item menu-item menu-item-has-children">
                        <a class="menu-link" href="technology-expertise.php">Technologies</a>
                      <   <ul class="sub-menu">
                           <li class="mobile-menu-title menu-item"> 
                              <a class="menu-link" href="technology-expertise.php">Technologies</a>
                           </li>
                           <li class="menu-item"> 
                              <a class="menu-link" href="technology-expertise.php">Key Technologies</a>
                           </li>
                           <li class="menu-item"> 
                              <a class="menu-link" href="react-js-development.php">React JS</a>
                           </li>
                           <li class="menu-item"> 
                              <a class="menu-link" href="webix-javascript-ui-development.php">Webix</a>
                           </li>
                           <li class="menu-item"> 
                              <a class="menu-link" href="webrtc-applications-development.php">WebRTC</a>
                           </li>
                           <li class="menu-item"> 
                              <a class="menu-link" href="dot-net-development-company.php">.NET</a>
                           </li>
                           <li class="menu-item"> 
                              <a class="menu-link" href="node-js-development-company.php">Node.js</a>
                           </li>
                           <li class="menu-item"> 
                              <a class="menu-link" href="php-development-company.php">PHP</a>
                           </li>
                        </ul> >
                     </li-->
                     <li class="first-level-menu dropdown-standard with-dropdown-m hmenu-li hmenu-li-stdrop rd-menu-item menu-item menu-item-has-children"> 
                        <a class="menu-link" href="{{ route('landing-page.career.careers') }}" >Careers</a>
                     </li>
                     <li class="first-level-menu dropdown-standard with-dropdown-m hmenu-li hmenu-li-stdrop rd-menu-item menu-item menu-item-has-children"> 
                        <a class="menu-link" href="{{ route('contact-us') }}" >Contact Us</a>
                     </li>
                  </ul>
                  <div class="header-search">
                     <span class="search-open js-search-open">
                        <span class="search-icon">
                           <svg class="search-icon__svg">
                              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#search" class="search-icon__use"></use>
                           </svg>
                        </span>
                        <span class="close-search">
                           <svg class="close-search__svg">
                              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#cross" class="close-search__use"></use>
                           </svg>
                        </span>
                     </span>
                     <div class="header-search-form">
                        <form action="" method="get" id="searchform" class="header-search-block">
                           <input type="text" name="s" id="search"  class="header-search-field" value="" placeholder="What would you like to find?" /> 
                           <input type="hidden" value="post" name="post_type" id="post_type" /> 
                           <button class="search-btn">
                              <svg class="search-svg">
                                 <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#arrow" class="search-use"></use>
                              </svg>
                              <span class="mobile-search-icon">
                                 <svg class="search-icon__svg">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#search" class="search-icon__use"></use>
                                 </svg>
                              </span>
                           </button>
                        </form>
                     </div>
                  </div>
               </nav>
               <span class="close-menu js-close-menu"> 
               <span class="close-menu__row"></span> 
               <span class="close-menu__row"></span> 
               </span>
            </div>
            <span class="menu-icon js-open-menu"> 
            <span class="menu-icon__row"></span> 
            <span class="menu-icon__row"></span> 
            <span class="menu-icon__row"></span> </span>
         </div>
      </div>
   </div>
</div>