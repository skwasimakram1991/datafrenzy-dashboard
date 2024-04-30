<?php include './inc/header.php'; ?>

<div class="main-content">
    <div class="back-page">
       <div class="container-fluid">
            <ul>
                <li><a href="insex.php">Home</a></li>
                <li>/</li>
                <li>Edit Contact Information</li>
            </ul>
        </div>
    </div>

    <section class="resumebuilder edit-contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="box">
                        <form action="">
                            <div class="g60">
                                <div class="uploadoldresume">
                                    <div class="oldresume-left">
                                        <h3>Upload Old Resume</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>
                                    <div class="oldresume-right">
                                        <a href="#!" class="white-btn clicktouploadresume" onclick="triggerFileInput()">Upload Resume</a>
                                        <input type="file" name="" id="" class="fileuploadresume" style="display: none;">
                                    </div>
                                </div>

                                <div class="summerybx mb-0">
                                    <h3>Personal Details</h3>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="inputbx">
                                                <label>First Name<span>*</span></label>
                                                <input type="text" name="" id="" placeholder="Enter your first name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="inputbx">
                                                <label>Last Name<span>*</span></label>
                                                <input type="text" name="" id="" placeholder="Enter your last name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="inputbx">
                                                <label>Email<span>*</span></label>
                                                <input type="email" name="" id="" placeholder="Enter your email">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="inputbx">
                                                <label>Phone Number<span>*</span></label>
                                                <div class="wraper">
                                                    <div class="select-dropdown">
                                                        <a href="#" role="button" data-value="" class="click-button"><span><img src="images/flag.svg" alt=""></span> <img src="images/arrow-down2.svg" alt=""></a>
                                                        <ul class="select-dropdown__list">
                                                            <li data-value="1" class="select-dropdown__list-item"><img src="images/flag.svg" alt=""></li>
                                                            <li data-value="2" class="select-dropdown__list-item"><img src="images/flag.svg" alt=""></li>
                                                        </ul>
                                                    </div> 
                                                    <input type="number" name="" id="" placeholder="(808) 555-0118">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="inputbx">
                                                <label>City<span>*</span></label>
                                                <input type="email" name="" id="" placeholder="Ex. Newport Beach">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="inputbx">
                                                        <label>State<span>*</span></label>
                                                        <input type="text" name="" id="" placeholder="Ex. CA">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="inputbx">
                                                        <label>Zip Code<span>*</span></label>
                                                        <input type="text" name="" id="" placeholder="Ex. 12345">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="summerybx mt30">
                                    <h3>Professional Summary</h3>
                                    <p>
                                        Write 2-4 short & energetic sentences to interest the reader! Mention your role, experience & most importantly - your biggest achievements, best qualities and skills.
                                    </p>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="textarea">
                                                <div class="textareatop">
                                                    <div class="tt-left">
                                                        <img src="images/textarea-img.svg" alt="">
                                                    </div>
                                                    <div class="tt-right">
                                                        <a href="#!" class="aibtn">
                                                            <img src="images/aitool.svg" alt="">
                                                            Generate Summary With AI
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="ttmid">
                                                    <textarea name="" id=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="summerybx mt30">
                                    <h3>Work Experience</h3>
                                    <p>
                                        Show your relevant experience (last 10 years). Use bullet points to note your achievements, if possible use numbers/facts (Achieved X. measured by Y, by doing Z).
                                    </p>
                                    <div class="job-bx">
                                        <div class="job-title">
                                            <h4>Job Title Will Come Here</h4>
                                            <div class="deletebtn">
                                                <a href="#!" class="delete">
                                                    <img src="images/delete.svg" alt="">
                                                </a>
                                                <a href="#!" class="downarw">
                                                    <img src="images/arrow-down3.svg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="jobform">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="inputbx">
                                                        <label>Job Title<span>*</span></label>
                                                        <input type="text" name="" id="" placeholder="Enter Your Job Title">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="inputbx">
                                                        <label>Job Title<span>*</span></label>
                                                        <select name="" id="">
                                                            <option value="">Enter Your Job Title</option>
                                                            <option value="">1</option>
                                                            <option value="">1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputbx">
                                                        <label>Company<span>*</span></label>
                                                        <input type="text" name="" id="" placeholder="Company Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputbx">
                                                        <label>Location<span>*</span></label>
                                                        <input type="text" name="" id="" placeholder="Location">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputbx">
                                                        <label>Start Date </label>
                                                        <input type="date" name="" id="" placeholder="Location">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputbx">
                                                        <label>End Date </label>
                                                        <input type="date" name="" id="" placeholder="Location">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="textarea">
                                                        <div class="textareatop">
                                                            <div class="tt-left">
                                                                <img src="images/textarea-img.svg" alt="">
                                                            </div>
                                                            <div class="tt-right">
                                                                <a href="#!" class="aibtn">
                                                                    <img src="images/aitool.svg" alt="">
                                                                    Generate Summary With AI
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="ttmid">
                                                            <textarea name="" id=""></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-bx">
                                        <div class="job-title">
                                            <h4>Administrative Associate</h4>
                                            <div class="deletebtn">
                                                <a href="#!" class="delete">
                                                    <img src="images/delete.svg" alt="">
                                                </a>
                                                <a href="#!" class="downarw">
                                                    <img src="images/arrow-down3.svg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <p>Oct 2012-Present</p>
                                    </div>
                                    <div class="addedu">
                                        <a href="#!">+ Add One More Education</a>
                                    </div>
                                </div>

                                <div class="summerybx mt30">
                                    <h3>Education</h3>
                                    <p>
                                    A varied education on your resume sums up the value that your learnings and background will bring to job
                                    </p>
                                    <div class="job-bx">
                                        <div class="job-title">
                                            <h4>School / College Name Will Come Here</h4>
                                            <div class="deletebtn">
                                                <a href="#!" class="delete">
                                                    <img src="images/delete.svg" alt="">
                                                </a>
                                                <a href="#!" class="downarw">
                                                    <img src="images/arrow-down3.svg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="jobform">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="inputbx">
                                                        <label>School / College Name</label>
                                                        <input type="text" name="" id="" placeholder="Enter Your School / College Name*">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="inputbx">
                                                        <label>Degree</label>
                                                        <input type="text" name="" id="" placeholder="Degree">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputbx">
                                                        <label>Subject</label>
                                                        <input type="text" name="" id="" placeholder="Company Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputbx">
                                                        <label>Location</label>
                                                        <input type="text" name="" id="" placeholder="Location">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputbx">
                                                        <label>Start Date </label>
                                                        <input type="date" name="" id="" placeholder="Location">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputbx">
                                                        <label>End Date </label>
                                                        <input type="date" name="" id="" placeholder="Location">
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-12">
                                                    <div class="textarea">
                                                        <div class="textareatop">
                                                            <div class="tt-left">
                                                                <img src="images/textarea-img.svg" alt="">
                                                            </div>
                                                            <div class="tt-right">
                                                                <a href="#!" class="aibtn">
                                                                    <img src="images/aitool.svg" alt="">
                                                                    Generate Summary With AI
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="ttmid">
                                                            <textarea name="" id=""></textarea>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-bx">
                                        <div class="job-title">
                                            <h4>Administrative Associate</h4>
                                            <div class="deletebtn">
                                                <a href="#!" class="delete">
                                                    <img src="images/delete.svg" alt="">
                                                </a>
                                                <a href="#!" class="downarw">
                                                    <img src="images/arrow-down3.svg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <p>Oct 2012-Present</p>
                                    </div>
                                    <div class="addedu">
                                        <a href="#!">+ Add One More Education</a>
                                    </div>
                                </div>

                                <div class="summerybx mt30">
                                    <h3>Certification</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.
                                    </p>
                                    <div class="job-bx">
                                        <div class="job-title">
                                            <h4>Certification Name</h4>
                                            <div class="deletebtn">
                                                <a href="#!" class="delete">
                                                    <img src="images/delete.svg" alt="">
                                                </a>
                                                <a href="#!" class="downarw">
                                                    <img src="images/arrow-down3.svg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="jobform">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="inputbx">
                                                        <label>Certificate Name</label>
                                                        <input type="text" name="" id="" placeholder="Certificate Name">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="inputbx">
                                                        <label>Organization</label>
                                                        <input type="text" name="" id="" placeholder="Organization Name">
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-6">
                                                    <div class="inputbx">
                                                        <label>Start Date </label>
                                                        <input type="date" name="" id="" placeholder="Location">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="inputbx">
                                                        <label>End Date </label>
                                                        <input type="date" name="" id="" placeholder="Location">
                                                    </div>
                                                    <div class="donotexpire">
                                                        <label> <input type="checkbox" name="" id=""> Do not expire</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-bx">
                                        <div class="job-title">
                                            <h4>Finance & Accounting: CPA (Certified Public Accountant) </h4>
                                            <div class="deletebtn">
                                                <a href="#!" class="delete">
                                                    <img src="images/delete.svg" alt="">
                                                </a>
                                                <a href="#!" class="downarw">
                                                    <img src="images/arrow-down3.svg" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <p>Jun 2023 to Oct 2048</p>
                                    </div>
                                    <div class="addedu">
                                        <a href="#!">+ Add One More Certificate</a>
                                    </div>

                                </div>

                                <div class="summerybx mt30">
                                    <h3>Skills</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. 
                                    </p>
                                    <div class="inputandtag">
                                        <div class="input-search">
                                            <input type="text" class="searchInput" placeholder="">
                                        </div>
                                        <div class="tags">
                                            <ul class="tagList">
                                                
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="btn-box mb-0">
                                    <a href="#?" class="white-btn">Cancel</a>
                                    <input type="submit" value="Save Information" class="green-btn">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="btnstop">
                        <a href="#!" class="button1"> <img src="images/template.svg" alt=""> Select Template</a>
                        <a href="#!" class="green-btn">Download</a>
                    </div>
                    <div class="tempcontainer">
                        <img src="images/template-large.svg" alt="">
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</div>

<?php include './inc/footer.php'; ?>
<script>
    $(function() {
  var loc = window.location.href; // returns the full URL
  if(/resume-builder/.test(loc)) {
    $('body').addClass('nosidebar');
  }
});
</script>