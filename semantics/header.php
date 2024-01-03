<?php
$pageName = basename($_SERVER['REQUEST_URI']);
?>

<header>
        <img src="images/logo.png" width="125px" height="125px"
                    alt="logo">
        <nav id="topics">        
            <ul>
                <li class="<?php if($pageName=='index.php'){echo 'active';}?>">
                    <a href="index.php" >Home
                    </a>
                </li>
                <li class="<?php if($pageName=='aboutUs.php'){echo 'active';}?>">
                    <a href="aboutUs.php">About Us</a>
                </li>
                <li class="<?php if($pageName=='findUs.php'){echo 'active';}?>">
                    <a href="findUs.php">Find Us</a>
                </li>
                <li class="<?php if($pageName=='compCourses.php'){echo 'active';}?>">
                    <a href="compCourses.php">Computing Courses</a>
                </li>
                <li class="<?php if($pageName=='desCourses.php'){echo 'active';}?>">
                    <a href="desCourses.php">Design Courses</a>
                </li>
                <li class="<?php if($pageName=='facilities.php'){echo 'active';}?>">
                    <a href="facilities.php">Facilities</a>
                </li>
                <li class="<?php if($pageName=='learning.php'){echo 'active';}?>">
                    <a href="learning.php">Learning Resources</a>
                </li>
                <li class="<?php if($pageName=='staff.php'){echo 'active';}?>">
                    <a href="staff.php">Staff</a>
                </li>
                <li class="<?php if($pageName=='students.php'){echo 'active';}?>">
                    <a href="students.php">Students</a>
                </li>
                <li class="<?php if($pageName=='business.php'){echo 'active';}?>">
                    <a href="business.php">Business</a>
                </li>
                <li class="<?php if($pageName=='contact.php'){echo 'active';}?>">
                    <a href="contact.php">Contact</a>
                </li>
            </ul>
        </nav>
</header>