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
        <li class="shout"><span>21:36 - </span>Kate: Badabing Badaboom!</li>
        <li class="shout"><span>21:36 - </span>Kate: Badabing Badaboom!</li>
        <li class="shout"><span>21:36 - </span>Kate: Badabing Badaboom!</li>
        <li class="shout"><span>21:36 - </span>Kate: Badabing Badaboom!</li>
      </ul>
    </div>
    <div id="input">
      <form method="POST" action="process.php">
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

        <button type="submit" class="btn btn-success btn-block">SEND YO' SHOUT!</button>
      </form>
    </div>
  </div>
</body>
</html>
