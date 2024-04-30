<?php include './inc/header.php'; ?>

<div class="main-content">
    <div class="back-page">
       <div class="container-fluid">
            <ul>
                <li><a href="#?">Home</a></li>
                <li>/</li>
                <li>My Job Match Choices</li>
            </ul>
        </div>
    </div>

    <section class="job-match-choices">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="box1">
                        <h2>My Job Match Choices <a href="#?" data-bs-toggle="modal" data-bs-target="#exampleModal-1">Edit <img src="images/edit2.svg" alt=""></a></h2>
                        <ul>
                            <li>
                                <img src="images/i5.svg" alt="">
                                <h5><span>Daily Commute</span>100 Miles of Rancho Santa Margarita, CA</h5>
                            </li>
                            <li>
                                <img src="images/i6.svg" alt="">
                                <h5><span>Minimum Desired Wage</span>$ 100 ( Annually ) </h5>
                            </li>
                            <li>
                                <img src="images/i7.svg" alt="">
                                <h5><span>Work Status</span>Actively looking</h5>
                            </li>
                            <li>
                                <img src="images/i8.svg" alt="">
                                <h5><span>Work Status</span>Full Time, Contract to Perm</h5>
                            </li>
                        </ul>
                    </div>
                    <div class="box2">
                        <h2>Job Category Matching<a href="#?" data-bs-toggle="modal" data-bs-target="#exampleModal-2">Add <img src="images/plus.svg" alt=""></a></h2>
                        <ul>
                            <li>Adult Basic and Secondary Educationand Literacy Teachers and Instructors <img src="images/delete.svg" alt=""></li>
                            <li>Career/Technical Education Teachers, Middle School <img src="images/delete.svg" alt=""></li>
                            <li>Forklift Drivers & Fork Lift Operators  <img src="images/delete.svg" alt=""></li>
                            <li>Information Technology Project Managers  <img src="images/delete.svg" alt=""></li>
                        </ul>
                    </div>
                    <div class="box1 box3">
                        <h2>Optional Matching Fields <a href="#?" data-bs-toggle="modal" data-bs-target="#exampleModal-3">Edit <img src="images/edit2.svg" alt=""></a></h2>
                        <ul>
                            <li>
                                <img src="images/i9.svg" alt="">
                                <h5><span>Education</span>Master/Doctorate/PhD/MD/JD/Other Advanced Degree</h5>
                            </li>
                            <li>
                                <img src="images/i10.svg" alt="">
                                <h5><span>US Work Authorization</span>Yes</h5>
                            </li>
                            <li>
                                <img src="images/i11.svg" alt="">
                                <h5><span>US Military Veteran</span>No</h5>
                            </li>
                            <li>
                                <img src="images/i7.svg" alt="">
                                <h5><span>Remote Type</span>Onsite</h5>
                            </li>
                            <li>
                                <img src="images/i12.svg" alt="">
                                <h5><span>Desired Shifts</span>1stnd Shift (Usually 5pm - 1am) <br>2nd Shift (Usually 5pm - 1am)</h5>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box4">
                        <h2>Certifications / Licenses<a href="#?" data-bs-toggle="modal" data-bs-target="#exampleModal-4">Add <img src="images/plus.svg" alt=""></a></h2>
                        <ul>
                            <li>
                                <div class="text-wrap">
                                    <h5>Finance & Accounting: CPA (Certified Public Accountant) </h5>
                                    <h6><img src="images/watch.svg" alt=""> Does Not Expire</h6>
                                </div>
                                <img src="images/i13.svg" alt="">
                            </li>
                            <li>
                                <div class="text-wrap">
                                    <h5>Finance & Accounting: Series 7 </h5>
                                    <h6><img src="images/watch.svg" alt=""> Jun 2023 to Oct 2048</h6>
                                </div>
                                <img src="images/i13.svg" alt="">
                            </li>
                            <li>
                                <div class="text-wrap">
                                    <h5>Operations: APICS - CLTD (Certified in Logistics, Transportation and Distribution) </h5>
                                    <h6><img src="images/watch.svg" alt=""> Jun 2023 to Oct 2048</h6>
                                </div>
                                <img src="images/i13.svg" alt="">
                            </li>
                        </ul>
                    </div>
                    <div class="box5">
                        <h2>Skills<a href="#?" data-bs-toggle="modal" data-bs-target="#exampleModal-5">Edit <img src="images/edit2.svg" alt=""></a></h2>
                        <ul>
                            <li>DataEntry > Typing > 35 - 45 WPM (Average)</li>
                            <li>Welding > Heli-Arc</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include './inc/footer.php'; ?>




<!-- box1 Modal -->
<div class="modal box-midal fade" id="exampleModal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h2>My Job Match Choices</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="input-wrap">
                    <label for="">Current Work Status<span>*</span></label>
                    <select name="" id="">
                        <option value="">Actively Looking</option>
                    </select>
                </div>
                <div class="input-wrap">
                    <label for="">Employment I Will Consider ( Select all the that apply )<span>*</span></label>
                    <ul>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>Contract</span>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>Contract to Perm </span>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>Full Time </span>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>Internship</span>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>Part-Time</span>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>Temporary</span>
                        </li>
                    </ul>
                </div>
                <div class="input-wrap">
                    <label for="">Minimum Desired Wage<span>*</span></label>
                    <div class="flex-box">
                        <input type="text" placeholder="$ 100">
                        <select name="" id="">
                            <option value="">Annually</option>
                        </select>
                    </div>
                </div>
                <div class="input-wrap">
                    <label for="">Maximum Daily Commute</label>
                    <select name="" id="">
                        <option value="">Less than 25 Miles</option>
                    </select>
                </div>
                <div class="input-wrap">
                    <label for="">Maximum Daily Commute</label>
                    <div class="img-wrap">
                        <input type="text" placeholder="Newport Beach, CA 92663">
                        <img src="images/edit.svg" alt="">
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#?" class="white-btn">Cancel</a>
            <a href="#?" class="green-btn">Update</a>
        </div>
    </div>
  </div>
</div>


<!-- box2 Modal -->
<div class="modal box-midal fade" id="exampleModal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Edit Optional Matching Fields </h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="input-wrap">
                    <label for="">Education</label>
                    <select name="" id="">
                        <option value="">Actively Looking</option>
                    </select>
                </div>
                <div class="input-wrap">
                    <label for="">US Work Authorization</label>
                    <ul>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>I am legally authorized to work in the United States for any employer </span>
                        </li>
                    </ul>
                </div>
                <div class="input-wrap">
                    <label for="">Veteran of the US Military</label>
                    <ul>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>I am a veteran of the US Military </span>
                        </li>
                    </ul>
                </div>
                <div class="input-wrap">
                    <label for="">Desired Shifts (if any)</label>
                    <ul>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>1st Shift (Usually 9am - 5pm) </span>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>2nd Shift (Usually 5pm - 1am) </span>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>3rd Shift (Usually 1am - 9am) </span>
                        </li>
                    </ul>
                </div>
                <div class="input-wrap">
                    <label for="">Remote Type (if any)</label>
                    <ul>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>Not Specified </span>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>Hybrid</span>
                        </li>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>Onsite</span>
                        </li>
                    </ul>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#?" class="white-btn">Cancel</a>
            <a href="#?" class="green-btn">Update</a>
        </div>
    </div>
  </div>
</div>


