    <?php?>
    
    <div class="admin_panel" id="view">
        <!--VIEW TASK-->
        <?php
        $task_list=get_task();
        echo    
        '<div class="view_task_click">View Task</div>
            <div class="slidingDiv" id="view_task_show">               
                
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
            '<div class="view_template_click">View Template</div>
            <div class="slidingDiv" id="view_template_show">               
               <table class="dis_table">
                <tr class="tr_head">
                <td class="td_head">Template ID</td>
                <td class="td_head">Template Name</td>
                <td class="td_head">Template Detail</td>
                <td class="td_head">Template create time</td>
                <td class="td_head">Template Creator</td>
                </tr>';
                foreach ($template_list as $each_template){
                  echo '<tr>
                  <td class="td_result">',$each_template['template_id'],'</td>
                  <td class="td_result">',$each_template['template_name'],'</td>
                  <td class="td_result">',$each_template['template_desc'],'</td>
                  <td class="td_result">',date("d-m-Y",$each_template['template_create_time']),'</td>';
                    $name=get_name($each_template['template_creator']);
                    foreach ($name as $each_name){
                      echo  '<td class="td_result">',$each_name['fname'],' ',$each_name['lname'],'</td>';
                    }
                 echo 
                  '</tr>';
                }
                
                echo '</table>
            </div>';
        ?>
            
        <!--VIEW group-->
        <?php
        $group_list=get_group();
        echo
            '<div class="view_group_click">View Group</div>
            <div class="slidingDiv" id="view_group_show">               
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