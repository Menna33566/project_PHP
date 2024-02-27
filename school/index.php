
<?php
require_once 'template/header.php';
?>

<div class="container">
    <div class="row">
    </div>
    <div class="row text-center">
        <h1 class="diplay-1"> Welcome In our School</h1>
    </div>
    <hr>
    <div class="row text-center">
        <h3 class="diplay-1"> our students</h3>
    </div>
    
    <div class="row ">
        <?php
        require_once "admin/crud/connection.php";
        require_once "admin/student.php";
        $select = $connection -> prepare('SELECT * FROM student');
        $select -> execute();
        $student = $select -> fetchAll(PDO::FETCH_CLASS, 'student');
        foreach($student as $student){
        ?>
        <div class="card m-2" style="width: 18rem;">
            <img src= "admin/crud/<?= $student -> stu_img ?> " class="card-img-top"width="300" height="300">
            <div class="card-body">
                <h3 class="card-title"><?= $student -> student_name; ?></h3>
                <p class="card-text"><?= $student -> courses; ?></p>
                <p class="card-text"><?= $student -> student_status; ?></p>
                <p class="card-text"><?= $student -> birth_date; ?></p>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


<?php
require_once 'template/footer.php';
?>


