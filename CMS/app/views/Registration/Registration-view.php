 <!--------------------------------------header starts---------------------------->

 <section>
        <div class="container-fulid">
            <img src="assets/frontend/img/image_6.jpg" alt="Snow" style="width:100%; height: 500px; opacity: .4;">
            <div id="centered">
                <h1>Registration</h1>
            </div>
            <div class="centered"><a href="?">Home<span><a
                            href="index.php?module=registration&action=details">/Registration</a></span></a></div>
        </div>
    </section>

    <!----------------------------------header ends---------------------------------->

    <!----------------------------------regis start---------------------------------->
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="assets/frontend/img/rgis.png" alt="" width="100" height="100">
                <h2>Registration form</h2>
                <p class="lead"></p>
            </div>

            <div class="form row g-3">
                <div class="col-md-7 col-lg-8">
                    <h4 class="mb-3">Student Details</h4>
                    <form class="needs-validation" novalidate action="?module=users&action=register" method="post">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <label for="first_name" class="form-label">First name</label>
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                    placeholder="Enter your First Name" value="" required maxlength="10">
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                                <input type="hidden" name="token" value="<?php echo $token;?>">
                            </div>

                            <div class="col-sm-6">
                                <label for="last_name" class="form-label">Last name</label>
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                    placeholder="Enter your Last Name" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="user_name" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" name="user_name" id="user_name"
                                        placeholder="user_name" required>
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text">@</span>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="password" required>
                                    <div class="invalid-feedback">
                                        Your password is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted"></span></label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="1234 Main St">
                                <div class="invalid-feedback">
                                    Please enter your address.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="Mobile" class="form-label">Mobile <span class="text-muted"></span></label>
                                <input type="number" class="form-control" name="mobile" id="mobile"
                                    placeholder="mobile number">
                            </div>

                            <div class="col-md-5">
                                <label for="country" class="form-label">Country</label><br>
                                <select class="form-select" name="country" id="country">
                                    <option value="">Choose</option>
                                    <option value="india">india</option>
                                    <option value="japan">japan</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="state" class="form-label">State</label><br>
                                <select class="form-select" name="state" id="state">
                                    <option value="">Choose...</option>
                                    <option value="up">up</option>
                                    <option value="mp">mp</option>

                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">Zip</label>
                                <input type="text" class="form-control" name="zip" id="zip" placeholder="">
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div>
                        </div>

                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="course[]" value="btech" id="course">
                            <label class="form-check-label" for="same_address">btech
                            </label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="course[]" value="bca" id="course">
                            <label class="form-check-label" for="save-info">bca</label>
                        </div>

                        <hr class="my-4">

                        <h4 class="mb-3">gender</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="gender" name="gender" type="radio" value="male" class="form-check-input">
                                <label class="form-check-label" for="credit">male</label>
                            </div>
                            <div class="form-check">
                                <input id="gender" name="gender" type="radio" value="female" class="form-check-input">
                                <label class="form-check-label" for="debit">female</label>
                            </div>


                            <hr class="my-4">

                            <button class="w-100 btn btn-primary btn-lg" type="submit" name="submit"
                                value="register">Register</button><br><br>
                            <a class="btn info" href="?module=users&action=login">Login</a>
                    </form>
                </div>
            </div>
        </main>
    </div>
    <!----------------------------------regis ends---------------------------------->