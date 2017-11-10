<?php include 'inc/header.php'; ?>
<?php
	Session::checkSession();
	$Question = $exm->getQuestion();
	$total    = $exm->getTotalRows();
?>
<div class="main">
<h1>Welcome to Online Exam - Start Now</h1>

	<div class="starttest">
		<h2>Test your Knoledge</h2>
		<p>This is multiple choice quize to test your knoledge</p>
		<ul>
			<li><strong>Number of Question:</strong> <?php echo $total;?></li>
			<li><strong> Question Type:</strong> Multiple Choice</li>

			
		</ul>
		<a href="test.php?q=<?php echo $Question['quesNo']?>">Start Test</a>
	</div>
	
  </div>
<?php include 'inc/footer.php'; ?>