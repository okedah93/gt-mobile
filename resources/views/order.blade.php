@extends('layouts.default')

@section('content')
<?php 
$quantity = $request['router_quantity'];
?>
<div id="book-review" class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 main-content-text">
                <form method="POST" action="{{ url('/delivery') }}" id="form_data" class="row">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                        <div class="book-review-title">

                            <div class="col-md-4 col-sm-4 col-xs-4 book-review-content">
                                <h3 class="order-title title-box">order</h3>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4 book-review-content">
                                <h3 class="delivery-title title-box">delivery</h3>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-4 book-review-content">
                                <h3 class="payment-title title-box">payment</h3>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="form-group">
                            <label for="destination">Kemana Tujuan Perjalanan Anda?</label>
                            <select class="form-control" id="destination" name="destination" disabled>
                                <option>{{$request->destination}}</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="start-date">Perjalanan Dimulai</label>
                            <input type="text" class="form-control" id="startdate" name="startdate" aria-describedby="startdate" placeholder="" value="{{ $request->startdate }}" disabled="">
                        </div>
                        <div class="form-group">
                            <label for="finish-date">Perjalanan Selesai</label>
                            <input type="text" class="form-control" id="enddate" name="enddate" aria-describedby="enddate" placeholder="" value="{{ $request->enddate }}" disabled="">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                <label for="rental-price">GT Mobile Wifi<br><span style="color: #f1f1f1;font-size: 10px;">Including 1 wifi, 1 Cable, 1 adaptor, and 1 bag.</span></label>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                <div class="radio radio-primary">
                                    <label for="radio1">
                                        <input type="radio" name="router_quantity" id="radio1" value="option1" disabled=""<?php if($quantity==1) echo "checked"?>>1
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <label for="radio2">
                                        <input type="radio" name="router_quantity" id="radio2" value="option2" disabled=""<?php if($quantity==2) echo "checked"?>>2
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <label for="radio3">
                                        <input type="radio" name="router_quantity" id="radio3" value="option3" disabled=""<?php if($quantity==3) echo "checked"?>>3
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <label for="radio4">
                                        <input type="radio" name="router_quantity" id="radio4" value="option4" disabled=""<?php if($quantity==4) echo "checked"?>>4
                                    </label>
                                </div>
                                <div class="radio radio-primary">
                                    <label for="radio5">
                                        <input type="radio" name="router_quantity" id="radio5" value="option5" disabled=""<?php if($quantity==5) echo "checked"?>>5
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                <label for="router-quantity">Tambahan</label>
                            </div>
                            <div class="form-group col-md-6 col-sm-6 col-xs-6">
                                <div class="checkbox checkbox-primary">
                                    <label for="checkbox2">
                                        <input id="checkbox2" type="checkbox">Asuransi Wifi <br><span style="color: #f1f1f1;font-size: 10px;">Dapatkan asuransi untuk wifi anda.</span>
                                    </label>
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
                                        <h5>Wifi x{{$quantity}}<br><span>Dari Tanggal {{$request->startdate}} ke {{$request->enddate}}</span></h5>
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
                        <input type="submit" class="btn btn-primary"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection