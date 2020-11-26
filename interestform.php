<!--This is a form!-->
<section class="bb-part4">
    <div class="form-padding">
        <div class="form-header">
            Sign Up Here
        </div>

        <form class="container form-content" action="ccaform.php" method="post">
            <div class="form-row">
                <div class="form-group col-lg-4">
                    <label for="fname" class="d-none d-lg-block">First Name:</label>
                    <input class="form-control" type="text" id="fname" name="fname"
                           maxlength="45" placeholder="Kobe" onkeyup="lettersOnly(this)">
                </div>
                <div class="form-group col-lg-4">
                    <label for="lname" class="d-none d-lg-block">Last Name:</label>
                    <input class="form-control" type="text" id="lname" required name="lname"
                           maxlength="45" placeholder="Bryant" onkeyup="lettersOnly(this)">
                </div>
                <div class="form-group col-lg-4">
                    <label for="anumber" class="d-none d-lg-block">Admin Number:</label>
                    <input class="form-control" type="text" id="anumber" required name="anumber"
                           maxlength="45" placeholder="2000XXX">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1" class="d-none d-lg-block">Faculty</label>
                <select class="form-control" id="slct1" name="slct1" onchange="populate('slct1', 'slct2')" required>
                    <option value="Which school are you from?" hidden>---- Select your faculty ----</option>
                    <option value="School of Business Management">School of Business Management</option>
                    <option value="School of Chemical and Life Sciences">School of Chemical and Life Sciences</option>
                    <option value="School of Design">School of Design</option>
                    <option value="School of Engineering">School of Engineering</option>
                    <option value="School of Health Sciences">School of Health Sciences</option>
                    <option value="School of Information Technology">School of Information Technology</option>
                    <option value="School of Interactive and Digital Media">School of Interactive and Digital Media</option>
                </select>
            </div>


            <div class="form-group">
                <label for="exampleFormControlSelect1" class="d-none d-lg-block">Course Title</label>
                <select class="form-control" id="slct2" name="slct2" required>
                    <option class="form-control" value="Select your school first before selecting course" hidden>--- Select Faculty First ---</option>

                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-8" class="d-none d-lg-block">
                    <label for="exampleFormControlInput1" class="d-none d-lg-block">Email address</label>
                    <input type="email" class="form-control" id="email" required name="email" placeholder="name@example.com">
                </div>
                <div class="form-group col-lg-4" class="d-none d-lg-block">
                    <label for="cnumber" class="d-none d-lg-block">Contact Number:</label>
                    <input class="form-control" type="text" id="cnumber" required name="cnumber"
                           maxlength="45" placeholder="Optional" pattern="\d{8}" onkeyup="numbersOnly(this)">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1" class="d-none d-lg-block">Introduction</label>
                <textarea class="form-control" id="intro" name="intro" rows="3" placeholder="Tell us more about yourself..." onkeyup="wordcount(this.value), textCounter(this, 'counter', 1000);"></textarea>
            </div>
            <div class="form-row">
                <div class="col-lg-6">
                    <button type="submit" class="btn btn-outline-light d-inline">Sign Up</button>
                </div>
                <label for="wordLeft" class="col-form-label d-none d-lg-block">Word:</label>
                <div class="col-lg-2 d-none d-lg-block">
                    <!--<label for="wordLeft" class="col-form-label  d-none d-lg-block" id="counter">1000</label>-->
                    <input disabled  maxlength="3" size="3" value="1000" id="counter">
                </div>
                <label for="wordCount" class="col-form-label  d-none d-lg-block">Count:</label>
                <div class="col-lg-1 d-none d-lg-block">
                    <input disabled  maxlength="3" size="3" value="0" id="w_count">
                </div>                        
            </div>
        </form>
    </div>
</section>

