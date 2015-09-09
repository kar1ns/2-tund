<?php
	$first_name = "Karin";
	$last_name = "Salu";

	echo $first_name." ".$last_name;
?>
<br>
<?php
	$age = 5;
	
	//testib loogikat, juhul kui vanus väiksem kui 18
	//siis kirjutab "alaealine, muul juhul "täisealine"
	if($age < 18){
		echo "alaelaine";
	} else {
		echo "täisealine";
	}
	
?>