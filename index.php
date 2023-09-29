<?php	
include('header.php');
?>
<title>Web Scrapper Dengan PHP</title>
<?php include('container.php');?>
<div class="container">
	<pre><h4 align=center>Scrape Teks Dari Website Menggunakan PHP</h4></pre>
	<br>	
	<form method="post" name="scrap_form" id="scrap_form" align="center" action="">   
    <label>Masukkan URL</label>
	<br>	
    <input type="input" name="website_url" id="website_url" value="<?php if(isset($_POST['website_url'])) { echo $_POST['website_url']; } ?>" > 
	<input type="submit" name="submit" value="Scrap" >
	<input type="submit" name="remove" value="Hilangkan Tanda Baca" >     	
	</form>
	
	<?php	
	include('function.php');
	if(isset($_POST['submit']) && $_POST['website_url']){
		echo "<hr><i>";
		$html = scrapWebsite($_POST['website_url']);	
		$postDetail = getPostDetails($html);
		print_r ($postDetail);
		echo "</hr>";
	} 
	if(isset($_POST['remove']) && $_POST['website_url']){
		echo "<hr><i>";
		$html = scrapWebsite($_POST['website_url']);	
		$postDetail = getPostDetails($html);
		print_r ($postDetail);
		echo "</i></hr>";
	} 
	if(isset($_POST['remove']) && $_POST['website_url']){
		echo "<hr><pre><h4 align=center>Setelah Tanda Baca Dihilangkan</h4></pre><br>";
		echo "<i>";
		$html = scrapWebsite($_POST['website_url']);
		$resul = writeToCSV($html);	
		print_r ($resul);
		echo "</hr>";
	} 
	?>
	<hr>
	
		
</div>
<?php include('footer.php');?>
