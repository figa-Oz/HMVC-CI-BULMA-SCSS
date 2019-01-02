<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta charset="utf-8">
	<title>Gracia | <?php if(isset($title)){echo $title; } ;?></title>
	<meta name="keywords" content="<?php if(isset($title)){echo $title; } ;?>" />
	<meta name="description" content="<?php if(isset($descript)){echo $descript; } ;?>" />
	<link rel="icon" type="image/png/ico" href="<?php echo base_url('images/favicon.ico'); ?>">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Aclonica|Quicksand" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link type="text/css" href="<?php echo base_url('css/mystyles.css') ?>" rel="stylesheet"/>
</head>
<body style="padding: 0 !important;">

<div id="wrapper">
	<!-- <div id="logo-wa">
		<a href="https://api.whatsapp.com/send?phone=6281398889668" target=_blank>
			<IMG border=0 alt=wa src="<?php echo base_url('images/logo-wa.png') ?>" width=30 height=30>
		</a>
	</div> -->

<?php if(validation_errors()) { ?>
	<div class='notification is-warning'>
			<button class='delete'></button>
			<p style="text-align: center;"><?php echo $this->session->flashdata('warning') ?></p>
	</div>
<?php } ?>


	<?php if ($this->session->flashdata('success')): ?>
		<div class='notification is-success'>
				<button class='delete'></button>
				<p style="text-align: center;"><?php echo $this->session->flashdata('success') ?></p>
		</div>
	<?php endif; ?>

	<header id="imgTop" style="cursor:pointer; z-index: 999;" onclick="window.open('tel:082166660303');">
		<img style="box-shadow: 0 5px 15px rgba(236, 85, 4, 0.2);" src="<?php echo base_url('images/frontend/header1.jpg');?>" alt="Konsultasi">
	</header>

	<!-- new switch toggle -->
	<div class="onoffswitch">
	    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
	    <label class="onoffswitch-label" for="myonoffswitch">
	        <span class="onoffswitch-inner"></span>
	        <span class="onoffswitch-switch"></span>
	    </label>
	</div>
	<!-- end switch toggle -->
	
	<div class="container-fluid has-background-white">
	  <img src="<?php echo base_url('images/frontend/Logo2.png') ?>" alt="Klinik Utama Gracia">
	</div>

	<?php $this->load->view('show/menu'); ?>

	<!-- Content -->
	<?php if(isset($content)){$this->load->view($content);}?>
	<!-- End Content -->

	<?php $this->load->view('show/footer'); ?>

</div>

<style>
	.is-hidden {
		display: none !important;
	}

	.notification{
		position: fixed;
		text-align: right;
		max-width: 640px;
		width: 640px;
		left: 0;
		right: 0;
		margin: auto;
		z-index: 999 !important;
	}
</style>

<!-- Live Chat -->
<script src="<?php echo base_url('js/liveChat.js'); ?>"></script>
<!-- <script type="text/javascript" src="<?php echo base_url('js/switchToggle.js');?>"></script> -->

<script type="text/javascript">
	$(document).on('click', '.notification > button.delete', function() {
		$(this).parent().addClass('is-hidden');
		return false;
	});

	$(".home").click(function(){
		window.location = "<?php echo base_url('home'); ?>";
	});

	$(".chat").click(function(){
		window.open("http://kln.zoossoft.net/lr/chatpre.aspx?id=kln19529695&amp;lng=en","_blank");
	});

	$(".location").click(function(){
		window.location = "https://goo.gl/maps/ZdiiUgxSMYH2";
	});

	$(".call").click(function(){
		window.open('tel:082166660303');
	});

	// window.onscroll = changePos;
	// function changePos() {
	// 	$(window).scroll(function () {
	//         if ($(this).scrollTop() > 200) {
	//             $('.imgTop').css('position', 'fixed');
	//             $('.imgTop').slideDown();
	//         } else if ($(this).scrollTop() <= 200) {
	//             $('.imgTop').css('position', 'relative');
	//             $('.imgTop').slideUp();
	//         }
	// 	});
	// }

	window.onscroll = changePos;
	function changePos() {
	    var header = document.getElementById("imgTop");
	    if (window.pageYOffset > 70) {
	        header.style.position = "absolute";
	        header.style.top = pageYOffset + "px";
	    } else {
	        header.style.position = "";
	        header.style.top = "";
	    }
	}

	// Live chat Custom
	var LiveAutoInvite0='Klinik Utama Gracia';
	var LiveAutoInvite1='082166660303';
	var LiveAutoInvite2='<P><SPAN style=\\"FONT-SIZE: 18px; FONT-FAMILY: Times New Roman; COLOR: #e53333; LINE-HEIGHT: 2\\"><STRONG><SPAN style=\\"FONT-SIZE: 16px\\"><SPAN style=\\"FONT-SIZE: 18px; FONT-FAMILY: Times New Roman; COLOR: #e53333; LINE-HEIGHT: 2\\"><STRONG>Selamat datang di Klinik Utama,<SPAN style=\\"COLOR: #000000\\">Gracia</SPAN></STRONG></SPAN><SPAN style=\\"COLOR: #000000\\"> Klinik utama gracia memberikan layanan konsultasi dan reservasi gratis, memberikan pelayanan yang nyaman untuk pasien, mengutamakan kesehatan pasien. </SPAN></P><P><SPAN style=\\"COLOR: #006600\\"><STRONG>(isi konsultasi dan data pasien terjaga, privasi aman, bisa konsultasikan dengan kami)</STRONG></SPAN><BR><SPAN style=\\"COLOR: #000000\\">untuk tidak perlu mengantri, anda dapat meninggalkan nomor telepon anda dan kami akan menghubungi anda, atau anda dapat menghubungi nomor hotline kami </SPAN></P><P></SPAN></STRONG></SPAN><STRONG><SPAN style=\\"COLOR: #cc0000\\"><A href=\\"tel:0213511666\\" target=_blank data-ke-src=\\"TEL:082166660303\\"><SPAN style=\\"COLOR: #e53333\\"><FONT size=2 face=Tahoma>021-3511666</FONT></SPAN></A><FONT size=2 face=Tahoma>|0821 6666 0303.</FONT></SPAN></STRONG></P>';
	var LrinviteTimeout=1;
</script>

</body>
</html>
