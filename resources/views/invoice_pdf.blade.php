<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

    <table>
        <tr>
            <td width="80%">
                <h1>Invoice.</h1>
            </td>
            <td>
                <h2>Date: {{($data->issued_at)->toDateString()}}</h2>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <!-- info row -->
            <td>
                From<br>

                <strong>{{$data->issuer['user_name'][0]}} {{$data->issuer['user_name'][1]}}</strong>
                <br>{{$data->issuer['user_address'][0]}}
                <br>{{$data->issuer['user_address'][1]}} {{$data->issuer['user_address'][2]}}
                <br>{{$data->issuer['user_phone']}}
                <br>{{$data->issuer['user_email']}}
            </td>
            <td>
                To<br>

                <strong>{{$data->billed_to['for_name'][0]}} {{$data->billed_to['for_name'][1]}}</strong>
                <br>{{$data->billed_to['for_address'][0]}}
                <br>{{$data->billed_to['for_address'][1]}} {{$data->billed_to['for_address'][2]}}
                <br>{{$data->billed_to['for_phone']}}
                <br>{{$data->billed_to['for_email']}}
            </td>
            <td>
                <br>
                <b>Invoice #{{$data->no}}</b>
                <br>
                <br>
                <b>Payment Due:</b> {{$data->due_at}}
                <br>
                <b>Account Name:</b> {{$data->payment_option['account_name']}}
                <br>
                <b>Account Number:</b> {{$data->payment_option['account_number']}}
            </td>
        </tr>
    </table>
    <br>
    <br>
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
    <br>
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


</body>
</html>
