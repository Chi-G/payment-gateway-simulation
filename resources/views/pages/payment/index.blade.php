<html lang="en">
    <html>
        <head>            
            <title>Payment Method</title>
            <meta charset='utf-8'>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <title>Payment - Gate</title>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
            <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}" >
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Chijid1 Payment Gateway</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <form class="d-flex">
                <button class="btn btn-outline-success" type="submit">Home</button>              
            </div>
          </nav>

        <div class="container">      
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-4">

                            @if (session('status'))
                                <div class="alert alert-success">{{ session('status') }}</div>
                            @endif

                            <div class="card">
                                <div class="card-header">
                                    <button type="button" class="btn-close float-end" disabled aria-label="Close"></button><br>                   
                                    <h4>Order Payment</h4>
                                    <h6 class="card-subtitle mb-2 text-muted">Make payment with your credit or debit card</h6><hr>
                                    <div class="accordion-body">
                                        <h5> To complete your payment process, please select the payment method below and follow
                                        the prompts accordingly </h5>
                                      </div>                                     
                                    <a href="{{ url('add-personal-details') }}" class="btn btn-warning float-end">Make Payment</a>
                                </div>                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </body>
</html>