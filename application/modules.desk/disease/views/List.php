<div class="uk-container-expand">
  <br>
  <div class="uk-tile uk-tile-primary uk-padding-small">
    <div id="tagLabel" class="uk-text-center animated infinite swing delay-2s">
      <i class="fas fa-tags"></i><br>
      <span class="uk-label"><?php echo ucwords($detail->row()->category_name) ?></span>
    </div>
  </div>
  <br>
  <div class="uk-child-width-1-2@s superParent" uk-grid>
    <?php $no = $this->uri->segment(3); foreach ($detail->result() as $row): ?>
      <div class="parentList">
          <div class="uk-light listFiga uk-padding" onclick="window.location = '<?php site_url(); ?>article/<?php echo $row->post_slug ?>'">
              <h3><?php echo ucwords($row->post_title) ?></h3>
              <img class="uk-comment-avatar" src="<?php echo base_url() ?>vendors/thumbs/<?php echo $row->category_name ?>/<?php echo $row->post_slug ?>.jpg" width="80" height="80" alt="<?php echo $row->post_title ?>" style="float: right;">
              <p><?php echo mb_substr($row->post_content,0,650)."..."; ?></p>
              <a href="<?php site_url(); ?>article/<?php echo $row->post_slug ?>" class="uk-button uk-button-default">Button</a>
          </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>

<hr>
