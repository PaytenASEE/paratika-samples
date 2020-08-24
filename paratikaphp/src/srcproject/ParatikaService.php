<?php
    class ParatikaService {
        /*
         * This function uses the CURL library for php to establish a connection
         * 
         */
        public function getConnection($request, $url) {
            curl_setopt($request, CURLOPT_URL, $url); // initiate curl object
            curl_setopt($request, CURLOPT_HEADER, false); // exclude header info from response
            curl_setopt($request, CURLOPT_RETURNTRANSFER, true); // return the response as a string when executed
            curl_setopt($request, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded', "Expect:"));
            curl_setopt($request, CURLOPT_SSL_VERIFYPEER, FALSE); // stop cURL from verifying peer's certificate
        }
        
        /*
         * This function is used to submit the post request and record the response
         * 
         */ 
        public function getResponse($request, $requestData) {
            curl_setopt($request, CURLOPT_POSTFIELDS, $requestData); // the data to post in HTTP post operation
            $post_response = curl_exec($request); // execute the given cURL session
            curl_close($request); // close the cURL session and free all resources
            return $post_response;
        }
    }
?>