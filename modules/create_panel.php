<?php
?>
  <div class="admin_panel" id="create">
      <div class="create_task_click">Create Task</div>
      <?php  
            echo
            '<div class="slidingDiv" id="create_task_show">               
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
         ?>
      
      <div class="create_template_click">Create Template</div>
      <?php  
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
               '
         <label for="Template Task">Add Task</label>
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
          </div>';
      ?>

      <div class="create_group_click">Create Group</div>
      <?php  
         echo
         '<div class="slidingDiv" id="create_group_show">               
            <article>
            <form class="crt_group_form" action="process_forms.php" method="post" enctype="multipart/form-data">      
            <fieldset class="group_fieldset">
            <legend>Create group</legend>
               <label for="group Name">Group Name</label>
               <input class="group_input" type="text" name="group_name" maxlength="55" required placeholder="group Name"/><br />
               <label for="Description">Description</label>
               <textarea class="group_teaxtArea" id="create_group" name="group_desc" rows="6" cols="35" maxlength="255" required placeholder="Write about the group "></textarea><br/>';
               echo
               '</select><br />
         <label for="Group User">Add User</label>
         <select class="group_input" multiple id="e3" name="user_create[]" tabindex="-1">';      
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
      ?>
   </div>
  <?php
?>