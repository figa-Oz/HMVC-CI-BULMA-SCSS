<!-- SlideShow -->
<?php $this->load->view('show/slider'); ?>

<!-- informasi -->
<div class="uk-container-expand">
  <div class="informasi"> <img src="<?php echo base_url('images/frontend/informasi.jpg') ?>" alt="" class="fl">
    <div class="info_hot"> <span class="fl">&nbsp;【HOT】</span>
      <ul class="ment-info">
          <li class="chat" style="margin-top: 0px;"> <a href="/#">Klinik yang tepat untuk pengobatan herpes, sifilis dan lain sebagainya yang sedang anda alami saat ini .. </a> </li>
          <li class="chat" style="margin-top: 0px;"> <a href="/#">Apa saja tes sebelum aborsi tanpa rasa sakit? apakah ada effect sampingnya? apa bahayanya ?</a> </li>
          <li class="chat" style="margin-top: 0px;"> <a href="/#">Kehamilan dini belum siap untuk anak-anak. Dengan ketidaksabilan emosi serta belum siapnya ..</a> </li>
          <li class="chat" style="margin-top: 0px;"> <a href="/home">Klinik Utama Gracia adalah klinik yang memangani hampir semua penyakit kulit dan kelamin, yang telah endapatkan pengakuan dari masyarakat atas kualitas dan pelayanannya .. ..</a> </li>
      </ul>
    </div>
  </div>
</div>

<script>
function vscroll(){
  var firs=$('.ment-info li:first');
  firs.animate({'marginTop': -$('.ment-info li').height()}, 500,function(){
    firs.css('marginTop', 0);
    $('.ment-info').append(firs);
  });
}

var startinterval=setInterval(vscroll, 3000);
$('.ment-info li').hover(function(){
  clearInterval(startinterval);
},function(){
  startinterval=setInterval(vscroll, 3000);
})


$(document).ready(function(){
  // Andrologi
  $(".kulup").click(function(){
    window.location = "<?php echo base_url('disease/kulup-panjang') ?>";
  });
  $(".impotensi").click(function(){
    window.location = "<?php echo base_url('disease/impotensi') ?>";
  });

  $(".ejakulasi").click(function(){
    window.location = "<?php echo base_url('disease/ejakulasi-dini') ?>";
  });
  $(".phimosis").click(function(){
    window.location = "<?php echo base_url('disease/phimosis') ?>";
  });
  $(".balanitis").click(function(){
    window.location = "<?php echo base_url('disease/balanitis') ?>";
  });
  $(".orkitis").click(function(){
    window.location = "<?php echo base_url('disease/orkitis') ?>";
  });
  $(".prostat").click(function(){
    window.location = "<?php echo base_url('disease/prostat') ?>";
  });
  $(".epididimitis").click(function(){
    window.location = "<?php echo base_url('disease/epididimitis') ?>";
  });
  $(".chat").click(function(){
    window.location = "http://kln.zoossoft.net/lr/chatpre.aspx?id=kln19529695&amp;lng=en";
  });

  // Ginekologi
  $(".cystitis").click(function(){
    window.location = "<?php echo base_url('disease/cystitis') ?>";
  });
  $(".keputihan").click(function(){
    window.location = "<?php echo base_url('disease/keputihan') ?>";
  });

  $(".radang-panggul").click(function(){
    window.location = "<?php echo base_url('disease/radang-panggul') ?>";
  });
  $(".bartholinitis").click(function(){
    window.location = "<?php echo base_url('disease/bartholinitis') ?>";
  });
  $(".vaginitis").click(function(){
    window.location = "<?php echo base_url('disease/vaginitis') ?>";
  });
  $(".polip-serviks").click(function(){
    window.location = "<?php echo base_url('disease/polip-serviks') ?>";
  });
  $(".vulvitis").click(function(){
    window.location = "<?php echo base_url('disease/vulvitis') ?>";
  });

  // PMS
  $(".gonore").click(function(){
    window.location = "<?php echo base_url('disease/gonore') ?>";
  });
  $(".sifilis").click(function(){
    window.location = "<?php echo base_url('disease/sifilis') ?>";
  });
  $(".herpes").click(function(){
    window.location = "<?php echo base_url('disease/herpes') ?>";
  });
  $(".kutil-kelamin").click(function(){
    window.location = "<?php echo base_url('disease/kutil-kelamin') ?>";
  });
  $(".pms").click(function(){
    window.location = "<?php echo base_url('disease/penyakit-menular-seksual') ?>";
  });

  $(".home").click(function(){
    window.location = "<?php echo base_url('home') ?>";
  });
});

