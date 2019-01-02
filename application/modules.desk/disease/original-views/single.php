<style>
  ol,ul{
    margin-left: 20px;
    padding-left: 20px;
  }

  ul{
    list-style: disc;
  }

  h2,h3,h4,h5,h6 {
    font-weight:300;
  }

  h1{
    font-size: 36px; color: black; font-weight: 700; font-family: 'Merriweather', serif; background: #63D1F4; padding: 10px;
  }
  h2{
    font-size: 24px; font-weight: 700; font-family: 'Merriweather', serif !important; background: #EB5604; padding: 10px; color: #fff !important; text-align: center !important; border-radius: 5px;
  }
  h2 span strong{
    color: #fff !important;
  }
  h3{font-size: 20px}
  h4{font-size: 18px}
  article{
    letter-spacing: 0.5px;
    word-spacing: 1px;
  }
  blockquote{
    background-color: #63D1F4 !important;
    color: white !important;
    border-left-color: #209CEE !important;
  }

  blockquote p span{
    background-color: #63D1F4 !important;
  }
  /* p span{font-family: 'Source Sans Pro', sans-serif;} */
</style>

<div class="tile is-ancestor" style="margin-top: 10px;">
  <div class="tile is-vertical is-12">
    <div class="tile">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <h1 class="has-text-centered"><?php echo ucwords($detail->row()->post_title); ?></h1>
          <hr style="background-color: #EB5604;" />
          <div class="content">
            <?php echo $detail->row()->post_content; ?>
          </div>
          <hr style="background-color: #EB5604;" />
        </article>
      </div>
    </div>
  </div>
</div>
