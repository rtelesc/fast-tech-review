<?php


	$url = "https://api.punkapi.com/v2/beers/25";
	$ch = curl_init();

	$ip = '123.123.123.123'; // your client's IP Address

	curl_setopt($ch, CURLOPT_URL,$url );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: $ip",
                                            "X_FORWARDED_FOR: $ip"));

    $cAlljson = curl_exec($ch);
    // liberar
    curl_close($ch);

    $contador = $contador + 1;  // Contador para limite de requisições da API

    // Decodifica o Json em Objeto
    $cAlljson = json_decode($cAlljson);
    $cAlljson = $cAlljson->data;
