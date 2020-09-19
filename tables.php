<?php
    include('forserver.php');
    $idSelecionado=-1;
?>


<?php include ("ui/cabeçalho.php")?>
        
        <!-- Criação do Bem-Vindo-->

<div class="container-fluid" style="color:#610B21">
<br>
<h5 style="color:#BC8F8F"><?php   
    $_SESSION["username"]="";
    echo "Bem-vindo ".$_SESSION["username"]."<br>";
?></h5>


    <h1 style="text-align:center">Dados dos Formandos do CESAE</h1>
<br>

                        <!-- Modal Create-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">           
                <h5 class="modal-title" id="exampleModalLabel">Adicionar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="tables.php">
                    <?php include('errors.php'); ?>
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="pnome" required>
                        </div>
                        <div class="form-group">
                            <label>Morada</label>
                            <input type="text" class="form-control"  name="morada" required>
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" class="form-control" name="telefone" required>
                        </div>
                        <div class="form-group">
                            <label for="data">Data de nascimento:</label>
                            <input type="date" name="dn" id="dn">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary" name="reg_p">Submeter</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
                

        <!-- Criação dos botões adicionar e print-->
                       
<div class="card-body">
    <button  class="btn btn-info float-right mb-3 mr-2" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Adicionar</button>
    <button type="button" class="btn btn-outline-success" onclick="print()">Print</button>
        <br>
        <br>
        
            <!-- Criação do botão pesquisar-->

            <div class="col-md-12 text-center">
            <form action="search.php" method="post" class="form-group">
                <input type="text" placeholder="Pesquisar" name="search" class="form-control">
            </form>
        </div>
        <!-- Criação dos campos a preencher-->
        <div class="table-responsive" style="text-align:center">
            <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Morada</th>
                        <th>Telefone</th>
                        <th>Data de Nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                    <!-- Conecção com a base de dados-->

            <?php
                $servername = "localhost"; 
                $usernameBd = "aluno";
                $passwordBd = "aluno";
                $dbname = "DWEB2";

                // Create connection
                $conn = new mysqli($servername, $usernameBd, $passwordBd, $dbname);                                      
                $sql = 'SELECT * from formando';
                if (mysqli_query($conn, $sql)) {
                    echo "";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                $count=0;
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                while($row = mysqli_fetch_assoc($result)) { ?>
                <tbody>
                    <tr>
                        <th>
                            <?php echo $row['id']; ?>
                        </th>
                        <td>
                            <?php echo $row['nome']; ?>
                        </td>
                        <td>
                            <?php echo $row['morada']; ?>
                        </td>
                        <td>
                            <?php echo $row['telefone']; ?>
                        </td>
                        <td>
                            <?php echo $row['dn']; ?>
                        </td>
                        <td>
                            <?php echo '<span class="table-edit"><button type="button"
                                        class="btn btn-success btn-rounded btn-sm my-0" onclick="location.href=\'editar.php?id='.$row['id'].'&nome='.$row['nome'].'&morada='.$row['morada'].'&telefone='.$row['telefone'].'&dn='.$row['dn'].'\'">Editar</button></span>
                                        <span class="table-remove"><button type="button"
                                        class="btn btn-danger btn-rounded btn-sm my-0" onclick="location.href=\'apagar.php?id='.$row['id'].'\'" >Remover</button></span>'?>
                                                            
                                <!-- data-id="" data-toggle="modal" data-target="#exampleModalUpdate"  -->
                        </td>
                    </tr>
                </tbody>
                <?php
                    $count++;
                    }
                    } else {
                        echo '0 results';
                    }
                ?>
            </table>  
           <h5 style="color:#0040FF"><?php echo "Existem ".$count. " Formandos"; ?></h5>
        </div>
    </div>
</div>

<?php include ("ui/rodape.php")?>
                    
       