<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ラーメン店アンケート</title>
</head>
<body>
<form action="check.php" method="post">
<fieldset>
<legend>ラーメン店アンケート</legend>
	<font color="#ff0000">※</font>は必須項目です<br>
	<p>
		<label for="myname">氏名<font color="#ff0000">※</font>：</label><br>
		<input id="myname" type="text" name="myname" size="35" maxlength="255" value="" placeholder="全角10文字まで" required>
	</p>
	
	<p>性別：<br>
		<input type="radio" name="gender" id="gender_male" value="male" checked="checked">
		<label for="gender_male">男性</label>
		<input type="radio" name="gender" id="gender_female" value="female">
		<label for="gender_female">女性</label>
	</p>
	<p>年齢:<br>
		<select name="age" id="age">
		<?php
			for($i=5; $i<=80; $i++) {
				print('<option value="'.$i.'">'.$i.'</option>');
			}
		?>
		</select>歳
	</p>

	<p>
		<label for="yubinbangou1">郵便番号：</label><br>
		〒<input id="yubinbangou1" type="text" name="yubinbangou1" size="3" maxlength="3" value="" placeholder="3桁">-<input id="yubinbangou2" type="text" name="yubinbangou2" size="4" maxlength="4" value="" placeholder="4桁">
	</p>

	<p>Eメールアドレス<font color="#ff0000">※</font>：<br>
	  <input id="email_address" type="text" name="email_address" size="50" maxlength="255"  value="" placeholder="半角で入力してください" required>
	</p>

	<p>一番好きなラーメン:<br>
		<select name="favorite_ramen" id="favorite_ramen">
		<?php
			$ramens = array('syouyu','miso','tonkotsu');
			$ramens_disp = array('醤油ラーメン','味噌ラーメン','とんこつラーメン');
			for($i=0; $i<count($ramens); $i++){
				print('<option value="'.$ramens[$i].'">'.$ramens_disp[$i].'</option>');
			}
		?>
		</select>
	</p>

	<p>お好きなトッピング(複数選択可)：<br>
		<?php
			$toppings = array('menma','chashu','yakinori','nitamago','negi');
			$toppings_disp = array('メンマ','チャーシュー','焼きのり','煮玉子','ネギ');
			for($i=0; $i<count($toppings); $i++){
				print('<input type="checkbox" name="toppings[]" id="'.$toppings[$i].'" value="'.$toppings[$i].'">'."\n");
				print('<label for="'.$toppings[$i].'">'.$toppings_disp[$i].'</label>'."\n");
			}
		?>
	</p>

	<p>ご意見・ご感想:<br>
		<textarea name="iken_kansou" rows="4" cols="40" placeholder="ご自由にお書きください"></textarea>
	</p>
</fieldset>
	<p>
		<input type="submit" value="送信">
		<input type="reset" value="取消">
	</p>

</form>
</body>
</html>