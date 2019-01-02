<!-- Slider -->
<div class="banner">
  <div id="content">
      <!-- <script type="text/javascript"  src="<?php echo base_url('js/ban.js'); ?>"></script> -->
      	<?php $this->load->view('show/slider'); ?>
  </div>
</div>
<!-- End Slider -->

<!-- informasi -->
<div class="informasi">
  <!-- <img src="<?php echo base_url('images/frontend/informasi.jpg') ?>" alt="" class="fl animated infinite flash duration-30s"> -->
  <div class="sound-info">
    <table style="width: 100%; padding: 0 !important; margin: 0 !important;">
      <tbody>
        <tr>
          <td style="width: 70%; text-align: right;">
            <p style="font-weight: bold; font-family: 'Charmonman', cursive;">
              Informasi terbaru
            </p>
          </td>
          <td style="width: 30%; text-align: left; border-right:1px solid #ccc;"><p style="padding-top: 1px;"><i class="fas fa-volume-up animated infinite flash duration-30ss has-text-red"></i></p></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="info_hot">
    <!-- <span class="fl">【HOT】</span> -->
    <ul class="ment-info">
        <li><a class="is-size-7-mobile" href="/#">Saat ini pasien konsultasi andrologi <span class="has-text-danger">20</span> orang</a></li>
        <li><a class="is-size-7-mobile" href="/#">Saat ini pasien konsultasi ginekologi <span class="has-text-danger">13</span> orang</a></li>
        <li><a class="is-size-7-mobile" href="/#">Saat ini pasien konsultasi penyakit menular seksual <span class="has-text-danger">10</span> orang</a></li>
    </ul>
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
  $(".balanitis").click(function(){
    window.location = "<?php echo site_url('disease/balanitis') ?>";
  });
  $(".impotensi").click(function(){
    window.location = "<?php echo site_url('disease/impotensi') ?>";
  });

  $(".phimosis").click(function(){
    window.location = "<?php echo site_url('disease/phimosis') ?>";
  });
  $(".cystitis").click(function(){
    window.location = "<?php echo site_url('disease/cystitis') ?>";
  });
  $(".orkitis").click(function(){
    window.location = "<?php echo site_url('disease/orkitis') ?>";
  });
  $(".prostat").click(function(){
    window.location = "<?php echo site_url('disease/prostat') ?>";
  });
  $(".urethritis").click(function(){
    window.location = "<?php echo site_url('disease/urethritis') ?>";
  });
  // $(".btn-konsultant").click(function(){
  //   window.location = "http://kln.zoossoft.net/lr/chatpre.aspx?id=kln19529695&amp;lng=en";
  // });

  // Ginekologi
  $(".cystitis").click(function(){
    window.location = "<?php echo site_url('disease/cystitis') ?>";
  });
  $(".keputihan").click(function(){
    window.location = "<?php echo site_url('disease/keputihan') ?>";
  });

  $(".urethritis").click(function(){
    window.location = "<?php echo site_url('disease/urethritis') ?>";
  });
  $(".bartholinitis").click(function(){
    window.location = "<?php echo site_url('disease/bartholinitis') ?>";
  });
  $(".vaginitis").click(function(){
    window.location = "<?php echo site_url('disease/vaginitis') ?>";
  });
  $(".servicitis").click(function(){
    window.location = "<?php echo site_url('disease/servicitis') ?>";
  });
  $(".vulvitis").click(function(){
    window.location = "<?php echo site_url('disease/vulvitis') ?>";
  });

  // PMS
  $(".gonore").click(function(){
    window.location = "<?php echo site_url('disease/gonore') ?>";
  });
  $(".sifilis").click(function(){
    window.location = "<?php echo site_url('disease/sifilis') ?>";
  });
  $(".herpes").click(function(){
    window.location = "<?php echo site_url('disease/herpes') ?>";
  });
  $(".kutilK").click(function(){
    window.location = "<?php echo site_url('disease/kutil-kelamin') ?>";
  });
  $(".pms").click(function(){
    window.location = "<?php echo site_url('disease/penyakit-menular-seksual') ?>";
  });
});

</script>

