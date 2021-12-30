    
    <!-- <blog-detail pages start> -->
        <style type="text/css">
            .main_sec1 h2{
                padding-bottom: 30px;
                font-weight: 600;
            }
            .tab{
                box-shadow: 0 0 7px 0px #00000094;
                background: white;
                padding: 10px;
                margin-top: 10px;
                border-radius: 10px;
            }
            .main_sec1{
                box-shadow: 0 0 7px 0px #00000094;
                background: white;
                border-radius: 10px;
            }
            .auter_one{
                font-size: 16px;
            }
            .auter-date{
                /*padding-top: 20px;*/
                padding: 20px 20px 0px 20px;
            }
            .auter_one a{
                color: #4bc2c3;
                font-size: 14px;    
                font-weight: 600;
                padding-right: 15px;
            }
            .blog-date{
                display: inline-block;
                color: #666;
                padding-left: 5px;
                font-size: 14px;
            }
            .main_sec1 p{
                padding: 0px 20px;
                line-height: 26px;
                letter-spacing: 1px;
                font-family: sans-serif;
                text-align: justify;
            }
            .main_sec1 .paragraph1{
                padding-top: 20px;
            }
            .img-se{
                background-color: #4bc2c31f;
                padding: 10px;
            }
            .img-se img{
                border-radius: 10px;
            }
            .blog-sec1 img{
                height: 40px;
                float: left;
                padding-right: 10px;
            }
            .blog-sec1{
                margin-top: 25px;
                border-bottom: 1px solid #cac6c6;
            }
            .blog-sec1 a{
                font-size: 12.5px;
                font-weight: bold;
                line-height: 15px;
            }
            .blog-sec1 span{
                padding-top: 10px;
            }
            .blog-sec1 p{
                display: block;
                padding-top: 0px;
                /*line-height: 20px;*/
                letter-spacing: .5px;
                padding-bottom: 20px;
                font-family: sans-serif;
            }
            .blogpage:before {
            left: 43% !important;
            width: 166px;
        }
        /*<-->*/
        .section1{
            padding-bottom: 20px; 
            background-color: #e7e4d3;
        }
        .course_name{
            border-bottom: unset;
        }
        .course_name:focus{
            outline: none!important;
        }
        .course_name li:focus{
            outline: none;
            margin-bottom: 0;
        }
        .course_name li{
            display: block;
            width: 100%;
        }
        .nav-tabs > li > a{
            font-size: 18px;
            color: #fff;
            border-bottom: none;
            border: unset;
            margin-right: 0;
            border: 1px solid #3ca8a9;
        }
        .course_name > li.active > a{
            border:none;
            background-color: unset;
            color: #000;
        }
        .course_name > li.active > a:hover{
            border: unset;
            background-color: #1e7273;
            color: #fff;
        }
        .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus{
            color:#fff;
            border: 1px solid #3ca8a9;
            background-color: #1e7273;
        }
        .course_name > li > a:hover{
            color:#fff;
            background-color: #1e7273;
        }
        .course_name > li > a> .fa-angle-right{
            float: right;
            font-weight: 700;
            font-size: 20px;
        }
        .tab_pill li{
            background-color: #3ca8a9;
            margin-bottom: 5px;
            border-radius: 5px;
        }
        .exam-phase{
            margin: 0;
            padding-left: 18px;
        }
        .exam-phase li{
            font-size: 18px;
            font-weight: bold;
            color: #5a5a5a;
        }
        .bpage:before{
            /*left: 50%;*/
        }
        @media handheld, only screen and (min-width: 767px){
          .dropdown:hover .dropdown-content {display: block; }
          .dropdown:focus .dropdown-content{display: block!important;}
          }
    @media screen and (max-width: 768px){
    .course_name > li > a> .fa-arrow-right{
        padding-left: 7px;
    }
    .section1{
        padding-top: 20px;
    }
    .fa-angle-right{
        display: none;
    }
    .fa-chevron-down{
    
    display: block!important;
    float: right;
    margin: 3px;
    }
    .tab {
    box-shadow: 0 0 7px 0px #00000000;
    background: #ffffff00;
        }
    .course_name > li > a{
        font-size: 15px;
    }
    .course_name{
        width: 100%;
        display: block;
        overflow-y: scroll;
        white-space: nowrap;
        height: 50px;
    }
    .course_name li{
        display: inline-block;
        width: auto;
        float: none;
    }
    .bpage:before{
        transform: translate(-36%, -32%);
    }
    

}
.fa-chevron-down{
    display: none;
}

            </style>
        
        <section class="main_blog" style="background-image: url(<?php echo base_url()?>frontassets/img/bg-twitter1.jpg); background-position: 77% 36%;
    background-size: cover;">
 <div class="text-center res_mar"><h1 style="color: white;" class="blog-title blogpage bpage"><?php echo $facility_data["title"]?></h1> </div>
</section>
            
<section class="section1">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 tab">
                        <div class="tab_pill">
                            <ul class="nav nav-tabs course_name">
                              <?php 
                              $categorydata = $this->CommonModel->getWhereData('courses',array(1=>1));
                              if(isset($categorydata) && !empty($categorydata))
                              {
                              foreach ($categorydata as $categoryarray)
                              {                               
                              ?> 
                              <li class="<?php echo ($categoryarray["url_slug"] == $facility_data["url_slug"] ? 'active' : '');?>"><a class="<?php echo ($categoryarray["url_slug"] == $facility_data["url_slug"] ? 'active' : '');?>" href="<?php echo base_url().'courses/'.$categoryarray["url_slug"]?>"><?php echo $categoryarray["title"]?><i class="fa fa-angle-right"></i><i class="fa fa-chevron-down"></i> </a></li>
                              <?php    
                              }
                              }
                              ?>
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 padd-media">
                        <div class="main_sec1">
                            <div class="tab-content">
                                <div >
                                    <h2><?php echo $facility_data["title"]?></h2>
                                   
                                    <p class="paragraph1"> <?php echo $facility_data["editor1"]?> </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- <script>
    $(document).ready(function(){
        
        $(".dropdown").click(function(){
            
            $(".dropdown-content").toggle()
        });
    });
</script> -->