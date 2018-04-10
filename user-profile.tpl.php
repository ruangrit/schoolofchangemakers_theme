<?php 
	// print '<pre>';
 // 	print_r($user_profile);
 //  	print '</pre>';
	// global $user;
	// echo $user->uid;
	
	// print '<pre>';
 //    print_r($user);
 //    print '</pre>';

	$arg1= arg(1);

	if(!empty($arg1)){
		//$user = user_load($arg1);
		$uid= $arg1;

		// My User Profile

		$profile_project_join = profile_user_join_project();
		$list_project_owner = list_project_owner();


		// End my user 

		// Start Other Uerview


		// End Other User view
		$other_join_project = profile_user_other_join_project($uid);


		$other_campaign = list_campaign_other($other_join_project);
		$user_list_project_owner = user_list_project_owner($uid);

		$my_campaign = list_campaign_other($list_project_owner);

		$list_coach_other = changemakers_list_coach_other_project($uid);
		$list_pt_other_project = changemakers_list_partner_other_project($uid);
		$list_hd_other_project = changemakers_list_consult_other_project($uid);

		// check Condition


		// 


		// Join
		$is_other_project_owner_result = check_user_in_project($user_list_project_owner,$profile_project_join);
		$is_coach_in_project_result = check_user_in_project($list_coach_other,$profile_project_join);
		$is_hd_in_project_result = check_user_in_project($list_hd_other_project,$profile_project_join);
		$is_pt_in_project_result = check_user_in_project($list_pt_other_project,$profile_project_join);
		$user_join_project_result =  check_user_in_project($profile_project_join,$other_join_project);

		// Owner
		$user_owner_project_result =  check_user_in_project($list_project_owner,$other_join_project);
		$is_owner_coach_in_project_result = check_user_in_project($list_coach_other,$list_project_owner);
		$is_owner_hd_in_project_result = check_user_in_project($list_hd_other_project,$list_project_owner);
		$is_owner_pt_in_project_result = check_user_in_project($list_pt_other_project,$list_project_owner);

		if(empty($user->roles[10]) || empty($user->roles[9]) || empty($user->roles[6])){
			
		}
		// echo "<pre>";
		// print_r($list_pt_other_project);
		// echo "</pre>";
		// echo "<pre>";
		// print_r($list_project_owner);
		// echo "</pre>";
		// echo "<pre>";
		// print_r($other_join_project);
		// echo "</pre>";

	}else{
		$uid = $user->uid;
	}

	if(!empty($user->roles[6])){
		$org_project = changemakers_list_org_project();
		$user_org_relate_project = check_user_in_project($other_join_project,$org_project);
		$org_owner_project = check_user_in_project($user_list_project_owner,$org_project); // ดูเบอร์ติดต่อของ Owner Project
		$user_campaign_relate_project = check_user_in_project($my_campaign,$other_campaign);
		$org_view_phone_project_coach = check_user_in_project($list_coach_other,$org_project); // ดูเบอร์ติดต่อของ Role อื่นๆ
		$org_view_phone_project_pt = check_user_in_project($list_pt_other_project,$org_project); // ดูเบอร์ติดต่อของ Role อื่นๆ
		$org_view_phone_project_hd = check_user_in_project($list_hd_other_project,$org_project); // ดูเบอร์ติดต่อของ Role อื่นๆ
			
	}
	if(!empty($user->roles[9])){
		$partner_sponsor = changemakers_list_partner_campaign();
		$partner_sponsor_result = check_user_in_project($partner_sponsor,$other_campaign);
		$partner_project = changemakers_list_partner_project();
		$partner_projectr_result = check_user_in_project($other_join_project,$partner_project);
		$partner_projectr_owner_result = check_user_in_project($user_list_project_owner,$partner_project); // ดูเบอร์ติดต่อของ Owner Project
		$user_campaign_relate_project = check_user_in_project($my_campaign,$other_campaign);
		$partner_project_pt = check_user_in_project($partner_project,$list_pt_other_project); //ดูเบอร์ติดต่อของ PTเอง 
		$partner_project_coach = check_user_in_project($list_coach_other,$list_pt_other_project); //ดูเบอร์ติดต่อของ PTเอง 
		$partner_project_hd = check_user_in_project($list_hd_other_project,$list_pt_other_project); //ดูเบอร์ติดต่อของ PTเอง 
		//$partner_project_org = check_user_in_project($partner_project,$list_pt_other_project); //ดูเบอร์ติดต่อของ PTเอง 

			// print '<pre>';
		 //    print_r($partner_project_pt);
		 //    print '</pre>';
		 // //    print '<pre>';
		 // //    print_r($partner_project);
		 // //    print '</pre>';
		 // //    print '<pre>';
		 // //    print_r($partner_project);
		 // //    print '</pre>';

	}
	if(!empty($user->roles[8])){
		$helpdesk_cosult = changemakers_list_consult_project();
		$hekpdesk_cosult_result = check_user_in_project($other_join_project,$helpdesk_cosult);

	}
	if(!empty($user->roles[5])){
		$coach_project = changemakers_list_coach_project();
		$coach_project_result = check_user_in_project($other_join_project,$coach_project);
		$coach_project_owner_result = check_user_in_project($user_list_project_owner,$coach_project); // ดูเบอร์ติดต่อของ Owner Project

	}
	//echo $user->uid;
		// echo "<pre>";
		// print_r($coach_project);
		// echo "</pre>";
		// echo "<pre>";
		// print_r($coach_project_result);
		// echo "</pre>";
		// echo "<pre>";
		// print_r($coach_project_owner_result);
		// echo "</pre>";
		
	$data_user = user_load($uid);
	
	// print '<pre>';
 //    print_r($coach_project_result);
 //    print '</pre>';
	// echo $user_profile['field_profile_firstname']['#object']->uid;
	// echo "<br>".$user->uid;
	// print '<pre>';
 //    print_r($other_join_project);
 //    print '</pre>';
	// print '<pre>';
 //    print_r($user_org_relate_project);
 //    print '</pre>';
 //    print '<pre>';
 //    print_r($my_campaign);
 //    print '</pre>';
 //      print '<pre>';
 //    print_r($user_campaign_relate_project);
 //    print '</pre>';
	// print '<pre>';
 //    print_r($list_project_owner);
 //    print '</pre>';
 //    print '<pre>';
 //    print_r($user_owner_project_result);
 //    print '</pre>';
	// print '<pre>';
 //    print_r($is_coach_in_project_result);
 //    print '</pre>';
	// print '<pre>';
 //    print_r($is_other_project_owner_result);
 //    print '</pre>';
	// print '<pre>';
 //    print_r($user_list_project_owner);
 //    print '</pre>';
	// print '<pre>';
 //    print_r($other_join_project);
 //    print '</pre>';
 //    print '<pre>';
 //    print_r($profile_project_join);
 //    print '</pre>';
 //     print '<pre>';
 //    print_r($user);
 //    print '</pre>';
 //    print '<pre>';
 //    print_r($partner_sponsor);
 //    print '</pre>';
 //     print '<pre>';
 //    print_r($other_campaign);
 //    print '</pre>';
 //     print '<pre>';
 //    print_r($partner_sponsor);
 //    print '</pre>';
 //     print '<pre>';
 //    print_r($helpdesk_cosult);
 //    print '</pre>';
 //     print '<pre>';
 //    print_r($coach_project);
 //    print '</pre>';
	$sql= "select nid from node where type='session_offer' and uid='".$data_user->uid."'";
	$query_db = db_query($sql);
	//echo $query_db->nid;
	// $query_db;
	if(isset($_GET['respond'])){  ?>
		<div class="alert alert-block alert-danger messages error">
		  <a class="close" data-dismiss="alert" href="#">×</a>
			<h4 class="element-invisible">Error message</h4>
		 	<ul>
		  	<li><em class="placeholder"><?php print $_GET['respond']; ?></em></li>
		  	</ul>
		</div>
	<?php }


	if(isset($_GET['respond_email'])){ ?>
		<div class="alert alert-block alert-danger messages error">
		  <a class="close" data-dismiss="alert" href="#">×</a>
			<h4 class="element-invisible">Error message</h4>
		 	<ul>
		  	<li><em class="placeholder"><?php print $_GET['respond_email']; ?></em></li>
		  	</ul>
		</div>
	<?php }

	foreach ($query_db as $row) 
	{
	    $session_id = $row->nid;
	}
	//echo $session_id;
	if(!empty($session_id)):
	$node_load2 = node_load($session_id);
	else :
		$node_load2 = "";
	endif;
	// $track_1 = field_collection_field_get_entity($node_load2->field__available_time['und'][0]['value']);
	// foreach ($track_1 as $row) 
	// {
	//     $track_12 = $row->nid;
	// }
	//echo $node_load2->field__available_time['und'][0]['value'];
	//$track_1 = entity_load_single('field_data_field_start_hr', 15);
	if(!empty($node_load2->field__available_time['und'][0]['value'])):
	 $track_1 = entity_load('field_collection_item', array($node_load2->field__available_time['und'][0]['value']));
	else :
		$track_1 = "";
	endif;
	// echo $node_load2->field_session['und'][0]['value'];
	//echo date_format($node_load2->field_available_time['und'][0]['value'],'%m-%d-%Y');
	 //echo $track_1[15]->field_start_hr['und'][0]['value'];
	 	

	// set variable profile
   	$profile_title = $field_profile_title[0]['value'];
   	if( $profile_title == 1)
   	{
   		$profile_title = "นาย";
   	}
   	else if( $profile_title == 2)
   	{
   		$profile_title = "นาง";
   	}
  	else if( $profile_title == 3)
   	{
   		$profile_title = "นางสาว";
   	}

   	$status = $user_profile['field_profile_firstname']['#object']->status;
   	if($status == 1)
   	{
   		$status = "ใช้งานได้";
   	}
   	else
   	{
   		$status = "ใช้งานไม่ได้";
   	}
   	$createAt = $user_profile['field_profile_firstname']['#object']->created;

   	$birthdate  = $field_profile_birthdate[0]['value'];
   	$date =  new DateTime($birthdate);
   	$birthdate_user = changemakers_format_date_thai_profile($date);

   	$province_user = $field_profile_province[0]['value'];
   	//$form = drupal_get_form('user_profile_form', $user, 'account');




    $data_problem = array();
    if(!empty($field_profile_problem_interest)):
    foreach ($field_profile_problem_interest as $key => $value) {
    	$data_problem[] = $value['tid'];
    }
    endif;

    // print "<pre>";
   	// print_r($data_problem);
   	// print "</pre>";

    $data_target = array();
    if(!empty($field_profile_target_group)):
    foreach ($field_profile_target_group as $key => $value) {
    	$data_target[] = $value['tid'];
    }
    endif;

    $data_skill = array();
    if(!empty($field_profile_skill_interest)):
    foreach ($field_profile_skill_interest as $key => $value) {
    	$data_skill[] = $value['tid'];
    }
    endif;
 //   	print '<pre>';
	// print_r($field_profile_target_group_other);
	// print '</pre>';


   	
?>
<br>

