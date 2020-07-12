<?php $this->load->view('elements/header');?>
  <div class="wrapper ">
    <?php $this->load->view('elements/sidebar_lateral');?>
    <?php $this->load->view('elements/sidebar');?>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" style="display: inline;">Clientes</h4>
              <a href="<?php echo base_url()?>clients/register" class="btn btn-primary float-md-right float-sm-right float-xs-right">Cadastrar</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tabelaum" class="table table-striped">
                  <thead class=" text-primary">
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                    <th>Nascimento</th>
                    <th></th>
                  </thead>
                  <tbody>
                    <?php foreach ($clients as $row): ?>
                      <tr>
                        <td><?php echo $row->nome?></td>
                        <td><?php echo $row->email?></td>
                        <td><?php echo $row->telefone?></td>
                        <td><?php echo $row->estado?></td>
                        <td><?php echo $row->cidade?></td>
                        <td><?php echo $row->nascimento?></td>
                        <td>
                          <a href="<?php echo base_url()?>clients/detail/<?php echo $row->id?>">
                            <i class="nc-icon nc-zoom-split"></i>
                          </a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $this->load->view('elements/footer');?>
