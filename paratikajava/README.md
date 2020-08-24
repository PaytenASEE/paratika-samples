### Bu kod deposu ne için? ###

Java dilleri için Paratika istemci örnekleri, tüm geliştiriciler için basit ve rahat bir başlangıç sağlamak için yazılmıştır. Java sürüm 6 veya daha üstü olan herhangi bir JRE'yi veya JDK'yı destekler.

### Bu kodları nasıl kullanabilirim? ###

Bu kod örneklerini kullanmak için uzun bir kurulum prosedürü yoktur. Kodlar, çalıştırılabilir ana yöntemler / yordamlar, test sınıfları veya basit statik / dinamik sayfa kodlarıdır. Lütfen repository'i şimdi klonlayın ve kodu çalıştırın.

IDE veya JDK / JRE ortamınızda başarılı bir klonlama ve kurulumdan sonra, ParatikaClientTest'i standart bir çalıştırılabilir sınıf olan bir JUnit testi veya ParatikaClient olarak çalıştırabilirsiniz. Her ikisi de bu örnek çıktıları konsolda üretmelidir. (*)

### Katkı kuralları ###

Bu örnek projeyi iyileştirmemize yardım etmek isterseniz, lütfen güncelleme taleplerinizi test sınıfları ve mümkünse yardımcı belgelerle birlikte paylaşın. Her türlü katkıyı memnuniyetle karşılıyoruz.

### Kiminle konuşabilirim? ###

Herhangi bir talep veya geribildirim için destek (at) paratika.com.tr adresine e-posta ile Paratika destek ekibine ulaşabilirsiniz. 

---

### What is this repository for? ###

Paratika client samples for Java language is written to provide a simple and cool starting for all developers. It supports any JRE or JDK with Java version 6 or higher.

### How do I use these codes? ###

There is no long setup procedures for using these code samples. The codes are in runnable main methods, test classes or simple page scripts. Please clone the repository and run the code. 

After a successful cloning and setting-up in your IDE or JDK/JRE environment, you may run ParatikaClientTest as a JUnit test or ParatikaClient as standard runnable class. Both of them should produce these sample outputs in console. 

