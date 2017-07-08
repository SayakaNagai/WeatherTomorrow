<?php

	// 福岡のお天気を取得する URL を作成する
	$url = 'http://weather.livedoor.com/forecast/webservice/json/v1?city=400010';

	// 送信ヘッダーを設定する
	header ( 'Content-Type: application/json; charset=utf-8' );

	// 情報を取得して、その内容をそのまま垂れ流す
	echo file_get_contents ( $url );

?>
