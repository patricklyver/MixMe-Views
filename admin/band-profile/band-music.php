<?php include('../../config.php'); ?>
<? // MixeMe Band Profile
include('../config.php');?>
<div class="row">
	<div class="col-md-12">
		<div class="admin_stage">
		
			<div class="admin_stage_head">
				<h2 class="admin_stage_title stage_title">Music</h2>
			</div>

				<div class="admin_stage_content following_stage">
					<div class="row profile-row">
						<h3 class="profile-headers">My Music</h3>
					</div>
					<div class="row profile-row">
						<div class="col-md-2">
							<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
						</div>
						<div class="col-md-10">
							<h4 class="profile-name">Gravity A</h4>
							<button type="button" class="btn btn-default btn-sm">
								Launch
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Delete
							</button>
						</div>
					</div>				

					<!-- 2nd profile row -->
					<div class="row profile-row">
						<div class="col-md-2">
							<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
						</div>
						<div class="col-md-10">
							<h4 class="profile-name">Gravity B</h4>
							<button type="button" class="btn btn-default btn-sm">
								Launch
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Delete
							</button>
						</div>
					</div>				

					<!-- 3rd profile row -->
					<div class="row profile-row">
						<div class="col-md-2">
							<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="profile-image pull-right">
						</div>
						<div class="col-md-10">
							<h4 class="profile-name">Gravity C</h4>
							<button type="button" class="btn btn-default btn-sm">
								Launch
							</button>
							<button type="button" class="btn btn-default btn-sm">
								Delete
							</button>
						</div>
					</div>	

					<div class="row profile-row">
						<div class="btn add_profile_btn global_action_btn gradient" data-toggle="modal" data-target="#add-album-modal">
							<i class="icon-plus"></i> Add Album
						</div>
					</div>	
					<div class="spacer">
					</div>		

				</div>
					<div class="admin_stage_bottom">
				</div>

			</div> <!-- end stage content -->

			<div class="modal fade" id="add-album-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog ">
			        <div class="modal-content">
			            <div class="admin_stage_head">
			                
								<h2 class="admin_stage_title stage_title">Add Album</h2>
							
			        	</div>
			        	<div class="fan_target_content">

			        		<div class="row add-event-row">
				     
					        		<form class="messages_target_form">
					        		
					        			<div class="col-md-4">	
											<div class="" id="thumb-3">
												<img src="<?=ASSETS;?>/img/album_holder.jpg" alt="album image" class="add-event-thumb">
											</div>
											<div class="btn  global_action_btn gradient change-image-btn">
												 Upload Image
											</div>
										</div>
										<div class="col-md-8"> 
						        			<div class="form-group">
		    									<label for="event-name">Album Name</label>
		    									<input type="text" class="form-control" id="event-name">
		    								</div>
    									
    										<div class="form-group">
	    										<label for="event-info">Description</label>
	    										<textarea type="text" class="form-control" id="event-info"></textarea>
    										</div>

    										<div class="form-group">
	    										<label for="event-location">Album Tags</label>
	    										<input type="text" class="form-control" id="event-location">
    										</div>


    										<label>Album Tracks</label>		

											<div class="btn  global_action_btn gradient change-image-btn">
													<i class="icon-plus"> Upload Tracks</i>
											</div>
												
											<div class="add-track-wrapper">
												<div class="row add-track-row">
													<div class="col-md-2">1 -</div>
													<div class="col-md-10">Introduction (3:23)</div>
												</div>
												<div class="row add-track-row">
													<div class="col-md-2">2 -</div>
													<div class="col-md-10">Walk into the Sun (3:03)</div>
												</div>
												<div class="row add-track-row">
													<div class="col-md-2">3 -</div>
													<div class="col-md-10">Jumper (3:03)</div>
												</div>
												<div class="row add-track-row">
													<div class="col-md-2">4 -</div>
													<div class="col-md-10">Shotgun Wedding (3:23)</div>
												</div>
											</div>	

										</div>	

					        		</form>

				        		</div>
				        	</div> <!-- end row -->

				        	<div class="admin_stage_bottom">
				        		<div class="btn modal-save-cancel global_action_btn gradient pull-right" data-dismiss="modal">
									Save Album
								</div>

								<div class="btn modal-save-cancel global_action_btn gradient pull-right" data-dismiss="modal">
									Cancel
								</div>
			        		</div>
			    	</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

		</div>
	</div>
</div>
<!-- / End Content -->
