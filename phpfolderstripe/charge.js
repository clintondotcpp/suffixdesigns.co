//Create a Stripe client
//var stripe = Stripe('pk_test_XWp6rvbq8Hz6S32KwNRK7Xan');//TODO THIS SHOULD BE THE PUBLISHABLE KEY: TEST
var stripe = Stripe('pk_test_51LMBLYGvSc684TudNOiMlf1ck2zC6By2iTt0WcUC5WcKNz2nt5XNWK2giMhmOJZEox2IPrvmDzfUDBqCntWLKv5D00OXVVfW5G');
//Create  an instance of Elements
var elements = stripe.elements();

//Custom styling can be passed to options when creating an Element
//(Note that this demo uses a wider set of styles than the guide below,)

var style = {
    base: {
     color: '#32325d',
     lineHeight: '18px',
     fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
     fontSmoothing: 'antialiased',
     fontSize: '16px',
     '::placeholder':{
        color: '#aab7c4'
     }

    },
    invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
    }
};

// Style button with BS
document.querySelector('#payment-form button').classList= 'btn btn-primary btn-block mt-4';

//Create an instance of the card element
var card = elements.create('card', {style: style});

//Add an instance of the card Element into the 'card-element' <div>
card.mount('#card-element')

//Handle real-time validation errors from the card Element
card.addEventLister('change', function(event) {
    var displayError = document.getElementById('card-errors');
    if(event.error){
        displayError.textContent = event.error.message;
    }else{
        displayError.textContent = '';
    }
});

//Handle form submission
var form = document.getElementById('payment-form');
form.addEventLister('submit', function(event){
    event.preventDefault();
    stripe.createToken(card).then(function(result){
        if(result.error){
            //inform the user if there was an error
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
        }else{
            //send the tokent to your server
            stripeTokenHandler(result.token);
        }
    });
});

function stripeTokenHandler(token){
    //insert the token ID into the fomr so it gets submitted to the server
    var form = document.getElementById('payment-form');
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);

    //submit the form
    form.submit();
}