```
A sample SESSIONTOKEN operation is started.
 > Request URL: https://test.paratika.com.tr/paratika/api/v2
 > Request Data: BILLTOCOUNTRY=T%C3%BCrkiye&RETURNURL=https%3A%2F%2Ftest.paratika.com.tr%2Fparatika%2Findex.jsp&EXTRA=%257B%2522AlwaysSaveCard%2522%253A%2522true%2522%252C%2522IntegrationModel%2522%253A%2522API%2522%257D&MERCHANTPASSWORD=Pluto321%60&SHIPTOPOSTALCODE=06000&MERCHANT=10000000&MERCHANTPAYMENTID=9c9295f8-73e8-43ad-aa71-ff0d4e662b2a&CUSTOMERPHONE=%2B903120000011&CUSTOMEREMAIL=mghUzjPn%40email.com&AMOUNT=1000&BILLTOCITY=Ankara&CUSTOMER=4b8f113d-c29e-46c7-bf64-c7b4f2cd6af8&CUSTOMERUSERAGENT=Mozilla%2F5.0+%28Windows+NT+6.1%3B+WOW64%3B+rv%3A56.0%29+Gecko%2F20100101+Firefox%2F56.0&CARDEXPIRY=12.2030&CURRENCY=TRY&SHIPTOADDRESSLINE=Plaza+%C3%87%C3%96%C4%B0%C5%9E%C3%9C%C4%9EI%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&SHIPTOPHONE=%2B903120000001&BILLTOPOSTALCODE=06000&SHIPTOCITY=Ankara&CUSTOMERIP=127.0.0.1&SHIPTOCOUNTRY=T%C3%BCrkiye&BILLTOADDRESSLINE=%C3%87%C3%B6i%C5%9F%C3%BC%C4%9F%C4%B1+Plaza%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&ACTION=SESSIONTOKEN&NAMEONCARD=Aydonat+Ayd%C4%B1nlar&BILLTOPHONE=%2B903120000001&SESSIONTYPE=PAYMENTSESSION&CARDCVV=000&CUSTOMERNAME=Aydonat+Ayd%C4%B1nlar&CARDPAN=4532513386094198&ORDERITEMS=%255B%257B%2522amount%2522%253A1000%252C%2522code%2522%253A%2522T00D3AITCC%2522%252C%2522quantity%2522%253A1%252C%2522name%2522%253A%2522Galaxy%2BS8%252B%2522%252C%2522description%2522%253A%2522The%2BSamsung%2BGalaxy%2BS8%2Bis%2BAndroid%2Bsmartphone%2Bproduced%2Bby%2BSamsung%2BElectronics%2Bas%2Bpart%2Bof%2Bthe%2BSamsung%2BGalaxy%2BS%2Bseries.%2522%257D%255D&MERCHANTUSER=apiuser%40testmerchant.com&CUSTOMERBIRTHDAY=19-04-1969&
 > Response Data: 
{
  "sessionToken" : "J6OMOG7OSVLBVKVF6L4KUI2BN37EGTW6XPIQQMPAJPHTQU7U",
  "responseCode" : "00",
  "responseMsg" : "Approved"
}

 > ParatikaClient.sessionToken() operation is finished in 12732 ms.
 > SESSIONTOKEN operation is SUCCESSFUL.
 
 
A sample QUERYSESSION operation is started.
 > Request URL: https://test.paratika.com.tr/paratika/api/v2
 > Request Data: ACTION=QUERYSESSION&SESSIONTOKEN=J6OMOG7OSVLBVKVF6L4KUI2BN37EGTW6XPIQQMPAJPHTQU7U&
 > Response Data: 
{
  "responseCode" : "00",
  "responseMsg" : "Approved",
  "session" : {
    "token" : "J6OMOG7OSVLBVKVF6L4KUI2BN37EGTW6XPIQQMPAJPHTQU7U",
    "apiAction" : "SESSIONTOKEN",
    "merchantPaymentId" : "9c9295f8-73e8-43ad-aa71-ff0d4e662b2a",
    "firstAmount" : 1000,
    "amount" : 1000,
    "currency" : "TRY",
    "returnUrl" : "https://test.paratika.com.tr/paratika/index.jsp",
    "language" : "tr",
    "redirectWaitingTime" : 0,
    "itemTotalAmount" : 1000,
    "shippingCost" : 0,
    "shippingContact" : {
      "address" : "Plaza ÇÖİŞÜĞI, Ostim No:83/9, Yenimahalle",
      "city" : "Ankara",
      "country" : "Türkiye",
      "postalCode" : "06000",
      "phone" : "+903120000001"
    },
    "billingContact" : {
      "address" : "Çöişüğı Plaza, Ostim No:83/9, Yenimahalle",
      "city" : "Ankara",
      "country" : "Türkiye",
      "postalCode" : "06000",
      "phone" : "+903120000001"
    },
    "fastShipping" : false,
    "extra" : "{\"AlwaysSaveCard\":\"true\",\"IntegrationModel\":\"API\"}"
  },
  "merchant" : {
    "businessId" : "***",
    "name" : "MSU Test Merchant",
    "tradingName" : "Test Merchant",
    "address" : "İTÜ Ayazağa Kampüsü Teknokent ARI 1 Binası No: 12 34469 Maslak",
    "phone" : "+902123650505",
    "fax" : "+902123650555",
    "webAddress" : "http://www.asseco-see.com.tr/",
    "additionalDetails" : "Asseco SEE",
    "secretKey" : "***",
    "paymentPolicy" : "THD_OPT",
    "domains" : "www.asseco-see.com.tr",
    "preInformationText" : "<p><strong>NA</strong></p>",
    "remoteSalesAgreement" : "<p><strong>NA</strong></p>",
    "useHpp" : true
  },
  "customer" : {
    "id" : "4b8f113d-c29e-46c7-bf64-c7b4f2cd6af8",
    "email" : "mghUzjPn@email.com",
    "phone" : "+903120000011",
    "name" : "Aydonat Aydınlar",
    "birthday" : "1969-04-19",
    "lastLogin" : "11.10.2017 07:52"
  },
  "orderItems" : [ {
    "code" : "T00D3AITCC",
    "name" : "Galaxy S8+",
    "description" : "The Samsung Galaxy S8 is Android smartphone produced by Samsung Electronics as part of the Samsung Galaxy S series.",
    "amount" : 1000,
    "quantity" : 1
  } ]
}

 > ParatikaClient.querySession() operation is finished in 2946ms.
 > QUERYSESSION operation is SUCCESSFUL.


A sample SALE operation is started.
 > Request URL: https://test.paratika.com.tr/paratika/api/v2
 > Request Data: SHIPTOPOSTALCODE=06000&BILLTOADDRESSLINE=%C3%87%C3%B6i%C5%9F%C3%BC%C4%9F%C4%B1+Plaza%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&CARDEXPIRY=12.2030&CUSTOMERIP=127.0.0.1&BILLTOCITY=Ankara&CARDCVV=000&CUSTOMERUSERAGENT=Mozilla%2F5.0+%28Windows+NT+6.1%3B+WOW64%3B+rv%3A56.0%29+Gecko%2F20100101+Firefox%2F56.0&SHIPTOCITY=Ankara&CUSTOMERBIRTHDAY=19-04-1969&AMOUNT=18.40&CARDPAN=4532513386094198&CUSTOMERPHONE=%2B903120000001&BILLTOPHONE=%2B903120000001&MERCHANTUSER=***&BILLTOPOSTALCODE=06000&SHIPTOPHONE=%2B903120000001&MERCHANT=***&NAMEONCARD=Aydonat+Ayd%C4%B1nlar&CUSTOMERNAME=Aydonat+Ayd%C4%B1nlar&ACTION=SALE&SHIPTOADDRESSLINE=Plaza+%C3%87%C3%96%C4%B0%C5%9E%C3%9C%C4%9EI%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&CUSTOMEREMAIL=mghUzjPn%40email.com&CURRENCY=TRY&MERCHANTPAYMENTID=a95fb71a-fbe5-400e-abdb-89855327d1e3&MERCHANTPASSWORD=***&SHIPTOCOUNTRY=T%C3%BCrkiye&CUSTOMER=bbe3368d-9103-485c-bf77-db21cb646469&BILLTOCOUNTRY=T%C3%BCrkiye&
 > Response Data: 
{
  "action" : "SALE",
  "merchant" : "***",
  "amount" : 18.40,
  "currency" : "TRY",
  "apiMerchantId" : "100658785",
  "paymentSystem" : "My Sanalakpos Account (Test)",
  "paymentSystemType" : "AKBANK",
  "paymentSystemEftCode" : "0046",
  "pgTranDate" : "06/10/2017 15:54:56.400",
  "merchantPaymentId" : "a95fb71a-fbe5-400e-abdb-89855327d1e3",
  "pgTranId" : "17279P48F01021008",
  "pgTranRefId" : "727915041622",
  "pgOrderId" : "***-a95fb71a-fbe5-400e-abdb-89855327d1e3",
  "responseCode" : "00",
  "responseMsg" : "Approved",
  "tmxSessionQueryOutput" : "error_detail=service_type&request_duration=0&request_id=2753A506%2d93C1%2d48BE%2dAF00%2dB97498EFC0C4&request_result=fail_invalid_parameter"
}

 > ParatikaClient.sale() operation is finished in 610ms.
 > Sale operation is SUCCESSFUL.


A sample PREAUTH operation is started.
 > Request URL: https://test.paratika.com.tr/paratika/api/v2
 > Request Data: SHIPTOPOSTALCODE=06000&BILLTOADDRESSLINE=%C3%87%C3%B6i%C5%9F%C3%BC%C4%9F%C4%B1+Plaza%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&CARDEXPIRY=12.2030&CUSTOMERIP=127.0.0.1&BILLTOCITY=Ankara&CARDCVV=000&CUSTOMERUSERAGENT=Mozilla%2F5.0+%28Windows+NT+6.1%3B+WOW64%3B+rv%3A56.0%29+Gecko%2F20100101+Firefox%2F56.0&SHIPTOCITY=Ankara&CUSTOMERBIRTHDAY=19-04-1969&AMOUNT=14.40&CARDPAN=4532513386094198&CUSTOMERPHONE=%2B903120000001&BILLTOPHONE=%2B903120000001&MERCHANTUSER=***&BILLTOPOSTALCODE=06000&SHIPTOPHONE=%2B903120000001&MERCHANT=***&NAMEONCARD=Aydonat+Ayd%C4%B1nlar&CUSTOMERNAME=Aydonat+Ayd%C4%B1nlar&ACTION=PREAUTH&SHIPTOADDRESSLINE=Plaza+%C3%87%C3%96%C4%B0%C5%9E%C3%9C%C4%9EI%2C+Ostim+No%3A83%2F9%2C+Yenimahalle&CUSTOMEREMAIL=mghUzjPn%40email.com&CURRENCY=TRY&MERCHANTPAYMENTID=6e064367-03c5-4806-8857-cb5200ff0d0f&MERCHANTPASSWORD=***&SHIPTOCOUNTRY=T%C3%BCrkiye&CUSTOMER=f092eeab-3863-4b80-8935-609ee2260c97&BILLTOCOUNTRY=T%C3%BCrkiye&
 > Response Data: 
{
  "action" : "PREAUTH",
  "merchant" : "***",
  "amount" : 14.40,
  "currency" : "TRY",
  "apiMerchantId" : "100658785",
  "paymentSystem" : "My Sanalakpos Account (Test)",
  "paymentSystemType" : "AKBANK",
  "paymentSystemEftCode" : "0046",
  "pgTranDate" : "06/10/2017 15:55:10.391",
  "merchantPaymentId" : "6e064367-03c5-4806-8857-cb5200ff0d0f",
  "pgTranId" : "17279P5MD01021011",
  "pgTranRefId" : "727915041623",
  "pgOrderId" : "***-6e064367-03c5-4806-8857-cb5200ff0d0f",
  "responseCode" : "00",
  "responseMsg" : "Approved",
  "tmxSessionQueryOutput" : "error_detail=service_type&request_duration=0&request_id=2BB6539E%2d9A38%2d4DA0%2dA44E%2d4A8B68D0BA01&request_result=fail_invalid_parameter"
}

 > ParatikaClient.preauth() operation is finished in 820ms.
 > Preauth operation is SUCCESSFUL.
```

### Contribution guidelines ###

If you want to help us to improve these sample project, please share your pull requests with use with test classes and helper documentation. We welcome all kind of contribution.

### Who do I talk to? ###

For any request or feedback please contact to Paratika support team via email to destek (at) paratika.com.tr. 
