<?php
        $dataBase = [
            "usernameAdmin" => "admin",
            "passwordAdmin" => "admin"
        ];
        if (isset($_POST["submit"])) {
            if ($_POST["username"] == "" && $_POST["password"]="") {
                // Jika input kosong, tampilkan peringatan mengisi
                $kosong = true;
                exit; // Tambahkan titik koma (;) setelah "exit"
            } elseif ($_POST["username"] == $dataBase["usernameAdmin"] && $_POST["password"] == $dataBase["passwordAdmin"]) {
                // Redirect ke admin.php jika input benar
                header("Location: ./admin.php");
                exit;
            } else {
                // Jika input salah, tandai variabel $salah sebagai true
                $salah = true;
            }
        }        
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="text-center">
    <h1 class="mt-5">Hello, world!</h1>
    <?php if (isset($kosong)) { ?>
        <p style="color:red; font-style: italic;" >Isi formulir terlebih dahulu !!!</p>
    <?php } elseif (isset($salah)) { ?>
        <p style="color:red; font-style: italic;">Username atau password salah !!!</p>
    <?php } ?>
    <div class="row justify-content-center">
        <div class="col-6 ">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="exampleUsername" class="form-label">Username</label>
                    <input type="text" class="form-control" id="exampleUsername" aria-describedby="emailHelp" name="username">
                    <div id="emailHelp" class="form-text">We'll never share your username with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="mb-3 form-check text-start">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" name="setuju">Im Human</label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>