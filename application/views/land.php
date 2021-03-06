<?php $this->load->view('header');?>
<div class="container">
  <div class="content-form">
<div class="log-nav">
      <div class="welcome">Welcome, <span style="font-weight:bold"><?php echo $this->session->userdata('USERNAME');?></span></div>
      <ul>
        <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
        <li><a href="/audit2016/upload/templates/tfr_responsive/regist.php">Logout</a></li>
        <li>|</li>
<li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass" href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li>
            </ul>
    </div>
    <div id="pprg" class="newprog progress" style="text-align:center">
      <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width:40%; height: 35px;">40%</div>
    </div>
<div class="intro">    <h1>LAND</h1>
       <div class="video"> <a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img src="http://greenschoolsprogramme.org/audit2015/upload/templates/tfr_responsive/images/video-icon.png" style="width: 45px; height: 40px; margin-top:47px;"></a></div>


    <p> The GSP audit helps the school community draw up a roadmap for sustainable use of its land.<br>
      <b>The unit of measurement to be used in the Land section is Square Meter (m<sup>2</sup>).</b> </p>
    <?php echo form_open('land/set',array('id'=>'land')); ?>
          <div class="form-group">
            <label><h6>Task 1: Choose your Land Audit Team</h6></label>
            <br>
            Your school gardener is certainly the best person to be a part of your audit team. Make sure your biology or geography teacher joins your team. Just like all other teams, five to 10 of your committed and interested schoolmates would make a strong team. Try and involve some students of the photography or painting clubs of your school. </div>
          <div class="form-group">
            <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
            <div class="form-group row">
              <div class="col-xs-1"> </div>
              <div class="col-xs-3">
                <label >First Name</label>
              </div>
              <div class="col-xs-3">
                <label >Last Name</label>
              </div>
              
              <div class="col-xs-3">
                <label >Email ID</label>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-1"> 1 </div>
              <div class="col-xs-3">
                <?php echo form_error('name'); ?>
                <input class="form-control space-textbox" id="Q1L1S1" type="text" name="Q1L1S1" placeholder="<?php if(isset($data['Q1L1S1'])) echo $data['Q1L1S1']; ?>" value="<?php echo set_value('Q1L1S1'); ?>"/>
              </div>
              <div class="col-xs-3">
                <?php echo form_error('name'); ?>
                <input class="form-control space-textbox" id="Q1L1S3" type="text" name="Q1L1S3" placeholder="<?php if(isset($data['Q1L1S3'])) echo $data['Q1L1S3']; ?>" value="<?php echo set_value('Q1L1S3'); ?>"/>
              </div>
              
              <div class="col-xs-3">
                <?php echo form_error('email'); ?>
                <input class="form-control space-textbox" id="Q1L1S2" type="email"  name="Q1L1S2" placeholder="<?php if(isset($data['Q1L1S2'])) echo $data['Q1L1S2']; ?>" value="<?php echo set_value('Q1L1S2'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-1"> 2 </div>
              <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L2S1" type="text"  name="Q1L2S1" placeholder="<?php if(isset($data['Q1L2S1'])) echo $data['Q1L2S1'] ?>" value="<?php echo set_value('Q1L2S1'); ?>"/>
              </div>
              <div class="col-xs-3">
                <?php echo form_error('name'); ?>
                <input class="form-control space-textbox" id="Q1L2S3" type="text" name="Q1L2S3" placeholder="<?php if(isset($data['Q1L2S3'])) echo $data['Q1L2S3']; ?>" value="<?php echo set_value('Q1L2S3'); ?>"/>
              </div>
              
              <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L2S2" type="email"  name="Q1L2S2" placeholder="<?php if(isset($data['Q1L2S2'])) echo $data['Q1L2S2'] ?>" value="<?php echo set_value('Q1L2S2'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-1"> 3 </div>
              <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L3S1" type="text"  name="Q1L3S1" placeholder="<?php if(isset($data['Q1L3S1'])) echo $data['Q1L3S1'] ?>" value="<?php echo set_value('Q1L3S1'); ?>"/>
              </div>
              <div class="col-xs-3">
                <?php echo form_error('name'); ?>
                <input class="form-control space-textbox" id="Q1L3S3" type="text" name="Q1L3S3" placeholder="<?php if(isset($data['Q1L3S3'])) echo $data['Q1L3S3']; ?>" value="<?php echo set_value('Q1L3S3'); ?>"/>
              </div>
              
              <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L3S2" type="email"  name="Q1L3S2" placeholder="<?php if(isset($data['Q1L3S2'])) echo $data['Q1L3S2'] ?>" value="<?php echo set_value('Q1L3S2'); ?>"/>
              </div>
            </div>
            <div class="form-group">
              <label  class="control-label">Administrative staff (maximum of five staff can be part of the team):</label>
              <div class="form-group row">
                <div class="col-xs-1"> </div>
                <div class="col-xs-3">
                  <label >First Name</label>
                </div>
                <div class="col-xs-3">
                  <label >Last Name</label>
                </div>
                
                <div class="col-xs-3">
                  <label >Email ID</label>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-xs-1"> 1 </div>
                <div class="col-xs-3">
                 <?php echo form_error('name1'); ?>
                 <input class="form-control space-textbox" id="Q2L1S1" type="text"  name="Q2L1S1" placeholder="<?php if(isset($data['Q2L1S1'])) echo $data['Q2L1S1'] ?>" value="<?php echo set_value('Q2L1S1'); ?>"/>
               </div>
               <div class="col-xs-3">
                 <input class="form-control space-textbox" id="Q2L1S3" type="text"  name="Q2L1S3" placeholder="<?php if(isset($data['Q2L1S3'])) echo $data['Q2L1S3'] ?>" value="<?php echo set_value('Q2L1S3'); ?>"/>
               </div>
               
               <div class="col-xs-3">
                 <?php echo form_error('email1'); ?>
                 <input class="form-control space-textbox" id="Q2L1S2" type="email"  name="Q2L1S2" placeholder="<?php if(isset($data['Q2L1S2'])) echo $data['Q2L1S2'] ?>" value="<?php echo set_value('Q2L1S2'); ?>"/>
               </div>
             </div>
             <div class="form-group row">
              <div class="col-xs-1"> 2 </div>
              <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q2L2S1" type="text"  name="Q2L2S1" placeholder="<?php if(isset($data['Q2L2S1'])) echo $data['Q2L2S1'] ?>" value="<?php echo set_value('Q2L2S1'); ?>"/>
              </div>
              <div class="col-xs-3">
               <input class="form-control space-textbox" id="Q2L2S3" type="text"  name="Q2L2S3" placeholder="<?php if(isset($data['Q2L2S3'])) echo $data['Q2L2S3'] ?>" value="<?php echo set_value('Q2L2S3'); ?>"/>
             </div>

             <div class="col-xs-3">
              <input class="form-control space-textbox" id="Q2L2S2" type="email"  name="Q2L2S2" placeholder="<?php if(isset($data['Q2L2S2'])) echo $data['Q2L2S2'] ?>" value="<?php echo set_value('Q2L2S2'); ?>"/>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-1"> 3 </div>
            <div class="col-xs-3">
              <input class="form-control space-textbox" id="Q2L3S1" type="text"  name="Q2L3S1" placeholder="<?php if(isset($data['Q2L3S1'])) echo $data['Q2L3S1'] ?>" value="<?php echo set_value('Q2L3S1'); ?>"/>
            </div>
            <div class="col-xs-3">
             <input class="form-control space-textbox" id="Q2L3S3" type="text"  name="Q2L3S3" placeholder="<?php if(isset($data['Q2L3S3'])) echo $data['Q2L3S3'] ?>" value="<?php echo set_value('Q2L3S3'); ?>"/>
           </div>

           <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2L3S2" type="email"  name="Q2L3S2" placeholder="<?php if(isset($data['Q2L3S2'])) echo $data['Q2L3S2'] ?>" value="<?php echo set_value('Q2L3S2'); ?>"/>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-1"> 4 </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2L4S1" type="text"  name="Q2L4S1" placeholder="<?php if(isset($data['Q2L4S1'])) echo $data['Q2L4S1']; ?>" value="<?php echo set_value('Q2L4S1'); ?>"/>
          </div>
          <div class="col-xs-3">
           <input class="form-control space-textbox" id="Q2L4S3" type="text"  name="Q2L4S3" placeholder="<?php if(isset($data['Q2L4S3'])) echo $data['Q2L4S3'] ?>" value="<?php echo set_value('Q2L4S3'); ?>"/>
         </div>

         <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q2L4S2" type="email"  name="Q2L4S2" placeholder="<?php if(isset($data['Q2L4S2'])) echo $data['Q2L4S2']; ?>" value="<?php echo set_value('Q2L4S2'); ?>"/>
        </div>;
      </div>
      <div class="form-group row">
        <div class="col-xs-1"> 5 </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" id="Q2L5S1" type="text"  name="Q2L5S1" placeholder="<?php if(isset($data['Q2L5S1'])) echo $data['Q2L5S1'] ?>" value="<?php echo set_value('Q2L5S1'); ?>"/>
        </div>
        <div class="col-xs-3">
         <input class="form-control space-textbox" id="Q2L5S3" type="text"  name="Q2L5S3" placeholder="<?php if(isset($data['Q2L5S3'])) echo $data['Q2L5S3'] ?>" value="<?php echo set_value('Q2L5S3'); ?>"/>
       </div>

       <div class="col-xs-3">
        <input class="form-control space-textbox" id="Q2L5S2" type="email"  name="Q2L5S2" placeholder="<?php if(isset($data['Q2L5S2'])) echo $data['Q2L5S2'] ?>" value="<?php echo set_value('Q2L5S2'); ?>"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label  class="control-label">Students (maximum of ten students can be part of the team):</label>
    <div class="form-group row">
      <div class="col-xs-1"> </div>
      <div class="col-xs-3">
        <label >First Name</label>
      </div>
      <div class="col-xs-3">
        <label >Last Name</label>
      </div>
      <div class="col-xs-3">
        <label >Grade</label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-1"> 1 </div>
      <div class="col-xs-3">
       <?php echo form_error('name2'); ?>
       <input class="form-control space-textbox" id="Q3L1S1" type="text"  name="Q3L1S1" placeholder="<?php if(isset($data['Q3L1S1'])) echo $data['Q3L1S1'] ?>"  value="<?php echo set_value('Q3L1S1'); ?>"/>
     </div>
     <div class="col-xs-3">
       <?php echo form_error('email2'); ?>
       <input class="form-control space-textbox" id="Q3L1S2" type="text"  name="Q3L1S2" placeholder="<?php if(isset($data['Q3L1S2'])) echo $data['Q3L1S2'] ?>" value="<?php echo set_value('Q3L1S2'); ?>"/>
     </div>
     <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L1S3" type="text"  name="Q3L1S3" placeholder="<?php if(isset($data['Q3L1S3'])) echo $data['Q3L1S3'] ?>" value="<?php echo set_value('Q3L1S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 2 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L2S1" type="text"  name="Q3L2S1" placeholder="<?php if(isset($data['Q3L2S1'])) echo $data['Q3L2S1'] ?>" value="<?php echo set_value('Q3L2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L2S2" type="text"  name="Q3L2S2" placeholder="<?php if(isset($data['Q3L2S2'])) echo $data['Q3L2S2'] ?>" value="<?php echo set_value('Q3L2S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L2S3" type="text"  name="Q3L2S3" placeholder="<?php if(isset($data['Q3L2S3'])) echo $data['Q3L2S3'] ?>" value="<?php echo set_value('Q3L2S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 3 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L3S1" type="text"  name="Q3L3S1" placeholder="<?php if(isset($data['Q3L3S1'])) echo $data['Q3L3S1'] ?>" value="<?php echo set_value('Q3L3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L3S2" type="text"  name="Q3L3S2" placeholder="<?php if(isset($data['Q3L3S2'])) echo $data['Q3L3S2'] ?>" value="<?php echo set_value('Q3L3S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L3S3" type="text"  name="Q3L3S3" placeholder="<?php if(isset($data['Q3L3S3'])) echo $data['Q3L3S3'] ?>" value="<?php echo set_value('Q3L3S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 4 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L4S1" type="text"  name="Q3L4S1" placeholder="<?php if(isset($data['Q3L4S1'])) echo $data['Q3L4S1'] ?>" value="<?php echo set_value('Q3L4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L4S2" type="text"  name="Q3L4S2" placeholder="<?php if(isset($data['Q3L4S2'])) echo $data['Q3L4S2'] ?>" value="<?php echo set_value('Q3L4S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L4S3" type="text"  name="Q3L4S3" placeholder="<?php if(isset($data['Q3L4S3'])) echo $data['Q3L4S3'] ?>" value="<?php echo set_value('Q3L4S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 5 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L5S1" type="text" name="Q3L5S1" placeholder="<?php if(isset($data['Q3L5S1'])) echo $data['Q3L5S1'] ?>" value="<?php echo set_value('Q3L5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L5S2" type="text" name="Q3L5S2" placeholder="<?php if(isset($data['Q3L5S2'])) echo $data['Q2L5S2'] ?>" value="<?php echo set_value('Q3L5S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L5S3" type="text" name="Q3L5S3" placeholder="<?php if(isset($data['Q3L5S3'])) echo $data['Q3L5S3'] ?>" value="<?php echo set_value('Q3L5S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 6 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L6S1" type="text" name="Q3L6S1" placeholder="<?php if(isset($data['Q3L6S1'])) echo $data['Q3L6S1'] ?>" value="<?php echo set_value('Q3L6S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L6S2" type="text" name="Q3L6S2" placeholder="<?php if(isset($data['Q3L6S2'])) echo $data['Q3L6S2'] ?>" value="<?php echo set_value('Q3L6S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L6S3" type="text" name="Q3L6S3" placeholder="<?php if(isset($data['Q3L6S3'])) echo $data['Q3L6S3'] ?>" value="<?php echo set_value('Q3L6S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 7 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L7S1" type="text" name="Q3L7S1" placeholder="<?php if(isset($data['Q3L7S1'])) echo $data['Q3L7S1'] ?>" value="<?php echo set_value('Q3L7S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L7S2" type="text" name="Q3L7S2" placeholder="<?php if(isset($data['Q3L7S2'])) echo $data['Q3L7S2'] ?>" value="<?php echo set_value('Q3L7S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L7S3" type="text" name="Q3L7S3" placeholder="<?php if(isset($data['Q3L7S3'])) echo $data['Q3L7S3'] ?>" value="<?php echo set_value('Q3L7S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 8 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L8S1" type="text" name="Q3L8S1" placeholder="<?php if(isset($data['Q3L8S1'])) echo $data['Q3L8S1'] ?>" value="<?php echo set_value('Q3L8S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L8S2" type="text" name="Q3L8S2" placeholder="<?php if(isset($data['Q3L8S2'])) echo $data['Q3L8S2'] ?>" value="<?php echo set_value('Q3L8S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L8S3" type="text" name="Q3L8S3" placeholder="<?php if(isset($data['Q3L8S3'])) echo $data['Q3L8S3'] ?>" value="<?php echo set_value('Q3L8S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 9 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L9S1" type="text" name="Q3L9S1" placeholder="<?php if(isset($data['Q3L9S1'])) echo $data['Q3L9S1'] ?>" value="<?php echo set_value('Q3L9S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L9S2" type="text" name="Q3L9S2" placeholder="<?php if(isset($data['Q3L9S2'])) echo $data['Q3L9S2'] ?>" value="<?php echo set_value('Q3L9S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L9S3" type="text" name="Q3L9S3" placeholder="<?php if(isset($data['Q3L9S3'])) echo $data['Q3L9S3'] ?>" value="<?php echo set_value('Q3L9S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 10 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L10S1" type="text" name="Q3L10S1" placeholder="<?php if(isset($data['Q3L10S1'])) echo $data['Q3L10S1'] ?>" value="<?php echo set_value('Q3L10S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L10S2" type="text" name="Q3L10S2" placeholder="<?php if(isset($data['Q3L10S2'])) echo $data['Q3L10S2'] ?>" value="<?php echo set_value('Q3L10S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="Q3L10S3" type="text" name="Q3L10S3" placeholder="<?php if(isset($data['Q3L10S3'])) echo $data['Q3L10S3'] ?>" value="<?php echo set_value('Q3L10S3'); ?>"/>
    </div>
  </div>
</div>
          <div class="form-group">
      <label >
      <div class="question-text">
        <h6> Task 2: Measure the four critical areas of your school campus</h6>
        <strong>To find out the land/ site area of your school, you need to measure:</strong>
        <ul>
          <li> Ground coverage area</li>
          <li> Open Area (on-ground)</li>
          <li> Service Area (on-ground)</li>
          <li> Service Parking</li>
        </ul>
        <p> 1. Ground coverage area includes all permanent structure building, such as administration block, auditorium, school building, etc. It does not include floors.</p>
        <p> 2. Green cover or green, landscaped area on ground includes areas covered by grass, trees, lawn or horticulture, flower beds, grasscrete paver tiles, etc.</p>
        <p> 3. Surface parking area refers to any parking lots directly on land.</p>
        <p> 4. Play areas that are paved / concrete include outdoor playfields, such as basketball courts, skating rinks, assembly grounds and swimming pools. </p>
        <p> 5. Play area covered by grass on ground include grass tennis-courts and circket or football grounds. </p>
        <p> 6. Service area on ground is any area on ground that is not a permanent structure but is dedicated to service, such as cooling towers for air conditioning, generators and portable cabin for security guards, etc. </p>
        <p> 7. Roof and terrace area: A roof is the covering on the uppermost part of a building. A terrace is an outdoor, occupiable extension of a building above ground level.</p>
        <p> 8. Green cover on terraces/ balconies includes terrace gardens but not potted plants.</p>
        <p> 9. Total built-up/constructed area refers to the total area of all floors of the building, including ground floors of built-up spaces, which include classrooms, labs, staff rooms, office area, auditoriums, corridors, and balconies and terraces, multiplied by the number of floors.</p>
        <p> 10. Other will include paved paths and other open area that your school has but is not covered in the list above.</p>
      </div>
      </label>
      <div class="answer clearfix"> </div>
    </div><div class="clearfix">&nbsp;</div>
    
          <div class="form-group">
            <label class="control-label"><span class="cube">1</span> Total Green Cover <a class="tt" data-tooltip="Ideally, total green landscaped area on-ground available in school should be 30 per cent of total site area (in square meters). Also, total green area on exposed roof &amp; terraces should be 50 per cent of the total area of exposed roof &amp; terrace (in square meters). "><span class="badge">?</span></a></label>
      <div class="form-group row">
              <div class="col-xs-3">
                <label >Description</label>
              </div>
              <div class="col-xs-5">
                <label > Your school's area (<strong>m<sup>2</sup></strong>)</label>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Site area in square meter (<strong>m<sup>2</sup></strong>)</label>
              </div>
              <div class="col-xs-5">
                
                <input class="form-control space-textbox" id="Q4L1" onkeyup="BuildUpArea()" onchange="BuildUpArea()" type="number" min="1" name="Q4L1" placeholder="<?php if(isset($data['Q4L1'])) echo $data['Q4L1'] ?>" value="<?php echo set_value('Q4L1'); ?>"/>
              </div>
            </div>
            
            <div class="form-group">
            <label><span class="cube">1A</span>Total green cover</label>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Ground coverage area</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="Q4L2" onkeyup="BuildUpArea()" onchange="BuildUpArea()" type="number" min="1" name="Q4L2" placeholder="<?php if(isset($data['Q4L2'])) echo $data['Q4L2'] ?>" value="<?php echo set_value('Q4L2'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Green Landscaped area on ground</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="Q4L3" onkeyup="BuildUpArea()" onchange="BuildUpArea()" type="number"  min="0" name="Q4L3" placeholder="<?php if(isset($data['Q4L3'])) echo $data['Q4L3'] ?>" value="<?php echo set_value('Q4L3'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Play area that has grass on ground</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="Q4L4" onkeyup="BuildUpArea()" onchange="BuildUpArea()" type="number"  min="0" name="Q4L4" placeholder="<?php if(isset($data['Q4L4'])) echo $data['Q4L4'] ?>" value="<?php echo set_value('Q4L4'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Green area on ground</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="Q4L5" onkeyup="BuildUpArea()" onchange="BuildUpArea()" type="number" min="0" name="Q4L5" placeholder="<?php if(isset($data['Q4L5'])) echo $data['Q4L5'] ?>" value="<?php echo set_value('Q4L5'); ?>" />
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Play area that is paved/concrete on ground</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="Q4L6" onkeyup="BuildUpArea()" onchange="BuildUpArea()" type="number" min="0" name="Q4L6" placeholder="<?php if(isset($data['Q4L6'])) echo $data['Q4L6'] ?>" value="<?php echo set_value('Q4L6'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Surface parking area</label>
              </div>
              <div class="col-xs-5">
                <input type="hidden" id="Q6A2S1T5" value="<?php  if(isset($other['Q6A2S1T5'])) echo $other['Q6A2S1T5'];?>">
                <input class="form-control space-textbox" id="Q4L7" onkeyup="BuildUpArea()" onchange="BuildUpArea()" type="number" name="Q4L7" placeholder="<?php if(isset($data['Q4L7'])) echo $data['Q4L7'] ?>" value="<?php echo set_value('Q4L7'); ?>" 
                min="0"/>
              </div>
            </div>
            
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Service area on ground</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="Q4L8" onkeyup="BuildUpArea()" onchange="BuildUpArea()" type="number" min="0" name="Q4L8" placeholder="<?php if(isset($data['Q4L8'])) echo $data['Q4L8'] ?>" value="<?php echo set_value('Q4L8'); ?>"/>
              </div>
            </div>

            <div class="form-group">
            <label><span class="cube">1B</span>Built-up area of your school campus</label>
            </div>
            
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Roof and terrace area</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="Q4L9" onkeyup="BuildUpArea()" onchange="BuildUpArea()" type="number" min="0" name="Q4L9" placeholder="<?php if(isset($data['Q4L9'])) echo $data['Q4L9'] ?>" value="<?php echo set_value('Q4L9'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Green cover on exposed roof and terrace</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="Q4L10" onkeyup="BuildUpArea()" onchange="BuildUpArea()" type="number" min="0" name="Q4L10" placeholder="<?php if(isset($data['Q4L10'])) echo $data['Q4L10'] ?>" value="<?php echo set_value('Q4L10'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Total built-up/constructed area</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="Q4L11" type="number" min="0" name="Q4L11" placeholder="<?php if(isset($data['Q4L11'])) echo $data['Q4L11'] ?>" value="<?php echo set_value('Q4L11'); ?>" />
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-3">
                <label >Total no. of Floor</label>
              </div>
              <div class="col-xs-5">
                <input class="form-control space-textbox" id="Q4L12" type="number" min="0" name="Q4L12" placeholder="<?php if(isset($data['Q4L12'])) echo $data['Q4L12'] ?>" value="<?php echo set_value('Q4L12'); ?>" />
              </div>
            </div>
            
          </div>
          <div class="clearfix">&nbsp;</div>
    <div class="form-group">
      <label for="exampleInputEmail1">
      <div class="question-text">
        <h6> Task 3: Explore the number of species of plants and animals in your school</h6>
        <p> This task will help you to understand the number and variety of plants and animals that your school campus supports. Identify and count the various species of plants and animals in your school.</p>
        <p> <strong>To collect data:</strong></p>
        <p> Make two teams of students. One for plant species and the other for animal species. Get the school gardener and the biology teacher to accompany them. Count plant species and animal species that are visible to the naked eye.</p>
        <p> Native (definition): a species that occurs naturally within a region, either evolving there or arriving and becoming established without human assistance</p>
        <p> Exotic (definition): An exotic plant or animal, which is invasive, is a species that meets the following conditions:</p>
        <ol>
          <li> Originate outside the local area.</li>
          <li> Have the potential to spread long distances on its own.</li>
          <li> Once established, have the potential to out-compete native species in the wild.</li>
        </ol>
      </div>
      </label>
    </div><div class="clearfix">&nbsp;</div>
          <div class="form-group">
            <label  class="control-label"><span class="cube">2</span>How many species of plants and animals exist in your school?</label>
            <div class="row">
              <div class="form-group row">
                <div class="col-xs-3">
                  <label></label>
                </div>
                <div class="col-xs-3">
                  <label>Native</label>
                </div>
                <div class="col-xs-3">
                  <label>Exotic</label>
                </div>
                <div class="col-xs-3">
                  <label>Total</label>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-xs-3">
                  <label> Plants</label>
                </div>
                <div class="col-xs-3">
                  <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L1S1" type="number" min="0" name="Q5L1S1" placeholder="<?php if(isset($data['Q5L1S1'])) echo $data['Q5L1S1'] ?>" value="<?php echo set_value('Q5L1S1'); ?>"/>
                </div>
                <div class="col-xs-3">
                  <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L1S2" type="number" min="0" name="Q5L1S2" placeholder="<?php if(isset($data['Q5L1S2'])) echo $data['Q5L1S2'] ?>" value="<?php echo set_value('Q5L1S2'); ?>" />
                </div>
                <div class="col-xs-3">
                  <input class="form-control space-textbox"  id="Q5L1S3" type="number" min="0" name="Q5L1S3" placeholder="<?php if(isset($data['Q5L1S3'])) echo $data['Q5L1S3'] ?>" value="<?php echo set_value('Q5L1S3'); ?>" readonly/>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-xs-3">
                  <label>Animals</label>
                </div>
                <div class="col-xs-3">
                  <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S1" type="number" min="0" name="Q5L2S1" placeholder="<?php if(isset($data['Q5L2S1'])) echo $data['Q5L2S1'] ?>" value="<?php echo set_value('Q5L2S1'); ?>"/>
                </div>
                <div class="col-xs-3">
                  <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S2" type="number" min="0" name="Q5L2S2" placeholder="<?php if(isset($data['Q5L2S2'])) echo $data['Q5L2S2'] ?>" value="<?php echo set_value('Q5L2S2'); ?>"/>
                </div>
                <div class="col-xs-3">
                  <input class="form-control space-textbox" id="Q5L2S3" type="number" min="0" name="Q5L2S3" placeholder="<?php if(isset($data['Q5L2S3'])) echo $data['Q5L2S3'] ?>" value="<?php echo set_value('Q5L2S3'); ?>" readonly/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label><h6> Task 4: Find out if your school uses pesticides </h6></label>
            </div>
            <div class="form-group">
              <label  class="control-label"><span class="cube">3</span>Do you use chemical-based pesticides in your school green cover?</label>
              <div class="form-group">
                <label class="radio-inline text-gray">
                <input type="radio" name="Q6L1" value="<?php echo set_value('Q6L1','Y')?>" <?php if(isset($data['Q6L1'])) echo $data['Q6L1'] == 'Y'?"checked":"" ?>>
                Yes </label>
                <label class="radio-inline text-gray">
                <input type="radio" name="Q6L1" value="<?php echo set_value('Q6L1','N')?>" <?php if(isset($data['Q6L1'])) echo $data['Q6L1'] == 'N'?"checked":"" ?>>
                No </label>
              </div>
            </div>
            <div class="form-group">
              <label>Upload supporting documents</label>
              <br>
              Please upload the following supporting documents:<br>
              <br>
              &bull; Pictures of green cover<br>
              &bull; Pictures of landscaped area<br>
              &bull; Building construction plan<br>
              Uploaded files must be in one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File size per document should not exceed 500 KB. </div>
<br/>
            <button class="btn uploadbtn upload" data-id="Green Cover" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>  <br>

            <div class="text-center">
        <button type="button" id="moveprevbtn" value="moveprev" name="moveprev" accesskey="p" class="submit button" onClick="javasript:window.location.href='<?php echo base_url('food'); ?>'">Previous</button>
        <button type="submit" id="movenextbtn" value="movenext" name="movenext" accesskey="n" class="submit button">Next</button>
        <input type="button" value="Save and Resume Later" class="org-btn"/>
      </div>
    <?php echo form_close(); ?> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.container -->
<?php $this->load->view('footer');?>

<style type="text/css">
.text-gray{
   color: #666666!important;
   font-weight:100!important;
}
</style>
<div id="videoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background:transparent; border-radius:0px;">
      <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View video tutorial</h4>
      </div>
<iframe width="100%" height="330px" id="video"  src="https://www.youtube.com/embed/todM6wToHHQ" frameborder="0" allowfullscreen></iframe>
    
    </div>
  </div>
</div>
<script type="text/javascript">
 $('.close').click(function(){
    $('#video').attr("src","https://www.youtube.com/embed/9r3Lwrd9BUs");
 });
$('body').click(function(){
    $('#video').attr("src","https://www.youtube.com/embed/9r3Lwrd9BUs");
 });
</script>

