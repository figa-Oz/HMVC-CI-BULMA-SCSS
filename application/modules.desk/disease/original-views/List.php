
  <section class="has-background-light">
    <br>
    <div class="has-background-danger" style="padding: 10px;">
      <div class="columns is-variable is-12 is-mobile">
        <div class="column header-sub">
          <table class="table has-background-danger">
          <thead>
            <tr class="title has-text-white is-size-6-mobile">
              <th class="has-text-white"><span class="tag is-primary">Primary</span></th>
              <th class="has-text-white"><?php echo ucwords($detail->row()->category_name) ?></th>
            </tr>
          </thead>
        </table>
        </div>
      </div>
    </div>
  </section>

  <style>
    .rot-90{
      -moz-transform: rotate(-90deg) translate(1px, 0px);
      -webkit-transform: rotate(-90deg) translate(1px, 0px);
      -o-transform: rotate(-90deg) translate(1px, 0px);
      -ms-transform: rotate(-90deg) translate(1px, 0px);
      transform: rotate(-90deg) translate(1px, 0px);
      margin-right: -25px;
      margin-top: -10px;
    }

    .art-media{
      /* background-color: transparent !important; */
      border: none !important;
    }

    .med-rad{
      border-style: outset; border-radius: 20px;
      background-color: white;
    }

    .med-rad div h1{
      text-align: center;
      padding: 20px 0;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
      color: white
    }

    .med-rad div .art-content{
      padding: 10px 15px;
    }

    .med-rad div a{
      font-size: 18px;
      cursor: pointer;
    }

    .med-rad div .art-content h2 {
      text-align: left !important;
      font-size: 18px;
    }

  </style>

<br>

<div class="box" style="padding: 10px;">
<section style="padding: 10px;">
<?php $no = $this->uri->segment(3); foreach ($detail->result() as $row): ?>
<article class="media">
  <figure class="media-left" style="padding-top: 5px;">
    <p class="image is-96x96 is-square">
      <img src="<?php echo base_url() ?>vendors/thumbs/<?php echo $row->category_name ?>/<?php echo $row->post_slug ?>.jpg">
    </p>
  </figure>
  <div class="media-content">
    <p>
        <big class="has-text-info"><b><?php echo ucwords($row->post_title) ?></b></big>
    	<!-- <small class="fr rot-90" style="font-size: 11px"><i><?php echo $row->created_at ?></i></small> -->

      <div class="art-content" style="font-weight: normal; text-transform: lowercase;">
        <?php echo mb_substr($row->post_content,0,650)."..."; ?>
      </div>
    </p>

    <nav class="level is-mobile">
      <div class="level-left">
        <a class="level-item" aria-label="more" href="<?php site_url(); ?>article/<?php echo $row->post_slug ?>" onclick="window.location = '<?php site_url(); ?>article/<?php echo $row->post_slug ?>'">
        Baca &nbsp; <span class="icon is-small"><i class="fab fa-readme" aria-hidden="true"></i></span>
        </a>
      </div>
    </nav>
  </div>
</article>

<hr style="background-color: silver;">

<?php endforeach; ?>
</section>

</div>
