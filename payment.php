<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Gateway</title>
<link rel="stylesheet" href="payment.css">
</head>
<body>
    <div class="container">
        <h2>Payment Form</h2>
        <form action="pay_process.php" method="POST">
            <div class="form-group">
                <label>Card Number</label>
                <input type="number" id="card_number" name="cardnumber" placeholder="Enter your card number" required="">
            </div>
            <div class="form-group">
                <label>Expiry Date</label>
                <input type="number" id="expiry_date" name="expirydate" placeholder="MM/YY" required="">
            </div>
            <div class="form-group">
                <label >CVV</label>
                <input type="number" id="cvv" name="cvv" placeholder="Enter CVV" required="">
            </div>
            <input type="submit" value="Pay Now">
        </form>
    </div>
</body>
</html>
