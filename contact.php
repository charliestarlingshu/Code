<!DOCTYPE html>
<html lang="en-GB">
    <head>
        <title>Contact Us</title> 
    </head>

    <body>
        <div id="container">
            <?php include("includes/header.php"); ?>

            <main>
                <form method="">

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
                    <div>
                        <label for="marketing">How did you find out about us?</label>
                        <select name="marketing" id="marketing">
                            <option value="web" selected>Web Search</option>
                            <option value="friend">Friend Reccommendation</option>
                        </select>
                    </div>
                    <div>
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
