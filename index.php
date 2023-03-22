<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Form</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/static/img/logo.png">
</head>
<body style="background:url('/static/bg.jpg');background-position: center;background-size: cover;">
    <div id="loader" style="position:fixed;width:100%;height:100%;background-color:rgba(106, 17, 203, 1);z-index: 10000;top:0px;display: none;">
        <div class="spinner-border" style="color:#fff;position:fixed;top:48%;left:49%;" role="status">
          <span class="sr-only"></span>
        </div>
    </div>
    <div class="container mt-5">
        <form onsubmit="document.getElementById('loader').style.display='block'" action="/register.php" method="POST" style="background-color:#ffffffee;padding:30px;border-radius:20px;margin-bottom:50px">
            <div class="row mb-3 text-center">
                <div class="col-lg-2">
                    <img src="/static/logo.jpg" class="w-100 rounded">
                </div>
                <div class="col-lg-10">
                    <h2 style="color:#a94442;font-weight:900">BON SECOURS COLLEGE FOR WOMEN<br>Thanjavur</h2>
                </div>
            </div>    
            <h4 class="fw-bold text-uppercase text-secondary" style="font-weight:800">Personal Details:</h4>
            <div class="container">
                <div class="row">
                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="text" name="name" class="form-control" id="floatingInput" placeholder="Name of the Student">
                        <label for="floatingInput">Name of the Student :</label>
                    </div>
            
                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="text" name="fname" class="form-control" id="floatingInput" placeholder="Father Name">
                        <label for="floatingInput">Father Name :</label>
                    </div>
            
                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="text" name="mname" class="form-control" id="floatingInput" placeholder="Mother Name">
                        <label for="floatingInput">Mother Name :</label>
                    </div>
                    <div class="col-lg-4 form-floating">
                        <select class="form-select mb-3" name="gender">
                            <option selected disabled value="">Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Others">Others</option>
                        </select>
                        <label for="floatingSelect">Gender :</label>
                    </div>
                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="date" name="dob" class="form-control" id="floatingInput" placeholder="Date of Birth">
                        <label for="floatingInput">Date of Birth</label>
                    </div>
            
                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="number" name="mobile" class="form-control" id="floatingInput" placeholder="Mobile No">
                        <label for="floatingInput">Mobile No :</label>
                    </div>
            
                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="email" name="email" class="form-control" id="floatingInput" placeholder="Email">
                        <label for="floatingInput">Email :</label>
                    </div>
        
                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="number" name="aadhaar" class="form-control" id="floatingInput" placeholder="Aadhaar No">
                        <label for="floatingInput">Aadhaar No :</label>
                    </div>
        
                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="text" name="nan" class="form-control" id="floatingInput" placeholder="Nationality">
                        <label for="floatingInput">Nationality :</label>
                    </div>
        
                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="text" name="rel" class="form-control" id="floatingInput" placeholder="Religion">
                        <label for="floatingInput">Religion :</label>
                    </div>
        
                    <div class="col-lg-4 form-floating">
                        <select class="form-select mb-3" name="caste" aria-label=".form-select-sm example">
                            <option selected disabled value="">Caste</option>
                            <option value="SC">SC</option>
                            <option value="ST">ST</option>
                            <option value="OBC">OBC</option>
                        </select>
                        <label for="floatingSelect">Community Details :</label>
                    </div>
        
                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="text" name="subcaste" class="form-control" id="floatingInput" placeholder="Sub Caste">
                        <label for="floatingInput">Sub Caste :</label>
                    </div>
    
                    <div class="form-floating mb-3">
                        <textarea required type="text" name="address" style="height:100px" class="form-control" id="floatingInput" placeholder="Address"></textarea>
                        <label for="floatingInput">Address :</label>
                    </div>
                </div>
            </div>

            <h4 class="fw-bold text-uppercase text-secondary" style="font-weight:800">Educational Details:</h4>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 form-floating">
                        <select class="form-select mb-3" name="typeofedu" aria-label=".form-select-sm example">
                            <option selected disabled value="">Type of Education</option>
                            <option value="Part-Time">Part-Time</option>
                            <option value="Full-Time">Full-Time</option>
                            <option value="Distance Education">Distance Education</option>
                        </select>
                        <label for="floatingSelect">Type of Education :</label>
                    </div>

                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="text" name="course" class="form-control" id="floatingInput" placeholder="Course Name ">
                        <label for="floatingInput">Course Name :</label>
                    </div>

                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="number" name="syear" class="form-control" id="floatingInput" placeholder="Studying Year :">
                        <label for="floatingInput">Studying Year :</label>
                    </div>

                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="number" name="lyearatt" class="form-control" id="floatingInput" placeholder="Last year Attendece Percentage :">
                        <label for="floatingInput">Last year Attendece Percentage :</label>
                    </div>

                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="number" name="lyearmark" class="form-control" id="floatingInput" placeholder="Last year Mark Percentage :">
                        <label for="floatingInput">Last year Mark Percentage :</label>
                    </div>

                    <div class="col-lg-4 form-floating">
                        <select class="form-select mb-3" name="physical" aria-label=".form-select-sm example">
                            <option selected disabled value="">Physically Disabled</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Physically Disabled :</label>
                    </div>
                </div>
            </div>

            <h4 class="fw-bold text-uppercase text-secondary" style="font-weight:800">Bank Details:</h4>
            <div class="container">
                <div class="row">
                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="text" name="bank" class="form-control" id="floatingInput" placeholder="Bank Name ">
                        <label for="floatingInput">Bank Name :</label>
                    </div>

                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="text" name="branch" class="form-control" id="floatingInput" placeholder="Branch Name ">
                        <label for="floatingInput">Branch Name :</label>
                    </div>

                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="number" name="accno" class="form-control" id="floatingInput" placeholder="Account No :">
                        <label for="floatingInput">Account No :</label>
                    </div>

                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="number" name="ifsc" class="form-control" id="floatingInput" placeholder="IFSC :">
                        <label for="floatingInput">IFSC :</label>
                    </div>

                    <div class="form-floating mb-3 col-lg-4">
                        <input required type="number" name="micr" class="form-control" id="floatingInput" placeholder="MICR :">
                        <label for="floatingInput">MICR :</label>
                    </div>
                </div>
            </div>
        
            <div style="display:flex;justify-content:right">

                <button class="btn btn-primary btn-lg px-5 mb-2" type="submit">Register</button>
            </div>
            
        </form>
    </div>

    <script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if(urlParams.get('err')){
        document.write("<div id='err' style='position:fixed;bottom:30px; right:30px;background-color:tomato;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("err").style.display="none"
    }, 5000)
    if(urlParams.get('msg')){
        document.write("<div id='msg' style='position:fixed;bottom:30px; right:30px;background-color:green;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("msg").style.display="none"
    }, 5000)
</script>
    
    <script src="/static/js/bootstrap.bundle.js"></script>
</body>
</html>