</script>

<div class="uk-container-expand">
  <table style="width: 100%; background: white; margin-top: 0.6rem">
    <tr>
      <td style="text-align: center; padding: 10px; cursor: pointer;" class="chat">
        <img class="uk-card uk-card-default uk-card-hover" style="border-radius: 10px" src="<?php echo base_url('images/frontend/konsultasi.png') ?>" alt="Konsultasi"></td>
      <td onclick="window.open('tel:082166660303');" style="text-align: center; padding: 10px; cursor: pointer;"><img class="uk-card uk-card-default uk-card-hover" style="border-radius: 10px" src="<?php echo base_url('images/frontend/telephone.png') ?>" alt="Telepon"></td>
    </tr>
  </table>
</div>

<div class="uk-container-expand">
  <table id="tb-andrologi" class="uk-table uk-text-center charmonFont text-white" style="width: 100%;">
      <tbody>
          <tr>
              <td rowspan="3"><img src="<?php echo base_url('images/frontend/Andrologi.jpg') ?>" alt="Andrologi"></td>
              <td class="uk-card-hover phimosis blueboard">Phimosis</td>
              <td class="uk-card-hover impotensi blueboard">Impotensi</td>
              <td class="uk-card-hover epididimitis blueboard">Epididimitis</td>
          </tr>
          <tr>
              <td class="uk-card-hover orkitis blueboard">Orkitis</td>
              <td class="uk-card-hover balanitis blueboard">Balanitis</td>
              <td class="uk-card-hover prostat blueboard">Prostat</td>
          </tr>
          <tr>
              <td class="uk-card-hover ejakulasi blueboard">Ejakulasi Dini</td>
              <td class="uk-card-hover kulup blueboard">Kulup Panjang</td>
              <td class="uk-card uk-card-primary uk-card-hover btn-konsultant chat">Konsultasi Online</td>
          </tr>
      </tbody>
  </table>
</div>

<div class="uk-container-expand">
  <table id="tb-ginekologi" class="uk-table uk-text-center charmonFont text-white" style="width: 100%;">
      <tbody>
          <tr>
              <td rowspan="3"><img src="<?php echo base_url('images/frontend/Ginekologi.jpg') ?>" alt="Andrologi"></td>
              <td class="uk-card-hover cystitis blueboard">Cystitis</td>
              <td class="uk-card-hover keputihan blueboard">Keputihan</td>
              <td class="uk-card-hover bartholinitis blueboard">Bartholinitis</td>
          </tr>
          <tr>
              <td class="uk-card-hover vaginitis blueboard">Vaginitis</td>
              <td class="uk-card-hover vulvitis blueboard">Vulvitis</td>
              <td class="uk-card-hover servicitis blueboard">Servicitis</td>
          </tr>
          <tr>
              <td class="uk-card-hover radang-panggul blueboard">Radang Panggul</td>
              <td class="uk-card-hover polip-serviks blueboard">Polip Serviks</td>
              <td class="uk-card uk-card-primary uk-card-hover btn-konsultant chat">Konsultasi Online</td>
          </tr>
      </tbody>
  </table>
</div>

