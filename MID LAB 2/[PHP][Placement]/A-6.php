<?php

$arr = [66,55,44,33,22,44,22,44,55,55];

$num = 44;
foreach ($arr as $value) {
	if ($num == $value) {
		$flag =1;
		break;
	}
}
if($flag==1)
{
	echo "element found";
}
else
{
	echo "element not found";
}


?>