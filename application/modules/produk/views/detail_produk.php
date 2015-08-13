<? foreach ( $data_detail->result() as $detail ) {} ?>

	<div class="section group">
				
				<div class="cont-desc span_1_of_2">
				<?php //foreach ( $detail->result() as $data ) { ?>
				  <div class="product-details">	
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<?php //if(strlen($data->img_url_1) > 3) { ?>
									<a href="#" target="_blank"><img src="<?php echo base_url(); ?>asset/web/images/product/<?php echo $data->img_url_1 ?>" alt=" " /></a>
									<?php //} ?>
									<?php //if(strlen($data->img_url_2) > 3) { ?>
									<a href="#" target="_blank"><img src="<?php echo base_url(); ?>asset/web/images/product/<?php echo $data->img_url_2 ?>" alt=" " /></a>
									<?php //} ?>
									<?php //if(strlen($data->img_url_3) > 3) { ?>
									<a href="#" target="_blank"><img src="<?php echo base_url(); ?>asset/web/images/product/<?php echo $data->img_url_3 ?>" alt=" " /></a>					
									<?php //} ?>
									<?php //if(strlen($data->img_url_4) > 3) { ?>
									<a href="#" target="_blank"><img src="<?php echo base_url(); ?>asset/web/images/product/<?php echo $data->img_url_4 ?>" alt=" " /></a>
									<?php //} ?>
								</div>
								<ul class="pagination">
									<?php //if(strlen($data->img_url_1) > 3) { ?>
									<li><a href="#"><img src="<?php echo base_url(); ?>asset/web/images/product/<?php echo $data->img_url_1 ?>" alt=" " /></a></li>
									<?php //} ?>
									<?php //if(strlen($data->img_url_2) > 3) { ?>
									<li><a href="#"><img src="<?php echo base_url(); ?>asset/web/images/product/<?php echo $data->img_url_2 ?>" alt=" " /></a></li>
									<?php //} ?>
									<?php //if(strlen($data->img_url_3) > 3) { ?>
									<li><a href="#"><img src="<?php echo base_url(); ?>asset/web/images/product/<?php echo $data->img_url_3 ?>" alt=" " /></a></li>
									<?php //} ?>
									<?php //if(strlen($data->img_url_4) > 3) { ?>
									<li><a href="#"><img src="<?php echo base_url(); ?>asset/web/images/product/<?php echo $data->img_url_4 ?>" alt=" " /></a></li>
									<?php //} ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="desc span_3_of_2">
				
						<table class="tabledetail">
                          <tr>
                            <td  class="judul">Deskripsi Produk</td>
                          </tr>
                          <tr>
                            <td class="desc_gie"><h3><?php echo $detail->produk_nama ?></h3></td>
                          </tr>
						 </table>
						 
						<table class="tabledetail">
                          <tr>
                            <td class="judul">Waktu Tersisa</td>
                          </tr>
                          <tr>
                            <td class="desc_gie"><div data-text="%s Hari %s:%s:%s" countdown><?php echo $detail->waktu_akhir ?></div></td>
                          </tr>
						 </table>
						 
						<table class="tabledetail">
                          <tr>
                            <td class="judul">Harga</td>
                          </tr>
                          <tr>
                            <td class="desc_gie">Rp. <?php echo number_format($detail->harga_awal, 0, "",".") ?></td>
                          </tr>
						 </table>						 
						 
				<div class="share-desc">
					<div class="share">
						<p>Share Product :</p>
						<ul>
					    	<li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo site_url(); ?><?php echo $this->uri->uri_string() ?>"><img src="<?php echo base_url(); ?>assets/images/facebook.png" alt="Share facebook Network" width="60"/></a></li>
					    	<li><a href="http://twitter.com/share?url=<?php echo site_url(); ?><?php echo $this->uri->uri_string() ?>"><img src="<?php echo base_url(); ?>assets/images/twitter.png" alt="Share facebook Network"  width="60"/></a></li>				    
			    		</ul>
					</div>					
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		  </div>
		  <?php //} ?>
	<div class="product_desc">	
			<div class="resp-tabs-container">

			
					<div class="product-desc">
						<p><?php echo $data->keterangan ?></p>
					</div>
			</div>
	</div>
   <div class="content_bottom">
    		<div class="heading">
    		<h3>Related Products</h3>
    		</div>
    		<div class="see">
    			<p><a href="#">See all Products</a></p>
    		</div>
    		<div class="clear"></div>
    	</div>
   <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="#"><img src="<?php echo base_url(); ?>assets/images/new-pic1.jpg" alt=""></a>					
					<div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="#"><img src="<?php echo base_url(); ?>assets/images/new-pic2.jpg" alt=""></a>
					 <div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="#"><img src="<?php echo base_url(); ?>assets/images/new-pic4.jpg" alt=""></a>
					<div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <img src="<?php echo base_url(); ?>assets/images/new-pic3.jpg" alt="">
					 <div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
			</div>
        </div>
				<div class="rightsidebar span_3_of_1">
				
				<div class="categories">
					<ul>
					<h3>Categories</h3>
					<?php $no = 0 ?>
					<?php //foreach ( $sidebar_detail->result() AS $kategory ) { ?>
						<?php $no++ ?>
							<li><a href="<?php echo site_url() ?>/kategory/kategory/index/<?php echo $kategory->kategori ?>"><?php echo $kategory->kategori ?></a>
							</li>
						<?php //} ?>
					</ul>
 				</div>
				
 				</div>
 		</div>
 	
