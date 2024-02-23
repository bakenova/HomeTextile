<!-- Sign In Modal -->
<div class="modal" id="authorizationBox">
	<div class="modal-content">
		<h2 class="modal-title">Authorization</h2>
		<div class="form-container">
			<form action="" method="post">
				<div class="form-group">
					<label for="signInUsername">Username or Email:</label>
					<input type="text" id="signInUsername" name="username" placeholder="Enter your username or email">
				</div>
				<div class="form-group">
					<label for="signInPassword">Password:</label>
					<input type="password" id="signInPassword" name="password" placeholder="Enter your password">
				</div>
				<button type="submit" onclick="AuthorizeUser()">Sign In</button>
			</form>
			<span class="close" onclick="CloseSignInModal()">&times;</span>
		</div>

		<div class="register-link">
			<p>Don't Have an Account Yet? <a href="#" class="register-now-link"
											 onclick="ToggleRegistrationBox()">Register now</a></p>
		</div>
	</div>
</div>