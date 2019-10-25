<?php include 'inc/header.php'; ?>

	<div class="container">
		<h3>Welcome to Dashboard
			<div class="float-right">
				<?php echo anchor("welcome/logout", 'Logout', ['class'=>'btn btn-primary btn-sm']); ?>
			</div>
		</h3>
		<?php $username = $this->session->userdata('username'); ?>
		<h5>Welcome <?php echo "<b>".$username."</b>"; ?></h5>
		<div class="row">
			<?php echo anchor("admin/addcollege", 'Add College', ['class'=>'btn btn-primary btn-sm mx-1']); ?>
			<?php echo anchor("admin/addmoderator", 'Add Moderator', ['class'=>'btn btn-primary btn-sm mx-1']); ?>
			<?php echo anchor("admin/addstudent", 'Add Student', ['class'=>'btn btn-primary btn-sm mx-1']); ?>
		</div>
		<hr>
		<div class="row">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>College Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Role</th>
						<th>Gender</th>
						<th>Branch</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

<?php include 'inc/footer.php'; ?>
