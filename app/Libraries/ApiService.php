<?php 

namespace App\Libraries;

Class ApiService {

    protected $api_url;
    protected $account_url;

    public function __construct() {
        $this->api_url = env('API_URL');
        $this->account_url = env('ACCOUNT_URL');
    }


    public function auth(array $params) {

        $url = $this->api_url . 'services/oauth2/token';
        return $this->makeRequest('POST', $url, $params);  

    }


    public function getSoInvoice($params, $token) {
        
        $url = $this->account_url . 'services/apexrest/FTR01/SOInv';

        $headers = [
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        ];

        return $this->makeRequest('GET', $url, $params, $headers);
    }

    public function getSoReturn($params, $token) {
        
        $url = $this->account_url . 'services/apexrest/FTR01/SOReturn';

        $headers = [
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json'
        ];

        return $this->makeRequest('GET', $url, $params, $headers);
        
    }


    public function makeRequest($method, $url, $params = [], $headers = []) {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

        if($method !== 'GET') {
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        }elseif(!empty($params)) {
            $url .= '?' . http_build_query($params);
            curl_setopt($ch, CURLOPT_URL, $url);
        }

        if(!empty($headers)) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }
        

        $result = curl_exec($ch);

        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);
        
        return $result;

        


    }



 
}

