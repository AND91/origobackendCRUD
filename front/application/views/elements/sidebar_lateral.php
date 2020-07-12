<?php $paginaCorrente = $_SERVER['REQUEST_URI'];?>
<div class="sidebar" data-color="white" data-active-color="danger">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="" class="simple-text logo">
      <div class="logo-image">
        <img src="<?php echo base_url();?>assets/img/logo.png">
      </div>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li <?php echo(strpos($paginaCorrente, '/inicio') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>inicio">
          <i class="nc-icon nc-bank"></i>
          <p>Início</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/clients') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>clients">
          <i class="nc-icon nc-diamond"></i>
          <p>Clientes</p>
        </a>
      </li>
      <li <?php echo(strpos($paginaCorrente, '/plans') !== false ) ? 'class="active"' : ''; ?>>
        <a href="<?php echo base_url();?>plans">
          <i class="nc-icon nc-diamond"></i>
          <p>Planos</p>
        </a>
      </li>
    </ul>
  </div>
</div>
