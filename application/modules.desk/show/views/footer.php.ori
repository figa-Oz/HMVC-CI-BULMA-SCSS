<!-- Footer -->
<section class="has-background-light">
  <div class="has-background-danger" style="padding: 10px;">
    <div class="columns is-variable is-12 is-mobile">
      <a class="column is-4" style="text-align: center; border: 1px solid white;" href="<?php echo base_url('home'); ?>">
        <h3 class="title has-text-white is-size-7-mobile">
          Home
        </h3>
      </a>
      <a class="column is-4" style="text-align: center; border: 1px solid white;" href="tentang">
        <h3 class="title has-text-white is-size-7-mobile">
          Tentang
        </h3>
      </a>
      <a class="column is-4" style="text-align: center; border: 1px solid white;" href="pendaftaran">
        <h3 class="title has-text-white is-size-7-mobile">
          Pendaftaran
        </h3>
      </a>
    </div>
  </div>

  <div class="container-fluid has-background-white" style="text-align: center">
      <img src="<?php echo base_url('images/frontend/Logo3.jpg') ?>" alt="Klinik Utama Gracia">
  </div>

  <table>
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
</section>

<!-- Tambahan -->
<section class="has-background-light" style="position: fixed; bottom: 0; padding: 0; margin: 0;">
  <table>
    <tbody>
      <tr>
        <td onclick="window.open('tel:082166660303');">
          <a href="call:082166660303"><img src="<?php echo base_url('images/frontend/bottom/bottom1.jpg') ?>" alt="Telepon"></a>
        </td>
        <td class="chat">
          <a><img src="<?php echo base_url('images/frontend/bottom/bottom2.jpg') ?>" alt="Chat"></a>
        </td>
        <td  data-target="modal" id="btnFo">
          <a><img src="<?php echo base_url('images/frontend/bottom/bottom3.jpg') ?>" alt="Konsultasi"></a>
        </td>
        <td>
          <a href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('images/frontend/bottom/bottom4.jpg') ?>" alt="Home"></a>
        </td>
      </tr>
    </tbody>
  </table>
</section>
<!-- End Footer -->

<div class="modal" id="modalFo">
  <div class="modal-background"></div>
  <div class="modal-card" style="margin: 1rem auto !important;">
    <header class="modal-card-head">
      <p class="modal-card-title">Ajukan keluhan anda disini</p>
      <button class="delete" aria-label="close" onclick="closeFo()"></button>
    </header>
    <section class="modal-card-body has-background-grey-lighter">
      <div class="content">

        <!-- <form action="show/email" method="post" id="userForm"> -->
        <?php echo form_open('show/email', 'id="emailForm"') ?>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Nama</label>
          </div>
          <div class="field-body">
            <div class="field">
              <p class="control is-expanded has-icons-left">
                <input class="input" type="text" name="name" placeholder="Name">
                <span class="icon is-small is-left">
                  <i class="fas fa-user"></i>
                </span>
              </p>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">No. Telp</label>
          </div>
          <div class="field-body">
            <div class="field">
              <!-- <div class="field has-addons"> -->
                <p class="control">
                  <input class="input" name="call" type="tel" placeholder="No. Telepon">
                  <!-- <span class="icon is-small is-left">
                    +62
                  </span> -->
                </p>
              <!-- </div> -->
              <!-- <p class="help">Jangan menulis nol pertama</p> -->
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Email</label>
          </div>
          <div class="field-body">
            <div class="field">
              <p class="control is-expanded has-icons-left">
                <input class="input" type="text" name="email" placeholder="email@email.com">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
              </p>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Subyek</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <input class="input" name="subject" type="text" placeholder="Misalnya judul keluhan anda">
              </div>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label is-normal">
            <label class="label">Keluhan</label>
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <textarea class="textarea" name="message" placeholder="Tulis keluhan anda disini"></textarea>
              </div>
            </div>
          </div>
        </div>

        <div class="field is-horizontal">
          <div class="field-label">
            <!-- Left empty for spacing -->
          </div>
          <div class="field-body">
            <div class="field">
              <div class="control">
                <button class="button is-primary">
                  Kirim
                </button>
              </div>
            </div>
          </div>
        </div>
        <?php echo form_close() ?>
      <!-- </form> -->
      </div>
    </section>
    <!-- <footer class="modal-card-foot"> -->
      <button class="button is-large is-fullwidth" onclick="closeFo()">Close</button>
    <!-- </footer> -->
  </div>
</div>

<style>
  .noValid{
    color: #EB5604;
    text-align: center;
  }
</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script>
var btnFo = document.getElementById('btnFo');
var modalFo = document.getElementById('modalFo');

btnFo.onclick = function() {
  modalFo.style.display = "block";
}

function closeFo(){
  modalFo.style.display = "none";
}
</script>

<script>
$(document).ready(function(){
  // Function validator jQuery
  $("#emailForm").validate({
    errorClass: 'noValid is-danger',
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
        regexCall: "nol tidak perlu ditulis langsung angka 8 saja"
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