<table style="width: 100%; background: white; margin-top: 0.6em">
  <tr>
    <td style="text-align: center; padding: 10px; cursor: pointer;" class="chat">
      <img class="boxshadow-black zoom" src="<?php echo base_url('images/frontend/konsultasi.png') ?>" alt="Konsultasi" style="border-radius: 12px;"></td>
    <td onclick="window.open('tel:082166660303');" style="text-align: center; padding: 10px; cursor: pointer;">
      <img class="boxshadow-black zoom" src="<?php echo base_url('images/frontend/telephone.png') ?>" alt="Telepon" style="border-radius: 12px;">
    </td>
  </tr>
</table>

<style>
  .tabless>div>div{
    cursor: pointer !important;
  }

  .cate div{
    height: 25px;
    line-height: 3px;
  }

  /* .cate img{
    height: 25px;
  } */

  #cate1{
    text-align: center;;
    background-image: url("<?php echo base_url('images/frontend/Andrologi.jpg') ?>") !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    /* background-size: contain; */
    background-size: 60% 90% !important;
    /* background-attachment: fixed !important; */
    /* background: #EAFCFE; border: 3px solid white; */
  }

  #cate2{
    text-align: center;;
    background-image: url("<?php echo base_url('images/frontend/Ginekologi.jpg') ?>") !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    /* background-size: contain; */
    background-size: 60% 90% !important;
    /* background-attachment: fixed !important; */
    /* background: #EAFCFE; border: 3px solid white; */
  }

  #cate3{
    text-align: center;;
    background-image: url("<?php echo base_url('images/frontend/PMS.jpg') ?>") !important;
    background-position: center !important;
    background-repeat: no-repeat !important;
    /* background-size: contain; */
    background-size: 60% 90% !important;
    /* background-attachment: fixed !important; */
    /* background: #EAFCFE; border: 3px solid white; */
  }

  /* .flo55{
    width: 55% !important;
  }

  .flo45{
    width: 45% !important;
  } */

  /* Gallerry */

  #galleryIndex{
    width:100%;
    padding: 0;
    margin: 0;
  }

  #galleryIndex td{
    padding: 0 !important;
    margin: 0 !important;
    border: 5px solid #fff;
  }

  #formIndex{
    width: 100%;
    background: #F0EFF5;
    padding: 20px;
  }

  /* New Gallerry */
  .row > .column-ga {
    padding: 0 8px;
  }

  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  .column-ga {
    float: left;
    width: 25%;
  }

  /* The Modal (background) */
  .modal-ga {
    display: none;
    position: fixed;
    z-index: 1000;
    /* z-index: 1; */
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: black;
  }

  /* Modal Content */
  .modal-content-ga {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
  }

  /* The Close Button */
  .close-ga {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
  }

  .close-ga:hover,
  .close-ga:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
  }

  .mySlides {
    display: none;
  }

  .cursor {
    cursor: pointer;
  }

  /* Next & previous buttons */
  .prev,
  .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }

  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }

  /* On hover, add a black background color with a little bit see-through */
  .prev:hover,
  .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }

  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }

  img.ga {
    margin-bottom: -4px;
  }

  .caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
  }

  .demo {
    opacity: 0.6;
  }

  .active,
  .demo:hover {
    opacity: 1;
  }

  img.hover-shadow {
    transition: 0.3s;
  }

  .hover-shadow:hover {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
</style>


<section class="has-background-light">
  <div class="container-fluid" style="padding-right: 15px;">
    <div class="columns is-variable is-12 is-mobile is-marginless" style="margin-bottom: 10px !important">
      <div id="cate1" class="column is-2">
          <!-- <img src="<?php echo base_url('images/frontend/Andrologi.jpg') ?>" alt="Andrologi"> -->
      </div>
      <div class="cate column is-10 is-paddingless tabless">
        <div class="columns is-variable is-3 is-mobile is-marginless tabless-col-cyan">
          <div class="column is-4 is-size-7-mobile balanitis">Balanitis</div>
          <div class="column is-4 is-size-7-mobile impotensi">Impotensi</div>
          <div class="column is-4 is-size-7-mobile phimosis">Phimosis</div>
        </div>
        <div class="columns is-variable is-3 is-mobile is-marginless tabless-col-cyan">
          <div class="column is-4 is-size-7-mobile cystitis">Cystitis</div>
          <div class="column is-4 is-size-7-mobile orkitis">Orkitis</div>
          <div class="column is-4 is-size-7-mobile prostat">Prostatitis</div>
        </div>
        <div class="columns is-variable is-2 is-mobile is-marginless tabless-col-cyan">
          <div class="column is-6 is-size-7-mobile urethritis">Urethritis</div>
          <div class="chat column is-6 is-size-7-mobile btn-konsultant boxshadow-black sweep-to-right box-shadow-outset">Konsultasi Online</div>
        </div>
      </div>
    </div>

    <div class="columns is-variable is-12 is-mobile is-marginless" style="margin-bottom: 10px !important">
      <div id="cate2" class="column is-2">
          <!-- <img src="<?php echo base_url('images/frontend/Ginekologi.jpg') ?>" alt="Ginekologi"> -->
      </div>
      <div class="cate column is-10 is-paddingless tabless">
        <div class="columns is-variable is-3 is-mobile is-marginless tabless-col-pink">
          <div class="column is-4 is-size-7-mobile has-text-centered cystitis">Cystitis</div>
          <div class="column is-4 is-size-7-mobile has-text-centered keputihan">Keputihan</div>
          <div class="column is-4 is-size-7-mobile has-text-centered urethritis">Urethritis</div>
        </div>
        <div class="columns is-variable is-3 is-mobile is-marginless tabless-col-pink">
          <div class="column is-4 is-size-7-mobile bartholinitis">Bartholinitis</div>
          <div class="column is-4 is-size-7-mobile vaginitis">Vaginitis</div>
          <div class="column is-4 is-size-7-mobile servicitis">Servicitis</div>
        </div>
        <div class="columns is-variable is-2 is-mobile is-marginless tabless-col-pink">
          <div class="column is-6 is-size-7-mobile vulvitis">Vulvitis</div>
          <div class="chat column is-6 is-size-7-mobile btn-konsultant boxshadow-black sweep-to-right box-shadow-outset">Konsultasi Online</div>
        </div>
      </div>
    </div>

    <div class="columns is-variable is-12 is-mobile is-marginless">
      <div id="cate3" class="column is-2">
          <!-- <img src="<?php echo base_url('images/frontend/PMS.jpg') ?>" alt="Penyakit Menular Seksual"> -->
      </div>
      <div class="cate column is-10 is-paddingless tabless">
        <div class="columns is-variable is-3 is-mobile is-marginless tabless-col-orange">
          <div class="column is-4 is-size-7-mobile gonore">Gonore</div>
          <div class="column is-4 is-size-7-mobile sifilis">Sifilis</div>
          <div class="column is-4 is-size-7-mobile herpes">Herpes</div>
        </div>
        <div class="columns is-variable is-3 is-mobile is-marginless tabless-col-orange">
          <div class="column is-6 is-size-7-mobile kutilK">Kutil Kelamin</div>
          <!-- <div class="column is-4 balanitis">Balanitis</div> -->
          <div class="column is-6 is-size-7-mobile pms">PMS</div>
        </div>
      </div>
    </div>
  </div>

  <img class="chat" src="<?php echo base_url('images/frontend/banner.jpg') ?>" alt="Klinik Utama Gracia" style="margin-top: 20px; margin-bottom: 15px;">

    <div class="has-background-danger" style="padding: 10px;">
        <div class="columns is-variable is-12 is-mobile">
          <div class="column is-7 header-sub">
            <h1 class="title has-text-white is-size-6-mobile" style="padding-top: 5px;">
              Artikel Terkait
            </h1>
          </div>
          <div class="column is-5 header-sub">
              <h2 class="chat subtitle has-text-white fr is-size-7-mobile btn-konsultant boxshadow-black sweep-to-right box-shadow-outset" style="border: 2px solid white; padding: 5px; border-radius: 5px;">
                konsultasi online <i class="fa fa-chevron-circle-right"></i>
              </h2>
          </div>
        </div>
    </div>

<div style="margin: 15px;">
  <!-- <div class="art-related">
    <?php foreach ($related->result() as $row): ?>
    <a href="<?php echo site_url('disease/'.$row->category_slug.'/'.$row->post_slug); ?>" class="chat folding  is-size-7-mobile"><p><?php echo ucwords($row->post_title) ?></p></a>
    <?php endforeach; ?>
  </div> -->
  <div class="art-related">
    <a href="#" class="chat folding is-size-7-mobile" style="background: #F4AB82;"><p>alat kelamin pria keluar nanah</p></a>
    <a href="<?php echo site_url('disease/kutil-kelamin/cara-penanganan-kutil-kelamin') ?>" class="folding is-size-7-mobile" style="background: #FCD89A;"><p>cara menghilangkan kutil di penis </p></a>
    <a href="<?php echo site_url('disease/sifilis/gejala-sifilis') ?>" class="folding is-size-7-mobile" style="background: #F5BBAD;"><p>ciri ciri sipilis</p></a>
    <a class="chat folding is-size-7-mobile" style="background: #EECBAB;"><p>penyakit raja singa</p></a>
  </div>

  <div class="art-related">
    <a class="chat folding is-size-7-mobile" style="background: #FBD8A2;"><p>vagina lecet penis lecet</p></a>
    <a class="chat folding is-size-7-mobile" style="background: #FBBF9D;"><p>harga sunat laser</p></a>
    <a href="<?php echo site_url('disease/kutil-kelamin/pengertian-kutil-kelamin'); ?>" class="folding is-size-7-mobile" style="background: #FDA8AD;"><p>kulit penis gatal </p></a>
    <a class="chat folding is-size-7-mobile" style="background: #F8D3C0;"><p>bintik merah pada kelamin pria </p></a>
  </div>

  <div class="art-related">
    <a href="<?php echo site_url('disease/infeksi-saluran-kemih/pengertian-infeksi-saluran-kemih') ?>" class="folding is-size-7-mobile" style="background: #F6CCA2;"><p>nyeri saat buang air kecil</p></a>
    <a href="<?php echo site_url('disease/impotensi/cara-menangani-impotensi'); ?>" class="folding is-size-7-mobile" style="background: #F6AE88;"><p>cara mengobati impotensi</p></a>
    <a href="<?php echo site_url('disease/keputihan/pengertian-keputihan'); ?>" class="folding is-size-7-mobile" style="background: #EDCEBC;"><p>keputihan berwarna coklat</p></a>
    <a href="<?php echo site_url('disease/rekonstruksi-selaput-dara/biaya-penanganan-rekonstruksi-selaput-dara'); ?>" class="folding is-size-7-mobile" style="background: #FDE0E2;"><p>harga operasi selaput dara</p></a>
  </div>

  <div class="art-related">
    <a href="<?php echo site_url('disease/impotensi/cara-menangani-impotensi'); ?>" class="folding is-size-7-mobile" style="background: #ECBDA1;"><p>agar tidak cepat keluar sperma</p></a>
    <a href="<?php echo site_url('disease/vaginitis/pengertian-vaginitis'); ?>" class="folding is-size-7-mobile" style="background: #F5BBAD;"><p>cara mengatasi gatal di vagina</p></a>
    <a href="<?php echo site_url('disease/keputihan/pengertian-keputihan'); ?>" class="folding is-size-7-mobile" style="background: #FBD8A2;"><p>keputihan berwarna kuning</p></a>
    <a href="<?php echo site_url('disease/pengencangan-vagina/biaya-penanganan-pengencangan-vagina'); ?>" class="folding is-size-7-mobile" style="background: #FAC4C4;"><p>biaya merapatkan vagina</p></a>
  </div>

  <div class="art-related">
    <a href="<?php echo site_url('disease/keputihan/pengertian-keputihan'); ?>" class="folding is-size-7-mobile" style="background: #FDCDBF;"><p>penyebab keputihan gatal</p></a>
    <a href="<?php echo site_url('disease/pengencangan-vagina/penanganan-pengencangan-vagina'); ?>" class="folding is-size-7-mobile" style="background: #FAD495;"><p>cara mengembalikan keperawanan</p></a>
  </div>

  <div class="clear"></div>
</div>

<!-- <section class="has-background-light" style="margin-top: 10px;"> -->
  <div class="has-background-danger" style="padding: 10px;">
    <div class="columns is-variable is-12 is-mobile">
      <div class="column is-7 header-sub">
        <h1 class="title has-text-white is-size-6-mobile" style="padding-top: 5px;">
          Klinik Utama Gracia
        </h1>
      </div>
      <div class="column is-5 header-sub">
        <h2 class="chat subtitle has-text-white fr is-size-7-mobile btn-konsultant boxshadow-black sweep-to-right box-shadow-outset" style="border: 2px solid white; padding: 5px; border-radius: 5px;">
          konsultasi Online <i class="fa fa-chevron-circle-right"></i>
        </h2>
      </div>
    </div>
  </div>

<!-- Gallery -->
<!-- <h2 style="text-align:center">Lightbox</h2> -->

<div class="row" style="margin-top: 20px;">
  <div class="column-ga">
    <img class="ga" src="<?php echo base_url('images/frontend/gallery/gal1.jpg') ?>" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column-ga">
    <img class="ga" src="<?php echo base_url('images/frontend/gallery/gal2.jpg') ?>" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column-ga">
    <img class="ga" src="<?php echo base_url('images/frontend/gallery/gal3.jpg') ?>" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column-ga">
    <img class="ga" src="<?php echo base_url('images/frontend/gallery/gal4.jpg') ?>" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
</div>

<div id="galModal" class="modal-ga">
  <span class="close-ga cursor" onclick="closeModalGa()">&times;</span>
  <div class="modal-content-ga">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img class="ga" src="<?php echo base_url('images/frontend/gallery/gal1.jpg') ?>" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img class="ga" src="<?php echo base_url('images/frontend/gallery/gal2.jpg') ?>" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img class="ga" src="<?php echo base_url('images/frontend/gallery/gal3.jpg') ?>" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img class="ga" src="<?php echo base_url('images/frontend/gallery/gal4.jpg') ?>" style="width:100%">
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column-ga">
      <img class="demo cursor ga" src="<?php echo base_url('images/frontend/gallery/gal1.jpg') ?>" style="width:50%" onclick="currentSlide(1)" alt="Bagian Loby Klinik Gracia">
    </div>
    <div class="column-ga">
      <img class="demo cursor ga" src="<?php echo base_url('images/frontend/gallery/gal2.jpg') ?>" style="width:50%" onclick="currentSlide(2)" alt="Ruangan didalam Klinik Gracia">
    </div>
    <div class="column-ga">
      <img class="demo cursor ga" src="<?php echo base_url('images/frontend/gallery/gal3.jpg') ?>" style="width:50%" onclick="currentSlide(3)" alt="Area Klinik Sentosa">
    </div>
    <div class="column-ga">
      <img class="demo cursor ga" src="<?php echo base_url('images/frontend/gallery/gal4.jpg') ?>" style="width:50%" onclick="currentSlide(4)" alt="Bagian Depan Klinik Sentosa">
    </div>
  </div>
</div>
<!-- End gallery -->

  <div class="has-background-danger" style="padding: 10px; margin: 18px 0;">
    <div class="columns is-variable is-12 is-mobile">
      <div class="column is-7 header-sub">
        <h1 class="title has-text-white is-size-6-mobile" style="padding-top: 5px;">
          Testimonial
        </h1>
      </div>
      <div class="column is-5 header-sub">
        <h2 class="chat subtitle has-text-white fr is-size-7-mobile btn-konsultant boxshadow-black sweep-to-right box-shadow-outset" style="border: 2px solid white; padding: 5px; border-radius: 5px;">
          konsultasi Online <i class="fa fa-chevron-circle-right"></i>
        </h2>
      </div>
    </div>
  </div>
<!-- </section> -->


<div class="bd-snippet-preview" style="padding: 0 23px;">

  <div class='carousel carousel-animated carousel-animate-slide' data-autoplay="true">
    <div class='carousel-container'>
      <div class='carousel-item has-background is-active'>
        <img class="is-background" src="<?php echo base_url('images/frontend/testimonial/testimonial1.jpg') ?>" alt="" width="" height="" />
        <!-- <div class="title">Merry Christmas</div> -->
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" src="<?php echo base_url('images/frontend/testimonial/testimonial2.jpg') ?>" alt="" width="" height="" />
        <!-- <div class="title">Original Gift: Offer a song with <a href="https://lasongbox.com" target="_blank">La Song Box</a></div> -->
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" src="<?php echo base_url('images/frontend/testimonial/testimonial3.jpg') ?>" alt="" width="" height="" />
        <!-- <div class="title">Sushi time</div> -->
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" src="<?php echo base_url('images/frontend/testimonial/testimonial4.jpg') ?>" alt="" width="" height="" />
        <!-- <div class="title">Life</div> -->
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" src="<?php echo base_url('images/frontend/testimonial/testimonial5.jpg') ?>" alt="" width="" height="" />
        <!-- <div class="title">Life</div> -->
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" src="<?php echo base_url('images/frontend/testimonial/testimonial6.jpg') ?>" alt="" width="" height="" />
        <!-- <div class="title">Life</div> -->
      </div>
      <div class='carousel-item has-background'>
        <img class="is-background" src="<?php echo base_url('images/frontend/testimonial/testimonial7.jpg') ?>" alt="" width="" height="" />
        <!-- <div class="title">Life</div> -->
      </div>
    </div>
    <!-- <div class="carousel-navigation">
      <div class="carousel-nav-left">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
      </div>
      <div class="carousel-nav-right">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
      </div>
    </div> -->
  </div>

</div>




<table  id="top-from-form" style="width: 100%; margin-top: 0.6em">
    <tr>
      <td style="text-align: center; padding: 10px; cursor: pointer" class="chat">
        <img class="boxshadow-black zoom" style="border-radius: 10px;" src="<?php echo base_url('images/frontend/konsultasi.png') ?>" alt="Konsultasi"></td>
      <td style="text-align: center; padding: 10px; cursor: pointer" onclick="window.open('tel:082166660303');">
        <img class="boxshadow-black zoom" style="border-radius: 10px;" src="<?php echo base_url('images/frontend/telephone.png') ?>" alt="Telepon">
      </td>
    </tr>
</table>

<!-- <section style="margin-bottom: 20px;" style="background: #DDDCE2"> -->
  <img src="<?php echo base_url('images/frontend/pendaftaran.jpg') ?>" alt="Pendaftarn">
  <?php echo form_open('show/email', 'id="userForm"') ?>
  <table id="formIndex" class="table is-narrow">
    <tbody>
      <tr>
        <td style="text-align: left; padding-left: 10%; width: 20%;">Nama</td>
        <td style="width: 1%; text-align: right;">:</td>
        <td style="padding-bottom: 0;">
          <input type="text" name="name" placeholder="Nama" value="" style="width: 100%; border: none; height: 30px; padding-left: 10px;">
        </td>
      </tr>
      <tr>
          <td style="text-align: left; padding-left: 10%; width: 20%;">Telepon</td>
          <td style="width: 1%; text-align: right;">:</td>
          <td style="padding-bottom: 0; padding-top: 0;">
            <input type="text" name="call" placeholder="Nomor Telepon" style="width: 100%; border: none; height: 30px; padding-left: 10px;">
          </td>
      </tr>
      <tr>
          <td style="text-align: left; padding-left: 10%; width: 20%;">Email</td>
          <td style="width: 1%; text-align: right;">:</td>
          <td style="padding-bottom: 0; padding-top: 0;">
            <input type="text" name="email" placeholder="email@email.com" style="width: 100%; border: none; height: 30px; padding-left: 10px;">
          </td>
      </tr>
      <tr>
          <td style="text-align: left; padding-left: 10%; width: 20%;">Subyek</td>
          <td style="width: 1%; text-align: right;">:</td>
          <td style="padding-bottom: 0; padding-top: 0;">
            <input type="text" name="subject" placeholder="Misal, judul keluhan anda" style="width: 100%; border: none; height: 30px; padding-left: 10px;">
          </td>
      </tr>
      <tr>
          <td style="text-align: left; padding-left: 10%; width: 20%;">Keluhan</td>
          <td style="width: 1%; text-align: right;">:</td>
          <td style="padding-bottom: 0; padding-top: 0;">
            <textarea name="message" placeholder="Keluhan" style="width: 100%; height: 60px; resize:vertical; min-height: 40px; border: none; padding-left: 10px;"></textarea>
          </td>
      </tr>
      <tr>
        <td colspan="3" style="text-align: center">
          <button class="button is-danger effect effect-2" style="width: 100px; margin: 5px;">Kirim</button>
          <a class="button is-danger chat" style="width: 100px; margin: 5px;">Konsultasi</a>
        </td>
      </tr>
    </tbody>
  </table>
  <?php echo form_close() ?>
</section>

<style>
  .noValid{
    color: #EB5604;
  }
</style>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
<!-- <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>node_modules/bulma-extensions/bulma-carousel/dist/js/bulma-carousel.min.js"></script>


<script>
document.addEventListener('DOMContentLoaded', function(){
  var carousels = bulmaCarousel.attach();
}, false);

function openModal() {
  document.getElementById('galModal').style.display = "block";
}

function closeModalGa() {
  document.getElementById('galModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

<script>
$(document).ready(function(){
  // Function validator jQuery
  $("#userForm").validate({
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
