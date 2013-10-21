<?php echo $this->load->view('hf/header_view'); ?>
<!--
    Document   : index.php
    Created on : 21/10/2013, 1:10:53 PM
    Author     : Sherph Lautier
-->



<div id="indexLeftColumn">

    <div id="headingText"> Main Menu </div>

<!--
    Anchor links for menu
-->
   <?php echo anchor('myschoolcontroller/main','<div class="menuText">Home</div>',array('class' => 'menuButton','id' => 'selectedMenu')); ?>
   <?php echo anchor('myschoolcontroller/list_schools','<div class="menuText">Show Schools</div>',array('class' => 'menuButton')); ?>
   <?php echo anchor('myschoolcontroller/list_students','<div class="menuText">Show Students</div>',array('class' => 'menuButton')); ?>
   <?php echo anchor('myschoolcontroller/add_student','<div class="menuText">Add Student</div>',array('class' => 'menuButton')); ?>
   <?php echo anchor('myschoolcontroller/add_result','<div class="menuText">Add Result</div>',array('class' => 'menuButton')); ?>
    
   
</div>

<div id="indexRightColumn">
    <div id="columnText">
        <br>
        Welcome to My School..... Enjoy the PHP ride!
    </div>
</div>

<?php echo $this->load->view('hf/footer_view'); ?>
