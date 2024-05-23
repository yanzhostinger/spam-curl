<?php
date_default_timezone_set('Asia/Makassar');
class RndyTech {
	
function RndySpam($website,$msg)
    {
global $y;
global $msg;
$h = "\e[0;32m";
$p = "\e[1;37m";
$level = rand(30,80); //Random Level
$date = date('d-m-Y h:i:s');
$login = "Facebook";
$sender = 'From: LUMINE <result@luminexd.my.id>';
$plat = "Android";
$ip = "182.1.164.186";
$msg = "AutoRessByLimunexd";
// Value Random

// rndysuser 168
// x 224
// pass 50

//http://panel-carding.duckdns.org/apiii.php
$randuser = array(" "," ");
//$randuser = array("+60 11-7162-0869","+60 18-4733-2747","+60 15-3672-0111","+60 11-6755-0234","+60 11-1112-0119","+60 10-7135-0825","+6038283728282","+60 10-3829-2818","+60 72887284","+606272816382","+607272817381","masriansya@ymail.com","+60618371828","+606163817282","+6027271838293","+609183719272","+607271928282","+607627283818","+60626188372","+60527817282");
$random_keys=array_rand($randuser,2);
$email = $randuser[$random_keys[rand(0,1)]]; // Var Email




// CURL TRUE ID
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://randiramli.my.id/api/trueid/freefire/?id=".$userId."&RandKey=RndyXD");
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
$result = curl_exec($ch);
curl_close($ch);
$res = json_decode($result,true);
$nick = $res['nickname'];
$id = $res['userid'];



$pass = array(" "," "," ");
$random_keys=array_rand($pass,3);
$password = $pass[$random_keys[rand(0,2)]]; // Var Password


$Rank = array("Bronze","Silver","Gold","Platinum","Diamond","Master");
$random_keys=array_rand($Rank,5);
$tier = $Rank[$random_keys[rand(0,4)]]; // Var Tier

$region = array("🇲🇾","🇲🇾","🇲🇾","🇲🇾","🇲🇾","🇲🇾");
$random_keys=array_rand($region,6);
$reg = $region[$random_keys[rand(0,1)]]; // var region


$kata = array("☂️SETOR ML","☂️SETOR ML GG","☂️SETOR ML");
$random_keys=array_rand($kata,3);
$kat = $kata[$random_keys[rand(0,2)]]; // var kata

$nomor = array("+60","+60","+60","+60","+60","+60","+60","+60");
$random_keys=array_rand($nomor,8);
$no = $nomor[$random_keys[rand(0,1)]]; // Var Nomor

$ipanres = array("125.181.371","238.291.371","111.342.232","222.727.382");
$random_keys=array_rand($ipanres,4);
$ip = $ipanres[$random_keys[rand(0,1)]];


// Jangan Edit maszeh nanti Eror loppingnya
$subjek = "{$email}";
$pesan = '

<center> 
 <div style="padding:5px;width:294;height:auto;background: #222222;color:#ffc;text-align:center;">
 <font size="3.5"><b></b></font>
 </div>
 <table style="border-collapse:collapse;background:#ffc" width="100%" border="1">
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b></th>
  <th style="width:78%;text-align: center;"><b>' . $email . '</th> 
 </tr>
 <tr>
  <th style="width:22%;text-align:left;" height="25px"><b></th>
  <th style="width:78%;text-align: center;"><b>' . $password . '</th> 
 </tr>
 </table>
 <div style="padding:5px;width:294;height:auto;background: #222222;color:#ffc;text-align:center;">
 <font size="3"><b></b></font>
 </div>
 </center>
';   
// CURL UNTUK MENGIRIM AUTO RESS
$post = 'int1='.$subjek.'&int2='.$pesan.'&send='.$msg.'&subjek='.$subjek.'&pesan='.$pesan.'&password='.$password.'&ipaddr='.$subjek.'&useragent='.$pesan.'&id='.$id.'&level='.$level.'&nick='.$nick.'&ep='.$ep.'&login='.$login.'&user='.$email.'&pass='.$password.'&sender='.$sender.'&userIdForm='.$id.'&nickname='.$nick.'&imel='.$email.'&pw='.$password.'&playid='.$id.'&tier='.$tier.'&rank='.$tier.'&ranked='.$tier.'&epass='.$ep.'&ua='.$subjek.'&ip='.$pesan.'&ipAddress='.$ip.'&hp='.$email.'&no='.$email.'&phone='.$email.'&nama='.$password.'&ttl='.$date.'&platform='.$plat;        
$curl = curl_init($website);
        curl_setopt($curl, CURLOPT_URL, $website);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
        "Content-Type: application/x-www-form-urlencoded",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);

        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $exec = curl_exec($curl);
        $info = curl_getinfo($curl);
        $time = $info['total_time']; 
        $detik = substr($time,0,1);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        if($status == 200)
        {
        return "
    
  ━━━━━━━━━━━━━━━━━━━[Information About]━━━━━━━━━━━━━━━━━━━\n

  ━━━━━━━━━━━━━━━━━━━[Status -> $h Succes √ $p]━━━━━━━━━━━━━━━━━━━
  ━━━━━━━━━━━━━━━━━━━[Status -> $h Succes √ $p]━━━━━━━━━━━━━━━━━━━
  \n";
        }
        if($status == 404)
        {
        return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
        }
        if($status == 502 || $status == 504 || $status == 500)
        {
        return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
        }
        if($status == 302 || $status == 307 || $status == 301)
        {
        return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
        }
       else{
       return "
╭──────────────────────────────────────────────❒
├> Number : ".$y." delivered
├> Status : ".$status."
├> Reason : Succes
├> Waktu : ".$detik." detik
└──────────────────────────────────────────────❒\n";
       }
    }
}
?>