<?php

  include 'database.php';

  $query = "SELECT * FROM shouts ORDER BY id DESC";
  $shouts = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Big Shout Out</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="container">
    <header>
      <h1>Big Shout Out!</h1>
    </header>
    <div id="shouts">
      <ul>
        <?php while($shout = mysqli_fetch_assoc($shouts)) : ?>
          <li class="shout">
            <span><?php echo $shout['time']; ?> - </span>
            <?php echo $shout['user']; ?>:
            <?php echo $shout['message']; ?>
          </li>
        <?php endwhile; ?>
      </ul>
    </div>
    <div id="input">
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <form method="post" action="process.php">
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <label for="user" class="sr-only">Name:</label>
              <input type="text" name="user" placeholder="Enter your name" class="form-control">
            </div>
          </div>
          <div class="col-sm-9">
            <div class="form-group">
              <label for="message" class="sr-only">Message:</label>
              <input type="text" name="message" placeholder="Shout something" class="form-control">
            </div>
          </div>
        </div>

        <button type="submit" name="submit" class="btn btn-success btn-block">SEND YO' SHOUT!</button>
      </form>
    </div>
  </div>
</body>
</html>
