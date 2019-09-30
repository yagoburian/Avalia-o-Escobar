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

        <label>Cidade:</label>
        <input class="form-control" type='text' name='estado' value='<?php echo $contato[0]->estado; ?>' />
        <br />

        <label>Estado:</label>
        <input class="form-control" type='text' name='cidade' value='<?php echo $contato[0]->cidade; ?>' />
        <br />

        <label>Pais:</label>
        <input class="form-control" type='text' name='pais' value='<?php echo $contato[0]->pais; ?>' />

        <br />

        <br>
        <br>
        <input class="btn btn-warning mr-2" type='submit' value='Salvar' />

    </form>
</div>