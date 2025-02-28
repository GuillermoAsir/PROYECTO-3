<?php 
declare(strict_types=1);

class ApiClient{

    private string $api_url;
    
    public function __construct(string $api_url){
            $this->api_url = $api_url;
    
    }    
    public function fetchData(){

        $ch = curl_init();
        curl_setopt( $ch, CURLOPT_URL, $this->api_url);
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);

        curl_close($ch);

        return json_decode($response, true);


   }    
}




?>