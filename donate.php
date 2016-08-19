<?
  require_once("stripe/init.php");

  // Set API Key
  \Stripe\Stripe::setApiKey("sk_test_8ZKUjCYtEmkOPAB2Gm1jMdMP");

  // This is sent from Stripe.js
  $token = $_POST["stripeToken"];

  try {
    $charge = \Stripe\Charge::create(array(
      'amount' => 500,
      'currency' => 'usd',
      'source' => $token,
      'description' => 'Example charge'
    ));

    // $_SESSION['message'] = "Thank you for your patronage!";

    // Basic relay of information
    echo("<p>Thank you for your patronage!</p>");
  } catch(\Stripe\Error\Card $e) {
    // $_SESSION['message'] = "We were unable to process your card.";

    echo("<p>Looks like there was an error processing your card.</p>");
  }
?>
