<link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css"/>
@extends('style.style')

@section('content')
    <form action="/subscription" method="post" id="subscription" class="form-subscription">
        {{csrf_field()}}
        <input type="hidden" name="stripeToken" id="stripeToken" />
        <div id="subscription">
            <fieldset>
                <legend>Choisissez votre abonnement</legend>
            <label for="5" id="amount5">
                <span>5€/mois</span>
            </label>
            <input type="radio" name="amount" value="5" id="5" required {{old('amount') === '5' ? 'checked' : ''}} />
            <label for="12" id="amount12">
                <span>12€/mois (plus de vidéos et de meilleure qualité)</span>
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
                        <label for="name" id="name">Nom</label>
                        <input type="text" name="name" value="{{old('name')}}" placeholder="Nom prénom" required />
                    </div>
                    <div>
                        <label for="street" id="street">Adresse de facturation</label>
                        <input type="text" name="street" value="{{old('street')}}" placeholder="42 rue de la Comté" required />
                    </div>
                    <div>
                        <label for="postcode" id="postcode">Code postal</label>
                        <input type="number" name="postcode" value="{{old('postcode')}}" placeholder="5000" required pattern="^[a-zA-Z]" />
                    </div>
                    <div>
                        <label for="city" id="city">Ville</label>
                        <input type="text" name="city" value="{{old('city')}}" placeholder="Namur" required />
                    </div>
                    <div>
                        <label for="country" id="country">Pays</label>
                        <select name="country" required>
                            <option value="">--Choisi un pays--</option>
                            <option value="1">Allemagne</option>
                            <option value="2">Autriche</option>
                            <option value="3">Belgique</option>
                            <option value="4">Croatie</option>
                            <option value="5">Espagne</option>
                            <option value="6">Finlande</option>
                            <option value="7">Grèce</option>
                            <option value="8">Irlande</option>
                            <option value="9">Italie</option>
                            <option value="10">Portugal</option>
                        </select>
                    </div>
                    <div>
                        <label for="email" id="email">Email</label>
                        <input type="email" name="email" value="{{old('email')}}" placeholder="exemple@exemple.org" required />
                    </div>
                    <div>
                        <label for="password" id="password">Mot de passe</label>
                        <input type="password" name="password" value="{{old('password')}}" placeholder="" required />
                    </div>
                    <div>
                        <p id="unsubscription">Annulable à tout moment en un clic</p>
                    </div>
                </div>
            </div>
            </fieldset>
            <input type="submit" value="S'abonner" />
        </div>
    </form>
    <a href="<?php echo $_SERVER["HTTP_REFERER"]; ?>"><button type="button" class="previous prev-sub">Retour à la page précédente</button></a>


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
                '::placeholder': {
                    color: '#FFF',
                },
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
@endsection