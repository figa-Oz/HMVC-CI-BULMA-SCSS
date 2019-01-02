<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
<!-- <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script> -->
<link type="text/css" href="<?php echo base_url('css/mystyles.css') ?>" rel="stylesheet"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>

<!-- Menu -->
<table id="menu" class="has-background-danger">
  <tr>
    <td class="has-text-centered is-size-7-mobile" onclick="window.location.href = '<?php echo site_url('home'); ?>'"><a href="<?php echo site_url('home'); ?>">Home</a></td>
    <td class="has-text-centered is-size-7-mobile" onclick="window.location.href = 'tentang'"><a href="tentang">Tentang Kami</a></td>
    <td class="has-text-centered is-size-7-mobile" onclick="window.location.href = 'fasilitas'"><a href="fasilitas">Fasilitas</a></td>
    <td class="has-text-centered is-size-7-mobile" onclick="window.location.href = 'peralatan'"><a href="peralatan">Peralatan Klinik</a></td>
  </tr>
  <tr>
    <td class="has-text-centered is-size-7-mobile" data-target="modal" id="mybtn"><a>Penyakit</a></td>
    <td class="has-text-centered is-size-7-mobile chat"><a>Pakar Online</a></td>
    <td class="has-text-centered is-size-7-mobile chat"><a>Reservasi</a></td>
    <td class="has-text-centered is-size-7-mobile" onclick="window.open('https://goo.gl/maps/ZdiiUgxSMYH2');"><a>Lokasi</a></td>
  </tr>
</table>

<div class="modal" id="menuModal" style="z-index: 1001">
  <div class="modal-background"></div>
  <div class="modal-card" style="max-width: 640px; width: 80%; height: 100%; margin: 1rem auto !important;">
    <header class="modal-card-head">
      <p class="modal-card-title">Kategori Penyakit</p>
      <button class="delete" aria-label="close" onclick="closeModal()"></button>
    </header>
    <section class="modal-card-body">
      <!-- <div class="content"> -->
        <nav class="panel">
          <div class="tabs is-centered is-boxed" id="tabs">
            <ul>
              <li class="is-active" data-tab="1">
                  <a style="padding: 8px;">
                    <!-- <span class="icon is-small"><i class="fa fa-image"></i></span> -->
                    <span>ANDROLOGI</span>
                  </a>
              </li>
              <li data-tab="2">
                  <a style="padding: 8px;">
                    <!-- <span class="icon is-small"><i class="fa fa-music"></i></span> -->
                    <span>GINEKOLOGI</span>
                  </a>
              </li>
              <li data-tab="3">
                  <a style="padding: 8px;">
                    <!-- <span class="icon is-small"><i class="fa fa-film"></i></span> -->
                    <span>PMS</span>
                  </a>
              </li>
            </ul>
          </div>
          <div class="box" id="tab-content" style="padding: 0;">
            <div class="is-active" data-content="1">
              <?php foreach ($andrologi as $row): ?>
                <a class="panel-block" href="<?php echo site_url('disease/'.$row->category_slug); ?>">
                  <span class="panel-icon">
                    <i class="fas fa-book" aria-hidden="true"></i>
                  </span>
                  <?php $ucwords = $row->category_name; echo ucwords($ucwords); ?>
                </a>
              <?php endforeach ?>
            </div>
            <div data-content="2">
              <?php foreach ($ginekologi as $row): ?>
                <a class="panel-block" href="<?php echo site_url('disease/'.$row->category_slug); ?>">
                  <span class="panel-icon">
                    <i class="fas fa-book" aria-hidden="true"></i>
                  </span>
                  <?php $ucwords = $row->category_name; echo ucwords($ucwords); ?>
                </a>
              <?php endforeach ?>
            </div>
            <div data-content="3">
              <?php foreach ($pms as $row): ?>
                <a class="panel-block" href="<?php echo site_url('disease/'.$row->category_slug); ?>">
                  <span class="panel-icon">
                    <i class="fas fa-book" aria-hidden="true"></i>
                  </span>
                  <?php $ucwords = $row->category_name; echo ucwords($ucwords); ?>
                </a>
              <?php endforeach ?>
            </div>
          </div>
        </nav>
      <!-- </div> -->
    </section>
    <footer class="modal-card-foot">
      <button class="button" onclick="closeModal()">Close</button>
    </footer>
  </div>
</div>

<!-- Modal -->
<script>
  var btn = document.getElementById('mybtn');
  var menuModal = document.getElementById('menuModal');
  // var btnclose = document.getElementById('btnclose');

  btn.onclick = function() {
    menuModal.style.display = "block";
  }

  function closeModal(){
    menuModal.style.display = "none";
  }
</script>


<!-- Tab -->
<style>
  #tab-content div {
    display: none;
  }

  #tab-content div.is-active {
    display: block;
  }

  .panel-block:hover, .panel-block:hover span {
    color: #3273DC;
  }

  .panel-block:hover{
    border-left: 1px solid #3273DC;
  }

  #menu{
    width: 100%;
    box-shadow: 0px 3px 15px rgba(0,0,0,0.2);
  }

  #menu tr td a{
    color: white;
  }
  #menu tr td{
    cursor: pointer;
    padding: 10px 0;
    border: 2px solid white;
    width: 25%;
    vertical-align: middle;
  }

  @media screen and (max-width: 330px) {
    #menu tr td a{
      font-size: 90%;
    }
  }

  #menu tr td:hover{
    /*background-color: white;*/
    background-color: #3273DC;
  }

  .modal-background{
    background-color: rgba(0,0,0,0.4) !important;
    -webkit-filter: blur(5px) !important;
    -moz-filter: blur(5px) !important;
    -o-filter: blur(5px) !important;
    -ms-filter: blur(5px) !important;
    filter: blur(5px) !important;
  }
</style>

<script>
  $(document).ready(function() {
    $('#tabs li').on('click', function() {
      var tab = $(this).data('tab');

      $('#tabs li').removeClass('is-active');
      $(this).addClass('is-active');

      $('#tab-content div').removeClass('is-active');
      $('div[data-content="' + tab + '"]').addClass('is-active');
    });
  });
</script>
<!-- End Menu -->
