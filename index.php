<?php include 'controllers/db.php';?>

<?php include 'head.php'?>
        <div class="main">
            <section class="bio-data-info">
                <div class="main-info">
                    <div class="bio-info">
                        <h1>Bio Data <span style="color:rgb(226, 108, 163)">Profile Information</span></h1>
                    </div>
                    <div class="last-login">
                        <small><strong>Last Login</strong> Yesterday 9:30pm</small>
                    </div>

                </div>
                
                <hr>
                <div class="edit-profile">
                    <div class="profile-account">
                        <h3>Profile Account/Photo</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quisquam ea nulla. Lorem ipsum, 
                             consectetur delectus?</p>
                    </div>
                    <div class="upload-photo">
                        <h3>Upload Photo</h3>
                        <small>Max Upload File Size 32MB</small><br>
                        <button type="submit" class="btn" id="upload">Upload File</button> <button type="submit" class="btn">Edit Photo</button>
                    </div>
        
                </div>
                <div class="personal-info">
                    <div class="personal-info-detail">
                        <h3>Personal Information</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, 
                           </p>
                    </div>
                    <div class="forms">
                        <div class="form-group">
                            <label for="surname">Surname</label>
                            <input type="text" class="form-control" value="<?php echo $user->username?>">
                        </div>
                        <div class="form-group">
                            <label for="middle-name">Middle Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Firstname">Firstname</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="date">Date of Birth</label>
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" value="<?php echo $user->username?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="religion">Religion</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="date">Marital Status</label>
                            <select class="form-control">
                                <option value="Married">Single</option>
                                <option value="Married">Married</option>
                                <option value="Married">Divorced</option>
                                <option value="Married">Widowed</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="phone">Gender</label>
                            <select class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="other">Other</option>
        
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="short-bio">Short Bio</label>
                            <textarea class="bio" name="" id="" cols="50" rows="4">
        
                            </textarea>
                        </div>
        
                    </div>
                </div>
            </section>
        </div>
    
    
</div>
<div class="footer">
    <div class="first-extra">
        <h3>Social Links</h3>
    <ul>
    
        <li><a href="">Popular Gists</a></li>
        <li><a href="">Students Vibes</a></li>
        <li><a href="">School Groups</a></li>
        <li><a href="">Find a study Group</a></li>
    </ul>
    </div>
    <div class="second-extra">
        <h3>Study Links</h3>
        <ul>
            <li><a href="">Check Result</a></li>
            <li><a href="">Time Table</a></li>
            <li><a href="">Past Questions</a></li>
            <li><a href="">Check Addmission Status</a></li>
        </ul>
    </div>
    <div class="third-extra">
        <h3>Extras</h3>
        <ul>
            <li><a href="">Departments</a></li>
            <li><a href="">Faculties</a></li>
            <li><a href="">Courses</a></li>
            <li><a href="">Administration</a></li>
        </ul>
    </div>
    <div>
        <img class="st-logo" src="images/kingscliq.png">
    </div>
    
    
    
</div>
<div class="copyrights">
    &copy;2019 | Kingscliq Academy | All Rights Reserved
</div>
<script src="https://kit.fontawesome.com/67c075aebc.js" crossorigin="anonymous"></script>
</body>
</html>