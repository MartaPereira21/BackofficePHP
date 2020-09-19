<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Recuperação da password</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Recuperação de password</h3></div>
                                    <div class="card-body">
                                        <div class="small mb-3 text-muted">Insira o seu e-mail para lhe enviarmos um link para redefenir a sua password.</div>
                                            <form>
                                                <div class="form-group">
                                                    <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                    <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Insira o seu e-mail" />
                                                </div>
                                                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                    <a class="small" href="login.php">Retornar ao login</a>
                                                    <a class="btn btn-primary" href="login.php">Redefenir Password</a>
                                                </div>
                                            </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Precisa de uma conta? Inscreva-se!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
    <?php include ("ui/rodape.php")?>
