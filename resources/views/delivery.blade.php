@extends('layouts.default')

@section('content')
<div id="delivery-review" class="main-content">	
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 main-content-text">
				<form class="row">
                {!! Form::open(array('route' => 'payment.review', 'id' => 'form_data', 'method' => 'POST')) !!}
                <!-- route nya blm di ganti -->
					<div class="col-md-12">
						<div class="book-review-title">
							
							<div class="col-md-4 col-sm-4 col-xs-4 book-review-content">
								<h3 class="order-title title-box">order</h3>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 book-review-content">
								<h3 class="delivery-title title-box" style="opacity: 1;">delivery</h3>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-4 book-review-content">
								<h3 class="payment-title title-box">payment</h3>
							</div>
							
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 return-review-container">
						<h3><i class="fa fa-truck" aria-hidden="true"></i>Taking Methods</h3>
						
						<div class="form-group">
							<label for="destination">How and Where to take the Wifi?</label>
							
							<div class="radio radio-primary">
						            
					            <label for="send_pick">
					                <input type="radio" name="send_pick" id="send_pick" value="pick_up">Pengambilan Sendiri di..
					            </label>

								<div class="form-group">
									<select class="form-control" id="list_address_send">
										<option>Office 1</option>
										<option>Office 2</option>
									</select>
								</div>
					        </div>

					        <div class="radio radio-primary">
						            
					            <label for="send_courier">
					                <input type="radio" name="send_order" id="send_courier" name="send_courier" value="courier">Kurir
					            </label>

					            <div class="form-group">
									<textarea class="form-control" rows="2" id="send_address1" name="send_address1" placeholder="Address 1"></textarea>
								</div>
								<div class="form-group">
									<textarea class="form-control" rows="2" id="send_address2" placeholder="Address 2"></textarea>
								</div>
								<div class="form-group">						
									<input type="number" class="form-control" id="postcode" placeholder="Post Code">
								</div>
								<div class="form-group">
									<select class="form-control" id="provice_send">
										<option disabled selected>-PROVINCE-</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
					        </div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 return-review-container">
						<h3><i class="fa fa-reply" aria-hidden="true"></i>Return Methods</h3>
						<form>
						<div class="form-group">
							<label for="destination">How and Where to get the Wifi?</label>
							<div class="radio radio-primary">
						            
					            <label for="get_pick">
					                <input type="radio" name="take_order" id="get_pick" value="pick_up">Pengembalian ke..
					            </label>
					            <div class="form-group">
									<select class="form-control" id="list_address_get">
										<option>Office 1</option>
										<option>Office 2</option>
									</select>
								</div>
					        </div>
					        <div class="radio radio-primary">
						            
					            <div class="radio radio-primary">
						            
						            <label for="get_courier">
						                <input type="radio" name="get_courier" id="get_courier" value="courier">Kurir
						            </label>
								</div>

					            <div class="form-group">
						            <label for="get_address">
										<input type="checkbox" class="" id="get_address" value="get_address">Sama Dengan Alamat Pengiriman
									</label>
								</div>

					            <div class="form-group">
									<textarea class="form-control" rows="2" id="get_address1" placeholder="Address 1"></textarea>
								</div>

								<div class="form-group">
									<textarea class="form-control" rows="2" id="get_address2" placeholder="Address 2"></textarea>
								</div>

								<div class="form-group">						
									<input type="number" class="form-control" id="postcode" placeholder="Post Code">
								</div>

								<div class="form-group">
									<select class="form-control" id="province_get">
										<option disabled selected>-PROVINCE-</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
									</select>
								</div>
					        </div>
						</div>
					</div>
					<div class="col-md-12">
                        <a type="submit" class="btn btn-primary" href="payment_review">Next Step</a>
					</div>
                    {!! Form::close() !!}
				</form>
					
			</div>	
		</div>
	</div>
</div>
@endsection