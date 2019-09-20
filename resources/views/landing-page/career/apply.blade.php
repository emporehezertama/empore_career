@include('layouts-empore.header')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
   <body>
      <div class="xb-global-container">
         <div class="top-part-page" id="scrolling">
            <header class="header desktop-version">
               @include('layouts-empore.menu')
            </header>

            <br>
            <div class="xb-row">
               <div class="xb-container" style="height: 260px; overflow: hidden;">
                  <div class="xb-col-12">
                     <div class="page-main-description-content">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         
         <div class="xb-full-width">
            <div class=" js-bg">
               <div class="page-main-description">
                  <div class="xb-block">
                     <div class="xb-row">
                        <div class="xb-col-12" >


                        <br><br><br>
                        <div class="material-form-wrapper">
                           <div class="xb-container">
                              <div class="xb-col-12 xb-content">

                                 <div class="material-form js-form-block">

                                    @if($notif != Null)
                                       @if($notif == 'Success')
                                          <div class="alert alert-success">
                                       @else
                                          <div class="alert alert-danger" style="text-align: center;">
                                       @endif
                                             <strong>{{$notif}} </strong><br> {{$message}}<br><br>
                                          </div>
                                    @endif


                                    <div class="center">
                                       <h2 class="subcaption-part-container center">Apply Job</h2>
                                    </div>
                                    <div class="material-contact-form">
                                       <span class="js-page-title" data-page-title="SaaS Application Development"></span>
                                       <div role="form" class="wpcf7" id="wpcf7-f7671-o1" lang="en-US" dir="ltr">
                                          <div class="screen-reader-response"></div>
                                          
                                          <form action="{{route('apply-cv')}}" method="post" class="wpcf7-form wpcf7-acceptance-as-validation" enctype="multipart/form-data">
                                             {{csrf_field()}}
                                             <div class="material-row">
                                                <div class="material-col">
                                                   <input type="hidden" name="id" value="{{$id}}" required size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required material-field__input" id="id" aria-required="true" aria-invalid="false" />
                                                      
                                                   <div class="material-field material-field--requared js-material-field">
                                                   <label for="full_name">Full Name</label> 
                                                   <br><br>
                                                      <span class="wpcf7-form-control-wrap full_name">
                                                         <input type="text" name="full_name" value="" required size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required material-field__input" id="username" aria-required="true" aria-invalid="false" />
                                                      </span> 
                                                      
                                                   </div>
                                                </div>
                                                <div class="material-col">
                                                   <div class="material-field material-field--requared js-material-field"> 
                                                      <label for="email_address">Email Address</label>
                                                      <br><br>
                                                      <span class="wpcf7-form-control-wrap email_address">
                                                         <input type="email" name="email_address" value="" required size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email material-field__input" id="user_email" aria-required="true" aria-invalid="false" />
                                                      </span> 
                                                      
                                                   </div>
                                                </div>
                                                <div class="material-col">
                                                   <div class="material-field material-field--requared js-material-field"> 
                                                      <label for="phone_number">Your Phone Number</label>
                                                      <br><br>
                                                      <span class="wpcf7-form-control-wrap phone_number">
                                                         <input type="tel" name="phone_number" value="" required size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel material-field__input" id="user_phone" aria-invalid="false" />
                                                      </span> 
                                                      
                                                   </div>
                                                </div>
                                                <div class="material-col">
                                                   <div class="material-field material-field--requared js-material-field"> 
                                                   <label for="file">Upload Your CV <h6>(PDF Format - Max 1 MB)</h6></label>
                                                      <span class="wpcf7-form-control-wrap phone_number">
                                                         <input type="file" name="file" value="" required size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel material-field__input" id="user_phone" aria-invalid="false" />
                                                      </span> 
                                                   </div>
                                                </div>
                                             </div>
                                             @if($submit == 'active')
                                             <div class="center top-20"> 
                                                <input type="submit" name="request" value="SUBMIT" class="wpcf7-form-control wpcf7-submit material-form-btn" id="contact-form-send" />
                                             </div>
                                             @endif


                                             
                                             <div class="center top-20"> 
                                                @if($button == 'detail')
                                                <a href="{{ route('landing-page.career.detail-career', $id) }}">
                                                @elseif($button == 'apply')
                                                <a href="{{ route('apply-vacancy', $id) }}">
                                                @else
                                                <a href="{{ route('landing-page.career.careers') }}">
                                                @endif
                                                   <div name="back" class="wpcf7-form-control wpcf7-submit material-form-btn" id="back">BACK</div>
                                                </a>
                                             </div>
                                             <div class="wpcf7-response-output wpcf7-display-none"></div>
                                          </form>


                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @include('layouts-empore.footer-link')
         <script>
            $('#find').click(function(){
               $("#filter-form input[name='action']").val('view');
               $("#filter-form").submit();
            });

            function reset_filter()
            {
               $("#filter-form input.form-control, #filter-form select").val("");
               $("input[name='reset']").val(1);
               $("#filter-form").submit();
            }
         </script>
      </div>
      @include('layouts-empore.footer')
   </body>
</html>