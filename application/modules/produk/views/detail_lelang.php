<? foreach ( $data_detail->result() as $detail ) {} ?>
    	<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.html">Home</a> >> <a href="<? echo $detail->url_friendly ?>"><? echo $this->uri->segment(2) ?></a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>
	<div class="section group">
				
				<div class="cont-desc span_1_of_2">
				  <div class="product-details">	
					<div class="grid images_3_of_2">
						<div id="container">
						   <div id="products_example">
							   <div id="products">
								<div class="slides_container">
								
				<? foreach ( $data_gambar->result() as $gambar ) { ?>
				<a href="#" ><img src="<? echo base_url(); ?>asset/web/images/product/<? echo $gambar->gambar_url ?>" alt=" " /></a>
									
				<? } ?>					
								</div>
								
								<ul class="pagination">
				<? foreach ( $data_gambar->result() as $gambar ) { ?>
									<li><a href="#"><img src="<? echo base_url(); ?>asset/web/images/product/<? echo $gambar->gambar_url ?>" alt=" " /></a></li>
								
				<? } ?>
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
					    	<li><a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo site_url(); ?><?php echo $this->uri->uri_string() ?>"><img src="<?php echo base_url(); ?>asset/web/images/facebook.png" alt="Share facebook Network" width="60"/></a></li>
					    	<li><a href="http://twitter.com/share?url=<?php echo site_url(); ?><?php echo $this->uri->uri_string() ?>"><img src="<?php echo base_url(); ?>asset/web/images/twitter.png" alt="Share facebook Network"  width="60"/></a></li>				    
			    		</ul>
					</div>					
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		  </div>
		  
	<div class="product_desc">	
			<div class="resp-tabs-container">

			
					<div class="product-desc">
						<p><?php echo $detail->produk_detail ?></p>
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
					 <a href="#"><img src="<?php echo base_url(); ?>asset/web/images/new-pic1.jpg" alt=""></a>					
					<div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="#"><img src="<?php echo base_url(); ?>asset/web/images/new-pic2.jpg" alt=""></a>
					 <div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="#"><img src="<?php echo base_url(); ?>asset/web/images/new-pic4.jpg" alt=""></a>
					<div class="price" style="border:none">
					       		<div class="add-cart" style="float:none">								
									<h4><a href="#">Add to Cart</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <img src="<?php echo base_url(); ?>asset/web/images/new-pic3.jpg" alt="">
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
					<h3>Bid Lelang</h3>
					<?php $no = 0 ?>
					<?php //foreach ( $sidebar_detail->result() AS $kategory ) { ?>
						<?php $no++ ?>
							<li><a href=""><b>Gie</b> > Rp. 750.000</a> </li>
							<li><a href=""><b>Udin</b> > Rp. 700.000</a> </li>
							<li><a href=""><b>Basri</b> > Rp. 650.000</a> </li>
						<?php //} ?>
					</ul>
 				</div>
				
 				</div>
 		</div>
 	