<div class="uk-container-expand">
  <table id="tb-pms" class="uk-table uk-text-center charmonFont text-white" style="width: 100%;">
      <tbody>
          <tr>
              <td rowspan="2"><img src="<?php echo base_url('images/frontend/PMS.jpg') ?>" alt="Andrologi"></td>
              <td class="uk-card-hover gonore blueboard">Gonore</td>
              <td class="uk-card-hover sifilis blueboard">Sifilis</td>
              <td class="uk-card-hover herpes blueboard">Herpes</td>
          </tr>
          <tr>
              <td class="uk-card-hover kutil-kelamin blueboard">Kutil Kelamin</td>
              <td class="uk-card uk-card-hover pms blueboard">PMS</td>
              <td class="uk-card uk-card-primary uk-card-hover btn-konsultant chat">Konsultasi Online</td>
          </tr>
      </tbody>
  </table>
</div>

  <br><br>

<div class="uk-container-expand">
  <img class="chat" data-src="<?php echo base_url('images/frontend/banner.jpg') ?>" width="1366" height="600" alt="" uk-img>
</div>

  <br><br><br>

<div class="uk-container-expand">
  <div class="btn-konsultant uk-padding-40 uk-child-width-1-2 uk-text-middles text-white uk-margin" uk-grid>
      <div>
          <div class="uk-panel uk-panel-box uk-text-truncate uk-text-left uk-text-bold uk-text-large charmonFont">Klinik Spesialis Kelamin</div>
      </div>
      <div>
          <div class="uk-panel uk-panel-box uk-text-break uk-text-right" style="padding-top: 2px;"><span class="btn-online primary-hover chat">konsultasi online <i class="fa fa-chevron-circle-right"></i></span></div>
      </div>
  </div>
</div>

<div class="uk-container-expand">
  <div class="uk-grid-divider uk-child-width-expand@s uk-padding" uk-grid>
      <div>
        <h4>Peralatan Modern</h4>
        <p>
          Dengan menggunakan peralatan medis yang mengikuti teknologi modern. Klinik Utama Gracia memberikan pengobatan dan perawatan demi meningkatkan layanan kuialitas untuk melayani pasien yang membutuhkan pertolongan medis.
        </p>
      </div>
      <div>
        <h4>Tim Dokter Yang Profesional</h4>
        <p>
          Dibantu oleh para ahli medis yang berpengalamandibidang ilmu pengetahuanginekologi, andeologi, penyakit kelamin dll, yang menangani masalah pasien secara profesional.
        </p>
      </div>
      <div>
        <h4>Layanan Konsultasi Nyaman</h4>
        <p>
          Salah satu fasilitas yang menjadi unggulan kamiadalah bimbingan layanan konsultasionline secara langsungdengan staff ahli bidang penayakit sehingga pasien dapat berkonsultasi secara online.
        </p>
      </div>
      <div>
        <h4>Teknologi Canggih</h4>
        <p>
          Untuk mengekdploitasi dan menerapkan inovasi teknologi bertaraf internasional, Koinik Utama Gracia menggunakan teknologi peralatan perawatan yang canggih dan sangat membantu dalam proses perawatan.
        </p>
      </div>
  </div>
</div>

