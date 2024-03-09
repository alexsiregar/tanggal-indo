<?php
namespace Alex\TanggalIndo;

class Main {
  public function tanggalIndo()
  {
    return 'ini fungsi untuk konversi tanggal indonesia';
  }

  public function sendWa($nomor_hp, $message = '')
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.fonnte.com/send',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
            'target' => $nomor_hp,
            'message' => $message ?? 'Haloo',
            'countryCode' => '62',
        ),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Y+eStfgQcsm!Dpkkiypz'
        ),
    )
    );

    $response = curl_exec($curl);
    if (curl_errno($curl)) {
        $error_msg = curl_error($curl);
    }
    curl_close($curl);

    if (isset($error_msg)) {
        echo $error_msg;
    }
    echo $response;
  }
}