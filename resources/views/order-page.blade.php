@extends('layouts.master')

@section('title')
    Užsakymas
@endsection

@section('content')


    <script src="https://js.stripe.com/v3/"></script>

    <style>
        .spacer {
            margin-bottom: 24px;
        }

        /**
         * The CSS shown here will not be introduced in the Quickstart guide, but shows
         * how you can use CSS to style your Element's container.
         */
        .StripeElement {
            background-color: white;
            padding: 10px 12px;
            border-radius: 4px;
            border: 1px solid #ccd0d2;
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }

        #card-errors {
            color: #fa755a;
        }
    </style>

    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <h1>Užsakymo duomenys</h1>
            <div class="spacer"></div>

            @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{route('showOrderSummary')}}" method="POST" id="payment-form">
                {{ csrf_field() }}
                {{--<div class="form-group">--}}
                    {{--<label for="email">El. paštas</label>--}}
                    {{--<input type="email" class="form-control" id="email">--}}
                {{--</div>--}}

                <div class="form-group">
                    <label for="billing_name">Vardas</label>
                    <input type="text" class="form-control" id="billing_name" name="billing_name">
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">Adresas</label>
                            <input type="text" class="form-control" id="address" name="address">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="city">Miestas</label>
                            <input type="text" class="form-control" id="city" name="city">
                        </div>
                    </div>


                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="postalcode">Pašto Kodas</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" maxlength="6">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="country">Valstybė</label>
                            <input type="text" class="form-control" id="country" name="country">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone">Telefono Nr.</label>
                            <input type="text" class="form-control" id="phone" name="phone" maxlength="12">
                        </div>
                    </div>
                </div>
                    <div class="form-group">
                        <label for="card_number">Kortelės numeris</label>
                        <input type="text" class="form-control" id="card_number" name="card_number"maxlength="20">
                    </div>

                <div class="row">

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="expiry_date">Korteles galiojimo data</label>
                        <input type="text" class="form-control" id="expiry_date" name="expiry_date" maxlength="4">
                    </div>
                </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cvv">CVV</label>
                            <input type="text" class="form-control" id="cvv" name="cvv" maxlength="3">
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="note">Papildoma informacija</label>
                    <input type="text" class="form-control" id="note" name="note">
                </div>


                {{--<div class="form-group">--}}
                    {{--<label for="card-element">Kreditinės kortelės duomenys</label>--}}
                    {{--<div id="card-element">--}}
                        {{--<!-- a Stripe Element will be inserted here. -->--}}
                    {{--</div>--}}

                    {{--<!-- Used to display form errors -->--}}
                    {{--<div id="card-errors" role="alert"></div>--}}
                {{--</div>--}}

                <div class="spacer"></div>

                <button type="submit" class="btn btn-success">Pateikti mokėjimą</button>
            </form>
        </div>
    </div>

    {{--protected $fillable=['','','','','','','',"","","delivery_date","order_date","confirmation_number","courier_courier_id","order_status_order_status_id"];--}}



    {{--//STRIPE SCRIPT--}}
    <script>
        (function(){
            // Create a Stripe client
            var stripe = Stripe('{{ config('services.stripe.key') }}');

            // Create an instance of Elements
            var elements = stripe.elements();

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    lineHeight: '18px',
                    fontFamily: '"Raleway", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create an instance of the card Element
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });

            // Add an instance of the card Element into the `card-element` <div>
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });
//
            // Handle form submission
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                var options = {
                    name: document.getElementById('name_on_card').value,
                }

                stripe.createToken(card, options).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the token to your server
                        stripeTokenHandler(result.token);
                    }
                });
            });

            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment-form');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        })();
    </script>




@endsection

