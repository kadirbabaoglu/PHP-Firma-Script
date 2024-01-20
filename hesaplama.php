<?php 

function dizinboyutu($dizin){

	$toplamboyut = 0;
	if(!$ac = opendir($dizin)) return false; 											// dizini açma komut satırı
	while ($dosya = readdir($ac)) {														// dizini okuma komut satırı
		if($dosya == "." || $dosya == "..") continue;									// tek nokta veya çift nokta varsa devam et
		if(is_file($dizin."/".$dosya)) $toplamboyut += filesize($dizin."/".$dosya);		// dosya mı ?
		if(is_dir($dizin."/".$dosya)) $toplamboyut += dizinboyutu($dizin."/".$dosya);	// dizin mi ? 
		
	}

	closedir($ac);																		//fonksiyonu sonlandır
	return $toplamboyut;																// toplam boyutu döndür
}

/*Kb cinsinden gelen değeri formatlayıp mb,gb yada tb cinsinden hesaplatma */
function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'Kb', 'Mb', 'Gb', 'Tb');   
    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}
/*ekrana yazdırma*/
$hesap = formatBytes(dizinboyutu("../."));

?>