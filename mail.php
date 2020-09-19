<?php
include('forserver.php');
?>
<?php include ("ui/cabeçalho.php")?>
    <div class="container-fluid" >
        <h1 class="mt-4" style="color:#610B21">Enviar um E-mail</h1><br><br>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="email.php" method="get">
                            <label for="">Remetente:</label><br>
                                <input type="text" name="remetente"><br>
                            <label for="">Assunto:</label><br>
                                <input type="text" name="assunto"><br>
                            <label for="">Mensagem:</label><br>
                                <input type="text" name="mensagem"><br>
                                    <br>
                                <input type="submit" value="Enviar">
                        </form>
                    </div>
                    <div class="col">
                        <img src="email.jpg" alt="">
                    </div>
                </div>
            </div>
    </div>
<?php include ("ui/rodape.php")?>

    