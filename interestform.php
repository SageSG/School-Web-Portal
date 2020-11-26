<!--This is a form!-->
<div class="bb-part4">
    <div class="form-padding">
        <div class="form-header">
            Sign Up Here
        </div>

        <form class="container form-content" action="ccaform.php" method="post">
            <div class="form-row">
                <div class="form-group col-lg-4">
                    <label for="fname" class="">First Name:</label>
                    <input class="form-control" type="text" id="fname" name="fname"
                           maxlength="45" placeholder="Kobe" onkeyup="lettersOnly(this)">
                </div>
                <div class="form-group col-lg-4">
                    <label for="lname" class="">Last Name:</label>
                    <input class="form-control" type="text" id="lname" required name="lname"
                           maxlength="45" placeholder="Bryant" onkeyup="lettersOnly(this)">
                </div>
                <div class="form-group col-lg-4">
                    <label for="anumber" class="">Admin Number:</label>
                    <input class="form-control" type="text" id="anumber" required name="anumber"
                           maxlength="45" placeholder="2000XXX">
                </div>
            </div>
            <div class="form-group">
                <label for="slct1">Faculty</label>
                <select class="form-control" id="slct1" name="slct1" onchange="populate('slct1', 'slct2')">
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
                <label for="slct2">Course Title</label>
                <select class="form-control" id="slct2" name="slct2">
                    <option class="form-control" value="Select your school first before selecting course" hidden>--- Select Faculty First ---</option>

                </select>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-8">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" required name="email" placeholder="name@example.com">
                </div>
                <div class="form-group col-lg-4">
                    <label for="cnumber">Contact Number:</label>
                    <input class="form-control" type="text" id="cnumber" required name="cnumber"
                           maxlength="45" placeholder="Optional" pattern="\d{8}" onkeyup="numbersOnly(this)">
                </div>
            </div>
            <div class="form-group">
                <label for="intro">Introduction</label>
                <textarea class="form-control" id="intro" name="intro" rows="3" placeholder="Tell us more about yourself..." onkeyup="wordcount(this.value), textCounter(this, 'counter', 1000);"></textarea>
            </div>
            <div class="form-row">
                <label for="counter" class="col-form-label">Word:</label>
                <div class="col-xs-2">
                    <input disabled  maxlength="3" size="3" value="1000" id="counter">
                </div>
                <label for="w_count" class="col-form-label">Count:</label>
                <div class="col-xs-1">
                    <input disabled  maxlength="3" size="3" value="0" id="w_count">
                </div>                        
            </div>
            <div class="form-group becentered">
                <button type="submit" class="btn btn-outline-light d-inline">Sign Up</button>
            </div>
        </form>
    </div>
</div>

