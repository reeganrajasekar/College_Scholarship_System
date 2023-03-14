<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship Form</title>
    <link rel="stylesheet" href="/static/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/static/img/logo.png">
    <style>
        body, html {
            height:100%
        }
    </style>
</head>
<body >
    <div id="loader" style="position:fixed;width:100%;height:100%;background-color:rgba(106, 17, 203, 1);z-index: 10000;top:0px;display: none;">
        <div class="spinner-border" style="color:#fff;position:fixed;top:48%;left:49%;" role="status">
          <span class="sr-only"></span>
        </div>
    </div>

    <section class="gradient-custom py-5">
        <div class="container py-1">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-md-12 col-lg-8 col-xl-7">
                    <div class="card" style="border-radius: 1rem;background-color:#f5f5f5;">
                        <form onsubmit="document.getElementById('loader').style.display='block'" action="/register.php" method="POST" class="card-body p-4 text-center" enctype="multipart/form-data">
                            <h2 class="fw-bold mb-4 text-uppercase text-primary" style="font-weight:800">Scholarship Form</h2>
                            
                            <div class="form-floating mb-3">
                                <input required type="text" name="name" class="form-control" id="floatingInput" placeholder="Name of the Student">
                                <label for="floatingInput">Name of the Student</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="text" name="fname" class="form-control" id="floatingInput" placeholder="Father Name">
                                <label for="floatingInput">Father Name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="text" name="mname" class="form-control" id="floatingInput" placeholder="Mother Name">
                                <label for="floatingInput">Mother Name</label>
                            </div>

                            <select class="form-select mb-3" name="gender" aria-label=".form-select-sm example">
                                <option selected>Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>

                            <div class="form-floating mb-3">
                                <input required type="date" name="dob" class="form-control" id="floatingInput" placeholder="Date of Birth">
                                <label for="floatingInput">Date of Birth</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="number" name="mobile" class="form-control" id="floatingInput" placeholder="Mobile No">
                                <label for="floatingInput">Mobile No</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="email" name="email" class="form-control" id="floatingInput" placeholder="Email">
                                <label for="floatingInput">Email</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="text" name="address" class="form-control" id="floatingInput" placeholder="Address">
                                <label for="floatingInput">Address</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="text" name="nan" class="form-control" id="floatingInput" placeholder="Nationality">
                                <label for="floatingInput">Nationality</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input required type="text" name="rel" class="form-control" id="floatingInput" placeholder="Religion">
                                <label for="floatingInput">Religion</label>
                            </div>

                            <select class="form-select mb-3" name="caste" aria-label=".form-select-sm example">
                                <option selected>Caste</option>
                                <option value="SC">SC</option>
                                <option value="ST">ST</option>
                                <option value="OBC">OBC</option>
                            </select>

                            <div class="form-floating mb-3">
                                <input required type="file" name="img" class="form-control" id="floatingInput" placeholder="Photo">
                                <label for="floatingInput">Photo</label>
                            </div>

                            <button class="btn btn-primary btn-lg px-5 mb-2" type="submit">Register</button>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        .gradient-custom {
            background: linear-gradient(to left,rgba(37, 140, 252, 1), rgba(37, 117, 252, 1))
        }
    </style>
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