<div class="row">

		<?php if(isset($user->roles[10]) && $user_profile['field_profile_firstname']['#object']->uid==$user->uid){ ?>
			<div class="col-xs-12">
				<div class="notice--box">
					<div class="col-xs-12 padding10">
					<p>Your account is unverified. To change to verified member, verify your mobile phone</p>
					</div>
					<div class="col-xs-12">
						<a href="/about-verified-member">
						<button type="button" class="btn btn--border">อ่านข้อดีของการเป็น Verified Member</button>
						</a>
					
				    	<a href="/verified-member"><button type="button" class="btn btn--submit">ยืนยันเบอร์โทรศัพท์</button></a>
					</div>
					<div class="cls"></div>
				</div>
			</div>
    <br><br>
		<?php } ?>
    
    
        
       <div class="row">
	   <div class="col-xs-12">
		<div class="col-xs-8">
			<!-- Start Porfile -->
			<?php if(isset($user->roles[6]) && $user_profile['field_profile_firstname']['#object']->uid==$user->uid): ?>
			
				<?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<a href="" data-toggle="modal" data-target="#myProfile">'; endif; ?>
				<div class="viewcontent--box col-xs-12 bottom__yellow">
                    <h2 class="headline__thaisan viewcontent--title"><i class="icon-profile txt__16"></i> ข้อมูลส่วนองค์กร
            	<?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?>
                    </h2>

                    
				  	<hr class="hr-style-profile">
				    <div class="panel-body">
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	ชื่อองค์กร
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php 
							 	// print "<pre>";
							 	// print_r($field_organization);
							 	// print "</pre>";

							 	echo $field_organization[0]['taxonomy_term']->name;?>
							</div>
				    	</div>
				    	<br/>
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	ที่อยู่
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php echo 	$field_profile_address[0]['value'];?>
							</div>
				    	</div>
				    	<br/>
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	จังหวัด
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php echo 	$field_profile_province[0]['value'];?> <?php echo 	$field_profile_zipcode[0]['value'];?>
							</div> 
				    	</div>
				    	<br/>
					</div>	  
			    </div>

			<?php elseif(isset($data_user->roles[6]) && $user_profile['field_profile_firstname']['#object']->uid!=$user->uid): ?>

				<div class="viewcontent--box col-xs-12 bottom__yellow">
                    <h2 class="headline__thaisan viewcontent--title"><i class="icon-profile txt__16"></i> ข้อมูลส่วนองค์กร</h2>
				  	<hr class="hr-style-profile">
				    <div class="panel-body">
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	ชื่อองค์กร
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php 
							 	// print "<pre>";
							 	// print_r($field_organization);
							 	// print "</pre>";

							 	echo $field_organization[0]['taxonomy_term']->name;?>
							</div>
				    	
                        </div>
				    	
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
                            
				    		<h3 class=" font__thaisan">
						 	จังหวัด
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php echo 	$field_profile_province[0]['value'];?> <?php echo 	$field_profile_zipcode[0]['value'];?>
							</div> 
				    	</div>
				    	

					</div>	  
			    </div>

	
			<?php elseif (isset($user->roles[9]) || isset($user->roles[8]) || isset($user->roles[10]) || isset($user->roles[3]) || isset($user->roles[4]) ||  isset($user->roles[5]) || ($user_profile['field_profile_firstname']['#object']->uid!=$user->uid)): ?>

			<?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<a href="" data-toggle="modal" data-target="#myProfile">'; endif; ?>
				<div class="viewcontent--box col-xs-12 bottom__yellow">
                    <h2 class="headline__thaisan viewcontent--title"><i class="icon-profile txt__16"></i> ข้อมูลส่วนตัว
            <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?>
                    </h2>
                    
				  	<hr class="hr-style-profile">
				    <div class="panel-body">
				    <?php if(!empty($user->uid)): ?>
						    	<?php if((!empty($user_owner_project_result) || !empty($user->roles[3] || !empty($user->roles[9]) || !empty($user->roles[6])) || !empty($user->roles[8]) || !empty($user->roles[5]) ) || !empty($is_owner_coach_in_project_result) || !empty($is_owner_pt_in_project_result) || !empty($is_owner_hd_in_project_result) || !empty($is_other_project_owner_result) || !empty($user_join_project_result) ) : ?>
								    	<?php if(!empty($user->roles[10])) : ?>
								    			<?php if(!empty($user_owner_project_result)  || !empty($is_owner_pt_in_project_result) || !empty($is_owner_hd_in_project_result)): ?>
											    	<div class="col-xs-12">
							                            <div class="col-xs-5">
											    		<h3 class=" font__thaisan">
													 	ชื่อจริง
														</h3>
							                            </div>
														<div class="col-xs-7">
														 	<?php echo $field_profile_firstname[0]['value']." ".$field_profile_lastname[0]['value'];?>
														</div>
											    	</div>
								    		<?php endif; ?>
								    <?php else: ?>
								    	<div class="col-xs-12">
				                            <div class="col-xs-5">
								    		<h3 class=" font__thaisan">
										 	ชื่อจริง
											</h3>
				                            </div>
											<div class="col-xs-7">
											 	<?php echo $field_profile_firstname[0]['value']." ".$field_profile_lastname[0]['value'];?>
											</div>
								    	</div>
								    <?php endif; ?>
						    	<br/>
						    	<?php elseif((!empty($user_campaign_relate_project) || !empty($partner_sponsor_result)) || $user_profile['field_profile_firstname']['#object']->uid==$user->uid) : ?>
						    	<div class="col-xs-12">
		                            <div class="col-xs-5">
						    		<h3 class="font__thaisan">
								 	ชื่อจริง
									</h3>
		                            </div>
									<div class="col-xs-7">
									 	<?php echo $field_profile_firstname[0]['value']." ".$field_profile_lastname[0]['value'];?>
									</div>
						    	</div>
						 
						    	<?php endif; ?>	
				    	<?php endif; ?>	

				    	<?php if(!empty($user->roles[3]) || ($user_profile['field_profile_firstname']['#object']->uid==$user->uid)) : ?>

				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	วันเกิด
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php echo changemakers_format_date_thai_profile($date);?>
							</div>
				    	</div>
				
				    	<?php endif; ?>
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	ชื่อเล่น/ฉายา
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php echo 	$field_profile_nickname[0]['value'];?>
							</div>
				    	</div>
				    	
				    	<?php if(!empty($user->roles[3]) || ($user_profile['field_profile_firstname']['#object']->uid==$user->uid)) : ?>
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class="font__thaisan">
						 	ที่อยู่
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php echo 	$field_profile_address[0]['value'];?>
							</div>
				    	</div>
				    	
				    	<?php endif; ?>
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	จังหวัด
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php echo 	$field_profile_province[0]['value'];?>
							</div>
				    	</div>
				    	<br/>
				    	<!-- <div class="row">
				    		<h3 class="col-xs-5 font__thaisan">
						 	เลขบัตรประชาชน/พาสปอร์ต
                            </h3>
							<div class="col-xs-6">
							 	<?php //echo "-";?>
							</div>
				    	</div> -->
				    	<!-- <br/> -->
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	สถาบัน/องค์กร
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php print $field_profile_institution[0]['value'];?>
							</div>
				    	</div>
					</div>	  
			    </div>
			<?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '</a>'; endif; ?>
			<?php endif; ?>
		    <!-- End Profile -->
		    <!-- Start Login -->
		     <?php if(!empty($user->roles[3]) || !empty($user->roles[5]) || ($user_profile['field_profile_firstname']['#object']->uid==$user->uid)) : ?>
		    <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<a href="" data-toggle="modal" data-target="#myProfileLogin">'; endif; ?>
		    
			    <div class="viewcontent--box col-xs-12 bottom__yellow margin__top15">
                    <h2 class="headline__thaisan viewcontent--title"><i class="txt__18  icon-lock-open-alt"></i> ล็อกอิน / เปลี่ยนรหัสผ่าน <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h2>
				  	<hr class="hr-style-profile">
				    <div class="panel-body">
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	ประเภทสมาชิก
                            </h3>
                            </div>
							<div class="col-xs-7 role-title">
							 	<?php
							 	foreach ($data_user->roles as $key => $value) {
							 		if($key!=2){
							 			if($key==10){
							 				echo " Unverified Member<br>";
							 			}elseif($key==4){
							 				echo " Verified Member<br>";
							 			}else{
							 				echo $value."<br>";
							 			}
							 			
							 		}

							 	}
							 	 ?>
							</div>
				    	</div>
				    	<br/>
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	สถานะ
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php echo $status; ?>
							</div>
				    	</div>
				    	<br/>
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	เป็นสมาชิกตั้งแต่
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php print changemakers_format_date_thai($data_user->created);?>
							</div>
				    	</div>
				    	<br/>
				    	<?php if(!empty($user->roles[3]) || ($user_profile['field_profile_firstname']['#object']->uid==$user->uid)) : ?>
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class="font__thaisan">
						 	เปลี่ยนรหัสผ่านครั้งล่าสุด
                            </h3>
                            </div>
							<div class="col-xs-7">
								<?php $change_password = strtotime($data_user->field_change_password_time['und'][0]['value']); ?>
								<?php if(!empty($change_password)): ?>
							 	<?php print changemakers_format_date_thai($change_password);?>
							 	<?php else: ?>
							 	<?php print changemakers_format_date_thai($data_user->created);?>
								<?php endif; ?>
							</div>
				    	</div>
				    <?php endif; ?>
				    </div>
			    </div>
            </a>
			<?php endif; ?>
		    <!-- End Login -->
		    <!-- Start Contact -->
		    <?php if(($user_profile['field_profile_firstname']['#object']->uid==$user->uid)) : ?>
		    <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo ' <a href="" id="myProfileContactClick"  data-toggle="modal" data-target="#myProfileContact">'; endif; ?>
		   
			    <div class="viewcontent--box col-xs-12 bottom__yellow margin__top15">
                    <h2 class="headline__thaisan viewcontent--title"><i class="icon-mail txt__18"></i> ช่องทางการติดต่อ <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h2>
				  	<hr class="hr-style-profile">
				  	<div class="panel-body">
					  	<?php if(isset($user->roles[6])): ?>
							<div class="col-xs-12">
                                <div class="col-xs-5">
					    		<h3 class="font__thaisan">
							 	ชื่อผู้ต้องการให้ติดต่อ
                                </h3>
                                </div>
								<div class="col-xs-7">
								 	<?php echo $field_profile_firstname[0]['value']." ".$field_profile_lastname[0]['value'];?>
								</div>
					    	</div>
					    	<br/>
					    	<div class="col-xs-13">
                                <div class="col-xs-5">
					    		<h3 class=" font__thaisan">
							 	ตำแหน่ง
                                </h3>
                                </div>
								<div class="col-xs-7 role-title">
									<?php echo $field_organization_position[0]['value'];?>
								 	<?php //echo $user_profile['field_profile_firstname']['#object']->mail;?>
								</div>
					    	</div>
					  	<?php endif;?>
				    	
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	อีเมล
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php echo $user_profile['field_profile_firstname']['#object']->mail;?>
							</div>
				    	</div>
				    	<br/>
				    	<div class="col-xs-12">
                            <div class="col-xs-5">
				    		<h3 class=" font__thaisan">
						 	โทรศัพท์
                            </h3>
                            </div>
							<div class="col-xs-7">
							 	<?php echo "<p>".$user_profile['field_profile_firstname']['#object']->field_profile_phone['und'][0]['value']."</p>";?>
							 	<?php if($field_profile_contact[0]['value'] != 0): print "<p>".$user_profile['field_profile_contact'][0]['#markup']."</p>"; endif;?>
							 	<?php if($field_profile_contact[1]['value'] != 0): print "<p>".$user_profile['field_profile_contact'][1]['#markup']."</p>"; endif;?>
							 	<?php if($field_profile_contact[2]['value'] != 0): print "<p>".$user_profile['field_profile_contact'][2]['#markup']."</p>"; endif;?>
							</div>
				    	</div>
				    </div>
			    </div>
			</a>
		    <!-- End Contact -->
		    <?php else: ?>
			<?php if(!empty($user->uid)) : ?>
			   	<?php if(!empty($user->roles[3]) || !empty($user->roles[8]) || !empty($user_owner_project_result) || !empty($partner_projectr_result) ||  !empty($user_org_relate_project) || !empty($hekpdesk_cosult_result) || !empty($partner_sponsor_result) || (!empty($user_join_project_result)) || !empty($is_other_project_owner_result) || !empty($is_coach_in_project_result) || !empty($is_pt_in_project_result) || !empty($is_hd_in_project_result) || !empty($is_owner_coach_in_project_result) || !empty($is_owner_pt_in_project_result) || !empty($is_owner_hd_in_project_result) || !empty($coach_project_result) || !empty($coach_project_owner_result) || !empty($partner_projectr_owner_result) || !empty($org_owner_project) || !empty($partner_project_pt) || !empty($org_view_phone_project_coach) || !empty($org_view_phone_project_hd) || !empty($org_view_phone_project_pt) || !empty($partner_project_coach) || !empty($partner_project_hd)) : ?>
				    <div class="viewcontent--box col-xs-12 bottom__yellow margin__top15">
	                    <h2 class="headline__thaisan viewcontent--title"><i class="icon-mail txt__18"></i> ช่องทางการติดต่อ <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h2>
					  	<hr class="hr-style-profile">
					  	<div class="panel-body">
					    	<?php if(!empty($user->roles[3])) : ?>
					    	<div class="row">
					    		<h3 class="col-xs-5 font__thaisan">
							 	อีเมล
	                            </h3>
								<div class="col-xs-6">
								 	<?php echo $user_profile['field_profile_firstname']['#object']->mail;?>
								</div>
					    	</div>
					    	<br/>
					    	<?php endif;?>
					    	<?php if(!empty($data_user->roles[8]) || empty($user->roles[10]) ||  empty($user->roles[9]) || empty($user->roles[6]) || !empty($user_campaign_relate_project)) : ?>
					    	<div class="row">
					    		<h3 class="col-xs-5 font__thaisan">
							 	โทรศัพท์
	                            </h3>
								<div class="col-xs-6">
								 	<?php echo "<p>".$user_profile['field_profile_firstname']['#object']->field_profile_phone['und'][0]['value']."</p>";?>

								</div>
					    	</div>
					    	<?php elseif(!empty($user->roles[3]) || !empty($user->roles[8]) || !empty($user_join_project_result) || !empty($partner_projectr_result) || !empty($user_owner_project_result) || !empty($coach_project_result) || !empty($partner_sponsor_result) || !empty($hekpdesk_cosult_result) || !empty($user_org_relate_project) || !empty($is_other_project_owner_result) || !empty($is_coach_in_project_result) || !empty($is_pt_in_project_result) || !empty($is_hd_in_project_result) || !empty($coach_project_owner_result) || !empty($partner_projectr_owner_result) || !empty($org_owner_project) || !empty($partner_project_pt) || !empty($org_view_phone_project_coach) || !empty($org_view_phone_project_hd) || !empty($org_view_phone_project_pt) || !empty($partner_project_coach) || !empty($partner_project_hd)) : ?>
					    	<div class="row">
					    		<h3 class="col-xs-5 font__thaisan">
							 	โทรศัพท์
	                            </h3>
								<div class="col-xs-6">
								 	<?php echo "<p>".$user_profile['field_profile_firstname']['#object']->field_profile_phone['und'][0]['value']."</p>";?>

								</div>
					    	</div>
					    	<?php endif; ?>
					    	<?php if(!empty($user->roles[3])) : ?>
					    	<div class="row">
					    		<h3 class="col-xs-5 font__thaisan">
							 
	                            </h3>
								<div class="col-xs-6">
								 	<?php if($field_profile_contact[0]['value'] != 0): print "<p>".$user_profile['field_profile_contact'][0]['#markup']."</p>"; endif;?>
								 	<?php if($field_profile_contact[1]['value'] != 0): print "<p>".$user_profile['field_profile_contact'][1]['#markup']."</p>"; endif;?>
								 	<?php if($field_profile_contact[2]['value'] != 0): print "<p>".$user_profile['field_profile_contact'][2]['#markup']."</p>"; endif;?>
								</div>
					    	</div>
					    	<?php endif; ?>
					    </div>
				    </div>
				<?php endif; ?>
			    <!-- End Contact -->
			<?php endif; ?>
		    <?php endif; ?>
		</div>

		<div class="col-xs-4">
			<?php if(isset($user->roles[8])){ ?>
			<!-- <div class="row margin10">
			   	<div class="col-xs-12">
			   		<a href="#">
			   		<div class="advisor-project text-center">
			   			ดูประวัติการปรึกษาโปรเจกต์
			   		</div>
			   		</a>
			   		
			   	</div>
		   </div> -->
			<?php } ?>
			<?php if(isset($user->roles[5])){ ?>
			<!-- <div class="row margin10">
			   	<div class="col-xs-12">
			   		<a href="/my-projects">
			   		<div class="advisor-project text-center">
			   			ดูโปรเจกต์ที่โค้ช
			   		</div>
			   		</a>
			   		
			   	</div>
		   </div> -->
			<?php } ?>
			<div class="viewcontent--box display--img col-xs-12">
                <!--<h4 class="headline__thaisan viewcontent--title">รูปประจำตัว</h4>
			  	<hr class="hr-style-profile">-->
			    
			    	<div class="col-xs-5 pad0">
			    	
			    		<?php 
			    		// print "<pre>";
			    		// print_r($user_profile);
			    		// print "</pre>";
			    		if($data_user->uid==$user->uid):
			    		if(!empty($data_user->picture->uri)){ 
			    			 $photo = image_style_url("profile",$data_user->picture->uri); 
			    			?>
                        <div class="sidebar--wrap--display">
                            <a data-toggle="modal" data-target="#myProfilePicture" class="float-right-style-profile margin__top10 edit--display"></a>
                                    <img src="<?php echo $photo; ?>">
                        </div>
						<?php 
			    		}else{  ?>
			    		<div class="sidebar--wrap--display">
                            <a data-toggle="modal" data-target="#myProfilePicture" class="float-right-style-profile margin__top10 edit--display"></a>
                        	<img  src="/sites/all/themes/changemakers/images/soc-userdisplay-default.jpg">
                        </div>
			    		<?php }
			    		else :
			    			if(!empty($data_user->picture->uri)){ 
			    			 $photo = image_style_url("profile",$data_user->picture->uri); 
				    			?>
	                        <div class="sidebar--wrap--display">
	                           
	                                    <img src="<?php echo $photo; ?>">
	                        </div>
							<?php 
				    		}else{  ?>
				    		<div class="sidebar--wrap--display">
	                            
	                        	<img  src="/sites/all/themes/changemakers/images/soc-userdisplay-default.jpg">
	                        </div>
				    		<?php }

				    	endif;
			    		?>
			    	</div>
			    	<div  class="col-xs-7 margin__top30">
                        <h2 class=" font__thaisan"><?php print $data_user->name; ?></h2>
                        <div class="txt__gray detail__small__nopad">( <?php
							 	foreach ($data_user->roles as $key => $value) {
							 		if($key!=2){
							 			if($key==10){
							 				echo " Unverified Member";
							 			}elseif($key==4){
							 				echo " Verified Member";
							 			}else{
							 				echo $value."";
							 			}
							 			
							 		}

							 	}
							 	 ?> )
                        </div>
						<!-- href="/user/<?php //echo $user->uid ?>/edit#edit-picture"  -->
						<?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) :  ?>
			    		<!--<a data-toggle="modal" data-target="#myProfilePicture" class="btn btn-default float-right-style-profile margin__top10">
			    			เปลี่ยนรูป
			    		</a>-->
			    	<?php endif; ?>
			    	</div>
			    
		    </div>

		    <?php if(isset($user->roles[3]) || isset($user->roles[5]) || isset($user->roles[6]) || isset($user->roles[8]) || isset($user->roles[10]) || isset($user->roles[4]) || isset($user->roles[9])){ ?>
		     <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : ?>
		     <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo ' <a href="" data-toggle="modal" data-target="#myProfileProblem">'; endif; ?>
				<div class="viewcontent--box col-xs-12 bottom__lightgray margin__top15 viewuser--side">
                    <h4 class="headline__thaisan viewcontent--title"><i class="icon-help txt__16 "></i> ปัญหาที่สนใจ 
                    
                    <?php
                    if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h4>
				  	<hr class="hr-style-profile">
                    <div class="margin__top10"></div>
                    <div class="profile--scroll">
				   <!-- <div class="panel-body">
				    	<div class="row">-->
				    		<?php 
					  		$countRow = count($user_profile['field_profile_problem_interest']['#object']->field_profile_problem_interest['und']);
					  		$problem_inter = $user_profile['field_profile_problem_interest']['#object']->field_profile_problem_interest['und'];
					  		for ($i=0; $i <  $countRow ; $i++) 
					  		{ ?>
					  			<div class="panel-body"><?php echo $problem_inter[$i]['taxonomy_term']->name; ?></div>
					  		
							  	<?php
							 }?>
				    	<!--</div>
				   </div>-->
			    </div>
                    </div>

			</a>
		<?php elseif($user_profile['field_profile_firstname']['#object']->uid!=$user->uid): ?>
			<?php $countRow = count($user_profile['field_profile_problem_interest']['#object']->field_profile_problem_interest['und']); ?>
			<?php if($countRow>0): ?>
					<div class="viewcontent--box col-xs-12 bottom__yellow margin__top15 viewuser--side">
		                    <h4 class="headline__thaisan viewcontent--title"><i class="icon-help txt__16 "></i> ปัญหาที่สนใจ 
		                    
		                    <?php
		                    if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h4>
						  	<hr class="hr-style-profile">
		                    <div class="margin__top5"></div>
		                    <div class="profile--scroll">
						   <!-- <div class="panel-body">
						    	<div class="row">-->
						    		<?php 
							  		$countRow = count($user_profile['field_profile_problem_interest']['#object']->field_profile_problem_interest['und']);
							  		$problem_inter = $user_profile['field_profile_problem_interest']['#object']->field_profile_problem_interest['und'];
							  		for ($i=0; $i <  $countRow ; $i++) 
							  		{ ?>
							  			<div class="panel-body"><?php echo $problem_inter[$i]['taxonomy_term']->name; ?></div>
									  	<?php
									 }?>
						    	<!--</div>
						   </div>-->
					    </div>
                    </div>
            <?php endif; ?>
		<?php endif; ?>
			<?php }else{ ?>
				<?php $countRow = count($user_profile['field_profile_problem_interest']['#object']->field_profile_problem_interest['und']); ?>
			<?php if($countRow>0): ?>
					<div class="viewcontent--box col-xs-12 bottom__yellow margin__top15 viewuser--side">
		                    <h4 class="headline__thaisan viewcontent--title"><i class="icon-help txt__16 "></i> ปัญหาที่สนใจ 
		                    
		                    <?php
		                    if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h4>
						  	<hr class="hr-style-profile">
		                    <div class="margin__top5"></div>
		                    <div class="profile--scroll">
						   <!-- <div class="panel-body">
						    	<div class="row">-->
						    		<?php 
							  		$countRow = count($user_profile['field_profile_problem_interest']['#object']->field_profile_problem_interest['und']);
							  		$problem_inter = $user_profile['field_profile_problem_interest']['#object']->field_profile_problem_interest['und'];
							  		for ($i=0; $i <  $countRow ; $i++) 
							  		{ ?>
							  			<div class="panel-body"><?php echo $problem_inter[$i]['taxonomy_term']->name; ?></div>
									  	<?php
									 }?>
						    	<!--</div>
						   </div>-->
					    </div>
                    </div>
            <?php endif; ?>


			<?php	} ?>

        
	<?php if(($user_profile['field_profile_firstname']['#object']->uid==$user->uid)) { ?>
		   <?php if(isset($user->roles[3]) || isset($user->roles[9])|| isset($user->roles[5])  || isset($user->roles[6]) || isset($user->roles[10]) ||  isset($user->roles[4]) || isset($user->roles[9]) || isset($user->roles[8])){ ?>
		   <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo ' <a href="" data-toggle="modal" data-target="#myProfileTarget">'; endif; ?>
				<div class="viewcontent--box col-xs-12 bottom__lightgray margin__top15 viewuser--side">
                    <h4 class="headline__thaisan viewcontent--title"><i class=" icon-target txt__16"></i> กลุ่มเป้าหมายที่สนใจ <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h4>
				  	<hr class="hr-style-profile">
                    <div class="margin__top5"></div>
                    <div class="profile--scroll">
				    <!--<div class="panel-body">
				    	<div class="row">-->
				    		<?php 
				    				
					  		$countRow = count($user_profile['field_profile_target_group']['#object']->field_profile_target_group['und']);
					  		$target = $user_profile['field_profile_target_group']['#object']->field_profile_target_group['und'];
					  		for ($i=0; $i <  $countRow ; $i++) 
					  		{ 
					  		// 		echo "<pre>";
					  		// print_r($target[$i]);
					  		// echo "</pre>";
					  			?>
					  			<?php if($target[$i]['taxonomy_term']->tid==109): ?>
					  			<div class="panel-body"><?php echo $data_user->field_profile_target_group_other['und'][0]['value']; ?></div>
								<?php else: ?>
								<div class="panel-body"><?php echo $target[$i]['taxonomy_term']->name; ?></div>
					  			<?php endif; ?>
					  			
							  	<?php
							 }?>
				    	</div>
				    </div>
			
			</a>
			<?php } ?>
	<?php }elseif($user_profile['field_profile_firstname']['#object']->uid!=$user->uid){ ?>
	<?php $countRow = count($user_profile['field_profile_target_group']['#object']->field_profile_target_group['und']); ?>
	<?php if($countRow>0): ?>
					<div class="viewcontent--box col-xs-12 bottom__lightgray margin__top15 viewuser--side">
                    <h4 class="headline__thaisan viewcontent--title"><i class=" icon-target txt__16"></i> กลุ่มเป้าหมายที่สนใจ <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h4>
				  	<hr class="hr-style-profile">
                    <div class="margin__top5"></div>
                    <div class="profile--scroll">
				    <!--<div class="panel-body">
				    	<div class="row">-->
				    		<?php 
					  		$countRow = count($user_profile['field_profile_target_group']['#object']->field_profile_target_group['und']);
					  		$target = $user_profile['field_profile_target_group']['#object']->field_profile_target_group['und'];
					  		for ($i=0; $i <  $countRow ; $i++) {
					  			?>
					  			<?php if($target[$i]['taxonomy_term']->tid==109): ?>
					  			<div class="panel-body"><?php echo $data_user->field_profile_target_group_other['und'][0]['value']; ?></div>
								<?php else: ?>
								<div class="panel-body"><?php echo $target[$i]['taxonomy_term']->name; ?></div>
					  			<?php endif; ?>
							  	<?php
							 }?>
				    	</div>
				    </div>
		<?php endif; ?>
			   


	<?php } ?>
		<!-- End if target  -->
    
			<?php if(!isset($user->roles[8]) && !isset($user->roles[6])  || ($user_profile['field_profile_firstname']['#object']->uid!=$user->uid)){ ?>
			<?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : ?>
			<?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo ' <a href="" data-toggle="modal" data-target="#myProfileSkill">'; endif; ?>
			    <div class="viewcontent--box col-xs-12 bottom__lightgray margin__top15 viewuser--side">
                    <h4 class="headline__thaisan viewcontent--title"><i class="icon-lightbulb txt__16"></i> ทักษะที่มีอยู่ <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h4>
				  	<hr class="hr-style-profile">
                    <div class="margin__top5"></div>
                    <div class="profile--scroll">
				    
				    		<?php 
					  		$countRow = count($user_profile['field_profile_skill_interest']['#object']->field_profile_skill_interest['und']);
					  		$problem = $user_profile['field_profile_skill_interest']['#object']->field_profile_skill_interest['und'];
					  		for ($i=0; $i <  $countRow ; $i++) 
					  		{ 
			  				// echo "<pre>";
					  		// print_r($problem[$i]);
					  		// echo "</pre>";
					  			?>
					  			<?php if($problem[$i]['taxonomy_term']->tid==39): ?>
					  			<div class=" panel-body">ภาษาต่างประเทศ <?php echo $data_user->field_proflie_language['und'][0]['value']; ?></div>
								<?php else: ?>
								<div class=" panel-body"><?php echo $problem[$i]['taxonomy_term']->name; ?></div>
					  			<?php endif; ?>
					  			
							  	<?php
							 }?>
					    	</div>
					    
				</div>
			</a>
		<?php elseif($user_profile['field_profile_firstname']['#object']->uid!=$user->uid): ?>
		<?php $countRow = count($user_profile['field_profile_skill_interest']['#object']->field_profile_skill_interest['und']); ?>
				<?php if($countRow>0): ?>
				 <div class="viewcontent--box col-xs-12 bottom__lightgray margin__top15 viewuser--side">
	                    <h4 class="headline__thaisan viewcontent--title"><i class="icon-lightbulb txt__16"></i>ทักษะที่มีอยู่ <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h4>
					  	<hr class="hr-style-profile">
                        <div class="margin__top5"></div>
	                    <div class="profile--scroll">
					    <div class="panel-body">
					    	
					    		<?php 
						  		
						  		$problem = $user_profile['field_profile_skill_interest']['#object']->field_profile_skill_interest['und'];
						  		for ($i=0; $i <  $countRow ; $i++) 
						  		{ 
				  				// echo "<pre>";
						  		// print_r($problem[$i]);
						  		// echo "</pre>";
						  			?>
						  			<?php if($problem[$i]['taxonomy_term']->tid==39): ?>
						  			<div class="margin--user--modal">ภาษาต่างประเทศ <?php echo $data_user->field_proflie_language['und'][0]['value']; ?></div>
									<?php else: ?>
									<div class="margin--user--modal"><?php echo $problem[$i]['taxonomy_term']->name; ?></div>
						  			<?php endif; ?>
						  			
								  	<?php
								 }?>
						    	
						    </div>
		                </div>
					</div>
				<?php endif; ?>
		<?php endif; ?>
			<?php } ?>
			<?php if(isset($user->roles[8]) && ($user_profile['field_profile_firstname']['#object']->uid==$user->uid)){ 
				$link = empty($session_id)?"/node/add/session-offer":"/node/".$session_id."/edit";
			?>
			 <a href="<?php echo $link ?>">
			    <div class="viewcontent--box col-xs-12 bottom__lightgray margin__top15 viewuser--side">
                    <h4 class="headline__thaisan viewcontent--title"><i class="icon-clock txt__16"></i> Session Offer and Available Time <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h4>
				  	<hr class="hr-style-profile">
                    <div class="margin__top5"></div>
                    <div class="profile--scroll">
				    <div class="panel-body">
				    	
				    		
				    			<?php $countRow = count($node_load2->field_session['und']); ?>
				    			<?php if($countRow>0): ?>
				    			<strong>Session</strong>
					    		<?php
					    		
						  		for ($i=0; $i <  $countRow ; $i++) 
						  		{ 
						  			if($node_load2->field_session['und'][$i]['value']==1){
						  				echo "<p class='text-profile' >Branding</p>";
						  			}elseif($node_load2->field_session['und'][$i]['value']==2){
						  				echo "<p class='text-profile'>Marketing </p>";
						  			}elseif($node_load2->field_session['und'][$i]['value']==3){
						  				echo "<p class='text-profile'>IT </p>";
						  			}

								 }
				    		 echo !empty($node_load2->field_session_other['und'][0]['value'])?"<p class='text-profile'>".$node_load2->field_session_other['und'][0]['value']."</p>":""; ?>
				    		<?php endif; ?>
				    		

				    		
				    			<?php $countRow = count($node_load2->field__available_time['und']);; ?>
				    			<?php if($countRow>0): ?>
				    			<div class="txt__gray2 ">Available Time :</div>

				    			<?php
					    		


					    		//echo $node_load2->field_available_time['und'][0]['value'];
					    		//echo date("Y-m-d H:i:s",$node_load2->field_available_time['und'][0]['value']);
						  		for ($i=0; $i <  $countRow ; $i++) 
						  		{ 
						  			 $track_1 = entity_load('field_collection_item', array($node_load2->field__available_time['und'][$i]['value']));
						  			//echo $track_1[16]->field_day['und'][0]['value'];

						  			 	// print '<pre>';
									    // print_r($track_1);
									    // print '</pre>';

									echo "<p class='text-profile'>";
									echo $track_1[$node_load2->field__available_time['und'][$i]['value']]->field_day['und'][0]['value']." from ";
									echo $track_1[$node_load2->field__available_time['und'][$i]['value']]->field_start_hr['und'][0]['value'].":";
									echo $track_1[$node_load2->field__available_time['und'][$i]['value']]->field_start_min['und'][0]['value'];
									echo " - ";
									echo $track_1[$node_load2->field__available_time['und'][$i]['value']]->field_end_hr['und'][0]['value'].":";
									echo $track_1[$node_load2->field__available_time['und'][$i]['value']]->field_end_min['und'][0]['value'];
									echo "</p>";
						  			

								 }
								 ?>
								 <?php endif; ?>
				    		
                        </div>
				    	</div>
				    </div>
			    
			</a>
			<?php }else if($user_profile['field_profile_firstname']['#object']->uid!=$user->uid && !empty($data_user->roles[8])){ ?>
			<?php $countRow = count($node_load2->nid); ?>
			<?php if(!empty($node_load2->nid)): ?>
				 <div class="viewcontent--box col-xs-12 bottom__lightgray margin__top15 viewuser--side">
                    <h4 class="headline__thaisan viewcontent--title"><i class="icon-clock txt__16"></i> Session Offer and Available Time <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h4>
				  	<hr class="hr-style-profile">
                    <div class="margin__top5"></div>
				    <div class="profile--scroll">
				    	<div class="panel-body">
				    		
				    			
				    			
					    		<?php $countRow = count($node_load2->field_session['und']); ?>
				    			<?php if($countRow>0): ?>
				    			<div class="txt__gray2">Session</div>
					    		<?php
					    		
						  		for ($i=0; $i <  $countRow ; $i++) 
						  		{ 
						  			if($node_load2->field_session['und'][$i]['value']==1){
						  				echo "<p class='text-profile' >Branding</p>";
						  			}elseif($node_load2->field_session['und'][$i]['value']==2){
						  				echo "<p class='text-profile'>Marketing </p>";
						  			}elseif($node_load2->field_session['und'][$i]['value']==3){
						  				echo "<p class='text-profile'>IT </p>";
						  			}

								 }
				    		 echo !empty($node_load2->field_session_other['und'][0]['value'])?"<p class='text-profile'>".$node_load2->field_session_other['und'][0]['value']."</p>":""; ?>
				    		<?php endif; ?>
				    		

				    		
				    			<?php $countRow = count($node_load2->field__available_time['und']);; ?>
				    			<?php if($countRow>0): ?>
				    			<strong>Available Time</strong>

				    			<?php
					    		


					    		//echo $node_load2->field_available_time['und'][0]['value'];
					    		//echo date("Y-m-d H:i:s",$node_load2->field_available_time['und'][0]['value']);
						  		for ($i=0; $i <  $countRow ; $i++) 
						  		{ 
						  			 $track_1 = entity_load('field_collection_item', array($node_load2->field__available_time['und'][$i]['value']));
						  			//echo $track_1[16]->field_day['und'][0]['value'];

						  			 	// print '<pre>';
									    // print_r($track_1);
									    // print '</pre>';

									echo "<p class='text-profile'>";
									echo $track_1[$node_load2->field__available_time['und'][$i]['value']]->field_day['und'][0]['value']." from ";
									echo $track_1[$node_load2->field__available_time['und'][$i]['value']]->field_start_hr['und'][0]['value'].":";
									echo $track_1[$node_load2->field__available_time['und'][$i]['value']]->field_start_min['und'][0]['value'];
									echo " - ";
									echo $track_1[$node_load2->field__available_time['und'][$i]['value']]->field_end_hr['und'][0]['value'].":";
									echo $track_1[$node_load2->field__available_time['und'][$i]['value']]->field_end_min['und'][0]['value'];
									echo "</p>";
						  			

								 }
								 ?>
								 <?php endif; ?>
				    		
				    		
				    	</div>
				    </div>
			    </div>
			<?php endif; ?>



			<?php } ?>

			<!-- <a href="/user/<?php //echo $user->uid ?>/edit#field-intro-self-add-more-wrapper"> -->

			<?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : ?>

			<?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo ' <a href="" data-toggle="modal" data-target="#myProfileIntro">'; endif; ?>
		    <div class="viewcontent--box col-xs-12 bottom__lightgray margin__top15 viewuser--side">
                <h4 class="headline__thaisan viewcontent--title"><i class="icon-chat txt__16"></i> ข้อความแนะนำตัว <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h4>
			  	<hr class="hr-style-profile">
                <div class="margin__top5"></div>
                <div class="profile--scroll">
			    <div class="panel-body" style="line-height:20px;">
			    	
			    
						
						 	<?php echo !empty($user_profile['field_intro_self']['#object']->field_intro_self['und'][0]['value'])?$user_profile['field_intro_self']['#object']->field_intro_self['und'][0]['value']:"";?>
				   


			    	
			    </div>
                </div>
		    </div>
		    </a>
			<?php elseif($user_profile['field_profile_firstname']['#object']->uid!=$user->uid && !empty($user->uid)): ?>

					<?php if(!empty($user_profile['field_intro_self']['#object']->field_intro_self['und'][0]['value'])): ?>
					 <div class="viewcontent--box col-xs-12 bottom__lightgray margin__top15 viewuser--side">
		                <h4 class="headline__thaisan viewcontent--title"><i class="icon-chat txt__16"></i> ข้อความแนะนำตัว <?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid) : echo '<i class="icon-edit-alt txt__gray txt__16 float__right"></i>'; endif; ?></h4>
					  	<hr class="hr-style-profile">
                        <div class="margin__top5"></div>
		                <div class="profile--scroll">
					    <div class="panel-body" style="line-height:20px;">
					    	
					    
							
								 	<?php echo !empty($user_profile['field_intro_self']['#object']->field_intro_self['und'][0]['value'])?$user_profile['field_intro_self']['#object']->field_intro_self['und'][0]['value']:"";?>
								
					    	</div>
					    	
					    
		                </div>
				    </div>
				<?php endif; ?>
			<?php endif; ?>
	
		</div>



			
		</div>
       </div>
	</div>
	