<div class="uk-container-expand">
  <div class="uk-section-default">
    <div class="uk-section uk-light uk-background-cover" style="padding-top: 0; background-image: url(<?php echo base_url('images/uikit/dark-material2.jpg') ?>)">
      <div class="btn-konsultant uk-padding-40 uk-child-width-1-2 uk-text-middles text-white uk-margin" uk-grid>
          <div>
              <div class="uk-panel uk-panel-box uk-text-truncate uk-text-left uk-text-bold uk-text-large charmonFont">Klinik Utama Gracia</div>
          </div>
          <div>
              <div class="uk-panel uk-panel-box uk-text-break uk-text-right" style="padding-top: 2px;"><span class="btn-online primary-hover chat">konsultasi online <i class="fa fa-chevron-circle-right"></i></span></div>
          </div>
      </div>
      <div class="uk-container">
          <h3>Gallery</h3>

          <table id="galleryIndex" class="uk-table uk-table-divider" uk-lightbox="animation: scale">
              <tr class="uk-text-center">
                <td>
                  <a href="<?php echo base_url('images/frontend/a.jpg') ?>" data-caption="Gedung Klinik Utama Gracia">
                      <img src="<?php echo base_url('images/frontend/a.jpg') ?>" alt="">
                  </a>
                </td>
                <td>
                  <a href="<?php echo base_url('images/frontend/b.jpg') ?>" data-caption="Ruangan di dalam Klinik Utama Gracia">
                      <img src="<?php echo base_url('images/frontend/b.jpg') ?>" alt="">
                  </a>
                </td>
                <td rowspan="2">
                  <a href="<?php echo base_url('images/frontend/e.jpg') ?>" data-caption="Ruangan di dalam Klinik Utama Gracia">
                      <img src="<?php echo base_url('images/frontend/e.jpg') ?>" alt="">
                  </a>
                </td>
              </tr>
              <hr>
              <tr class="uk-text-center">
                <td>
                  <a href="<?php echo base_url('images/frontend/d.jpg') ?>" data-caption="Jalan di depan Klinik Utama Gracia">
                      <img src="<?php echo base_url('images/frontend/d.jpg') ?>" alt="">
                  </a>
                </td>
                <td>
                  <a href="<?php echo base_url('images/frontend/c.jpg') ?>" data-caption="Area Klinik Utama Gracia">
                      <img src="<?php echo base_url('images/frontend/c.jpg') ?>" alt="">
                  </a>
                </td>
              </tr>
          </table>

        </div>
    </div>
  </div>
</div>

<div class="uk-container-expand">
  <div class="btn-konsultant uk-padding-40 uk-child-width-1-2 uk-text-middles text-white uk-margin" uk-grid style="margin-top: 0 !important;">
      <div>
          <div class="uk-panel uk-panel-box uk-text-truncate uk-text-left uk-text-bold uk-text-large charmonFont">Testimonial</div>
      </div>
      <div>
          <div class="uk-panel uk-panel-box uk-text-break uk-text-right" style="padding-top: 2px;"><span class="btn-online primary-hover chat">konsultasi online <i class="fa fa-chevron-circle-right"></i></span></div>
      </div>
  </div>
</div>

<div class="uk-container-expand">
  <div class="uk-section uk-section-muted" style="margin: 40px !important; padding: ">
      <div class="uk-container chat">
          <div class="uk-grid-divider uk-child-width-1-2@m" uk-grid>
              <div class="uk-width-1-6@m">
                  <p>
                    <img class="is-rounded" src="<?php echo base_url('images/frontend/rounded.jpg') ?>">
                  </p>
              </div>
              <div class="uk-width-expand">
                  <p id="testim" class="merriFont">
                    Kinik spesialis kelamin memang terbukti dalam mengatasi penyakit kencing nanah yang dirasakan kakakku. Kini dia sudah membaik dari sebelumnya. Pengobatan dengan harga terjangkau dan dokternya juga ramah. Dengan biaya yang relatif terjangkau tidak perlu ada kekhawatiran dengan pengobatan yang dijalani ...
                  </p>
              </div>
          </div>
      </div>
  </div>
</div>

<div class="uk-container-expand">
  <table style="width: 100%; background: white; margin-top: 0.6rem">
    <tr>
      <td style="text-align: center; padding: 10px; cursor: pointer;" class="chat">
        <img class="uk-card uk-card-default uk-card-hover" style="border-radius: 10px" src="<?php echo base_url('images/frontend/konsultasi.png') ?>" alt="Konsultasi"></td>
      <td onclick="window.open('tel:082166660303');" style="text-align: center; padding: 10px; cursor: pointer;"><img class="uk-card uk-card-default uk-card-hover" style="border-radius: 10px" src="<?php echo base_url('images/frontend/telephone.png') ?>" alt="Telepon"></td>
    </tr>
  </table>
