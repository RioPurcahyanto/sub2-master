<div class="halaman">
	<h2>Halaman Depan</h2>
	<p>Welcome to this site</p>
	<p>Please upload your file in button below</p>
	<br>
	<br>
	<br>
	<form action="/halaman/upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

	<p> about this feature: upload image from your local disk to my azure blob storage</p>