<!-- box3 Modal -->
<div class="modal box-center box-midal fade" id="exampleModal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Add or edit certification</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="">
                <div class="input-wrap">
                    <label for="">Licenses & Certifications list</label>
                    <select name="" id="">
                        <option value="">-Select Licenses & Certification</option>
                    </select>
                </div>
                <div class="input-wrap">
                    <label for="">Time Period</label>
                    <ul>
                        <li>
                            <input type="checkbox" name="" id="">
                            <span>This certification or license does not expire</span>
                        </li>
                    </ul>
                </div>
                <div class="input-wrap">
                    <label for="">Minimum Desired Wage<span>*</span></label>
                    <div class="flex-box">
                        <div class="cover">
                            <h6>Start Date <span>*</span></h6>
                            <input type="date" name="" id="">
                        </div>
                        <div class="cover">
                            <h6>End Date <span>*</span></h6>
                            <input type="date" name="" id="">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <a href="#?" class="white-btn">Cancel</a>
            <a href="#?" class="green-btn">Update</a>
        </div>
    </div>
  </div>
</div>


<!-- box4 Modal -->
<div class="modal box-center box-midal fade" id="exampleModal-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Add Or Edit Skills</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <h2>Skills</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. </p>
            <div class="input-search">
                <input type="text" class="searchInput" placeholder="">
            </div>
            <div class="tags">
                <ul class="tagList"></ul>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#?" class="white-btn">Cancel</a>
            <a href="#?" class="green-btn">Update</a>
        </div>
    </div>
  </div>
</div>


<!-- box5 Modal -->
<div class="modal box-midal fade" id="exampleModal-5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Browse and Select job Categories</h2>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <input type="search" name="" id="" placeholder="Search new job titles to match" class="search-ber">
            <h4 class="accor-heading">Job Titles Select For Rapid Matching</h4>
            <div class="accordion">
                <dl>
                    <dt><input type="checkbox" name="" id="">Adult Basic and Secondary Education and Literacy Teachers and Instructors <img src="images/arrow-down3.svg" alt=""></dt>
                    <dd class="active">
                        <h6>Related Categories</h6>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Kindergarten Teachers, Except Special Education<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd class="active">
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Librarians<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Middle School Teachers, Except Special and Career/Technical Education<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Probation Officers and Correctional Treatment Specialists<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Secondary School Teachers, Except Special and Career/Technical Education<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt><input type="checkbox" name="" id="">Career/Technical Education Teachers, Middle School <img src="images/arrow-down3.svg" alt=""></dt>
                    <dd>
                        <h6>Related Categories</h6>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Kindergarten Teachers, Except Special Education<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Librarians<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Middle School Teachers, Except Special and Career/Technical Education<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt><input type="checkbox" name="" id="">Middle School Teachers, Except Special and Career/Technical Education<img src="images/arrow-down3.svg" alt=""></dt>
                    <dd>
                        <h6>Related Categories</h6>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Kindergarten Teachers, Except Special Education<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Librarians<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Middle School Teachers, Except Special and Career/Technical Education<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt><input type="checkbox" name="" id="">Probation Officers and Correctional Treatment Specialists<img src="images/arrow-down3.svg" alt=""></dt>
                    <dd>
                        <h6>Related Categories</h6>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Kindergarten Teachers, Except Special Education<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Librarians<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Middle School Teachers, Except Special and Career/Technical Education<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </dd>
                </dl>
                <dl>
                    <dt><input type="checkbox" name="" id="">Secondary School Teachers, Except Special and Career/Technical Education<img src="images/arrow-down3.svg" alt=""></dt>
                    <dd>
                        <h6>Related Categories</h6>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Kindergarten Teachers, Except Special Education<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Librarians<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="accordion-nested">
                            <dl>
                                <dt> <input type="checkbox" name="" id=""> Middle School Teachers, Except Special and Career/Technical Education<img src="images/arrow-down3.svg" alt=""></dt>
                                <dd>
                                    <div class="accordion-nested">
                                        <dl>
                                            <dt><input type="checkbox" name="" id="">Option 1</dt>
                                            <dt><input type="checkbox" name="" id="">Option 2</dt>
                                            <dt><input type="checkbox" name="" id="">Option 3</dt>
                                        </dl>
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#?" class="white-btn">Cancel</a>
            <a href="#?" class="green-btn">Update</a>
        </div>
    </div>
  </div>
</div>