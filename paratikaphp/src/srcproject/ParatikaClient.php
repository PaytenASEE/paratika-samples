<?php
    require_once('ParatikaService.php');
    require_once('ParatikaUtil.php');
    
    $ParatikaClient = new ParatikaClient();
    $ParatikaClient->sessionToken();
    $ParatikaClient->querySession();
    $ParatikaClient->sale();
    $ParatikaClient->preauth();
    
    class ParatikaClient {
        private $ParatikaUtil;
        private $ParatikaService;
        const REQUEST_URL = "> Request URL: ";
        const REQUEST_DATA = "> Request Data: ";
        const RESPONSE_DATA = "> Response Data: ";
        
        /**
         * Test environment API service URL
         * 
         */
        const URL = "https://test.paratika.com.tr/paratika/api/v2";

        public function __construct() {
            $this->ParatikaUtil = new ParatikaUtil();
            $this->ParatikaService = new ParatikaService();
        }
        
        /**
         * Sample API sessionToken operation to the Paratika API
         *
         */
        public function sessionToken() {
            echo '>> A sample SESSIONTOKEN operation is started.' . PHP_EOL;
            $time_started = round(microtime(true) * 1000);
            $parametersMap = $this->ParatikaUtil->prepareSessionTokenParameters();
            $requestData = $this->ParatikaUtil->convertToRequestData($parametersMap);
            echo self::REQUEST_URL . self::URL . PHP_EOL;
            echo self::REQUEST_DATA . $requestData . PHP_EOL;
            
            $request = curl_init(); // create a new cURL resource
            $this->ParatikaService->getConnection($request, self::URL);
            $post_response = $this->ParatikaService->getResponse($request, $requestData);
            
            echo self::RESPONSE_DATA . $post_response . PHP_EOL;
            $this->ParatikaUtil->checkResponse($post_response, 'SESSIONTOKEN');
            echo '>> ParatikaClient.sessionToken() operation is finished in ' . (round(microtime(true) * 1000) - $time_started) . 'ms.' . PHP_EOL;
            return $post_response;
        }
        
        /**
         * Sample API query session operation to the Paratika API in order to see orderItems and extra parameters
         *
         */
        public function querySession() {
            $doSessionToken = self::sessionToken();
            $sessionTokenAsArray = json_decode($doSessionToken, true);
            $sessionToken = $sessionTokenAsArray['sessionToken'];
            echo '>> A sample QUERYSESSION operation is started.' . PHP_EOL;
            $time_started = round(microtime(true) * 1000);
            $parametersMap = $this->ParatikaUtil->prepareQuerySessionParameters($sessionToken);
            $requestData = $this->ParatikaUtil->convertToRequestData($parametersMap);
            echo self::REQUEST_URL . self::URL . PHP_EOL;
            echo self::REQUEST_DATA . $requestData . PHP_EOL;
            
            $request = curl_init(); // create a new cURL resource
            $this->ParatikaService->getConnection($request, self::URL);
            $post_response = $this->ParatikaService->getResponse($request, $requestData);
            
            echo self::RESPONSE_DATA . $post_response . PHP_EOL;
            $this->ParatikaUtil->checkResponse($post_response, 'QUERYSESSION');
            echo '>> ParatikaClient.querySession() operation is finished in ' . (round(microtime(true) * 1000) - $time_started) . 'ms.' . PHP_EOL;
            return $post_response;
        }
        
        /**
         * Sample API sale operation to the Paratika API
         *
         */
        public function sale() {
            echo '>> A sample SALE operation is started.' . PHP_EOL;
            $action = 'SALE';
            $time_started = round(microtime(true) * 1000);
            $parametersMap = $this->ParatikaUtil->preparePrimaryTrxParameters($action);
            $requestData = $this->ParatikaUtil->convertToRequestData($parametersMap);
            echo self::REQUEST_URL . self::URL . PHP_EOL;
            echo self::REQUEST_DATA . $requestData . PHP_EOL;
            
            $request = curl_init(); // create a new cURL resource
            $this->ParatikaService->getConnection($request, self::URL);
            $post_response = $this->ParatikaService->getResponse($request, $requestData);
            
            echo self::RESPONSE_DATA . $post_response . PHP_EOL;
            $this->ParatikaUtil->checkResponse($post_response, $action);
            echo '>> ParatikaClient.sale() operation is finished in ' . (round(microtime(true) * 1000) - $time_started) . 'ms.' . PHP_EOL;
            return $post_response;
        }
        
        /**
         * Sample API preauth operation to the Paratika API
         *
         */
        public function preauth() {
            echo '>> A sample PREAUTH operation is started.' . PHP_EOL;
            $action = 'PREAUTH';
            $time_started = round(microtime(true) * 1000);
            $parametersMap = $this->ParatikaUtil->preparePrimaryTrxParameters($action);
            $requestData = $this->ParatikaUtil->convertToRequestData($parametersMap);
            echo self::REQUEST_URL . self::URL . PHP_EOL;
            echo self::REQUEST_DATA . $requestData . PHP_EOL;
            
            $request = curl_init(); // create a new cURL resource
            $this->ParatikaService->getConnection($request, self::URL);
            $post_response = $this->ParatikaService->getResponse($request, $requestData);
            
            echo self::RESPONSE_DATA . $post_response . PHP_EOL;
            $this->ParatikaUtil->checkResponse($post_response, $action);
            echo '>> ParatikaClient.preauth() operation is finished in ' . (round(microtime(true) * 1000) - $time_started) . 'ms.' . PHP_EOL;
            return $post_response;
        }
    }
?>