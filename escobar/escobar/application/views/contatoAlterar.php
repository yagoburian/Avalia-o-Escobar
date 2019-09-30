
<div class="card-body">
    <h4 class="card-title">Alteração de contatos</h4>

    <form method='POST' action='<?php echo base_url() ?>index.php/contatos/salvarAlterar'>


        <input type='hidden' name='id' value='<?php echo $contato[0]->id; ?>' />
        <br>

        <label>Nome:</label>
        <input class="form-control" type='text' name='nome' value='<?php echo $contato[0]->nome; ?>' />
        <br />
        <label>Telefone:</label>
        <input class="form-control" type='text' name='telefone' value='<?php echo $contato[0]->telefone; ?>' />
        <br />
        <label>Email:</label>
        <input class="form-control" type='text' name='email' value='<?php echo $contato[0]->email; ?>' />
        <br>
        <br>
        <input class="btn btn-success mr-2" type='submit' value='Enviar' />

    </form>
</div>