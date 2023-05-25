<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="../assets/css/styles.css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <style>
    .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
  .custab:hover{
      box-shadow: 3px 3px 0px transparent;
      transition: 0.5s;
      }
  </style>
</head>
<body>
  <br>
  <div class="container">
      <div class="row col-md-12 col-md-offset-0 custyle">
      <table class="table table-striped custab">
      <thead>
      <a href="students/add" class="btn btn-success"><b>+</b> Add new Students</a>
          <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Phone No.</th>
              <th>Course</th>
              <th>Year</th>
              <th>Section</th>
              <th class="text-center">Action</th>
          </tr>
      </thead>
        <?php foreach($students as $student): ?>
              <tr>
                  <td><?= $student['id']; ?></td>
                  <td><?= $student['firstname']; ?></td>
                  <td><?= $student['middlename']; ?></td>
                  <td><?= $student['lastname']; ?></td>
                  <td><?= $student['phoneno']; ?></td>
                  <td><?= $student['course']; ?></td>
                  <td><?= $student['year']; ?></td>
                  <td><?= $student['section']; ?></td>
                  <td class="text-center">
                    <a class='btn btn-info btn-xs' href="/students/edit/<?= $student['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                    <a href="/students/delete/<?= $student['id']; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</a>
                  </td>
              </tr>
        <?php endforeach; ?>
      </table>
      </div>
  </div>
</body>
</html>



