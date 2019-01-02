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

  h1{font-size: 36px; color: #EB5604; font-weight: 700; font-family: 'Merriweather', serif;}
  h2{font-size: 24px; font-weight: 700; font-family: 'Merriweather', serif;}
  h3{font-size: 20px}
  h4{font-size: 18px}
  /* p span{font-family: 'Source Sans Pro', sans-serif;} */
</style>

<div class="tile is-ancestor" style="margin-top: 10px;">
  <div class="tile is-vertical is-12">
    <div class="tile">
      <div class="tile is-parent">
        <article class="tile is-child box">
          <h1 class="has-text-centered"><?php echo ucwords($detail->row()->post_title); ?></h1s>
          <hr style="background-color: #EB5604;">
          <!-- <figure class="image is-4by3">
            <img src="https://bulma.io/images/placeholders/640x480.png">
          </figure> -->

          <?php echo $detail->row()->post_content; ?>
          <hr style="background-color: #EB5604;">
        </article>
      </div>
    </div>
  </div>
</div>
