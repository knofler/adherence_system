<?php

?>

<div class="dashboard">
           
          <div class="add_task" id="add_id">Add Task</div>
          <div class="gap-top"><label></label></div>
          <div class="each_task" id="task0">
                       <div class="div_name"><label>Phone</label></div>
                       <div id="button_wrapper">
                       <form class="task_form" id="form_start0" action="process_task.php" method="post">
                              <div class="ctrl_btn" id="start0">
                                     <input type="hidden" name="task_name" value="phone" />
                                     <input type="hidden" name="task_status" id="start_stat0" value="Start"/>
                                     <input type="hidden" name="task_start" id="start_time0" value=""/>
                                     <input type="submit" class="static_task_start" id=start_submit0 value="Start" />
                              </div>
                       </form>
                       <form class="task_form" id="form_end0" action="process_task.php" method="post">
                              <div class="ctrl_btn" id="end0">
                                     <input type="hidden" name="task_name" value="phone" />
                                      <input type="hidden" name="task_status" id="end_stat0" value="End"/>
                                     <input type="hidden" name="task_end" id="end_time0" value=""/>
                                     <input type="submit" class="static_task_end" id=end_submit0 value="End" />
                              </div>
                       </form>
                    </div>
          </div>
           <div class="each_task" id="task1">
                       <div class="div_name"><label>Chat</label></div>
                       <div id="button_wrapper">
                       <form class="task_form" id="form_start1" action="process_task.php" method="post">
                              <div class="ctrl_btn" id="start1">
                                     <input type="hidden" name="task_name" value="chat" />
                                     <input type="hidden" name="task_status" id="start_stat0" value="Start"/>
                                     <input type="hidden" name="task_start" id="start_time1" value=""/>
                                     <input type="submit" class="static_task_start" id=start_submit1 value="Start" />
                              </div>
                       </form>
                       <form class="task_form" id="form_end1" action="process_task.php" method="post">
                              <div class="ctrl_btn" id="end1">
                                     <input type="hidden" name="task_name" value="chat" />
                                     <input type="hidden" name="task_status" id="end_stat1" value="End"/>
                                     <input type="hidden" name="task_end" id="end_time1" value=""/>
                                     <input type="submit" class="static_task_end" id=end_submit1 value="End" />
                              </div>
                       </form>
                       </div>
          </div>
           <!--<small id="messageSent">Your message has been sent.</small>-->
</div>


                    
<?php
?>