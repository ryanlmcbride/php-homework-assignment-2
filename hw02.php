<?php
$color="";
$red=(trim($_GET["red"]));
$orange=(trim($_GET["orange"]));
$yellow=(trim($_GET["yellow"]));
$green=(trim($_GET["green"]));
$blue=(trim($_GET["blue"]));
//if(isset($_GET["submit"])){
  //if
//}
?>
<!DOCTYPE html>
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form method="get" action="" class="form-horizonal">
          <center><h1 class="jumbotron">Color Display</h1></center>
            <div class="form-group">
              <label>Please Choose a Color or Type in a Color Below: </label>
              <div class="col-sm-6">
                <input type="text" name="Inputcolor" class="form-control" value="">
              </div>
            </div>
           <!--<div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Colors
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Red</a></li>
                  <li><a href="#">Orange</a></li>
                  <li><a href="#">Yellow</a></li>
                  <li><a href="#">Green</a></li>
                  <li><a href="#">Blue</a></li>
                  <li><a href="#">Indigo</a></li>
                  <li><a href="#">Violet</a></li>
                  <li><a href="#">Pink</a></li>
                  <li><a href="#">White</a></li>
                  <li><a href="#">Black</a></li>
                  <li><a href="#">Brown</a></li>
                </ul>
            </div>-->
      <label for="colors">Select ONE color:</label>
        <select class="form-control" id="colors">
          <option value="red">Red</option>
          <option value="orange">Orange</option>
          <option value="yellow">Yellow</option>
          <option value="green">Green</option>
          <option value="blue">Blue</option>
          <option value="indigo">Indigo</option>
          <option value="violet">Violet</option>
          <option value="pink">Pink</option>
        </select>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        <hr>

        <table class="table" style="background-color: <?php echo $color; ?>">
          <tr>
            <td> Color duh</td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
