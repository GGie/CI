    <div class="content">
    	<div class="section group">
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  <div class="alert alert-danger">
				  		<?php if ( $this->session->flashdata('message')) { echo $this->session->flashdata('message'); }?>
				</div>
				  	<h2>MASUK</h2>
					    <form method="post" action="<?php echo site_url(); ?>akun/masuk">
						    <div>
						    	<span><label>E-mail</label></span>
						    	<span><input name="email" type="text" maxlength="45" required></span>
						    </div>
						    <div>
						     	<span><label>Password</label></span>
						    	<span><input name="password" type="text" maxlength="35" required></span>
						    </div>
						   <div>
						   		<span><input type="submit" value="Submit" name="login" class="myButton"></span>
						  </div>
					    </form>
				  </div>
  				</div>
				<div class="col span_1_of_3">
				
				 </div>
			  </div>		
         </div> 