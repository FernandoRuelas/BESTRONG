<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://www.paypal.com/sdk/js?client-id=AZqniydSXZFFaON8cH1fhLG1ACVzwTEanDAc4V96lrZXHHEerNxdGbKPcRzUOfSM31Dcfwz4lK9IMN3m&currency=MXN"></script>
</head>
<body>

<div class="m-0 container-center">
    <div class=" justify-content-center">

    <div id="paypal-button-container"></div>
    <script>
        paypal.Buttons({
            style:{
                color: 'blue',
                shape: 'pill',
                label: 'pay'
            },
            createOrder: function (data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: 800 // Can also reference a variable or function
                         }
                    }]
                });
            },
            onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`el pago se realizo correctamente`);
          
            window.location.href="index.php?accion=pagoControlador"
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });     
        
            },
            onCancel: function(data){
                alert("Pago cancelado");
                console.log(data);
            }
        }).render ('#paypal-button-container');
    </script>
    </div>
</div>
    
</body>

</html>