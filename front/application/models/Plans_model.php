<?php
class Plans_model extends CI_Model {

  public function __construct(){
      parent::__construct();
  }

  public function fetch_plans(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://localhost/origo/back/api/fetch_plans",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_HTTPHEADER => array(
        "Cookie: ci_session=gs7lhrhbm8o39f2ca3jgp9c3ljvgo7ns"
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    return $plans = json_decode($response);
  }
}
