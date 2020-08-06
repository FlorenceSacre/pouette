<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <form action="/subscription" method="post" id="subscription">
            {{csrf_field()}}
            <input type="hidden" name="stripeToken" id="stripeToken" />
            <div>
                <label for="5">
                    <span>5€/mois</span>
                </label>
                <input type="radio" name="amount" value="5" id="5" required {{old('amount') === '5' ? 'checked' : ''}} />
                <label for="12">
                    <span>12€/mois</span>
                </label>
                <input type="radio" name="amount" value="12" id="12" required {{old('amount') === '12' ? 'checked' : ''}} />
                <div class="form-row">
                    <label for="card-element">
                        Carte bancaire
                    </label>
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                        <!-- Used to display Element errors. -->
                    <div id="card-errors" role="alert"></div>
                    <div>
                        <div>
                            <label for="name">Nom</label>
                            <input type="text" name="name" value="{{old('name')}}" placeholder="Nom prénom">
                        </div>
                        <div>
                            <label for="street">Adresse de facturation</label>
                            <input type="text" name="street" id="street" value="{{old('street')}}" placeholder="42 rue de la Comté" />
                        </div>
                        <div>
                            <label for="postcode">Code postal</label>
                            <input type="text" name="postcode" id="postcode" value="{{old('postcode')}}" placeholder="5000" />
                        </div>
                        <div>
                            <label for="city">Ville</label>
                            <input type="text" name="city" id="city" value="{{old('city')}}" placeholder="Namur" />
                        </div>
                        <div>
                            <label for="country">Pays</label>
                            <input type="text" name="country" id="country" value="{{old('country')}}" placeholder="Belgique" />
                        </div>

                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{old('email')}}" placeholder="exemple@exemple.org">
                        </div>

                        <div>
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" value="{{old('password')}}">
                        </div>
                        <div>
                            {{--<p>Annulable à tout moment en un clic</p>--}}
                        </div>
                    </div>
                </div>
            </div>
            <button>S'abonner</button>
        </form>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{config('services.stripe.key')}}');
        var elements = stripe.elements({locale: 'fr'});

        var subscription = {
            form: document.getElementById('subscription'),
            amountShowed: document.getElementById('amount'),
            stripeErrors: document.getElementById('card-errors'),
            stripeToken: document.getElementById('stripeToken')
        };

        var style = {
            base: {
                fontSize: '16px',
                color: '#32325d',
            },
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});


        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        card.addEventListener('change',function (event) {
           if(event.error) {
               subscription.stripeErrors.textContent = event.error.message;
           } else {
               subscription.stripeErrors.textContent = '';
           }
        });

        subscription.form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    subscription.stripeErrors.textContent = result.error.message;
                } else {
                    stripeTokenHandler(result.token);
                }
            });
        });

        function stripeTokenHandler(token) {
            subscription.stripeToken.value = token.id;
            subscription.form.submit();
        }

        subscription.form.querySelectorAll('input[name="amount"]').forEach(function (amountChoice) {
            amountChoice.addEventListener('change', function() {
                subscription.amountShowed.textContent = amountChoice.value + '€/mois';
            });
            if (amountChoice.checked) {
                amountChoice.dispatchEvent(new Event('change'));
            }
        });
    </script>
</body>
</html>