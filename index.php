<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style type="text/css">
         body {
            background-color: gray;
         }
         .login {
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
            display: flex;
         }
    </style>
</head>
<body >
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-4">
                    <div class="card">
                        <div class="card-body">
                            <h2>Login</h2>
                        </div>
                        <div class="card-body">
                            <form action="login.php" method="POST">
                        <div>
                            <div class="mb-3">
                                <label>usuario</label>
                                <input type="text" name="usuario" class="form-control">
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <label>senha</label>
                                <input type="password" name="senha" class="form-control">
                                
                            </div>
                        </div>
                        <div>
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </div>

                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>