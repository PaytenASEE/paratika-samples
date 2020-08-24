### How to run properly? ###

After importing this project into your IDE, you can run the sample examples.
In this folder there are three php files, each containing classes which interact in order to do API actions.

1. ParatikaService.php 
	* has two methods which are used to establish a connection, submit the request and get response from the server.
2. ParatikaUtil.php 
	* has its own methods which are used to initialize the parameters which are about to be post in paratika server.
3. ParatikaClient.php 
	* is the main class which has the main functions to do a sessionToken, querySession, sale and preauth actions.
	* In order to test the actions you have to run this class.
	* After running you should get something like this on console:

```
>> A sample SESSIONTOKEN operation is started.
> Request URL: https://test.paratika.com.tr/paratika/api/v2
> Request Data: ACTION=SESSIONTOKEN&MERCHANTPAYMENTID=MPID-59f1d5fabf0922.12373278&AMOUNT=1200&CURRENCY=TRY&SESSIONTYPE=PAYMENTSESSION&RETURNURL=https%3A%2F%2Ftest.paratika.com.tr%2Fparatika%2Findex.jsp&MERCHANT=10000000&MERCHANTUSER=apiuser%40testmerchant.com&MERCHANTPASSWORD=Pluto321%60&CUSTOMER=MPID-59f1d5fabf0a13.28869614&CUSTOMERNAME=Aydonat+Ayd%C4%B1nlar&CUSTOMEREMAIL=mghUzjPn%40email.com&CUSTOMERIP=127.0.0.1&CUSTOMERPHONE=%2B903120000011&CUSTOMERBIRTHDAY=19-04-1969&CUSTOMERUSERAGENT=Mozilla%2F5.0+%28Windows+NT+6.1%3B+WOW64%3B+rv%3A56.0%29+Gecko%2F20100101+Firefox%2F56.0&NAMEONCARD=Aydonat+Ayd%C4%B1nlar&CARDPAN=4022774022774026&CARDEXPIRY=12.2030&CARDCVV=000&BILLTOADDRESSLINE=%C3%87%C3%B6i%C5%9F%C3%BC%C4%9F%C4%B1+Plaza%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&BILLTOCITY=Ankara&BILLTOCOUNTRY=T%C3%BCrkiye&BILLTOPOSTALCODE=06000&BILLTOPHONE=%2B903120000001&SHIPTOADDRESSLINE=Plaza+%C3%87%C3%96%C4%B0%C5%9E%C3%9C%C4%9EI%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&SHIPTOCITY=Ankara&SHIPTOCOUNTRY=T%C3%BCrkiye&SHIPTOPOSTALCODE=06000&SHIPTOPHONE=%2B903120000001&ORDERITEMS=%255B%257B%2522code%2522%253A%2522T00D3AITCC%2522%252C%2522name%2522%253A%2522Galaxy%2BS8%252B%2522%252C%2522quantity%2522%253A%25221%2522%252C%2522description%2522%253A%2522The%2BSamsung%2BGalaxy%2BS8%2Bis%2BAndroid%2Bsmartphone%2Bproduced%2Bby%2BSamsung%2BElectronics%2Bas%2Bpart%2Bof%2Bthe%2BSamsung%2BGalaxy%2BS%2Bseries.%2522%252C%2522amount%2522%253A%25221000%2522%257D%252C%257B%2522code%2522%253A%2522T00F2IONA%2522%252C%2522name%2522%253A%2522HP%2B-%2B14%255C%2522%2BChromebook%2522%252C%2522quantity%2522%253A%25221%2522%252C%2522description%2522%253A%2522Intel%2BCeleron%2B-%2B4GB%2BMemory%2B-%2B16GB%2BeMMC%2BFlash%2BMemory%2B-%2BSilver.%2522%252C%2522amount%2522%253A%2522200%2522%257D%255D
> Response Data: {
  "sessionToken" : "BL57PXRPGZUBLDYXS2M6MZRPGGQLWCNKL43CVMYVK7MVJJIR",
  "responseCode" : "00",
  "responseMsg" : "Approved"
}
>>> SESSIONTOKEN operation is SUCCESSFUL. <<<
>> ParatikaClient.sessionToken() operation is finished in 1081ms.
>> A sample SESSIONTOKEN operation is started.
> Request URL: https://test.paratika.com.tr/paratika/api/v2
> Request Data: ACTION=SESSIONTOKEN&MERCHANTPAYMENTID=MPID-59f1d5fbd29ba6.75751174&AMOUNT=1200&CURRENCY=TRY&SESSIONTYPE=PAYMENTSESSION&RETURNURL=https%3A%2F%2Ftest.paratika.com.tr%2Fparatika%2Findex.jsp&MERCHANT=10000000&MERCHANTUSER=apiuser%40testmerchant.com&MERCHANTPASSWORD=Pluto321%60&CUSTOMER=MPID-59f1d5fbd29c41.33656262&CUSTOMERNAME=Aydonat+Ayd%C4%B1nlar&CUSTOMEREMAIL=mghUzjPn%40email.com&CUSTOMERIP=127.0.0.1&CUSTOMERPHONE=%2B903120000011&CUSTOMERBIRTHDAY=19-04-1969&CUSTOMERUSERAGENT=Mozilla%2F5.0+%28Windows+NT+6.1%3B+WOW64%3B+rv%3A56.0%29+Gecko%2F20100101+Firefox%2F56.0&NAMEONCARD=Aydonat+Ayd%C4%B1nlar&CARDPAN=4022774022774026&CARDEXPIRY=12.2030&CARDCVV=000&BILLTOADDRESSLINE=%C3%87%C3%B6i%C5%9F%C3%BC%C4%9F%C4%B1+Plaza%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&BILLTOCITY=Ankara&BILLTOCOUNTRY=T%C3%BCrkiye&BILLTOPOSTALCODE=06000&BILLTOPHONE=%2B903120000001&SHIPTOADDRESSLINE=Plaza+%C3%87%C3%96%C4%B0%C5%9E%C3%9C%C4%9EI%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&SHIPTOCITY=Ankara&SHIPTOCOUNTRY=T%C3%BCrkiye&SHIPTOPOSTALCODE=06000&SHIPTOPHONE=%2B903120000001&ORDERITEMS=%255B%257B%2522code%2522%253A%2522T00D3AITCC%2522%252C%2522name%2522%253A%2522Galaxy%2BS8%252B%2522%252C%2522quantity%2522%253A%25221%2522%252C%2522description%2522%253A%2522The%2BSamsung%2BGalaxy%2BS8%2Bis%2BAndroid%2Bsmartphone%2Bproduced%2Bby%2BSamsung%2BElectronics%2Bas%2Bpart%2Bof%2Bthe%2BSamsung%2BGalaxy%2BS%2Bseries.%2522%252C%2522amount%2522%253A%25221000%2522%257D%252C%257B%2522code%2522%253A%2522T00F2IONA%2522%252C%2522name%2522%253A%2522HP%2B-%2B14%255C%2522%2BChromebook%2522%252C%2522quantity%2522%253A%25221%2522%252C%2522description%2522%253A%2522Intel%2BCeleron%2B-%2B4GB%2BMemory%2B-%2B16GB%2BeMMC%2BFlash%2BMemory%2B-%2BSilver.%2522%252C%2522amount%2522%253A%2522200%2522%257D%255D
> Response Data: {
  "sessionToken" : "DMKYS6AQZSMCQM75IDQKASBOBOYCGOZFYJWE4D6WXJ4B7QWA",
  "responseCode" : "00",
  "responseMsg" : "Approved"
}
>>> SESSIONTOKEN operation is SUCCESSFUL. <<<
>> ParatikaClient.sessionToken() operation is finished in 516ms.
>> A sample QUERYSESSION operation is started.
> Request URL: https://test.paratika.com.tr/paratika/api/v2
> Request Data: ACTION=QUERYSESSION&SESSIONTOKEN=DMKYS6AQZSMCQM75IDQKASBOBOYCGOZFYJWE4D6WXJ4B7QWA
> Response Data: {
  "responseCode" : "00",
  "responseMsg" : "Approved",
  "session" : {
    "token" : "DMKYS6AQZSMCQM75IDQKASBOBOYCGOZFYJWE4D6WXJ4B7QWA",
    "apiAction" : "SESSIONTOKEN",
    "merchantPaymentId" : "MPID-59f1d5fbd29ba6.75751174",
    "firstAmount" : 1200,
    "amount" : 1200,
    "currency" : "TRY",
    "returnUrl" : "https://test.paratika.com.tr/paratika/index.jsp",
    "language" : "tr",
    "redirectWaitingTime" : 0,
    "itemTotalAmount" : 1200,
    "shippingCost" : 0,
    "shippingContact" : {
      "id" : null,
      "name" : null,
      "address" : "Plaza ÇÖİŞÜĞI, Ostim No:83/9, Yenimahalle",
      "city" : "Ankara",
      "country" : "Türkiye",
      "state" : null,
      "postalCode" : "06000",
      "phone" : "+903120000001"
    },
    "billingContact" : {
      "id" : null,
      "name" : null,
      "address" : "Çöişüğı Plaza, Ostim No:83/9, Yenimahalle",
      "city" : "Ankara",
      "country" : "Türkiye",
      "state" : null,
      "postalCode" : "06000",
      "phone" : "+903120000001"
    },
    "fastShipping" : false
  },
  "merchant" : {
    "businessId" : "10000000",
    "name" : "MSU Test Merchant",
    "tradingName" : "Test Merchant",
    "address" : "İTÜ Ayazağa Kampüsü Teknokent ARI 1 Binası No: 12 34469 Maslak",
    "phone" : "+902123650505",
    "fax" : "+902123650555",
    "webAddress" : "http://www.asseco-see.com.tr/",
    "additionalDetails" : "Asseco SEE",
    "secretKey" : "qw3rty4iopa77fgh",
    "paymentPolicy" : "THD_OPT",
    "domains" : "www.asseco-see.com.tr",
    "preInformationText" : "<p><strong>NA</strong></p>",
    "remoteSalesAgreement" : "<p><strong>NA</strong></p>",
    "useHpp" : true,
    "integrationModel" : "API"
  },
  "customer" : {
    "id" : "MPID-59f1d5fbd29c41.33656262",
    "email" : "mghUzjPn@email.com",
    "phone" : "+903120000011",
    "name" : "Aydonat Aydınlar",
    "birthday" : "1969-04-19",
    "lastLogin" : "26.10.2017 12:32"
  },
  "orderItems" : [ {
    "code" : "T00D3AITCC",
    "name" : "Galaxy S8+",
    "description" : "The Samsung Galaxy S8 is Android smartphone produced by Samsung Electronics as part of the Samsung Galaxy S series.",
    "amount" : 1000,
    "quantity" : 1
  }, {
    "code" : "T00F2IONA",
    "name" : "HP - 14\" Chromebook",
    "description" : "Intel Celeron - 4GB Memory - 16GB eMMC Flash Memory - Silver.",
    "amount" : 200,
    "quantity" : 1
  } ]
}
>>> QUERYSESSION operation is SUCCESSFUL. <<<
>> ParatikaClient.querySession() operation is finished in 367ms.
>> A sample SALE operation is started.
> Request URL: https://test.paratika.com.tr/paratika/api/v2
> Request Data: ACTION=SALE&AMOUNT=16.51&CURRENCY=TRY&MERCHANTPAYMENTID=MPID-59f1d5fcb619a1.58794902&MERCHANT=10000000&MERCHANTUSER=apiuser%40testmerchant.com&MERCHANTPASSWORD=Pluto321%60&CUSTOMER=MPID-59f1d5fcb61aa6.57260007&CUSTOMERNAME=Aydonat+Ayd%C4%B1nlar&CUSTOMEREMAIL=mghUzjPn%40email.com&CUSTOMERIP=127.0.0.1&CUSTOMERPHONE=%2B903120000011&CUSTOMERBIRTHDAY=19-04-1969&CUSTOMERUSERAGENT=Mozilla%2F5.0+%28Windows+NT+6.1%3B+WOW64%3B+rv%3A56.0%29+Gecko%2F20100101+Firefox%2F56.0&NAMEONCARD=Aydonat+Ayd%C4%B1nlar&CARDPAN=4022774022774026&CARDEXPIRY=12.2030&CARDCVV=000&BILLTOADDRESSLINE=%C3%87%C3%B6i%C5%9F%C3%BC%C4%9F%C4%B1+Plaza%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&BILLTOCITY=Ankara&BILLTOCOUNTRY=T%C3%BCrkiye&BILLTOPOSTALCODE=06000&BILLTOPHONE=%2B903120000001&SHIPTOADDRESSLINE=Plaza+%C3%87%C3%96%C4%B0%C5%9E%C3%9C%C4%9EI%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&SHIPTOCITY=Ankara&SHIPTOCOUNTRY=T%C3%BCrkiye&SHIPTOPOSTALCODE=06000&SHIPTOPHONE=%2B903120000001
> Response Data: {
  "action" : "SALE",
  "merchant" : "10000000",
  "amount" : 16.51,
  "currency" : "TRY",
  "apiMerchantId" : "100658785",
  "paymentSystem" : "My Sanalakpos Account (Test)",
  "paymentSystemType" : "AKBANK",
  "paymentSystemEftCode" : "0046",
  "pgTranDate" : "20171026 15:32:53",
  "merchantPaymentId" : "MPID-59f1d5fcb619a1.58794902",
  "pgTranId" : "17299Pg3B01024305",
  "pgTranRefId" : "729915045354",
  "pgOrderId" : "10000000-MPID-59f1d5fcb619a1.58794902",
  "responseCode" : "00",
  "responseMsg" : "Approved",
  "tmxSessionQueryOutput" : ""
}
>>> SALE operation is SUCCESSFUL. <<<
>> ParatikaClient.sale() operation is finished in 1953ms.
>> A sample PREAUTH operation is started.
> Request URL: https://test.paratika.com.tr/paratika/api/v2
> Request Data: ACTION=PREAUTH&AMOUNT=13.79&CURRENCY=TRY&MERCHANTPAYMENTID=MPID-59f1d5feaa99d7.08979477&MERCHANT=10000000&MERCHANTUSER=apiuser%40testmerchant.com&MERCHANTPASSWORD=Pluto321%60&CUSTOMER=MPID-59f1d5feaa9a59.35380044&CUSTOMERNAME=Aydonat+Ayd%C4%B1nlar&CUSTOMEREMAIL=mghUzjPn%40email.com&CUSTOMERIP=127.0.0.1&CUSTOMERPHONE=%2B903120000011&CUSTOMERBIRTHDAY=19-04-1969&CUSTOMERUSERAGENT=Mozilla%2F5.0+%28Windows+NT+6.1%3B+WOW64%3B+rv%3A56.0%29+Gecko%2F20100101+Firefox%2F56.0&NAMEONCARD=Aydonat+Ayd%C4%B1nlar&CARDPAN=4022774022774026&CARDEXPIRY=12.2030&CARDCVV=000&BILLTOADDRESSLINE=%C3%87%C3%B6i%C5%9F%C3%BC%C4%9F%C4%B1+Plaza%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&BILLTOCITY=Ankara&BILLTOCOUNTRY=T%C3%BCrkiye&BILLTOPOSTALCODE=06000&BILLTOPHONE=%2B903120000001&SHIPTOADDRESSLINE=Plaza+%C3%87%C3%96%C4%B0%C5%9E%C3%9C%C4%9EI%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&SHIPTOCITY=Ankara&SHIPTOCOUNTRY=T%C3%BCrkiye&SHIPTOPOSTALCODE=06000&SHIPTOPHONE=%2B903120000001
> Response Data: {
  "action" : "PREAUTH",
  "merchant" : "10000000",
  "amount" : 13.79,
  "currency" : "TRY",
  "apiMerchantId" : "100658785",
  "paymentSystem" : "My Sanalakpos Account (Test)",
  "paymentSystemType" : "AKBANK",
  "paymentSystemEftCode" : "0046",
  "pgTranDate" : "20171026 15:32:54",
  "merchantPaymentId" : "MPID-59f1d5feaa99d7.08979477",
  "pgTranId" : "17299Pg4H01024308",
  "pgTranRefId" : "729915045355",
  "pgOrderId" : "10000000-MPID-59f1d5feaa99d7.08979477",
  "responseCode" : "00",
  "responseMsg" : "Approved",
  "tmxSessionQueryOutput" : ""
}
>>> PREAUTH operation is SUCCESSFUL. <<<
>> ParatikaClient.preauth() operation is finished in 1478ms.
```