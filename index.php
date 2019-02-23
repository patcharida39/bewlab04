<html>
<head>
    <meta charset="UTF-8">
    <title>Calculate profit</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" >


    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #FF99CC;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color:#FFCCCC ;
        }

        .active {
            background-color:#FFCCCC ;
        }

    </style>
</head>

<body>

<ul>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="#download">Download</a></li>
</ul>

</body>
</html>


<html>

<body id="Calculate">
</div>

    <style>
        * {
            box-sizing: border-box];
        }

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        label {
            padding: 12px 12px 12px 0;
            display: inline-block;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;

        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        .container {
            border-radius: 10px;
            background-color: #f2f2f2;
            margin-top: 5%;
            padding: 7%;
        }

        .col-25 {
            float: left;
            width: 15%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 50%;
            margin-top: 6px;
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }
    </style>





    <div class="container" >
        <h1 >Information Form</h1> <br><br>

        <form  method="post" action="Controller.php" enctype="multipart/form-data">
            <div class="row">

                <div class="col-25">
                    <label for="fname">First Name</label>
                </div>

                <div class="col-75">
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">
                </div>

            </div>

            <div class="row">

                <div class="col-25">
                    <label for="lname">Last Name</label>
                </div>

                <div class="col-75">
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                </div>
            </div>

            <div class="row">
                <div class="col-25">
                    <label for="bsnname">Business Name</label>
                </div>
                <div class="col-75">
                    <input type="text" id="bsnname" name="bsnname" placeholder="Your Business name..">
                </div>
            </div>

            <div class="row" id="file">
                <input type="file" name="file" id="file" class="input-large"> <br><br>
            </div>



            <div class="row">
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    </body>





</html>

