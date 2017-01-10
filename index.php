<!DOCTYPE html>
<html lang=en>
<head>
  <meta charset=utf-8>
  <title>Testing a PayPal Payments Standard Button</title>
</head>
<body>
<h2>Buy Strings!</h2>
<table>
<tr>
  <td>Bass Guitar Strings</td>
  <td>
    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
      <input type="hidden" name="cmd" value="_s-xclick">
      <input type="hidden" name="hosted_button_id" value="6RNT8A4HBBJRE">
      <input type="image"
src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif"
border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
      <img alt="" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif"
width="1" height="1">
    </form>

    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="V5S8QRDJ5LNUW">
<table>
<tr><td><input type="hidden" name="on0" value="เลือก">เลือก</td></tr><tr><td><select name="os0">
	<option value="Option 1">Option 1 ฿200.00 THB</option>
	<option value="Option 2">Option 2 ฿500.00 THB</option>
	<option value="Option 3">Option 3 ฿1,000.00 THB</option>
</select> </td></tr>
</table>
<input type="hidden" name="currency_code" value="THB">
<input type="image" src="https://www.paypalobjects.com/en_GB/TH/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
</form>

  </td>
</tr>
</table>
</body>
</html>