@extends('rein.layouts.dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">


            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Invoice Design
                                <small>Sample user invoice design</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <section class="content invoice">
                                <!-- title row -->
                                <div class="row">
                                    <div class="col-xs-12 invoice-header">
                                        <h1>
                                            <i class="fa fa-globe"></i> Invoice.
                                            <small class="pull-right">
                                                Date: {{($data->issued_at)->toDateString()}}</small>
                                        </h1>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- info row -->

                                <div class="row invoice-info">
                                    <div class="col-sm-4 invoice-col">
                                        From
                                        <address>
                                            <strong>{{$data->issuer['user_name']}}</strong>
                                            <br>{{$data->issuer['user_address'][0]}}
                                            <br>{{$data->issuer['user_address'][1]}} {{$data->issuer['user_address'][2]}}
                                            <br>{{$data->issuer['user_phone']}}
                                            <br>{{$data->issuer['user_email']}}
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        To
                                        <address>
                                            <strong>{{$data->billed_to['for_name']}} </strong>
                                            <br>{{$data->billed_to['for_address'][0]}}
                                            <br>{{$data->billed_to['for_address'][1]}} {{$data->billed_to['for_address'][2]}}
                                            <br>{{$data->billed_to['for_phone']}}
                                            <br>{{$data->billed_to['for_email']}}
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        <b>Invoice #{{$data->no}}</b>
                                        <br>
                                        <br>
                                        <b>Payment Due:</b> {{$data->due_at}}
                                        <br>
                                        <b>Account Name:</b> {{$data->payment_option['account_name']}}
                                        <br>
                                        <b>Account Number:</b> {{$data->payment_option['account_number']}}
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- Table row -->
                                <div class="row">
                                    <div class="col-xs-12 table">
                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>Qty</th>
                                                <th style="width: 59%">Description</th>
                                                <th>Unit Discount</th>
                                                <th>Unit Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @for ($i = 0; $i < count($data->lines['item']['qty']); $i++)
                                                <tr>
                                                    <td> {{$data->lines['item']['qty'][$i]}}</td>
                                                    <td> {{$data->lines['item']['desc'][$i]}}</td>
                                                    <td> {{$data->lines['item']['disc'][$i]}}</td>
                                                    <td> {{$data->lines['item']['price'][$i]}}</td>
                                                </tr>
                                            @endfor
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
                                        <img src="{{url('/production/images/visa.png')}}" alt="Visa">
                                        <img src="{{url('/production/images/mastercard.png')}}" alt="Mastercard">
                                        <img src="{{url('/production/images/american-express.png')}}"
                                             alt="American Express">
                                        <img src="{{url('/production/images/paypal.png' )}}" alt="Paypal">
                                        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning
                                            heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo
                                            edmodo ifttt zimbra.
                                        </p>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-xs-6">
                                        <p class="lead">Amount Due {{($data->due_at)}}</p>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tbody>
                                                <tr>
                                                    <th style="width:50%">Subtotal:</th>
                                                    <td>{{$dt['price']}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Tax ({{$data->payment_terms['penalty']}}%)</th>
                                                    <td>{{$dt['tax']}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping:</th>
                                                    <td>{{$dt['shipping']}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Total:</th>
                                                    <td>{{$dt['total']}}</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <!-- this row will not appear when printing -->
                                <div class="row no-print">
                                    <div class="col-xs-12">
                                        <button class="btn btn-default" onclick="window.print();"><i
                                                class="fa fa-print"></i> Print
                                        </button>
                                        <button class="btn btn-success pull-right"><i class="fa fa-credit-card"></i>
                                            Submit Payment
                                        </button>
                                        <a href="{{route('pdf',['id'=>$data->id])}}">
                                            <button class="btn btn-primary pull-right" style="margin-right: 5px;"><i
                                                    class="fa fa-download"></i> Generate PDF
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->


@endsection
