### Bu proje ne için? ###

C # dili için Paratika istemci örnekleri tüm geliştiriciler için basit ve serin bir başlangıç sağlamak için yazılmıştır. Sürüm 2.0 veya daha üstü olan herhangi bir .NET ortamını destekler.

### Bu kodları nasıl kullanabilirim? ###

Windows, MacOS veya Linux için .NET Core SDK'yi yükleyin.

Bir düzenleyici alın Visual Studio, Windows'ta .NET uygulamaları geliştirmek için tam özellikli bir entegre geliştirme ortamı (IDE) 'dir.

1. Kodları ortamınıza klonlayın.
1. Projeyi IDE'nizde açın.
1. KOdu yapılandırın. 
1. App.config dosyasında URL, API parametrelerini ve bu API eylemleri için gerekli olan diğer parametreleri kontrol edebilirsiniz.
1. IDE'nizde başarılı bir klonlama ve kurulumdan sonra projeyi başlatmak yeterlidir ve bu örnek çıktıları konsolda üretmelidir. 

(*)

### Katkı kuralları ###

Bu örnek projeyi iyileştirmemize yardım etmek isterseniz, lütfen çekme taleplerinizi test sınıfları ve yardımcı belgelerle birlikte paylaşın. Her türlü katkıyı memnuniyetle karşılıyoruz.

### Kiminle konuşabilirim? ###

Herhangi bir talep veya geribildirim için destek (at) paratika.com.tr adresine e-posta ile Paratika destek ekibine başvurun.

---

### What is this repository for? ###

Paratika client samples for C# language is written to provide a simple and cool starting for all developers. It supports any .NET environment with version 2.0 or higher.

### How do I use these codes? ###

Install the .NET Core SDK for Windows, macOS, or Linux.

Get an editor Visual Studio is a fully-featured integrated development environment (IDE) for developing .NET apps on Windows.

1. Clone the repository
1. Import project in your IDE. 
1. Build solution there shouldn't be any error. 
1. In App.config file you can check url, api parameters and other params that are needed for these api actions. 
1. After a successful cloning and setting-up in your IDE, just start the project and it should produce these sample outputs in console. 

