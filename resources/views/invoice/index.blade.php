<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/logo/logo2.png')  }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
</head>
<body>
<!-- Content Wrapper START -->
<div class="main-content" style="margin: 50px">

    <div class="container">
        <div class="card col-md-8 offset-md-2">
            <div class="card-body">
                <div id="invoice" class="p-h-30">
                    <div class="m-t-15 lh-2">
                        <div class="inline-block">
                            <img class="img-fluid" src="{{ asset('img/logo/logo.png') }}" alt="">
                            <address class="p-l-10">
                                <span class="font-weight-semibold text-dark">Eduguide.</span><br>
                                <span>9498 Harvard Street</span><br>
                                <span>Fairfield, Chicago Town 06824</span><br>
                                <abbr class="text-dark" title="Phone">Phone:</abbr>
                                <span>(123) 456-7890</span>
                            </address>
                        </div>
                        <div class="float-right">
                            <h2>INVOICE</h2>
                        </div>
                    </div>
                    <div class="row m-t-20 lh-2">
                        <div class="col-sm-8">
                            <h3 class="p-l-10 m-t-10">Invoice To:</h3>
                            <address class="p-l-10 m-t-10">
                                <span class="font-weight-semibold text-dark">{{ $application->user->name }}</span><br>
                                <span>{{ $application->user->email }} </span><br>
                                <span>{{ $application->user->address }}</span>
                            </address>
                        </div>
                        <div class="col-sm-4">
                            <div class="m-t-80">
                                <div class="text-dark text-uppercase d-inline-block">
                                    <span class="font-weight-semibold text-dark">Invoice No :</span></div>
                                <div class="float-right">{{ $application->id }}</div>
                            </div>
                            <div class="text-dark text-uppercase d-inline-block">
                                <span class="font-weight-semibold text-dark">Date :</span>
                            </div>
                            <div class="float-right">{{ \Carbon\Carbon::now()->format('d/m/Y, h:m:s a') }}</div>
                        </div>
                    </div>
                    <div class="m-t-20">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Description</th>
                                    <th>Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Application fee for {{ $application->type->name }} programme year {{ \Carbon\Carbon::parse($application->created_at)->format('Y') }} </td>
                                    <td>N{{ number_format($application->type->application_fee, 2) }}</td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>Merchant fee for {{ $application->type->name }} programme year {{ \Carbon\Carbon::parse($application->created_at)->format('Y') }} </td>
                                    <td>N{{ number_format($application->type->merchant_charge, 2) }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="row m-t-30 lh-1-8">
                            <div class="col-sm-12">
                                <div class="float-right text-right">
                                    <p>Sub - Total amount: N{{ number_format($application->type->merchant_charge + $application->type->application_fee , 2) }}</p>
                                    <p>Discount (0%) : N 0.00 </p>
                                    <hr>
                                    <h3><span class="font-weight-semibold text-dark">Total :</span> 2,557.00</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-30 lh-2">
                            <div class="col-sm-12">
                                <div class="border-bottom p-v-20">
                                    <p class="text-opacity"><small>Note: Payment are not refundable, check details for correction and print this invoice for record purpose.</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="row m-v-20">
                            <div class="col-sm-6">
                                <img class="img-fluid text-opacity m-t-5" width="100" src="{{ asset('img/logo/logo.png') }}" alt="">
                            </div>
                            <div class="col-sm-6 text-right">
                                <small><span class="font-weight-semibold text-dark">Phone:</span> (123) 456-7890</small>
                                <br>
                                <small>support@themenate.com</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 offset-md-2">
            <div class="row m-v-20">
                <div class="col-sm-6">
                    <button class="btn btn-primary btn-md" onclick="print()">Print</button>
                </div>
                <div class="col-sm-6 text-right">
                    <a class="btn btn-danger btn-md" href="{{ route('home') }}">Close</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Content Wrapper END -->


</div>
<!-- Page Container END -->
<!-- Core Vendors JS -->
<script src="{{ asset('js/vendors.min.js') }}"></script>

<!-- page js -->

<!-- Core JS -->
<script src="{{ asset('js/app.min.js') }}"></script>
</body>
</html>
