<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>
    <form action="/students/put/<?= $student['id']; ?>" method="post">
        <input type="text" name="id" placeholder="ID" value="<?= $student['id'] ?>" readonly><br>
        <input type="text" name="firstname" placeholder="First Name" value="<?= $student['firstname']; ?>">
        <input type="text" name="middlename" placeholder="Middle Name" value="<?= $student['middlename']; ?>">
        <input type="text" name="lastname" placeholder="Last Name" value="<?= $student['lastname']; ?>">
        <input type="text" name="phoneno" placeholder="Phone No." value="<?= $student['phoneno']; ?>">
        <input type="text" name="course" placeholder="Course" value="<?= $student['course']; ?>">
        <input type="text" name="year" placeholder="Year" value="<?= $student['year']; ?>">
        <input type="text" name="section" placeholder="Section" value="<?= $student['section']; ?>">
        <input type="submit" value="Submit">
    </form>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>