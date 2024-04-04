<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form action="DAO.php" method="POST">
      <label for="uName">Name</label>
      <input type="text" name="uName" required />
      <br />

      <label for="uEmail">Email</label>
      <input type="email" name="uEmail" required />
      <br />

      <label for="uPassword">Password</label>
      <input type="password" name="uPassword" required />
      <br />

      <label for="uPhone">Phone</label>
      <input type="text" name="uPhone" />
      <br />

      <input type="submit" value="Submit" />
    </form>
  </body>
</html>
