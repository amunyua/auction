<div class="row-fluid">
    <div class="span6">
        <div class="control-group">
            <label for="b_role" class="control-label">Business Role<span>*</span></label>
            <div class="controls">
                <select name="b_role" class="span12" id="b_role">
                    <option value="">--Choose Business Role--</option>
                    <option value="client">Client</option>
                    <option value="staff">Staff</option>
                </select>
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="control-group">
            <label for="regdate_stamp" class="control-label">Start Date<span>*</span></label>
            <div class="controls">
                <input type="text" class="date-picker span12" name="regdate_stamp" value="<?php
                if(isset($_POST['regdate_stamp'])){
                    echo $_POST['regdate_stamp'];
                }else{
                    echo date('m-d-Y');
                }
                ?>" />
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="control-group">
            <label for="surname" class="control-label" id="variation">Surname</label>
            <div class="controls  input-icon">
                <input type="text" name="surname" class="span12" maxlength="20" value=""
                       id="surname" placeholder="Surname"/>
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="control-group">
            <label class="control-label" for="id_passport" id="id_pass">ID # or Passport<span>*</span></label>
            <div class="controls">
                <input type="text" name="id_passport" maxlength="10" value="" class="span12" />
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="control-group">
            <label for="firstname" class="control-label">First Name</label>
            <div class="controls">
                <input type="text" name="firstname" class="span12" id="firstname" maxlength="20" value="" placeholder="First Name"/>
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="control-group">
            <label for="gender" class="control-label">Gender</label>
            <div class="controls">
                <select name="gender" class="span12" id="gender">
                    <option value="">--Choose Gender--</option>
                    <option value="Male" >Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="control-group">
            <label for="middlename" class="control-label">Middle Name</label>
            <div class="controls">
                <input type="text" name="middlename" class="span12" id="middlename" maxlength="20" value="" placeholder="Middle Name" />
            </div>
        </div>
    </div>
    <div class="span6">
        <div class="control-group">
            <label for="email" class="control-label">Email <span>*</span></label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-envelope"></i>
                    <input type="email" name="email" class="span12" value="" placeholder="email" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <label class="control-label">Profile Pic</label>
        <div class="controls">
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="fileupload-new thumbnail" style="width: 100px; height: 100px;"><img src="assets/img/profile/avatar.png" /></div>
                <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 100px; max-height: 100px; line-height: 20px;"></div>
                <div>
                    <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input class="span12" type="file" name="image_path"/></span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
        </div>
    </div>
</div>