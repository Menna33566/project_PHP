<?php
require_once 'template_AD/header_AD.php';
require_once 'crud/connection.php' ;
require_once 'student.php' ;

$select = $connection -> prepare('SELECT * FROM  student WHERE id =?');
$select-> execute([$_GET['id']]); 
$select-> setFetchMode(PDO::FETCH_CLASS, 'student');
$student = $select -> fetch();


$student_status=$student->student_status ;
$av=($student_status === 'Available') ? 'checked' : '';
$noav=($student_status === 'Not-Available') ? 'checked' : '';

$selectedCourse = $student->courses;



?>

<form class="row g-3 m-5 px-5" method="post" action="crud/update.php" method="post" >
    <div class="row g-3 px-5 card">
        
        <div class="col">
        <label class="" for="autoSizingSelect">Enter Name</label>
          <input type="text" class="form-control" name="name" value="<?=$student->student_name?>">
          <input type="hidden" value="<?= $student -> id ?>" name="id">
        </div>
       
        <div class="col">
          <label class="">courses</label>
          <select class="form-select" name=course value="<?=$student->courses?>">
            <option <?php if ($selectedCourse == 'Courses') echo 'selected'; ?>>Courses</option>
            <option <?php if ($selectedCourse == 'HTML') echo 'selected'; ?>>HTML</option>
            <option <?php if ($selectedCourse == 'CSS') echo 'selected'; ?>>CSS</option>
            <option <?php if ($selectedCourse == 'PHP') echo 'selected'; ?>>PHP</option>
          </select>
        </div><br>
        <div class="card">
            <div class =" row m-5">
            <label for="start">Enter the Date Of Birthday:</label><br>

            <input type="date" name="birthday" value="<?=$student->birth_date?>">
            </div> 
        </div>
        
        <div class="">
            <!-- <label for="formFile" class="form-label">Upload Image</label> -->
            <!-- <img  src= "crud/" width="100" height="100"> -->
            <!-- <input class="form-control" type="file" name="image" value="<?=$student->stu_img?>"> -->
        </div>
        <div class="form-check">
            <br><br>
        <span for="formFile" class="form-label h4">student_status</span> <br><br>

            <input class="form-check-input" type="radio" name="radioo" value="Available"<?= $av ?> >
            <input type="hidden" value="<?= $student -> id ?>" name="id">
            <label class="form-check-label" >
              Available
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="radioo" value="Not-Available" <?= $noav ?> >
            <label class="form-check-label" >
            Not-Available
            </label>
        </div>

            <div class="col-12 text-center mb-5">
            <button type="submit" class="btn btn-primary">Apdate Data</button>
        </div>
       
    </div>
    
    
</form>


<?php
require_once 'template_AD/footer_AD.php';
?>