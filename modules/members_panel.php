    <?php?>
    
    <div class="admin_panel" id="view">
        <!--VIEW TASK-->
        <?php
        $task_list=get_task();
        echo    
        '<div class="member_task_click">Task</div>
            <div class="slidingDiv" id="member_task_show">               
                
                <table class="dis_table">
                <tr class="tr_head">
                <td class="td_head">Task ID</td>
                <td class="td_head">Task Name</td>
                <td class="td_head">Task Detail</td>
                <td class="td_head">Task create time</td>
                <td class="td_head">Task Creator</td>
                </tr>';
                foreach ($task_list as $each_task){
                  echo '<tr>
                  <td class="td_result">',$each_task['task_id'],'</td>
                  <td class="td_result">',$each_task['task_name'],'</td>
                  <td class="td_result">',$each_task['task_desc'],'</td>
                  <td class="td_result">',date("d-m-Y",$each_task['task_create_time']),'</td>';
                    $name=get_name($each_task['task_creator']);
                    foreach ($name as $each_name){
                      echo  '<td class="td_result">',$each_name['fname'],' ',$each_name['lname'],'</td>';
                    }
                 echo 
                  '</tr>';
                }
                
                echo '</table>
            </div>';
        ?>
            
  <!--VIEW TEMPLATE-->
  <?php
  $template_list=get_template();
     echo
    '<div class="member_template_click">Template</div>
      <div class="slidingDiv" id="member_template_show">';
        foreach ($template_list as $each_template){
          echo '
           <div class="click_template" id="',$each_template['template_id'],'">',$each_template['template_name'],'</div>';
          echo '<div class="show_template" id="template_displayDiv',$each_template['template_id'],'">
                    <div id="info">
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
                          //print_r($each_template['template_id']);
                            $member_list=get_template_member($each_template['template_id']);
                                foreach ($member_list as $each_member){
                                  $group_list=$each_member['group_id'];
                                  $user_list=$each_member['user_id'];
                                  
                                  //get user name and group name
                                  $user_name=get_name($user_list);
                                  $group_name=get_group_name($group_list);
                                  echo '<tr class="tr_int_result">';
                                  foreach($group_name as $sub_group){
                                  
                                  echo '<td class="td_int_result">',$sub_group['group_name'],'</td>';
                                  }//end of group_name foreach
                                  foreach ($user_name as $sub_name){
                                    echo'<td class="td_int_result">',$sub_name['fname'],' ',$sub_name['lname'],'</td>';
                                  }//end of user_list foreach 
                                
                              }//end of memberlist foreach
                                echo '</tr>
                      </table>
                      </div>';
                      
                      echo '
                      <div id="task">
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
                                  $task_detail=get_task($each_member['task_id']);
                                  echo '<tr class="tr_int_result">';
                                  foreach($task_detail as $task_each){
                                  
                                  echo '<td class="td_int_result">',$task_each['task_name'],'</td>';
                                  $name=get_name($task_each['task_creator']);
                                          foreach ($name as $each_name){
                                            echo  '<td class="td_int_result">',$each_name['fname'],' ',$each_name['lname'],'</td>';
                                          }
                                   echo '<td class="td_int_result">',date("d-m-Y",$task_each['task_create_time']),'</td>
                                    </tr>';
                                  }
                              }//end of memberlist foreach
                                echo '
                      </table>
                      </div>
                  </div>';
        }//end of foreach
  echo
      '</div>';
        ?>
            
        <!--VIEW group-->
        <?php
        $group_list=get_group();
        echo
            '<div class="member_group_click">Group</div>
            <div class="slidingDiv" id="member_group_show">               
               <table class="dis_table">
                <tr class="tr_head">
                <td class="td_head">Group ID</td>
                <td class="td_head">Group Name</td>
                <td class="td_head">Group Detail</td>
                <td class="td_head">Group create time</td>
                <td class="td_head">Group Creator</td>
                </tr>';
                foreach ($group_list as $each_group){
                  echo '<tr>
                  <td class="td_result">',$each_group['group_id'],'</td>
                  <td class="td_result">',$each_group['group_name'],'</td>
                  <td class="td_result">',$each_group['group_desc'],'</td>
                  <td class="td_result">',date("d-m-Y",$each_group['group_create_time']),'</td>';
                    $name=get_name($each_group['group_creator']);
                    foreach ($name as $each_name){
                      echo  '<td class="td_result">',$each_name['fname'],' ',$each_name['lname'],'</td>';
                    }
                 echo 
                  '</tr>';
                }
                
                echo '</table>
            </div>';
        ?>
    
    </div>
    <?php?>