</div>

<div class="uk-container-expand">
  <div class="uk-section" style="background-color: #F0EFF5">
    <div class="uk-container">
        <div class="uk-width-expand uk-text-center" style="padding: 20px 0; background-color: #2F4F4F">
          <span class="text-white"><i class="fas fa-file-signature fa-4x"></i><big style="font-weight: 700; font-size: 34px;">Pendaftaran</big></span>
        </div>

        <?php echo form_open('show/email', 'id="userForm" class="uk-form-horizontal uk-margin-large"'); ?>
          <div class="uk-margin">
              <label class="uk-form-label">Nama</label>
              <div class="uk-form-controls">
                  <input class="uk-input" type="text" name="name" placeholder="Nama anda">
              </div>
          </div>

          <div class="uk-margin">
              <label class="uk-form-label">Telepon</label>
              <div class="uk-form-controls">
                  <input class="uk-input" type="text" name="call" placeholder="0898 99 00 272">
              </div>
          </div>

          <div class="uk-margin">
              <label class="uk-form-label" >Email</label>
              <div class="uk-form-controls">
                  <input class="uk-input" type="text" name="email" placeholder="email@email.com">
              </div>
          </div>

          <div class="uk-margin">
              <label class="uk-form-label" >Subyek</label>
              <div class="uk-form-controls">
                  <input class="uk-input" type="text" name="subject" placeholder="Misal, judul keluhan anda">
              </div>
          </div>

          <div class="uk-margin">
              <label class="uk-form-label" >Keluhan</label>
              <div class="uk-form-controls">
                  <textarea class="uk-textarea" rows="5" type="text" name="message" placeholder="Sampaikan apa yang anda rasakan" style="resize:vertical;"></textarea>
              </div>
          </div>

          <div class="uk-margin uk-text-center">
            <input type="submit" value="Kirim" class="uk-button uk-button-primary uk-button-small" style="width: 120px">
            <!-- <button class="button is-danger" style="width: 100px; margin: 5px;">Kirim</button> -->
            <a class="chat uk-button uk-button-secondary uk-button-small" style="width: 120px">Konsultasi</a>
          </div>
      <?php echo form_close() ?>
    </div>
  </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
$(document).ready(function(){
  // Function validator jQuery
  $("#userForm").validate({
    errorClass: 'uk-form-danger',
    rules: {
      name: {
        required: true,
      },
      call: {
        required: true,
        number: true,
        minlength: 11,
        maxlength: 13
      },
      email: {
        required: true,
        // email: true
        regex: /^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,3})$/
      },
      subject: {
        required: true
      },
      message: {
        required: true
      }
    },
    messages: {
      name: {
        required: "bidang harus diisi",
      },
      call: {
        required: "bidang harus diisi",
        number: "bidang hanya boleh diisi dengan angka",
        minlength: "bidang diisi setidaknya harus 11 digit",
        maxlength: "bidang diisi maksimal 13 digit",
      },
      email: {
        required: "bidang harus diisi",
        regex: "isi bidang dengan benar misal: john@gmail.com atau andy@yahoo.co.id"
      },
      subject: {
        required: "bidang harus diisi",
      },
      message: {
        required: "bidang harus diisi",
      }
    },

  });

  jQuery.validator.addMethod(
    "regex",
     function(value, element, regexp) {
         if (regexp.constructor != RegExp)
            regexp = new RegExp(regexp);
         else if (regexp.global)
            regexp.lastIndex = 0;
            return this.optional(element) || regexp.test(value);
     },"erreur expression reguliere"
  );

});

$(".chat").click(function(){
  window.location = "http://kln.zoossoft.net/lr/chatpre.aspx?id=kln19529695&amp;lng=en";
});

</script>
