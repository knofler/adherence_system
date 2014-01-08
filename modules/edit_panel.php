    <?php?>
    
    <div class="admin_panel" id="edit">
        
        <?php
        echo    
        '<div class="edit_task_click">Edit Task</div>
            <div class="slidingDiv" id="edit_task_show">               
                <article>
                    <form class="crt_task_form" action="process_forms.php" method="post" enctype="multipart/form-data">      
                        <fieldset class="task_fieldset">
                            <legend>Edit Task</legend>
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
                                                <select class="template_input" multiple id="e19" name="group_edit[]" tabindex="-1">';      
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
                                        <div><input class="template_input" id="button" type="submit" value="Edit" /></div>
                        </fieldset>    
                    </form>
                </article>
            </div>';
        ?>
            
        <div class="edit_template_click">Edit template</div>
        
        <?php  
        echo
            '<div class="slidingDiv" id="edit_template_show">               
                <article>
                    <form class="crt_template_form" action="process_forms.php" method="post" enctype="multipart/form-data">      
                        <fieldset class="template_fieldset">
                            <legend>Edit template</legend>
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
                                                <select class="template_input" multiple id="e10" name="group_edit[]" tabindex="-1">';      
                                                    $group_list=get_group();
                                                     foreach($group_list as $each_group){
                                                       echo '<option value="',$each_group['group_id'],'">',$each_group['group_name'],'</option>';
                                                    }
                            echo
                                    '</select>
                                        </div>
                                        <div id="show_user">
                                            <label for="template User">Add User</label>
                                                <select class="template_input" multiple id="e10_2" name="user_template[]" tabindex="-1">';      
                                                    $user_list=get_user();
                                                     foreach($user_list as $each_user){
                                                       echo '<option value="',$each_user['user_id'],'">',$each_user['first_name'],'</option>';
                                                     }
                            echo
                                    '</select><br />
                                        </div>
                                        <div><input class="template_input" id="button" type="submit" value="Edit" /></div>
                        </fieldset>    
                    </form>
                </article>
            </div>';
        ?>
            
        <div class="edit_group_click">Edit Group</div>
        
        <?php  
        echo
            '<div class="slidingDiv" id="edit_group_show">               
                <article>
                    <form class="crt_group_form" action="process_forms.php" method="post" enctype="multipart/form-data">      
                        <fieldset class="group_fieldset">
                            <legend>Edit group</legend>
                                <label for="group Name">Group Name</label>
                                    <select class="group_input" id="e9" name="group_id" tabindex="-1">';      
                                        $group_list=get_group();
                                         foreach($group_list as $each_group){
                                           echo '<option value="',$each_group['group_id'],'">',$each_group['group_name'],'</option>';
                                         }
                             echo
                                    '</select><br />
                                        <label for="Group User">Add User</label>
                                            <select class="group_input" multiple id="e5" name="user_edit[]" tabindex="-1">';      
                                            $user_list=get_user();
                                                foreach($user_list as $each_user){
                                                  echo '<option value="',$each_user['user_id'],'">',$each_user['first_name'],'</option>';
                                                }
                            echo
                                    '</select><br />
                                    <input class="group_input" id="button" type="submit" value="Edit" />
                        </fieldset>    
                    </form>
                </article>
            </div>';
        ?>
    
    </div>
    <?php?>