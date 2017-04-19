@extends('layouts.default')

@section('content')
<div id="payment-review" class="main-content">	
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 main-content-text">
				<form class="row">
					<div class="col-md-12">
						<div class="book-review-title">
							
							<div class="col-md-4 col-sm-4 col-xs-4 book-review-content">
								<h3 class="order-title title-box">order</h3>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 book-review-content">
								<h3 class="delivery-title title-box" style="opacity: 1;">delivery</h3>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 book-review-content">
								<h3 class="payment-title title-box" style="opacity: 1;">payment</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12">
						<div class="panel-group" id="accordion">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
										<i class="fa fa-address-book-o" aria-hidden="true"></i>Personal Info</a>
									</h4>
								</div>
								<div id="collapse1" class="panel-collapse collapse in">
									<div class="panel-body">
										<div class="form-group row">
											<div class="col-md-6 col-sm-6 col-xs-12">
												<label for="usr">Name</label>
												<input type="text" class="form-control" id="usr">
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<label for="usr">Phone</label>
												<input type="text" class="form-control" id="usr">
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<label for="usr">E-mail</label>
												<input type="text" class="form-control" id="usr">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
										<i class="fa fa-id-card-o" aria-hidden="true"></i>Info Account Bank</a>
									</h4>
								</div>
								<div id="collapse2" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="form-group row">
											<div class="col-md-6 col-sm-6 col-xs-12">
												<label for="usr">Name Account</label>
												<input type="text" class="form-control" id="usr">
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<label for="usr">No. Passport</label>
												<input type="text" class="form-control" id="usr">
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<label for="usr">Bank Name</label>
												<input type="text" class="form-control" id="usr">
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<label for="usr">Account Number</label>
												<input type="text" class="form-control" id="usr">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
										<i class="fa fa-money" aria-hidden="true"></i>Payment Methods</a>
									</h4>
								</div>
								<div id="collapse3" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="radio radio-primary">
								            <label for="radio1">
								                <input type="radio" name="radio1" id="radio1" value="option1">Bank Transfer
								            </label>
								        </div>
								        <div class="radio radio-primary">
									            
								            <label for="radio1">
								                <input type="radio" name="radio1" id="radio1" value="option1"><i class="fa fa-cc-visa" aria-hidden="true"></i>Payment With Credit Card
								            </label>
								        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div class="summary-container">
							<div class="title-summary">
								<h4>summary</h4>
							</div>
							<div class="wifi-total">
								<div class="row">
									<div class="title-total title-wifi-total col-md-8 col-sm-8 col-xs-12">
										<h5>Wifi x1 <br><span>Dari Tanggal 2017-01-01 ke 2017-01-02</span></h5>
									</div>
									<div class="price-total price-wifi-total col-md-4 col-sm-4 col-xs-12">
										<h5>IDR 250.000,-</h5>
									</div>
								</div>
							</div>
							<div class="asuransi-total">
								<div class="row">
									<div class="title-total title-asuransi-total col-md-8 col-sm-8 col-xs-12">
										<h5>Asuransi Wifi<br><span>1 (Untuk semua wifi dalam pemesanan)</span></h5>
									</div>
									<div class="price-total price-asuransi-total col-md-4 col-sm-4 col-xs-12">
										<h5>IDR 100.000,-</h5>
									</div>
								</div>
							</div>
							<div class="deposit-total">
								<div class="row">
									<div class="title-total title-deposit-total col-md-8 col-sm-8 col-xs-12">
										<h5>Deposit<br><span>1 (Untuk semua wifi dalam pemesanan)</span></h5>
									</div>
									<div class="price-total price-deposite-total col-md-4 col-sm-4 col-xs-12">
										<h5>IDR 500.000,-</h5>
									</div>
								</div>
							</div>
							<div class="total-payment">
								
								<div class="row">
									<div class="payment col-md-12 col-sm-12 col-xs-12">
										<h4>Total : IDR 850.000,-</h4>
									</div>
								</div>
								
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="checkbox">
							<label><input type="checkbox" value="">I AGREE TO THE TERMS OF SERVICE AND WILL ADHERE TO THEM UNCONDITIONALLY. (READ THE TERMS OF SERVICE)</label>
						</div>
						<!-- <div class="checkbox">
							<label><input type="checkbox" value="">Option 2</label>
						</div> -->
						<a type="submit" class="btn btn-primary" href="">submit</a>
					</div>
				</form>	
			</div>	
		</div>
	</div>
</div>
@endsection