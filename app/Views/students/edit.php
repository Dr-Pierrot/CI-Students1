<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/css/bootstrapValidator.css" />
    <title>Hello, world!</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
  </head>
  <body>
    <br>
    <div class="container border">
      
      <form action="/students/put/<?= $student['id']; ?>" method="post">
        <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationServer0313">ID</label>
              <input type="text" class="form-control" id="validationServer0313" name="id" value="<?= $student['id'] ?>" readonly>
            </div>
        </div>
        <div class="form-row mt-3">
          <div class="col-md-4 mb-3">
            <label for="validationServer013">First name</label>
            <input type="text" class="form-control" id="validationServer013" name="firstname" value="<?= $student['firstname']; ?>">
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServer023">Middle name</label>
            <input type="text" class="form-control" id="validationServer023" name="middlename" value="<?= $student['middlename']; ?>">
          </div>
          <div class="col-md-4 mb-3">
            <label for="validationServerUsername33">Last Name</label>
            <input type="text" class="form-control" id="validationServerUsername33" name="lastname" value="<?= $student['lastname']; ?>">
          </div>
        </div>
    <div class="form-row">
      <div class="col-md-12 mb-3">
          <label for="validationServer033">Phone No.</label>
          <input type="text" class="form-control" id="validationServer033" name="phoneno" value="<?= $student['phoneno']; ?>">
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-4 mb-3">
        <label for="course">Course</label>
        <input class="form-control" type="text" id="course" name="course" value="<?= $student['course']; ?>">
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationServer053">Year</label>
        <input type="number" class="form-control" id="validationServer053" name="year" value="<?= $student['year']; ?>" min="1" max="4" >
      </div>
    
    <div class="col-md-4 mb-3">
        <label for="section">Section</label>
        <input class="form-control" type="text" id="section" name="section" value="<?= $student['section']; ?>">
      </div>
    </div>
    <button class="btn btn-primary mb-3" type="submit">Submit form</button>
    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.min.js" />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>