@include('layouts-empore.header')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
   <body>
      <div class="xb-global-container">
         <div class="top-part-page" id="scrolling">
            <header class="header desktop-version">
               @include('layouts-empore.menu')
               <!-- <div class="xb-col-12" style="background-color: rgba(0,0,0,0.3); height: 50px; border: solid 0px;">
                  <div class="xb-row" style="border: solid 0px;">
                     <div class="xb-col-2" style="border: solid 0px;">
                        empore
                     </div>
                     <div class="xb-col-6"></div>
                     <div class="xb-col-2">Career</div>
                  </div>
               </div> -->
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
                           
                           <!--form action="{{route('landing-page.career.careers')}}" method="post" id="filter-form" class="wpcf7-form wpcf7-acceptance-as-validation" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <input type="hidden" name="action" value="view">
                              <input type="hidden" name="reset" value="0">
                              <div class="xb-row">
                                 <div class="col-md-4">
                                    <select name="job_title" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required material-field__input" >
                                       <option value="" selected>Job Title</option>
                                       @foreach($vacancy as $item)
                                       <option value="{{$item->job_title}}">{{$item->job_title}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 <div class="col-md-4">
                                    <select name="location" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required material-field__input" >
                                       <option value="" selected>Location</option>
                                       @foreach($location as $item)
                                       <option value="{{$item->company_location}}">{{$item->company_location}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 <div class="col-md-2">
                                    <div name="search" id="find" class="wpcf7-form-control wpcf7-submit material-form-btn" >SEARCH</div>
                                 </div>
                                 <div class="col-md-2">
                                    <a href="javascript:void(0)" onclick="reset_filter()"><i class="fa fa-refresh"></i></a>
                                 </div>
                              </div>
                           </form>
                           <hr>

                           <br><br><br-->

                           <div class="xb-row">
                              <div class="xb-col-12">
<<<<<<< HEAD
                                 <h2>Showing {{$data->lastItem()}} out of {{$data->total()}} total vacancy</h2>
=======
                                 <h2>Showing {{$data->lastItem()}} out of {{$data->total()}} total</h2>
>>>>>>> 59d8442487a7f19d975d72d9b1d8a10a41c25f72
                              </div>
                           </div>
                           <br>

                           <div class="xb-row">
                              @foreach($data as $item)
                              <div class="card border-primary xb-col-12" style="width: 36rem; margin: 15px;">
                                    <div class="card-body">
                                       <div class="xb-row">
                                          <div class="xb-col-4">
                                             @if(companyLogo($item->company_name) != Null)
                                             <img class="card-img-top" style="max-height: 60px; width: auto;" src="<?php echo asset('storage/company-logo/'.companyLogo($item->company_name).'') ?>" alt="Card image cap">
                                             @else
                                             <img class="card-img-top" style="max-height: 60px; width: auto;" src="{{ asset('images-empore/new_template/it_service.png') }}" alt="Card image cap">
                                             @endif
                                          </div>
                                          <div class="xb-col-8" style="text-align: left;">
                                             <a href="{{ route('landing-page.career.detail-career', $item->id) }}">
                                                <h2 class="card-title">{{$item->job_title}}</h2>
                                             </a>
                                             @if($item->range_salary_bottom != Null && $item->range_salary_top != Null)
                                             <h4 class="card-title"><i class="fa fa-dollar"></i> <b>IDR {{$item->range_salary_bottom}} - {{$item->range_salary_top}}</b></h4>
                                             @endif
                                          </div>
                                       </div>
                                       <ul class="list-group list-group-flush">
                                          <li class="list-group-item"><b>{{$item->company_name}}</b><b><h4><i class="fa fa-map-marker"></i> {{$item->company_location}}</h4></b></li>
                                       </ul>
                                       <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                                    </div>
                                    <br><br>
                                 <div class="card-header">
                                    <span><h5 href="#" class="card-link"><i class="fa fa-clock-o"></i> 
                                       @if($item->created_at == $item->updated_at)
                                          Created at
                                       @else
                                          Updated at
                                       @endif 
                                        {{datesince($item->updated_at)}}
                                    </h5></span>
                                 </div>
                              </div>
                              @endforeach

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