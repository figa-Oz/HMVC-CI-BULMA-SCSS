<!-- <div class="uk-container"> -->
<div class="uk-container-expand">
  <table id="menu" class="playfairFont">
    <tr>
      <td class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover" onclick="window.location.href = '<?php echo base_url('home'); ?>'"><a href="<?php echo base_url('home'); ?>">Home</a></td>
      <td class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover" onclick="window.location.href = 'tentang'"><a href="#tentang">Tentang Kami</a></td>
      <td class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover" onclick="window.location.href = 'fasilitas'"><a href="#fasilitas">Fasilitas</a></td>
      <td class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover" onclick="window.location.href = 'peralatan'"><a href="#peralatan">Peralatan Klinik</a></td>
    </tr>
    <tr>
      <td class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover" href="#modal-overflow" uk-toggle><a>Penyakit</a></td>
      <td class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover chat"><a>Pakar Online</a></td>
      <td class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover chat"><a>Reservasi</a></td>
      <td class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover" onclick="window.open('https://goo.gl/maps/ZdiiUgxSMYH2');"><a>Lokasi</a></td>
    </tr>
  </table>
</div>
<!-- </div> -->

<style>
  #menu{
    width: 100%;
    /* padding: 10px; */
  }

  #menu td{
    width: 25%;
    /* background-color: #F44336; */
    text-align: center;
    vertical-align: middle;

    cursor: pointer;
    padding: 1%;
    border: 2px solid white;
  }

  /* #menu td:hover{
    background-color: #607D8B;
  } */

  /* #menu td:hover a{
    color: #E91E63;
  } */

  #menu td a{
    color: white;
    text-decoration: none;
  }

  #myMenuComponent>li>ul>li>a{
    text-decoration: none !important;
    color: #018786;
  }
</style>

<div class="uk-container-expand">
  <div id="modal-overflow" uk-modal>
      <div class="uk-modal-dialog">

          <button class="uk-modal-close-default" type="button" uk-close></button>

          <div class="uk-modal-header">
              <h2 class="uk-modal-title">Headline</h2>
          </div>

          <div class="uk-modal-body">
            <div class="uk-container">
            <!-- <h3 class="uk-margin-top">Tab autoplayer</h3> -->
              <ul class="uk-flex-center uk-tab" uk-tab data-uk-tab="{connect:'#myMenuComponent'}">
                <li><a href="">ANDROLOGI</a></li>
                <li><a href="">GINEKOLOGI</a></li>
                <li><a href="">PMS</a></li>
              </ul>
              <ul id="myMenuComponent" class="uk-switcher uk-margin">
                <li>
                  <ul class="uk-list uk-list-striped" uk-overflow-auto>
                      <?php foreach ($andrologi as $row): ?>
                          <li onclick='window.location = "<?php echo base_url('disease/'.$row->category_slug) ?>";'>
                              <a class="panel-block" href="<?php echo base_url('disease/'.$row->category_slug); ?>">
                                <?php $ucwords = $row->category_name; echo ucwords($ucwords); ?>
                              </a>
                          </li>
                      <?php endforeach ?>
                  </ul>
                </li>
                <li>
                  <ul class="uk-list uk-list-divider" uk-overflow-auto>
                    <?php foreach ($ginekologi as $row): ?>
                        <li onclick='window.location = "<?php echo base_url('disease/'.$row->category_slug) ?>";'>
                            <a class="panel-block" href="<?php echo base_url('disease/'.$row->category_slug); ?>">
                              <?php $ucwords = $row->category_name; echo ucwords($ucwords); ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                  </ul>
                </li>
                <li>
                  <ul class="uk-list uk-list-striped" uk-overflow-auto>
                    <?php foreach ($pms as $row): ?>
                        <li onclick='window.location = "<?php echo base_url('disease/'.$row->category_slug) ?>";'>
                            <a class="panel-block" href="<?php echo base_url('disease/'.$row->category_slug); ?>">
                              <?php $ucwords = $row->category_name; echo ucwords($ucwords); ?>
                            </a>
                        </li>
                    <?php endforeach ?>
                  </ul>
                </li>
              </ul>
            </div>

          </div>

          <div class="uk-modal-footer uk-text-right">
              <button class="uk-button uk-button-default uk-modal-close" type="button">Tutup</button>
          </div>

      </div>
  </div>
</div>
