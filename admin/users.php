
<?php 
    $filepath = realpath(dirname(__FILE__));
	include_once ($filepath.'/inc/header.php');
	include_once ($filepath.'/../classes/User.php');
	$usr =new User();
?>
<?php 
	if(isset($_GET['dis'])){
		$dblid = (int)$_GET['dis'];
		$dblUser = $usr->disableUser($dblid);
	}
	if(isset($_GET['ena'])){
		$eblid = (int)$_GET['ena'];
		$eblUser = $usr->enableUser($eblid);
	}
	if(isset($_GET['del'])){
		$delid = (int)$_GET['del'];
		$delUser = $usr->deleteUser($delid);
	}
?>


<!-- Third Container (Grid) -->
<div id="" data-spy="scroll" class="container-fluid bg-3 text-center">    
  <h3 class="margin">Admin panel - Manage Users</h3><br>
  <?php 
	if(isset($dblUser)){
		echo $dblUser;
	}
	if(isset($eblUser)){
		echo $eblUser;
	}
	if(isset($delUser)){
		echo $delUser;
	}
?>

	<table    style="width:100%">
			<tr>
				<th style="text-align: center;">S.No</th>
				<th style="text-align: center;">name</th>
				<th style="text-align: center;">username</th>
				<th style="text-align: center;">email</th>
				<th style="text-align: center;">Student Access</th>
			</tr>
<?php 
	$userData = $usr->getAllUser();
	if($userData){
		$i=0;
		while($result=$userData->fetch_assoc()){
			$i++;

?>
			<tr>
				<td
				><?php 
					if($result['status'] == '1'){
						echo "<span class='error'>".$i."</span>";
					}else{
						echo $i;
					}
				 ?>	
				 </td>
				<td><?php echo $result['name']; ?></td>
				<td><?php echo $result['username']; ?></td>
				<td><?php echo $result['email']; ?></td>
				<td>
				<?php if($result['status'] == '0'){
                   ?>
                   <a onclick="return confirm('ARE you sure to disable!!')" href="?dis=<?php echo $result['userid']; ?>">disable</a>
				<?php } else {?>
				    <a onclick="return confirm('ARE you sure to enable!!')" href="?ena=<?php echo $result['userid']; ?>">enable</a>
				<?php } ?>
				 ||   <a onclick="return confirm('ARE you sure to remove!!')" href="?del=<?php echo $result['userid']; ?>">delete</a>
				</td>

			</tr>
		<?php } } ?>	
		</table>
  
</div>



<footer class="container-fluid bg-4 text-center">
  <p>CRT MOCK TESTS</p> 
</footer>