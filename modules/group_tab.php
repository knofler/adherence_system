<?php
  $group_list=get_group();
  //MAIN GROUP TAB
     echo
      '<div class="tabDiv" id="member_group_show">';
    
    //CREATE GROUP     
    echo
         '
         <div id="top_display">
              <div id="gap_left_display"></div>
              <div id="menu_display">
                  <div class="admin_button" id="create_group_click">Create Group</div>
                  <div class="admin_button" id="assign_group_click">Assign Group</div>
              </div>
         </div>
        <div class="slidingDiv" id="create_group_show">               
            <article>
            <form class="crt_group_form" action="process_forms.php" method="post" enctype="multipart/form-data">      
            <fieldset class="group_fieldset">
            <legend>Create group</legend>
               <label for="group Name">Group Name</label>
               <input class="group_input" type="text" name="group_name" maxlength="55" required placeholder="group Name"/><br />
               <label for="Description">Description</label>
               <textarea class="group_teaxtArea" id="create_group" name="group_desc" rows="6" cols="35" maxlength="255" required placeholder="Write about the group "></textarea>';
               echo
               '</select><br />
         <label for="Group User">Add User</label>
         <select class="group_input" multiple id="e13" name="user_create[]" tabindex="-1">';      
         $user_list=get_user();
          foreach($user_list as $each_user){
            echo '<option value="',$each_user['user_id'],'">',$each_user['first_name'],'</option>';
          }
          echo
          '</select><br />
            <input class="group_input" id="button" type="submit" value="Create" />
            </fieldset>    
            </form>
            </article>
          </div>';
         
        //ASSIGN GROUP  
        echo
            '
                <div class="slidingDiv" id="assign_group_show">               
                <article>
                    <form class="crt_group_form" action="process_forms.php" method="post" enctype="multipart/form-data">      
                        <fieldset class="group_fieldset">
                            <legend>Assign group</legend>
                                <label for="group Name">Group Name</label>
                                    <select class="group_input" id="e9" name="group_id" tabindex="-1">';      
                                        $group_list=get_group();
                                         foreach($group_list as $each_group){
                                           echo '<option value="',$each_group['group_id'],'">',$each_group['group_name'],'</option>';
                                         }
                             echo
                                    '</select><br />
                                        <label for="Group User">Add User</label>
                                            <select class="group_input" multiple id="e5" name="user_assign[]" tabindex="-1">';      
                                            $user_list=get_user();
                                                foreach($user_list as $each_user){
                                                  echo '<option value="',$each_user['user_id'],'">',$each_user['first_name'],'</option>';
                                                }
                            echo
                                    '</select><br />
                                    <input class="group_input" id="button" type="submit" value="Assign" />
                        </fieldset>    
                    </form>
                </article>
            </div>';
    
          //VIEW GROUPS
        foreach ($group_list as $each_group){
          echo '
           <div class="member_group">
           <div class="each_item" id="group_item">
                <div class="click_group" id="',$each_group['group_id'],'">',$each_group['group_name'],'</div>
                <div class="edtdel_button" id="edit_click',$each_group['group_id'],'">Edit</div>
                 <div class="edtdel_button" id="',$each_group['group_id'],'">Delete</div> 
           </div>';
           
          //EDIT group
             echo '<div class="slidingEditDiv" id="editslide',$each_group['group_id'],'">
                    <article>
                    <form class="crt_group_form" action="process_edit.php?group_id=',$each_group['group_id'],'" method="post"> 
                    <fieldset class="group_fieldset">
                    <legend class="group_legend">Edit Group</legend>
                    <label for="group Name"></label>
                    <input class="group_input" type="text" name="group_name" maxlength="55" required value="',ucfirst(strtolower($each_group['group_name'])),'"/><br />
                    <label for="Description"></label>
                    <textarea class="group_teaxtArea" id="create_group" name="group_description" rows="6" cols="35" maxlength="255" required>',ucfirst(strtolower($each_group['group_desc'])),'</textarea><br/>
                    <input class="group_input" id="button" type="submit" value="Edit" />
                    </fieldset>    
                    </form>
                    </article>
                    </div>';
            
          echo '<div class="show_group" id="group_displayDiv',$each_group['group_id'],'">
                    <div id="info">
                    <table class="member_table">
                          <tr class="tr_mem_head">';
                            $name=get_name($each_group['group_creator']);
                                foreach ($name as $each_name){
                                  echo  '<td class="td_mem_head" colspan=2>Created By: ',$each_name['fname'],' ',$each_name['lname'],'</td>';
                                }
                           echo 
                          '</tr>
                          <tr class="tr_mem_head">
                              <td class="td_mem_head_btm" colspan=2>Created on: ',date("d-m-Y",$each_group['group_create_time']),'</td>
                          </tr>
                          <tr class="tr_head">
                              <td class="td_mem_result" colspan=2>',$each_group['group_desc'],'</td>
                          </tr>
                      </table>
                      </div>';
                   echo '
                      <div id="member">
                      <table class="internal_table">
                        <tr class="tr_int_head">
                          <td class="td_mem_head">Members</td>
                          </tr>
                          <tr class="tr_int_head">
                          <td class="td_int_head">Group</td>
                          <td class="td_int_head">User</td>
                          </tr>
                          ';
                          //print_r($each_group['group_id']);
                            $group_member_list=get_group_member($each_group['group_id']);
                                foreach ($group_member_list as $each_member){
                                  $user_list=$each_member['user_id'];
                                  
                                  //get user name and group name
                                  $user_name=get_name($user_list);
                                 
                                  echo '<tr class="tr_int_result">
                                  <td class="td_int_result">',$each_group['group_name'],'</td>';
                                 
                                  foreach ($user_name as $sub_name){
                                    echo'<td class="td_int_result">',$sub_name['fname'],' ',$sub_name['lname'],'</td>';
                                  }//end of user_list foreach 
                                
                              }//end of memberlist foreach
                                echo '</tr>
                      </table>
                      </div>';
               echo '   </div>
                  </div>';
        }//end of foreach
  echo
      '
      </div>
      </div>';
        ?>