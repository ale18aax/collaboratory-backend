<?php

	$cURL = curl_init();
	$color = $_GET['color'];


	if(isset($_GET['key'])) 
	{
		$key =$_GET['key'];


		if ($key='cqk7k2oUYSRxy2yCusLuyqhnsq-wxosy3k1g0VyM') 
		{


			$url = "http://90.77.107.119:8082/api/cqk7k2oUYSRxy2yCusLuyqhnsq-wxosy3k1g0VyM/groups/1/action";

			switch ($color)
			{
				case 'blue':
					$data = array(
					'on' => true,
					'bri'=> 254,
					'hue'=> 47125,
					'sat'=> 253,
					'effect'=> 'none',
					'xy'=> [
						0.1684,
						0.0416
						],
					'ct'=> 153,
					);
					break;
				case 'red':

					$data =  array('on'=> true,
					'bri'=> 254,
					'hue'=> 0,
					'sat'=> 254,
					'effect'=> 'none',
					'xy'=> [
						0.675,
						0.322
					],
					'ct'=> 153
					);
					break;
				case 'green':
					$data = array(
					'on' => true,
					'bri'=> 254,
					'hue'=> 25653,
					'sat'=> 254,
					'effect'=> 'none',
					'xy'=> [
						0.4084,
						0.5168
					],
					'ct'=> 289
					); 
					break;
				case 'purple':
					$data = array(
					'on' => true,
					'bri'=> 254,
					'hue'=> 52723,
					'sat'=> 252,
					'effect'=> 'none',
					'xy'=> [
						0.3223,
						0.1279
					],
					'ct'=> 167,
					);
					break;
				case 'yellow':
					$data = array('on' => true,
					'bri'=> 254,
					'hue'=> 11078,
					'sat'=> 254,
					'effect'=> 'none',
					'xy'=> [
						0.4658,
						0.4778
					],
					'ct'=> 379);  
					break;
				case 'white':
					$data = array(
					'on' => true,
					'bri'=> 254,
					'hue'=> 47126,
					'sat'=> 237,
					'effect'=> 'none',
					'xy'=> [
						0.3181,
						0.3328
					],
					'ct'=> 153
					);     
				break;
			}

			$data_json = json_encode($data);

			curl_setopt($cURL , CURLOPT_URL, $url);
			curl_setopt($cURL , CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
			curl_setopt($cURL , CURLOPT_CUSTOMREQUEST, 'PUT');
			curl_setopt($cURL , CURLOPT_POSTFIELDS,$data_json);

			$result = curl_exec($cURL);


			curl_close($cURL);

			print_r($result);
		}else 
		{
			print_r('not authenticated');
		}
	}
?>
