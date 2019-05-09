/*function hidden() {

    document.getElementById('payment_method').style.visibility = "hidden";
}*/


function payment() {
    let pays = "";
    let pay_method = document.getElementsByName('pay');
    let length = pay_method.length;
    for (let index = 0; index < length; index++)
        if (pay_method[index].checked) {
            switch (pay_method[index].value) {
                case 'cash':
                    document.getElementById('payment_method').style.visibility = "visible";
                    pays = "В брой";
                    break;
                case 'bank_transfer':
                    document.getElementById('payment_method').style.visibility = "visible";
                    pays = "Банков превод";
                    break;
                case 'credit_card':
                    document.getElementById('payment_method').style.visibility = "visible";
                    pays = "Кредитна/дебитна карта";
                    break;
                case 'pay_pal':
                    document.getElementById('payment_method').style.visibility = "visible";
                    pays = "Чрез платежната система на PayPal";
                    break;
                case 'easy_pay':
                    document.getElementById('payment_method').style.visibility = "visible";
                    pays = "Чрез платежната система на EasyPay";
                    break;
                default:
                    pays = "Друга платежна система";
                    break;
            }
            document.getElementById('payment_method').innerText = pays;
            break;
        }
}
