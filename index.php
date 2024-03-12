
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Function to perform grading system
    function grade($score) {
        if ($score >= 70) {
            return 'A';
        } elseif ($score >= 60) {
            return 'B';
        } elseif ($score >= 50) {
            return 'C';
        } elseif ($score >= 45) {
            return 'D';
        } elseif ($score >= 40) {
            return 'E';
        } else {
            return 'F';
        }
    }

    // Retrieving data from form
    $name = $_POST['name'];
    $subjects = $_POST['subject'];
    $scores = $_POST['score'];

    // Displaying results
    echo "<h2>Results for $name</h2>";
    foreach ($subjects as $index => $subject) {
        $score = $scores[$index];
        $grade = grade($score);
        
        ?>
        <table class=" table-bordered border-info container">
            <tr>
                <td class="text-info"><?php echo "$subject "; ?></p></td>
                <td class="text-info"><?php echo "Score: $score"; ?></p></td>
                <td class="text-info"><?php echo "Grade: $grade"; ?></p></td>
    </tr>
    </table>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>

<h2 class="text-center fw-bold display-3 pt-3">Student Grading System portal</h2>

<form method="post" class="container justify-content-center bg-info p-5 rounded"  action="">
    <div class="row">
        <div class="form-group ">
<label for="name">Name:</label>
    <input type="text" id="name" class="form-control" name="name" required><br><br>

    </div><p for="subjects" class="fw-bold text-center h2"><u>Subjects</u></p><br>
    <div class="form-group col-9">
<label for="subject1">Subject 1:</label>
    <input type="text" class="form-control" id="subject1" name="subject[]" required><br>
    </div> 
    <div class="col-3">
        <label for="score1">Score:</label>
    <input type="number" class="form-control" id="score1" name="score[]" required><br>
    </div>
    

<div class="form-group col-9">
<label for="subject2">Subject 2:</label>
    <input type="text" class="form-control" id="subject2" name="subject[]" required><br>
    </div>
    <div class="col-3">
       <label for="score2">Score:</label>
    <input type="number" class="form-control" id="score2" name="score[]" required><br> 
    </div>
    

<div class="form-group col-9">
 <label for="subject3">Subject 3:</label>
    <input type="text" class="form-control" id="subject3" name="subject[]" required><br>
    </div>
    <div class="col-3">
        <label for="score3">Score:</label>
    <input type="number" class="form-control" id="score3" name="score[]" required><br><br> 
    </div>
   

<div class="form-group">
<input type="submit" class="form-control btn btn-primary" value="Submit">
</div>
    </div>
   
  
    </form>
    
</body>
</html>

