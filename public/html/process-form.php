<?php 
    var_dump($_POST);
    var_dump($_GET);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="select.css">
    </head>
    <body>
        <form method="POST" action="/process-form.php">
            <p>
                <label for="username">Username</label>
                <input id="username" name="username" type="text" placeholder="Enter Username">
            </p>
            <p>
                <label for="password">Password</label>
                <input id="password" name="password" type="password" placeholder="Enter Password">
            </p>
            <p>
                <input type="submit"  value="Login">
            </p>


        </form>

        <form method="GET" action="/process-form.php">
                <p>
                <label for="recipient">To:</label>
                <input id="recipient" name="recipient" type="text">
            </p>
            <p>
                <label for="sender">From</label>
                <input id="sender" name="sender" type="text">
            </p>
            <p>
                <label for="subject">Subject</label>
                <input id="subject" name="subject" type="text">
            </p>
            <p>
                <textarea id="email_body" name="email_body" rows="15" cols="80"></textarea>
            </p>
            <p>
                <input type="checkbox" id="copy" name="copy" value="true" checked>
                <label for="copy">Would you like to save a copy to your sent folder?<label>
            </p>
            <p>
                <button type="send">Send</button>
            </p>
        </form>

        <form method="GET" action="/process-form.php">
                <header><h1>Multiple Choice Test</h1></header>
                <p>Are you male or female?</p>
                <label>
                    <input type="radio" name="gender" value="male">
                    Male
                </label>
                <label>
                    <input type="radio" name="gender" value="female">
                    Female
                </label>
                <p>Would you consider yourself "fun"?</p>
                <label>
                     <input type="radio" name="fun" value="yes">
                    Yes
                </label>
                    <input type="radio" name="fun" value="no">
                    No
                </label>
                <label>
                    <input type="radio" name="fun" value="maybe">
                    Maybe
                </label>
                <p>
                    <button type="send">Submit</button>
                </p>
        </form>
        <form method="GET" action="/process-form.php">

            <header>
                <h1>Multi-Checkbox Test</h1>
            </header>

            <p>Which genre of movies do you prefer?</p>
            <label><input type="checkbox" id="cb1" name="genre[]" value="horror">Horror</label>
            <label><input type="checkbox" id="cb2" name="genre[]" value="fantasy">Fantasy</label>
            <label><input type="checkbox" id="cb3" name="genre[]" value="romance">Romance</label>
            <label><input type="checkbox" id="cb4" name="genre[]" value="action">Action</label>
            
            <label for="animal"><h2>Which is your spirit animal?</h2></label>    
            <select id="animal" name="animal[]" multiple>
                <option value="ben">Ben</option>
                <option value="ben_beard">Ben's Beard</option>
                <option value="delorean">The Codeup Delorean</option>
            </select>

            <p>
                <button type="send">Submit</button>
            </p>
        </form>
        <form method="GET" action="/process-form.php">
            <header><h1>Select Testing</h1></header>
            <label for"stroke">Do you think Ben would let you stroke his beard?</label>
            <select id="stroke" name="stroke">
                <option value="1">Yes</option>
                <option value="0" selected>No</option>
            </select>
            <p>
                <button type="send">Submit</button>
            </p>
        </form>
    </body>
</html>




