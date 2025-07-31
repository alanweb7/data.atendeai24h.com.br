<?php defined("BASEPATH") or exit("No direct script access allowed"); ?>
<?php init_head(); ?>
<div id="wrapper">
  <div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="panel_s">
          <div class="panel-body">
            <h4 class="no-margin"><?php echo _l("$slug"); ?></h4>
            <hr>
            <?php echo form_open(); ?>
              <div class="form-group">
                <label for="nome"><?php echo _l("Nome do Módulo"); ?></label>
                <input type="text" id="nome" name="nome" class="form-control">
              </div>
              <div class="form-group">
                <label for="menu"><?php echo _l("Menu Principal"); ?></label>
                <input type="text" id="menu" name="menu" class="form-control">
              </div>
              <div class="form-group">
                <label for="autor"><?php echo _l("Autor"); ?></label>
                <input type="text" id="autor" name="autor" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary"><?php echo _l("submit"); ?></button>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php init_tail(); ?>
