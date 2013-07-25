<?php
function main()
{
  $stdin = fopen('php://stdin', 'r');
	$stdout = fopen('php://stdout', 'w');
  
	//Write your code here ...
	
	fclose($stdout);
	fclose($stdin);
}

main();
?>
