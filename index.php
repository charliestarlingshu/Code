<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>Home</title> 
    </head>

    <body class="home">
        <div id="container">
            <?php include('includes/header.php'); ?>
            <main>
                <div id="bannerContainer">
                    <img src="images/banner.jpeg" alt="banner">
                    <a href="contact.php">
                        <button class="enrol">Enrol Now</button>
                    </a>
                </div>
                
                <section id="section1">
                    <div id="heading">
                        <p>Studying at Cantor College</p>
                    </div>

                    <aside id="asideText">
                        <p>There's really nothing comparable to the incredible community that's grown
                            within our College over each sucessive year. Our students are proud to showcase
                            their learning in all aspects of their daily lives and come together to help eachother aspire
                            during their time here. <br><br> With the vibrant colours of student-only clubs shining through
                            the night, and the peaceful library <i>Open-24-Hours</i>, we guarantee anyone and everyone choosing to
                            study with us has a place they can call home.
                        </p>
                    </aside>

                    <aside>
                        <img src="images/social.jpeg" alt="Welcome to Sheffield" width="100%" height="auto">
                    </aside>

                </section>

                <section id="section2">
                    <div id="heading">
                        <p>Support at Cantor</p>
                    </div>

                    <aside>
                        <img src="images/support.jpg" alt="Support" width="45%" height="auto">
                    </aside>

                    <aside id="asideText">
                        <p>Here at Cantor College, we provide trained specialists to support our
                            students with any troubles they could be facing. Whether it's academic,
                            financial, social or emotional, we'll arrange regular checkups with a member of our
                            support team and get you the help you need.
                        </p>
                    </aside>

                </section>

                <section id="section3">
                    <div id="heading">
                        <p>Our Techology Standards</p>
                    </div>

                    <aside id="asideText">
                        <p>Being a tech-based college, it's important to us that our students are more than well
                            equipped and ready to tackle the problems of the modern day. We're consistently keeping 
                            up-to-date with emerging technologies and new software developments in order to 
                            provide the best learning platform we can, and to ensure our students learn from the technology
                            relevant for their future careers. 
                        </p>
                    </aside>
                    <aside id="asideText" class="right">
                        <p>
                            The students have access to a range of pre-paid learning libraries online, one of them being LinkedIn Learning.
                            The college has partnered with LinkedIn Learning to give the students an industry-standard source to learn 
                            more about the topics they are studying, or to develop their own skills in their own time. We believe that 
                            a student should be given these useful resources to have the opportunity to broaden their skill set if wanted.
                        </p>
                    </aside>
                    <img src="images/tech.jpg" alt="Technology" width="45%" height="auto">

                </section>

            </main>
        
        <?php include('includes/footer.php'); ?>

        </div>
    </body>
</html>
