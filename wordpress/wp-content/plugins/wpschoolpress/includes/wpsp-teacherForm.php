<?php if (!defined( 'ABSPATH' ) )exit('No Such File');?>
<!-- This form is used for Add New Teacher -->
<div id="formresponse"></div>
<form name="TeacherEntryForm" id="TeacherEntryForm" method="post">
   <div class="wpsp-row">
        <div class="wpsp-col-sm-12">
            <div class="wpsp-card">
                 <div class="wpsp-card-head">
                    <h3 class="wpsp-card-title"><?php echo apply_filters( 'wpsp_teacher_title_personal_detail', esc_html__( 'Personal Details', 'WPSchoolPress' )); ?></h3>
                </div>
                <div class="wpsp-card-body">
                    <?php wp_nonce_field( 'TeacherRegister', 'tregister_nonce', '', true ) ?>
                    <div class="wpsp-row">
                    <?php
                      do_action('wpsp_before_teacher_personal_detail_fields');
                      $is_required_item = apply_filters('wpsp_teacher_personal_is_required',array());
                     ?>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label">
                                  <?php $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Profile Image","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['displaypicture'])){
                                        echo esc_html($item['displaypicture'],"WPSchoolPress");
                                  }else{
                                      echo esc_html("Profile Image","WPSchoolPress");
                                  }
                                  ?>
                                </label>
                                <div class="wpsp-profileUp">
                                    <img class="wpsp-upAvatar" id="img_preview_teacher"  src="<?php echo WPSP_PLUGIN_URL . 'img/default_avtar.jpg'?>">
                                    <div class="wpsp-upload-button"><i class="fa fa-camera"></i><input name="displaypicture" class="wpsp-file-upload" id="displaypicture" type="file" accept="image/jpg, image/jpeg" /></div>
                                </div>
                                <p class="wpsp-form-notes">* Only JPEG and JPG supported, * Max 3 MB Upload </p>
                                <label id="displaypicture-error" class="error" for="displaypicture" style="display: none;">Please Upload Profile Image</label>
                                <p id="test" style="color:red"></p></div>
                        </div>
                        <div class="wpsp-col-lg-9 wpsp-col-md-8 wpsp-col-sm-12 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="gender">
                                  <?php $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Gender","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['s_gender'])){
                                        echo esc_html($item['s_gender'],"WPSchoolPress");
                                      }else{
                                        echo esc_html("Gender","WPSchoolPress");
                                      }
                                  ?></label>
                                <div class="wpsp-radio-inline">
                                    <div class="wpsp-radio">
                                        <input type="radio" name="Gender" value="Male" checked="checked" id="Male">
                                        <label for="Male">Male</label>
                                    </div>
                                    <div class="wpsp-radio">
                                        <input type="radio" name="Gender" value="Female" id="Female">
                                        <label for="Female">Female</label>
                                    </div>
                                    <div class="wpsp-radio">
                                        <input type="radio" name="Gender" value="other" id="other">
                                        <label for="other">Other</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix wpsp-ipad-show"></div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="firstname">
                                  <?php
                                  $pl = "";
                                  $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("First Name","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['firstname'])){
                                        echo $pl = esc_html($item['firstname'],"WPSchoolPress");
                                  }else{
                                      echo $pl = esc_html("First Name","WPSchoolPress");

                                  }

                                  /*Check Required Field*/
                                  if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['firstname'])){
                                      $is_required =  $is_required_item['firstname'];
                                  }else{
                                      $is_required = true;
                                  }
                                  ?>
                                  <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="firstname" name="firstname" placeholder="<?php echo $pl; ?>">
                                <input type="hidden"  id="wpsp_locationginal" value="<?php echo admin_url();?>"/>
                            </div>
                        </div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="middlename">
                                  <?php
                                  $pl = "";
                                  $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Middle Name","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['middlename'])){
                                        echo $pl = esc_html($item['middlename'],"WPSchoolPress");
                                  }else{
                                      echo $pl = esc_html("Middle Name","WPSchoolPress");

                                  }

                                  /*Check Required Field*/
                                  if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['firstname'])){
                                      $is_required =  $is_required_item['middlename'];
                                  }else{
                                      $is_required = false;
                                  }
                                  ?>
                                  <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="middlename" name="middlename" placeholder="<?php echo $pl; ?>">
                            </div>
                        </div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="lastname">
                                  <?php
                                  $pl = "";
                                  $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Last Name","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['lastname'])){
                                        echo $pl = esc_html($item['lastname'],"WPSchoolPress");
                                  }else{
                                      echo $pl = esc_html("Last Name","WPSchoolPress");

                                  }

                                  /*Check Required Field*/
                                  if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['lastname'])){
                                      $is_required =  $is_required_item['lastname'];
                                  }else{
                                      $is_required = true;
                                  }
                                  ?>
                                  <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="lastname" name="lastname" placeholder="<?php echo $pl; ?>">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="dateofbirth"><?php
                                  $pl = "";
                                  $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Date of Birth","WPSchoolPress"));
                                      if(isset($item['section']) && $item['section'] == "personal" && isset($item['Dob'])){
                                        echo $pl = esc_html($item['Dob'],"WPSchoolPress");
                                  }else{
                                      echo $pl = esc_html("Date of Birth","WPSchoolPress");

                                  }

                                  /*Check Required Field*/
                                  if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['Dob'])){
                                      $is_required =  $is_required_item['Dob'];
                                  }else{
                                      $is_required = false;
                                  }
                                  ?>
                                  <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                                <input type="text" class="wpsp-form-control select_date" data-is_required="<?php echo $is_required; ?>" id="Dob" name="Dob" placeholder="mm/dd/yyyy" readonly>
                            </div>
                        </div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                        </div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="phone"><?php
                                    $pl = "";
                                    $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Phone","WPSchoolPress"));
                                        if(isset($item['section']) && $item['section'] == "personal" && isset($item['Phone'])){
                                          echo $pl = esc_html($item['Phone'],"WPSchoolPress");
                                    }else{
                                        echo $pl = esc_html("Phone","WPSchoolPress");

                                    }

                                    /*Check Required Field*/
                                    if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['Phone'])){
                                        $is_required =  $is_required_item['Phone'];
                                    }else{
                                        $is_required = false;
                                    }
                                    ?>
                                      <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                  </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="phone" name="Phone" placeholder="(XXX)-(XXX)-(XXXX)">
                            </div>
                        </div>
                        <div class="wpsp-col-lg-3 wpsp-col-md-8 wpsp-col-sm-8 wpsp-col-xs-12">
                        </div>
                        <div class="wpsp-col-xs-12">
                            <hr />
                            <h4 class="card-title mt-5">Address</h4>
                        </div>
                        <div class="wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="Address">
                                  <?php
                                      $pl = "";
                                      $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Street Address","WPSchoolPress"));
                                          if(isset($item['section']) && $item['section'] == "personal" && isset($item['Address'])){
                                            echo $pl = esc_html($item['Address'],"WPSchoolPress");
                                      }else{
                                          echo $pl = esc_html("Street Address ","WPSchoolPress");

                                      }

                                      /*Check Required Field*/
                                      if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['Address'])){
                                          $is_required =  $is_required_item['Address'];
                                      }else{
                                          $is_required = true;
                                      }
                                      ?>
                                    <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                  </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" name="Address" class="wpsp-form-control" placeholder="<?php echo $pl; ?>" />
                            </div>
                        </div>
                        <div class="wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                           <div class="wpsp-form-group ">
                                <label class="wpsp-label" for="CityName">
                                  <?php
                                      $pl = "";
                                      $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("City Name","WPSchoolPress"));
                                          if(isset($item['section']) && $item['section'] == "personal" && isset($item['city'])){
                                            echo $pl = esc_html($item['city'],"WPSchoolPress");
                                      }else{
                                          echo $pl = esc_html("City Name","WPSchoolPress");

                                      }

                                      /*Check Required Field*/
                                      if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['city'])){
                                          $is_required =  $is_required_item['city'];
                                      }else{
                                          $is_required = false;
                                      }
                                      ?>
                                    <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                  </label>
                                <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="CityName" name="city" placeholder="<?php echo $pl; ?>" >
                            </div>
                        </div>
                        <div class="wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="Country"><?php
                                      $pl = "";
                                      $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Country","WPSchoolPress"));
                                          if(isset($item['section']) && $item['section'] == "personal" && isset($item['country'])){
                                            echo $pl = esc_html($item['country'],"WPSchoolPress");
                                      }else{
                                          echo $pl = esc_html("Country","WPSchoolPress");

                                      }

                                      /*Check Required Field*/
                                      if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['country'])){
                                          $is_required =  $is_required_item['country'];
                                      }else{
                                          $is_required = false;
                                      }
                                      ?>
                                    <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                  </label>
                                    <?php $countrylist = wpsp_county_list();?>
                                <select data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="Country" name="country">
                                    <option value="">Select Country</option>
                                    <?php
                                        foreach( $countrylist as $key=>$value ) { ?>
                                    <option value="<?php echo $value;?>"><?php echo $value;?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="wpsp-col-md-4 wpsp-col-sm-4 wpsp-col-xs-12">
                            <div class="wpsp-form-group">
                                <label class="wpsp-label" for="Zipcode">
                                    <?php
                                        $pl = "";
                                        $item =  apply_filters( 'wpsp_teacher_personal_title_item',esc_html("Pin Code","WPSchoolPress"));
                                            if(isset($item['section']) && $item['section'] == "personal" && isset($item['zipcode'])){
                                              echo $pl = esc_html($item['zipcode'],"WPSchoolPress");
                                        }else{
                                            echo $pl = esc_html("Post Code","WPSchoolPress");

                                        }

                                        /*Check Required Field*/
                                        if(isset($is_required_item['section']) && $is_required_item['section'] == "personal" && isset($is_required_item['zipcode'])){
                                            $is_required =  $is_required_item['zipcode'];
                                        }else{
                                            $is_required = false;
                                        }
                                        ?>
                                      <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span>
                                    </label>
                                <input type="text" class="wpsp-form-control" id="Zipcode" name="zipcode" placeholder="<?php echo $pl; ?>">
                            </div>
                        </div>
                        <?php  do_action('wpsp_after_teacher_personal_detail_fields'); ?>
                        <div class="wpsp-col-xs-12 wpsp-hidden-xs">
                            <button type="submit" class="wpsp-btn wpsp-btn-success" id="teacherform">Next</button>&nbsp;&nbsp;
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="wpsp-col-md-6 wpsp-col-sm-12">
        <div class="wpsp-card">
            <div class="wpsp-card-head">
                <h3 class="wpsp-card-title"><?php echo apply_filters( 'wpsp_teacher_title_account_detail', esc_html__( 'Account Information', 'WPSchoolPress' )); ?></h3>
            </div>
            <div class="wpsp-card-body">
              <?php  do_action('wpsp_before_teacher_account_detail_fields');
              /*Required field Hook*/
              $is_required_parent = apply_filters('wpsp_teacher_account_is_required',array());
              ?>
               <div class="wpsp-form-group">
                    <label class="wpsp-label" for="Email"><?php $pl = "";
                         $item =  apply_filters( 'wpsp_teacher_account_title_item',esc_html("Email Address","WPSchoolPress"));
                        if(isset($item['section']) && $item['section'] == "account" && isset($item['Email'])){
                              echo $pl = esc_html($item['Email'],"WPSchoolPress");

                        }else{
                            echo $pl = esc_html("Email Address","WPSchoolPress");
                        }
                        /*Check Required Field*/
                        if(isset($is_required_parent['section']) && $is_required_parent['section'] == "account" && isset($is_required_parent['Email'])){
                            $is_required =  $is_required_parent['Email'];
                        }else{
                            $is_required = true;
                        }
                        ?>
                        <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                    <input type="email" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="Email" name="Email" placeholder="<?php echo $pl; ?>">
                </div>
                <div class="wpsp-form-group">
                    <label class="wpsp-label" for="Username"><?php $pl = "";
                         $item =  apply_filters( 'wpsp_teacher_account_title_item',esc_html("Username","WPSchoolPress"));
                        if(isset($item['section']) && $item['section'] == "account" && isset($item['Username'])){
                              echo $pl = esc_html($item['Username'],"WPSchoolPress");

                        }else{
                            echo $pl = esc_html("Username","WPSchoolPress");
                        }
                        /*Check Required Field*/
                        if(isset($is_required_parent['section']) && $is_required_parent['section'] == "account" && isset($is_required_parent['Username'])){
                            $is_required =  $is_required_parent['Username'];
                        }else{
                            $is_required = true;
                        }
                        ?>
                        <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                    <input type="text" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="Username" name="Username" placeholder="<?php echo $pl; ?>">
                </div>
                <div class="wpsp-form-group">
                    <label class="wpsp-label" for="Password"><?php $pl = "";
                         $item =  apply_filters( 'wpsp_teacher_account_title_item',esc_html("Password","WPSchoolPress"));
                        if(isset($item['section']) && $item['section'] == "account" && isset($item['Password'])){
                              echo $pl = esc_html($item['Password'],"WPSchoolPress");

                        }else{
                            echo $pl = esc_html("Password","WPSchoolPress");
                        }
                        /*Check Required Field*/
                        if(isset($is_required_parent['section']) && $is_required_parent['section'] == "account" && isset($is_required_parent['Password'])){
                            $is_required =  $is_required_parent['Password'];
                        }else{
                            $is_required = true;
                        }
                        ?>
                        <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                    <input type="password" data-is_required="<?php echo $is_required; ?>" class="wpsp-form-control" id="Password" name="Password" placeholder="<?php echo $pl; ?>">
                </div>
                <div class="wpsp-form-group">
                    <label class="wpsp-label" for="ConfirmPassword">
                      <?php $pl = "";
                           $item =  apply_filters( 'wpsp_teacher_account_title_item',esc_html("Confirm Password","WPSchoolPress"));
                          if(isset($item['section']) && $item['section'] == "account" && isset($item['ConfirmPassword'])){
                                echo $pl = esc_html($item['ConfirmPassword'],"WPSchoolPress");

                          }else{
                              echo $pl = esc_html("Confirm Password","WPSchoolPress");
                          }
                          /*Check Required Field*/
                          if(isset($is_required_parent['section']) && $is_required_parent['section'] == "account" && isset($is_required_parent['ConfirmPassword'])){
                              $is_required =  $is_required_parent['ConfirmPassword'];
                          }else{
                              $is_required = true;
                          }
                          ?>
                      <span class="wpsp-required"><?php echo ($is_required)?"*":""; ?></span></label>
                    <input type="password" class="wpsp-form-control" id="ConfirmPassword" name="ConfirmPassword" placeholder="Confirm Password">
                </div>
                   <?php  do_action('wpsp_after_teacher_account_detail_fields'); ?>
                <div class="wpsp-hidden-xs">
                    <button type="submit" class="wpsp-btn wpsp-btn-success" id="teacherform">Next</button>&nbsp;&nbsp;
                </div>
            </div>
        </div>
    </div>

</div>
</form>
<!-- End of Add New Teacher Form -->
