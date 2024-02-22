<!-- Registration Box -->
<div class="modal-reg" id="registrationBox">
	<div class="modal-content-reg">
		<div class="modal-title-reg">
			<h2>Registration</h2>
		</div>
		<div class="form-container-gen-reg">
			<div class="form-container-one">
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" placeholder="Enter your name">
				</div>
				<div class="form-group">
					<label for="phoneNumber">Phone Number</label>
					<input type="text" id="phoneNumber" placeholder="Enter your phone number">
				</div>
				<div class="form-group">
					<label for="signUpUsername">Username</label>
					<input type="text" id="signUpUsername" placeholder="Enter your username">
				</div>
			</div>
			<div class="form-container-two">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" id="email" placeholder="Enter your email">
				</div>
				<div class="form-group">
					<label for="signUpPassword">Password</label>
					<input type="password" id="signUpPassword" placeholder="Enter your password">
				</div>
				<div class="form-group">
					<label for="repeatPassword">Repeat Password</label>
					<input type="password" id="repeatPassword" placeholder="Repeat your password">
				</div>
			</div>
		</div>
		<button onclick="registerUser()">Register</button>
		<p class="switch-box">Already have an account?
			<a href="#" class="register-now-link" onclick="toggleAuthorizationBox()">Sign In Now</a>
		</p>
		<span class="close" onclick="closeRegistrationBox()">&times;</span>
	</div>
</div>