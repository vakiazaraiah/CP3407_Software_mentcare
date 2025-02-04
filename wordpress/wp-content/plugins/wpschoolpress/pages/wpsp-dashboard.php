<?php
if (!defined( 'ABSPATH' ) )exit('No Such File');
wpsp_header();
if( is_user_logged_in() ) {
	global $current_user, $wp_roles, $wpdb;
	//get_currentuserinfo();
	$propayment = wpsp_check_pro_version('pay_WooCommerce');
	$propayment = !$propayment['status'] ? 'notinstalled'    : 'installed';

	$current_user_role=$current_user->roles[0];
	if( $current_user_role == 'administrator' || $current_user_role == 'teacher' || $current_user_role == 'parent' || $current_user_role == 'student' ) {
		wpsp_topbar();
		wpsp_sidebar();
		wpsp_body_start();

		global $wpdb;
		$user_table		=	$wpdb->prefix."users";
		$student_table		=	$wpdb->prefix."wpsp_student";
		$teacher_table		=	$wpdb->prefix."wpsp_teacher";
		$class_table		=	$wpdb->prefix."wpsp_class";
		$attendance_table	=	$wpdb->prefix."";
		$usercount = $wpdb->get_row("SELECT count(sid) as countstudent FROM $student_table JOIN $user_table ON $user_table.ID = $student_table.wp_usr_id");
		$teachercount = $wpdb->get_row("SELECT count(tid) as countteacher FROM $teacher_table JOIN $user_table ON $user_table.ID = $teacher_table.wp_usr_id");
		$parentscount = $wpdb->get_row("SELECT count(sid) as countparents FROM $student_table JOIN $user_table ON $user_table.ID = $student_table.parent_wp_usr_id");

		$users_count		=	$wpdb->get_row("SELECT(SELECT COUNT(*)FROM $student_table )AS stcount,(SELECT COUNT(*)FROM $teacher_table) AS tcount,(SELECT COUNT(DISTINCT parent_wp_usr_id) FROM $student_table where `parent_wp_usr_id`!='') AS pcount,(SELECT COUNT(*) FROM $class_table) AS clcount");


		?>

		<?php

		if( $current_user_role == 'parent') {
			$paymenconfirmationid = 0;?>

			<?php $stable = $wpdb->prefix."wpsp_student";
			$ctlass = $wpdb->prefix."wpsp_class";
			$cteacher	=	$wpdb->prefix."wpsp_teacher";
			$wpsp_classes =$wpdb->get_results("SELECT * FROM $stable where parent_wp_usr_id = $current_user->ID");

			$args = array(
				'post_type'      => 'product',
				'posts_per_page' => -1,

			);
			$productloop = new WP_Query( $args );
			foreach ($wpsp_classes as $sclas) {

				if (is_numeric($sclas->class_id)){
					$classIDArray[] = $sclas->class_id;
				}else{
					$classIDArray = unserialize($sclas->class_id);
				}
				foreach ($classIDArray as $idsvalue){

					$clasname = $wpdb->get_row("SELECT * FROM $ctlass where cid=$idsvalue");
					if($clasname->c_fee_type == 'free'){
	 					$nonemenu = 'nopayment-none';

					}else {

						$wpsp_tech_data =$wpdb->get_results("SELECT * FROM  $cteacher t INNER JOIN $ctlass c ON t.wp_usr_id=c.teacher_id where c.cid = '".$idsvalue."' and c.c_fee_type = 'paid'");

				$courses1 = get_user_meta($current_user->ID, '_pay_woocommerce_enrolled_class_access_counter');
				$courses2 = get_user_meta($sclas->wp_usr_id, '_pay_woocommerce_enrolled_class_access_counter' );
			   		$courses = array_merge($courses1,$courses2);


				if ( ! empty( $courses ) ) {
					$courses = maybe_unserialize( $courses );
				} else {
					$courses = array();
				}

				$courses_check=array();
				$courses_value=array();

				foreach($courses as $key => $value)
				{
					foreach($value as $key1 => $value1)
					{
						if(!empty($value1))
												{
													$courses_check[] = $key1;
													$courses_value[] = $value1;
												}
					}
				}
				if(in_array($idsvalue, $courses_check))
				{

				}
				else
				{

					$paymenconfirmationid++;

				}


}
}}
$nocount = 0;
if($paymenconfirmationid > 0)
						{
									$nonemenu = ' nopayment-none1';
						}
						else
						{
									$nonemenu = ' nopayment-none';
						}
						$args = array(
									'post_type'      => 'product',
									'posts_per_page' => -1
								);
					$obituary_query = new WP_Query($args);

					while ($obituary_query->have_posts()) : $obituary_query->the_post();
					global $product;

						$product_title= get_the_title();
						if (in_array('woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins')))) {
						$currency = get_woocommerce_currency_symbol();
					}
				$price = get_post_meta( get_the_ID(), '_regular_price', true);
					$courses1 = get_post_meta( get_the_ID(), '_related_class', true );
					if ( ! empty( $courses1 ) ) {
						$courses1 = maybe_unserialize( $courses1 );
					} else {
						$courses1 = array();
					}




					foreach($courses1 as $key => $value){

							if(in_array($value, $classIDArray)){

$nocount++;
							}

						}
							endwhile;
				wp_reset_query();

				if($nocount > 0)
						{
									$nonemenu = ' nopayment-none1';
						}
						else
						{
									$nonemenu = ' nopayment-none';
						}
		?>
<style type="text/css">
	.nopayment-none10 {display:block !important;}
</style>
<?php if($propayment == "installed"){?>
<table class="wpsp-table <?php echo $nonemenu;?>" id="status-table" cellspacing="0" width="100%" style="width:100%;margin-bottom: 30px !important;">
			<thead>
				<tr>
					<th>Student Name</th>
									<th>Roll No</th>
									<th>Class Name</th>
									<th>Class Teacher Name</th>
									<th>Class Fee Status</th>
									<th>Fees For</th>

									<th>Pay Now</th>
				</tr>
			</thead>
			<tbody>

<?php 	  }
			foreach ($wpsp_classes as $sclas) {
				if (is_numeric($sclas->class_id)){
					$classIDArray[] = $sclas->class_id;
				}else{
					$classIDArray = unserialize($sclas->class_id);
				}
				foreach ($classIDArray as $idsvalue){

					$clasname = $wpdb->get_row("SELECT * FROM $ctlass where cid=$idsvalue");
					if($clasname->c_fee_type == 'free'){
	 					$nonemenu = 'nopayment-none';

					}else {

						$wpsp_tech_data =$wpdb->get_results("SELECT * FROM  $cteacher t INNER JOIN $ctlass c ON t.wp_usr_id=c.teacher_id where c.cid = '".$idsvalue."' and c.c_fee_type = 'paid'");

				$courses1 = get_user_meta($current_user->ID, '_pay_woocommerce_enrolled_class_access_counter');
				$courses2 = get_user_meta($sclas->wp_usr_id, '_pay_woocommerce_enrolled_class_access_counter' );
				 		$courses = array_merge($courses1,$courses2);


				if ( ! empty( $courses ) ) {
					$courses = maybe_unserialize( $courses );
				} else {
					$courses = array();
				}

				$courses_check=array();
				$courses_value=array();

				foreach($courses as $key => $value)
				{
					foreach($value as $key1 => $value1)
					{
												if(!empty($value1))
												{
													$courses_check[] = $key1;
													$courses_value[] = $value1;
												}
					}
				}
				if(in_array($idsvalue, $courses_check))
				{

				}
				else
				{

					$paymenconfirmationid++;

				}
						if($paymenconfirmationid > 0)
						{
									$nonemenu = ' nopayment-none';
						}
						else
						{
									$nonemenu = ' nopayment-none1';
						}
							$courses_valu_final = array();
						foreach($courses_value as $key => $value)
						{
								foreach($value as $key1 => $value1)
								{
									$courses_valu_final[] = $value1;
								}
						}
				$product_id=array();
				foreach($courses_valu_final as $key => $value )
				{
						$order = wc_get_order($value);
						$items = $order->get_items();
						foreach ( $items as $item )
						{
    						$product_id[] = $item['product_id'];
						}
				}
				if ( $productloop->have_posts() ) :
						  while ( $productloop->have_posts() ) : $productloop->the_post();
						  	global $product;
							$product_title= get_the_title();
						if (in_array('woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins')))) {
						$currency = get_woocommerce_currency_symbol();
					}
							$price = get_post_meta( get_the_ID(), '_regular_price', true);
							$courses1 = get_post_meta( get_the_ID(), '_related_class', true );

							if ( ! empty( $courses1 ) ) {
								$courses1 = maybe_unserialize( $courses1 );
							} else {
								$courses1 = array();
							}
							foreach($courses1 as $key => $value){
								if(!in_array(get_the_ID(), $product_id)){

									if(in_array($value, $classIDArray)){

										$stable=$wpdb->prefix."wpsp_student";
										$ctlass=$wpdb->prefix."wpsp_class";
										$cteacher =$wpdb->prefix."wpsp_teacher";

										 $wpsp_cls_data =$wpdb->get_results("SELECT * FROM   $ctlass where cid = '".$value."' and c_fee_type = 'paid'");

										if($propayment == "installed"){
											?>
											<tbody>
												<tr>
													<td><?php echo  $sclas->s_fname.' '.$sclas->s_lname;?></td>
													<td><?php echo  $sclas->s_rollno;?></td>
													<td><?php echo  $wpsp_cls_data[0]->c_name;?></td>
													<td><?php echo  $wpsp_tech_data[0]->first_name.' '.$wpsp_tech_data[0]->last_name;?></td>
													<td>Not Paid </td>
														<td><?php echo $product_title;?></td>
													<td><a class="wpsp-btn" href="<?php echo get_permalink();?>" target="_blank"> <?php echo $currency."".$price ;?> Pay Now</a></td>
												</tr>

											</tbody>
											<?php
										}

									}
								}
							}
endwhile;
						break;

					wp_reset_query();
				endif;
			}
		}
	}
	?>
	</tbody>
