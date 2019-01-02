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
	<link rel="icon" type="image/png" href="favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Source+Sans+Pro" rel="stylesheet">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css"> -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
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

	<div class="container-fluid has-background-grey" style="cursor:pointer;" onclick="window.open('tel:082166660303');">
	  <img src="<?php echo base_url('images/frontend/header1.jpg');?>" alt="Konsultasi">
	</div>
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
