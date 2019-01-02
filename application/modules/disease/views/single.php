<style>
  @import url('https://fonts.googleapis.com/css?family=Aclonica|Quicksand');

  ol,ul{
    margin-left: 20px;
    padding-left: 20px;
    direction: ltr !important;
  }

  ul{
    list-style: disc;
  }

  h1{
    font-family: 'Aclonica', sans-serif;
    font-weight: 500 !important;
    /*font-size: 2em !important;*/
    text-align: center !important;
    text-transform: capitalize !important;
    box-sizing: border-box !important;
    display: block !important;
    text-size-adjust: 100% !important;
    color: #EB5604 !important;
    font-size: 28px !important;
  }

  h2, h3, h4{
    font-family: 'Quicksand', sans-serif !important;
    font-weight: bold !important;
    box-sizing: border-box !important;
    text-size-adjust: 100% !important;
    display: block !important;
    color: #000 !important;
  }

  /*h4{
    font-size: 20px !important;
  }*/

  h3{
    font-size: 20px !important;
  }

  h2{
    font-size: 22px !important;
  }

  .content-single{
    font-family: 'Quicksand', sans-serif !important;
    color: #333 !important;
    visibility: visible !important;
    text-size-adjust: 100% !important;
    line-height: 1.5 !important;
    box-sizing: border-box !important;
    text-align: start end !important;
    /*text-align: match-parent;*/
    direction: ltr !important;
    overflow-wrap: break-word !important;
    /*word-wrap: break-word !important;*/
    /*word-break: break-word !important;*/
    /*word-break: break-all;*/
  }

  blockquote{
    background-color: #63D1F4 !important;
    color: white !important;
    border-left-color: #209CEE !important;
  }

  blockquote p span{
    background-color: #63D1F4 !important;
  }

  blockquote p span strong{
    color: #242424 !important;
  }

  /*New List*/
  .khaki-rg>section{
    margin-right: -12px !important;
  }

  .list-content{
    height: 95px !important;
    /*margin-right: 5px;*/
    /*margin-left: 5px;*/
    overflow-y: auto !important;
    /*background: cyan;*/
  }

  ::-webkit-scrollbar{
    background: transparent;
    opacity: 0.5;
    width: 0.5em;
  }

  /*::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background: transparent;
    opacity: 0.5;
    border-radius: 10px;
  }*/

  ::-webkit-scrollbar-track-piece{
    background-color: transparent;
    -webkit-border-radius: 6px;
  }
   
  /*::-webkit-scrollbar-thumb {
    border-radius: 10px;
    background-image: -webkit-gradient(linear,
    left bottom,
    left top,
    color-stop(0.44, rgb(122,153,217)),
    color-stop(0.72, rgb(73,125,189)),
    color-stop(0.86, rgb(28,58,148)));
  }*/

  /*::-webkit-scrollbar-thumb:hover {
    border-radius: 10px;
    background-color: #D62929;
    background-image: -webkit-linear-gradient(90deg,transparent,rgba(0, 0, 0, 0.4) 50%,transparent,transparent)
  }*/

  .list-content>h1{
    margin-top: -2px !important;
    /*padding-right: 7px;*/
    /*margin-left: 5px;*/
    text-decoration: underline;

    font-family: 'Aclonica', sans-serif !important;
    font-weight: 300;
    font-size: 14px !important;
    text-align: left !important;
    color: #3273DC !important;
  }

  .list-content h2{
    font-size: 14px !important;
    margin: 0 !important;
    padding: 0 !important;
    font-weight: normal !important;
    /*line-height: 7px !important;*/
    font-style: italic;
  }

  .list-content h2 strong{
    font-size: 14px !important;
    margin: 0 !important;
    padding: 0 !important;
    font-weight: normal !important;
    /*line-height: 7px !important;*/
    font-style: italic;
  }

  .list-content p{
    line-height: 14px !important;
  }

  .list-content p span{
    font-size: 14px !important;
    line-height: 1 !important;
  }

  .list-content>.content-primary{
    font-family: 'Quicksand', sans-serif !important;
    font-weight: normal !important;
    word-break: break-all;
    direction: ltr !important;
    word-spacing: 1px !important;
    /*padding-left: 5px;*/
    padding-right: 7px;
  }

  .list-content>a.more{
    right: 0;
    top: 0;
    position: absolute !important;
    height: 100%;
    margin: 0;
    padding: 0;
    background: #3273DC;
    opacity: 0.8;
  }

  .list-content>a.more>i{
    margin-top: 65px;
    vertical-align: middle;
    color: khaki;
  }
</style>

<div style="margin: 30px 0;">
  <div class="tile is-ancestor boxshadow" style="background: white; padding: 0 !important; margin: 0 !important">
    <div class="tile is-vertical is-12">
      <div class="tile">
        <div class="tile is-parent">
          <article class="tile is-child">
            <div class="is-marginless is-paddingless parent-single">
              <h1 class="has-text-centered" style="margin-top: 20px;"><?php echo ucwords($detail->row()->post_title); ?></h1>
              <hr style="background-color: #EB5604;">
              <div class="content-single content">
                <?php echo $detail->row()->post_content; ?>
              </div>
              <hr style="background-color: #EB5604;">
            </div>
          </article>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="has-background-light">
  <br>
  <div class="has-background-danger" style="padding: 10px;">
    <div class="columns is-variable is-12 is-mobile">
      <div class="column header-sub">
        <table class="table has-background-danger" style="width: 100%;">
        <thead>
          <tr class="has-text-white is-size-6-mobile">
            <td class="has-text-white">
              <h4 class="has-text-white">Artikel Terkait</h4>
            </td>
          </tr>
        </thead>
      </table>
      </div>
    </div>
  </div>
</section>

<?php foreach ($postlist->result() as $row): ?>
<div class="khaki-rg box" style="position: relative; margin: 10px;">
  <section>
    <article class="media">
      <figure class="media-left">
        <p class="image is-96x96 is-square">
          <img src="<?php echo base_url('vendors/thumbs/'.$row->category_slug.'/'.$row->post_slug.'.jpg') ?>">
        </p>
      </figure>
      <div class="media-content" onclick="window.location = '<?php echo site_url("disease/".$row->category_slug."/".$row->post_slug); ?>'">
        <div class="is-size-7-mobile list-content">
            <h1><?php echo ucwords($row->post_title) ?></h1>
            <div class="content-primary">
              <?php
              $text  = $row->post_content;
              echo cutText($text, 600). '...';
              ?>
            </div>

            <a class="more" aria-label="Kunjungi" href="<?php echo site_url('disease/'.$row->category_slug.'/'.$row->post_slug); ?>">
              <i class="fas fa-hand-point-right fa-md"></i>
            </a>
        </div>
      </div>
    </article>
  </section>
</div>
<?php endforeach; ?>