</table>
<?php
}



if( $current_user_role == 'student') {

	$stable=$wpdb->prefix."wpsp_student";
	$ctlass=$wpdb->prefix."wpsp_class";
	$user_id = $current_user->ID;
	$wpsp_stud_data = $wpdb->get_results("SELECT s.class_id,s.parent_wp_usr_id FROM  $stable s INNER JOIN $ctlass c where s.wp_usr_id = '".$user_id."' and c.c_fee_type = 'paid'");


	$cid = [];
	if(!empty($wpsp_stud_data)){
		if(is_numeric($wpsp_stud_data[0]->class_id) ){
			$cid[] = $wpsp_stud_data[0]->class_id;
		}else{
			$class_id_array = unserialize( $wpsp_stud_data[0]->class_id );
			foreach($class_id_array as $id){
				$cid[] = $id;
			}
		}
	}
	if($propayment == "installed"){
		$paymenconfirmationid = 0;
		foreach ($class_id_array as $id ){
			$clasname = $wpdb->get_row("SELECT * FROM $ctlass where cid=$id");
			if($clasname->c_fee_type == 'free'){
				$nonemenu = 'nopayment-none';
			} else {
				$wpsp_tech_data =$wpdb->get_results("SELECT * FROM  $cteacher t INNER JOIN $ctlass c ON t.wp_usr_id=c.teacher_id where c.cid = '".$id."' and c.c_fee_type = 'paid'");
				$courses1 = get_user_meta($wpsp_stud_data[0]->parent_wp_usr_id, '_pay_woocommerce_enrolled_class_access_counter' );
				$courses2 = get_user_meta( $user_id, '_pay_woocommerce_enrolled_class_access_counter' );
				$courses = array_merge($courses1,$courses2);
				if ( ! empty( $courses ) ) {
					$courses = maybe_unserialize( $courses );
				} else {
					$courses = array();
				}
				$courses_check=array();
				foreach($courses as $key => $value)
				{
					foreach($value as $key1 => $value1)
					{
						if(!empty($value1))
						{
							$courses_check[] = $key1;
						}
					}
				}
				if(in_array($id, $courses_check))
				{
				}
				else
				{
					 $paymenconfirmationid++;
				}
			}
		}
if($paymenconfirmationid > 0){
					$nonemenu = ' nopayment1-none1';
				}else {
					$nonemenu = ' nopayment-none';
				}
				$args = array(
									'post_type'      => 'product',
									'posts_per_page' => -1
								);
					$obituary_query = new WP_Query($args);
					while ($obituary_query->have_posts()) : $obituary_query->the_post();
					global $product;
						$product_title= get_the_title();
						if (in_array('woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins')))) {
						$currency = get_woocommerce_currency_symbol();
					}
				$price = get_post_meta( get_the_ID(), '_regular_price', true);
					$courses1 = get_post_meta( get_the_ID(), '_related_class', true );
					if ( ! empty( $courses1 ) ) {
						$courses1 = maybe_unserialize( $courses1 );
					} else {
						$courses1 = array();
					}

			foreach($courses1 as $key => $value)
						{
							if(in_array($value, $cid[0]))
							{
								$nocount++;
							}
						}
				endwhile;
				wp_reset_query();
				if($nocount > 0)
						{
									$nonemenu = ' nopayment-none1';
						}
						else
						{
									$nonemenu = ' nopayment-none';
						}
		?>

						<table class="wpsp-table <?php echo $nonemenu; ?>" id="status-table" cellspacing="0" width="100%" style="width:100%;margin-bottom: 30px !important;">
							<thead>
								<tr>
									<th>Student Name</th>
									<th>Roll No</th>
									<th>Class Name</th>
									<th>Class Teacher Name</th>
									<th>Class Fee Status</th>
									<th>Fees For</th>

									<th>Pay Now</th>
								</tr>
							</thead>
							<?php
						}
						if($propayment == "installed"){
						$wpsp_tech_data =$wpdb->get_results("SELECT * FROM  $cteacher t INNER JOIN $ctlass c ON t.wp_usr_id=c.teacher_id where c.cid = '".$cid."' and c.c_fee_type = 'paid'");
						if ( ! empty( $courses ) ) {
							$courses = maybe_unserialize( $courses );
						} else {
							$courses = array();
						}
						$courses_check=array();
						$courses_value=array();
						foreach($courses as $key => $value){
									foreach($value as $key1 => $value1){
									if(!empty($value1)){
												$courses_check[] = $key1;
												$courses_value[] = $value1;
										}
										}

										}
							$courses_valu_final = array();
							foreach($courses_value as $key => $value)
							{
								foreach($value as $key1 => $value1)
								{
									$courses_valu_final[] = $value1;
								}
							}
					$product_id=array();
					foreach($courses_valu_final as $key => $value )
							{
									$order = wc_get_order($value);
									$items = $order->get_items();
									foreach($items as $item )
										{
									    $product_id[] = $item['product_id'];
										}
							}


					if(!empty($cid[0])){
						foreach($cid[0] as $cid1){
							if(in_array($cid1, $courses_check)){

								$nonemenu = ' nopayment1-none1';
							} else {

								$nonemenu = ' nopayment-none';

							}
						}
					}
					$args = array('post_type'      => 'product',
								  'posts_per_page' => -1);
					$obituary_query = new WP_Query($args);
					while ($obituary_query->have_posts()) : $obituary_query->the_post();
					global $product;
						$product_title= get_the_title();
						if (in_array('woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins')))) {
						$currency = get_woocommerce_currency_symbol();
					}
				$price = get_post_meta( get_the_ID(), '_regular_price', true);
					$courses1 = get_post_meta( get_the_ID(), '_related_class', true );
					if ( ! empty( $courses1 ) ) {
						$courses1 = maybe_unserialize( $courses1 );
					} else {
						$courses1 = array();
					}
					foreach($courses1 as $key => $value)
					{
						if(!in_array(get_the_ID(), $product_id))
						{
							if(in_array($value, $cid[0]))
							{
								$stable=$wpdb->prefix."wpsp_student";
								$ctlass=$wpdb->prefix."wpsp_class";
								$cteacher =$wpdb->prefix."wpsp_teacher";
								$wpsp_stud_data =$wpdb->get_results("SELECT * FROM  $stable s INNER JOIN $ctlass c where s.wp_usr_id = '".$user_id."' and c.c_fee_type = 'paid' and c.cid = ".$value);
								$wpsp_tech_data =$wpdb->get_results("SELECT * FROM  $cteacher t INNER JOIN $ctlass c ON t.wp_usr_id=c.teacher_id where c.cid = '".$value."' and c.c_fee_type = 'paid'");
								if($propayment == "installed"){	?>
									<tbody>
										<tr>
										<td><?php echo $wpsp_stud_data[0]->s_fname.' '.$wpsp_stud_data[0]->s_lname;?></td>
										<td><?php echo  $wpsp_stud_data[0]->s_rollno;?></td>
										<td> <?php echo  $wpsp_stud_data[0]->c_name;?></td>
										<td> <?php echo  $wpsp_tech_data[0]->first_name.' '.$wpsp_tech_data[0]->last_name;?></td>
										<td>Not Paid </td>
										<td> <?php echo $product_title;?></td>
										<td><a class="wpsp-btn" href="<?php echo get_permalink();?>" target="_blank"><?php echo $currency."".$price ;?> Pay Now</a></td>
										</tr>
									</tbody>
									<?php
								}
								$nonemenu = ' nopayment-none';
							}
						}
					}
				endwhile;
				wp_reset_query();
			}}
			if($propayment == "installed"){
				if( $current_user_role == 'student') {
				if($nocount > 0){?>
</table>

				<?php } else {


					?>
				</table>

<?php
 }}
}
if($propayment != "installed"){
	$nonemenu='';
}
if( $current_user_role=='administrator' || $current_user_role == 'parent'){?> <div class="wpsp-row "><?php } else { ?>
	<div class="wpsp-row">
	<?php  } ?>
	<div class="wpsp-col-sm-3 wpsp-col-xs-6">
		<a class="wpsp-colorBox" <?php if($current_user_role == 'parent' || $current_user_role == 'student'){ }else {?> href="<?php echo wpsp_admin_url();?>sch-student" <?php } ?> >
			<span class="wpsp-colorBox-title"><?php echo apply_filters('wpsp_sidebar_student_title_menu',esc_html__('Patients','WPSchoolPress')); ?></span>
			<h4 class="wpsp-colorBox-head"><?php echo isset( $usercount->countstudent ) ?  intval($usercount->countstudent) : 0; ?><sup>+</sup></h4>
		</a>
	</div>
	<div class="wpsp-col-sm-3 wpsp-col-xs-6">
		<a class="wpsp-colorBox wpsp-orangebox wpsp-teacherInfo" <?php if($current_user_role == 'parent'  || $current_user_role == 'student'){ }else {?> href="<?php echo wpsp_admin_url();?>sch-teacher" <?php } ?>>
			<span class="wpsp-colorBox-title"><?php echo apply_filters('wpsp_sidebar_teacher_title_menu',esc_html__('Doctors','WPSchoolPress')); ?></span>
			<h4 class="wpsp-colorBox-head"><?php echo isset($teachercount->countteacher)  ?  intval($teachercount->countteacher) : 0; ?><sup>+</sup></h4>
		</a>
	</div>
	<div class="wpsp-col-sm-3 wpsp-col-xs-6">
		<a class="wpsp-colorBox wpsp-yellowbox wpsp-parentsInfo"<?php if($current_user_role == 'parent'  || $current_user_role == 'student'){ }else {?>  href="<?php echo wpsp_admin_url();?>sch-parent" <?php } ?>>
			<span class="wpsp-colorBox-title"><?php echo apply_filters('wpsp_sidebar_parent_title_menu',esc_html__('Nurses','WPSchoolPress')); ?></span>
			<h4 class="wpsp-colorBox-head"><?php echo isset($parentscount->countparents) ?  intval($parentscount->countparents) : 0; ?><sup>+</sup></h4>
		</a>
	</div>

	<div class="wpsp-col-sm-3 wpsp-col-xs-6">
		<a class="wpsp-colorBox wpsp-greenbox wpsp-classInfo" <?php if($current_user_role == 'parent'  || $current_user_role == 'student'){ }else {?> href="<?php echo wpsp_admin_url();?>sch-class" <?php } ?>>
			<span class="wpsp-colorBox-title"><?php echo apply_filters('wpsp_sidebar_classes_title_menu',esc_html__('Injuries/Sickness','WPSchoolPress'));?></span>
			<h4 class="wpsp-colorBox-head"><?php echo isset(  $users_count->clcount ) ?  intval($users_count->clcount) : 0; ?><sup>+</sup></h4>
		</a>
	</div>

	</div>
	<!-- Info boxes -->

	<?php if( $current_user_role=='administrator' || $current_user_role == 'parent' ){?> <div class="wpsp-row "><?php } else { ?>
	<div class="wpsp-row">
		<?php  } ?>
		<!-- Left col -->
		<div class="wpsp-col-lg-8  wpsp-col-xs-12">
			<div class="wpsp-card">
				<div class="wpsp-card-head">
					<div class="wpsp-left">
						<h3 class="wpsp-card-title">Bookings Calendar</h3>
					</div>
					
				</div>

				<div class="wpsp-card-body">
					<div id="multiple-events"></div>
				</div>
			</div>
		</div>
			
		<div id="eventContent" title="Event Details" style="display:none;">
			<div class="modal-content">
			<span class="close">&times;</span>
			<h4>Event Name :  <span id="viewEventTitle"></span></h4>
    	Start: <span id="eventStart"></span><br>
    	End: <span id="eventEnd"></span><br>


	</div>
</div>
	<?php
		wpsp_body_end();
		wpsp_footer();
	} else {
		echo WPSP_PERMISSION_MSG;
	}
 } else {
    include_once( WPSP_PLUGIN_PATH .'/includes/wpsp-login.php');
	}
?>
