	<div class="header_slide">
			<div class="header_bottom_left">				
				<div class="categories">
				  <ul>
				  	<h3>Profil</h3>
				      <li><a href="#">Pemberitahuan</a></li>
				      <li><a href="<?php echo site_url(); ?>/product/index">Lelang Barang</a></li>
				      <li><a href="#">Cari Barang Lelang</a></li>
				      <li><a href="#">Accessories</a></li>
				      <li><a href="#">Software</a></li>
				       <li><a href="#">Sports &amp; Fitness</a></li>
				       <li><a href="#">Setting</a></li>
				       <li><a href="<?php echo site_url(); ?>/masuk/logout">Logout</a></li>
				  </ul>
				</div>					
	  	     </div>
				<div class="header_bottom_right">					 
				<div class="grid_1_of_4 images_1_of_4">
				<?php foreach ( $data->result() as $profil ) { ?>
					 <img src="<?php echo base_url(); ?>assets/images/profil.png" alt="" />
					 <h4><?php echo $profil->username; ?></h4>
				
				</div>					 
				<div class="grid_1_of_4 pull">
				
				<table class="tabledetail">
                          <tr>
                            <td  class="judul">ID User :</td>
                          </tr>
                          <tr>
                            <td class="desc_gie"><?php echo $profil->id_user; ?></td>
                          </tr>
						 </table>
						 
						<table class="tabledetail">
                          <tr>
                            <td class="judul">Username :</td>
                          </tr>
                          <tr>
                            <td class="desc_gie"><?php echo $profil->username; ?></td>
                          </tr>
						 </table>
						 
						<table class="tabledetail">
                          <tr>
                            <td class="judul">Email :</td>
                          </tr>
                          <tr>
                            <td class="desc_gie"><?php echo $profil->email; ?></td>
                          </tr>
						</table> 
						<table class="tabledetail">
                          <tr>
                            <td class="judul">Company :</td>
                          </tr>
                          <tr>
                            <td class="desc_gie"><?php echo $profil->company; ?></td>
                          </tr>
						</table> 
						<table class="tabledetail">
                          <tr>
                            <td class="judul">Level :</td>
                          </tr>
                          <tr>
                            <td class="desc_gie"><?php echo $profil->level; ?></td>
                          </tr>
						</table>
				</div>
				<?php } ?>
				</div>
		   <div class="clear"></div>
		</div>
		