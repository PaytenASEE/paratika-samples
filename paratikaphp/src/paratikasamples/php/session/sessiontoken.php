<!DOCTYPE >
<?php 
header('Content-type: text/html; charset=utf-8');
?> 
<head>
   <meta charset="UTF-8">
   <title>Session Token Form</title>
</head>
<script type="text/javascript">
	function generateRandomData() {
		var now = new Date();
		document.getElementById('merchantpaymentid').value = 'MPID-' + now.getTime();
		document.getElementById('customerId').value = 'CUS-' + now.getTime();
	}
</script>
<style>
    input {
        height: 30px;
    }
    label {
        color: darkslategrey;
    }
</style>
<body onload="generateRandomData()">
   <div class="container">
      <h2>Session Token</h2>
      <h4>For encoding/decoding data you can use this site: <a href="https://meyerweb.com/eric/tools/dencoder/" target="_blank"> Encode/Decode </a></h4>
      <form method="post" action=" https://test.paratika.com.tr/paratika/api/v2">
         <table>
            <tr>
               <td>ACTION:</td>
               <td><input type="text" name="ACTION" value="SESSIONTOKEN"/>
            </tr>
            <tr>
               <td>MERCHANT:</td>
               <td><input type="text" name="MERCHANT" value="10000000"/></td>
            </tr>
            <tr>
               <td>MERCHANTUSER:</td>
                <td><input type="text" name="MERCHANTUSER" value="apiuser@testmerchant.com"></td>
            </tr>
            <tr>
               <td>MERCHANTPASSWORD:</td>
               <td><input type="text" name="MERCHANTPASSWORD" value="Pluto321`"></td>
            </tr>
            <tr>
               <td>SESSIONTYPE</td>
               <td><input type="text" name="SESSIONTYPE" value="PAYMENTSESSION"></td>
            </tr>
            <tr>
               <td>MERCHANTPAYMENTID:</td>
               <td><input id="merchantpaymentid" type="text" name="MERCHANTPAYMENTID" value=""></td>
            </tr>
            <tr>
               <td>CURRENCY:</td>
               <td><input type="text" name="CURRENCY" value="TRY"/></td>
            </tr>
            <tr>
               <td>AMOUNT:</td>
               <td><input type="text" name="AMOUNT" value="1200"/></td>
            </tr>
            <tr>
               <td>RETURNURL:</td>
               <td><input type="text" name="RETURNURL" value="http://localhost/paratikasamples/php/directpost/return.php"></td>
               <td><label> (Please consider your local environment URI and Port you are using for running this project)</label>
  				</td>
            </tr>
            <tr>
               <td>CUSTOMER:</td>
               <td><input id="customerId" type="text" name="CUSTOMER" value=""></td>
            </tr>
            <tr>
               <td>CUSTOMERNAME:</td>
                  <td><input type="text" name="CUSTOMERNAME" value="Aydonat Aydınlar"></td>
            </tr>
            <tr>
               <td>CUSTOMEREMAIL:</td>
               <td><input type="text" name="CUSTOMEREMAIL" value="mghUzjPn@email.com"></td>
            </tr>
             <tr>
               <td>CUSTOMERIP</td>
               <td><input type="text" name="CUSTOMERIP" value="127.0.0.1"></td>
            </tr>
            <tr>
               <td>CUSTOMERPHONE:</td>
               <td><input type="text" name="CUSTOMERPHONE" value="+903120000011"></td>
            </tr>
            <tr>
               <td>CUSTOMERBIRTHDAY:</td>
               <td><input type="text" name="CUSTOMERBIRTHDAY" value="01-01-2001"></td>
            </tr>
            <tr>
               <td>CUSTOMERUSERAGENT:</td>
               <td><input type="text" name="CUSTOMERUSERAGENT" value="Mozilla/5.0 (Windows NT 6.1; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0"></td>
            </tr>
            <tr>
               <td>NAMEONCARD:</td>
               <td><input type="text" name="NAMEONCARD" value="Aydonat Aydınlar"></td>
            </tr>
             <tr>
               <td>CARDPAN:</td>
               <td><input type="text" name="CARDPAN" value="4022774022774026"></td>
            </tr>
            <tr>
               <td>CARDEXPIRY:</td>
               <td><input type="text" name="CARDEXPIRY" value="12.2030"></td>
            </tr>
            <tr>
               <td>CARDCVV:</td>
               <td><input type="text" name="CARDCVV" value="000"></td>
            </tr>

            <tr>
               <td>BILLTOADDRESSLINE:</td>
               <td><input type="text" name="BILLTOADDRESSLINE" value="Çöişüğı Plaza, Ostim No:83/9, Yenimahalle"/></td>
            </tr>
            <tr>
               <td>BILLTOCITY:</td>
               <td><input type="text" name="BILLTOCITY" value="Ankara"/></td>
            </tr>
            <tr>
               <td>BILLTOCOUNTRY:</td>
                  <td><input type="text" name="BILLTOCOUNTRY" value="Türkiye"></td>
            </tr>
            <tr>
               <td>BILLTOPOSTALCODE:</td>
               <td><input type="text" name="BILLTOPOSTALCODE" value="06000"></td>
            </tr>
            <tr>
               <td>BILLTOPHONE:</td>
                  <td><input type="text" name="BILLTOPHONE" value="+903120000001"></td>
            </tr>
            <tr>
               <td>SHIPTOADDRESSLINE:</td>
               <td><input type="text" name="SHIPTOADDRESSLINE" value="Plaza ÇÖİŞÜĞI, Ostim No:83/9, Yenimahalle"></td>
            </tr>
             <tr>
               <td>SHIPTOCITY</td>
               <td><input type="text" name="SHIPTOCITY" value="Ankara"></td>
            </tr>
            <tr>
               <td>SHIPTOCOUNTRY:</td>
               <td><input type="text" name="SHIPTOCOUNTRY" value="Türkiye"></td>
            </tr>
            <tr>
               <td>SHIPTOPOSTALCODE:</td>
               <td><input type="text" name="SHIPTOPOSTALCODE" value="06000"></td>
            </tr>
            <tr>
               <td>SHIPTOPHONE:</td>
               <td><input type="text" name="SHIPTOPHONE" value="+903120000001"></td>
            </tr>
            <tr>
               <td>ORDERITEMS:</td>
               <td><input type="text" name="ORDERITEMS" value="%5B%7B%22code%22%3A%22T00D3AITCC%22%2C%22name%22%3A%22Galaxy%20S8%2B%22%2C%22quantity%22%3A%221%22%2C%22description%22%3A%22The%20Samsung%20Galaxy%20S8%20is%20Android%20smartphone%20produced%20by%20Samsung%20Electronics%20as%20part%20of%20the%20Samsung%20Galaxy%20S%20series.%22%2C%22amount%22%3A%221000%22%7D%2C%7B%22code%22%3A%22T00F2IONA%22%2C%22name%22%3A%22HP%20-%2014%5C%22%20Chromebook%22%2C%22quantity%22%3A%221%22%2C%22description%22%3A%22Intel%20Celeron%20-%204GB%20Memory%20-%2016GB%20eMMC%20Flash%20Memory%20-%20Silver.%22%2C%22amount%22%3A%22200%22%7D%5D"/></td>
               <td><label> Decoded ORDERITEMS param: [ {  
                          "code":"T00D3AITCC",
                          "name":"Galaxy S8+",
                          "quantity":"1",
                          "description":"The Samsung Galaxy S8 is Android smartphone produced by Samsung Electronics as part of the Samsung Galaxy S series.",
                          "amount":"1000"
                       }, {  
                          "code":"T00F2IONA",
                          "name":"HP - 14\" Chromebook",
                          "quantity":"1",
                          "description":"Intel Celeron - 4GB Memory - 16GB eMMC Flash Memory - Silver.",
                          "amount":"200"
                       } ]
  					</label>
  				</td>
            </tr>
            <tr>
               <td>EXTRA:</td>
               <td><input type="text" name="EXTRA" value="%7B%22AlwaysSaveCard%22%3A%22true%22%2C%22IntegrationModel%22%3A%22API%22%7D"></td>
               <td><label>Decoded EXTRA param: {"AlwaysSaveCard":"true","IntegrationModel":"API"}</label></td>
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