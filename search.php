<?php
    include('forserver.php');
    $idSelecionado=-1;
?>

<?php include ("ui/cabeçalho.php")?>

                    
<?php 

if(isset($_POST['search'])){
    $servername = "localhost"; 
    $usernameBd = "aluno";
    $passwordBd = "aluno";
    $dbname = "DWEB2";


   $conn = new mysqli($servername, $usernameBd, $passwordBd, $dbname);   
    $pnome = htmlspecialchars ($_POST['search']);
     $sql = "SELECT * from formando where nome like '%$pnome%' or morada like '%$pnome%' or dn like '%$pnome%' or telefone like '%$pnome%'   ";
     $count=0;
     $result = mysqli_query($conn, $sql);
 
 ?>

<?php  
} 
?>
<div class="container-fluid" style="color:#610B21">
<br>
    <h1 style="text-align:center">Dados dos Formandos do CESAE</h1>
<br>     
   
        <!-- Criação do botão print-->
                       
<div class="card-body">
    <button type="button" class="btn btn-outline-success" onclick="print()">Print</button>
        <br>
        <br>

            <!-- Criação do botão pesquisar-->
            <div class="col-md-12 text-center">
                <form action="search.php" method="post" class="form-group">
                    <input type="text" placeholder="Pesquisar" 
                    name="search" class="form-control">
                </form>
            </div>

            <!-- Criação dos campos a preencher-->
        <div class="table-responsive" style="text-align:center">
            
            
        <?php
                if (mysqli_num_rows($result) > 0) {
                    ?>
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

            <?php
                    while($row = mysqli_fetch_assoc($result)) { 
            ?>
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
                            <?php
                          
                          $count++;
                          }
                        
                           ?>
                        </tbody>
                 
                   </table>  
                   <h5 style="color:#0040FF" style="text-align:center"><?php echo "Existem ".$count. " Formandos"; ?></h5>
                   <?php
                                             
                          } else {
                           ?>
                           
                             <h2 class="text-danger text-center">Não foram encontrados resultados</h2>
                             <?php
                          
                              
                          }
                      ?>
                  
                </table> 
                    <?php   ?>                  
        </div> 
        <a href="tables.php" class="btn btn-warning" >Voltar</a>      
    </div>
</div>
    

<?php include ("ui/rodape.php")?>