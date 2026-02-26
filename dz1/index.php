<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center my-3"> РегестрацияЫЫ </h1>
    <div class="col-md-5 mx-auto">
        <form action="regHandler.php" method="post" >
            <div class="mb-3">
                <input name="name" type="text" class="form-control" placeholder="Name">
            </div>
            <div class="mb-3">
                <input name="lastname" type="text" class="form-control" placeholder="Lastname">
            </div>
            <div class="mb-3">
                <input name="email" type="email" class="form-control" placeholder="Email">
            </div>
            <div class="mb-3">
                <input name="pass" type="password" class="form-control" placeholder="Password">
            </div>
            <div class="mb-3">
                <input type="submit" value = "Send">
            </div>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
