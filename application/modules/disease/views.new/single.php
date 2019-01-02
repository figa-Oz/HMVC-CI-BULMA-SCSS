<br><br>
<div class="uk-container" style="border: 2px outset #F5F5F5 !important; padding-top: 20px;">
  <article class="uk-article">

      <h1 class="uk-article-title"><a class="uk-link-reset" href=""><?php echo ucwords($detail->row()->post_title); ?></a></h1>

      <p class="uk-article-meta">Written by <a href="#">admin</a> on <?php echo ucwords($detail->row()->created_at); ?>

      <p><?php echo $detail->row()->post_content; ?></p>

  </article>

</div>
<br><br>
