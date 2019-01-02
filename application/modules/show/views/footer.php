<!-- Footer -->
  <style>
    #menuFooter{
      width: 100%;
      /*margin-bottom: 30px;*/
      box-shadow: 0px 3px 15px rgba(0,0,0,0.2);
    }

    #menuFooter td{
      border: 2px solid white;
      text-align: center;
      color: white;
      width: 33.3%;
      padding: 10px;
      cursor: pointer;
    }

    #menuFooter td:hover{
      background-color: #3273DC;
    }

    /* FooterMaps */
    #footer-maps{
      width: 100%;
    }

    #footer-maps div a:link{
      text-decoration: none !important;
      /* color: none; */
    }

    #footer-maps>div>div.leftF>div{
      border-bottom: 1px solid silver;
      padding-top: 0.7em;
      padding-bottom: 0.7em;
      /* height: 50px; */
      line-height: 50px;
      width: 100%;
      vertical-align: middle !important;
    }

    #footer-maps>div>div.leftF>div>p{
      text-align: center;
      /* line-height: 50px; */
      line-height: 1.3;
      vertical-align: middle !important;
    }

    #footer-maps>div>div>a>i{
      margin-bottom: 25px;
    }

    #footer-maps>div>div>a:nth-child(1) i{
      color: #3A589B;
    }

    #footer-maps>div>div>a:nth-child(2) i{
      color: #10BBF7;
    }

    #footer-maps>div>div>a:nth-child(3) i{
      color: #A02627;
    }

    /*#stickyFooet{
      position: fixed; padding: 0; margin: auto; left: 0; right: 0; max-width: 640px; bottom: -7px;
    }*/

    #stickyFooter>table{
      max-width: 640px !important;
      width: 100%;
      position:fixed;
      left:0px;
      right: 0;
      margin-left: auto;
      margin-right: auto;
      bottom: -7px;
      z-index: 777;
    }
  </style>

  <table id="menuFooter" class="has-background-danger">
    <tbody>
      <tr>
        <td class="home">Home</td>
        <td class="chat">Tentang</td>
        <td class="chat">Pendaftaran</td>
      </tr>
    </tbody>
  </table>

  <div class="container-fluid has-background-white" style="text-align: center;">
      <img src="<?php echo base_url('images/frontend/Logo3.jpg') ?>" alt="Klinik Utama Gracia">
  </div>

  <div id="footer-maps" class="container-fluid has-background-white">
    <div class="columns is-variable is-12 is-mobile is-marginless is-paddingless">
      <div class="leftF column is-5 is-size-7-mobile has-text-centered">
        <div><p>Telepon: 0821-6666-0303</p></div>
        <div><p>Jam Buka: Senin - Minggu</p></div>
        <div><p>Pukul: 10.00 - 21.00 WIB</p></div>
      </div>
      <div class="column is-6 is-size-7-mobile">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.6559521187996!2d106.80970341425152!3d-6.176790595528168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f73fc062f60d%3A0x3d2f77b64716e879!2sKlinik+Utama+Gracia!5e0!3m2!1sid!2sid!4v1540091863607" frameborder="0" width="100%" height="150px" style="padding-top: 5px;" allowfullscreen></iframe>
      </div>
      <div class="column is-1 is-size-7-mobile has-text-centered is-marginless" style="padding: 15px 0 0 0 !important;">
        <a href="#"><i class="fab fa-twitter-square fa-2x"></i></a>
        <a href="#"><i class="fab fa-facebook-square fa-2x"></i></a>
        <a href="#"><i class="fab fa-google-plus-square fa-2x"></i></a>
      </div>
    </div>
  </div>

  <!-- <br> -->
  <footer style="background-color: rgba(235, 86, 4, 0.3); text-align: center; line-height: 30px"  class="footered is-size-7-mobile">copyright &copy; 2018 Klinik Utama Gracia all right reserved</footer>
  <br>

<!-- Tambahan -->
<div id="stickyFooter">
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
          <a href="<?php echo site_url('home'); ?>"><img src="<?php echo base_url('images/frontend/bottom/bottom4.jpg') ?>" alt="Home"></a>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<!-- End Footer -->

<div class="modal" id="modalFo" style="z-index: 1001;">
  <div class="modal-background"></div>
  <div class="modal-card" style="margin: 1em auto !important;">
    <header class="modal-card-head">
      <p class="modal-card-title">Ajukan keluhan anda disini</p>
      <button class="delete" aria-label="close" onclick="closeFo()"></button>
    </header>
    <section class="modal-card-body has-background-grey-lighter" style="overflow-y: auto; max-height: 100vh;">
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

        <!-- <div class="field is-horizontal"> -->
          <!-- <div class="field-label"> -->
            <!-- Left empty for spacing -->
          <!-- </div> -->
          <!-- <div class="field-body"> -->
            <!-- <div class="field"> -->
              <!-- <div class="control"> -->
                <button class="button is-primary is-large is-fullwidth">
                  Kirim
                </button>
              <!-- </div> -->
            <!-- </div> -->
          <!-- </div> -->
        <!-- </div> -->
        <?php echo form_close() ?>
      <!-- </form> -->
      </div>
    </section>
    <footer class="modal-card-foot">
      <button class="button is-large is-fullwidth" onclick="closeFo()">Close</button>
    </footer>
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
