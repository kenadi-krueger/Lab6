<!DOCTYPE html>
<html> 
 
<body>
 
		<h1>Results:</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $total = 0;
            
            if ($answer1 == "C") { $total++; }
            if ($answer2 == "A") { $total++; }
            if ($answer3 == "A") { $total++; }
            if ($answer4 == "B") { $total++; }
            if ($answer5 == "D") { $total++; }
            
            echo "<div id='results'>$total / 5 correct</div>";
            
        ?>
	
	</div>
 
</body>
 
</html>
