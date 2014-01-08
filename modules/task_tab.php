<?php
  $task_list=get_task();
  //MAIN TASK TAB
     echo
      '<div class="tabDiv" id="member_task_show">';
    
    //CREATE TASK     
    echo
         '
         <div id="top_display">
              <div id="gap_left_display"></div>
              <div id="menu_display">
                  <div class="admin_button" id="create_task_click">Create Task</div>
                  <div class="admin_button" id="assign_task_click">Assign Task</div>
              </div>
         </div>
         <div id="main_display">
            <div class="slidingDiv" id="create_task_show">               
               <article>
               <form class="crt_task_form" action="process_forms.php" method="post" enctype="multipart/form-data">      
               <fieldset class="task_fieldset">
                    <legend>Create Task</legend>
                    <label for="Task Name">Task Name</label>
                    <input class="task_input" type="text" name="task_name" maxlength="55" required placeholder="Task Name"/><br />
                    <label for="Description">Description</label>
                    <textarea class="task_teaxtArea" id="create_task" name="task_desc" rows="6" cols="35" maxlength="255" required placeholder="Write about the task "></textarea><br/>
                    <input class="task_input" id="button" type="submit" value="Create" />
                    </fieldset>    
                    </form>
                    </article>
            </div>';
     
        //ASSIGN TASK
        echo    
        '
            <div class="slidingDiv" id="assign_task_show">               
                <article>
                    <form class="crt_task_form" action="process_forms.php" method="post" enctype="multipart/form-data">      
                        <fieldset class="task_fieldset">
                            <legend>Assign Task</legend>
                               <label for="Task Name">Task Name</label>
                                  <select class="task_input" id="e4" name="task_id" tabindex="-1">';      
                                        $task_list=get_task();
                                            foreach($task_list as $each_task){
                                              echo '<option value="',$each_task['task_id'],'">',$each_task['task_name'],'</option>';
                                            }
                             echo
                                    '</select><br />
                                        <input type="radio" id="radio_task_group" name="task_member" value="group">Group
                                        <input type="radio" id="radio_task_user" name="task_member" value="user">User
                                        <div id="show_task_group">
                                            <label for="User Group">Add Group</label>
                                                <select class="template_input" multiple id="e19" name="group_assign[]" tabindex="-1">';      
                                                $group_list=get_group();
                                                foreach($group_list as $each_group){
                                                    echo '<option value="',$each_group['group_id'],'">',$each_group['group_name'],'</option>';
                                                 }
                            echo    
                                                '</select>
                                        </div>
                                        <div id="show_task_user">
                                            <label for="template User">Add User</label>
                                                <select class="task_input" multiple id="e10_3" name="user_task[]" tabindex="-1">';      
                                                    $user_list=get_user();
                                                    foreach($user_list as $each_user){
                                                        echo '<option value="',$each_user['user_id'],'">',$each_user['first_name'],'</option>';
                                                    }
                            echo
                                                '</select><br />
                                        </div>
                                        <div><input class="template_input" id="button" type="submit" value="Assign" /></div>
                        </fieldset>    
                    </form>
                </article>
            </div>';
    
          //VIEW TASK
        foreach ($task_list as $each_task){
          echo '
           <div class="member_task">
           <div class="each_item" id="task_item">
                  <div class="click_task" id="',$each_task['task_id'],'">',$each_task['task_name'],'</div>
                  <div class="edtdel_button" id="edit_click',$each_task['task_id'],'">Edit</div>
                 <div class="edtdel_button" id="',$each_task['task_id'],'">Delete</div>
            </div>';
            
           //EDIT task
             echo '<div class="slidingEditDiv" id="editslide',$each_task['task_id'],'">
                    <article>
                    <form class="crt_task_form" action="process_edit.php?task_id=',$each_task['task_id'],'" method="post"> 
                    <fieldset class="task_fieldset">
                    <legend class="task_legend">Edit Task</legend>
                    <label for="task Name"></label>
                    <input class="task_input" type="text" name="task_name" maxlength="55" required value="',ucfirst(strtolower($each_task['task_name'])),'"/><br />
                    <label for="Description"></label>
                    <textarea class="task_teaxtArea" id="create_task" name="task_description" rows="6" cols="35" maxlength="255" required>',ucfirst(strtolower($each_task['task_desc'])),'</textarea><br/>
                    <input class="task_input" id="button" type="submit" value="Edit" />
                    </fieldset>    
                    </form>
                    </article>
                    </div>';
                    
                    
          echo '<div class="show_task" id="task_displayDiv',$each_task['task_id'],'">
                    <div id="info">
                    <table class="member_table">
                          <tr class="tr_mem_head">';
                            $name=get_name($each_task['task_creator']);
                                foreach ($name as $each_name){
                                  echo  '<td class="td_mem_head" colspan=2>Created By: ',$each_name['fname'],' ',$each_name['lname'],'</td>';
                                }
                           echo 
                          '</tr>
                          <tr class="tr_mem_head">
                              <td class="td_mem_head_btm" colspan=2>Created on: ',date("d-m-Y",$each_task['task_create_time']),'</td>
                          </tr>
                          <tr class="tr_head">
                              <td class="td_mem_result" colspan=2>',$each_task['task_desc'],'</td>
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
                          <td class="td_int_head">Template</td>
                          <td class="td_int_head">User</td>
                          </tr>
                          ';
                          //print_r($each_member['user_id']);
                            $task_member_list=get_task_member($each_task['task_id']);
                                foreach ($task_member_list as $each_member){
                                   //print_r($each_member['user_id']);
                                   //  print_r($each_member['template_id']);
                                  $template_list=$each_member['template_id'];
                                  $user_member_list=$each_member['user_id'];
                                  
                                  //get user name and group name
                                  $user_name=get_name($user_member_list);
                                  $template_name=get_template_name($template_list);
                                  echo '<tr class="tr_int_result">';
                                  foreach($template_name as $sub_template){
                                  
                                  echo '<td class="td_int_result">',$sub_template['template_name'],'</td>';
                                  }//end of group_name foreach
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