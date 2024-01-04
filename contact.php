<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>Contact Us</title> 
    </head>

    <body>
        <div id="container">
            <?php include("includes/header.php"); ?>

            <main id="main">
                <div id="headingContact">
                    <h2>Get in Touch</h2>
                </div>
                <form method="POST">

                    <div>
                        <label for="firstname">First Name:</label>
                        <input 
                            type="text" 
                            name="firstname" 
                            id="firstname" 
                            placeholder="Enter First Name"
                            required
                        >
                    </div>
                    <div>
                        <label for="email">Email Address:</label>
                        <input type="email" name="email" id="email" required>
                        
                    </div>
                    <div>
                        <label for="comments">Comments</label>
                        <textarea name="comments" id="comments" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div id="newsletter">
                        <label for="updates">Sign up for email updates?</label>
                        <input type="checkbox" name="updates" id="updates" value="1" checked>
                    </div>


                    <div>
                        <input type="submit" value="Send Details">
                    </div>
                </form>

            </main>

            <?php include('includes/footer.php'); ?>

        </div>
    </body>
    <script src="js/script.js"></script>

</html>
