<?php
start:
echo "\e[36m                                                           
555555555555555555    SSSSSSSSSSSSSSS   iiii                          
5::::::::::::::::5  SS:::::::::::::::S i::::i                         
5::::::::::::::::5 S:::::SSSSSS::::::S  iiii                          
5:::::555555555555 S:::::S     SSSSSSS                                
5:::::5            S:::::S            iiiiiii    mmmmmmm    mmmmmmm   
5:::::5            S:::::S            i:::::i  mm:::::::m  m:::::::mm 
5:::::5555555555    S::::SSSS          i::::i m::::::::::mm::::::::::m
5:::::::::::::::5    SS::::::SSSSS     i::::i m::::::::::::::::::::::m
555555555555:::::5     SSS::::::::SS   i::::i m:::::mmm::::::mmm:::::m
            5:::::5       SSSSSS::::S  i::::i m::::m   m::::m   m::::m
            5:::::5            S:::::S i::::i m::::m   m::::m   m::::m
5555555     5:::::5            S:::::S i::::i m::::m   m::::m   m::::m
5::::::55555::::::5SSSSSSS     S:::::Si::::::im::::m   m::::m   m::::m
 55:::::::::::::55 S::::::SSSSSS:::::Si::::::im::::m   m::::m   m::::m
   55:::::::::55   S:::::::::::::::SS i::::::im::::m   m::::m   m::::m
     555555555      SSSSSSSSSSSSSSS   iiiiiiiimmmmmm   mmmmmm   mmmmmm
                                                         By : aripgans                                                       
\e[39m";
echo "\e[32m1.telegram";
echo "\n2.tiktok";
echo "\n3.twitter";
echo "\n4.whatsapp";
echo "\n5.facebook";
echo "\n6.google";
echo "\n7.netflix";
echo "\n8.naver";
echo "\n9.microsoft";
echo "\n10.instagram";
echo "\n11.kakaotalk";
echo "\n12.discord\e[39m";
echo "\n\n\e[33mPilih harga otp yang ingin di check :\e[39m";
$req1 = trim(fgets(STDIN));
if ($req1 == "1"){
    $req = "telegram";
}
if ($req1 == "2"){
    $req = "tiktok";
}
if ($req1 == "3"){
    $req = "twitter";
}
if ($req1 == "4"){
    $req = "whatsapp";
}
if ($req1 == "5"){
    $req = "facebook";
}
if ($req1 == "6"){
    $req = "google";
}
if ($req1 == "7"){
    $req = "netflix";
}
if ($req1 == "8"){
    $req = "naver";
}
if ($req1 == "9"){
    $req = "microsoft";
}
if ($req1 == "10"){
    $req = "instagram";
}
if ($req1 == "11"){
    $req = "kakaotalk";
}
if ($req1 == "12"){
    $req = "discord";
}
else{
	echo "Pilih yang bener tod".PHP_EOL;
	goto start;
}
$xyz = "country.txt";
foreach (explode("\n", str_replace("\r", "", file_get_contents($xyz))) as $key => $negara) {
$result = file_get_contents("https://5sim.net/v1/guest/products/$negara/any");
$js = json_decode($result);
$otp = $js->$req;
$stok = $otp->Qty;
$harga = $otp->Price;
echo "Negara : ".$negara.PHP_EOL;
echo "Untuk  : ".$req.PHP_EOL;
echo "\e[32mHarga  : ".$harga." P\e[39m".PHP_EOL;
echo "Stok   : ".$stok.PHP_EOL;
if ($harga < 9) {
	echo "\e[36mWOW MURAHHH BANGETTTT\e[39m".PHP_EOL;
	$o = fopen("hasil.txt", 'a');
			fwrite($o, $negara." ".$req."|".$harga."P|Stok :".$stok."\n");
			fclose($o);
}
echo "\n";
}
echo "Silahkan check file hasil.txt".PHP_EOL;
?>
