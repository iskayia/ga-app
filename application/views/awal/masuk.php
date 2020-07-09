	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post" action="<?= base_url('App/index');?>">
				<span class="login100-form-title p-b-37">
					Masuk Akun
				</span>

				<!-- <div class="wrap-input100 validate-input m-b-20" data-validate="Enter username">
					<input class="input100" type="text" name="username" placeholder="nama anda" value="<?= set_value('username'); ?>">
					<span class="focus-input100"></span>
					
				</div> -->

				<div class="wrap-input100 validate-input m-b-20" data-validate="nrp">
					<input class="input100" type="text" name="nrp" placeholder="nrp" value="<?= set_value('nrp');?>" >
					<span class="focus-input100"></span>
				</div> 
				

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="pass" placeholder="kata sandi">
					<span class="focus-input100"></span>
					<?php echo form_error('password'); ?>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn">
						masuk
					</button>
				</div>

				<div class="text-center p-t-57 p-b-20">
					<a href="<?= base_url('App/daftar');?>" class="txt1">
						Belum ada akun? silahkan daftar
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
