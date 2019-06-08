@extends('layouts.bus')
@section('content')

<div class="container-fluid py-3">
    <div class="row">
        <div class="col-12 col-sm-8 col-md-6 col-lg-4 mx-auto">
            <div id="pay-invoice" class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center">Pay Invoice</h3>
                    </div>
                    <hr>
                    <form action="{{ route('voucher.index') }}" method="post" novalidate="novalidate" class="needs-validation">
                        @csrf
                        <div class="form-group text-center">
                        <img class="img-responsive pull-right" src="{{ asset('img/pay.png')}}">
                        </div>
                        <div class="form-group">
                            <label for="cc-payment" class="control-label mb-1">Payment amount</label>
                            <input id="cc-payment" name="cc_payment" type="text" class="form-control" aria-required="true" aria-invalid="false" required value="{{ $total . ' ' . 'kyats' }}" disabled="" required="">
                            <span class="invalid-feedback">Enter the payment amount</span>
                        </div>
                        <div class="form-group has-success">
                            <label for="cc_name" class="control-label mb-1">Name on card</label>
                            <input id="cc-name" name="cc_name" type="text" class="form-control cc-name" required="">
                            <span class="invalid-feedback">Enter the name as shown on credit card</span>
                        </div>
                        <div class="form-group">
                            <label for="cc_number" class="control-label mb-1">Card number</label>
                            <input id="cc-number" name="cc_number" type="tel" class="form-control cc-number identified visa" required="" pattern="[0-9]{16}" required="">
                            <span class="invalid-feedback">Enter a valid 16 digit card number</span>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="cc-exp" class="control-label mb-1">Expire date</label>
                                    <input id="cc-exp" name="cc_exp" type="tel" class="form-control cc-exp" required placeholder="MM / YY" autocomplete="cc-exp" required="">
                                    <span class="invalid-feedback">Enter the expiration date</span>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="x_card_code" class="control-label mb-1">Security code</label>
                                <div class="input-group">
                                    <input id="x_card_code" name="x_card_code" type="tel" class="form-control cc-cvc" required autocomplete="off" required="">
                                    <span class="invalid-feedback order-last">Enter the 3-digit code on back</span>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                        <span class="fa fa-question-circle fa-lg" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code" 
                                        data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                        data-trigger="hover"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="x_zip" class="control-label mb-1">Postal code</label>
                            <input id="x_zip" name="x_zip" type="text" class="form-control" value="" data-val="true" data-val-required="Please enter the ZIP/Postal code" autocomplete="postal-code" required="">
                            <span class="help-block" data-valmsg-for="x_zip" data-valmsg-replace="true"></span>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-lock fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Pay</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@endsection