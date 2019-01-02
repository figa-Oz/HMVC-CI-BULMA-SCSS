<div class="uk-container-expand">
  <div class="uk-position-relative uk-visible-toggle .uk-dark" uk-slideshow="animation: pull; autoplay: true; ratio: 7:2;">

      <ul class="uk-slideshow-items">
          <li class="chat">
            <img src="<?php echo base_url() ?>images/frontend/slider/Slide-1.jpg" alt="ANDROLOGI" uk-cover>
          </li>
          <li class="chat">
            <img src="<?php echo base_url() ?>images/frontend/slider/Slide-2.jpg" alt="GINEKOLOGI" uk-cover>
          </li>
          <li class="chat">
            <img src="<?php echo base_url() ?>images/frontend/slider/Slide-3.jpg" alt="PMS" uk-cover>
          </li>
      </ul>

      <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
      <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    <div class="uk-position-bottom-center uk-position-small">
          <ul class="uk-dotnav">
              <li uk-slideshow-item="0"><a href="#">Item 1</a></li>
              <li uk-slideshow-item="1"><a href="#">Item 2</a></li>
              <li uk-slideshow-item="2"><a href="#">Item 3</a></li>
          </ul>
      </div>
  </div>
</div>
