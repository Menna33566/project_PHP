<form class="row g-3 m-5 px-5" method="post" action="crud/create.php" enctype="multipart/form-data" >
    <div class="row g-3 px-5 card">
        
        <div class="col">
        <label class="" for="autoSizingSelect">Enter Name</label>
          <input type="text" class="form-control" name="name" placeholder="Enter Student Name">
        </div>
       
        <div class="col">
          <label class="">courses</label>
          <select class="form-select" name=course>
            <option selected>Courses</option>
            <option value="1">HTML</option>
            <option value="2">CSS</option>
            <option value="3">PHP</option>
          </select>
        </div><br>
        <div class="card">
            <div class =" row m-5">
            <label for="start">Enter the Date Of Birthday:</label><br>

            <input type="date" name="birthday" placeholder="dd-mm-yyyy">
            </div> 
        </div>
        
        <div class="">
            <label for="formFile" class="form-label">Upload Image</label>
            <input class="form-control" type="file" name="image" id="formFile">
        </div>
        <div class="form-check">
            <br><br>
        <span for="formFile" class="form-label h4">student_status</span> <br><br>

            <input class="form-check-input" type="radio" value="Available" name="radioo" >
            <label class="form-check-label" >
              Available
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" value="Not-Available" name="radioo" >
            <label class="form-check-label" >
            Not-Available
            </label>
        </div>

            <div class="col-12 text-center mb-5">
            <button type="submit" class="btn btn-primary">Add Student</button>
        </div>
       
    </div>
    
    
</form>