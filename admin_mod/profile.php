<?php include '../assets/includes/header.php'; ?>

<!-- DIRECTORY -->
<div class="main-dir">
	<h1><?php echo ucwords($userName); ?></h1>
</div>
<!-- END DIRECTORY -->

<!-- CONTAINER -->
<div class="main-container">
	<div class="inner-container">
		<div class="content-row">
			<div class="panel back-color-white">
				<div class="panel-header-norm">
					<h2>Profile</h2>
				</div>
				<div class="panel-content-norm">
					<span class="error" id="error"></span>
					<form class="close-input" method="post" id="editUser">
						<div>
							<label class="data-name">User ID:</label>
							<input type="text" value="<?php echo $id; ?>" id="userID" disabled required>
						</div>
						<div>
							<label class="data-name">First Name:</label>
							<input type="text" value="<?php echo $fname; ?>" id="fname" disabled required>
						</div>
						<div>
							<label class="data-name">Last Name:</label>
							<input type="text" value="<?php echo $lname; ?>" id="lname" disabled required>
						</div>
						<div class="col-btn">
							<a class="data-link" href="profile_edit.php?id=<?php echo $id; ?>&action=select-user">Change Password</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTAINER -->
<?php include '../assets/includes/footer.php'; ?>