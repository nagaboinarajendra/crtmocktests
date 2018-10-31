<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exm =new Exam();
?>
<?php 
if(isset($_GET['delque'])){
	$quesNo = (int)$_GET['delque'];
	$delQue = $exm->delQuestion($quesNo);
}
 ?>




<!-- Third Container (Grid) -->
<div id="" data-spy="scroll" class="container-fluid bg-3 text-center">    
  <h3>Admin panel - QuestionList</h3><br>

    <?php 
    	if(isset($delQue)){
    		echo $delQue;
    	}
    ?>

    <table class="tblone">
			<tr>
				<th width="10%">No</th>
				<th width="70%">Question</th>
				<th width="20%">Action</th>
			</tr>
<?php 
	$getData = $exm->getQueByOrder();
	if($getData){
		$i=0;
		while($result=$getData->fetch_assoc()){
			$i++;
?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $result['ques']; ?></td>
				<td><a onclick="return confirm('ARE you sure to remove!!')" href="?delque=<?php echo $result['quesNo']; ?>">remove</a>
				</td>

			</tr>
		<?php } } ?>	
		</table>

  
</div>


<footer class="container-fluid bg-4 text-center">
  <p>CRT MOCK TESTS</p> 
</footer>