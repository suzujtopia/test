<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>入力確認</title>
</head>
<body>
<fieldset>
<legend>入力確認</legend>
	<?php $myname = htmlspecialchars($_POST['myname'],ENT_QUOTES); ?>
	<?php print($myname); ?>様の登録内容は、下記の内容でよろしいでしょうか？
	
	<p>氏名：<br>
		<?php print($myname) ;?>
	</p>
	
	<p>性別：<br>
		<?php print(htmlspecialchars($_POST['gender'],ENT_QUOTES)) ;?>
	</p>
	<p>年齢:<br>
		<?php print(htmlspecialchars($_POST['age'],ENT_QUOTES).'歳'); ?>
	</p>

	<p>郵便番号：<br>
		<?php 
			if(!empty($_POST['yubinbangou1']) || ! empty($_POST['yubinbangou2']) ) {
				print('〒'.htmlspecialchars($_POST['yubinbangou1'],ENT_QUOTES).'-'.htmlspecialchars($_POST['yubinbangou2'],ENT_QUOTES)); 
			}
		?>
	</p>

	<p>Eメールアドレス：<br>
		<?php print(htmlspecialchars($_POST['email_address'],ENT_QUOTES)); ?>
	</p>

	<p>一番好きなラーメン:<br>
		<?php
			$ramens = array('syouyu','miso','tonkotsu');
			$ramens_disp = array('醤油ラーメン','味噌ラーメン','とんこつラーメン');
			$ramen =$_POST['favorite_ramen'];
			for($i=0; $i<count($ramens); $i++){
				if(strcmp($ramen,$ramens[$i]) == 0 ) {
					print('<li>'.htmlspecialchars($ramens_disp[$i],ENT_QUOTES).'</li>');	
					break;
				}
			}
		?>
	</p>

	<p>お好きなトッピング(複数選択可)：<br>
		<ul>
		<?php
			$toppings = array('menma','chashu','yakinori','nitamago','negi');
			$toppings_disp = array('メンマ','チャーシュー','焼きのり','煮玉子','ネギ');
			if(empty($_POST['toppings'])) { 
				print('好きなトッピングなし');
			}else{

				foreach($_POST['toppings'] as $topping) {
					for($i=0; $i<count($toppings); $i++){
						if(strcmp($topping,$toppings[$i]) == 0 ) {
							print('<li>'.htmlspecialchars($toppings_disp[$i],ENT_QUOTES).'</li>');	
						}
					}

				}
			}
		?>
		</ul>
	</p>

	<p>ご意見・ご感想:<br>
		<?php print(nl2br(htmlspecialchars($_POST['iken_kansou'],ENT_QUOTES))); ?>
	</p>

	<p>
		<input type="submit" value="送信">
		<input type="reset" value="取消">
	</p>

</fieldset>
</body>
</html>