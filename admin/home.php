<?php require("./layout/Header.php") ?>
<?php require("./layout/db.php") ?>

<div class="container mt-3">
    <div style="display:flex;flex-direction:row;justify-content:space-between">
        <h2 style="color:#2b74e2;font-weight:600">Applications List</h2>
    </div>
    <br>  
    <div class="accordion" id="accordionExample">
        <?php
            $result = $conn->query("SELECT * FROM student ORDER BY id DESC");
            if($result->num_rows > 0){
                $i=0;
                while($row = $result->fetch_assoc()){
                    $i++;
                ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo($row["id"])?>" aria-expanded="false" aria-controls="collapse<?php echo($row["id"])?>">
                                <?php echo($row["name"])?>
                            </button>
                        </h2>
                        <div id="collapse<?php echo($row["id"])?>" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h5 class="text-secondary">Personal Details:</h5>
                                <div class="row">
                                        <div class="row">
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Name : <span style="color:#444"><?php echo($row["name"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">DOB : <span style="color:#444"><?php echo($row["dob"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Father Name : <span style="color:#444"><?php echo($row["fname"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Mother Name : <span style="color:#444"><?php echo($row["mname"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Gender : <span style="color:#444"><?php echo($row["gender"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Mobile : <span style="color:#444"><?php echo($row["mobile"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Email : <span style="color:#444"><?php echo($row["email"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Aadhaar No : <span style="color:#444"><?php echo($row["aadhaar"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Address : <span style="color:#444"><?php echo($row["address"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Nationality : <span style="color:#444"><?php echo($row["nan"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Religion : <span style="color:#444"><?php echo($row["rel"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Caste : <span style="color:#444"><?php echo($row["caste"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">SubCaste : <span style="color:#444"><?php echo($row["subcaste"]) ?></span></p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="text-secondary">Educational Details:</h5>
                                <div class="row">
                                        <div class="row">
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Type of Education : <span style="color:#444"><?php echo($row["typeofedu"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Course : <span style="color:#444"><?php echo($row["course"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Studying Year : <span style="color:#444"><?php echo($row["syear"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Last Year Attedence : <span style="color:#444"><?php echo($row["lyearatt"]) ?> %</span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Last Year Mark : <span style="color:#444"><?php echo($row["lyearmark"]) ?> %</span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Physically Diabled : <span style="color:#444"><?php echo($row["physical"]) ?></span></p>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="text-secondary">Bank Details:</h5>
                                <div class="row">
                                        <div class="row">
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Bank : <span style="color:#444"><?php echo($row["bank"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Branch : <span style="color:#444"><?php echo($row["branch"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">Account No : <span style="color:#444"><?php echo($row["accno"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">IFSC : <span style="color:#444"><?php echo($row["ifsc"]) ?></span></p>
                                        </div>
                                        <div class="col-lg-4">
                                            <p style="color:#aaa">MICR : <span style="color:#444"><?php echo($row["micr"]) ?></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            }else{
        ?>
            <p style="text-align:center;color:#aaa">Nothing Found</p>
        <?php
            }
        ?>

    </div>



<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if(urlParams.get('err')){
      document.write("<div id='err' style='position:fixed;bottom:30px; right:30px;background-color:#FF0000;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("err").style.display="none"
    }, 3000)
</script>

<script>
    if(urlParams.get('msg')){
      document.write("<div id='msg' style='position:fixed;bottom:30px; right:30px;background-color:#4CAF50;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("msg").style.display="none"
    }, 3000)
</script>


<?php require("./layout/Footer.php") ?>