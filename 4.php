<?php
function calSteps($n){
	if ($n==1) return 1;
	if ($n==2) return 2;

	return calSteps($n-1)+calSteps($n-2);
}

echo calSteps(10);


public class Solution{
	
}
?>