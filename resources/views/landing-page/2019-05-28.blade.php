<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<script src="{{ asset('js/bootbox.min.js') }}"></script>
		
		<title>EM-HR - HRIS Application System The Best and Complete</title>
		<style type="text/css">
			body {
				font-family: "Trebuchet MS", Helvetica, sans-serif;
			}
			.bg-1 {
				background: url('{{ asset('landing-page/2019-05-28/Background1.png') }}');
				background-size: contain;
			}
			.bg-2 {
				background: url('{{ asset('landing-page/2019-05-28/Background2.png') }}');
				background-size: cover;
				padding-top: 40px;
			}
			.form form {
				background: white;
			}
			.btn_trial_1 {
				background: url('{{ asset('landing-page/2019-05-28/button trial now.png') }}');
				background-size: cover;
				border: 0;
				width: 252px;
				height: 45px;
				color : white;
				font-size: 20px;
				cursor: pointer;
			}
			.btn_trial_2 {
				background: url('{{ asset('landing-page/2019-05-28/button trial now.png') }}');
				background-size: cover;
				border: 0;
				width: 303px;
				height: 54px;
				color : white;
				font-size: 20px;
				cursor: pointer;
			}
			.btn_trial_3 {
				background: url('{{ asset('landing-page/2019-05-28/button trial now.png') }}');
				background-size: cover;
				border: 0;
				width: 303px;
				height: 54px;
				color : white;
				font-size: 20px;
			}
			.bg-form-title {
				background: url('{{ asset('landing-page/2019-05-28/button trial start register.png') }}');
				background-size: cover;
				border: 0;
				width: 100%;
				height: 54px;
				color : white;
				font-size: 20px;
			}
			.section-1 {
				margin-top: 15%;
			}

			.btn_login 
			{
				color: white !important;
				background: #bfbfbf;
			    width: 100px;
			    border-radius: 0 0 17px 17px;
			    margin-top: -1px;
			    height: 45px;
			    margin-right: 25px;
			    border: 0;
			    padding-top: 10px;
			}
		</style>
		<script type="text/javascript">
			function form_free_trial()
			{
				$('html, body').animate({
			        scrollTop: $(".container_bottom").offset().top
			    }, 1000);
			}

			@if(Session::has('message-success'))
				alert("{{ Session::get('message-success') }}");
			@endif

		</script>
	</head>
