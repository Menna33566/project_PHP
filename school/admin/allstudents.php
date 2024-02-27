<div class="card text-center container text-center m-5" >
  <table class="table table-dark table-striped my-2 py-5 col">
  <thead class="m-5 " >
    <tr>
      <th scope="col">#</th>
      <th scope="col">Student_Name</th>
      <th scope="col">Course</th>
      <th scope="col">Status</th>
      <th scope="col">Birth_date</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    require_once "crud/connection.php";
    require_once "student.php";
    // require_once "crud/create.php";
    $select = $connection -> prepare('SELECT * FROM student');
    $select -> execute([]);
    $student = $select -> fetchAll(PDO::FETCH_CLASS, 'student');
    foreach($student as $student):
    ?>
    <tr>
      <th scope="row"><?= $student -> id?></th>
      <td><?= $student -> student_name?></td>
      <td><?= $student -> courses?></td>
      <td><?= $student -> student_status?></td>
      <td><?= $student -> birth_date?></td>
     <td><img src= "crud/<?= $student -> stu_img ?> " width="100" height="100"></td> 


      <td>
        <a href="edit_stu.php?id=<?= $student -> id?>">edit</a>
        <a href="crud/delete.php?id=<?= $student->id?> ">delete</a>
      </td>
    </tr>
    <?php 
    endforeach;
     ?>
  </tbody>
</table>

</div>
