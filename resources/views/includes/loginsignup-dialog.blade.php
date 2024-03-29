<!-- Modal Dialog - Login/Signup
============================================= -->
<div id="login-signup" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content p-sm-3">
            <div class="modal-body">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"> <a id="login-tab" class="nav-link active text-4" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a> </li>
                <li class="nav-item"> <a id="signup-tab" class="nav-link text-4" data-toggle="tab" href="#signup" role="tab" aria-controls="signup" aria-selected="false">Sign Up</a> </li>
              </ul>
              <div class="tab-content pt-4">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                  <form id="loginForm" method="post">
                    <div class="form-group">
                      <input type="email" class="form-control" id="loginMobile" required placeholder="Mobile or Email ID">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="loginPassword" required placeholder="Password">
                    </div>
                    <div class="row mb-4">
                      <div class="col-sm">
                        <div class="form-check custom-control custom-checkbox">
                          <input id="remember-me" name="remember" class="custom-control-input" type="checkbox">
                          <label class="custom-control-label" for="remember-me">Remember Me</label>
                        </div>
                      </div>
                      <div class="col-sm text-right"> <a class="justify-content-end" href="#">Forgot Password ?</a> </div>
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                  </form>
                </div>
                <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="signup-tab">
                  <form id="signupForm" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" data-bv-field="number" id="signupEmail" required placeholder="Email ID">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="signupMobile" required placeholder="Mobile Number">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="signuploginPassword" required placeholder="Password">
                    </div>
                    <button class="btn btn-primary btn-block" type="submit">Signup</button>
                  </form>
                </div>
                <div class="d-flex align-items-center my-4">
                  <hr class="flex-grow-1">
                  <span class="mx-2">OR</span>
                  <hr class="flex-grow-1">
                </div>
                <div class="row">
                  <div class="col-12 mb-3">
                    <button type="button" class="btn btn-block btn-outline-primary">Login with Facebook</button>
                  </div>
                  <div class="col-12">
                    <button type="button" class="btn btn-block btn-outline-danger">Login with Google</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal Dialog - Login/Signup end --> 