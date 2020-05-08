<?php
$color="";
if(isset($_GET["submit"]))
{
   if(isset($_GET["Inputcolor"])){
    $GLOBALS['color']=trim($_GET['Inputcolor']);
  }
   if($_GET['dropColors']!="null"){
        $GLOBALS['color'] = $_GET['dropColors'];
      }
   if(($_GET["Inputcolor"]!="null") && ($_GET["dropColors"]!="null")){
    echo "Enter a value through only one input.";
  }
}
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
                <input type="text" name="Inputcolor" class="form-control" value="<?php echo $color;?>">
              </div>
            </div>
            <label for="ddcolor">Select a Color:</label>
            <div class="col-sm-6">
              <select name="dropColors" class="form-control" id="ddcolor">
                <option value="null">Colors</option>
                <option value="red">Red</option>
                <option value="orange">Orange</option>
                <option value="yellow">Yellow</option>
                <option value="green">Green</option>
                <option value="blue">Blue</option>
                <option value="pink">Pink</option>
              </select>
            </div> <br>
              <div class="col-sm-2">
              <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
            </div>
              <hr>
        <table class="table" style="background-color:<?php echo $color;?>; height:200px; width: 200px;">
          <tr>
            <td> Color duh</td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
