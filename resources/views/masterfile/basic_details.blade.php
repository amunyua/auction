
    <div class="row-fluid">
        <div class="span6">
            <div class="control-group">
                <label for="b_role" class="control-label">Business Role<span>*</span></label>
                <div class="controls">
                    <select name="b_role" class="span12" id="b_role">
                        <option value="">--Choose Business Role--</option>
                        <option value="Client" {{ (old('b_role') == 'Client') ? 'selected' : '' }}>Client</option>
                        <option value="Staff" {{ (old('b_role') == 'Staff' ? 'selected' : '') }}>Staff</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="control-group">
                <label for="reg_date" class="control-label">Start Date<span>*</span></label>
                <div class="controls">
                    <input type="text" class="date-picker span12" name="reg_date" value="<?php
                    if(isset($_POST['reg_date'])){
                        echo $_POST['reg_date'];
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
                <label for="surname" class="control-label">Surname</label>
                <div class="controls  input-icon">
                    <input type="text" name="surname" class="span12" maxlength="20" value="{{ (old('surname')) }}" id="surname" placeholder="Surname"/>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="control-group">
                <label class="control-label" for="id_passport">ID # or Passport<span>*</span></label>
                <div class="controls">
                    <input type="text" name="id_passport" maxlength="10" value="{{ (old('id_passport')) }}" class="span12" id="id_passport" placeholder="Id # or Password"/>
                </div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span6">
            <div class="control-group">
                <label for="firstname" class="control-label">First Name</label>
                <div class="controls">
                    <input type="text" name="firstname" class="span12" id="firstname" maxlength="20" value="{{ old('firstname') }}" placeholder="First Name"/>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="control-group">
                <label for="gender" class="control-label">Gender</label>
                <div class="controls">
                    <select name="gender" class="span12" id="gender">
                        <option value="">--Choose Gender--</option>
                        <option value="Male" {{ (old('Male') == 'Male') ? 'selected' : '' }}>Male</option>
                        <option value="Female" {{ (old('Female') == 'Female') ? 'selected' : '' }}>Female</option>
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
                    <input type="text" name="middlename" class="span12" id="middlename" maxlength="20" value="{{ old('middlename') }}" placeholder="Middle Name" />
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="control-group">
                <label for="email" class="control-label">Email <span>*</span></label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="icon-envelope"></i>
                        <input type="email" name="email" class="span12" value="{{ old('email') }}" placeholder="email" id="email"/>
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
                    <div class="fileupload-new thumbnail" style="width: 100px; height: 100px;"><img src="assets/img/profile/avatar.png" style="width: 100%; height: 100%" /></div>
                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 100px; max-height: 100px; line-height: 20px;"></div>
                    <div>
                        <span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input class="span12" type="file" name="image_path"/></span>
                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="control-group">
                <label for="user_role" class="control-label">User Roles</label>
                <div class="controls">
                    <select name="user_role" class="span12 live_search" id="user_role">
                        <option value="">--Select User Role--</option>
                        @if(count($roles))
                            @foreach($roles as $role)
                                <option value="{{ $role->role_code }}" {{ (old('role') == $role->role_code) ? 'selected': '' }}>{{ $role->role_name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
        </div>
    </div>
