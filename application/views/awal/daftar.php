
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">

			<form class="login100-form validate-form" method="post" action="<?= base_url('App/daftar');?>"> 
				<span class="login100-form-title p-b-37">
					Daftar Akun
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="nama lengkap" value="<?= set_value('username');?>" >
					<span class="focus-input100"></span>
					
				</div>

				 <div class="wrap-input100 validate-input m-b-20" data-validate="nrp">
					<input class="input100" type="text" name="nrp" placeholder="nrp" value="<?= set_value('nrp');?>" >
					<span class="focus-input100"></span>
				</div> 

				<div class="dropdown m-b-20" >
					<select name="id_level" class="btn dropdown-toggle ">
						<option value=""  class="dropdown-item" disable>Pilih Posisi</option>
						<?php 
						 	foreach($level as $lv){
						?>
							<option class="dropdown-item" value="<?php echo $lv->id_level ?>"><?php echo $lv->nama_level ?></option>
						<?php
							 }
						 ?>
					</select>
					<span class="focus-input100"></span>
				</div>

				<div class="dropdown m-b-20" >
					<select name="id_bagian" class="btn dropdown-toggle ">
					<option value=""  class="dropdown-item" disable>Pilih Bagian</option>
						<?php 
						 	foreach($bagian as $b){
						?>
							<option class="dropdown-item" value="<?php echo $b->id_bagian ?>"><?php echo $b->nama_bagian ?></option>
						<?php
							 }
						 ?>
					</select>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" placeholder="kata sandi">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Repeat password">
					<input class="input100" type="password" name="pass2" placeholder="ulang kata sandi">
					<span class="focus-input100"></span>
					<!-- <?php// echo form_error('2'); ?> -->
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
						daftar
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<a href="<?= base_url('App');?>" class="txt1">
						Sudah  ada akun? silahkan Masuk
                    </a>
				</div>

				<!-- jika dibutuhkan maka buka commant
					<div class="flex-c p-b-112">
					<a href="#" class="login100-social-item">
						<i class="fa fa-facebook-f"></i>
					</a>

					<a href="#" class="login100-social-item">
						<img src="images/icons/icon-google.png" alt="GOOGLE">
					</a>
				</div>

				<div class="text-center">
					<a href="#" class="txt2 hov1">
						Daftar
					</a>
                </div> -->
                
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
