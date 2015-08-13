<div class="content_top">
    		<div class="back-links">
    		<p><a href="index.html">Home</a> >>>> <a href="#">Electronics</a></p>
    	    </div>
    		<div class="clear"></div>
    	</div>
	      <div class="section group">
				
				<?php 	foreach ( $data_kategori_lelang->result() as $produk ) { ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="preview.html"><img src="<? echo base_url();?>asset/web/images/product/<? echo $produk->gambar_url ?>" alt="<? echo $produk->produk_nama ?>" /></a></a>
					 <h2><?php echo $produk->produk_nama ?></h2>
					 <script>

					 </script>
					 <!--<div class="timeshop"><div id="timershop" class="timershop">2015-08-11 00:00:01</div></div>-->
					 <div class="timeshop"><div data-text="%s Hari %s:%s:%s" countdown><? echo $produk->waktu_akhir ?></div></div>
					<div class="price-details">
				       <div class="price-number">
							<p><span class="rupees">Rp. <?php echo number_format($produk->harga_awal, 0, "", ".") ?></span></p>
					    </div>
					       		<div class="add-cart">								
									<h4><a href="<?php echo base_url() . $produk->url_source . $produk->url_friendly . "-" . str_replace(" ", "-", $produk->produk_nama) ?>">Tawar</a></h4>
							     </div>
							 <div class="clear"></div>
					</div>
				</div>
				<?php } ?>
			</div>
			