@include('layouts-empore.header')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
   <body>
      <div class="xb-global-container">
         <div class="top-part-page" id="scrolling">
            <header class="header desktop-version">
               @include('layouts-empore.menu')
            </header>
         </div>
         <div class="xb-full-width">
            <div class=" js-bg">
               <div class="page-main-description">
                  <div class="xb-block">
                     <div class="xb-row">
                        <div class="xb-col-4">
                           <div class="card xb-col-12" style="padding: 10px; height: 320px; overflow: hidden;">
                              <div>
                              @if(empty($company->company_logo))
                                 <img style="width: 100%; height: auto;" class="card-img-top" src="{{ asset('images-empore/new_template/it_service.png') }}">
                              @else
                                 <img style="width: 100%; height: auto;" class="card-img-top" src="<?php echo asset('storage/company-logo/'.$company->company_logo.'') ?>">
                              @endif
                              </div>
                           </div>
                           <br>
                           @if(!empty($data->company_name))
                           <div class="card xb-col-12">
                              <div class="card-body">
                                 <div class="xb-row">
                                    <div class="xb-col-12">
                                       <h2 class="card-title">About Company</h2>
                                       <hr>
                                    </div>
                                    <hr><hr>
                                    <div class="xb-col-12" style="text-align: left;">
                                       <br>
                                       <div class="xb-col-12">
                                          <ul>
                                             <li><h3 class="card-title">{{$company->company_name}}</h3></li>
                                             <li><h3 class="card-title"><i class="fa fa-map-marker"></i> {{$company->company_location}}</h3></li>
                                          </ul>
                                       </div>
                                       
                                       <br><br>
                                       <h3>Company Profile</h3>
                                       <hr>
                                       <div class="card-body" style="height: 500px; overflow: scroll; padding: 5px;">
                                          <p>
                                          {!!$company->profile!!}
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           @endif
                        </div>
                        
                        <div class="xb-col-8">
                           <div class="card xb-row">
                              <div class="xb-col-12">
                                 <div class="xb-col-6">
                                    <h2 class="subcaption-part-container">{{$data->job_title}} - {{$data->company_location}}</h2>
                                    <h5 ><i class="fa fa-clock-o"></i>{{$data->created_at}}</h5>
                                    <br><br>
                                    @if($data->range_salary_bottom != Null && $data->range_salary_top != Null)
                                    <h3><i class="fa fa-dollar"></i> IDR {{$data->range_salary_bottom}} - {{$data->range_salary_top}}</h3> 
                                    @endif
                                    <!--h4>Full Time</h4--> 
                                 </div>
                                 <br>
                                 <div class="xb-col-4">
                                       <a href="{{route('apply-vacancy', $data->id)}}">
                                          <div id="apply" name="request" class="wpcf7-form-control wpcf7-submit material-form-btn" >APPLY</div>
                                       </a>
                                       <br><br>
                                       @if(!empty($data->deadline))
                                       <h5><i class="fa fa-calendar"></i> Deadline   :  {{$data->deadline}}</h5>
                                       @endif
                                 </div>
                                 <div class="xb-row" style="margin-bottom: 10px;">
                                    <div class="xb-col-1">
                                       <!-- Load Facebook SDK for JavaScript -->
                                       <div id="fb-root"></div>
                                       
                                       <script>(function(d, s, id) {
                                          var js, fjs = d.getElementsByTagName(s)[0];
                                          if (d.getElementById(id)) return;
                                          js = d.createElement(s); js.id = id;
                                          js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                          fjs.parentNode.insertBefore(js, fjs);
                                       }(document, 'script', 'facebook-jssdk'));</script>

                                          <div class="fb-share-button" 
                                          data-href="https://www.empore.co.id/career-empore/index.php/detail-career/{{$data->id}}" 
                                          data-layout="button_count">
                                       </div>
                                    </div>
                                    <div class="xb-col-1"> 
                                       <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                                       <script type="IN/Share" data-url="https://www.empore.co.id/career-empore/index.php/detail-career/{{$data->id}}" data-href="https://www.empore.co.id/career-empore/index.php/detail-career/{{$data->id}}" data-src="http://chillyfacts.com/wp-content/uploads/2017/06/LinkedIN.gif"></script>
                                      
                                    </div>
                                 </div>
                                 
                              </div>
                           </div>
                           
                           <br>
                           <div class="card xb-row" style="padding: 10px;">
                              <div class="xb-col-12">
                                 <div class="xb-col-12">
                                    <h3>Description</h3>
                                    <hr>
                                    <div class="xb-col-12" style="padding: 10px;">
                                       <div class="xb-col-12">
                                          {!! $data->description !!}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <br>
                           <div class="card xb-row" style="padding: 10px;">
                              <div class="xb-col-12">
                                 <div class="xb-col-12">
                                    <h3>Requirement</h3>
                                    <hr>
                                    <div class="xb-col-12" style="padding: 10px;">
                                       <div class="xb-col-12">
                                          {!! $data->requirement !!}
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           
                        </div>


                        <div id="modal_apply" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                    <div class="modal-header">
                                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                          <h4 class="modal-title" id="myModalLabel">Apply CV</h4> </div>
                                          <form method="POST" id="form-upload" enctype="multipart/form-data" class="form-horizontal frm-modal-education" >
                                          {{ csrf_field() }}
                                          <div class="modal-body">
                                                <div class="form-group">
                                                   <label class="col-md-3">File (xls)</label>
                                                   <div class="col-md-9">
                                                      <input type="file" name="file" class="form-control" />
                                                   </div>
                                                </div>
                                          </div>
                                          <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect btn-sm" data-dismiss="modal">Close</button>
                                                <label class="btn btn-info btn-sm" id="btn_import">Submit</label>
                                          </div>
                                       </form>
                                       <div style="text-align: center;display: none;" class="div-proses-upload">
                                          <h3>Proses upload harap menunggu !</h3>
                                          <h1 class=""><i class="fa fa-spin fa-spinner"></i></h1>
                                       </div>
                              </div>
                              <!-- /.modal-content -->
                           </div>
                           <!-- /.modal-dialog -->
                        </div>

                     </div>

                     @if(count($job) > 0)
                     <br><br><br><br><br>
                     <div class="xb-row">
                        <div class="xb-col-12" style="text-align: center;">
                           <h1>Other Job You Might Be Interest In</h1>
                           <hr>
                        </div>
                     </div>
                     <div class="xb-row">
                        @foreach($job as $item)
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
                                       <h4 class="card-title"><i class="fa fa-dollar"></i> <b>IDR {{$item->range_salary_bottom}} - {{$item->range_salary_top}}</b></h4>
                                    </div>
                                 </div>
                                 <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><b>{{$item->company_name}}</b><b><h4><i class="fa fa-map-marker"></i> {{$item->company_location}}</h4></b></li>
                                 </ul>
                                 <p class="card-text">
                                    {!! substr($company->profile, 1, 200) !!}
                                 </p>
                              </div>
                              <br><br>
                              <div class="xb-row">
                                 <div class="xb-col-3"></div>
                                 <div class="xb-col-4">
                                    <a href="{{route('apply-vacancy')}}">
                                       <div id="apply" name="request" class="wpcf7-form-control wpcf7-submit material-form-btn btn-info" >Detail</div>
                                    </a>
                                 </div>
                                 <div class="xb-col-4"></div>
                              </div>
                              <br>
                        </div>
                        @endforeach
                     </div>
                     @endif
                  </div>

               </div>
            </div>
         </div>
         @include('layouts-empore.footer-link')
         <script>
            $('#apply').click(function(){
               $('#modal_apply').modal('show');
            });
         </script>
      </div>
      @include('layouts-empore.footer')
   </body>
</html>