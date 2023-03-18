<html>
    <head>
        <title> Contact </title>
        
        <style>
            h3{
                color:#393053;
                font-weight:bold;
            }
            
            input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }
        input[type=submit],
        input[type=reset] {
            background-color:#393053;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }     

        input[type=submit]:hover ,
        input[type=reset]:hover{
            background-color: #5C5470;
        }

        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        </style>
    </head>

    <body>
        <h3> Contact </h3>
        <div id="after_submit">
            <?php echo(validate_context());?>
        </div>
        <form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">

            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" value="<?php echo validate_form("name")?>" size="30" /><br />

            </div>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" value="<?php echo validate_form("email")?>" size="30" /><br />

            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" rows="7" cols="30"><?php echo validate_form("message")?></textarea><br />
            </div>

            <input id="submit" name="submit" type="submit" value="Send email" />
            <input id="clear" name="clear" type="reset" value="clear form" />

        </form>
    </body>

</html>