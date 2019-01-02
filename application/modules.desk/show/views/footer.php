<div class="uk-container-expand">
  <div id="menufooter" class="uk-text-center" uk-grid>
      <div class="uk-width-expand">
          <div class="btn-konsultant uk-card-primary uk-card-hover home">Home</div>
      </div>
      <div class="uk-width-expand">
          <div class="btn-konsultant uk-card-primary uk-card-hover chat">Tentang</div>
      </div>
      <div class="uk-width-expand">
          <div class="btn-konsultant uk-card-primary uk-card-hover chat">Pendaftaran</div>
      </div>
  </div>
</div>
<br>
<div class="uk-container-expand uk-text-center">
  <img src="<?php echo base_url('images/frontend/Logo3.jpg') ?>" alt="Klinik Utama Gracia">
</div>

<div class="uk-container-expand">
  <table style="width: 100%;">
    <tbody>
      <tr>
        <td style="width: 37%; padding: 10px 5px; border-bottom: 1px solid silver;"><center class="is-size-7-mobile">Telepon: 0821-6666-0303</center></td>
        <td rowspan="4" width="38%">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6559521187996!2d106.80970341425152!3d-6.176790595528168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f73fc062f60d%3A0x3d2f77b64716e879!2sKlinik+Utama+Gracia!5e0!3m2!1sid!2sid!4v1540091863607" frameborder="0" width="100%" height="200px" style="border:0; padding: 10px 0 10px 5px;" allowfullscreen></iframe>
        </td>
        <td style="text-align: center; width: 10%;">
          <span style="font-size: 2em; color: #00BEF0;">
            <i class="fab fa-twitter-square"></i>
          </span>
        </td>
      </tr>
      <tr>
        <td style="width: 37%; padding: 10px 5px; border-bottom: 1px solid silver;"><center class="is-size-7-mobile">Jam Buka: Senin - Minggu</center></td>
        <td style="text-align: center; width: 10%;">
          <span style="font-size: 2em; color: #3C5A9A;">
            <i class="fab fa-facebook-square"></i></i>
          </span>
        </td>
      </tr>
      <tr>
        <td style="width: 37%; padding: 10px 5px; border-bottom: 1px solid silver;"><center class="is-size-7-mobile">Pukul: 10.00 - 21.00 WIB</center></td>
        <td style="text-align: center; width: 10%;">
          <span style="font-size: 2em; color: #E54B2F;">
            <i class="fab fa-google-plus-square"></i></i>
          </span>
        </td>
      </tr>
      <tr>
        <td style="width: 37%; padding: 10px 5px; border-bottom: 1px solid silver;"><center class="is-size-7-mobile">Jl. Cideng Barat No. 73 Gambir <br> Jakarta Pusat, Indonesia - 10150</center></td>
        <!-- <td rowspan="4">Img</td> -->
        <td></td>
      </tr>
    </tbody>
  </table>

  <br>
  <footer style="background-color: rgba(235, 86, 4, 0.3); text-align: center; line-height: 30px"  class="footered is-size-7-mobile">copyright &copy; 2018 Klinik Utama Gracia all right reserved</footer>
  <br>
</div>

<!-- <div class="uk-container-expand"> -->
  <div id="footerFixed" class="uk-child-width-1-4 uk-flex-center uk-text-center text-white" uk-grid>
    <a class="uk-flex-first call">
        <div class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover"><i class="fas fa-phone fa-4x"></i></div>
    </a>
    <a class="chat">
        <div class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover"><i class="fas fa-comment-alt fa-4x"></i></div>
    </a>
    <a href="#form-modal" uk-toggle>
        <div class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover"><i class="fas fa-file-contract fa-4x"></i></div>
    </a>
    <a href="<?php echo base_url('home') ?>" class="uk-flex-last">
        <div class="uk-card uk-card-primary btn-konsultant uk-card-body uk-card-hover"><i class="fas fa-home fa-4x"></i></div>
    </a>
  </div>
<!-- </div> -->

<div class="uk-container-expand">
  <div id="form-modal" uk-modal>
      <div class="uk-modal-dialog">

          <button class="uk-modal-close-default" type="button" uk-close></button>

          <div class="uk-modal-header">
              <h2 class="uk-modal-title">Form Keluhan</h2>
          </div>

          <div class="uk-modal-body">
            <div class="uk-container">
              <?php echo form_open('show/email', 'id="footerForm" '); ?>
                <fieldset class="uk-fieldset">

                    <div class="uk-margin">
                        <input class="uk-input" type="text" name="name" placeholder="Nama">
                    </div>

                    <div class="uk-margin">
                        <input class="uk-input" type="text" name="call" placeholder="Telepon">
                    </div>

                    <div class="uk-margin">
                        <input class="uk-input" type="text" name="email" placeholder="Email">
                    </div>

                    <div class="uk-margin">
                        <input class="uk-input" type="text" name="subject" placeholder="Subyek">
                    </div>

                    <div class="uk-margin">
                        <textarea class="uk-textarea" rows="5" name="message" placeholder="Keluhan"></textarea>
                    </div>

                    <div class="uk-modal-footer uk-text-center">
                          <input type="submit" value="Kirim" class="uk-button uk-button-primary uk-button-small" style="width: 120px">
                    </div>

                </fieldset>
              <?php echo form_close() ?>
            </div>

          </div>

      </div>
  </div>
</div>

<script>
$(document).ready(function(){
  // Function validator jQuery
  $("#footerForm").validate({
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

</script>
