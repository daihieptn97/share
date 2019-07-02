<?php
error_reporting(false);
$token = "lay bang cai nay gettoken.zip";
$id_me =  "100008636955206";
$limitnf=10; // 10 bai  viet tren bang tin 1 Lần
//lay id bai viet moi nhat.id se co dang 100006526419466_2069636216597239
//$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,name,type&access_token='.$token.'&limit='.$limitnf.''),true);

$puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,type&access_token='.$token.'&offset=0&limit='.$limitnf.''),true);


for($i=1;$i<=count($puaru[data]);$i++)
{
  $id = explode('_',$puaru[data][$i-1][id])[0];
        
  // bỏ qua các id không phải là người dùng



  if($id[0] != '1' ){
    echo ' Đã bỏ qua';
    echo "<br>";
    echo "<hr>";
     continue;
  }

  // echo $puaru[data][$i-1][id] . "<br>";
//   echo "ID :  $id<br>";
// var_dump($puaru[data][$i-1][message]);

//881821441833819 vtv thoi tiet
  


  if($id == "881821441833819"  ){
          set_time_limit(0);
         // echo "<pre>";

          if(isReaction($puaru[data][$i-1][id]) ){
                // da tha cam xuc r
          }else {
              var_dump($puaru[data][$i-1]);
             // echo "</pre>";
              $camxuc= array('LOVE');
              $mess=$camxuc[rand(0,count($camxuc)-1)];
              notificaitonToIOS($puaru[data][$i-1][from][name], $puaru[data][$i-1][message]);
              echo puaru('https://graph.facebook.com/'.$puaru[data][$i-1][id].'/reactions?type='.$mess.'&method=post&access_token='.$token.'');
          }

          
  }
  
  echo "<hr>";
}

function puaru($url)
{
      $data = curl_init();
      curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($data, CURLOPT_URL, $url);
      $hasil = curl_exec($data);
      curl_close($data);
  return $hasil;
}


?>