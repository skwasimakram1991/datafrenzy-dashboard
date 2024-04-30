<?php include './inc/header.php'; ?>

<div class="main-content">
    <div class="back-page">
       <div class="container-fluid">
            <ul>
                <li><a href="#?">Home</a></li>
                <li>/</li>
                <li>Edit Contact Information</li>
            </ul>
        </div>
    </div>

    <section class="edit-contact">
        <div class="container-fluid">
            <div class="box">
                <h2>Edit Details</h2>
                <form action="">
                    <div class="row">
                        <div class="col-lg-4">
                            <h3>General Details</h3>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="">First Name <span>*</span></label>
                                    <input type="text" placeholder="Dian">
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Last Name <span>*</span></label>
                                    <input type="text" placeholder="Nugraha">
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Phone Number<span>*</span></label>
                                    <div class="wraper">
                                        <div class="select-dropdown">
                                            <a href="#?" role="button" data-value="" class="choose-country"><span><img src="images/flag.svg" alt=""></span> <img src="images/arrow-down2.svg" alt=""></a>
                                            <ul class="select-dropdown__list">
                                                <li data-value="1" class="select-dropdown__list-item"><img src="images/flag.svg" alt=""></li>
                                                <li data-value="2" class="select-dropdown__list-item"><img src="images/flag.svg" alt=""></li>
                                            </ul>
                                        </div> 
                                        <input type="number" name="" id="" placeholder="(808) 555-0118">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Email<span>*</span></label>
                                    <input type="email" name="" id="" placeholder="Diannugraha@testmail.com">
                                </div>
                                <div class="col-lg-12">
                                <label for="">City, State or Zip<span>*</span></label>
                                <input type="text" placeholder="3891 Ranchview Dr. Richardson, California 62639">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-status">
                        <div class="row">
                            <div class="col-lg-4">
                                <h3>Profile Status</h3>
                                <p>Horem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero</p>
                            </div>
                            <div class="col-lg-8">
                                <label for="">Rapid Match Profile Status<span>*</span></label>
                                <select name="" id="">
                                    <option value="">Active</option>
                                    <option value="">Deactivated</option>
                                    <option value="">InActive</option>
                                    <option value="">Pause-180 Days</option>
                                    <option value="">Pause-30 Days</option>
                                    <option value="">Pause-60 Days</option>
                                    <option value="">Pause-90 Days</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="wraperbox">
                        <h4>I opt in allowing you to contact me via SMS text messaging</h4>
                        <img src="images/bg-email.svg" alt="" class="pabs">
                        <input type="checkbox" id="switch" /><label for="switch"></label>
                    </div>
                    <div class="btn-box">
                        <a href="#?" class="white-btn">Cancel</a>
                        <input type="submit" value="Save Details" class="green-btn">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<?php include './inc/footer.php'; ?>