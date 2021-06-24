<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    .page-break {
        page-break-after: always;
    }
    .bg-grey {
        background: #F3F3F3;
    }
    .text-right {
        text-align: right;
    }
    /* .w-full {
        width: 100%;
    }
    .small-width {
        width: 15%;
    } */
    .invoice {
        background: white;
        border: 1px solid #CCC;
        font-size: 14px;
        padding: 48px;
        margin: 20px 0;
    }
    </style>
</head>
<body class="bg-grey">

<div class=" ">
<div class="row">
    <div class="col-lg-12 ">
        <div class="invoice">
        <div class="row">
            <div class="col-sm-4">
            <h4>From:</h4>
            <address>
                <strong>{{$cdetails[0]->company}}</strong><br>
                A: {{$cdetails[0]->address}} <br>
                T: {{$cdetails[0]->telno}} <br>
                P: {{$cdetails[0]->phonno}} <br>
                E: {{$cdetails[0]->email}} <br>
                W: {{$cdetails[0]->website}}
            </address>
            </div>


            <div class="col-sm-4 text-right">
            <img class="float-right" src="https://testruntourismoph.wanderlustmusicfestival.com/public/image/logo/logoab.png" alt="logo">
            </div>
        </div>

        <div class="row">
            <div class="col-sm-7">
            <address>
                <strong>To:</strong>
                <span>{{$extra['user_fname']}} {{$extra['user_lname']}}</span><br>
                <span>{{$extra['user_email']}}</span>
            </address>
            </div>

            <div class="col-sm-5 text-right">
            <table class="w-full">
                <tbody>
                <tr>
                    <th>Invoice Number:</th>
                    <td>{{$stausPayment['ref_no']}}</td>
                </tr>
                <tr>
                    <th> Invoice Date: </th>
                    <td>{{ date("F j, Y, g:i a",strtotime($extra['pm_created_at']))}}</td>
                </tr>
                </tbody>
            </table>

            <div style="margin-bottom: 0px">&nbsp;</div>

            <table class="w-full">
                <tbody>
                <tr class="well" style="padding: 5px">
                    <th style="padding: 5px"><div> Payment Thru ({{$stausPayment['payment_method']}}) </div></th>
                    <td style="padding: 5px"><strong> $499 </strong></td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table invoice-table">
            <thead style="background: #F5F5F5;">
                <tr>
                <th>Item List</th>
                <th></th>
                <th class="text-right">Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                    <strong>{{$stausPayment['description']}}</strong>
                </td>
                <td></td>
                <td class="text-right">$600</td>
                </tr>

                <tr>
                <td>
                    <strong>Service</strong>
                    <p><strong>Book Date</strong> {{ date("F j, Y, g:i a",$extra['pm_book_date'])}} </p>
                    <p>Nights no.{{$detailsOfBooking['nonights']}}</p>
                    <p>Guest no.{{$detailsOfBooking['noguest']}}</p>
                    <p>{{$detailsOfBooking['desc']}}</p>
                    <p>{{$detailsOfBooking['expect']}}</p>
                </td>
                <td></td>
                <td class="text-right">$600</td>
                </tr>

                </tbody>
            </table>
            </div><!-- /table-responsive -->

            <table class="table invoice-total">
            <tbody>
                <tr>
                <td class="text-right"><strong>Total:</strong></td>
                <td class="text-right small-width">$600</td>
                </tr>
            </tbody>
            </table>

            <hr>

            <div class="row">
            <div class="col-lg-8">
                <div class="invbody-terms">
                Thank you for your business. <br>
                <br>
                <h4>Payment Terms and Methods</h4>
                <p>{{$detailsOfBooking['cancel']}}</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>

</body>
</html>