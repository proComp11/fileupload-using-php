
<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <?php 
                    session_start();
                    if(isset($_SESSION['errMsg1'])){
                        echo '<p class="alert alert-danger">'.$_SESSION['errMsg1'].'</p>';
                    }
                    if(isset($_SESSION['errMsg2'])){
                        echo '<p class="alert alert-danger">'.$_SESSION['errMsg2'].'</p>';
                    }
                    if(isset($_SESSION['errMsg3'])){
                        echo '<p class="alert alert-danger">'.$_SESSION['errMsg3'].'</p>';
                    }
                    if(isset($_SESSION['msgSucc'])){
                        echo '<p class="alert alert-success">'.$_SESSION['msgSucc'].'</p>';
                    }
                    session_destroy();
                ?>
            </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-sm-6">
            <form action="fileupload.php" method="post" enctype="multipart/form-data">
                <input type="file" class="form-control" name="fileToUpload" id="fileToUpload">
                <input type="submit" class="btn btn-success mt-2" value="Upload Image" name="submit">
            </form>
          </div>
        </div>
    </div>
</body>
</html>

