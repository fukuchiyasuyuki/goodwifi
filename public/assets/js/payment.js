/* 基本設定*/
const stripe = stripe("pk_test_51L7afBAkBFuJeEP5ll7bebbFS8etadBjgz1tWH8VEl1e6LhsUmvOScIPuYf9fI73hE3equWFMZOvwNfc4LdoJx7L00jhnYhL69");
const elements = stripe.elements();

/* Stripe Elementsを使ったFormの各パーツをどんなデザインにしたいかを定義 */


/* フォームでdivタグになっている部分をStripe Elementsを使ってフォームに変換 */
const cardNumber = elements.create('cardNumber');
cardNumber.mount('#cardNumber');
const cardExpiry = elements.create('cardExpiry');
cardExpiry.mount('#expiration');
const cardCvc = elements.create('cardCvc');
cardCvc.mount('#securityCode');

