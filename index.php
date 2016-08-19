<html>
  <head>

    <link rel="stylesheet" src="/assets/stylesheets/main.css" />
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript">
      Stripe.setPublishableKey("pk_test_Auyu4UOFgonj3xwxAQP1y8ps");
    </script>
    <script src="/assets/javascripts/main.js"></script>
  </head>
  <body>

    <h3>Donate to us!</h3>
    <form action="donate.php" method="POST" id="payment-form">
      <span class="payment-errors"></span>

      <div class="form-row">
        <label>
          <span>Card Number</span>
          <input type="text" size="20" data-stripe="number">
        </label>
      </div>

      <div class="form-row">
        <label>
          <span>Expiration (MM/YY)</span>
          <input type="text" size="2" data-stripe="exp_month">
        </label>
        <span> / </span>
        <input type="text" size="2" data-stripe="exp_year">
      </div>

      <div class="form-row">
        <label>
          <span>CVC</span>
          <input type="text" size="4" data-stripe="cvc">
        </label>
      </div>


      <input type="submit" class="submit" value="Submit Payment">
    </form>
    
  </body>
</html>
