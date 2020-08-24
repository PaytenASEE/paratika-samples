<!DOCTYPE >
<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<head>
   <meta charset="UTF-8">
   <title>Sale/Preauth Form</title>
</head>
<script type="text/javascript">
   function generateRandomData() {
      var now = new Date();
      document.getElementById('merchantpaymentid').value = 'MPID-' + now.getTime();
      document.getElementById('customerId').value = 'Cust-' + now.getTime();
   }
</script>
<body onload="generateRandomData()">
   <div class="container">
      <h2>Sale/Preauth</h2>
      <form method="post" action=" https://test.paratika.com.tr/paratika/api/v2">
         <table>
            <tr>
               <td>ACTION:</td>
               <td>
               <select style="width:173px;" name="ACTION">
                  <option value="SALE">SALE</option>
                  <option value="PREAUTH">PREAUTH</option>
               </select>
            </td>
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
               <td>MERCHANTPAYMENTID:</td>
               <td><input id="merchantpaymentid" type="text" name="MERCHANTPAYMENTID" value=""></td>
            </tr>
            <tr>
               <td>CURRENCY:</td>
               <td><input type="text" name="CURRENCY" value="TRY"/></td>
            </tr>
            <tr>
               <td>AMOUNT:</td>
               <td><input type="text" name="AMOUNT" value="1000"/></td>
            </tr>
            <tr>
               <td>RETURNURL:</td>
                  <td><input type="text" name="RETURNURL" value="https://test.paratika.com.tr/paratika/index.jsp"></td>
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
               <td><input type="text" name="CARDPAN" value="4532513386094198"></td>
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