<?php if($user_profile['field_profile_firstname']['#object']->uid==$user->uid): ?>

<!-- Modal -->
<div class="modal fade" id="myProfile" role="dialog">
    <div class="modal-dialog modal-lg">
    
      	<!-- Modal content-->
      	<div class="modal-content">
      		<form enctype="multipart/form-data" action="/changemakers/update-profile" method="post" id="user-profile-form" accept-charset="UTF-8">
	        	<div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<?php if(!empty($user->roles[6])): ?>
		          	<h2 class="headline__thaisan ">ข้อมูลส่วนองค์กร</h2>
		          <?php else: ?>
		          <h2 class="headline__thaisan ">ข้อมูลส่วนตัว</h2>
		      		<?php endif;?>
		        </div>
		        <div class="modal-body modal-question modal-body-profile">
		        	<div class="col-xs-12 txt__left">
		        		<?php if(empty($user->roles[6])): ?>
		        		<div class="row">
				        	<h3 class="col-xs-3 font__thaisan">
			                    ชื่อจริง
			                </h3>
			                <div class="col-xs-9">
			                    <?php //$profile_title." ".
			                    echo $field_profile_firstname[0]['value']." ".$field_profile_lastname[0]['value'];?>
			                </div>
			            </div>
			            <!-- <br>
			            <div class="row">
			                <h3 class="col-xs-3 font__thaisan">
			                    ชื่อเล่น/ฉายา
                            </h3>
			                <div class="col-xs-9">
			                    <?php //echo $profile_title." ".$field_profile_firstname[0]['value']." ".$field_profile_lastname[0]['value'];?>
			                </div>
			            </div> -->
			            <br>
			            <div class="row">
			                <div class="col-xs-3">
                                <h3 class="font__thaisan"> วันเกิด</h3>
			                </div>
			                <div class="col-xs-9">
			                    <?php echo $birthdate_user;?>
			                </div>
			            </div>
			            <br>
			            <div class="row">
			                <h3 class="col-xs-3 font__thaisan">
			                    ชื่อเล่น/ฉายา
                            </h3>
			                <div class="col-xs-9">
			                	<div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
			                		<input  class="text-full form-control form-text" id="prifile_nickname" name="field_profile_nickname[und][0][value]" value="<?php print $field_profile_nickname[0]['value'];?>" size="60" maxlength="255" type="text">
			                	</div>
			                </div>
			            </div>
			            <br>
			        <?php endif; ?>
			        <?php if(!empty($user->roles[6])): ?>
			         <div class="row">
			                <h3 class="col-xs-3 font__thaisan">
			                    องค์กร
                            </h3>
			                <div class="col-xs-9">
			                	<?php print $field_organization[0]['taxonomy_term']->name;?>
			                </div>
			            </div>
			            <br>
			    	<?php endif; ?>
			            <div class="row">
			                <h3 class="col-xs-3 font__thaisan">
			                    ที่อยู่
                            </h3>
			                <div class="col-xs-9">
			                	<div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
			                		<textarea  class="text-full form-control form-textarea required" id="profile_address" name="field_profile_address[und][0][value]" cols="60" rows="3"><?php print $field_profile_address[0]['value']; ?></textarea>
				                </div>
			                </div>
			            </div>
			            <br>

			            <?php 
			            /*
			            <div class="row">
			                <h3 class="col-xs-3 font__thaisan">
			                    เขต
                            </h3>
			                <div class="col-xs-9">
			                	<div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
			                		<input required class="text-full form-control form-text" id="prifile_district" name="field_prifile_district[und][0][value]" value="<?php print $field_prifile_district[0]['value'];?>" size="60" maxlength="255" type="text">
			                	</div>
			                </div>
			            </div>  */ ?>
			            <br>
			            <div class="row">
			                <h3 class="col-xs-3 font__thaisan">
			                    จังหวัด
                            </h3>
			                <div class="col-xs-9">
			                	<select class="form-control form-select required" id="profile_province" name="field_profile_province[und]">
			                		<option value="กรุงเทพมหานคร" <?php if($province_user == "กรุงเทพมหานคร") echo "selected"; ?> >กรุงเทพมหานคร</option>
		                            <option value="กระบี่" <?php if($province_user == "กระบี่") echo "selected"; ?>>กระบี่ </option>
		                            <option value="กาญจนบุรี" <?php if($province_user == "กาญจนบุรี") echo "selected"; ?>>กาญจนบุรี </option>
		                            <option value="กาฬสินธุ์" <?php if($province_user == "กาฬสินธุ์") echo "selected"; ?>>กาฬสินธุ์ </option>
		                            <option value="กำแพงเพชร" <?php if($province_user == "กำแพงเพชร") echo "selected"; ?>>กำแพงเพชร </option>
		                            <option value="ขอนแก่น" <?php if($province_user == "ขอนแก่น") echo "selected"; ?>>ขอนแก่น</option>
		                            <option value="จันทบุรี" <?php if($province_user == "จันทบุรี") echo "selected"; ?>>จันทบุรี</option>
		                            <option value="ฉะเชิงเทรา" <?php if($province_user == "ฉะเชิงเทรา") echo "selected"; ?>>ฉะเชิงเทรา </option>
		                            <option value="ชัยนาท" <?php if($province_user == "ชัยนาท") echo "selected"; ?>>ชัยนาท </option>
		                            <option value="ชัยภูมิ" <?php if($province_user == "ชัยภูมิ") echo "selected"; ?>>ชัยภูมิ </option>
		                            <option value="ชุมพร" <?php if($province_user == "ชุมพร") echo "selected"; ?>>ชุมพร </option>
		                            <option value="ชลบุรี" <?php if($province_user == "ชลบุรี") echo "selected"; ?>>ชลบุรี </option>
		                            <option value="เชียงใหม่" <?php if($province_user == "เชียงใหม่") echo "selected"; ?>>เชียงใหม่ </option>
		                            <option value="เชียงราย" <?php if($province_user == "เชียงราย") echo "selected"; ?>>เชียงราย </option>
		                            <option value="ตรัง" <?php if($province_user == "ตรัง") echo "selected"; ?>>ตรัง </option>
		                            <option value="ตราด" <?php if($province_user == "ตราด") echo "selected"; ?>>ตราด </option>
		                            <option value="ตาก" <?php if($province_user == "ตาก") echo "selected"; ?>>ตาก </option>
		                            <option value="นครนายก" <?php if($province_user == "นครนายก") echo "selected"; ?>>นครนายก </option>
		                            <option value="นครปฐม" <?php if($province_user == "นครปฐม") echo "selected"; ?>>นครปฐม </option>
		                            <option value="นครพนม" <?php if($province_user == "นครพนม") echo "selected"; ?>>นครพนม </option>
		                            <option value="นครราชสีมา" <?php if($province_user == "นครราชสีมา") echo "selected"; ?>>นครราชสีมา </option>
		                            <option value="นครศรีธรรมราช" <?php if($province_user == "นครศรีธรรมราช") echo "selected"; ?>>นครศรีธรรมราช </option>
		                            <option value="นครสวรรค์" <?php if($province_user == "นครสวรรค์") echo "selected"; ?>>นครสวรรค์ </option>
		                            <option value="นราธิวาส" <?php if($province_user == "นราธิวาส") echo "selected"; ?>>นราธิวาส </option>
		                            <option value="น่าน" <?php if($province_user == "น่าน") echo "selected"; ?>>น่าน </option>
		                            <option value="นนทบุรี" <?php if($province_user == "นนทบุรี") echo "selected"; ?>>นนทบุรี </option>
		                            <option value="บึงกาฬ" <?php if($province_user == "บึงกาฬ") echo "selected"; ?>>บึงกาฬ</option>
		                            <option value="บุรีรัมย์" <?php if($province_user == "บุรีรัมย์") echo "selected"; ?>>บุรีรัมย์</option>
		                            <option value="ประจวบคีรีขันธ์" <?php if($province_user == "ประจวบคีรีขันธ์") echo "selected"; ?>>ประจวบคีรีขันธ์ </option>
		                            <option value="ปทุมธานี" <?php if($province_user == "ปทุมธานี") echo "selected"; ?>>ปทุมธานี </option>
		                            <option value="ปราจีนบุรี" <?php if($province_user == "ปราจีนบุรี") echo "selected"; ?>>ปราจีนบุรี </option>
		                            <option value="ปัตตานี" <?php if($province_user == "ปัตตานี") echo "selected"; ?>>ปัตตานี </option>
		                            <option value="พะเยา" <?php if($province_user == "พะเยา") echo "selected"; ?>>พะเยา </option>
		                            <option value="พระนครศรีอยุธยา" <?php if($province_user == "พระนครศรีอยุธยา") echo "selected"; ?>>พระนครศรีอยุธยา </option>
		                            <option value="พังงา" <?php if($province_user == "พังงา") echo "selected"; ?>>พังงา </option>
		                            <option value="พิจิตร" <?php if($province_user == "พิจิตร") echo "selected"; ?>>พิจิตร </option>
		                            <option value="พิษณุโลก" <?php if($province_user == "พิษณุโลก") echo "selected"; ?>>พิษณุโลก </option>
		                            <option value="เพชรบุรี" <?php if($province_user == "เพชรบุรี") echo "selected"; ?>>เพชรบุรี </option>
		                            <option value="เพชรบูรณ์" <?php if($province_user == "เพชรบูรณ์") echo "selected"; ?>>เพชรบูรณ์ </option>
		                            <option value="แพร่" <?php if($province_user == "แพร่") echo "selected"; ?>>แพร่ </option>
		                            <option value="พัทลุง" <?php if($province_user == "พัทลุง") echo "selected"; ?>>พัทลุง </option>
		                            <option value="ภูเก็ต" <?php if($province_user == "ภูเก็ต") echo "selected"; ?>>ภูเก็ต </option>
		                            <option value="มหาสารคาม" <?php if($province_user == "มหาสารคาม") echo "selected"; ?>>มหาสารคาม </option>
		                            <option value="มุกดาหาร" <?php if($province_user == "มุกดาหาร") echo "selected"; ?>>มุกดาหาร </option>
		                            <option value="แม่ฮ่องสอน" <?php if($province_user == "แม่ฮ่องสอน") echo "selected"; ?>>แม่ฮ่องสอน </option>
		                            <option value="ยโสธร" <?php if($province_user == "ยโสธร") echo "selected"; ?>>ยโสธร </option>
		                            <option value="ยะลา" <?php if($province_user == "ยะลา") echo "selected"; ?>>ยะลา </option>
		                            <option value="ร้อยเอ็ด" <?php if($province_user == "ร้อยเอ็ด") echo "selected"; ?>>ร้อยเอ็ด </option>
		                            <option value="ระนอง" <?php if($province_user == "ระนอง") echo "selected"; ?>>ระนอง </option>
		                            <option value="ระยอง" <?php if($province_user == "ระยอง") echo "selected"; ?>>ระยอง </option>
		                            <option value="ราชบุรี" <?php if($province_user == "ราชบุรี") echo "selected"; ?>>ราชบุรี</option>
		                            <option value="ลพบุรี" <?php if($province_user == "ลพบุรี") echo "selected"; ?>>ลพบุรี </option>
		                            <option value="ลำปาง" <?php if($province_user == "ลำปาง") echo "selected"; ?>>ลำปาง </option>
		                            <option value="ลำพูน" <?php if($province_user == "ลำพูน") echo "selected"; ?>>ลำพูน </option>
		                            <option value="เลย" <?php if($province_user == "เลย") echo "selected"; ?>>เลย </option>
		                            <option value="ศรีสะเกษ" <?php if($province_user == "ศรีสะเกษ") echo "selected"; ?>>ศรีสะเกษ</option>
		                            <option value="สกลนคร" <?php if($province_user == "สกลนคร") echo "selected"; ?>>สกลนคร</option>
		                            <option value="สงขลา" <?php if($province_user == "สงขลา") echo "selected"; ?>>สงขลา </option>
		                            <option value="สมุทรสาคร" <?php if($province_user == "สมุทรสาคร") echo "selected"; ?>>สมุทรสาคร </option>
		                            <option value="สมุทรปราการ" <?php if($province_user == "สมุทรปราการ") echo "selected"; ?>>สมุทรปราการ </option>
		                            <option value="สมุทรสงคราม" <?php if($province_user == "สมุทรสงคราม") echo "selected"; ?>>สมุทรสงคราม </option>
		                            <option value="สระแก้ว" <?php if($province_user == "สระแก้ว") echo "selected"; ?>>สระแก้ว </option>
		                            <option value="สระบุรี" <?php if($province_user == "สระบุรี") echo "selected"; ?>>สระบุรี </option>
		                            <option value="สิงห์บุรี" <?php if($province_user == "สิงห์บุรี") echo "selected"; ?>>สิงห์บุรี </option>
		                            <option value="สุโขทัย" <?php if($province_user == "สุโขทัย") echo "selected"; ?>>สุโขทัย </option>
		                            <option value="สุพรรณบุรี" <?php if($province_user == "สุพรรณบุรี") echo "selected"; ?>>สุพรรณบุรี </option>
		                            <option value="สุราษฎร์ธานี" <?php if($province_user == "สุราษฎร์ธานี") echo "selected"; ?>>สุราษฎร์ธานี </option>
		                            <option value="สุรินทร์" <?php if($province_user == "สุรินทร์") echo "selected"; ?>>สุรินทร์ </option>
		                            <option value="สตูล" <?php if($province_user == "สตูล") echo "selected"; ?>>สตูล </option>
		                            <option value="หนองคาย" <?php if($province_user == "หนองคาย") echo "selected"; ?>>หนองคาย </option>
		                            <option value="หนองบัวลำภู" <?php if($province_user == "หนองบัวลำภู") echo "selected"; ?>>หนองบัวลำภู </option>
		                            <option value="อำนาจเจริญ" <?php if($province_user == "อำนาจเจริญ") echo "selected"; ?>>อำนาจเจริญ </option>
		                            <option value="อุดรธานี" <?php if($province_user == "อุดรธานี") echo "selected"; ?>>อุดรธานี </option>
		                            <option value="อุตรดิตถ์" <?php if($province_user == "อุตรดิตถ์") echo "selected"; ?>>อุตรดิตถ์ </option>
		                            <option value="อุทัยธานี" <?php if($province_user == "อุทัยธานี") echo "selected"; ?>>อุทัยธานี </option>
		                            <option value="อุบลราชธานี" <?php if($province_user == "อุบลราชธานี") echo "selected"; ?>>อุบลราชธานี</option>
		                            <option value="อ่างทอง" <?php if($province_user == "อ่างทอง") echo "selected"; ?>>อ่างทอง </option>
		                            <option value="อื่นๆ" <?php if($province_user == "อื่นๆ") echo "selected"; ?>>อื่นๆ</option>
		                        </select>
			                </div>
			            </div>
			            <br>
			            <div class="row">
			                <h3 class="col-xs-3 font__thaisan">
			                    รหัสไปรษณีย์
                            </h3>
			                <div class="col-xs-9">
			                	<input required  class="text-full form-control form-text required" id="profile_zipcode" name="field_profile_zipcode[und][0][value]" value="<?php print $field_profile_zipcode[0]['value'];?>" size="60" maxlength="5" type="text">
			                </div>
			            </div>
			            <br>
			           <!--  <div class="row">
			               <h3 class="col-xs-3 font__thaisan">
			                    เลขบัตรประชาชน/พาสปอร์ต
                            </h3>
			                <?php //if(!isset($user->roles[10])): ?>
			                <div class="col-xs-9">
			                	<input  class="text-full form-control form-text" id="edit_field_profile_user_id_und_0_value" name="field_profile_user_id[und][0][value]" value="<?php //print $field_profile_user_id[0]['value'];?>" size="60" maxlength="13" type="text">
			                </div>
			                <?php //else:?>
			                <div class="col-xs-9">
			                	<input  disabled class="text-full form-control form-text" id="edit_field_profile_user_id_und_0_value" name="field_profile_user_id[und][0][value]" value="<?php //print $field_profile_user_id[0]['value'];?>" size="60" maxlength="13" type="text">
			                </div>
			                <?php //endif;?>
			            </div>
			            <br> -->
			           <?php if(empty($user->roles[6])): ?>
			            <div class="row">
			                <h3 class="col-xs-3 font__thaisan">
			                    สถาบัน/องค์กร
                            </h3>
			                <div class="col-xs-9">
			                	<input  class="text-full form-control form-text" id="edit_field_organization_name_th_und_0_value" name="field_profile_institution[und][0][value]" value="<?php print $field_profile_institution[0]['value'];?>" size="60" maxlength="255" type="text">
			                </div>
			            </div>
			    		<?php endif; ?>
			           
						<?php /*
			            <div class="row">
			                <h3 class="col-xs-3 font__thaisan">
			                    สถาบัน/องค์กร taxonomy
                            </h3>
			                <div class="col-xs-9">
			                	<input type="text" id="organization_taxonomy" name="field_organization[und]" value="" size="60" maxlength="1024" class="form-text form-autocomplete">
			                </div>
			            </div>
			            */ ?>
			            <br>
			             <div class="row">
			                <div class="col-xs-3">
			                    
			                </div>
			                <?php /*<div class="col-xs-9">
		                        <div class="form-item form-item-field-profile-join-und-1 form-type-checkbox checkbox"> 
		                            <label class="control-label" for="edit_field_profile_join_und_1">
		                                <input id="edit_field_profile_join_und_1" name="field_profile_join[und][1]" <?php if($field_profile_join[0]['value'] == 1) echo "checked"; ?> value="1" class="form-checkbox" type="checkbox">
		                                ท่านเข้าร่วมโปรแกรม Coach หรือการสร้างระบบสนับสนุนในมหาวิทยาลัย 
		                            </label>
		                        </div>
		                        <div class="form-item form-item-field-profile-join-und-2 form-type-checkbox checkbox"> 
		                            <label class="control-label" for="edit_field_profile_join_und_2">
		                                <input id="edit_field_profile_join_und_2" name="field_profile_join[und][2]" <?php if($field_profile_join[1]['value'] == 2) echo "checked"; ?> value="2" class="form-checkbox" type="checkbox">
		                                ท่านเข้าร่วมโครงการสนับสนุนความยังยืนภาคี สสส 
		                                <br/>
		                            </label>
		                        </div>
			                </div> */?>
			            </div>
			            
	                </div>
		        </div>
		        <div class="modal-footer txt__center">
		        	<!-- <button type="submit" class="btn btn-success form-submit" value="Save" id="edit-submit">บันทึกการเปลี่ยนแปลง</button> -->
		        	<button type="submit" id="edit-submit-profile" name="op" value="Save" class="btn btn-success form-submit">
					<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> บันทึกการเปลี่ยนแปลง</button>
		          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		        <input id="edit-mail" name="mail" value="<?php print $user->mail?>"  type="hidden">
		        <input id="edit-name" name="name" value="<?php print $user->name?>"  type="hidden">
		        <input id="edit-field-profile-firstname-und-0-value" name="field_profile_firstname[und][0][value]" value="<?php print $field_profile_firstname[0]['value']?>" size="60" maxlength="255" type="hidden">
		        <input id="edit-field-profile-firstname-und-0-value" name="field_profile_lastname[und][0][value]" value="<?php print $field_profile_lastname[0]['value']?>" size="60" maxlength="255" type="hidden">
		        <input id="edit-field-profile-phone-und-0-value" name="field_profile_phone[und][0][value]" value="<?php print $field_profile_phone[0]['value']?>"  type="hidden">
		        <input class="date-clear form-control form-text" id="edit-field-profile-birthdate-und-0-value-datepicker-popup-0"  name="field_profile_birthdate[und][0][value][date]" value="11/11/1992" size="20" maxlength="30" type="hidden">
		        <input type="hidden" name="form_build_id" value="<?php echo $form['form_build_id']['#value'];?>">

				<input name="form_token" value="<?php print  $form['form_token']['#value']; ?>" type="hidden">
				<input name="form_id" value="user_profile_form" type="hidden">
			</form>
	    </div>
      
    </div>
