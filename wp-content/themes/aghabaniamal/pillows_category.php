<?php /* Template Name: pillows cat */ ?>
<?php get_header(); ?>

<!-- page body content begin -->
  <div class="pg-body" ng-controller="pillows_category">
    <div class="container">
      <div class="gap-70 hidden-xs"></div>
      <div class="row">
        <div class="col-md-12 cat-content"> <a href="#"><img src="images/category/banner.jpg" alt=""></a>
          
  
            <div class="bottom-line">
              <div class="container">
                <div class="gap-30"></div>
                <div class="row">
                  <div class="col-md-4 text-center" ng-repeat="cat in cats" ng-if="cat.parent == 0 "> 
                  <a href="{{cat.link}}" class="img-fade-hover">
                      <img  src="http://aghabaniamal.com/wp-content/uploads/2017/06/pr_2-menu.jpg" alt="">
                      <h2 id="text">{{cat.name}}</h2>
                  </a>
                    
                 
                </div>
                <div class="gap-30"></div>
              </div>
            </div>
          
          
          
        </div>
        <!-- cat-content -->
        
      </div>
      <div class="gap-70"></div>
    </div>
    <!-- container --> 
  </div>
  <!-- pg-body -->
  
   <?php get_footer(); ?>