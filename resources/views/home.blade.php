@extends('layouts.default')

@section('content')
<div id="slides">
    <ul class="slides-container">
        <li>
            <img src="{{ url('/') }}/img/fullimage1.jpg" alt="The Last of us">
            <div class="text-overlay blackopacity">
                <h1>GT-MOBILE</h1>
                <p>Top 20 in Asia</p>
                <a href="#">see more</a>
            </div>
        </li>
        <li>
            <img src="{{ url('/') }}/img//fullimage2.jpg" alt="GTA V">
            <div class="text-overlay blackopacity">
                <h1>GT-MOBILE</h1>
                <p>Top 20 in Asia</p>
                <a href="#">see more</a>
            </div>
        </li>
        <li>
            <img src="{{ url('/') }}/img/fullimage3.jpg" alt="Mirror Edge">
            <div class="text-overlay blackopacity">
                <h1>GT-MOBILE</h1>
                <p>Top 20 in Asia</p>
                <a href="#">see more</a>
            </div>
        </li>
    </ul>

    <nav class="slides-navigation">
        <a href="#" class="next"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
        <a href="#" class="prev"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></a>
    </nav>
</div>
<div id="bookingnow" class="booking-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 booking-here">
                <div class="row">
                    {!! Form::open(array('route' => 'do.order', 'id' => 'form_data', 'method' => 'POST')) !!}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-md-4">

                            <div class="form-group{{ $errors->has('destination') ? ' has-error' : '' }}">
                                <label for="destination">Kemana Tujuan Perjalanan Anda?</label>
                                <select class="form-control" id="destination" name="destination" value="{{ old('destination') }}">
                                    <option>Indonesia</option>
                                    <option>Jepang</option>
                                    <option>Korea</option>
                                    <option>Malaysia</option>
                                    <option>Thailand</option>
                                </select>
                            </div>
                    </div>
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('startdate') ? ' has-error' : '' }}">
                                <label for="start-date">Perjalanan Dimulai</label>
                                <input type="text" class="form-control" id="startdate" name="startdate" aria-describedby="startdate" placeholder="" value="{{ old('startdate') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group{{ $errors->has('enddate') ? ' has-error' : '' }}">
                                <label for="finish-date">Perjalanan Selesai</label>
                                <input type="text" class="form-control" id="enddate" name="enddate" aria-describedby="enddate" placeholder="" value="{{ old('enddate') }}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <label for="router-quantity">Jumlah Router</label>
                                </div>
                                <div class="form-group{{ $errors->has('router_quantity') ? ' has-error' : '' }} col-md-6 col-sm-6 col-xs-6">
                                    <select class="form-control" id="router_quantity" name="router_quantity" value="{{ old('quantity') }}">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <label for="rental-price">Harga Rental untuk 2 Hari</label>
                                </div>
                                <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                    <input type="text" class="form-control" id="rental-price" aria-describedby="rental-price" placeholder="IDR 0" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" class="btn btn-primary" href="{{ url('/do_order') }}"/>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div id="home" class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="main-content-text">
                    <a href="#"><img src="{{ url('/') }}/img/sim-card.png"></a>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="main-content-text">
                    <img src="{{ url('/') }}/img/like-fb.png">
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="main-content-text faq text-left">
                    <h4><span>f</span>requently</h4>
                    <h4><span>a</span>sked</h4>
                    <h4><span>q</span>uestions</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="testimonial">
    <div class="container">
        <div class="testimonial-title">
            <h1>customer testimonials</h1>
        </div>
        <div class="row">
            <div class="customNavigation">
                <a class="btn gray prev"><i class="fa fa-arrow-left"></i></a>
                <a class="btn gray next"><i class="fa fa-arrow-right"></i></a>
            </div>

            <div id="slider-carousel2" class="owl-carousel">
                <div class="item">
                    <img src="http://dummyimage.com/90x90/f0f0f0/333">
                    <h4 class="cust-name">Lorem ipsum</h4>
                    <h4 class="cust-position">testset</h4>
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                        <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                </div>

                <div class="item">
                    <img src="http://dummyimage.com/90x90/f0f0f0/333">
                    <h4 class="cust-name">Lorem ipsum</h4>
                    <h4 class="cust-position">testset</h4>
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat<i class="fa fa-quote-right" aria-hidden="true"></i></p>
                </div>

                <div class="item">
                    <img src="http://dummyimage.com/90x90/f0f0f0/333">
                    <h4 class="cust-name">Lorem ipsum</h4>
                    <h4 class="cust-position">testset</h4>
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat<i class="fa fa-quote-right" aria-hidden="true"></i></p>
                </div>

                <div class="item">
                    <img src="http://dummyimage.com/90x90/f0f0f0/333">
                    <h4 class="cust-name">Lorem ipsum</h4>
                    <h4 class="cust-position">testset</h4>
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat<i class="fa fa-quote-right" aria-hidden="true"></i></p>
                </div>

                <div class="item">
                    <img src="http://dummyimage.com/90x90/f0f0f0/333">
                    <h4 class="cust-name">Lorem ipsum</h4>
                    <h4 class="cust-position">testset</h4>
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat<i class="fa fa-quote-right" aria-hidden="true"></i></p>
                </div>

                <div class="item">
                    <img src="http://dummyimage.com/90x90/f0f0f0/333">
                    <h4 class="cust-name">Lorem ipsum</h4>
                    <h4 class="cust-position">testset</h4>
                    <p><i class="fa fa-quote-left" aria-hidden="true"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat<i class="fa fa-quote-right" aria-hidden="true"></i></p>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