</div>

<!-- Modal Contact-->
<div class="modal fade" id="myProfileContact" role="dialog">
    <div class="modal-dialog modal-lg">
    
      	<!-- Modal content-->
      	<div class="modal-content">
      		<form enctype="multipart/form-data" action="/changemakers/update-profile" method="post" id="profile_form_contact" accept-charset="UTF-8">
	        	<div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h2 class="modal-title headline__thaisan">ช่องทางการติดต่อ</h2>
		        </div>
		        <div class="modal-body modal-question modal-body-contact clear">
		        	<div class="col-xs-12 txt__left">
			            <div class="row">
			                <h3 class="col-xs-3 font__thaisan">
			                    โทรศัพท์มือถือ
                            </h3>
			                <div class="col-xs-9">
			                	<span class="alert--field--tel-edit">กรุณาใส่เบอร์โทรศัพท์ จำนวน 10 หลัก</span>
			                    <input maxlength="10"  required class="text-full form-control form-text required" id="user_profile_phone" name="field_profile_phone[und][0][value]" value="<?php print $field_profile_phone[0]['value'];?>" size="60" maxlength="255" type="text">
			                </div>
			            </div>
			            <br>
			            <div class="row">
			                <h3 class="col-xs-3 font__thaisan">
			                    อีเมล
                            </h3>
			                <div class="col-xs-9">
			                	<input required class="form-control form-text required" title="" data-toggle="tooltip" id="edit_mail" name="mail" value="<?php print $user->mail?>" size="60" maxlength="254" type="text">
			                </div>
			            </div>
			            <br>
			           <!--  <div class="row">
			                <div class="col-xs-3">
			                    เขต
			                </div>
			                <div class="col-xs-9">
			                	<div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
			                		<input class="text-full form-control form-text" id="edit-field-prifile-district-und-0-value" name="field_prifile_district[und][0][value]" value="<?php print $field_prifile_district[0]['value'];?>" size="60" maxlength="255" type="text">
			                	</div>
			                </div>
			            </div>
			            <br> -->
			            <?php

			            $result_contact = array();
			            foreach ($field_profile_contact as $key => $value) {
			            	$result_contact[] = $value['value'];
			            }

			             ?>
			            <div class="row">
			                <div class="col-xs-3">
			                    
			                </div>
			                <div class="col-xs-9">
			                	<div class="form-item form-item-field-profile-contact-und-1 form-type-checkbox checkbox"> 
			                		<label class="control-label" for="field_profile_contact_1">
			                			<input id="field_profile_contact_1" name="field_profile_contact[und][1]" <?php if(in_array(1, $result_contact)) echo "checked"; ?> value="1" class="form-checkbox" type="checkbox">
			                			ยินดีให้ติดต่อทางโทรศัพท์
			                		</label>
								</div>
								<div class="form-item form-item-field-profile-contact-und-2 form-type-checkbox checkbox"> 
									<label class="control-label" for="field_profile_contact_2">
										<input id="field_profile_contact_2" name="field_profile_contact[und][2]" <?php if(in_array(2, $result_contact)) echo "checked"; ?> value="2" class="form-checkbox" type="checkbox">
										ยินดีให้ผู้ที่อยู่ในระบบติดต่อทางอีเมล 
									</label>
								</div>
								<div class="form-item form-item-field-profile-contact-und-3 form-type-checkbox checkbox"> 
									<label class="control-label" for="field_profile_contact_3">
										<input id="field_profile_contact_3" name="field_profile_contact[und][3]" <?php if(in_array(3, $result_contact)) echo "checked"; ?> value="3" class="form-checkbox" type="checkbox">
										ยินดีรับอีเมลจดหมายข่าวสารรายเดือนทั่วไปจาก School of Changemakers 
									</label>
								</div>
			                </div>
			            </div>
			            
	                </div>
		        </div>
                
                <div class="clear margin__top15 col-xs-12"></div>
		        <div class="modal-footer txt__center  ">
		        	<!-- <button type="submit" class="btn btn-success form-submit" value="Save" id="edit-submit">บันทึกการเปลี่ยนแปลง</button> -->
		        	<button type="submit" id="edit-submit-contact" name="op_contact" value="Save" class="btn btn-success form-submit">
					<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> บันทึกการเปลี่ยนแปลง</button>
		          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
		       <!--  <input id="edit-mail" name="mail" value="<?php //print $user->mail?>"  type="hidden">
		        <input id="edit-name" name="name" value="<?php //print $user->name?>"  type="hidden">
		        <input id="edit-field-profile-firstname-und-0-value" name="field_profile_firstname[und][0][value]" value="<?php //print $field_profile_firstname[0]['value']?>" size="60" maxlength="255" type="hidden">
		        <input id="edit-field-profile-firstname-und-0-value" name="field_profile_lastname[und][0][value]" value="<?php //print $field_profile_lastname[0]['value']?>" size="60" maxlength="255" type="hidden">
		        <input id="edit-field-profile-phone-und-0-value" name="field_profile_phone[und][0][value]" value="<?php //print $field_profile_phone[0]['value']?>"  type="hidden">
		        <input class="date-clear form-control form-text" id="edit-field-profile-birthdate-und-0-value-datepicker-popup-0"  name="field_profile_birthdate[und][0][value][date]" value="11/11/1992" size="20" maxlength="30" type="hidden">
		        <input type="hidden" name="form_build_id" value="<?php //echo $form['form_build_id']['#value'];?>">

				<input name="form_token" value="<?php// print  $form['form_token']['#value']; ?>" type="hidden">
				<input name="form_id" value="user_profile_form" type="hidden"> -->
			</form>
	    </div>
      
    </div>
</div>

<!-- Modal Login-->
<div class="modal fade" id="myProfileLogin" role="dialog">
    <div class="modal-dialog modal-xs">
    
      	<!-- Modal content-->
      	<div class="modal-content">
      		<form enctype="multipart/form-data" action="/changemakers/update-profile" method="post" id="user_profile_form_login" accept-charset="UTF-8">
	        	<div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h2 class="modal-title headline__thaisan ">เปลี่ยนรหัสผ่าน</h2>
		        </div>
		        <div class="modal-body modal-question modal-body-contact">
		        	<div class="col-xs-12 txt__center">
			           
			            <div class="row">
			               
			                <div class="col-xs-12">
			                	<input required class="form-control form-text required" title="ใส่รหัสผ่านเดิม" data-toggle="tooltip" id="passold" name="oldPassword"  size="60" maxlength="254" type="password" placeholder="ใส่รหัสผ่านเดิม">
			                </div>
			            </div>
			            <br>
			            <div class="row margin__top20">
			                
			                <div class="col-xs-12">
			                	<input required class="form-control form-text required" title="ใส่รหัสผ่านใหม่" data-toggle="tooltip" id="pass1" name="newPassword"  size="60"  maxlength="254" type="password" placeholder="ใส่รหัสผ่านใหม่">
			                </div>
			            </div>
			            <br>
			            <div class="row">
			                
			                <div class="col-xs-12">
			                	<input required class="form-control form-text required" title="ใส่รหัสผ่านใหม่อีกครั้ง" data-toggle="tooltip" id="pass2" name="comfirmNewPassword"  size="60" maxlength="254" type="password" placeholder="ใส่รหัสผ่านใหม่อีกครั้ง">
			                </div>
			            </div>
			            <br>
	                </div>
		        </div>
		        <input type="hidden" name="op_login" id="op_login"  value="Submit">
		        
		       <!--  <input id="edit-mail" name="mail" value="<?php //print $user->mail?>"  type="hidden">
		        <input id="edit-name" name="name" value="<?php //print $user->name?>"  type="hidden">
		        <input id="edit-field-profile-firstname-und-0-value" name="field_profile_firstname[und][0][value]" value="<?php //print $field_profile_firstname[0]['value']?>" size="60" maxlength="255" type="hidden">
		        <input id="edit-field-profile-firstname-und-0-value" name="field_profile_lastname[und][0][value]" value="<?php //print $field_profile_lastname[0]['value']?>" size="60" maxlength="255" type="hidden">
		        <input id="edit-field-profile-phone-und-0-value" name="field_profile_phone[und][0][value]" value="<?php //print $field_profile_phone[0]['value']?>"  type="hidden">
		        <input class="date-clear form-control form-text" id="edit-field-profile-birthdate-und-0-value-datepicker-popup-0"  name="field_profile_birthdate[und][0][value][date]" value="11/11/1992" size="20" maxlength="30" type="hidden">
		        <input type="hidden" name="form_build_id" value="<?php //echo $form['form_build_id']['#value'];?>">

				<input name="form_token" value="<?php// print  $form['form_token']['#value']; ?>" type="hidden">
				<input name="form_id" value="user_profile_form" type="hidden"> -->
			</form>
			<div class="modal-footer txt__center">
	        	<!-- <button type="submit" class="btn btn-success form-submit" value="Save" id="edit-submit">บันทึกการเปลี่ยนแปลง</button> -->
	        	<div id="show_error"></div>
	        	<button type="button" id="edit_submit_login" name="op-login" value="Submit" class="btn btn-success form-submit">
				<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> บันทึกการเปลี่ยนแปลง</button>
	          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        </div>
	    </div>
      
    </div>
</div>
<!-- Modal Problem Interest-->
<div class="modal fade" id="myProfileProblem" role="dialog">
    <div class="modal-dialog modal-lg">
    
      	<!-- Modal content-->
      	<div class="modal-content">
