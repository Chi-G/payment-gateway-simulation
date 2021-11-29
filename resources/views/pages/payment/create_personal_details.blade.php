<html>
    <head>
        <title>Payment Method</title>
            <meta charset='utf-8'>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
            <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}" >
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type='text/javascript' src="{{ url('css/styles.js') }}"></script>
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
        <div class="container py-5">
            <!-- For demo purpose -->
            <div class="row mb-4">
                <div class="col-lg-8 mx-auto text-center">
                    <h1 class="display-6">Pay Me</h1>
                </div>
            </div> <!-- End -->
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card ">
                        <div class="card-header">
                            <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                                <!-- Credit card form tabs -->
                                <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                    <li class="nav-item"> 
                                        <a data-toggle="pill" href="#credit-card" class="nav-link active "> 
                                            <i class="fas fa-credit-card mr-2"></i>Enter your personal details
                                        </a> 
                                    </li>                                    
                                </ul>
                            </div> <!-- End -->
                            <!-- Credit card form content -->
                            <div class="tab-content">
                                <!-- credit card info-->
                                <div id="credit-card" class="tab-pane fade show active pt-3">
                                    <form action="{{ url('store-personal') }}" onsubmit="return validateForm()" name="pdata" method="POST">
                                        <fieldset>
                                            @csrf                                            
                                            <div class="form-group">
                                                <label for="username">
                                                    <h6>Card Name</h6>
                                                </label>
                                                @error('card_name')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <input type="text" name="card_name" id="card_name" placeholder="Card name" required class="form-control @error('card_name') is-invalid @enderror"> 
                                            </div>                                          
                                            <div class="form-group">
                                                <label for="email">
                                                    <h6>Email</h6>
                                                </label>                                                
                                                <input type="email" aria-required="true" value="" name="email" placeholder="Email" id="email" required class="form-control"> 
                                            </div>
                                            <div class="form-group">
                                                <label for="amount">
                                                    <h6>Amount</h6>
                                            </label> 
                                                <input type="text" onfocusout="checkAmount();" id="amount" name="amount" placeholder="Amount" required="required" class="form-control "> 
                                            </div>
                                        </fieldset>
                                        <fieldset>
                                            <div class="card-footer"> 
                                                <button type="submit" onclick="ValidateEmail(document.pdata.email)" class="subscribe btn btn-warning btn-block shadow-sm"> Continue </button>                                            
                                            </div>      
                                        </fieldset>                                  
                                    </form>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>

            <script>
                //name validation
                function validateForm() {
                    let x = document.forms["pdata"]["card_name"].value;
                    if (x == "" || x == null) {
                        alert("Name must be filled out");
                        return false;
                        }else if(x.value < 6){
                            alert('name must be atleast 6 characters');
                        return false;
                        }
                    }

                    //email validation
                    function ValidateEmail(inputText){
                        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                        if(inputText.value.match(mailformat))
                            {                            
                            document.pdata.email.focus();
                        return true;
                        }
                        else
                        {
                            alert("You have entered an invalid email address!");
                                document.pdata.email.focus();
                                return false;
                            }
                        }

                        //amount validation
                        function checkAmount() {    
                            var myField = document.getElementById("amount")
                                var reg = /^\$?(([1-9][0-9]{0,2}(,[0-9]{3})*)|[0-9]+)?(.[0-9]{1,2})?$/;
                                if (reg.test(myField.value))
                                {
                                    alert("Good to go...!");
                                }else{        
                                    alert("Please Enter a Valid Amount!");
                                } 
                        } 
            </script>
        </body>
</html>