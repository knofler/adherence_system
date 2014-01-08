<?php

include 'init.php';

?>

<div class="report">
           
          <div class="each_task" id="task0">
                       <label>Phone</label>
                       <form class="task_form" id="form_start0" action="process_task.php" method="post">
                              <div class="ctrl_btn" id="start0">
                                     <input type="hidden" name="task_name" value="phone" />
                                     <input type="hidden" name="task_status" id="start_stat0" value="Start"/>
                                     <input type="hidden" name="task_start" id="start_time0" value=""/>
                                     <input type="submit" class="static_task_start" id=0 value="Start" />
                              </div>
                       </form>
                       <form class="task_form" id="form_end0" action="process_task.php" method="post">
                              <div class="ctrl_btn" id="end0">
                                     <input type="hidden" name="task_name" value="phone" />
                                      <input type="hidden" name="task_status" id="end_stat0" value="End"/>
                                     <input type="hidden" name="task_end" id="end_time0" value=""/>
                                     <input type="submit" class="static_task_end" id=0 value="End" />
                              </div>
                       </form>     
          </div>
           <div class="each_task" id="task1">
                       <label>Chat</label>
                       <form class="task_form" id="form_start1" action="process_task.php" method="post">
                              <div class="ctrl_btn" id="start1">
                                     <input type="hidden" name="task_name" value="chat" />
                                     <input type="hidden" name="task_status" id="start_stat0" value="Start"/>
                                     <input type="hidden" name="task_start" id="start_time1" value=""/>
                                     <input type="submit" class="static_task_start" id=1 value="Start" />
                              </div>
                       </form>
                       <form class="task_form" id="form_end1" action="process_task.php" method="post">
                              <div class="ctrl_btn" id="end1">
                                     <input type="hidden" name="task_name" value="chat" />
                                     <input type="hidden" name="task_status" id="end_stat1" value="End"/>
                                     <input type="hidden" name="task_end" id="end_time1" value=""/>
                                     <input type="submit" class="static_task_end" id=1 value="End" />
                              </div>
                       </form>     
          </div>
           <!--<small id="messageSent">Your message has been sent.</small>-->
</div>


                    
<?php
?>