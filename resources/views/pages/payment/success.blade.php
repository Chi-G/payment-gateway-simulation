<html>
    <head>
        <title>Payment Method</title>
            <meta charset='utf-8'>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
            <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}" >
            <link rel="stylesheet" type="text/css" href="{{ url('css/success.css') }}" >
            <link rel="stylesheet" type="text/css" href="{{ url('css/style_print.css') }}" >
            <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
            <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
            <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
            <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
            <script src="https://kit.fontawesome.com/526aedc4f4.js" crossorigin="anonymous"></script>
            <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
            <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
            <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    </head>

    <body>
            <div class="container">
                <div class="row">
                <div class="col-md-6 mx-auto mt-5">
                    <div class="payment">
                        <div class="payment_header">
                            <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <div class="content">
                            <h1>Payment Success !</h1>
                            <div class="ticket">
                                <p class="centered">OLAWALE'S RECEIPT
                                    <br>Olawale Streets, Off my plaza</p>
                                <table class="center" margin-left:auto; margin-right:auto;>
                                    <thead>
                                        <tr>
                                            <th class="quantity">Q.</th>
                                            <th class="quantity">Name</th>
                                            <th class="quantity">Email</th>
                                            <th class="price">#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="quantity">1.00</td>
                                            <td class="quantity">{{ $card_name }}</td>
                                            <td class="quantity">{{ $email }}</td>
                                            <td class="price">{{ $amount }}</td>      
                                        </tr>                                                                             
                                        
                                    </tbody>
                                </table>
                                <p class="centered">Thanks {{ $card_name }} for your purchase!
                                    <br>your payment of {{ $amount }} was successful</p>
                                    <br>olawale.bizz.plaza</p>
                            </div>
                            <button id="btnPrint" class="hidden-print">Print</button>                            
                            {{-- <p>Congratulations, {{ $card_name }} . your payment of {{ $amount }} was successful. </p> --}}
                            <a href="{{ route('paymentG') }}">Go to Home</a>
                        </div>             
                    </div>                    
                </div>
            </div>
        </div>
        <script src="script_print.js"></script>
        <script>
            const $btnPrint = document.querySelector("#btnPrint");
                $btnPrint.addEventListener("click", () => {
                    window.print();
                });
        </script>
    </body>
</html>