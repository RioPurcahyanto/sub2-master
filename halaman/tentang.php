<div class="halaman">
	<h2>Tentang Kami</h2>
	
	<p>This is supporting website for Dicoding - Azure - Rio's Submission2</p>
	
</div>

<?php
 	$files = glob("D:\home\site\wwwroot\halaman\*.{jpg,gif,png}", GLOB_BRACE);
	$n = "0";
	print_r($files);
	$filePath = $files[$n];
	$n = ++;
	$fileToUpload = basename($filePath);
	print($filePath);
	print($fileToUpload);
?>
