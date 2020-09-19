<?php include ("ui/cabeçalho.php")?>
<div >
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Editar</h5>  
        </div>
    <div class="modal-body">
        <form method="post" action="tables.php">
            <div class="form-group">
                <input disable type="text" class="form-control" name="id"  value = "<?php echo $_GET['id'];?>"required hidden>
            </div>
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="pnome"  value = "<?php echo $_GET['nome'];?>"required>
            </div>
            <div class="form-group">
                <label>Morada</label>
                <input  type="text" class="form-control"  name="morada" value = "<?php echo $_GET['morada'];?>" required>
            </div>
            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" name="telefone" value = "<?php echo $_GET['telefone'];?>" required>
            </div>
            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="text" class="form-control" name="dn" value = "<?php echo $_GET['dn'];?>" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="reg_editar">Submeter</button>
                <a href="tables.php" class="btn btn-warning">Voltar</a>
            </div>
        </form>
    </div>
    </div>
</div>


<?php include ("ui/rodape.php")?>
