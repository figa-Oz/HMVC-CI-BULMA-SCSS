<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
	<meta name="format-detection" content="telephone=no"/>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
	<meta charset="utf-8">
	<title>Gracia | <?php if(isset($title)){echo $title; } ;?></title>
	<meta name="keywords" content="<?php if(isset($title)){echo $title; } ;?>" />
	<meta name="description" content="<?php if(isset($descript)){echo $descript; } ;?>" />
	<link rel="icon" type="image/png" href="favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
	<link type="text/css" href="<?php echo base_url('css/mystyles.css') ?>" rel="stylesheet"/>
</head>
<body>

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

	<section class="has-background-light">
		<div class="columns is-gapless" onclick="window.open('tel:082166660303');" style="margin: 0;">
			<div class="column">
				<img style="margin: 0; cursor:pointer;" src="<?php echo base_url('images/frontend/header-top-full.png');?>" alt="Konsultasi">
			</div>
		</div>
		<div class="columns is-gapless" style="margin: 0;">
			<div class="column">
				<img style="margin: 0; cursor:pointer;" src="<?php echo base_url('images/frontend/header-desktop.png') ?>" alt="Klinik Utama Gracia">
			</div>
		</div>
	</section>

	<!-- <table id="header-second">
		<tbody>
			<tr>
				<td rowspan="4" style="vertical-align: middle; text-align: right; padding-right: 10px;"><img src="<?php base_url() ?>images/frontend/logo-gracia.png" /></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td style="text-align: left; vertical-align: bottom;"><h1>KLINIK UTAMA GRACIA</h1></td>
				<td style="vertical-align: middle;"><span><i class="fa fa-phone fa-rotate-90" aria-hidden="true"></i> 0821-6666-0303</span></td>
			</tr>
			<tr>
				<td style="text-align: left; vertical-align: top;"><h4>Untuk Masyarakat Yang Sehat</h4></td>
				<td style="vertical-align: top;"><span><i class="fas fa-clock"></i> 10:00 s/d 21:00</span></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
		</tbody>
	</table> -->

	<?php $this->load->view('show/menu'); ?>

	<!-- Content -->
	<?php if(isset($content)){$this->load->view($content);}?>
	<!-- End Content -->

	<?php $this->load->view('show/footer'); ?>

</div>

<style>
	#header-second{
		width: 100%;
	}

	#header-second td{
    /* text-align: center; */
    /* width: 50%; */
    /* vertical-align: middle; */
		color: #9A6C37;
		font-weight: bold;
  }

	#header-second h1{
		font-size: 3rem;
		font-weight: bold;
		bottom: 0 !important;
		line-height: 2.2rem;
		padding-left: 10px;
	}

	#header-second h4{
		font-size: 1.5rem;
		font-weight: bold;
		line-height: 2.2rem;
		padding-left: 10px;
	}

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

	<%# section{
		margin: 0 !important;
		padding: 0 !important;
	} %>
</style>

<script type="text/javascript">
	$(document).on('click', '.notification > button.delete', function() {
		$(this).parent().addClass('is-hidden');
		return false;
	});

	$(".chat").click(function(){
		window.location = "http://kln.zoossoft.net/lr/chatpre.aspx?id=kln19529695&amp;lng=en";
	});

	$(".location").click(function(){
		window.location = "https://goo.gl/maps/ZdiiUgxSMYH2";
	});

	$(".call").click(function(){
		window.window.open('tel:082166660303');
	});
</script>

</body>
</html>
