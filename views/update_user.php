<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="../style/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="../style/style.css"/>
    </head>
    <body>
        <main class="container">
            <div class="ml-5 mt-4">
                <h1>Update profil</h1>
            </div>
            <div class="ml-5 mt-4">
                <a class="btn btn-success text-white" href="user_profile.php">Return</a>
            </div>

             <div class="border border-dark border-5 p-5 rounded m-5">
             <h3>Deactivate account</h3>
               <a class="btn btn-lg btn-danger text-white deactivate">Deactivate</a>
            </div>

            <div class="border border-dark border-5 p-5 rounded m-5">
                <h3 class="mb-3">Update informations</h3>

                <div class="alert alert-info hide" id="display-info"></div>

                <form id="update-info" method="post">
                    <div class="form-group">
                        <label for="new_username update">Username (@)</label>
                        <input type="text" class="form-control" name="new_username" id="new_username">
                    </div>

                    <div class="form-group">
                        <label for="display_name_updt">Display name</label>
                        <input type="text" class="form-control" name="display_name_updt" id="display_name_updt">
                    </div>

                    <div class="form-group">
                        <p>Private account</p>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="private_account" id="PrivateYes" value="1">
                            <label class="form-check-label" for="PrivateYes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="private_account" id="privateNo" value="0">
                            <label class="form-check-label" for="privateNo">No</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email_updt">Email</label>
                        <input type="text" class="form-control" name="email_updt" id="email_updt">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone </label>
                        <input type="tel" class="form-control" name="phone" id="phone">
                    </div>

                    <div class="form-group">
                        <label for="bio">Biographie </label>
                        <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="webside">Website</label>
                        <input type="url" class="form-control" name="website" id="website">
                    </div>

                    <div class="form-group">
                        <label for="localisation">Localisation </label>
                        <input type="text" class="form-control" name="localisation" id="localisation">
                    </div>

                    <input type="submit" value="Validate" name="submit_update_info" class="btn btn-lg btn-info">
                    </form>
                </div>

                <div class="border border-dark border-5 p-5 rounded m-5">
                    <form id="form_update_pass" method ="post">
                        <h3 class="mb-3">Update password</h3>
                        <div class="alert alert-danger hide" id="display-error"></div>
                        <div class="alert alert-success hide" id="display-success"></div>
                        <div class="form-group">
                            <label for="password_updt">New password</label>
                            <input type="password" class="form-control" name="password_updt" id="password_updt">
                        </div>
                        <div class="form-group">
                            <label for="confirm_pass_updt">Confirm password</label>
                            <input type="password" class="form-control" name="confirm_pass_updt" id="confirm_pass_updt">
                        </div>   
                        <input type="submit" value="Validate" name="submit_update_pass" class="btn btn-lg btn-info" >
                    </form>
                </div>
            </div>
        </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="../assets/scripts/update_info.js"></script>
    <script src="../assets/scripts/update_pass.js"></script>
    <script src="../assets/scripts/deactivate.js"></script>
</html>