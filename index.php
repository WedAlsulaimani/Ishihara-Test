
<html>
    <head>
        <meta charset="utf-8">
        <title>Form Validation</title>
        <style type="text/css">
            p {margin: 0px; }
            .error {color: red}
            p.head {font-weight: bold; margin-top: 10px;}
        </style>
    </head>
    <body>
        <p>Hi <?php print($_POST["Fname"]); ?>. Thank you for
        completing the survey. You have been added to the 
    <?php print($_POST["book"]); ?>mailing list.</p>
    <p class="head">The following information has been saved in our data base:</p>
    <p>Name: <?php print($_POST["Fname"]);
    print($_POST["Lname"]); ?></p>
    <p>Email: <?php print($_POST["Email"]); ?></p>
    <p>Phone <?php print($_POST["Phone"]); ?></p>
    <p>OS: <?php print($_POST["os"]); ?></p>
    <p class="head">This is only a simple form.</p>
    </body>
</html>