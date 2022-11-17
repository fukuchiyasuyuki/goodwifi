var stripe = stripe('pk_test_51L7afBAkBFuJeEP5ll7bebbFS8etadBjgz1tWH8VEl1e6LhsUmvOScIPuYf9fI73hE3equWFMZOvwNfc4LdoJx7L00jhnYhL69');
var elements = stripe.elements();

var elementStyles = {
    base: {
        fontSize: '14px',
    },
    invalid: {
        color: '#eb1c26',
    }
}
 
var elementClasses = {
    focus: 'is-focused',
    empty: 'is-empty',
    invalid: 'is-invalid'
}
 
var cardNumber = elements.create('cardNumber', {
    style: elementStyles,
    classes: elementClasses,
});

var cardNumber = elements.create('cardNumber');
cardNumber.mount('#card_number');

cardNumber.addEventListener('change', function(event) {
    var displayError = document.getElementById('card_errors');
    if (event.error) {
        displayError.textContent = event.error.message;
    } else {
        displayError.textContent = '';
    }
});
form.addEventListener('submit', function(event) {
    event.preventDefault();
    var errorElement = document.getElementById('card_errors');
    if (event.error) {
        errorElement.textContent = event.error.message;
    } else {
        errorElement.textContent = '';
    }
 
    stripe.createToken(cardNumber).then(function(result) {
        if (result.error) {
            errorElement.textContent = result.error.message;
        } else {
            stripeSubmit(result.token);
        }
    });
});
 
function stripeSubmit(token) {
    var form = document.getElementById('form1');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);
        form.submit();
}