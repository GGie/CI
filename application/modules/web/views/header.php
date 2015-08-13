
<!DOCTYPE HTML>
<head>
<title>Free Home Shoppe Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="<? echo base_url();?>asset/web/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<? echo base_url();?>asset/web/css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<script type="text/javascript" src="<? echo base_url();?>asset/web/js/jquery-1.7.2.min.js"></script> 
<script type="text/javascript" src="<? echo base_url();?>asset/web/js/move-top.js"></script>
<script type="text/javascript" src="<? echo base_url();?>asset/web/js/easing.js"></script>
<script type="text/javascript" src="<? echo base_url();?>asset/web/js/startstop-slider.js"></script>


<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/countdown.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/web/js/countdown.js"></script>
<script src="<? echo base_url();?>asset/web/js/easyResponsiveTabs.js" type="text/javascript"></script>
<link href="<? echo base_url();?>asset/web/css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="<? echo base_url();?>asset/web/css/global.css">
<script src="<? echo base_url();?>asset/web/js/slides.min.jquery.js"></script>
<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 6,
				fadeSpeed: 500,
				generateNextPrev: false,
				generatePagination: false
			});
		});
	</script>
</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>Need help?</span> call us <span class="number">1-22-3456789</span></span></p>
			</div>
			<div class="account_desc">
				<ul>
					<li><a href="<? echo base_url();?>akun/daftar">Register</a></li>
					<li><a href="<? echo base_url();?>akun/masuk">Login</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="index.html"><img src="<? echo base_url();?>asset/web/images/logo.png" alt="" /></a>
			</div>

			  <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>
	 <div class="clear"></div>
  </div>
  
	<div class="header_bottom">
	     	<div class="menu">
	     		<ul>
			    	<li><a href="<? echo base_url() ?>">Home</a></li>
			    	
					<? foreach ( $get_list_categori_header->result() as $menu_header ) { ?>
					<li <? if ( $url_active == $menu_header->kategori_id ) { echo "class='active'"; }?>><a href="<? echo base_url() . $menu_header->url_source . $menu_header->url_friendly ?>"><? echo $menu_header->kategori_name ?></a></li>
					<? } ?>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="clear"></div>
	     </div>	 
          </div>
   </div>