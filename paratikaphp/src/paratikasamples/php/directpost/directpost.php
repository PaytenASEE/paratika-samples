<!DOCTYPE >
<?php 
    header('Content-type: text/html; charset=utf-8');
?> 
<head>
   <meta charset="UTF-8">
   <title>Direct Post MOTO</title>
</head>
<script type="text/javascript">
   function randomString(length, chars) {
      var mask = '';
      if (chars.indexOf('a') > -1) {
         mask += 'abcdefghijklmnopqrstuvwxyz';
      }
      if (chars.indexOf('A') > -1) {
         mask += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      }
      if (chars.indexOf('#') > -1) {
         mask += '0123456789';
      }
      if (chars.indexOf('!') > -1) {
         mask += '~`!@#$%^&*()_+-={}[]:";\'<>?,./|\\';
      }
      var result = '';
      for (var i = length; i > 0; --i) {
         result += mask[Math.round(Math.random() * (mask.length - 1))];
      }
      return result;
   }

	function generateRandomData() {
		document.getElementById('cardOwner').value = 'Cust-' + randomString(10, "aA#");
      document.getElementById('cardName').value = 'Name-' + randomString(8, "aA#");
	}
   function setUrl1() {
      document.getElementById("formUrl").action = document.getElementById("f1").value;
   }
</script>
<body onload="generateRandomData()">
   <div class="container">
      <h2>Direct Post MOTO</h2>
	  <h4><a href="http://localhost/paratikasamples/php/session/sessiontoken.php">You need to create a session token and paste it below</a></h4>
      <form method="post" id="formUrl" action="https://test.paratika.com.tr/merchant/post/sale/SESSIONTOKEN">
         <table>
            <tr>
               <td>Kart Sahibi / Card Owner (cardOwner): </td>
               <td><input id="cardOwner" type="text" name="cardOwner" value=""></td>
            </tr>
            <tr>
               <td>Kart Numarası / Card Number (pan): </td>
               <td><input type="text" name="pan" value="5456165456165454"></td>
            </tr>
            <tr>
               <td>Son Kullanım Tarihi / Expiry Date (expiryMonth, expiryYear): </td>
               <td>
                  <select name="expiryMonth">
                     <option value="01">January</option>
                     <option value="02">February</option>
                     <option value="03">March</option>
                     <option value="04">April</option>
                     <option value="05">May</option>
                     <option value="06">June</option>
                     <option value="07">July</option>
                     <option value="08">August</option>
                     <option value="09">September</option>
                     <option value="10">October</option>
                     <option value="11">November</option>
                     <option value="12">December</option>
                  </select>
                  <select name="expiryYear" style="width:80px;">
                     <option value="2017">2017</option>
                     <option value="2018">2018</option>
                     <option value="2019">2019</option>
                     <option value="2020">2020</option>
                     <option value="2021">2021</option>
                     <option value="2022">2022</option>
                     <option value="2023">2023</option>
                     <option value="2024">2024</option>
                     <option value="2025">2025</option>
                     <option value="2026">2026</option>
                     <option value="2027">2027</option>
                     <option value="2028">2028</option>
                     <option value="2029">2029</option>
                     <option value="2030">2030</option>
                     <option value="2031">2031</option>
                     <option value="2032">2032</option>
                     <option value="2033">2033</option>
                     <option value="2034">2034</option>
                  </select>
               </td>
            </tr>
             <tr>
               <td>Güvenlik Kodu / Security Code (cvv):</td>
               <td><input type="text" name="cvv" value="000" maxlength="4"></td>
            </tr>
            <tr>
               <td>Kart Adı / Card Name (cardName):</td>
               <td><input id="cardName" type="text" name="cardName" value=""></td>
            </tr>
            <tr>
               <td>Taksit Sayısı / Installment Count (installmentCount):</td>
               <td><input type="number" name="installmentCount" value="1" maxlength="2"></td>
            </tr>
            <tr>
               <td>Url: </td>
               <td><input style="width:580px;" type="text" id="f1" value="https://test.paratika.com.tr/merchant/post/sale/SESSIONTOKEN" /></td>
               <td>
                  <button type="button" onclick="setUrl1();"> Set form action URL </button>
               </td>
            </tr>
            <tr>
               <td></td>
               <td></td>
            </tr>
            <tr>
               <td></td>
               <td colspan="4">
                  <input style="width:173px; height: 30px;" type="submit" value="Submit"/>
               </td>
            </tr>
           
         </table>
      </form>
   </div>
</body>
</html>