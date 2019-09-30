<div class="card-body">
    <h4 class="card-title">Novo Contato</h4>

    <form method='POST' action='<?php echo base_url() ?>index.php/contatos/salvarNovo'>
        <label>Nome:</label>
        <input class="form-control" type='text' name='nome' />
        <br />
        <label>Telefone:</label>
        <input class="form-control" type='text' name='telefone' />
        <br />
        <label>Email:</label>
        <input class="form-control" type='text' name='email' />
        <br />
        <label>Cidade:</label>
        <input class="form-control" type='text' name='cidade' />
        <br />
        <label>Estado:</label>
        <input class="form-control" type='text' name='estado' />
        <br />
        <label>Pais:</label>
        <input class="form-control" type='text' name='pais' />
        <br />

        <input type='submit' class='btn btn-warning btn-fw' value='Enviar' />
    </form>