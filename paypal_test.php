<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paypal Test Page</title>
<style type="text/css">
.Text {
	font-family: "Courier New", Courier, monospace;
	font-size: 14px;
	font-weight: normal;
	text-decoration: none;
	text-align: right;
}
</style>
</head>

<body>
<?php
// SEE THIS LINK: https://github.com/paypal/rest-api-sample-app-php
$this_page = "http://212.1.213.58/paypal_test/paypal_test.php";
$success = "http://212.1.213.58/paypal_test/success.php";
$cancelled = "http://212.1.213.58/paypal_test/cancel.php";
$paypal_page = "https://www.sandbox.paypal.com/cgi-bin/webscr";
$payment = 0;
$fees = 0;
$seller = "dhartenbach-facilitator@programnutproductions.com";
$amount = 0;

if(isset($_POST["btnCalculate"]))
{
	$payment = intval(trim($_POST["txtPayment"]));
	$seller = $_POST["txtSellerID"];
	$fees = round(0.029 * $payment + 0.30, 2);
	$amount = round(($payment + 0.30) / 0.971, 2);
}

	echo "This is the test payment portal for the EDMC Coffee Club.  No transactions on this page are actually made in a live environment.  In order to test payments on this page, you will need a sandbox account through PayPal.  If you do not know your credentials, please see Dan Hartenbach.
	
	<form id='form1' name='form1' method='post' action='$this_page'>
  <p>Set up the payment here:</p>
  <table width='66%' border='0'>
    <tr>
      <td width='61%'><p class='Text'>Current payment required:</p></td>
      <td width='39%'>        <span class='Text'>
        <input name='txtPayment' type='text' id='txtPayment' size='60' value='$payment'/>      
      </span></td>
    </tr>
    <tr>
      <td><p class='Text'> Fees taken by PayPal:</p></td>
      <td>        <span class='Text'>
        <input name='txtFees' type='text' disabled='disabled' id='txtFees' size='60' value='$fees'/>      
      </span></td>
    </tr>
    <tr>
      <td class='Text'>Seller account to use:</td>
      <td><span class='Text'>
        <input name='txtSellerID' type='text' id='txtSellerID' value='$seller' size='60' />
      </span></td>
    </tr>
    <tr>
      <td><p class='Text'>Final amount to charge the user:</p></td>
      <td>        <span class='Text'>
        <input name='txtAmount' type='text' id='txtAmount' size='60' value='$amount'/>      
      </span></td>
    </tr>
    <tr>
      <td>Note: Normally it is not necessary to change the 'Final amount' field, however if you experience issues with the amount being transferred then you can change it there. Paypal charges a fee for every transaction, so in order to obtain the amount in the 'current payment required' field, we need to adjust the charge to account for the fee taken by PayPal.</td>
      <td valign='top'><input type='submit' name='btnCalculate' id='btnCalculate' value='Refresh calculation' /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>This is what would be displayed to the user:</p>
<p> Thank you for using the EDMC CoffeeClub service. Monthly membership dues are currently $".$payment.". Payment can be made in cash to any Club officer, or if you prefer you can also pay your dues online. </p>
<p>Note: because there is a fee associated with using the PayPal service, the dues are slightly higher when paying online.  <br />
Current dues (online): $".$amount." </p>
<form id='form2' name='form2' method='post' action='".$paypal_page."'>
  <input type='hidden' name='business' value='$seller'>
    <input type='hidden' name='cmd' value='_xclick'>
    <input type='hidden' name='item_name' value='EDMC Coffee Club'>
    <input type='hidden' name='item_number' value='1'>
    <input type='hidden' name='credits' value='510'>
    <input type='hidden' name='userid' value='1'>
    <input type='hidden' name='amount' value='$amount'>
    <input type='hidden' name='no_shipping' value='1'>
    <input type='hidden' name='currency_code' value='USD'>
    <input type='hidden' name='handling' value='0'>
    <input type='hidden' name='cancel_return' value='$cancelled'>
    <input type='hidden' name='return' value='$success'>
    <input type='image' src='https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'>
    <img alt='' border='0' src='https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif' width='1' height='1'>
</form>";
?>
</body>
</html>