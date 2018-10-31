<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/Exam.php');
	$exm =new Exam();
?>
<?php 
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$addque=$exm->addQuestions($_POST);
	}
	//get total
	$total=$exm->getTotalRows();
	$next = $total+1;
?>


<!-- Third Container (Grid) -->
<div id="" data-spy="scroll" class="container-fluid bg-3 text-center">    
  <h3 class="margin">Admin Panel - Add Questions</h3><br>
  <?php  
	if(isset($addQue)){
		echo $addQue;
	}
	?>
<form action="" method="post">
	<table align="center">
				<tr>
					<td>Question No</td>
					<td>:</td>
					<td><input type="number" value="<?php 
							if(isset($next)){
								echo $next;
							}
						?>" name="quesNo" required="true"></td>
				</tr>
				<tr>
					<td>Question</td>
					<td>:</td>
					<td><input type="text" name="ques" placeholder="enter the question" required="true"></td>
				</tr>
				<tr>
					<td>choice1</td>
					<td>:</td>
					<td><input type="text" name="ans1" placeholder="enter choice1" required="true"></td>
				</tr>	
				<tr>
					<td>choice2</td>
					<td>:</td>
					<td><input type="text" name="ans2" placeholder="enter choice2" required="true"></td>
				</tr>
				<tr>
					<td>choice3</td>
					<td>:</td>
					<td><input type="text" name="ans3" placeholder="enter choice3" required="true"></td>
				</tr>
				<tr>
					<td>choice4</td>
					<td>:</td>
					<td><input type="text" name="ans4" placeholder="enter choice4" required="true"></td>
				</tr>
				<tr>
					<td>correct no</td>
					<td>:</td>
					<td><input type="number" name="rightAns" placeholder="enter correct answer number" required="true"></td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="add question">
					</td>
				</tr>							
			</table>	
  </form>
</div>





<!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>CRT MOCK TESTS</p> 
</footer>
