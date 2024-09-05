<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Gill Sans MT', sans-serif;
            background-color: #fbe2c3;
            zoom: 100%;
        }

        .container-fluid {
            text-align: center;
        }
                
        .container-fluid h1 {
            color: rgb(0, 0, 0);
            font-size: 20px;
            margin-top: 50px;
        }

        #s1 {
            margin-top: 20px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #s1 input,
        #s1 textarea,
        #s1 select {
            border: 2px solid #c2f1c0;
        }

        #s1 input#btn1,
        #s1 input#btn2,
        #s1 input#btn3 {
            padding: 5px;
            width: 65px;
        }

        .light-blue-btn {
            background-color: #add8e6;
            border-color: #add8e6;
            color: #ffffff;
        }

        .light-blue-btn:hover {
            background-color: #59abcb;
            border-color: #8fd9f7;
        }

        .signup-image {
            width: 100%;
            height: 450px;
            max-height: 450px;
        }
    </style>
</head>

<body>
    <section class="vh-100" style="background-color: #fbe2c3;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
                                    <form action="user.php" method="post" class="mx-1 mx-md-4">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" name="name"/>
                                                <label class="form-label" for="form3Example1c">Name</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example3c" class="form-control" name="usn"/>
                                                <label class="form-label" for="form3Example3c">USN</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example4c" class="form-control" name="add"/>
                                                <label class="form-label" for="form3Example4c">Address</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example4cd" class="form-control" name="pw"/>
                                                <label class="form-label" for="form3Example4cd">
                                                    Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1d" class="form-control" name="mb"/>
                                                <label class="form-label" for="form3Example1d">Mobile No</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1e" class="form-control" name="role"/>
                                                <label class="form-label" for="form3Example1e">Role</label>
                                            </div>
                                        </div>
                                        <div class="form-check d-flex justify-content-center mb-5">
                                            <input class="form-check-input me-2" type="checkbox" value=""
                                                id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree all statements in <a href="#!">Terms of service</a>
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button type="submit" class="btn btn-primary btn-lg
                                                light-blue-btn">Register</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                    <img src="https://img.freepik.com/free-photo/ai-generated-modern-styled-entryway_23-2150692173.jpg?size=626&ext=jpg&ga=GA1.1.2086877490.1707982454&semt=ais_ai_generated"
                                        class="img-fluid signup-image" alt="Sample image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
