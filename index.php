<?php include 'database.php'; ?>
<?php
  //create select query
  $query = "SELECT * FROM shouts ORDER BY id DESC";
  $shouts = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JS shoutbox</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- bootstraps 3-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
  </head>
  <body>
    <div id="container" class="container col-sm-12">
      <header>
        <h1 class="text-center">JS Shoutbox</h1><img class="image" src="https://cdn2.iconfinder.com/data/icons/business-attitude/512/megaphone-512.png" alt="shout" height="80">
      </header>
      <div id="shouts">
        <!-- PHP will run a loop and fatch the shouts-->
        <ul>
          <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
            <!-- putting dtaa into the correct format -->
            <li><?php echo $row['name']; ?>: <?php echo $row['shout']; ?> [<?php echo $row['date']; ?>]</li>
          <?php endwhile; ?>
        </ul>
      </div>
      <footer class="text-center">
        <form class="container">
          <div class="col-md-3 col-lg-3">
          <label class="">Name: </label>
          <input class="" type="text" id="name">
          </div>
          <div class="col-md-5 col-lgd-5">
          <label class="">Shout: </label>
          <input class="" type="text" id="shout">
          </div>
          <div class="col-md-3 col-lg-3">
          <input class="" type="submit" id="submit" value=" SHOUT! ">
          </div>
        </form>
      </footer>
    </div>
  </body>
</html>
