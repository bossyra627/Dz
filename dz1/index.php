<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
</head>
<body>
<div class="container my-5">
    <h1 class="text-center my-3"> Регестрация </h1>
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
                <input type="submit" class="form-control btn btn-primary">
            </div>
        </form>
    </div>
</div>

</body>
</html>
