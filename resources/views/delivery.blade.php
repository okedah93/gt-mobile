@extends('layouts.default')

@section('content')
<div id="delivery-review" class="main-content">	
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 main-content-text">
				<form class="row">
                {!! Form::open(array('route' => 'delivery', 'id' => 'form_data', 'method' => 'POST')) !!}
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
						            
					            <label for="sent_pick">
					                <input type="radio" name="sent_order" id="sent_pick" value="pick_up">Pengambilan Sendiri di..
					            </label>
					        </div>
					        <div class="radio radio-primary">
						            
					            <label for="sent_courier">
					                <input type="radio" name="sent_order" id="sent_courier" value="courier">Kurir
					            </label>
					        </div>
						</div>
						<div class="form-group">
							<select class="form-control" id="list-address">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 return-review-container">
						<h3><i class="fa fa-reply" aria-hidden="true"></i>Return Methods</h3>
						<form>
						<div class="form-group">
							<label for="destination">How and Where to take the Wifi?</label>
							<div class="radio radio-primary">
						            
					            <label for="take_pick">
					                <input type="radio" name="take_order" id="take_pick" value="pick_up">Pengambilan Sendiri di..
					            </label>
					        </div>
					        <div class="radio radio-primary">
						            
					            <label for="take_courier">
					                <input type="radio" name="take_order" id="take_courier" value="courier">Kurir
					            </label>
					        </div>
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="2" id="address1" placeholder="Address 1"></textarea>
						</div>
						<div class="form-group">
							<textarea class="form-control" rows="2" id="address2" placeholder="Address 2"></textarea>
						</div>
						<div class="form-group">						
							<input type="number" class="form-control" id="postcode" placeholder="Post Code">
						</div>
						<div class="form-group">
							<select class="form-control" id="sel1">
								<option disabled selected>-PROVINCE-</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
							</select>
						</div>
					</div>
					<div class="col-md-12">
                        <a type="submit" class="btn btn-primary" href="{{ url('/payment') }}">Next Step</a>
					</div>
				</form>
					
			</div>	
		</div>
	</div>
</div>
@endsection