<?php
	$first_name = "Karin";
	$last_name = "Salu";

	echo $first_name." ".$last_name;
?>
<br>
<?php
	$age = 3;
	
	//testib loogikat, juhul kui vanus väiksem kui 18
	//siis kirjutab "alaealine, muul juhul "täisealine"
	if($age < 18){
		echo "alaelaine";
	} else {
		echo "täisealine";
	}
	
?>
<br>
<?php
	//vastavalt vanusele trükime nii mitu korda välja sõna "palju"
	for($i = 0;$i < $age; $i =$i + 1){
		
		echo "Palju ";
	}
	echo "õnne!";
?>