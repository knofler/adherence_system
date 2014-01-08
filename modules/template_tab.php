<?php
  $template_list=get_template();
  
//MAIN TEMPLATE TAB   
echo '<div class="tabDiv" id="member_template_show">';
    
    //TOP DISPLAY DIV  
    echo
    '<div id="top_display">
      <div id="gap_left_display"></div>
      <div id="menu_display">
        <div class="admin_button" id="create_template_click">Create Template</div>
        <div class="admin_button" id="assign_template_click">Assign template</div>
         <div class="admin_button" id="modify_template_click">Modify template</div>
      </div>';//end of menu_display div
    echo
    '</div>';//end of top display div
    //MAIN DISPLAY DIV          
  echo
  '<div id="main_display">';
    //CREATE TEMPLATE  
      echo
      '<div class="slidingDiv" id="create_template_show">
          <article>
            <form class="crt_template_form" action="process_forms.php" method="post" enctype="multipart/form-data">      
              <fieldset class="template_fieldset">
                <legend>Create Template</legend>
                  <label for="template Name">Template Name</label>
                    <input class="template_input" type="text" name="template_name" maxlength="55" required placeholder="template Name"/><br />
                  <label for="Description">Description</label>
                    <textarea class="template_teaxtArea" id="create_template" name="template_desc" rows="6" cols="35" maxlength="255" required placeholder="Write about the template "></textarea><br/>';
      $task_list=get_task();
      echo
                  '<label for="Template Task">Add Task</label>
                    <select class="template_input" multiple id="e9" name="task[]" tabindex="-1">';      
                        foreach($task_list as $each_task){
                          echo '<option value="',$each_task['task_id'],'">',$each_task['task_name'],'</option>';
                        }
            echo
                    '</select><br /> 
                    <input class="template_input" id="button" type="submit" value="Create" />
            </fieldset>    
          </form>
        </article>
    </div>';//end create_template_show div

  //ASSIGN TEMPLATE  
  echo
    '<div class="slidingDiv" id="assign_template_show">               
        <article>
            <form class="crt_template_form" action="process_forms.php" method="post" enctype="multipart/form-data">      
                <fieldset class="template_fieldset">
                    <legend>Assign template</legend>
                        <label for="template Name">Template Name</label>
                            <select class="template_input" id="e3" name="template_id" tabindex="-1">';      
                                $template_list=get_template();
                                 foreach($template_list as $each_template){
                                   echo '<option value="',$each_template['template_id'],'">',$each_template['template_name'],'</option>';
                                 }
                    echo
                            '</select><br />
                                <input type="radio" id="radio_group" name="template_member" value="group">Group
                                <input type="radio" id="radio_user" name="template_member" value="user">User 
                                  <div id="show_group">
                                      <label for="User Group">Add Group</label>
                                          <select class="template_input" multiple id="e10" name="group_assign[]" tabindex="-1">';      
                                              $group_list=get_group();
                                               foreach($group_list as $each_group){
                                                 echo '<option value="',$each_group['group_id'],'">',$each_group['group_name'],'</option>';
                                              }
                                  echo '</select>
                                  </div>
                                  <div id="show_user">
                                      <label for="template User">Add User</label>
                                         <select class="template_input" multiple id="e10_2" name="user_template[]" tabindex="-1">';      
                                              $user_list=get_user();
                                               foreach($user_list as $each_user){
                                                 echo '<option value="',$each_user['user_id'],'">',$each_user['first_name'],'</option>';
                                               }
                                  echo '</select><br />
                                  </div>
                                  <div><input class="template_input" id="button" type="submit" value="Assign" /></div>
                </fieldset>    
            </form>
        </article>
    </div>';//end assign_template_show div
    
    //MODIFY TEMPLATE  
  echo
    '<div class="slidingDiv" id="modify_template_show">               
        <article>
            <form class="crt_template_form" action="process_forms.php" method="post" enctype="multipart/form-data">      
                <fieldset class="template_fieldset">
                    <legend>Modify Template</legend>
                        <label for="template Name">Template Name</label>
                            <select class="template_input" id="e3" name="template_id" tabindex="-1">';      
                                $template_list=get_template();
                                 foreach($template_list as $each_template){
                                   echo '<option value="',$each_template['template_id'],'">',$each_template['template_name'],'</option>';
                                 }
                echo
                  '
                  </select>
                  <label for="Template Task">Add Task</label>
                    <select class="template_input" multiple id="e8_2" name="task[]" tabindex="-1">';      
                        foreach($task_list as $each_task){
                          echo '<option value="',$each_task['task_id'],'">',$each_task['task_name'],'</option>';
                        }
            echo
                    '</select><br /> 
                                  <div><input class="template_input" id="button" type="submit" value="modify" /></div>
                </fieldset>    
            </form>
        </article>
    </div>';//end modify_template_show div        
    
    
  //VIEW TEMPLATES
  foreach ($template_list as $each_template){
  echo '
  <div class="member_template">
      <div class="each_item" id="template_item">
        <div class="click_template" id="',$each_template['template_id'],'">',$each_template['template_name'],' </div>  
        <div class="edtdel_button" id="edit_click',$each_template['template_id'],'">Edit</div>
        <div class="edtdel_button" id="',$each_template['template_id'],'">Delete</div>
      </div>';//end template item div
    //DISPLAY TEMPLATE DIV HERE  
    echo
    '<div class="show_template" id="template_displayDiv',$each_template['template_id'],'">';
      //DISPLAY TEMPLATE INFO
      echo  
        '<div id="info">
          <table class="member_table">
            <tr class="tr_mem_head">';
              $name=get_name($each_template['template_creator']);
                  foreach ($name as $each_name){
                    echo  '<td class="td_mem_head" colspan=2>Created By: ',$each_name['fname'],' ',$each_name['lname'],'</td>';
                  }
             echo 
            '</tr>
            <tr class="tr_mem_head">
                <td class="td_mem_head_btm" colspan=2>Created on: ',date("d-m-Y",$each_template['template_create_time']),'</td>
            </tr>
            <tr class="tr_head">
                <td class="td_mem_result" colspan=2>',$each_template['template_desc'],'</td>
            </tr>
          </table>
        </div>';//end info div
      //DISPLAY TEMPLATE MEMBER INFO                     
      echo
      '<div id="member">
        <table class="internal_table">
          <tr class="tr_int_head">
            <td class="td_mem_head">Members</td>
          </tr>
          <tr class="tr_int_head">
            <td class="td_int_head">Group</td>
            <td class="td_int_head">User</td>
          </tr>';
          //print_r($each_template['template_id']);
            $member_list=get_template_member($each_template['template_id']);
                foreach ($member_list as $each_member){
                  $group_list=$each_member['group_id'];
                  $user_list=$each_member['user_id'];
                  //get user name and group name
                  $user_name=get_name($user_list);
                  $group_name=get_group_name($group_list);
        echo
          '<tr class="tr_int_result">';
                  foreach($group_name as $sub_group){
          echo
            '<td class="td_int_result">',$sub_group['group_name'],'</td>';
                  }//end of group_name foreach
                  foreach ($user_name as $sub_name){
          echo
            '<td class="td_int_result">',$sub_name['fname'],' ',$sub_name['lname'],'</td>';
                  }//end of user_list foreach 
                
                }//end of memberlist foreach
        echo
          '</tr>
      </table>
    </div>';//end member div
    //DISPLAY TEMPLATE TASK INFO                                     
      echo
      '<div id="task">
        <table class="task_table">
          <tr class="tr_int_head">
            <td class="td_mem_head">Tasks</td>
          </tr>
          <tr class="tr_int_head">
              <td class="td_int_head">Task</td>
              <td class="td_int_head">Creator</td>
              <td class="td_int_head">Date</td>
          </tr>';
          //print_r($each_template['template_id']);
          $task_list=get_template_task($each_template['template_id']);
              foreach ($task_list as $each_member){
              //print_r($each_member['task_id']);
              //get task name and group name
              $task_detail=get_task_name($each_member['task_id']);
            echo
            '<tr class="tr_int_result">';
                    foreach($task_detail as $task_each){
                     //print_r($task_each['task_name']);
                    echo
                    '<td class="td_int_result">',$task_each['task_name'],'</td>';
                      $name=get_name($task_each['task_creator']);
                          foreach ($name as $each_name){
                        echo
                        '<td class="td_int_result">',$each_name['fname'],' ',$each_name['lname'],'</td>';
                          }//end of name foreach
                    echo
                    '<td class="td_int_result">',date("d-m-Y",$task_each['task_create_time']),'</td>
                </tr>';
                    }//end of $task_each foreach
              }//end of memberlist foreach
          echo
        '</table>
      </div>';//end task div  
  echo'
  </div>';//END MEMBER TEMPLATE DIV
  
    //EDIT TEMPLATE
   echo '<div class="slidingEditDiv" id="editslide',$each_template['template_id'],'">
          <article>
          <form class="crt_template_form" action="process_forms.php?template_id=',$each_template['template_id'],'" method="post"> 
          <fieldset class="template_fieldset">
          <legend>Edit Template</legend>
          <label for="template Name"></label>
          <input class="template_input" type="text" name="template_name" maxlength="55" required value="',ucfirst(strtolower($each_template['template_name'])),'"/><br />
          <label for="Description"></label>
          <textarea class="template_teaxtArea" id="create_template" name="template_description" rows="6" cols="35" maxlength="255" required>',ucfirst(strtolower($each_template['template_desc'])),'</textarea><br/>
         ';
             $each_task_list=get_template_task($each_template['template_id']);
                      foreach ($each_task_list as $each_member){
                          //print_r($each_member['task_id']);
                          //get task name and group name
                          $task_detail=get_task_name($each_member['task_id']);
                          echo '<tr class="tr_int_result">';
                                foreach($task_detail as $task_each){
                                 //print_r($task_each['task_name']);
                                echo '<div class="task_block">',$task_each['task_name'],'</div>';
                                };
                      };
     echo
          '<br />
          <input class="template_input" id="button" type="submit" value="Edit" />
          </fieldset>    
        </form>
      </article>
    </div>';//end of edit_template div
  
  
  echo
'</div>';//END OF MAIN_DISPLAY DIV
  }//end of member_template foreach


    echo
      '</div>';//END member_template_show
    echo  
    '</div>';
        ?>