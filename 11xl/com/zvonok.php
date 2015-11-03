<?php 
$nomer = trim($_POST['nomer']);

if($nomer != ""){
//$body=@file_get_contents("http://sms.ru/sms/send?api_id=a25979e8-c11d&to=(ТВОЙ НОМЕР без скобок)&text=".urlencode(iconv("windows-1251","utf-8","$nomer")));
//вставить свой код
//if($body==false){exit('Возникла критическая ошибка.');} else{echo '<b>Ожидайте звонка!</b>';}
echo '<b>Ожидайте звонка!</b>'.$nomer;
}
else {echo 'заполните поле';}
?>
