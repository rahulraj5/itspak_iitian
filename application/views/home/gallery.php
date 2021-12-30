
<section class="main_blog" style="background-image: url(<?php echo base_url()?>frontassets/img/bg-twitter1.jpg); background-position: 77% 36%;
    background-size: cover;">
 <div class="text-center res_mar"><h1 style="color: white; font-size: 30px;" class="blog-title head_blog blogpage">Gallery </h1> </div>
</section>

        <div class="container">
            <div class="portfolio-menu">
              <ul>
                <li style="font-size: 14px;" "font-weight: 600;" class="active" data-filter="*">All</li>
                <?php  $category = $this->CommonModel->getalldata("gallery");
                foreach ($category as  $value) {    ?>             
                <li style="font-size: 14px;" "font-weight: 600;" data-filter=".<?php echo preg_replace("/[^a-zA-Z]/", "", $value['category']); ?>"><?php echo $value['category']?></li>
              <?php  }{ ?>
              </ul>
            </div>
        </div>    
        <!-- Gallery Area 1 Start Here -->
        
        </div>
        <div class="container text-center">
            <div id="image-gallery" style = "margin-bottom: 15px">
              <div class="row portfolio-item">
                <?php $category = $this->CommonModel->getalldata("gallery");  
                  foreach ($category as  $ul)
                  { {?>               
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image item <?php echo preg_replace("/[^a-zA-Z]/", "", $ul['category']); ?>">                 
                    <a href="<?php echo base_url().'uploads/gallery/'. $ul['image'];?>" class="img-thumbnail img-fluid fancybox">           
                      <div class="item">
                        <figure>
                          <img class="img-responsive" src="<?php echo base_url().'uploads/gallery/'. $ul['image'];?>" alt="//" />
                        </figure>
                        <div class="hover">
                          <div class="icon img-circle">
                            <i class="">
                            </i>
                          </div>
                          <br>
                          <br>
                          <!-- <h4>TITLE OF THE IMAGE</h4>
                          <p>Image Gallery Example</p> -->
                        </div>
                      </div>
                    </a>
                  </div>
                <?php  } }?>
              </div><!-- End row -->
            </div>
             <?php } ?>
            <!-- End image gallery -->
        </div>
        </div>
        <div class="clearfix"></div> 
<style type="text/css">
    .portfolio-menu {
    text-align: center;
    margin: 30px auto;
}

.portfolio-menu ul li {
    display: inline-block;
    margin: 0;
    list-style: none;
    padding: 10px 15px;
    border: 1px solid #3ca8a9;
    cursor: pointer;
    transition: all .5 ease;
}

.portfolio-menu ul {
    padding:0;
}

.portfolio-menu ul li:hover {
    background: #3ca8a9;
    color: #fff;
}

.portfolio-menu ul li.active {
    background:  #3ca8a9;
    color: #fff;
}
#overlay img{
    width: 700px;
    height: auto;
}
</style>
<script type="text/javascript">
  // Gallery image hover


  </script>
  <script type="text/javascript">
      $(document).ready(function()
      {

        $( ".img-wrapper" ).hover(
          function() {
            $(this).find(".img-overlay").animate({opacity: 1}, 600);
          }, function() {
            $(this).find(".img-overlay").animate({opacity: 0}, 600);
          }
        );

        // Lightbox
        var $overlay = $('<div id="overlay"></div>');
        var $image = $("<img>");
        var $prevButton = $('<div id="prevButton"><i class=""></i></div>');
        var $nextButton = $('<div id="nextButton"><i class=""></i></div>');
        var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');

        // Add overlay
        $overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
        $("#gallery").append($overlay);

        // Hide overlay on default
        $overlay.hide();

        // When an image is clicked
        $(".img-overlay").click(function(event) {
          // Prevents default behavior
          event.preventDefault();
          // Adds href attribute to variable
          var imageLocation = $(this).prev().attr("href");
          // Add the image src to $image
          $image.attr("src", imageLocation);
          // Fade in the overlay
          $overlay.fadeIn("slow");
        });

        // When the overlay is clicked
        $overlay.click(function() {
          // Fade out the overlay
          $(this).fadeOut("slow");
        });

        // When next button is clicked
        $nextButton.click(function(event) {
          // Hide the current image
          $("#overlay img").hide();
          // Overlay image location
          var $currentImgSrc = $("#overlay img").attr("src");
          // Image with matching location of the overlay image
          var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
          // Finds the next image
          var $nextImg = $($currentImg.closest(".image").next().find("img"));
          // All of the images in the gallery
          var $images = $("#image-gallery img");
          // If there is a next image
          if ($nextImg.length > 0) { 
            // Fade in the next image
            $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
          } else {
            // Otherwise fade in the first image
            $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
          }
          // Prevents overlay from being hidden
          event.stopPropagation();
        });

        // When previous button is clicked
        $prevButton.click(function(event) {
          // Hide the current image
          $("#overlay img").hide();
          // Overlay image location
          var $currentImgSrc = $("#overlay img").attr("src");
          // Image with matching location of the overlay image
          var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
          // Finds the next image
          var $nextImg = $($currentImg.closest(".image").prev().find("img"));
          // Fade in the next image
          $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
          // Prevents overlay from being hidden
          event.stopPropagation();
        });

        // When the exit button is clicked
        $exitButton.click(function() {
          // Fade out the overlay
          $("#overlay").fadeOut("slow");
        });
        $('.portfolio-item').isotope(function()
        {
          itemSelector:'.item'
        });

        $('.portfolio-menu ul li').click(function(){
        $('.portfolio-menu ul li').removeClass('active');
        $(this).addClass('active');


        var selector = $(this).attr('data-filter');
          $('.portfolio-item').isotope
          ({
            filter: selector
          })
          return false;
        });
  });
  </script>
    