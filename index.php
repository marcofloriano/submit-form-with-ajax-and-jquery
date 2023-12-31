<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>jQuery submit form with Ajax</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <h3 class="py-2 text-center mb-4">jQuery Submit Form with Ajax</h3>

  <div class="container">
    <div class="card mx-auto p-3" style="width: 20rem;">

      <div class="card-body">
        <form action="post.php" id="submitform" method="post">
          <div class="input-group mb-4">
            <span class="input-group-text"><i class="large material-icons">account_circle</i></span>
            <input type="text" class="form-control" placeholder="Username" name="username">
          </div>

          <div class="input-group mb-4">
            <span class="input-group-text"><i class="large material-icons">email</i></span>
            <input type="email" class="form-control" placeholder="Email Address" name="email">
          </div>

          <div class="input-group mb-4">
            <span class="input-group-text"><i class="large material-icons">fingerprint</i></span>
            <input type="password" class="form-control" placeholder="Password" name="password">
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
          </div>
        </form>
      </div>

      <div class="result text-center"></div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<script type="text/javascript">
  $('#submitform').submit(function (event) {
   event.preventDefault();

   $.ajax({
      type: "POST",
      url: "post.php",
      data: $(this).serialize(),
       success: function (data) {
         console.log(data);
       $('.result').html(data);
      }
    });
});
</script>