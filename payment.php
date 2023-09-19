<?php
$brick_id= $_POST['brick_id'];

echo "<h1>".$brick_id."</h1>";


?>

<html>
<head>
    <title>Jai Shree Radhe</title>
<link rel="stylesheet" href="pament_style.css">
</head>
<body>
<div class="container">
<div class="card">
<h1 class="card-title">Payment Form</h1>
<form action="action.php" method="post">
<div class="form-group">
<label class="form-label" for="name">First Name</label>
<input class="form-input" type="text" id="name" name="brick-name" placeholder="Enter your first name" required>
</div>
<div class="form-group">
<label class="form-label" for="name">Last Name</label>
<input class="form-input" type="text" id="name" name="payee-name" placeholder="Enter your last name" required>
</div>
<div class="form-group">
<label class="form-label" for="email">Email</label>
<input class="form-input" type="email" id="email" name="payee-email" placeholder="Enter your email" required>
</div>
<div class="form-group">
<label class="form-label" for="phone">Phone / Whatsapp</label>
<input class="form-input" type="text" id="phone" name="payee-phone" placeholder="Enter your Phone / Whatsapp No." required>
</div>
<div class="form-group add">
<label class="form-label" for="addr">Address</label>
<textarea class="form-input" id="addr" name="payee-addr" placeholder="Enter your email" required cols="30" rows="10"></textarea>
</div>

<button class="form-button" name="payment_id" value="<?php echo $brick_id ?>" type="submit">Pay Now</button>
</form>
</div>
</div>
</body>
</html>