<?php
$term1 = taxonomy_get_tree(4);
?>

      		<form enctype="multipart/form-data" action="/changemakers/update-profile"  method="post" id="user-profile-form" accept-charset="UTF-8">
	        	<div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h2 class="modal-title font__thaisan headline__thaisan">ปัญหาที่สนใจ</h2>
		        </div>
		        <div class="modal-body modal-question modal-body-problem">
		        	<div class="col-xs-12 txt__left">
			            <div class="row">
									<?php
									$run_parent_no = 0;
									foreach($term1 as $key=>$value){

										if ($value->name == "All") {
											continue;
										}

										$is_parent = false;
										if( $value->depth === 0) {
											$is_parent = true;
											$run_parent_no++;
										}

										if($is_parent) {

											if($run_parent_no != 1) {
												print '</div></div></div>';
											}
                                        	?>
			            	<div class="col-xs-4 checkbox-height">

                                <div class="form-item form-item-field-profile-join-und form-type-checkboxes form-group"> 
                                        	<div class="form-item form-item-field-profile-problem-interest-und-<?php print $value->tid;?> form-type-checkbox checkbox">
		                                        <label class="control-label" for="edit_field_profile_problem_interest_und_<?php print $value->tid;?>">
		                                            <br/>
		                                            <input type="checkbox" id="edit_field_profile_problem_interest_und_<?php print $value->tid;?>" name="field_profile_problem_interest[und][<?php print $value->tid;?>]" <?php if(in_array($value->tid,$data_problem)) echo "checked"; ?> value="<?php print $value->tid;?>" class="form-checkbox">
		                                            <?php print $value->name; ?>
		                                        </label>
		                                    </div>
		                                    <div class="col-xs-12">
                                        	<?php
											
										}
										else {

									 	?>
                                        <div class="form-item form-item-field-profile-problem-interest-und-<?php print $value->tid;?> form-type-checkbox checkbox"> 
                                            <label class="control-label" for="edit_field_profile_problem_interest_und_<?php print $value->tid;?>">
                                                <input type="checkbox" id="edit_field_profile_problem_interest_und_<?php print $value->tid;?>" name="field_profile_problem_interest[und][<?php print $value->tid;?>]" value="<?php print $value->tid;?>" <?php if(in_array($value->tid,$data_problem)) echo "checked"; ?> class="form-checkbox">
                                                <?php print $value->name; ?> 
                                            </label>
                                        </div>
                                        <?php
										}

									}


									?>
								</div>
							</div>
									<!--
                                    <div class="form-item form-item-field-profile-problem-interest-und-8 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="edit_field_profile_problem_interest_und_8">
                                            <br/>
                                            <input type="checkbox" id="edit_field_profile_problem_interest_und_8" name="field_profile_problem_interest[und][8]" <?php if(in_array(8,$data_problem)) echo "checked"; ?> value="8" class="form-checkbox">
                                            การศึกษา 
                                        </label>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-item form-item-field-profile-problem-interest-und-53 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="edit_field_profile_problem_interest_und_53">
                                                <input type="checkbox" id="edit_field_profile_problem_interest_und_53" name="field_profile_problem_interest[und][53]" value="53" <?php if(in_array(53,$data_problem)) echo "checked"; ?> class="form-checkbox">การเข้าถึงการ ศึกษา 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-55 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="edit_field_profile_problem_interest_und_55">
                                                <input type="checkbox" id="edit_field_profile_problem_interest_und_55" name="field_profile_problem_interest[und][55]" value="55" <?php if(in_array(55,$data_problem)) echo "checked"; ?> class="form-checkbox">การเลือกเรียนต่อ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-58 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_58">
                                                <input type="checkbox" id="profile_problem_interest_und_58" name="field_profile_problem_interest[und][58]" value="58" <?php if(in_array(58,$data_problem)) echo "checked"; ?> class="form-checkbox">การเล่น 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-54 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_54">
                                                <input type="checkbox" id="profile_problem_interest_und_54" name="field_profile_problem_interest[und][54]" value="54" <?php if(in_array(54,$data_problem)) echo "checked"; ?> class="form-checkbox">คุณภาพการศึกษา 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-56 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_56">
                                                <input type="checkbox" id="profile_problem_interest_und_56" name="field_profile_problem_interest[und][56]" value="56" <?php if(in_array(56,$data_problem)) echo "checked"; ?> class="form-checkbox">คุณภาพครู 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-59 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_59">
                                                <input type="checkbox" id="profile_problem_interest_und_59" name="field_profile_problem_interest[und][59]" value="59" <?php if(in_array(59,$data_problem)) echo "checked"; ?> class="form-checkbox">ปัญหาพฤติกรรมเด็กและเยาวชน 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-57 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_57">
                                                <input type="checkbox" id="profile_problem_interest_und_57" name="field_profile_problem_interest[und][57]" value="57" <?php if(in_array(57,$data_problem)) echo "checked"; ?> class="form-checkbox">ศักยภาพเด็กและเยาวชน 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-60 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_60">
                                                <input type="checkbox" id="profile_problem_interest_und_60" name="field_profile_problem_interest[und][60]" value="60" <?php if(in_array(60,$data_problem)) echo "checked"; ?> class="form-checkbox">เยาวชนกลุ่มเสี่ยง 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                    
                            </div>
			                <div class="col-xs-4 checkbox-height">
                                <div class="form-item form-item-field-profile-join-und form-type-checkboxes form-group" id="environment"> 
                                    <div class="form-item form-item-field-profile-problem-interest-und-11 form-type-checkbox checkbox"> 
                                        <br/>
                                        <label class="control-label" for="profile_problem_interest_und_11">
                                            <input type="checkbox" id="profile_problem_interest_und_11" name="field_profile_problem_interest[und][11]" value="11" <?php if(in_array(11,$data_problem)) echo "checked"; ?> class="form-checkbox">สิ่งแวดล้อม 
                                        </label>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-item form-item-field-profile-problem-interest-und-99 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_99">
                                                <input type="checkbox" id="profile_problem_interest_und_99" name="field_profile_problem_interest[und][99]" value="99" <?php if(in_array(99,$data_problem)) echo "checked"; ?> class="form-checkbox">น้ำ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-100 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_100">
                                                <input type="checkbox" id="profile_problem_interest_und_100" name="field_profile_problem_interest[und][100]" value="100" <?php if(in_array(100,$data_problem)) echo "checked"; ?> class="form-checkbox">อากาศ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-102 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_102">
                                                <input type="checkbox" id="profile_problem_interest_und_102" name="field_profile_problem_interest[und][102]" value="102" <?php if(in_array(102,$data_problem)) echo "checked"; ?> class="form-checkbox">โลกร้อน 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-103 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_103">
                                                <input type="checkbox" id="profile_problem_interest_und_103" name="field_profile_problem_interest[und][103]" value="103" <?php if(in_array(103,$data_problem)) echo "checked"; ?> class="form-checkbox">อนุรักษ์สัตว์ป่า 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-104 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_104">
                                                <input type="checkbox" id="profile_problem_interest_und_104" name="field_profile_problem_interest[und][104]" value="104" <?php if(in_array(104,$data_problem)) echo "checked"; ?> class="form-checkbox">ทารุณสัตว์ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-105 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_105">
                                                <input type="checkbox" id="profile_problem_interest_und_105" name="field_profile_problem_interest[und][105]" value="105" <?php if(in_array(106,$data_problem)) echo "checked"; ?> class="form-checkbox">พลังงานทดแทน 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-106 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_106">
                                                <input type="checkbox" id="profile_problem_interest_und_106" name="field_profile_problem_interest[und][106]" value="106" <?php if(in_array(107,$data_problem)) echo "checked"; ?> class="form-checkbox">ผลิตภัณฑ์ดูแลสิ่งแวดล้อม
                                                </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-107 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_107">
                                                <input type="checkbox" id="profile_problem_interest_und_107" name="field_profile_problem_interest[und][107]" value="107" <?php if(in_array(107,$data_problem)) echo "checked"; ?> class="form-checkbox">การอนุรักษ์ทรัพยากร 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 checkbox-height">
                                <div class="form-item form-item-field-profile-join-und form-type-checkboxes form-group" id="healty"> 
                                    <div class="form-item form-item-field-profile-problem-interest-und-86 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_problem_interest_und_86">
                                            <br/>
                                            <input type="checkbox" id="profile_problem_interest_und_86" name="field_profile_problem_interest[und][86]" value="86" <?php if(in_array(86,$data_problem)) echo "checked"; ?> class="form-checkbox">สุขภาพ 
                                        </label>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-item form-item-field-profile-problem-interest-und-85 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_85">
                                                <input type="checkbox" id="profile_problem_interest_und_85" name="field_profile_problem_interest[und][85]" value="85" <?php if(in_array(85,$data_problem)) echo "checked"; ?> class="form-checkbox">การเข้าถึงบริการสุขภาพ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-87 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_87">
                                                <input type="checkbox" id="profile_problem_interest_und_87" name="field_profile_problem_interest[und][87]" value="87" <?php if(in_array(87,$data_problem)) echo "checked"; ?> class="form-checkbox">ความรู้ในการดูแลสุขภาพ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-88 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_88">
                                                <input type="checkbox" id="profile_problem_interest_und_88" name="field_profile_problem_interest[und][88]" value="88" <?php if(in_array(88,$data_problem)) echo "checked"; ?> class="form-checkbox">สุขภาพทางเพศ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-89 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_89">
                                                <input type="checkbox" id="profile_problem_interest_und_89" name="field_profile_problem_interest[und][89]" value="89" <?php if(in_array(89,$data_problem)) echo "checked"; ?> class="form-checkbox">เอดส์ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-90 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_90">
                                                <input type="checkbox" id="profile_problem_interest_und_90" name="field_profile_problem_interest[und][90]" value="90" <?php if(in_array(90,$data_problem)) echo "checked"; ?> class="form-checkbox">ยาเสพติด 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-91 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_91">
                                                <input type="checkbox" id="profile_problem_interest_und_91" name="field_profile_problem_interest[und][91]" value="91" <?php if(in_array(91,$data_problem)) echo "checked"; ?> class="form-checkbox">สุขภาพจิต 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-92 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_92">
                                                <input type="checkbox" id="profile_problem_interest_und_92" name="field_profile_problem_interest[und][92]" value="92" <?php if(in_array(92,$data_problem)) echo "checked"; ?> class="form-checkbox">การดูแลผู้สูงอายุ 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 checkbox-height-center">
                                <div class="form-item form-item-field-profile-join-und form-type-checkboxes form-group" id="business"> 
                                    <div class="form-item form-item-field-profile-problem-interest-und-13 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_problem_interest_und_13">
                                            <br/>
                                            <input type="checkbox" id="profile_problem_interest_und_13" name="field_profile_problem_interest[und][13]" value="13" <?php if(in_array(13,$data_problem)) echo "checked"; ?> class="form-checkbox">ธุรกิจและกิจการเพื่อสังคม 
                                        </label>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-item form-item-field-profile-problem-interest-und-93 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_93">
                                                <input type="checkbox" id="profile_problem_interest_und_93" name="field_profile_problem_interest[und][93]" value="93" <?php if(in_array(93,$data_problem)) echo "checked"; ?> class="form-checkbox">การลงทุนทางสังคม 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-94 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_94">
                                                <input type="checkbox" id="profile_problem_interest_und_94" name="field_profile_problem_interest[und][94]" value="94" <?php if(in_array(94,$data_problem)) echo "checked"; ?> class="form-checkbox">การคุ้มครองผู้บริโภค 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-95 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_95">
                                                <input type="checkbox" id="profile_problem_interest_und_95" name="field_profile_problem_interest[und][95]" value="95" <?php if(in_array(95,$data_problem)) echo "checked"; ?> class="form-checkbox">ความรับผิดชอบต่อสังคม 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-96 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_96">
                                                <input type="checkbox" id="profile_problem_interest_und_96" name="field_profile_problem_interest[und][96]" value="96" <?php if(in_array(96,$data_problem)) echo "checked"; ?> class="form-checkbox">การจ้างงาน 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-97 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_97">
                                                <input type="checkbox" id="profile_problem_interest_und_97" name="field_profile_problem_interest[und][97]" value="97" <?php if(in_array(97,$data_problem)) echo "checked"; ?> class="form-checkbox">การค้าที่เป็นธรรม 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-98 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_98">
                                                <input type="checkbox" id="profile_problem_interest_und_98" name="field_profile_problem_interest[und][98]" value="98" <?php if(in_array(98,$data_problem)) echo "checked"; ?> class="form-checkbox">การท่องเที่ยว </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 checkbox-height-center">
                                <div class="form-item form-item-field-profile-join-und form-type-checkboxes form-group" id="economy"> 
                                    <div class="form-item form-item-field-profile-problem-interest-und-12 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_problem_interest_und_12">
                                            <br/>
                                            <input type="checkbox" id="profile_problem_interest_und_12" name="field_profile_problem_interest[und][12]" value="12" <?php if(in_array(12,$data_problem)) echo "checked"; ?> class="form-checkbox">เศรษฐกิจ/ความยากจน 
                                        </label>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-item form-item-field-profile-problem-interest-und-72 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_72">
                                                <input type="checkbox" id="profile_problem_interest_und_72" name="field_profile_problem_interest[und][72]" value="72" <?php if(in_array(72,$data_problem)) echo "checked"; ?> class="form-checkbox">ความมั่นคงทางอาหาร
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-73 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_73">
                                                <input type="checkbox" id="profile_problem_interest_und_73" name="field_profile_problem_interest[und][73]" value="73" <?php if(in_array(73,$data_problem)) echo "checked"; ?> class="form-checkbox">การพัฒนาชุมชน 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-74 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_74">
                                                <input type="checkbox" id="profile_problem_interest_und_74" name="field_profile_problem_interest[und][74]" value="74" <?php if(in_array(74,$data_problem)) echo "checked"; ?> class="form-checkbox">การพัฒนาเมือง 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-70 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_70">
                                                <input type="checkbox" id="profile_problem_interest_und_70" name="field_profile_problem_interest[und][70]" value="70" <?php if(in_array(70,$data_problem)) echo "checked"; ?> class="form-checkbox">การสร้างและฝึกอาชีพ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-71 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_71">
                                                <input type="checkbox" id="profile_problem_interest_und_71" name="field_profile_problem_interest[und][71]" value="71" <?php if(in_array(71,$data_problem)) echo "checked"; ?> class="form-checkbox">การให้กู้รายย่อย/ออมทรัพย์/สหกรณ์ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-149 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_149">
                                                <input type="checkbox" id="profile_problem_interest_und_149" name="field_profile_problem_interest[und][149]" <?php if(in_array(149,$data_problem)) echo "checked"; ?>  value="149" class="form-checkbox">ที่อยู่อาศัย 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 checkbox-height-center">
                                <div class="form-item form-item-field-profile-join-und form-type-checkboxes form-group" id="participation"> 
                                    <div class="form-item form-item-field-profile-problem-interest-und-15 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_problem_interest_und_15">
                                            <br/>
                                            <input type="checkbox" id="profile_problem_interest_und_15" name="field_profile_problem_interest[und][15]" value="15" <?php if(in_array(15,$data_problem)) echo "checked"; ?> class="form-checkbox">การมีส่วนร่วม 
                                        </label>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-item form-item-field-profile-problem-interest-und-62 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_62">
                                                <input type="checkbox" id="profile_problem_interest_und_62" name="field_profile_problem_interest[und][62]" value="62" <?php if(in_array(62,$data_problem)) echo "checked"; ?> class="form-checkbox">เสรีภาพในการแสดงความคิดเห็น 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-66 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_66">
                                                <input type="checkbox" id="profile_problem_interest_und_66" name="field_profile_problem_interest[und][66]" value="66" <?php if(in_array(66,$data_problem)) echo "checked"; ?> class="form-checkbox">สื่อมวลชน 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-63 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_63">
                                                <input type="checkbox" id="profile_problem_interest_und_63" name="field_profile_problem_interest[und][63]" value="63" <?php if(in_array(63,$data_problem)) echo "checked"; ?> class="form-checkbox">คอร์รัปชั่น 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-64 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_64">
                                                <input type="checkbox" id="profile_problem_interest_und_64" name="field_profile_problem_interest[und][64]" value="64" <?php if(in_array(64,$data_problem)) echo "checked"; ?> class="form-checkbox">บรรเทาภัยพิบัติ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-61 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_61">
                                                <input type="checkbox" id="profile_problem_interest_und_61" name="field_profile_problem_interest[und][61]" value="61" <?php if(in_array(61,$data_problem)) echo "checked"; ?> class="form-checkbox">ศิลปะวัฒนธรรม 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-65 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_65">
                                                <input type="checkbox" id="profile_problem_interest_und_65" name="field_profile_problem_interest[und][65]" value="65" <?php if(in_array(65,$data_problem)) echo "checked"; ?> class="form-checkbox">ศิลธรรม 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-150 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_150">
                                                <input type="checkbox" id="profile_problem_interest_und_150" name="field_profile_problem_interest[und][150]" <?php if(in_array(150,$data_problem)) echo "checked"; ?>  value="150" class="form-checkbox">กฏหมายและนโยบาย
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 checkbox-height-footer">
                                <div class="form-item form-item-field-profile-join-und form-type-checkboxes form-group" id="claim"> 
                                    <div class="form-item form-item-field-profile-problem-interest-und-9 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_problem_interest_und_9">
                                            <br/>
                                            <input type="checkbox" id="profile_problem_interest_und_9" name="field_profile_problem_interest[und][9]" value="9" <?php if(in_array(9,$data_problem)) echo "checked"; ?> class="form-checkbox">สิทธิและความเท่าเทียม 
                                        </label>
                                    </div>
                                    <div class="col-xs-12">
                                    	<?php /*
                                        <div class="form-item form-item-field-profile-problem-interest-und-79 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_79">
                                                <input type="checkbox" id="profile_problem_interest_und_79" name="field_profile_problem_interest[und][79]" value="79" <?php if(in_array(79,$data_problem)) echo "checked"; ?> class="form-checkbox">สิทธิเพศทางเลือก 
                                            </label>
                                        </div>

                                        */ ?>
                                        <div class="form-item form-item-field-profile-problem-interest-und-78 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_78">
                                                <input type="checkbox" id="profile_problem_interest_und_78" name="field_profile_problem_interest[und][78]" value="78" <?php if(in_array(78,$data_problem)) echo "checked"; ?> class="form-checkbox">สิทธิสตรี 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-80 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_80">
                                                <input type="checkbox" id="profile_problem_interest_und_80" name="field_profile_problem_interest[und][80]" value="80" <?php if(in_array(80,$data_problem)) echo "checked"; ?> class="form-checkbox">สิทธิคนกลุ่มน้อยและผู้ด้อยโอกาส  
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-77 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_77">
                                                <input type="checkbox" id="profile_problem_interest_und_77" name="field_profile_problem_interest[und][77]" value="77" <?php if(in_array(77,$data_problem)) echo "checked"; ?> class="form-checkbox">สิทธิผู้พิการ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-75 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_75">
                                                <input type="checkbox" id="profile_problem_interest_und_75" name="field_profile_problem_interest[und][75]" value="75" <?php if(in_array(75,$data_problem)) echo "checked"; ?> class="form-checkbox">สิทธิพลเมือง 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-76 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_76">
                                                <input type="checkbox" id="profile_problem_interest_und_76" name="field_profile_problem_interest[und][76]" value="76" <?php if(in_array(76,$data_problem)) echo "checked"; ?> class="form-checkbox">สิทธิมนุษยชน 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-82 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_82">
                                                <input type="checkbox" id="profile_problem_interest_und_82" name="field_profile_problem_interest[und][82]" value="82" <?php if(in_array(82,$data_problem)) echo "checked"; ?> class="form-checkbox">ความเท่าเทียมทางเพศ 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-84 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_84">
                                                <input type="checkbox" id="profile_problem_interest_und_84" name="field_profile_problem_interest[und][84]" value="84" <?php if(in_array(84,$data_problem)) echo "checked"; ?> class="form-checkbox">การอนุรักษ์วัฒนธรรมท้องถิ่น 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-83 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_83">
                                                <input type="checkbox" id="profile_problem_interest_und_83" name="field_profile_problem_interest[und][83]" value="83" <?php if(in_array(83,$data_problem)) echo "checked"; ?> class="form-checkbox">การค้ามนุษย์ 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 checkbox-height-footer">
                                <div class="form-item form-item-field-profile-join-und form-type-checkboxes form-group" id="peace"> 
                                    <div class="form-item form-item-field-profile-problem-interest-und-10 form-type-checkbox checkbox"> 
                                        <br/>
                                        <label class="control-label" for="profile_problem_interest_und_10">
                                            <input type="checkbox" id="profile_problem_interest_und_10" name="field_profile_problem_interest[und][10]" value="10" <?php if(in_array(10,$data_problem)) echo "checked"; ?> class="form-checkbox">สันติภาพ/ความสงบสุข 
                                        </label>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-item form-item-field-profile-problem-interest-und-67 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_67">
                                                <input type="checkbox" id="profile_problem_interest_und_67" name="field_profile_problem_interest[und][67]" value="67" <?php if(in_array(67,$data_problem)) echo "checked"; ?> class="form-checkbox">การใช้ความรุนแรงทารุณกรรม 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-68 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_68">
                                                <input type="checkbox" id="profile_problem_interest_und_68" name="field_profile_problem_interest[und][68]" value="68" <?php if(in_array(68,$data_problem)) echo "checked"; ?> class="form-checkbox">การขัดแย้งแบ่งแยก 
                                            </label>
                                        </div>
                                        <div class="form-item form-item-field-profile-problem-interest-und-69 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_problem_interest_und_69">
                                                <input type="checkbox" id="profile_problem_interest_und_69" name="field_profile_problem_interest[und][69]" value="69" <?php if(in_array(69,$data_problem)) echo "checked"; ?> class="form-checkbox">อาชญากรรม 
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            -->
			            </div>
			            
	                </div>
		        </div>
		        <div class="modal-footer txt__center">
		        	<!-- <button type="submit" class="btn btn-success form-submit" value="Save" id="edit-submit">บันทึกการเปลี่ยนแปลง</button> -->
		        	<button type="submit" id="edit-submit" name="op_problem" value="Submit" class="btn btn-success form-submit">
					<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> บันทึกการเปลี่ยนแปลง</button>
		          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
			</form>
	    </div>
      
    </div>
</div>

