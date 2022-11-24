/* 基本設定*/
const stripe = Stripe("pk_test_51L7afBAkBFuJeEP5ll7bebbFS8etadBjgz1tWH8VEl1e6LhsUmvOScIPuYf9fI73hE3equWFMZOvwNfc4LdoJx7L00jhnYhL69");
const elements = stripe.elements();

/* Stripe Elementsを使ったFormの各パーツをどんなデザインにしたいかを定義 */
const elementStyles = {
    base: {
        fontSize: '16px',
        fontFamily:'Noto Sans JP, Helvetica, sans-serif, hiraginosans',
        color: "#32325d",
        border: "solid 1px ccc",
        '::placeholder': {
            color: '#bbbbbb',
          }
    }


};

const elementclasses = {

};

/* フォームでdivタグになっている部分をStripe Elementsを使ってフォームに変換 */
const cardName = elements.create('cardName',{style:style});
cardName.mount('#cardName');
const cardNumber = elements.create('cardNumber', {style:style});
cardNumber.mount('#cardNumber');
const cardCvc = elements.create('cardCvc', {style:style});
cardCvc.mount('#securityCode');
const cardExpiry = elements.create('cardExpiry', {style:style});
cardExpiry.mount('#expiration');