<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Big Shout Out</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div id="container">
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
        <input type="text" name="user" placeholder="Enter your name">
        <input type="text" name="message" placeholder="Shout something">
        <button type="submit">SEND YO' SHOUT!</button>
      </form>
    </div>
  </div>
</body>
</html>
