<?php $this->load->view('elements/header');?>
  <div class="wrapper ">
    <?php $this->load->view('elements/sidebar_lateral');?>
    <?php $this->load->view('elements/sidebar');?>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-user">
            <div class="card-header">
              <h5 class="card-title">Cadastrar cliente</h5>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url(); ?>clients/insert_client" method="post">
                <div class="row">
                  <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <label for="nome">Nome</label>
                      <input type="text" name="nome" id="nome" class="form-control" placeholder="" value="">
                      <?php echo form_error('nome'); ?>
                    </div>
                  </div>
                  <div class="col-md-4 pr-1 pl-1">
                    <div class="form-group">
                      <label for="email">E-mail</label>
                      <input type="text" name="email" id="email" class="form-control" placeholder="" value="">
                      <?php echo form_error('email'); ?>
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                      <label for="telefone">Telefone</label>
                      <input type="text" name="telefone" id="telefone" class="form-control" placeholder="" value="">
                      <?php echo form_error('telefone'); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 pr-1">
                    <div class="form-group">
                      <label for="estado">Estado</label>
                      <input type="text" name="estado" id="estado" class="form-control" placeholder="" value="">
                      <?php echo form_error('estado'); ?>
                    </div>
                  </div>
                  <div class="col-md-4 pr-1 pl-1">
                    <div class="form-group">
                      <label for="cidade">Cidade</label>
                      <input type="text" name="cidade" id="cidade" class="form-control" placeholder="" value="">
                      <?php echo form_error('cidade'); ?>
                    </div>
                  </div>
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                      <label for="nascimento">Nascimento</label>
                      <input type="text" name="nascimento" id="nascimento" class="form-control" placeholder="" value="">
                      <?php echo form_error('nascimento'); ?>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" name="cadastrar_cliente" class="btn btn-primary btn-round float-md-right float-sm-right float-xs-right">Cadastrar</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $this->load->view('elements/footer');?>