<body>
	<div>
		<a href="{{ route('login') }}" class="btn btn-info float-right btn_login">Login</a>
		<div class="bg-1" style="">
		  <div class="container" style="height: 100vh; ">
			<div class="col-md-4 float-left section-1">
				<h1 style="color: #acce22; font-size: 53px;">EM-HR</h1>
				<h3 style="color: #0e9a88; font-size: 29px;">HRIS Application System The Best and Complete</h1>
				<h4 style="margin-bottom: 4px;margin-top: 15px;">Help Your Company</h4>
				<p>
					Save Up To Tens Of Millions Of Rupiah <br />
					Easy, Practical & Efficient 	
				</p>
				<button class="btn_trial_1" onclick="form_free_trial()">Create Free Member</button>
			</div>

			<div class="col-md-8 float-left" style="height: 100vh; ">
				<img src="{{ asset('landing-page/2019-05-28/modelEMHRsmall.png') }}" style="width: 175%; position: absolute; bottom: -10px; right: -340px;">
			</div>
			<div class="clearfix"></div>
		  </div>
		</div>


		<div class="bg-1">
		  <div class="container" style="padding: 15px 0;">
			<div class="col-md-6 float-left section-1">
				<iframe width="580" height="360" src="https://www.youtube.com/embed/y8h1fB7lSIQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="col-md-4 float-right">
				<img src="{{ asset('landing-page/2019-05-28/bubble background.png') }}" style="width: 100%; margin-left: -23px; margin-top: 70px" />
			</div>
			<div class="clearfix"></div>
		  </div>
		</div>


		<div class="bg-2">
		  <div class="container container_bottom">
			<div class="col-md-4 float-left">
				<img src="{{ asset('landing-page/2019-05-28/bubble background.png') }}" style="width: 100%; margin-left: -23px; margin-top: 70px" />
			</div>
			<h1 class="text-center"><label style="color: #0e9a88;font-size: 29px;">There is ease in</label> <label style="color: #acce22">EM-HR</label> <label  style="color: #0e9a88">Application</label></h1>
			<div class="col-md-5 float-right">
				<div class="form">
					<form method="POST" action="{{ route('post-landing-page1') }}" class="col-md-12 px-0 pt-2" style="padding-top: 0px !important; padding-bottom: 10px">
                        {{ csrf_field() }}
						<div class="bg-form-title">
							<h3 style="color: white; text-align: center;font-size: 23px;padding-top: 10px !important;" class="py-2 px-0 mx-0 mt-0">Free Register Member</h3>
						</div>
						@if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                                </ul>
                            </div>
                        @endif
						<div class="px-5 pt-4">
							<div class="form-group">
								<input type="text" class="form-control" id="nama" name="nama" placeholder="Full Name" value="{{ old('nama') }}" required>
							</div>
							<div class="form-group">
								<select id="jabatan" name="jabatan" class="form-control">
									<option value=""> - Position - </option>
									<option>Owner</option>
									<option>HRD / Finance</option>
									<option>IT</option>
									<option>Others</option>
								</select>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
							</div>
							<!--div class="form-group">
								<input type="password" class="form-control" name="password" placeholder="Password"  value="{{ old('password') }}" required>
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="confirm" placeholder="Confirm Password" value="{{ old('confirm') }}" required>
							</div-->
							<div class="form-group">
								<input type="input" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Company" value="{{ old('company') }}" required>
							</div>
							<div class="form-group">
								<select class="form-control" id="bidang_usaha" name="bidang_usaha" required>
									<option value=""> - Choose Business Specialization - </option>
									<option>Agriculture / Mining</option>
									<option>Business Services</option>
									<option>Computers and Electronics</option>
									<option>Consumer Services</option>
									<option>Education</option>
									<option>Energy & Utilities</option>
									<option>Financial Services</option>
									<option>Government</option>
									<option>Healtcare, Pharmaceuticals, & Biotech</option>
									<option>Manufacturing</option>
									<option>Media & Entertainment</option>
									<option>Non Profit</option>
									<option>Real Estate & Contruction</option>
									<option>Retail</option>
									<option>Software & Internet</option>
									<option>Telecommunications</option>
									<option>Transportation & Storage</option>
									<option>Travel, Recreation, & Leisure</option>
									<option>Wholesale & Distribution</option>
									<option>Consumer Products</option>
									<option>Others</option>
								</select>
							</div>
							<div class="form-group">
								<input type="text" id="handphone" name="handphone" class="form-control" placeholder="Handphone Number" value="{{ old('handphone') }}" required>
							</div>
							<!-- <div class="form-group">
								<div class="float-left px-0 mx-0" style="width: 15px">
									<input type="checkbox" name="agree" value="1" required>
								</div>
								<div class="float-left col-md-11" style="padding-left: 7px !important; padding-top: 2px !important;">
									<label style="font-size: 12px;">I have read and agree to the EM-HR.com and End User License Agreement</label>
								</div>
								<div class="clearfix"></div>
							</div> -->
						</div>
						<div class="form-group text-center">
							<button class="btn_trial_2" type="submit">Create Free Member</button>
						</div>
					</form>

				</div>
			</div>
			<div class="clearfix"></div>	
		</div>
		<div>
			<img src="{{ asset('landing-page/2019-05-28/line botton.png') }}" class="mb-4" style="width: 100%; margin-top: 1%">
		</div>
	  </div>
	</div>

<script type="text/javascript">
	$('#nama').on('input', function(){
		$('#nama2').val($('#nama').val());
	});
	$('#jabatan').change(function(){
		$('#jabatan2').val($('#jabatan').val());
	});
	$('#email').on('input', function(){
		$('#email2').val($('#email').val());
	});
	$('#nama_perusahaan').on('input', function(){
		$('#nama_perusahaan2').val($('#nama_perusahaan').val());
	});
	$('#bidang_usaha').on('change', function(){
		$('#bidang_usaha2').val($('#bidang_usaha').val());
	});
	$('#handphone').on('input', function(){
		$('#handphone2').val($('#handphone').val());
	});


	function submitFormPricelist(){
		if($('#nama2').val() != '' || $('#jabatan2').val() != '' || $('#email2').val() != '' || $('#nama_perusahaan2').val() != '' || $('#bidang_usaha2').val() != '' || $('#handphone2').val() != ''){
			$('#form-price-list').submit();
		}else{
			bootbox.confirm({
                title : "<i class=\"fa fa-warning\"></i> EMPORE SYSTEM",
                message: "Field tidak boleh kosong",
                closeButton: false,
                buttons: {

                },
                callback: function (result) {
                    if(result)
                    { 
                        
                    }
                }
            });
		}
	}
	
</script>

</body>
</html>