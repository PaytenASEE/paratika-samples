<?php
    class ParatikaUtil {
        
        public function convertToRequestData($map) {
            $post_string = "";
            foreach ($map as $key => $value) {
                $post_string .= "$key=" . urlencode($value) . "&";
            }
            $post_string = rtrim($post_string, "& ");
            return $post_string;
        }
        
        public function prepareSessionTokenParameters() {
            // Initialize Parameters Map
            $parametersMap = array();
            $parametersMap['ACTION'] = 'SESSIONTOKEN';
            $parametersMap['MERCHANTPAYMENTID'] = uniqid('MPID-', true);
            $parametersMap['AMOUNT'] = '1200';
            $parametersMap['CURRENCY'] = 'TRY';
            $parametersMap['SESSIONTYPE'] = 'PAYMENTSESSION';
            $parametersMap['RETURNURL'] = 'https://test.paratika.com.tr/paratika/index.jsp';
            $parametersMap = $this->addMerchantAuthParams($parametersMap);
            $parametersMap = $this->addCardAndCustomerParams($parametersMap);
            $parametersMap = $this->addBillToAndShipToParams($parametersMap);
            $parametersMap = $this->addOrderItemsParams($parametersMap);
            return $parametersMap;
        }
        
        public function preparePrimaryTrxParameters($action) {
            $parametersMap["ACTION"] = $action;
            $parametersMap["AMOUNT"] = "1" . rand(0, 9) . "." . rand(0, 9) . rand(0, 9);
            $parametersMap['CURRENCY'] = 'TRY';
            $parametersMap['MERCHANTPAYMENTID'] = uniqid('MPID-', true);
            $parametersMap = $this->addMerchantAuthParams($parametersMap);
            $parametersMap = $this->addCardAndCustomerParams($parametersMap);
            $parametersMap = $this->addBillToAndShipToParams($parametersMap);
            return $parametersMap;
        }
        
        public function prepareQuerySessionParameters($sessionToken) {
            $parametersMap = array();
            $parametersMap['ACTION'] = 'QUERYSESSION';
            $parametersMap['SESSIONTOKEN'] = $sessionToken;
            return $parametersMap;
        }
        
        public function checkResponse($responseJson, $action) {
            $response = json_decode($responseJson, true);
            if($response['responseCode'] === '00' && $response['responseMsg'] === 'Approved') {
                echo '>>> ' . $action . ' operation is SUCCESSFUL.';
            } else {
                echo '>>> ' . $action . ' operation is FAILED, please check the error codes.' . PHP_EOL;
                echo '   Error Code : ' . $response['errorCode'];
                echo ';   Response Message : ' . $response['responseMsg'];
                if(array_key_exists('errorMsg', $response)) {
                    echo ';   Error Message : ' . $response['errorMsg'];
                }
            }
            echo ' <<<' . PHP_EOL;
        }
        
        private function addMerchantAuthParams($parametersMap) {
            $parametersMap['MERCHANT'] = '10000000';
            $parametersMap['MERCHANTUSER'] = 'apiuser@testmerchant.com';
            $parametersMap['MERCHANTPASSWORD'] = 'Pluto321`';
            return $parametersMap;
        }
        
        private function addCardAndCustomerParams($parametersMap) {
            $parametersMap['CUSTOMER'] = uniqid('MPID-', true);
            $parametersMap['CUSTOMERNAME'] = 'Aydonat Aydınlar';
            $parametersMap['CUSTOMEREMAIL'] = 'mghUzjPn@email.com';
            $parametersMap['CUSTOMERIP'] = '127.0.0.1';
            $parametersMap['CUSTOMERPHONE'] = '+903120000011';
            $parametersMap['CUSTOMERBIRTHDAY'] = '19-04-1969';
            $parametersMap['CUSTOMERUSERAGENT'] = 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0';
            $parametersMap['NAMEONCARD'] = 'Aydonat Aydınlar';
            $parametersMap['CARDPAN'] = '4022774022774026';
            $parametersMap['CARDEXPIRY'] = '12.2030';
            $parametersMap['CARDCVV'] = '000';
            return $parametersMap;
        }
        
        private function addBillToAndShipToParams($parametersMap) {
            $parametersMap['BILLTOADDRESSLINE'] = 'Çöişüğı Plaza, Ostim No:83/9, Yenimahalle';
            $parametersMap['BILLTOCITY'] = 'Ankara';
            $parametersMap['BILLTOCOUNTRY'] = 'Türkiye';
            $parametersMap['BILLTOPOSTALCODE'] = '06000';
            $parametersMap['BILLTOPHONE'] = '+903120000001';
            $parametersMap['SHIPTOADDRESSLINE'] = 'Plaza ÇÖİŞÜĞI, Ostim No:83/9, Yenimahalle';
            $parametersMap['SHIPTOCITY'] = 'Ankara';
            $parametersMap['SHIPTOCOUNTRY'] = 'Türkiye';
            $parametersMap['SHIPTOPOSTALCODE'] = '06000';
            $parametersMap['SHIPTOPHONE'] = '+903120000001';
            return $parametersMap;
        }
        
        /*
         *  Here we are adding two order items as parameters.
         *  Note that the items amount sum should be equal to the amount specified for the action
         */ 
        private function addOrderItemsParams($parametersMap) {
            // first item
            $item = array();
            $item["code"] = "T00D3AITCC";
            $item["name"] = "Galaxy S8+";
            $item["quantity"] = "1";
            $item["description"] = "The Samsung Galaxy S8 is Android smartphone produced by Samsung Electronics as part of the Samsung Galaxy S series.";
            $item["amount"] = "1000";
            // second item
            $item2 = array();
            $item2["code"] = "T00F2IONA";
            $item2["name"] = "HP - 14\" Chromebook";
            $item2["quantity"] = "1";
            $item2["description"] = "Intel Celeron - 4GB Memory - 16GB eMMC Flash Memory - Silver.";
            $item2["amount"] = "200";
            // put two items inside another array
            $oItems = array($item, $item2);
            // convert to json format
            $items = json_encode($oItems);
            // add to parametersMap by applying urlencode to items first
            $parametersMap['ORDERITEMS'] = urlencode($items);
            return $parametersMap;
        }
    }
?>