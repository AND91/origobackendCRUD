<?php $this->load->view('elements/header');?>
  <div class="wrapper ">
    <?php $this->load->view('elements/sidebar_lateral');?>
    <?php $this->load->view('elements/sidebar');?>
    <div class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title" style="display: inline;">Planos</h4>
              <!-- <a href="<?php echo base_url()?>clients/register" class="btn btn-primary float-md-right float-sm-right float-xs-right">Cadastrar</a> -->
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tabelaum" class="table table-striped">
                  <thead class=" text-primary">
                    <th>Plano</th>
                    <th>Mensalidade</th>
                  </thead>
                  <tbody>
                    <?php foreach ($plans as $row): ?>
                      <tr>
                        <td><?php echo $row->plano?></td>
                        <td><?php echo $row->mensalidade?></td>
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
