<?php

if(isset($_POST['submit'])){
    
    $data_missing = array();
    
    if(empty($_POST['Department'])){

        // Adds name to array
        $data_missing[] = 'Department';

    } else {

        // Trim white space from the name and store the name
        $Department = trim($_POST['Department']);

    }

    if(empty($_POST['Number'])){
	
        // Adds name to array
        //$data_missing[] = 'Number';
	
    } else{

        // Trim white space from the name and store the name
        $Number = trim($_POST['Number']);

    }

    if(empty($_POST['Semester']) && empty($_POST['Semesterr'])){
	
        // Adds name to array
		$data_missing[] = 'Semester';
	
    } else {
		if(empty($_POST['Semester']))
			$Semester = trim($_POST['Semesterr']);
		if(empty($_POST['Semesterr']))
			$Semester = trim($_POST['Semester']);		
	
    }

    if($_POST['Professor_Name']=="other" && empty($_POST['Professor_Namee'])){

        // Adds name to array
        $data_missing[] = 'Professor_Name';

    } else {
		
		if($_POST['Professor_Name']=="other")
			$Professor_Name = trim($_POST['Professor_Namee']);
		else
			$Professor_Name = trim($_POST['Professor_Name']);	
    }

    if(empty($_POST['Interesting'])){

        // Adds name to array
        $data_missing[] = 'Interesting';

    } else {

        // Trim white space from the name and store the name
        $Interesting = trim($_POST['Interesting']);

    }

    if(empty($_POST['Difficulty'])){

        // Adds name to array
        $data_missing[] = 'Difficulty';

    } else {

        // Trim white space from the name and store the name
        $Difficulty = trim($_POST['Difficulty']);

    }

    if(empty($_POST['Workload'])){

        // Adds name to array
        $data_missing[] = 'Workload';

    } else {

        // Trim white space from the name and store the name
        $Workload = trim($_POST['Workload']);

    }

    if(empty($_POST['Professor_Rating'])){

        // Adds name to array
        $data_missing[] = 'Professor_Rating';

    } else {

        // Trim white space from the name and store the name
        $Professor_Rating = trim($_POST['Professor_Rating']);

    }

    if(empty($_POST['Grade'])){

        // Adds name to array
        $data_missing[] = 'Grade';

    } else {

        // Trim white space from the name and store the name
        $Grade = trim($_POST['Grade']);

    }

    if(empty($_POST['Comment'])){

        // Adds name to array
        $data_missing[] = 'Comment';

    } else {

        // Trim white space from the name and store the name
        $Comment = trim($_POST['Comment']);

    }

    
    if(empty($data_missing)){
        
        require_once('../mysqli_connect.php');
        
        $query = "INSERT INTO evaluations (Department, Number, Semester, Professor_Name, Interesting, Difficulty, Workload, Professor_Rating, Grade, Comment) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = mysqli_prepare($dbc, $query);
        
        //i Integers
        //d Doubles
        //b Blobs
        //s Everything Else
        
        mysqli_stmt_bind_param($stmt, "ssssiiiiss", $Department,
                               $Number, $Semester, $Professor_Name, $Interesting,
                               $Difficulty, $Workload, $Professor_Rating, $Grade,
                               $Comment);
        
        mysqli_stmt_execute($stmt);
        
        $affected_rows = mysqli_stmt_affected_rows($stmt);
        
        if($affected_rows == 1){
            
            //echo '<b>Course Entered</b>';
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
			
			header("Location: ../eval-entered");
			die();
            
        } else {
            
            echo 'Error Occurred<br />';
            echo mysqli_error();
            
            mysqli_stmt_close($stmt);
            
            mysqli_close($dbc);
            
        }
        
    } else {
        
        echo 'You need to enter the following data<br />';
        
        foreach($data_missing as $missing){
            
            echo "$missing<br />";
				
        }
        
    }
    
}

?>