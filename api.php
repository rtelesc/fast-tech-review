<?php
	

	/*a api possui um limite de 3600 requisições por hora, isso é equivalente a 1 requisição por segundo

	x-ratelimit-limit: 3600 
	x-ratelimit-remaining: 3587


	não pode retornar todos os items em um request


	filtros - abv_gt, abv_lt, ibu_gt, ibu_lt, ebc_gt, ebc_lt, beer_name

	https://api.punkapi.com/v2/beers?brewed_before=11-2012&abv_gt=6

	curl https://api.punkapi.com/v2/beers?page=2&per_page=80
	

	sem pesquisa
	https://api.punkapi.com/v2/beers/random
	*/

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
