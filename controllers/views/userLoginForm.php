<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <form action="../models/retrieveUser.php" method="POST">
    <label for="uEmail">Email</label>
    <input type="text" name="uEmail" />
    <br />

    <label for="uPassword">Password</label>
    <input type="text" name="uPassword" />
    <br />

    <input type="submit" value="Submit" />
  </form>
</body>

</html>