<!-- Modal Target Interest-->
<div class="modal fade" id="myProfileTarget" role="dialog">
    <div class="modal-dialog modal-lg">
    
      	<!-- Modal content-->
      	<div class="modal-content">
      		<form enctype="multipart/form-data" action="/changemakers/update-profile"  method="post" id="user-profile-form" accept-charset="UTF-8">
	        	<div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h2 class="modal-title headline__thaisan">กลุ่มเป้าหมายที่สนใจ</h2>
		        </div>
		        <div class="modal-body modal-question modal-body-target">
		        	<div class="col-xs-12 txt__left">
			            <div class="row">
			            	<div class="col-xs-4">
                                <div class="form-item form-item-field-profile-target-group-und-23 form-type-checkbox checkbox"> 
                                   
                                    <label class="control-label" for="profile_target_group_und_23">
                                        <input type="checkbox" id="profile_target_group_und_23" name="field_profile_target_group[und][23]" value="23"  <?php if(in_array(23,$data_target)) echo "checked"; ?> class="form-checkbox">ครอบครัว 
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-item form-item-field-profile-target-group-und-25 form-type-checkbox checkbox"> 
                                    
                                    <label class="control-label" for="profile_target_group_und_25">
                                        <input type="checkbox" id="profile_target_group_und_25" name="field_profile_target_group[und][25]" value="25" <?php if(in_array(25,$data_target)) echo "checked"; ?> class="form-checkbox">ชุมชน 
                                    </label>
                                </div>
                            </div>
                            <?php /*
                            <div class="col-xs-3">
                                <div class="form-item form-item-field-profile-target-group-und-20 form-type-checkbox checkbox">
                                    <br/> 
                                    <label class="control-label" for="profile_target_group_und_20">
                                        <input type="checkbox" id="profile_target_group_und_20" name="field_profile_target_group[und][20]" value="20" <?php if(in_array(20,$data_target)) echo "checked"; ?> class="form-checkbox">ผู้ด้อยโอกาส 
                                    </label>
                                </div>
                            </div> */ ?>
                            <div class="col-xs-4">
                                <div class="form-item form-item-field-profile-target-group-und-17 form-type-checkbox checkbox">
                                 
                                    <label class="control-label" for="profile_target_group_und_17">
                                        <input type="checkbox" id="profile_target_group_und_17" name="field_profile_target_group[und][17]" value="17" <?php if(in_array(17,$data_target)) echo "checked"; ?> class="form-checkbox">ผู้พิการ 
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-4 margin__top5">
                                <div class="form-item form-item-field-profile-target-group-und-22 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_target_group_und_22">
                                        <input type="checkbox" id="profile_target_group_und_22" name="field_profile_target_group[und][22]" value="22" <?php if(in_array(22,$data_target)) echo "checked"; ?> class="form-checkbox">ผู้สูงอายุ 
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-4 margin__top5">
                                <div class="form-item form-item-field-profile-target-group-und-24 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_target_group_und_24">
                                        <input type="checkbox" id="profile_target_group_und_24" name="field_profile_target_group[und][24]" value="24" <?php if(in_array(24,$data_target)) echo "checked"; ?> class="form-checkbox">ผู้หญิง 
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-4 margin__top5">
                                <div class="form-item form-item-field-profile-target-group-und-21 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_target_group_und_21">
                                        <input type="checkbox" id="profile_target_group_und_21" name="field_profile_target_group[und][21]" value="21" <?php if(in_array(21,$data_target)) echo "checked"; ?> class="form-checkbox">สัตว์ 
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-4 margin__top5">
                                <div class="form-item form-item-field-profile-target-group-und-16 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_target_group_und_16">
                                        <input type="checkbox" id="profile_target_group_und_16" name="field_profile_target_group[und][16]" value="16" <?php if(in_array(16,$data_target)) echo "checked"; ?> class="form-checkbox">เด็ก 
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-4 margin__top5">
                                <div class="form-item form-item-field-profile-target-group-und-19 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_target_group_und_19">
                                        <input type="checkbox" id="profile_target_group_und_19" name="field_profile_target_group[und][19]" value="19" <?php if(in_array(19,$data_target)) echo "checked"; ?> class="form-checkbox">เยาวชน 
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-4 margin__top5">
                                <div class="form-item form-item-field-profile-target-group-und-18 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_target_group_und_18">
                                        <input type="checkbox" id="profile_target_group_und_18" name="field_profile_target_group[und][18]" value="18" <?php if(in_array(18,$data_target)) echo "checked"; ?> class="form-checkbox">แรงงานต่างด้าว 
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-4 margin__top5">
                                <div class="form-item form-item-field-profile-target-group-und-109 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_target_group_und_109">
                                        <input id="profile_target_group_und_109" name="field_profile_target_group[und][109]" value="109" <?php if(in_array(109,$data_target)) echo "checked"; ?> class="form-checkbox" type="checkbox">อื่น ๆ (ระบุ) 
                                     </label>
                                </div>
                                <div id="target-select" style="<?php echo empty(in_array(109,$data_target))?"display: none;":""; ?>" >
                                <input class="text-full form-control form-text" id="profile_target_group_other" name="field_profile_target_group_other[und][0][value]" value="<?php print $field_profile_target_group_other[0]['value']; ?>" size="60" maxlength="255" type="text">
                                </div>
                                   
                                
                            </div>
			            </div>
			            <br>
	                </div>
		        </div>
		        <div class="modal-footer txt__center">
		        	<!-- <button type="submit" class="btn btn-success form-submit" value="Save" id="edit-submit">บันทึกการเปลี่ยนแปลง</button> -->
		        	<button type="submit" id="edit-submit" name="op_target" value="Submit" class="btn btn-success form-submit">
					<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> บันทึกการเปลี่ยนแปลง</button>
		          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
			</form>
	    </div>
      
    </div>
</div>

<!-- Modal Skill Interest-->
<div class="modal fade" id="myProfileSkill" role="dialog">
    <div class="modal-dialog modal-lg">
    
      	<!-- Modal content-->
      	<div class="modal-content">
      		<form enctype="multipart/form-data" action="/changemakers/update-profile"  method="post" id="user-profile-form" accept-charset="UTF-8">
	        	<div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h2 class="modal-title headline__thaisan">ทักษะที่มีอยู่</h2>
		        </div>
		        <div class="modal-body modal-question modal-body-skill">
		        	<div class="col-xs-12 txt__left">
			            <div class="row">
			            	<div class="col-xs-12 margin__top20" id="computer-it">
                                <div class="checkbox_margin_buttom form-item form-item-field-profile-join-und form-type-checkboxes"> 
                                    <div class="form-item form-item-field-profile-skill-interest-und-26 form-type-checkbox checkbox"> 
                                    
                                        <label class="control-label" for="profile_skill_interest_und_26">
                                            <input type="checkbox" id="profile_skill_interest_und_26" name="field_profile_skill_interest[und][26]" value="26" <?php if(in_array(26,$data_skill)) echo "checked"; ?> class="form-checkbox">คอมพิวเตอร์ / ไอที 
                                        </label>
                                    </div>
                                </div>
                            
	                            <div class=" checkbox_margin_buttom margin__top10" >
	                                <div class="col-xs-4">
	                                    <div class="form-item form-item-field-profile-skill-interest-und-33 form-type-checkbox checkbox "> 
	                                        <label class="control-label" for="profile_skill_interest_und_33">
	                                            <input type="checkbox" id="profile_skill_interest_und_33" name="field_profile_skill_interest[und][33]" value="33" <?php if(in_array(33,$data_skill)) echo "checked"; ?> class="form-checkbox">การออกแบบกราฟฟิค 
	                                        </label>
	                                    </div>
	                                </div>
	                                <div class="col-xs-4">
	                                    <div class="form-item form-item-field-profile-skill-interest-und-35 form-type-checkbox checkbox"> 
	                                        <label class="control-label" for="profile_skill_interest_und_35">
	                                            <input type="checkbox" id="profile_skill_interest_und_35" name="field_profile_skill_interest[und][35]" value="35" <?php if(in_array(35,$data_skill)) echo "checked"; ?> class="form-checkbox">การใช้ Social Media
	                                        </label>
	                                    </div>
	                                </div>
	                                <div class="col-xs-4">
	                                    <div class="form-item form-item-field-profile-skill-interest-und-37 form-type-checkbox checkbox"> 
	                                        <label class="control-label" for="profile_skill_interest_und_37">
	                                            <input type="checkbox" id="profile_skill_interest_und_37" name="field_profile_skill_interest[und][37]" value="37" <?php if(in_array(37,$data_skill)) echo "checked"; ?> class="form-checkbox">การเขียนโปรแกรม 
	                                        </label>
	                                    </div>
	                                </div>
	                                <div class="col-xs-4 margin__top5">
	                                    <div class="form-item form-item-field-profile-skill-interest-und-34 form-type-checkbox checkbox"> 
	                                        <label class="control-label" for="profile_skill_interest_und_34">
	                                            <input type="checkbox" id="profile_skill_interest_und_34" name="field_profile_skill_interest[und][34]" value="34" <?php if(in_array(34,$data_skill)) echo "checked"; ?> class="form-checkbox">การทำเว็บไซต์ 
	                                        </label>
	                                    </div>
	                                </div>
	                                <div class="col-xs-4 margin__top5">
	                                    <div class="form-item form-item-field-profile-skill-interest-und-36 form-type-checkbox checkbox"> 
	                                        <label class="control-label" for="profile_skill_interest_und_36">
	                                            <input type="checkbox" id="profile_skill_interest_und_36" name="field_profile_skill_interest[und][36]" value="36" <?php if(in_array(36,$data_skill)) echo "checked"; ?> class="form-checkbox">การทำ Application 
	                                        </label>
	                                    </div>
	                                </div>
	     
	                            </div> 
                            </div>
                        	<div class="col-xs-12 margin__but15"></div>
                         
                            
            

							<div class="col-xs-12 margin__top20" id="industry">
                                <div class="checkbox_margin_buttom form-item form-item-field-profile-join-und form-type-checkboxes"> 
                                   <div class="form-item form-item-field-profile-skill-interest-und-27 form-type-checkbox checkbox"> 
                                        <label class="control-label font__bold" for="profile_skill_interest_und_27">
                                            <input type="checkbox" id="profile_skill_interest_und_27" name="field_profile_skill_interest[und][27]" <?php if(in_array(27,$data_skill)) echo "checked"; ?>  value="27" class="form-checkbox">ธุรกิจและอุตสาหกรรม 
                                        </label>
                                    </div>
                                </div>
                                
                                <div class=" margin__top10">
                                    
                                <div class="col-xs-4">
                                    <div class="form-item form-item-field-profile-skill-interest-und-120 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_120">
                                            <input type="checkbox" id="profile_skill_interest_und_120" name="field_profile_skill_interest[und][120]" <?php if(in_array(120,$data_skill)) echo "checked"; ?> value="120" class="form-checkbox">การวางแผนกลยุทธ
                                        </label>
                                    </div>
                                </div>
                               
                                <div class="col-xs-4">
                                    <div class="form-item form-item-field-profile-skill-interest-und-125 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_125">
                                            <input type="checkbox" id="profile_skill_interest_und_125" name="field_profile_skill_interest[und][125]" <?php if(in_array(125,$data_skill)) echo "checked"; ?> value="125" class="form-checkbox">การบริหารงาน
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-item form-item-field-profile-skill-interest-und-130 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_130">
                                            <input type="checkbox" id="profile_skill_interest_und_130" name="field_profile_skill_interest[und][130]" <?php if(in_array(130,$data_skill)) echo "checked"; ?>  value="130" class="form-checkbox">การบริหารคน
                                        </label>
                                    </div>
                                </div>

                                
                                <div class="col-xs-4  margin__top5">
                                    <div class="form-item form-item-field-profile-skill-interest-und-121 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_121">
                                            <input type="checkbox" id="profile_skill_interest_und_121" name="field_profile_skill_interest[und][121]" <?php if(in_array(121,$data_skill)) echo "checked"; ?>  value="121" class="form-checkbox">การเงิน
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-4 margin__top5">
                                    <div class="form-item form-item-field-profile-skill-interest-und-126 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_126">
                                            <input type="checkbox" id="profile_skill_interest_und_126" name="field_profile_skill_interest[und][126]" <?php if(in_array(126,$data_skill)) echo "checked"; ?>  value="126" class="form-checkbox">การบัญชี
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-4 margin__top5">
                                    <div class="form-item form-item-field-profile-skill-interest-und-131 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_131">
                                            <input type="checkbox" id="profile_skill_interest_und_131" name="field_profile_skill_interest[und][131]" <?php if(in_array(131,$data_skill)) echo "checked"; ?>  value="131" class="form-checkbox">การลงทุน
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-4 margin__top5">
                                    <div class="form-item form-item-field-profile-skill-interest-und-122 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_122">
                                            <input type="checkbox" id="profile_skill_interest_und_122" name="field_profile_skill_interest[und][122]" <?php if(in_array(122,$data_skill)) echo "checked"; ?>  value="122" class="form-checkbox">การตลาด
                                        </label>
                                    </div>
                                </div>
                            
                                <div class="col-xs-4 margin__top5">
                                    <div class="form-item form-item-field-profile-skill-interest-und-127 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_127">
                                            <input type="checkbox" id="profile_skill_interest_und_127" name="field_profile_skill_interest[und][127]" <?php if(in_array(127,$data_skill)) echo "checked"; ?>  value="127" class="form-checkbox">การโฆษณา / ประชาสัมพันธ์
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-xs-4 margin__top5">
                                    <div class="form-item form-item-field-profile-skill-interest-und-132 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_132">
                                            <input type="checkbox" id="profile_skill_interest_und_132" name="field_profile_skill_interest[und][132]" <?php if(in_array(132,$data_skill)) echo "checked"; ?>  value="132" class="form-checkbox">การประสานงาน
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-4 margin__top5">
                                    <div class="form-item form-item-field-profile-skill-interest-und-123 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_123">
                                            <input type="checkbox" id="profile_skill_interest_und_123" name="field_profile_skill_interest[und][123]" <?php if(in_array(123,$data_skill)) echo "checked"; ?>  value="123" class="form-checkbox">การขาย
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-4 margin__top5">
                                    <div class="form-item form-item-field-profile-skill-interest-und-128 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_128">
                                            <input type="checkbox" id="profile_skill_interest_und_128" name="field_profile_skill_interest[und][128]" <?php if(in_array(128,$data_skill)) echo "checked"; ?>  value="128" class="form-checkbox">ความเป็นผู้ประกอบการ
                                        </label>
                                    </div>
                                </div>
                               
                                    
                                <div class="col-xs-4 margin__top5">
                                    <div class="form-item form-item-field-profile-skill-interest-und-133 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_133">
                                            <input type="checkbox" id="profile_skill_interest_und_133" name="field_profile_skill_interest[und][133]" <?php if(in_array(133,$data_skill)) echo "checked"; ?> value="133" class="form-checkbox">การนำเข้าและส่งออก
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-4 margin__top5">
                                    <div class="form-item form-item-field-profile-skill-interest-und-124 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_124">
                                            <input type="checkbox" id="profile_skill_interest_und_124" name="field_profile_skill_interest[und][124]" <?php if(in_array(124,$data_skill)) echo "checked"; ?>  value="124" class="form-checkbox">วิจัยและพัฒนา
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs-4 margin__top5">
                                    <div class="form-item form-item-field-profile-skill-interest-und-129 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_129">
                                            <input type="checkbox" id="profile_skill_interest_und_129" name="field_profile_skill_interest[und][129]" <?php if(in_array(129,$data_skill)) echo "checked"; ?> value="129" class="form-checkbox">Supply Chain
                                        </label>
                                    </div>
                                </div>
                                </div>
                                
                            </div>


                            
                            <div class="col-xs-12 margin__but15"></div>
                            
                            <div class="col-xs-12 margin__top20" id="communication" >  
	                            <div class="checkbox_margin_buttom form-item form-item-field-profile-skill-interest-und-28 form-type-checkbox " > 
	                                <label class="control-label" for="profile_skill_interest_und_28">
	                                    <input type="checkbox" id="profile_skill_interest_und_28" name="field_profile_skill_interest[und][28]" value="28" <?php if(in_array(28,$data_skill)) echo "checked"; ?> class="form-checkbox" style="margin-right:3px;"> การสื่อสาร 
	                                </label>
	                            </div>
                                <div class="col-xs-12 margin__top10" >
                                    <div class="form-item form-item-field-profile-skill-interest-und-39 form-type-checkbox checkbox col-xs-12 "> 
                                        <label class="control-label" for="profile_skill_interest_und_39">
                                            <input type="checkbox" id="profile_skill_interest_und_39" name="field_profile_skill_interest[und][39]" <?php if(in_array(39,$data_skill)) echo "checked"; ?> value="39" class="form-checkbox check-commu">ภาษาต่างประเทศ (ระบุภาษา) 
                                        </label>
                                            <div id="commu-opt" style="<?php echo empty(in_array(39,$data_skill))?"display: none;":""; ?>" >
                                            <div class="field-type-text field-name-field-proflie-language field-widget-text-textfield form-wrapper margin__top5" id="edit-field-proflie-language--2">
                                                <div id="field-proflie-language-add-more-wrapper--2 ">
                                                    <div class="form-item form-type-textfield form-item-field-proflie-language-und-0-value">
                                                     <input class="text-full form-text" type="text" placeholder="ระบุภาษา" id="proflie_language" name="field_proflie_language[und][0][value]" value="<?php print $data_user->field_proflie_language['und'][0]['value']; ?>" size="60" maxlength="255">
                                                    </div>
                                                </div>
                                                </div>
                                                
                                            </div>
                                        
                                    </div>
                                    <div class="form-item form-item-field-profile-skill-interest-und-40 form-type-checkbox checkbox margin__top10 col-xs-4  margin__top5"> 
                                        <label class="control-label" for="profile_skill_interest_und_40">
                                            <input type="checkbox" id="profile_skill_interest_und_40" name="field_profile_skill_interest[und][40]" <?php if(in_array(40,$data_skill)) echo "checked"; ?> value="40" class="form-checkbox">การเขียน 
                                        </label>
                                    </div>
                                    <div class="form-item form-item-field-profile-skill-interest-und-41 form-type-checkbox checkbox col-xs-4  margin__top5"> 
                                        <label class="control-label" for="profile_skill_interest_und_41">
                                            <input type="checkbox" id="profile_skill_interest_und_41" name="field_profile_skill_interest[und][41]" <?php if(in_array(41,$data_skill)) echo "checked"; ?>  value="41" class="form-checkbox">การเล่าเรื่อง 
                                        </label>
                                    </div>
                                    <div class="form-item form-item-field-profile-skill-interest-und-134 form-type-checkbox checkbox col-xs-4  margin__top5"> 
                                        <label class="control-label" for="profile_skill_interest_und_134">
                                            <input type="checkbox" id="profile_skill_interest_und_134" name="field_profile_skill_interest[und][134]" <?php if(in_array(134,$data_skill)) echo "checked"; ?> value="134" class="form-checkbox">การฟัง
                                        </label>
                                    </div>
                                    <div class="form-item form-item-field-profile-skill-interest-und-42 form-type-checkbox checkbox col-xs-4  margin__top5"> 
                                        <label class="control-label" for="profile_skill_interest_und_42">
                                            <input type="checkbox" id="profile_skill_interest_und_42" name="field_profile_skill_interest[und][42]" <?php if(in_array(42,$data_skill)) echo "checked"; ?> value="42" class="form-checkbox">การพูด (พิธีกร, พรีเซนต์) 
                                        </label>
                                    </div>
                                </div>
                               
                            </div>
                            
                            
                            <div class="col-xs-12 margin__but15"></div>
                            <div class="col-xs-12 margin__top20" id="article" >	                    
                                <div class="checkbox_margin_buttom form-item form-item-field-profile-join-und form-type-checkboxes "> 
                                   <div class="form-item form-item-field-profile-skill-interest-und-29 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_29">
                                            <input type="checkbox" id="profile_skill_interest_und_29" name="field_profile_skill_interest[und][29]" value="29" <?php if(in_array(29,$data_skill)) echo "checked"; ?> class="form-checkbox">ศิลปะและงานฝึมือ 
                                        </label>
                                    </div>
                                </div>

                                <dvi class="margin__top10" >
                                                
                                    <div class="col-xs-4">                                                   
                                        <div class="form-item form-item-field-profile-skill-interest-und-135 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_skill_interest_und_135">
                                                <input type="checkbox" id="profile_skill_interest_und_135" name="field_profile_skill_interest[und][135]" <?php if(in_array(135,$data_skill)) echo "checked"; ?> value="135" class="form-checkbox">
                                                งานทำมือ
                                            </label>
                                        </div>
                                    </div>

                                        
                                    <div class="col-xs-4">
                                        <div class="form-item form-item-field-profile-skill-interest-und-137 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_skill_interest_und_137">
                                                <input type="checkbox" id="profile_skill_interest_und_137" name="field_profile_skill_interest[und][137]" <?php if(in_array(137,$data_skill)) echo "checked"; ?> value="137" class="form-checkbox">
                                                วาดรูป

                                            </label>
                                        </div>
                                    </div>
                                        
                                    <div class="col-xs-4">
                                        <div class="form-item form-item-field-profile-skill-interest-und-139 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_skill_interest_und_139">
                                                <input type="checkbox" id="profile_skill_interest_und_139" name="field_profile_skill_interest[und][139]" <?php if(in_array(139,$data_skill)) echo "checked"; ?> value="139" class="form-checkbox">
                                                ถ่ายรูป

                                            </label>
                                        </div>
                                    </div>
                                        
                                    <div class="col-xs-4 margin__top5">
                                        <div class="form-item form-item-field-profile-skill-interest-und-136 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_skill_interest_und_136">
                                                <input type="checkbox" id="profile_skill_interest_und_136" name="field_profile_skill_interest[und][136]" <?php if(in_array(136,$data_skill)) echo "checked"; ?> value="136" class="form-checkbox">การออกแบบ
                                            </label>
                                        </div>
                                    </div>
                                        
                                    <div class="col-xs-4 margin__top5">
                                        <div class="form-item form-item-field-profile-skill-interest-und-138 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_skill_interest_und_138">
                                                <input type="checkbox" id="profile_skill_interest_und_138" name="field_profile_skill_interest[und][138]" <?php if(in_array(138,$data_skill)) echo "checked"; ?> value="138" class="form-checkbox">แฟชั่น
                                            </label>
                                        </div>
                                    </div>
                                        
                                    <div class="col-xs-4 margin__top5">
                                        <div class="form-item form-item-field-profile-skill-interest-und-140 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_skill_interest_und_140">
                                                <input type="checkbox" id="profile_skill_interest_und_140" name="field_profile_skill_interest[und][140]" <?php if(in_array(140,$data_skill)) echo "checked"; ?> value="140" class="form-checkbox">งานศิลปะ
                                            </label>
                                        </div>
                                    </div>
                                    
                                </dvi>
                            </div>
	                           
                            
                            <div class="col-xs-12 margin__but15"></div>
                            
                            <!-- <div class="col-xs-12 margin__top20" id="sport">
                                <div class="checkbox_margin_buttom form-item form-item-field-profile-join-und form-type-checkboxes form-group"> 
                                   <div class="form-item form-item-field-profile-skill-interest-und-30 form-type-checkbox checkbox"> 
                                        <label class="control-label" for="profile_skill_interest_und_30">
                                            <input type="checkbox" id="profile_skill_interest_und_30" name="field_profile_skill_interest[und][30]" value="30" <?php if(in_array(30,$data_skill)) echo "checked"; ?> class="form-checkbox">กีฬาและบันเทิง 
                                        </label>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-xs-12 margin__top20" id="sport">
                                <div class="checkbox_margin_buttom form-item form-item-field-profile-join-und form-type-checkboxes "> 
                                   <div class="form-item form-item-field-profile-skill-interest-und-30 form-type-checkbox checkbox"> 
                                        <label class="control-label font__bold" for="profile_skill_interest_und_30">
                                            <input type="checkbox" id="profile_skill_interest_und_30" name="field_profile_skill_interest[und][30]"  <?php if(in_array(30,$data_skill)) echo "checked"; ?> value="30" class="form-checkbox">กีฬาและบันเทิง 
                                        </label>
                                    </div>
                                </div>
                                <div class="margin__top10">
                                    <div class="col-xs-4">
                                            <div class="form-item form-item-field-profile-skill-interest-und-141 form-type-checkbox checkbox"> 
                                                <label class="control-label" for="profile_skill_interest_und_141">
                                                    <input type="checkbox" id="profile_skill_interest_und_141" name="field_profile_skill_interest[und][141]" <?php if(in_array(141,$data_skill)) echo "checked"; ?> value="141" class="form-checkbox">กีฬา
                                                </label>
                                         </div>
                                    </div>
                                         
                                    <div class="col-xs-4">
                                            <div class="form-item form-item-field-profile-skill-interest-und-144 form-type-checkbox checkbox"> 
                                                <label class="control-label" for="profile_skill_interest_und_144">
                                                    <input type="checkbox" id="profile_skill_interest_und_144" name="field_profile_skill_interest[und][144]"  <?php if(in_array(144,$data_skill)) echo "checked"; ?>  value="144" class="form-checkbox">การแสดง
                                                </label>
                                        </div>
                                    </div>
                                        
                                    <div class="col-xs-4">
                                            <div class="form-item form-item-field-profile-skill-interest-und-146 form-type-checkbox checkbox"> 
                                                <label class="control-label" for="profile_skill_interest_und_146">
                                                    <input type="checkbox" id="profile_skill_interest_und_146" name="field_profile_skill_interest[und][146]"  <?php if(in_array(146,$data_skill)) echo "checked"; ?> value="146" class="form-checkbox">อ่านหนังสือ
                                                </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 margin__top5">
                                        <div class="form-item form-item-field-profile-skill-interest-und-142 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_skill_interest_und_142">
                                                <input type="checkbox" id="profile_skill_interest_und_142" name="field_profile_skill_interest[und][142]"  <?php if(in_array(142,$data_skill)) echo "checked"; ?> value="142" class="form-checkbox">ดนตรี
                                            </label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-4 margin__top5">
                                        <div class="form-item form-item-field-profile-skill-interest-und-145 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_skill_interest_und_145">
                                                <input type="checkbox" id="profile_skill_interest_und_145" name="field_profile_skill_interest[und][145]"  <?php if(in_array(145,$data_skill)) echo "checked"; ?> value="145" class="form-checkbox">
                                                ดูภาพยนตร์
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 margin__top5">
                                        <div class="form-item form-item-field-profile-skill-interest-und-147 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_skill_interest_und_147">
                                                <input type="checkbox" id="profile_skill_interest_und_147" name="field_profile_skill_interest[und][147]"  <?php if(in_array(147,$data_skill)) echo "checked"; ?> value="147" class="form-checkbox">อาหาร
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 margin__top5">
                                        <div class="form-item form-item-field-profile-skill-interest-und-143 form-type-checkbox checkbox"> 
                                            <label class="control-label" for="profile_skill_interest_und_143">
                                                <input type="checkbox" id="profile_skill_interest_und_143" name="field_profile_skill_interest[und][143]"  <?php if(in_array(143,$data_skill)) echo "checked"; ?>  value="143" class="form-checkbox">ท่องเที่ยว    
                                            </label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                            <div class="col-xs-12 margin__but15"></div>
                            
                        	<div class="col-xs-12 margin__top20" id="project-social">
                                <div class="checkbox_margin_buttom form-item form-item-field-profile-join-und form-type-checkboxes "> 
                                   <div class="form-item form-item-field-profile-skill-interest-und-30 form-type-checkbox checkbox"> 
                                        <label class="control-label font__bold" for="profile_skill_interest_und_31">
                                            <input type="checkbox" id="profile_skill_interest_und_31" name="field_profile_skill_interest[und][31]" <?php if(in_array(31,$data_skill)) echo "checked"; ?> value="31"  class="form-checkbox">การทำโปรเจ็กต์/ธุรกิจเพื่อสังคม
                                        </label>
                                    </div>
                                </div>
                                <div class=" margin__top10">
                                    <div class="col-xs-4">
                                            <div class="form-item form-item-field-profile-skill-interest-und-43 form-type-checkbox checkbox"> 
                                                <label class="control-label" for="profile_skill_interest_und_43">
                                                    <input type="checkbox" id="profile_skill_interest_und_43" name="field_profile_skill_interest[und][43]" <?php if(in_array(43,$data_skill)) echo "checked"; ?> value="43" class="form-checkbox">แหล่งทุน
                                                </label>
                                         </div>
                                    </div>
                                         
                                    <div class="col-xs-4">
                                            <div class="form-item form-item-field-profile-skill-interest-und-45 form-type-checkbox checkbox"> 
                                                <label class="control-label" for="profile_skill_interest_und_45">
                                                    <input type="checkbox" id="profile_skill_interest_und_45" name="field_profile_skill_interest[und][45]" <?php if(in_array(45,$data_skill)) echo "checked"; ?>  value="45" class="form-checkbox">กิจกรรม
                                                </label>
                                        </div>
                                    </div>
                                        
                                    <div class="col-xs-4">
                                            <div class="form-item form-item-field-profile-skill-interest-und-46 form-type-checkbox checkbox"> 
                                                <label class="control-label" for="profile_skill_interest_und_46">
                                                    <input type="checkbox" id="profile_skill_interest_und_46" name="field_profile_skill_interest[und][46]" <?php if(in_array(46,$data_skill)) echo "checked"; ?>  value="46" class="form-checkbox">กรณีศึกษา
                                                </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 margin__top5">
                                            <div class="form-item form-item-field-profile-skill-interest-und-44 form-type-checkbox checkbox"> 
                                                <label class="control-label" for="profile_skill_interest_und_44">
                                                    <input type="checkbox" id="profile_skill_interest_und_44" name="field_profile_skill_interest[und][44]" <?php if(in_array(44,$data_skill)) echo "checked"; ?> value="44" class="form-checkbox">จิตอาสา
                                                </label>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>

                            <!-- <div class="checkbox_margin_buttom form-item form-item-field-profile-join-und form-type-checkboxes form-group"> 
                               <div class="form-item form-item-field-profile-skill-interest-und-31 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_skill_interest_und_31">
                                        <input type="checkbox" id="profile_skill_interest_und_31" name="field_profile_skill_interest[und][31]" value="31" <?php if(in_array(31,$data_skill)) echo "checked"; ?> class="form-checkbox">ทั่วไป 
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="form-item form-item-field-profile-skill-interest-und-44 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_skill_interest_und_44">
                                        <input type="checkbox" id="profile_skill_interest_und_44" name="field_profile_skill_interest[und][44]" value="44" <?php if(in_array(44,$data_skill)) echo "checked"; ?> class="form-checkbox">จิตอาสา 
                                    </label>
                                </div>
                                <div class="form-item form-item-field-profile-skill-interest-und-45 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_skill_interest_und_45">
                                        <input type="checkbox" id="profile_skill_interest_und_45" name="field_profile_skill_interest[und][45]" value="45" <?php if(in_array(45,$data_skill)) echo "checked"; ?> class="form-checkbox">ปรัชญา 
                                    </label>
                                </div>
                                <div class="form-item form-item-field-profile-skill-interest-und-46 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_skill_interest_und_46">
                                        <input type="checkbox" id="profile_skill_interest_und_46" name="field_profile_skill_interest[und][46]" value="46" <?php if(in_array(46,$data_skill)) echo "checked"; ?> class="form-checkbox">จิตวิทยา 
                                    </label>
                                </div>
                                <div class="form-item form-item-field-profile-skill-interest-und-47 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_skill_interest_und_47">
                                        <input type="checkbox" id="profile_skill_interest_und_47" name="field_profile_skill_interest[und][47]" value="47" <?php if(in_array(47,$data_skill)) echo "checked"; ?> class="form-checkbox">กฏหมาย 
                                    </label>
                                </div>
                                <div class="form-item form-item-field-profile-skill-interest-und-48 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_skill_interest_und_48">
                                        <input type="checkbox" id="profile_skill_interest_und_48" name="field_profile_skill_interest[und][48]" value="48" <?php if(in_array(48,$data_skill)) echo "checked"; ?> class="form-checkbox">ธรรมะ 
                                    </label>
                                </div>
                                <div class="form-item form-item-field-profile-skill-interest-und-49 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_skill_interest_und_49">
                                        <input type="checkbox" id="profile_skill_interest_und_49" name="field_profile_skill_interest[und][49]" value="49" <?php if(in_array(49,$data_skill)) echo "checked"; ?> class="form-checkbox">การเมือง 
                                    </label>
                                </div>
                                <div class="form-item form-item-field-profile-skill-interest-und-50 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_skill_interest_und_50">
                                        <input type="checkbox" id="profile_skill_interest_und_50" name="field_profile_skill_interest[und][50]" value="50" <?php if(in_array(50,$data_skill)) echo "checked"; ?> class="form-checkbox">การท่องเที่ยว 
                                    </label>
                                </div>
                                <div class="form-item form-item-field-profile-skill-interest-und-32 form-type-checkbox checkbox"> 
                                    <label class="control-label" for="profile_skill_interest_und_32--2">
                                        <input id="profile_skill_interest_und_32--2" name="field_profile_skill_interest[und][32]" value="32" class="form-checkbox" type="checkbox">อื่น ๆ (ระบุ) 
                                        <input class="text-full form-control form-text" id="edit-field-interest-other-und-0-value--2" name="field_interest_other[und][0][value]" value="<?php print $field_interest_other[0]['value']; ?>" size="60" maxlength="255" type="text">
                                    </label>
                                </div>
                            </div> -->
                            
			            </div>
			            <br>
	                </div>
		        </div>
		        <div class="modal-footer txt__center">
		        	<!-- <button type="submit" class="btn btn-success form-submit" value="Save" id="edit-submit">บันทึกการเปลี่ยนแปลง</button> -->
		        	<button type="submit" id="edit-submit" name="op_skill" value="Submit" class="btn btn-success form-submit">
					<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> บันทึกการเปลี่ยนแปลง</button>
		          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
			</form>
	    </div>
      
    </div>
