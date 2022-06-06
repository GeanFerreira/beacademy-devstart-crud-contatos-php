<h1>Editar Cadastro</h1>
<hr>

<form action="" method="post">

    <input class="form-control mt-2" value ="<?php echo $dados[0]; ?>" name='nome' type="text" placeholder="Digite seu Nome" required>
    <input class="form-control mt-2" value ="<?php echo $dados[1]; ?>" name='email' type="text" placeholder="Digite seu Email" required>
    <input class="form-control mt-2" value ="<?php echo $dados[2]; ?>" name= 'telefone' type="tel" placeholder="Digite seu Telefone" required>
        
    <br>
    <button class="btn btn-primary mt-3">Enviar</button>
</form>