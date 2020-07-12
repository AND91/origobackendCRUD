<?php
class Clients_model extends CI_Model {

  public function __construct(){
      parent::__construct();
  }

  public function fetch_clients(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://localhost/origo/back/api/fetch_clients",
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
    return $clients = json_decode($response);
  }

  public function fetch_client($id){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://localhost/origo/back/api/fetch_client?id=$id",
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
    return $client = json_decode($response);
  }


  public function update_client($posts){
    $params = array(
      'id' => $posts['id'],
      'nome' => $posts['nome'],
      'email' => $posts['email'],
      'telefone' => $posts['telefone'],
      'estado' => $posts['estado'],
      'cidade' => $posts['cidade'],
      'nascimento' => $posts['nascimento'],
    );
    $curl = curl_init();

    $data = http_build_query($params);

    $url = "http://localhost/origo/back/api/update_client?".$data;

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_HTTPHEADER => array(
        "Cookie: ci_session=cel9v34kkbt76nqhmd9h173s7gs9ut3j"
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
  }

  public function insert_client($posts){
    $params = array(
      'nome' => $posts['nome'],
      'email' => $posts['email'],
      'telefone' => $posts['telefone'],
      'estado' => $posts['estado'],
      'cidade' => $posts['cidade'],
      'nascimento' => $posts['nascimento'],
    );
    $curl = curl_init();

    $data = http_build_query($params);

    $url = "http://localhost/origo/back/api/insert_client?".$data;

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_HTTPHEADER => array(
        "Cookie: ci_session=cel9v34kkbt76nqhmd9h173s7gs9ut3j"
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
  }

  public function delete_client($id){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "http://localhost/origo/back/api/delete_client?id=$id",
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
    return $client = json_decode($response);
  }
}
