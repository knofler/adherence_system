                       <?php
                       
                       $mytask=get_your_task($_SESSION['user_id']);
                       
                       //echo $_SESSION['user_id'];
                       //echo '<pre>',print_r($mytask),'</pre>';
                       
                       echo '<div class="dashboard">';
                       foreach($mytask as $each_task){
                         
                         echo
                         '<div class="each_task" id="',$each_task['task_id'],'">
                             <div class="div_name">
                                 <label>',$each_task['task_name'],'</label>
                             </div>
                             <div id="button_wrapper">
                                              <form class="task_form" id="form_start',$each_task['task_id'],'" action="process_forms.php" method="post">
                                                    <div class="ctrl_btn" id="start',$each_task['task_id'],'">
                                                        <input type="hidden" name="task_id" value="',$each_task['task_id'],'" />
                                                        <input name="task_start" type="hidden" id="start_time',$each_task['task_id'],'" value="" />
                                                        <input class="task_start" type="submit" id="start_submit',$each_task['task_id'],'"value="Start" />
                                                   </div>
                                              </form>    
                                              <form class="task_form" id="form_end',$each_task['task_id'],'" action="process_task.php" method="post">
                                                    <div class="ctrl_btn" id="end',$each_task['task_id'],'">
                                                        <input type="hidden" name="task_id" value="',$each_task['task_id'],'" />
                                                        <input name="task_end" type="hidden" id="end_time',$each_task['task_id'],'" value="" />
                                                        <input class="task_end" type="submit" id="end_submit',$each_task['task_id'],'" value="End" />
                                                    </div>
                                              </form>
                            </div>
                        </div>';                     
                       }
                       echo '</div>';
                       ?>