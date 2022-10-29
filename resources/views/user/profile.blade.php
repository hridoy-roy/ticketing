@extends('layout')
<style>
    
  /* User Profile */
  .profile-left-tab {
    border: 1px solid #eee;
    box-shadow: 0 0 30px rgb(127 137 161/20%);
    min-height: 500px;
    display: flex;
  }
  li.top-li {
    padding: 15px;
    text-align: center;
  }
  .profile-left-tab li .active {
    background-color: #e10000 !important;
    color: #fff !important;
  }
  .profile-left-tab li a {
    padding: 8px 15px;
    display: block;
    text-align: left;
    color: #3e3e52;
    font-weight: 500;
    border-radius: 0;
    border: 0;
      border-bottom-color: currentcolor;
      border-bottom-style: none;
      border-bottom-width: 0px;
    margin: 0;
    border-bottom: 1px solid #ddd;
    text-decoration: none;
    cursor: pointer;
  }
  .profile-right-tab-content {
    border: 1px solid #eee;
    box-shadow: 0 0 30px rgb(127 137 161/20%);
    min-height: 500px;
    padding: 20px;
  }
  .tab-content > .active {
    display: block;
  }
  .wlc_msg {
    font-size: 20px;
    text-transform: capitalize;
    margin: 0;
    border-bottom: 1px dashed #00a14a;
    color: #333;
    padding-bottom: 10px;
    font-weight: 500;
  }  
  .login_section{
    margin: 90px 0px 0px;
  }
  ul.nav.nav-tabs.profile-left-tab {
    display: flex;
    flex-direction: column;
}
</style>
@section('main')
<section class="login_section pt-t pt-md-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-12">
        <ul class="nav nav-tabs profile-left-tab">
          <li class="top-li my-3">
            <h4 class="name">Hammad Rahman</h4>
            <p class="user-phn">+880 1813871392</p>
          </li>
          <li>
            <a class="active" data-toggle="tab" data-target="#profile">
              <i class="fa fa-user"></i>&nbsp; Profile </a>
          </li>
          <li>
            <a data-target="#my_bookings" data-toggle="tab">
              <i class="fa fa-briefcase"></i>&nbsp; My bookings </a>
          </li>
          <li>
            <a data-target="#edit_profile" data-toggle="tab">
              <i class="fa fa-edit"></i>&nbsp; Edit profile </a>
          </li>
          <li>
            <a data-target="#chg_password" data-toggle="tab">
              <i class="fa fa-key"></i>&nbsp; Change password </a>
          </li>
          <li>
            <a href="https://lalsobujbus.com/sign-out" class="text-dark">
              <i class="fa fa-sign-out-alt"></i>&nbsp; Sign out </a>
          </li>
        </ul>
      </div>
      <div class="col-md-9 col-sm-9 col-12 ps-sm-0">
        <div class="tab-content profile-right-tab-content">
          <div class="tab-pane active" id="profile">
            <h2 class="wlc_msg">Welcome !! <strong>Hammad Rahman</strong>
            </h2>
            <div class="row mt-3">
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="table-responsive">
                  <table class="table table-hover my-bookin-tbl">
                    <tbody>
                      <tr>
                        <td>
                          <strong>Name: </strong>
                        </td>
                        <td>Hammad Rahman</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Enter Email: </strong>
                        </td>
                        <td>+880 1813871392</td>
                      </tr>
                      <tr>
                        <td>
                          <strong>Email: </strong>
                        </td>
                        <td>ikram.codeware@gmail.com</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="edit_profile" role="tabpanel">
            <h2 class="wlc_msg">Edit profile</h2>
            <div id="succMsg"></div>
            <div id="dngrMsg"></div>
            <div class="row mt-3">
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <input type="hidden" id="cusID" name="cID" value="5592">
                <div>
                  <div class="form-gp">
                    <label for="cFirstName">First name</label>
                    <input id="cFirstName" type="text" value="Hammad" name="cFirstName" autocomplete="off" required="">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="form-gp">
                    <label for="cLastName">Last name</label>
                    <input id="cLastName" type="text" value="Rahman" name="cLastName" autocomplete="off" required="">
                    <i class="fa fa-user"></i>
                  </div>
                  <div class="form-gp">
                    <label for="cusPhone">Enter Email</label>
                    <input id="cusPhone" type="text" disabled="disabled" value="+880 1813871392" name="phone" autocomplete="off" required="">
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class="form-gp">
                    <label for="cusEmail">Email</label>
                    <input id="cusEmail" type="email" value="ikram.codeware@gmail.com" name="email" autocomplete="off">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="submit-btn-area">
                    <button onclick="updateCustomer()" id="edit_form_submit" class="btn mid_cont_btn" type="button">Update profile</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="chg_password" role="tabpanel">
            <h2 class="wlc_msg">Change password</h2>
            <div id="passsuccMsg"></div>
            <div id="passdngrMsg"></div>
            <div class="row mt-3">
              <div class="col-lg-6 col-md-7 col-sm-12 col-12">
                <div>
                  <div class="form-gp togglePass1">
                    <label for="current_password">Current password</label>
                    <input id="current_password" type="password" name="current_password" autocomplete="off" required="">
                    <i class="fa fa-eye eye_icon" id="currPassShowHide" onclick="showHide('one');"></i>
                    <span class="errorTextMsg" id="currPassError"></span>
                  </div>
                  <div class="form-gp togglePass2">
                    <label for="new_password">New password</label>
                    <input id="new_password" type="password" name="new_password" autocomplete="off" required="">
                    <i class="fa fa-eye eye_icon" id="newPasswordShowHide" onclick="showHide('two');"></i>
                    <span class="errorTextMsg" id="newPassError"></span>
                  </div>
                  <div class="form-gp togglePass3">
                    <label for="confirm_password">Confirm Password</label>
                    <input id="confirm_password" type="password" name="confirm_password" autocomplete="off" required="">
                    <i class="fa fa-eye eye_icon" id="confirmPasswordShowHide" onclick="showHide('three');"></i>
                    <span class="errorTextMsg" id="confPassError"></span>
                  </div>
                  <div class="submit-btn-area">
                    <button onclick="updatePassword()" id="pass_form_submit" class="btn mid_cont_btn" type="button">Update password</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="my_bookings" role="tabpanel">
            <h2 class="wlc_msg">My bookings</h2>
            <div class="row mt-4">
              <div class="col-md-12">
                <div class="trip-msg">
                  <strong>You haven't booking yet.</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection