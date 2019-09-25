
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form class="login100-form validate-form" action="{{url("/phanhoi")}}" method="post">
                <span class="login100-form-title p-b-49">
						Survey
					</span>

                @csrf
                <div class="form-group">
                    <label> Name</label>
                    <input type="text" class="form-control" name="student_name" value="{{old("student_name")}}" placeholder=" name">
                    @if($errors->has("student_name"))
                        <p class="error" style="color: red">{{$errors->first("student_name")}}</p>
                    @endif

                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="email" class="form-control" name="email" value="{{old("email")}}" placeholder="email">
                    @if($errors->has("email"))
                        <p class="error" style="color: red">{{$errors->first("email")}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>telephone</label>
                    <input type="number" class="form-control" name="telephone" value="{{old("telephone")}}" placeholder="telephone" >
                    @if($errors->has("telephone"))
                        <p class="error" style="color: red">{{$errors->first("telephone")}}</p>
                    @endif
                </div>
                <div class="form-group">
                    <label>feedback</label>
                    <input type="text" class="form-control" name="feedback" value="{{old("feedback")}}" placeholder="feedback"style="width: 100% ;height: 300px" >
                    @if($errors->has("feedback"))
                        <p class="error" style="color: red">{{$errors->first("feedback")}}</p>
                    @endif
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-outline-danger">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>