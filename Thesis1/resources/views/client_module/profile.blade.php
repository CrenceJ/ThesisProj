<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
    <title>Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <link href="/vendor/bootstrap/css/3.3.6/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/css/profile.css">
</head>

<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <!-- Modal -->

 @foreach($detail as $edit)
 <div class="modal fade" id="edit-profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Edit Profile</h4>
        </div>
        <div class="modal-body">
        <form role="form" enctype="multipart/form-data" action='/edit-profile' method='POST'>
        {{csrf_field()}}
        <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name='fname' value='{{$edit->first_name}}'>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" name='lname' value='{{$edit->last_name}}'>
            </div>
            <div class="form-group">
                <label for="uname">Username</label>
                <input type="text" class="form-control" id="uname"  name='uname' value='{{$edit->username}}'>
            </div>
            <div class="form-group">
                <label for="bday">Birth date</label>
                <input type="date" class="form-control" id="bday"  name='bday' value='{{$edit->birthdate}}'>
            </div>
            <div class="form-group">
                <label for="file">Profile Picture</label>
                <input type="file" name="avatar">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Save Changes">
        </div>
        </form>
        </div>
    </div>
    </div>
@endforeach
    <!-- end modal -->

    <div class="modal fade" id="change" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Change Password</h4>
        </div>
        <div class="modal-body">
        <form role="form" action='/changer' method='POST'>
        {{csrf_field()}}
        <div class="form-group">
                <label for="fname">Current Password</label>
                <input type="password" class="form-control" id="cur" name='oldpw'>
            </div>
            <div class="form-group">
                <label for="lname">New Password</label>
                <input type="password" class="form-control" id="old" name='newpw'>
            </div>
            <div class="form-group">
                <label for="lname">Confirm new password</label>
                <input type="password" class="form-control" id="old" name='confnewpw'>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <input type="submit" class="btn btn-primary" value="Save Changes">
        </div>
        </form>
        </div>
    </div>
    </div>
<div class="text-right">
    <button class="btn"><i class="fa fa-home"></i><a href="/service_engineer" style="text-decoration:none";><strong> Home</strong></a></button>
</div>

<div id="user-profile-2" class="user-profile">
        <div class="tabbable">
            <ul class="nav nav-tabs padding-18">
                <li class="active">
                    <a data-toggle="tab" href="#home">
                        <i class="green ace-icon fa fa-user bigger-120"></i>
                        Profile
                    </a>
                </li>
            </ul>

            <div class="tab-content no-border padding-30">
                <div id="home" class="tab-pane in active">
                @foreach($detail as $details)
                    <div class="row">
                        <div class="col-xs-12 col-sm-3 center">
                            <span class="profile-picture">
                                <img class="editable img-responsive" alt=" Avatar" id="avatar2" src="/img/uploads/avatars/{{$details->profile_pic}}">
                            </span>

                            <div class="space space-4"></div>

                                <button type="button" class="btn btn-sm btn-block btn-success" data-toggle="modal" data-target="#edit-profile">
                                <i class="ace-icon fa fa-plus-circle bigger-120"></i> Edit Profile
                                <button type="button" class="btn btn-sm btn-block btn-warning" data-toggle="modal" data-target="#change">
                                Change Password
                                
                        </div><!-- /.col -->
                       
                        <div class="col-xs-12 col-sm-9">
                            <h4 class="blue">
                                <span class="middle">{{$details->first_name}} {{$details->last_name}}</span>

                                <span class="label label-purple arrowed-in-right">
                                    <i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
                                    online [dipa sure pano to]
                                </span>
                            </h4>

                            <div class="profile-user-info">
                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Username </div>

                                    <div class="profile-info-value">
                                        <span>{{$details->username}}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Email </div>

                                    <div class="profile-info-value">
                                        <i class="fa fa-envelope light-orange bigger-110"></i>
                                        <span>{{$details->email}}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Age </div>

                                    <div class="profile-info-value">
                                        <span>{{$details->age}}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Joined </div>

                                    <div class="profile-info-value">
                                        <span>{{$details->join_date}}</span>
                                    </div>
                                </div>

                                <div class="profile-info-row">
                                    <div class="profile-info-name"> Last Online </div>

                                    <div class="profile-info-value">
                                        <span>{{$details->last_login}}</span>
                                    </div>
                                </div>
                            </div>

                            
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    @endforeach

                    <div class="space-20"></div>

                    
                </div><!-- /#home -->

            </div>
        </div>
    </div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
@if(session('mismatch'))

<script>

alert('Password Mismatch');

</script>
@endif
    

</html>