</div>

<!-- Modal Intro-->
<div class="modal fade" id="myProfileIntro" role="dialog">
    <div class="modal-dialog modal-lg">
    
      	<!-- Modal content-->
      	<div class="modal-content">
      		<form enctype="multipart/form-data" action="/changemakers/update-profile" method="post" id="user-profile-form" accept-charset="UTF-8">
                
	        	<div class="modal-header">
		          	<button type="button" class="close" data-dismiss="modal">&times;</button>
		          	<h2 class="modal-title headline__thaisan">ข้อความแนะนำตัว</h2>
                    
		        </div>
		        <div class="modal-body modal-question modal-body-contact">
                    <div class="row">
                    
		        	<input type="hidden" id="myIntro" value="<?php print $field_intro_self[0]['value']; ?>">
		        	<div class="col-xs-12 txt__left">
			            
			                <div class="col-xs-3">
                                <h3 class="font__thaisan">ข้อความ</h3>
                                <span class="detail__medium txt__gray">( กรุณาเล่าเกี่ยวกับตัวเองสั้นๆ 140 ตัวอักษร )</span>
			                </div>
			                <div class="col-xs-9">
			                	<div class="form-textarea-wrapper resizable textarea-processed resizable-textarea">
                                    
                                    <textarea  rows="5" cols="30" maxlength="140" class="text-full form-control form-textarea" placeholder="ข้อความแนะนำตัวให้เพื่อนสมาชิกด้วยกันรู้จัก" id="intro_self" name="field_intro_self[und][0][value]" cols="60" rows="5"><?php print $field_intro_self[0]['value']; ?></textarea>
                                    <div id="textarea_feedback" class="float__right txt__gray detail__medium"></div>
			                		<!--<textarea maxlength="250" class="text-full form-control form-textarea" placeholder="ข้อความแนะนำตัวให้เพื่อนสมาชิกด้วยกันรู้จัก" id="intro_self" name="field_intro_self[und][0][value]" cols="60" rows="5"><?php print $field_intro_self[0]['value']; ?></textarea>-->
				                </div>
			                </div>
			            
	                </div>
                    </div>
		        </div>
                
		        <div class="modal-footer txt__center margin__top20">
		        	<!-- <button type="submit" class="btn btn-success form-submit" value="Save" id="edit-submit">บันทึกการเปลี่ยนแปลง</button> -->
		        	<button type="submit" id="edit-submit" name="op_intro" value="Save" class="btn btn-success form-submit">
					<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> บันทึกการเปลี่ยนแปลง</button>
		          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        </div>
                
                
			</form>
	    </div>
      
    </div>
</div>

<!-- Modal Picture-->
<div class="modal fade" id="myProfilePicture" role="dialog">
    <div class="modal-dialog modal-lg">
    
      	<!-- Modal content-->
      	<div class="modal-content upload-profile">
      		<fieldset class="form-wrapper" id="edit-picture">
                <legend><span class="fieldset-legend"><h2 class="headline__thaisan">Picture</h2></span></legend>
                <a type="button" class="close" data-dismiss="modal">&times;</a>
      			<div class="fieldset-wrapper">

					<!-- THEME DEBUG -->
					<!-- CALL: theme('user_picture') -->
					<!-- BEGIN OUTPUT from 'modules/user/user-picture.tpl.php' -->
                    <div class="col-xs-3 txt__center">
					<div class="user-picture">
					    <a href="/users/admin" title="View user profile.">
					    	<?php 
					    	 if($user_profile['user_picture']['#markup']){
					    	 	 print $user_profile['user_picture']['#markup'];
					    	 }else{ ?>
					    	 <div class="sidebar--wrap--display">
								<img  src="/sites/all/themes/changemakers/images/soc-userdisplay-default.jpg">
							</div>
							<?php 
					    	 }
					    	?>
					    </a>  
                        </div>
                        
                    </div>
                    

					<!-- END OUTPUT from 'modules/user/user-picture.tpl.php' -->
					<!-- <form enctype="multipart/form-data" action="/changemakers/update-profile" method="post" id="user-profile-form" accept-charset="UTF-8">
						<div class="form-item form-type-file form-item-files-picture-upload">
						  	<label for="edit-picture-upload">Upload picture </label>
						 	<input type="file" id="edit-picture-upload" name="filesUpload" size="48" class="form-file">
							<div class="description">Your virtual face or picture. Pictures larger than 1024x1024 pixels will be scaled down. </div>
						</div>
						<div>
							<button type="submit" id="edit-submit" name="op_picture" value="Save" class="btn btn-success form-submit">
							<span class="icon glyphicon glyphicon-ok" aria-hidden="true"></span> บันทึกการเปลี่ยนแปลง</button>
				          	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</form> -->
                    <div class="col-xs-9 user-picture-browse">
                        <span style="font-size:12px;">Please choose a photo that's at least 200 x 200 pixels.</span> 
					<?php 
        				print  render(drupal_get_form('changemakers_form_picture')); 
        			?>
                        <!-- <span style="font-size:12px;">Please choose a photo that's at least 200 x 200 pixels.</span> -->
                    </div>
				</div>
			</fieldset>
	    </div>
      
    </div>
</div>



<script type="text/javascript">


