<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Weather Report</title>
  </head>
  <body>
    <div class="container p-4">
        <div class="row bg-light">
            <div class="col-lg-6 p-3">
                <h3 class="text-center">
                    Weather Report
                </h3>
                <form action="" method="post">
                <div class="form-group">
                    <label for="temp">Enter Temperature</label>
                    <input type="number" class="form-control" id="temp" placeholder="Test Case" name="test" type="number" id="price" min="-1000" max="1000" step="0.01" required>
                </div>
    
                <input type="submit" value="Submit" name="convert" class="btn mx-auto d-block text-white bg-primary">
                </form>

                <?php
                    if(isset($_POST['convert'])){
                        $test = $_POST['test'];
                            
                        if($test < 10){
                            $result = "It's freezing!";
                        } elseif($test >= 10 && $test < 20){
                            $result = "It's cool.";
                        } elseif($test >= 20 ){
                            $result = "It's warm.";
                        }
                    }
                ?>
            </div>
            <div class="col-lg-6 p-3 justify-content-center align-item-center">
                <h3 class="text-center"><?php if(isset($result)) echo $result;?></h3>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
