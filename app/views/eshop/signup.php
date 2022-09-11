<?php  $this->view("header",$data);?>

	<section id="form"><!--form-->
		<div class="container">
			<div style="text-align:center; color: red;">
			<span><?php chek_error()?></span>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form method="post">
							<input type="text" name="username" placeholder="Name"/>
							<input type="email" name="email" placeholder="Email Address"/>
							<input type="password" name="password" placeholder="Password"/>
							<input type="password" name="cpassword" placeholder="Confirm Password"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	
	<?php  $this->view("footer"); ?>	