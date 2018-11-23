	@extends('layouts.front')

	@section('content')
      <div class="container-fluid p-0">
        	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  				<ol class="carousel-indicators">
    				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  				</ol>
  				<div class="carousel-inner">
    				<div class="carousel-item active">
      					<img class="d-block w-100" src="{{ asset('front_end/') }}/images/1.png" alt="First slide">
    				</div>
    				<div class="carousel-item">
      					<img class="d-block w-100" src="{{ asset('front_end/') }}/images/2.jpg" alt="Second slide">
    				</div>
    				<div class="carousel-item">
      					<img class="d-block w-100" src="{{ asset('front_end/') }}/images/3.jpg" alt="Third slide">
    				</div>
  				</div>
  				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    				<span class="sr-only">Previous</span>
  				</a>
  				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    				<span class="sr-only">Next</span>
  				</a>
			</div>
        </div>

        <div class="container bg-light pt-5 pb-5">
        	<div class="row">
						<div class="col-md-4 text-center" id="notice_board">
	            	<h2 class="bg-info text-center text-white pt-2 pb-2">Notice Board</h2>
	                <marquee direction="up">
	            		<ul class="text-danger">
	                		  <li class="text-center">Last date of apply in DU is 25-02-2018</li>
	                		  <li class="text-center">Last date of apply in DU is 25-02-2018</li>
	                		  <li class="text-center">Last date of apply in DU is 25-02-2018</li>
	                		  <li class="text-center">Last date of apply in DU is 25-02-2018</li>
	                		  <li class="text-center">Last date of apply in DU is 25-02-2018</li>
	                		  <li class="text-center">Last date of apply in DU is 25-02-2018</li>
	                		  <li class="text-center">Last date of apply in DU is 25-02-2018</li>
	                	</ul>
	                </marquee>
	            </div>
							<div class="col-md-8 text-center text-success" id="popular">
								<h2>Popular Universities</h2>
								<div class="row pt-3">
									<div class="col-md-4 pb-4">
										<a href=""><img src="{{ asset('front_end') }}/images/du-logo.jpg" class="img-fluid rounded" alt=""></a>
									</div>
									<div class="col-md-4 pb-4">
										<a href="#"><img src="{{ asset('front_end') }}/images/du-logo.jpg" class="img-fluid rounded" alt=""></a>
									</div>
									<div class="col-md-4 pb-4">
										<a href="#"><img src="{{ asset('front_end') }}/images/du-logo.jpg" class="img-fluid rounded" alt=""></a>
									</div>
									<div class="col-md-4 pb-4">
										<a href="#"><img src="{{ asset('front_end') }}/images/du-logo.jpg" class="img-fluid rounded" alt=""></a>
									</div>
									<div class="col-md-4 pb-4">
										<a href="#"><img src="{{ asset('front_end') }}/images/du-logo.jpg" class="img-fluid rounded" alt=""></a>
									</div>
									<div class="col-md-4 pb-4">
										<a href="#"><img src="{{ asset('front_end') }}/images/du-logo.jpg" class="img-fluid rounded" alt=""></a>
									</div>
								</div>
							</div>
        	</div>
        </div>

				<section class="footer bg-info text-center text-white p-2">
					<h3>All right reserved &copy;{{ date('Y') }}</h3>
				</section>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header">
        				<h5 class="modal-title" id="exampleModalLabel">Log In</h5>
        				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          					<span aria-hidden="true">&times;</span>
        				</button>
      				</div>
      				<div class="modal-body">
          				<form>
  							<div class="form-group">
    							<label for="exampleInputEmail1">Username</label>
    								<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
  							</div>
                          	<div class="form-group">
                            	<label for="exampleInputPassword1">Password</label>
                            	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                          	</div>
  							<div class="form-check">
    							<label class="form-check-label" for="exampleCheck1">New user??<a href="registration.html"> Register here</a></label>
  							</div>
  							<button type="submit" class="btn btn-primary">Submit</button>
						</form>
      				</div>
    			</div>
  			</div>
		</div>

		@endsection

        <script src="{{ asset('front_end/') }}/js/jquery-3.3.1.min.js"></script>
    	<script src="{{ asset('front_end/') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('front_end/') }}/js/custom.js"></script>
    </body>
</html>