(function($) {
	    $(document).ready(function(){


            
        var text_max = 140;
        $('#textarea_feedback').html(text_max + ' ตัวอักษร');

        $('#intro_self').keyup(function() {
        var text_length = $('#intro_self').val().length;
        var text_remaining = text_max - text_length;

        $('#textarea_feedback').html(text_remaining + ' ตัวอักษร');
        });
     
            
	    	//$("#edit-field-profile-phone-und-0-value").val("1234");
	    	$('#myProfileContact').on('hidden.bs.modal', function () {
		    	str = <?php print (string)$field_profile_phone[0]['value']; ?>;
		    	str = Number(str);
		    	//str.substring(0, 9);
			   $("#user_profile_phone").val("<?php print (string)$field_profile_phone[0]['value']; ?>");
			   $("#edit_mail").val("<?php print $user->mail?>");
			   $("#field_profile_contact_1").prop("checked", <?php if(in_array(1, $result_contact)){ echo "true"; }else{ echo "false"; } ?> );
			   $("#field_profile_contact_2").prop("checked", <?php if(in_array(2, $result_contact)){ echo "true"; }else{ echo "false"; } ?> );
			   $("#field_profile_contact_3").prop("checked", <?php if(in_array(3, $result_contact)){ echo "true"; }else{ echo "false"; } ?> );
               $("#edit_mail").removeClass('error');
			   // $("field_profile_contact_1").val();
			   // $("field_profile_contact_2").val(<?php if($field_profile_contact[1]['value'] == 2) echo "checked"; ?>);
			   // $("field_profile_contact_3").val(<?php if($field_profile_contact[2]['value'] == 3) echo "checked"; ?>);
			});

			$('#myProfile').on('hidden.bs.modal', function () {
		       //alert("tong");
			   $("#profile_address").val("<?php print escapeJavaScriptText($field_profile_address[0]['value']); ?>");
			   $('#profile_province').val("<?php print	$field_profile_province[0]['value'];?>");
			   $('#profile_zipcode').val(<?php print $field_profile_zipcode[0]['value'];?>);
			   $("#profile_zipcode").removeClass('error');
			   //$('#prifile_district').val("<?php print $field_prifile_district[0]['value'];?>");
			   $('#edit_field_profile_user_id_und_0_value').val(<?php print $field_profile_user_id[0]['value'];?>);
			   $('#prifile_nickname').val("<?php print $field_profile_nickname[0]['value'];?>");
			   $('#edit_field_organization_name_th_und_0_value').val("<?php print $field_profile_institution[0]['value'];?>");
			   $("#edit_field_profile_join_und_1").prop("checked", <?php if($field_profile_join[0]['value'] == 1){ echo "true"; }else{ echo "false"; } ?> );
			   $("#edit_field_profile_join_und_2").prop("checked", <?php if($field_profile_join[1]['value'] == 2){ echo "true"; }else{ echo "false"; } ?> );
              // $('#organization_taxonomy').val("<?php print $field_profile_institution[0]['value'];?>");
			});

			$('#myProfileLogin').on('hidden.bs.modal', function () {
		        $('#passold').val("");
		        $('#pass1').val("");
		        $('#pass2').val("");
			});

			$('#myProfileProblem').on('hidden.bs.modal', function () { 

				// education
		        $('#edit_field_profile_problem_interest_und_8').prop("checked", <?php if(in_array(8,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#edit_field_profile_problem_interest_und_53').prop("checked", <?php if(in_array(53,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#edit_field_profile_problem_interest_und_55').prop("checked", <?php if(in_array(55,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_56').prop("checked", <?php if(in_array(56,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_58').prop("checked", <?php if(in_array(58,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_54').prop("checked", <?php if(in_array(54,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_59').prop("checked", <?php if(in_array(59,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_57').prop("checked", <?php if(in_array(57,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_60').prop("checked", <?php if(in_array(60,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );

		        // environment
		        $('#profile_problem_interest_und_11').prop("checked", <?php if(in_array(11,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_99').prop("checked", <?php if(in_array(99,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_100').prop("checked", <?php if(in_array(100,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_102').prop("checked", <?php if(in_array(102,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_103').prop("checked", <?php if(in_array(103,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_104').prop("checked", <?php if(in_array(104,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_105').prop("checked", <?php if(in_array(105,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_106').prop("checked", <?php if(in_array(106,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_107').prop("checked", <?php if(in_array(107,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );

		        // health
		        $('#profile_problem_interest_und_85').prop("checked", <?php if(in_array(85,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_86').prop("checked", <?php if(in_array(86,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_87').prop("checked", <?php if(in_array(87,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_88').prop("checked", <?php if(in_array(88,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_89').prop("checked", <?php if(in_array(89,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_90').prop("checked", <?php if(in_array(90,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_91').prop("checked", <?php if(in_array(91,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_92').prop("checked", <?php if(in_array(92,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );


		        // business
		        $('#profile_problem_interest_und_13').prop("checked", <?php if(in_array(13,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_93').prop("checked", <?php if(in_array(93,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_94').prop("checked", <?php if(in_array(94,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_95').prop("checked", <?php if(in_array(95,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_96').prop("checked", <?php if(in_array(96,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_97').prop("checked", <?php if(in_array(97,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_98').prop("checked", <?php if(in_array(98,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );

		        // economy
		        $('#profile_problem_interest_und_12').prop("checked", <?php if(in_array(12,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_70').prop("checked", <?php if(in_array(70,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_71').prop("checked", <?php if(in_array(71,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_72').prop("checked", <?php if(in_array(72,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_73').prop("checked", <?php if(in_array(73,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_74').prop("checked", <?php if(in_array(74,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_149').prop("checked", <?php if(in_array(149,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );


		        // participation
		        $('#profile_problem_interest_und_15').prop("checked", <?php if(in_array(15,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_61').prop("checked", <?php if(in_array(61,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_62').prop("checked", <?php if(in_array(62,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_63').prop("checked", <?php if(in_array(63,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_64').prop("checked", <?php if(in_array(64,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_65').prop("checked", <?php if(in_array(65,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_66').prop("checked", <?php if(in_array(66,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_150').prop("checked", <?php if(in_array(150,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );

		        // calim
		        $('#profile_problem_interest_und_9').prop("checked", <?php if(in_array(9,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_75').prop("checked", <?php if(in_array(75,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_76').prop("checked", <?php if(in_array(76,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_77').prop("checked", <?php if(in_array(77,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_78').prop("checked", <?php if(in_array(78,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_79').prop("checked", <?php if(in_array(79,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_80').prop("checked", <?php if(in_array(80,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_81').prop("checked", <?php if(in_array(81,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_82').prop("checked", <?php if(in_array(82,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_83').prop("checked", <?php if(in_array(83,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_84').prop("checked", <?php if(in_array(84,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        
		        // calim
		        $('#profile_problem_interest_und_10').prop("checked", <?php if(in_array(10,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_67').prop("checked", <?php if(in_array(67,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_68').prop("checked", <?php if(in_array(68,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );
		        $('#profile_problem_interest_und_69').prop("checked", <?php if(in_array(69,$data_problem)){ echo "true"; }else{ echo "false"; } ?> );

			});

			$('#myProfileTarget').on('hidden.bs.modal', function () { 
				$('#profile_target_group_und_16').prop("checked", <?php if(in_array(16,$data_target)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_target_group_und_17').prop("checked", <?php if(in_array(17,$data_target)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_target_group_und_18').prop("checked", <?php if(in_array(18,$data_target)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_target_group_und_19').prop("checked", <?php if(in_array(19,$data_target)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_target_group_und_20').prop("checked", <?php if(in_array(20,$data_target)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_target_group_und_21').prop("checked", <?php if(in_array(21,$data_target)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_target_group_und_22').prop("checked", <?php if(in_array(22,$data_target)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_target_group_und_23').prop("checked", <?php if(in_array(23,$data_target)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_target_group_und_24').prop("checked", <?php if(in_array(24,$data_target)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_target_group_und_25').prop("checked", <?php if(in_array(25,$data_target)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_target_group_und_109').prop("checked", <?php if(in_array(109,$data_target)){ echo "true"; }else{ echo "false"; } ?> );				 
				$("#profile_target_group_other").val("<?php print $field_profile_target_group_other[0]['value']; ?>");

			});

  			$('#myProfileSkill').on('hidden.bs.modal', function () { 

  				// computer-it
				$('#profile_skill_interest_und_26').prop("checked", <?php if(in_array(26,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_33').prop("checked", <?php if(in_array(33,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_34').prop("checked", <?php if(in_array(34,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_35').prop("checked", <?php if(in_array(35,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_36').prop("checked", <?php if(in_array(36,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_37').prop("checked", <?php if(in_array(37,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );

				//industry
				$('#profile_skill_interest_und_27').prop("checked", <?php if(in_array(27,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_120').prop("checked", <?php if(in_array(120,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_121').prop("checked", <?php if(in_array(121,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_122').prop("checked", <?php if(in_array(122,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_123').prop("checked", <?php if(in_array(123,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );	
				$('#profile_skill_interest_und_124').prop("checked", <?php if(in_array(124,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_125').prop("checked", <?php if(in_array(125,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_126').prop("checked", <?php if(in_array(126,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_127').prop("checked", <?php if(in_array(127,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_128').prop("checked", <?php if(in_array(128,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );	
				$('#profile_skill_interest_und_129').prop("checked", <?php if(in_array(129,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_130').prop("checked", <?php if(in_array(130,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_131').prop("checked", <?php if(in_array(131,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_132').prop("checked", <?php if(in_array(132,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_133').prop("checked", <?php if(in_array(133,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );	

				//communication
				$('#profile_skill_interest_und_28').prop("checked", <?php if(in_array(28,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_39').prop("checked", <?php if(in_array(39,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_40').prop("checked", <?php if(in_array(40,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_41').prop("checked", <?php if(in_array(41,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_42').prop("checked", <?php if(in_array(42,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_134').prop("checked", <?php if(in_array(134,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$("#proflie_language").val("<?php print $field_proflie_language[0]['value']; ?>");

				//
				$('#profile_skill_interest_und_29').prop("checked", <?php if(in_array(29,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_135').prop("checked", <?php if(in_array(135,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_136').prop("checked", <?php if(in_array(136,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_137').prop("checked", <?php if(in_array(137,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_138').prop("checked", <?php if(in_array(138,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_139').prop("checked", <?php if(in_array(139,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_140').prop("checked", <?php if(in_array(140,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				
				// sports
				$('#profile_skill_interest_und_30').prop("checked", <?php if(in_array(30,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_141').prop("checked", <?php if(in_array(141,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_142').prop("checked", <?php if(in_array(142,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_143').prop("checked", <?php if(in_array(143,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_144').prop("checked", <?php if(in_array(144,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_145').prop("checked", <?php if(in_array(145,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_146').prop("checked", <?php if(in_array(146,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_147').prop("checked", <?php if(in_array(147,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );

				//project
				$('#profile_skill_interest_und_31').prop("checked", <?php if(in_array(31,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_43').prop("checked", <?php if(in_array(43,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_44').prop("checked", <?php if(in_array(44,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_45').prop("checked", <?php if(in_array(45,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );
				$('#profile_skill_interest_und_46').prop("checked", <?php if(in_array(46,$data_skill)){ echo "true"; }else{ echo "false"; } ?> );

			});

			$('#myProfileIntro').on('hidden.bs.modal', function () { 
				var text = $('#myIntro').val();
				$('#intro_self').val(text);

			});

			$("#profile_skill_interest_und_26").click(function(){
	            $('#computer-it input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#profile_skill_interest_und_27").click(function(){
	            $('#industry input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#profile_skill_interest_und_28").click(function(){
	            $('#communication input:checkbox').not(this).prop('checked', this.checked);
	            if ($(this).is(":checked")) {
	                    $("#commu-opt").show();
	             } else {
	                //$("#commu-opt").hide();
	            }
	        });
	        $("#profile_target_group_und_109").click(function(){
	            if ($(this).is(":checked")) {
	                    $("#target-select").show();
	             } else {
	                $("#target-select").hide();
	            }
	        });

			$("#profile_skill_interest_und_31").click(function(){
            	$('#project-social input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#profile_skill_interest_und_30").click(function(){
	            $('#sport input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#profile_skill_interest_und_29").click(function(){
	            $('#article input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#edit_field_profile_problem_interest_und_8").click(function(){
	            $('#education input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#profile_problem_interest_und_11").click(function(){
	            $('#environment input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#profile_problem_interest_und_86").click(function(){
	            $('#healty input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#profile_problem_interest_und_12").click(function(){
	            $('#economy input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#profile_problem_interest_und_9").click(function(){
	            $('#claim input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#profile_problem_interest_und_15").click(function(){
	            $('#participation input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#profile_problem_interest_und_10").click(function(){
	            $('#peace input:checkbox').not(this).prop('checked', this.checked);
	        });
	        $("#profile_problem_interest_und_13").click(function(){
	            $('#business input:checkbox').not(this).prop('checked', this.checked);
	        });







			$(function () {
	        $(".check-commu").click(function () {
	            if ($(this).is(":checked")) {
	                $("#commu-opt").show();
	                } else {
	                 $("#commu-opt").hide();
	                }
	            });
	        });

	        

	        $("#education input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#education input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}

				if(checkedValue >= 8 && checkedValue < 9 ){
					var check_value= $('#edit_field_profile_problem_interest_und_8')[0].checked;
					if(check_value == true){
						$('#edit_field_profile_problem_interest_und_8').prop("checked", false );
					}else{
						$('#edit_field_profile_problem_interest_und_8').prop("checked", true );	
					}
					
				}else if(checkedValue == 9){
					$('#edit_field_profile_problem_interest_und_8').prop("checked", true );	
				}
				
	        });

	        $("#project-social input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#project-social input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}

				if(checkedValue >= 4 && checkedValue < 5 ){
					var check_value= $('#profile_skill_interest_und_31')[0].checked;
					if(check_value == true){
						$('#profile_skill_interest_und_31').prop("checked", false );
					}else{
						$('#profile_skill_interest_und_31').prop("checked", true );	
					}
					
				}else if(checkedValue == 5){
					$('#profile_skill_interest_und_31').prop("checked", true );	
				}

			
	        });

	        $("#sport input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#sport input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}


				if(checkedValue >= 7 && checkedValue < 8 ){
					var check_value= $('#profile_skill_interest_und_30')[0].checked;
					if(check_value == true){
						$('#profile_skill_interest_und_30').prop("checked", false );
					}else{
						$('#profile_skill_interest_und_30').prop("checked", true );	
					}
					
				}else if(checkedValue == 8){
					$('#profile_skill_interest_und_30').prop("checked", true );	
				}


	        });

	        $("#article input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#article input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}

				if(checkedValue >= 6 && checkedValue < 7 ){
					var check_value= $('#profile_skill_interest_und_29')[0].checked;
					if(check_value == true){
						$('#profile_skill_interest_und_29').prop("checked", false );
					}else{
						$('#profile_skill_interest_und_29').prop("checked", true );	
					}
					
				}else if(checkedValue == 7){
					$('#profile_skill_interest_und_29').prop("checked", true );	
				}

	        });

	        $("#environment input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#environment input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}

				if(checkedValue >= 8 && checkedValue < 9 ){
					var check_value= $('#profile_problem_interest_und_11')[0].checked;
					if(check_value == true){
						$('#profile_problem_interest_und_11').prop("checked", false );
					}else{
						$('#profile_problem_interest_und_11').prop("checked", true );	
					}
					
				}else if(checkedValue == 9){
					$('#profile_problem_interest_und_11').prop("checked", true );	
				}


	        });

	        $("#healty input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#healty input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}


				if(checkedValue >= 7 && checkedValue < 8 ){
					var check_value= $('#profile_problem_interest_und_86')[0].checked;
					if(check_value == true){
						$('#profile_problem_interest_und_86').prop("checked", false );
					}else{
						$('#profile_problem_interest_und_86').prop("checked", true );	
					}
					
				}else if(checkedValue == 8){
					$('#profile_problem_interest_und_86').prop("checked", true );	
				}

	        });

	       
	        $("#economy input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#economy input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}

				if(checkedValue >= 6 && checkedValue < 7 ){
					var check_value= $('#profile_problem_interest_und_12')[0].checked;
					if(check_value == true){
						$('#profile_problem_interest_und_12').prop("checked", false );
					}else{
						$('#profile_problem_interest_und_12').prop("checked", true );	
					}
					
				}else if(checkedValue == 7){
					$('#profile_problem_interest_und_12').prop("checked", true );	
				}

	        });

	        $("#claim input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#claim input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}


				if(checkedValue >= 8 && checkedValue < 9 ){
					var check_value= $('#profile_problem_interest_und_9')[0].checked;
					if(check_value == true){
						$('#profile_problem_interest_und_9').prop("checked", false );
					}else{
						$('#profile_problem_interest_und_9').prop("checked", true );	
					}
					
				}else if(checkedValue == 9){
					$('#profile_problem_interest_und_9').prop("checked", true );	
				}

	        });

	        $("#participation input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#participation input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}


				if(checkedValue >= 7 && checkedValue < 8 ){
					var check_value= $('#profile_problem_interest_und_15')[0].checked;
					if(check_value == true){
						$('#profile_problem_interest_und_15').prop("checked", false );
					}else{
						$('#profile_problem_interest_und_15').prop("checked", true );	
					}
					
				}else if(checkedValue == 8){
					$('#profile_problem_interest_und_15').prop("checked", true );	
				}

	        });

	        $("#peace input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#peace input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}

				if(checkedValue >= 3 && checkedValue < 4 ){
					var check_value= $('#profile_problem_interest_und_10')[0].checked;
					if(check_value == true){
						$('#profile_problem_interest_und_10').prop("checked", false );
					}else{
						$('#profile_problem_interest_und_10').prop("checked", true );	
					}
					
				}else if(checkedValue == 4){
					$('#profile_problem_interest_und_10').prop("checked", true );	
				}

				
	        });


	        $("#business input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#business input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}
				if(checkedValue >= 6 && checkedValue < 7 ){
					var check_value= $('#profile_problem_interest_und_13')[0].checked;
					if(check_value == true){
						$('#profile_problem_interest_und_13').prop("checked", false );
					}else{
						$('#profile_problem_interest_und_13').prop("checked", true );	
					}
					
				}else if(checkedValue == 7){
					$('#profile_problem_interest_und_13').prop("checked", true );	
				}

	        });

	        $("#computer-it input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#computer-it input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}

				if(checkedValue >= 5 && checkedValue < 6 ){
					var check_value= $('#profile_skill_interest_und_26')[0].checked;
					if(check_value == true){
						$('#profile_skill_interest_und_26').prop("checked", false );
					}else{
						$('#profile_skill_interest_und_26').prop("checked", true );	
					}
					
				}else if(checkedValue == 6){
					$('#profile_skill_interest_und_26').prop("checked", true );	
				}
	        });


	        $("#industry input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#industry input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}

				if(checkedValue >= 14 && checkedValue < 15 ){
					var check_value= $('#profile_skill_interest_und_27')[0].checked;
					if(check_value == true){
						$('#profile_skill_interest_und_27').prop("checked", false );
					}else{
						$('#profile_skill_interest_und_27').prop("checked", true );	
					}
					
				}else if(checkedValue == 15){
					$('#profile_skill_interest_und_27').prop("checked", true );	
				}

	        });

	        $("#communication input:checkbox").click(function(){
            	//$('#education input:checkbox').not(this).prop('checked', this.checked);
            	var inputElements = $("#communication input:checkbox");
            	checkedValue = 0;
				for(var i=0; inputElements[i]; ++i){
				      if(inputElements[i].checked){
				           checkedValue++;
				      }
				}
				if(checkedValue >= 5 && checkedValue < 6 ){
					var check_value= $('#profile_skill_interest_und_28')[0].checked;
					if(check_value == true){
						$('#profile_skill_interest_und_28').prop("checked", false );
					}else{
						$('#profile_skill_interest_und_28').prop("checked", true );	
					}
					
				}else if(checkedValue == 6){
					$('#profile_skill_interest_und_28').prop("checked", true );	
				}

	        });


	       



			
	   
	    }); 



		$('#profile_form_contact').on('submit', function() {
		    // check validation
		    val_email = validateEmail($('#edit_mail').val());
		    if (val_email == false) {
                $("#edit_mail").addClass('error');
		        return false;
		    }else{
		    	return true;
		    }
		});

		function isValidSp(str) {
		    var iChars = "~`!#$%^&*+=-[]\\\';,/{}|\":<>?"+"\ ";

		    for (var i = 0; i < str.length; i++) {
		       if (iChars.indexOf(str.charAt(i)) != -1) {
		           //alert ("File name has special characters ~`!#$%^&*+=-[]\\\';,/{}|\":<>? \nThese are not allowed\n");
		           return false;
		       }
		    }
		    return true;
		}
		$('#edit_submit_login').click(function( event ) {
			//return false;

		    var pass1 = document.getElementById("pass1").value;
		    var pass2 = document.getElementById("pass2").value;
		    var passold = document.getElementById("passold").value;
		    var MyDiv1 = document.getElementById('show_error');

		    var textbox = document.getElementById("pass1");
		    if(textbox.value.length < 6 ){
		        // alert("กรูณากรอกรหัสผ่านให้มากกว่า 6 ตัวอักษร");
		        MyDiv1.innerHTML = "กรุณากรอกรหัสผ่านให้มากกว่า 6 ตัวอักษร";
		        event.preventDefault();
		    }
		    else if(isValidSp(pass1) == false){
		    	MyDiv1.innerHTML = "กรุณากรอกรหัสผ่านโดยไม่ใช้อักขระแบบพิเศษ";
		        event.preventDefault();
		    }
		   	else if($.trim(pass1) == ""){
		   		MyDiv1.innerHTML = "กรุณากรอกรหัสผ่าน ม่สามารถกรอกช่องว่างได้";
		        event.preventDefault();
		   	}
		    else{

	    		$.post('/api/changemakers/check_pass_old',{'old_pass': passold }, function(data) {
		    		
		    		//alert(data);
		    		if(data == 0){
		    			MyDiv1.innerHTML = "รหัสผ่านเดิมไม่ถูกต้อง";
		    		}else{
		    			if(passold != "")
					    {

						    if (pass1 != pass2) {
						    	MyDiv1.innerHTML = "รหัสผ่านไม่ตรงกัน";
						        //alert("Passwords Do not match");
						        //document.getElementById("pass1").style.borderColor = "#E34234";
						        //document.getElementById("pass2").style.borderColor = "#E34234";
						        //alert("Passwords Not Match!!!");
						        event.preventDefault();
						        //return false;
						    }
						    else if(pass1 == "" && pass2 == "") {
						    	MyDiv1.innerHTML = "กรุณากรอกรหัสผ่าน";
						        //alert("Please Fill Passwords");
						        event.preventDefault();
						    }
						    else if(pass1 == "")
						    {
						    	MyDiv1.innerHTML = "กรุณากรอกรหัสผ่านใหม่";
						    	//alert("Please Fill New Passwords");
						    	event.preventDefault();
						    }
						    else if(pass2 == "")
						    {
						    	MyDiv1.innerHTML = "กรุณากรอกรหัสให้ถูกต้อง";
						    	//alert("Please Fill Confirm Passwords");
						    	event.preventDefault();
						    }
						    else
						    {
						    	//alert("Passwords Match!!!");
						    	$( "#user_profile_form_login" ).submit();
						    }
						}
						else{
							MyDiv1.innerHTML = "กรุณากรอกรหัสผ่าน";
							//alert("Please Fill Passwords");
							event.preventDefault();
						}

		    		}
			      
			    }).fail(function(xhr, ajaxOptions, thrownError) { 
			        alert(thrownError); //alert any HTTP error
			        $("#load_more_button").show(); //bring back load more button
			        $('.animation_image').hide(); //hide loading image once data is received
			    }); 

			}
			event.preventDefault();
		});
		$("#edit-submit-contact").click(function(){
			var phone = document.getElementById("user_profile_phone").value;
			if(phone == "" || (phone.length!=10)){
                $("#user_profile_phone").addClass('error');
                $(".alert--field--tel-edit").css('display','block');
                return false;
            }
		});
		$("#edit-submit-profile").click(function(){
			var zipcode = document.getElementById("profile_zipcode").value;
			if(zipcode == "" || (zipcode.length!=5)){
                $("#profile_zipcode").addClass('error');
                return false;
            }
		});
		
		$("#user_profile_phone").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
    $("#profile_zipcode").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode == 65 && ( e.ctrlKey === true || e.metaKey === true ) ) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

		
  
	}(jQuery));

	function setValue() {
        document.getElementById('edit-field-profile-phone-und-0-value').value = "555555";
    }

    // function isNumberKey(evt) {
    //     var charCode = (evt.which) ? evt.which : evt.keyCode;
    //     // Added to allow decimal, period, or delete
    //     if (charCode == 110 || charCode == 190 || charCode == 46) 
    //         return true;
        
    //     if (charCode > 31 && (charCode < 48 || charCode > 57)) 
    //         return false;
        
    //     return true;
    // } // isNumberKey
	
    function validateEmail(email) {
	    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	    return re.test(email);
    }



	//alert("tong");
	function matchPassword() {
	    
		//return ok;
	    
	}

</script>
<?php endif; ?>

