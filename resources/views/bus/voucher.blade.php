@extends('layouts/voucher_layout')
@section('title', 'Pay')
@section('content')

<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Mingalar Bus Ticket Service
          <small class="pull-right">Date: 2/10/2014</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Mingalar, Inc.</strong><br>
          102,Sule Rd<br>
          Yangon, YG 11011<br>
          Phone: (+95) 123-5432<br>
          Email: info@mingalarbus.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>John Doe</strong><br>
          795 Folsom Ave, Suite 600<br>
          San Francisco, CA 94107<br>
          Phone: (555) 539-1037<br>
          Email: john.doe@example.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #007612</b><br>
        <br>
        <b>Order ID:</b> 4F3S8J<br>
        <b>Payment Due:</b> 2/22/2014<br>
        <b>Account:</b> 968-34567
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>#</th>
            <th>From</th>
            <th>To</th>
            <th>Seats</th>
            <th>Bus No</th>
            <th>Amount</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>1</td>
            <td>Mdy</td>
            <td>NPT</td>
            <td>B21, A2</td>
            <td>12B/231</td>
            <td>4400ks</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Kalay</td>
            <td>Monywa</td>
            <td>C12, A2</td>
            <td>1A/12934</td>
            <td>30000ks</td>
          </tr>
          <tr>
            <td>1</td>
            <td>NPT</td>
            <td>Mdy</td>
            <td>A1, A2</td>
            <td>6P/12934</td>
            <td>3200ks</td>
          </tr>
          <tr>
            <td>1</td>
            <td>Yangon</td>
            <td>Mdy</td>
            <td>A1, A2</td>
            <td>12N/12934</td>
            <td>300ks</td>
          </tr>
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">
        <p class="lead">Payment Methods:</p>
        <img src="{{ asset('/dist/img/credit/visa.png') }}" alt="Visa">
        <img src="{{ asset('/dist/img/credit/mastercard.png') }}" alt="Mastercard">
        <img src="{{ asset('/dist/img/credit/american-express.png') }}" alt="American Express">
        <img src="{{ asset('/dist/img/credit/paypal2.png') }}" alt="Paypal">

        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
         	Thanks for ordering tickets from us.<b> Please bring this screenshot or printed invoice with you. </b>
        </p>
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Amount Due 2/22/2014</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>$250.30</td>
            </tr>
            <tr>
              <th>Tax (9.3%)</th>
              <td>$10.34</td>
            </tr>
            <tr>
              <th>Shipping:</th>
              <td>$5.80</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td>$265.24</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

@endsection

