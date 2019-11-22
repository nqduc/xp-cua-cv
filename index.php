<?php 
    include "human.php";
    $duc = new human();
    $duc->set_name ("✰グエン クアン ドゥック✰");
    $duc ->set_address("Tòa nhà Detech 2 , Số 107 , Đường Nguyễn Phong Sắc ");
    $experience = [
        [
            "time"=>"2010-2019", 
            "name"=>"Toyota", 
            "content"=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters"
        ],
            [
            "time"=>"2013-2019", 
            "name"=>"WBS Viet Nam", 
            "content"=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters"
            ],

        [
            "time"=>"2015-2018", 
            "name"=>"V-Shinzai", 
            "content"=>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters"
        ]
    ];
    $duc->set_experience($experience);
    $education = [
        [
            "time"=>"2010-2019",
            "school"=>"Giáo dục nghề nghiệp Tứ Kỳ",
            "content"=>"It is a long established fact that a reader will be distracted by the readable content of a page It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that"
        ],
        [
            "time"=>"2013-2018",
            "school"=>"Công ty dạy tiếng nhật",
            "content"=>"It is a long established fact that a reader will be distracted by the readable content of a page It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that"
        ],
        [
            "time"=>"2012-2014",
            "school"=>"Công ty dạy nghề Happo",
            "content"=>"It is a long established fact that a reader will be distracted by the readable content of a page It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that"
        ],
    ];
    $duc->set_education($education);

    $profile = [
        [
            "content"=>"It is a long established fact that a reader will be distracted by the readable content of a page It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that"
        ],
    ];
    $duc->set_profile($profile);
    
    $contact_duc = [
        "phone1"=>"+84565101365",
        "phone2"=>"+84921222745",
        "email1"=>"n.q.duc@wbs-v.biz"
        ];   
    $duc->set_contact($contact_duc);

    $skill= [
        [
           "name"=>"PHP",
            "percent"=>"35%"
        ],
        [
            "name"=>"HTML/CSS",
            "percent"=>"30%"
        ],
        [
            "name"=>"NET",
            "percent"=>"45%"
        ],
        [
            "name"=>"MYSQL",
            "percent"=>"40%"
        ],
        [
            "name"=>"PHP",
            "percent"=>"50%",
        ],
        [
            "name"=>"HTML/CSS",
            "percent"=>"40%"
        ],
        [
            "name"=>"NET",
            "percent"=>"35%"
        ],
        [
            "name"=>"EXCEL",
            "percent"=>"50%"
        ],
        [
            "name"=>"ENGLISH",
            "percent"=>"40%"
        ]
    ];
    $duc->set_skills($skill);

    $reperences= [
        [
            "ketai"=>"Phone:",
            "liên_lac"=>"Email:",
            "name"=>"Name of Refrance",
            "phone"=>"0921222745",
            "email"=>"Ducnguyenquang05@gmail.com"
        ],
        [
            "ketai"=>"Phone:",
            "liên_lac"=>"Email:",
            "name"=>"Name of Refrance",
            "phone"=>"0921222745",
            "email"=>"Ducnguyenquang05@gmail.com"
        ]
        ];
    $duc->set_reperences($reperences);

    $award = [
        [
            "name"=>"Employee of The Month",
            "code"=>"Best Coder"
        ]
        ];
    $duc->set_award($award);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CV design of ✰グエン クアン ドゥック✰</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" rel="stylesheet" href="style.css">
    </head>
    <body style="margin-top: 40px; margin-bottom: 40px; width: 1100px; margin-left: 50px; margin-right: 50px;">
        <header class="container" style="margin-top: 40px; margin-bottom: 15px; margin-right: 40px; margin-left: 40px;">
            <div class="row">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-5">
                            <span class="rounded-circle" style="border: rgb(225, 248, 225);border-image-outset: 5px;">
                                <img src="anhduc.jpg" class="rounded-circle float-left namae-img" alt="avatar" width="269px" height="269px" left="375" top="57">
                            </span> 
                        </div>
                        <div class="col-md-7" style="line-height: 10px;">

                            <h4><b>
                            <?php 
                                echo "" .$duc->get_name();
                            ?>
                                </b><h4>
                            <h6><i>WBS VIET NAM</i></h6>
                        </div>
                    </div>
                </div>        
                <div class="col-lg-5 flex-column ml-auto">
                    <div class="row">
                        <div class="col-sm-2">
                            <i class="fas fa-phone-square" style="font-size: 30px;"></i>
                        </div>
                        <div class="col-sm-10" style="font-size: 10px;">
                        <p><?php echo $duc->get_contact ()["phone1"] ?></p>
                        <p><?php echo $duc->get_contact ()["phone2"] ?></p>
                        </div> 
                    </div>                    
                    <div class="row">  
                        <div class="col-sm-2">
                            <i class="fas fa-envelope" style="font-size: 25px;"></i>
                        </div>
                        <div class="col-sm-10" style="font-size: 10px;">
                            <p><?php echo $duc->get_contact()["email1"] ?></p>
                        </div>
                    </div>
                    <div class="row">  
                        <div class="col-sm-2">
                            <i class="fas fa-home" style="font-size: 25px;"></i>
                        </div>
                        <div class="col-sm-10" style="font-size: 10px;">
                        <?php
                            echo "" . $duc ->get_address ();
                        ?>                           
                        </div>
                    </div>
                </div>
            </div>           
        </header>
        <div class="row">
            <div class="col-lg-7 flex-column">
                <div>
                    <h3>        
                    Experience
                    </h3>
                   
                    <div class="row">    
                    <?php 
                        foreach ($experience as $value){ 
                    ?>                
                       
                        <div class="col-md-3">
                            <?php echo "". $value ["time"]; ?>
                        </div>
                    
                        <div class="col-md-9">
                            <p><b>
                            <?php echo "".$value["name"] ?>
                            </b></p>
                            <mark>DEVELOPER</mark>
                            <p><?php echo"".$value["content"] ; ?></p>
                         
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div>
                    <h3>Education</h3>
                    <div class="row">
                        <?php 
                            foreach ($education as $value){ 
                        ?> 
                            <div class="col-md-3">   <?php echo "". $value ["time"]; ?></div>
                            <div class="col-md-9">
                                <p><b> <?php echo "".$value["school"] ?></b></p>
                                <mark>DEVELOPER</mark>
                                <p><p><?php echo"".$value["content"] ; ?></p></p>
                            </div>
                        <?php } ?>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-5 flex-column">
                <div>
                    <h3>Profle</h3>
                    <p><?php echo "".$value ["content"] ?></p>
                </div>
                <div class ="abc">
                    <h3>SKILLS</h3>
                    <div>
                      <div>
                        <?php foreach ($skill as $value){ ?>
                            <h7><?php echo $value["name"] ?></h7>
                            <div class="progress">
                                <div class="progress-bar bg-success" style="width:<?php echo $value["percent"]; ?>">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <footer class="row" style="margin-top: 50px; padding: 50px;">
            <div class="col-xl-4">
                <h3>AWARDS</h3>
                <div class="flex-column ml-auto">
                    <div style="margin-top: 30px;">
                        <p><b>Employee of The Month</b></p>
                        <p>Some detail of Award and more</p>
                        <p>Some detail of Award and more</p>
                    </div>
                    <div style="margin-top: 30px;">
                        <p><b>Best Coder</b></p>
                        <p>Some detail of Award and more</p>
                        <p>Some detail of Award and more</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <h3>REFERENCES</h3>

                <div class="flex-column ml-auto">
                    <div style="margin-top: 30px;">
                    <?php foreach ($reperences as $value){ ?>
                        <p><b><?php echo $value ["name"] ?></b></p>
                        <div class="row">
                            <div class="col-sm-6"><b><?php echo $value["ketai"] ?></b></div>
                            <div class="col-sm-6">
                                <p><?php echo $value ["phone"] ?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6"><b><?php echo $value["liên_lac"] ?></b></div>
                            <div class="col-sm-6">
                                <p><?php echo $value["email"] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                
            </div>
            <div class="col-xl-4">
                <h3>INTEREST</h3>
                    <img src="anh.jpg"  class="rounded can-img">
            </div>
        </footer>
    </body>
</html>
            