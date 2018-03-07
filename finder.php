<?php
$str=$_POST["data_text"];
ini_set("allow_url_fopen", 1);
$json = file_get_contents('https://newsapi.org/v2/top-headlines?apiKey=cd1db87dec794c2288c915ba6abeee94&country=in');
$obj = json_decode($json);
$n=strlen($str);
foreach ($obj->articles as $objects)
	{	
		{
			$n1=strlen($objects->title);
			for ($x = 0; $x <= $n1; $x++)
			{
				if(strcmp(strtolower(substr($objects->title,$x,$n)),$str)==0)
					{echo $objects->title;
						echo "<br><br>";
					}
			}
		}
	}

?>