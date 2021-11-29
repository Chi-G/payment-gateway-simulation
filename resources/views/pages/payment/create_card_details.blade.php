<html>
    <head>
        <title>Payment Method</title>
            <meta charset='utf-8'>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
            {{-- <link rel="stylesheet" type="text/css" href="{{ url('css/styles.css') }}" > --}}
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            {{-- <script type='text/javascript' src="{{ url('css/styles.js') }}"></script> --}}
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
                                            <i class="fas fa-credit-card mr-2"></i> Enter your card details 
                                        </a> 
                                    </li>                                    
                                </ul>
                            </div> <!-- End -->
                            <!-- Credit card form content -->
                            <div class="tab-content">
                                <!-- credit card info-->
                                <div id="credit-card" class="tab-pane fade show active pt-3">                                    
                                    <form action="{{ url('store-card') }}" onsubmit="event.preventDefault(); validation();" id="dataCard" name="dataCard" method="POST">                                    
                                        @csrf
                                        @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        <div class="form-group">
                                            <label for="card_name">
                                                <h6>Card Name</h6>
                                            </label>
                                            <input type="text" value="{{ $card_name }}" id="card_name" name="card_name" placeholder="Card Name" maxlength="16" readonly required class="form-control">                                                                                        
                                            <input type="hidden" value="{{ $email }}" name="email"  required>                                                                                        
                                            <input type="hidden" value="{{ $amount }}" name="amount"  required>                                                                                        
                                        </div>
                                        <div class="form-group">
                                            <label for="cardNumber">
                                                <h6>Card number</h6>
                                            </label>
                                                <div class="input-group" id="card-number-field"> 
                                                    <input type="tel" data-validation-type="custom" data-validation-error-msg="Please enter a valid card number" data-validation-error-msg-container="#cardnumber-error-dialog" id="card_number" name="card_number" maxlength="16" placeholder="**** **** **** ****" class="form-control" required>
                                                    <div id="cardnumber-error-dialog" class="field-error"></div>
                                                        <div class="input-group-append" id="credit_cards">
                                                            <span class="input-group-text text-muted">
                                                                <img src="{{ asset('images/visa.jpg') }}" class="fab fa-cc-visa mx-1" id="visa">
                                                                <img src="{{ asset('images/mastercard.jpg') }}" class="fab fa-cc-mastercard mx-1" id="mastercard">
                                                                <img src="{{ asset('images/amex.jpg') }}" class="fab fa-cc-amex mx-1" id="amex">
                                                            </span>
                                                        </div>
                                                </div>
                                        </div>                                        
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="form-group"> 
                                                    <label>
                                                        <span class="hidden-xs">
                                                            <h6>Expiration Date</h6>
                                                        </span>
                                                    </label>
                                                    <div class="input-group" id="expiration-date">
                                                        <select name="expiration_year" id="expiration_year">
                                                            <option value="year">Select year</option>
                                                            <option value="01">January</option>
                                                            <option value="02">February </option>
                                                            <option value="03">March</option>
                                                            <option value="04">April</option>
                                                            <option value="05">May</option>
                                                            <option value="06">June</option>
                                                            <option value="07">July</option>
                                                            <option value="08">August</option>
                                                            <option value="09">September</option>
                                                            <option value="10">October</option>
                                                            <option value="11">November</option>
                                                            <option value="12">December</option>
                                                        </select>&nbsp; &nbsp;
                                                        <select name="expiration_month" id="expiration_month">
                                                            <option value="month">Select Month</option>
                                                            <option value="16"> 2021</option>
                                                            <option value="17"> 2022</option>
                                                            <option value="18"> 2023</option>
                                                            <option value="19"> 2024</option>
                                                            <option value="20"> 2025</option>
                                                            <option value="21"> 2026</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group mb-4 CVV"> 
                                                    <label data-toggle="tooltip" for="cvv" title="Three digit CV code on the back of your card">
                                                        <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                                    </label> 
                                                    <input type="tel" maxlength="3" id="cvv"  name="cvv" placeholder="CVV" required class="form-control cc-cvc cvv" data-validation-type="numeric" data-validation-error-msg="Please enter a valid CVV number" data-validation-error-msg-container="#cardcvv-error-dialog">
                                                    <div id="cardcvv-error-dialog" class="field-error"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group mb-4">
                                                    <label data-toggle="tooltip" title="Your Card Pin">
                                                        <h6>PIN <i class="fa fa-question-circle d-inline"></i></h6>
                                                    </label> 
                                                        <input type="password" name="pin" value="" required class="form-control"> 
                                                </div>
                                            </div>
                                            <div class="card-footer"> 
                                                <button type="submit" onclick="data_check()"; id="pay_now" class="subscribe btn btn-warning btn-block shadow-sm"> Pay now </button>                                            
                                            </div>
                                            <div id="form-footer">
                                                <p style="text-align:center">By placing your order, you agree to our</p>
                                                <p style="text-align:center"><a  href="#" margin="0">privacy notice</a> & <a href="#">terms of use</a>.</p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ (asset('demo/js/jquery.payform.min.js')) }}" charset="utf-8"></script>
        <script>

            /*
                * Credit card validation
                */

                function cgDetectCard(input) {
                    var typeTest = 'u',
                        ltest1 = 16,
                        ltest2 = 16;
                        ltest3 = 'none';

                    if (/^4/.test(input)) {
                        typeTest = 'v';
                        ltest1 = 13;
                        ltest3 = $("#visa");
                    } else if (/^5[1-5]/.test(input)) {
                        typeTest = 'm';
                        ltest3 = $("#mastercard");
                    } else if (/^6(011|4[4-9]|5)/.test(input)) {
                        typeTest = 'd';
                        ltest3 = $("amex");
                    }

                    return [typeTest,ltest1,ltest2,ltest3];
                }

                function cgCheckLuhn(input) {
                    var sum = 0,
                        numdigits = input.length;
                    var parity = numdigits % 2;

                    for (var i=0; i < numdigits; i++) { var digit = parseInt(input.charAt(i)); if (i % 2 == parity) { digit *= 2; } if (digit > 9) {
                            digit -= 9;
                        }
                        sum += digit;
                    }

                    return (sum % 10) == 0;
                }

                /*
                * Credit card Luhn validation (real-time)
                */
                $(document).on('keyup', '.card_number', function() {
                    var val = this.value,
                        val = val.replace(/[^0-9]/g, ''),
                        detected = cgDetectCard(val),
                        errorClass = 'invalid',
                        luhnCheck = cgCheckLuhn(val),
                        valueCheck = (val.length == detected[1] || val.length == detected[2]);

                    if ($('body').hasClass('inline-ab')) {
                        cgToggleError($(this), 'invalid');
                    }

                    if (luhnCheck && valueCheck) {
                        errorClass = 'valid';
                        $('#cardType').val(detected[3]);
                    } else if (valueCheck || val.length > detected[2]) {
                        errorClass = 'invalid';
                    }

                    if ($('body').hasClass('inline-ab')) {
                        cgToggleError($(this), errorClass);
                        cgToggleError($(this), 'cc ' + detected[0] + ' ' + errorClass);
                    }
                    $(this).addClass('cc ' + detected[0] + ' ' + errorClass);
                });

                /*
                * Credit card digit formatting (real-time)
                */
                $(document).on('keypress change blur', '.card_number', function() {
                    $(this).val(function(index, value) {
                        return value.replace(/[^a-z0-9]+/gi, '').replace(/(.{4})/g, '$1 ').trim();
                    });
                });
                $(document).on('copy cut paste', '.card_number', function() {
                    setTimeout(function() {
                        $('.card_number').trigger('change');
                    });
                });


            //validate expiration year/month
            function data_check(){
                var str1=document.getElementById("expiration_year").value;
                var str2=document.getElementById("expiration_month").value;
                if(str1.length <=0){
                    alert("Please select card year ");
                }else if(str2.length <=0){
                    alert("please select card month");                    
                    }else {
                        document.forms['dataCard'].submit();
                    }
                }

                //validation for card number and cvv
                // function cgToggleError(element, status) {
                //     var errorMessage = $(element).data('validation-error-msg'),
                //         errorContainer = $(element).data('validation-error-msg-container');

                //     $(element).removeClass().addClass(status);

                //     if (status === 'valid') {
                //         $(errorContainer).html(errorMessage).hide();
                //     } else if (status === 'invalid') {
                //         $(errorContainer).html(errorMessage).show();
                //     }
                // }
                

                /*
                * Credit card expiry date formatting (real-time)
                */          
               
                /*
                * Credit card CVV length check
                */

                $(document).on('blur', '.cvv', function(e) {
                    if ($('#cvv').val().length < 3) {
                        cgToggleError($(this), 'invalid');
                    }
                });

                /*
                * Credit card CVV disallow letters (real-time)
                */
                $(document).on('keyup', '.cvv', function(event) {
                    event.target.value = event.target.value.replace(/[^\d\/]|^[\/]*$/g, '');
                });

        </script>
    </body>
</html>