```
		A sample SESSIONTOKEN operation is started.
		> Request URL: https://test.paratika.com.tr/paratika/api/v2
		> Request Data: ACTION=SESSIONTOKEN&MERCHANTPAYMENTID=741b3b6e-67b2-4656-a4da-e6bde5626b6e&AMOUNT=1000&CURRENCY=TRY&SESSIONTYPE=PAYMENTSESSION&RETURNURL=https%3a%2f%2ftest.paratika.com.tr%2fparatika%2findex.jsp&ORDERITE`MS=%255b%250d%250a%2b%2b%257b%250d%250a%2b%2b%2b%2b%2522code%2522%253a%2b%2522T00D3AITCC%2522%252c%250d%250a%2b%2b%2b%2b%2522name%2522%253a%2b%2522Galaxy%2bS8%252b%2522%252c%250d%250a%2b%2b%2b%2b%2522qua`ntity%2522%253a%2b1%252c%250d%250a%2b%2b%2b%2b%2522description%2522%253a%2b%2522The%2bSamsung%2bGalaxy%2bS8%2bis%2bAndroid%2bsmartphone%2bproduced%2bby%2bSamsung%2bElectronics%2bas%2bpart%2bof%2bthe%2bSa`msung%2bGalaxy%2bS%2bseries.%2522%252c%250d%250a%2b%2b%2b%2b%2522amount%2522%253a%2b1000%250d%250a%2b%2b%257d%250d%250a%255d&EXTRA=%257b%250d%250a%2b%2b%2522IntegrationModel%2522%253a%2b%2522API%2522%252`c%250d%250a%2b%2b%2522AlwaysSaveCard%2522%253a%2b%2522true%2522%250d%250a%257d&MERCHANT=10000000&MERCHANTUSER=apiuser%40testmerchant.com&MERCHANTPASSWORD=Pluto321%60&CUSTOMER=9dd42794-a067-441c-8b5b-5c71`282ea8cb&CUSTOMERNAME=Aydonat+Ayd%c4%b1nlar&CUSTOMEREMAIL=mghUzjPn%40email.com&CUSTOMERIP=127.0.0.1&CUSTOMERPHONE=%2b903120000011&CUSTOMERBIRTHDAY=19-04-1969&CUSTOMERUSERAGENT=Mozilla%2f5.0+(Windows+NT+6`.1%3b+WOW64%3b+rv%3a56.0)+Gecko%2f20100101+Firefox%2f56.0&NAMEONCARD=Aydonat+Ayd%c4%b1nlar&CARDPAN=5456165456165454&CARDEXPIRY=12.2030&CARDCVV=000&BILLTOADDRESSLINE=%c3%87%c3%b6i%c5%9f%c3%bc%c4%9f%c4%b1+`Plaza%2c+Ostim+No%3a83%2f9%2c+Yenimahalle&BILLTOCITY=Ankara&BILLTOCOUNTRY=T%c3%bcrkiye&BILLTOPOSTALCODE=06000&BILLTOPHONE=%2b903120000001&SHIPTOADDRESSLINE=Plaza+%c3%87%c3%96%c4%b0%c5%9e%c3%9c%c4%9eI%2c+`Ostim+No%3a83%2f9%2c+Yenimahalle&SHIPTOCITY=Ankara&SHIPTOCOUNTRY=T%c3%bcrkiye&SHIPTOPOSTALCODE=06000&SHIPTOPHONE=%2b903120000001&
		> Response Data: \n {
		"sessionToken" : "UQRSX6GQPYV5PA2D3X6NDIIVBCVRO7XKL4K6DHOST2ZNQDCP",
		"responseCode" : "00",
		"responseMsg" : "Approved"
		}
		> ParatikaClient.sessionToken() operation is finished in 4098 ms.
		> SESSIONTOKEN operation is SUCCESSFUL.
		A sample SALE operation is started.
		> Request URL: https://test.paratika.com.tr/paratika/api/v2
		> Request Data: ACTION=SALE&AMOUNT=10.03&CURRENCY=TRY&MERCHANTPAYMENTID=352581e8-ead3-412b-b1d2-9d0ee278a958&MERCHANT=10000000&MERCHANTUSER=apiuser%40testmerchant.com&MERCHANTPASSWORD=Pluto321%60&CUSTOMER=cfaad755-61ff-`43a1-a7b6-e9af1626c3ce&CUSTOMERNAME=Aydonat+Ayd%c4%b1nlar&CUSTOMEREMAIL=mghUzjPn%40email.com&CUSTOMERIP=127.0.0.1&CUSTOMERPHONE=%2b903120000011&CUSTOMERBIRTHDAY=19-04-1969&CUSTOMERUSERAGENT=Mozilla%2f5.0`+(Windows+NT+6.1%3b+WOW64%3b+rv%3a56.0)+Gecko%2f20100101+Firefox%2f56.0&NAMEONCARD=Aydonat+Ayd%c4%b1nlar&CARDPAN=5456165456165454&CARDEXPIRY=12.2030&CARDCVV=000&BILLTOADDRESSLINE=%c3%87%c3%b6i%c5%9f%c3%b`c%c4%9f%c4%b1+Plaza%2c+Ostim+No%3a83%2f9%2c+Yenimahalle&BILLTOCITY=Ankara&BILLTOCOUNTRY=T%c3%bcrkiye&BILLTOPOSTALCODE=06000&BILLTOPHONE=%2b903120000001&SHIPTOADDRESSLINE=Plaza+%c3%87%c3%96%c4%b0%c5%9e%c3`%9c%c4%9eI%2c+Ostim+No%3a83%2f9%2c+Yenimahalle&SHIPTOCITY=Ankara&SHIPTOCOUNTRY=T%c3%bcrkiye&SHIPTOPOSTALCODE=06000&SHIPTOPHONE=%2b903120000001&
		> Response Data: \n {
		"action" : "SALE",
		"merchant" : "10000000",
		"amount" : 10.03,
		"currency" : "TRY",
		"apiMerchantId" : "100658785",
		"paymentSystem" : "My Sanalakpos Account (Test)",
		"paymentSystemType" : "AKBANK",
		"paymentSystemEftCode" : "0046",
		"pgTranDate" : "20171023 12:09:37",
		"merchantPaymentId" : "352581e8-ead3-412b-b1d2-9d0ee278a958",
		"pgTranId" : "17296MJlC01011506",
		"pgTranRefId" : "729612044405",
		"pgOrderId" : "10000000-352581e8-ead3-412b-b1d2-9d0ee278a958",
		"responseCode" : "00",
		"responseMsg" : "Approved",
		"tmxSessionQueryOutput" : "error_detail=service_type&request_duration=0&request_id=D5F9E35E%2dDF65%2d4806%2dA560%2dA5BE874A350A&request_result=fail_invalid_parameter"
		}
		> ParatikaClient.sale() operation is finished in 3002ms.
		> SALE operation is SUCCESSFUL.
		A sample PREAUTH operation is started.
		> Request URL: https://test.paratika.com.tr/paratika/api/v2
		> Request Data: ACTION=PREAUTH&AMOUNT=10.14&CURRENCY=TRY&MERCHANTPAYMENTID=2f775f66-bc77-4251-818f-dfaa55cc49a7&MERCHANT=10000000&MERCHANTUSER=apiuser%40testmerchant.com&MERCHANTPASSWORD=Pluto321%60&CUSTOMER=09c4b95e-6f`aa-428d-a5a9-5f8db977df00&CUSTOMERNAME=Aydonat+Ayd%c4%b1nlar&CUSTOMEREMAIL=mghUzjPn%40email.com&CUSTOMERIP=127.0.0.1&CUSTOMERPHONE=%2b903120000011&CUSTOMERBIRTHDAY=19-04-1969&CUSTOMERUSERAGENT=Mozilla%2f`5.0+(Windows+NT+6.1%3b+WOW64%3b+rv%3a56.0)+Gecko%2f20100101+Firefox%2f56.0&NAMEONCARD=Aydonat+Ayd%c4%b1nlar&CARDPAN=5456165456165454&CARDEXPIRY=12.2030&CARDCVV=000&BILLTOADDRESSLINE=%c3%87%c3%b6i%c5%9f%c`3%bc%c4%9f%c4%b1+Plaza%2c+Ostim+No%3a83%2f9%2c+Yenimahalle&BILLTOCITY=Ankara&BILLTOCOUNTRY=T%c3%bcrkiye&BILLTOPOSTALCODE=06000&BILLTOPHONE=%2b903120000001&SHIPTOADDRESSLINE=Plaza+%c3%87%c3%96%c4%b0%c5%9e`%c3%9c%c4%9eI%2c+Ostim+No%3a83%2f9%2c+Yenimahalle&SHIPTOCITY=Ankara&SHIPTOCOUNTRY=T%c3%bcrkiye&SHIPTOPOSTALCODE=06000&SHIPTOPHONE=%2b903120000001&
		> Response Data: \n {
		"action" : "PREAUTH",
		"merchant" : "10000000",
		"amount" : 10.14,
		"currency" : "TRY",
		"apiMerchantId" : "100658785",
		"paymentSystem" : "My Sanalakpos Account (Test)",
		"paymentSystemType" : "AKBANK",
		"paymentSystemEftCode" : "0046",
		"pgTranDate" : "20171023 12:09:39",
		"merchantPaymentId" : "2f775f66-bc77-4251-818f-dfaa55cc49a7",
		"pgTranId" : "17296MJnC01011512",
		"pgTranRefId" : "729612044407",
		"pgOrderId" : "10000000-2f775f66-bc77-4251-818f-dfaa55cc49a7",
		"responseCode" : "00",
		"responseMsg" : "Approved",
		"tmxSessionQueryOutput" : "error_detail=service_type&request_duration=0&request_id=BD26463F%2dC899%2d46C9%2d9BE1%2d2D450787B054&request_result=fail_invalid_parameter"
		}
		> ParatikaClient.preauth() operation is finished in 2876ms.
		> PREAUTH operation is SUCCESSFUL.
		A sample SESSIONTOKEN operation is started.
		> Request URL: https://test.paratika.com.tr/paratika/api/v2
		> Request Data: ACTION=SESSIONTOKEN&MERCHANTPAYMENTID=545ce4c6-e535-44fc-8be5-c0c3b03ac02f&AMOUNT=1000&CURRENCY=TRY&SESSIONTYPE=PAYMENTSESSION&RETURNURL=https%3a%2f%2ftest.paratika.com.tr%2fparatika%2findex.jsp&ORDERITE`MS=%255b%250d%250a%2b%2b%257b%250d%250a%2b%2b%2b%2b%2522code%2522%253a%2b%2522T00D3AITCC%2522%252c%250d%250a%2b%2b%2b%2b%2522name%2522%253a%2b%2522Galaxy%2bS8%252b%2522%252c%250d%250a%2b%2b%2b%2b%2522qua`ntity%2522%253a%2b1%252c%250d%250a%2b%2b%2b%2b%2522description%2522%253a%2b%2522The%2bSamsung%2bGalaxy%2bS8%2bis%2bAndroid%2bsmartphone%2bproduced%2bby%2bSamsung%2bElectronics%2bas%2bpart%2bof%2bthe%2bSa`msung%2bGalaxy%2bS%2bseries.%2522%252c%250d%250a%2b%2b%2b%2b%2522amount%2522%253a%2b1000%250d%250a%2b%2b%257d%250d%250a%255d&EXTRA=%257b%250d%250a%2b%2b%2522IntegrationModel%2522%253a%2b%2522API%2522%252`c%250d%250a%2b%2b%2522AlwaysSaveCard%2522%253a%2b%2522true%2522%250d%250a%257d&MERCHANT=10000000&MERCHANTUSER=apiuser%40testmerchant.com&MERCHANTPASSWORD=Pluto321%60&CUSTOMER=05b8c669-c521-4768-8097-edbb`52c46395&CUSTOMERNAME=Aydonat+Ayd%c4%b1nlar&CUSTOMEREMAIL=mghUzjPn%40email.com&CUSTOMERIP=127.0.0.1&CUSTOMERPHONE=%2b903120000011&CUSTOMERBIRTHDAY=19-04-1969&CUSTOMERUSERAGENT=Mozilla%2f5.0+(Windows+NT+6`.1%3b+WOW64%3b+rv%3a56.0)+Gecko%2f20100101+Firefox%2f56.0&NAMEONCARD=Aydonat+Ayd%c4%b1nlar&CARDPAN=5456165456165454&CARDEXPIRY=12.2030&CARDCVV=000&BILLTOADDRESSLINE=%c3%87%c3%b6i%c5%9f%c3%bc%c4%9f%c4%b1+`Plaza%2c+Ostim+No%3a83%2f9%2c+Yenimahalle&BILLTOCITY=Ankara&BILLTOCOUNTRY=T%c3%bcrkiye&BILLTOPOSTALCODE=06000&BILLTOPHONE=%2b903120000001&SHIPTOADDRESSLINE=Plaza+%c3%87%c3%96%c4%b0%c5%9e%c3%9c%c4%9eI%2c+`Ostim+No%3a83%2f9%2c+Yenimahalle&SHIPTOCITY=Ankara&SHIPTOCOUNTRY=T%c3%bcrkiye&SHIPTOPOSTALCODE=06000&SHIPTOPHONE=%2b903120000001&
		> Response Data: \n {
		"sessionToken" : "ZRPKFG2NPHNGULO2XGNM52UCEVNNAHUO275W7HZX6Q2QGWWT",
		"responseCode" : "00",
		"responseMsg" : "Approved"
		}
		> ParatikaClient.sessionToken() operation is finished in 1122 ms.
		> SESSIONTOKEN operation is SUCCESSFUL.
		A sample QUERYSESSION operation is started.
		> Request URL: https://test.paratika.com.tr/paratika/api/v2
		> Request Data: ACTION=QUERYSESSION&SESSIONTOKEN=ZRPKFG2NPHNGULO2XGNM52UCEVNNAHUO275W7HZX6Q2QGWWT&
		> Response Data: \n {
		"responseCode" : "00",
		"responseMsg" : "Approved",
		"session" : {
		"token" : "ZRPKFG2NPHNGULO2XGNM52UCEVNNAHUO275W7HZX6Q2QGWWT",
		"apiAction" : "SESSIONTOKEN",
		"merchantPaymentId" : "545ce4c6-e535-44fc-8be5-c0c3b03ac02f",
		"firstAmount" : 1000,
		"amount" : 1000,
		"currency" : "TRY",
		"returnUrl" : "https://test.paratika.com.tr/paratika/index.jsp",
		"language" : "tr",
		"redirectWaitingTime" : 0,
		"itemTotalAmount" : 1000,
		"shippingCost" : 0,
		"shippingContact" : {
		"id" : null,
		"name" : null,
		"address" : "Plaza ÇÖISÜGI, Ostim No:83/9, Yenimahalle",
		"city" : "Ankara",
		"country" : "Türkiye",
		"state" : null,
		"postalCode" : "06000",
		"phone" : "+903120000001"
		},
		"billingContact" : {
		"id" : null,
		"name" : null,
		"address" : "Çöisügi Plaza, Ostim No:83/9, Yenimahalle",
		"city" : "Ankara",
		"country" : "Türkiye",
		"state" : null,
		"postalCode" : "06000",
		"phone" : "+903120000001"
		},
		"fastShipping" : false,
		"extra" : "{\r\n  \"IntegrationModel\": \"API\",\r\n  \"AlwaysSaveCard\": \"true\"\r\n}"
		},
		"merchant" : {
		"businessId" : "10000000",
		"name" : "MSU Test Merchant",
		"tradingName" : "Test Merchant",
		"address" : "ITÜ Ayazaga Kampüsü Teknokent ARI 1 Binasi No: 12 34469 Maslak",
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
		"id" : "05b8c669-c521-4768-8097-edbb52c46395",
		"email" : "mghUzjPn@email.com",
		"phone" : "+903120000011",
		"name" : "Aydonat Aydinlar",
		"birthday" : "1969-04-19",
		"lastLogin" : "23.10.2017 09:09"
		},
		"orderItems" : [ {
		"code" : "T00D3AITCC",
		"name" : "Galaxy S8+",
		"description" : "The Samsung Galaxy S8 is Android smartphone produced by Samsung Electronics as part of the Samsung Galaxy S series.",
		"amount" : 1000,
		"quantity" : 1
		} ]
		}
		> ParatikaClient.querySession() operation is finished in 2829ms.
		> QUERYSESSION operation is SUCCESSFUL.

```

### Contribution guidelines ###

If you want to help us to improve these sample project, please share your pull requests with use with test classes and helper documentation. We welcome all kind of contribution.

### Who do I talk to? ###

For any request or feedback please contact to Paratika support team via email to destek (at) paratika.com.tr. 
