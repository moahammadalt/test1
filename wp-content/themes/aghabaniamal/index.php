<?php get_header(); ?>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script>
$(document).ready(function() {
$(".all").click(function(){
    $(".pl-ctl-right").click(); 
    return false;
});
$(".new").click(function(){
    $(".pl-ctl-left").click(); 
    return false;
});
});
</script>
<!-- page body content begin -->
  <div class="pg-body" ng-controller="home">
    <section id="home1-slider">
      <div class="home1-slider rslides-container loading">
        <ul class="rslides">
          <li> <img src="<?php bloginfo('template_directory'); ?>/images/home-1/slides/2-bg.jpg" alt="">
            <div class="slider-container">
              <div class="rslide-caption-3 hidden-xs"> <a href="#">COLORED</a> &#x25a1; <a href="#">7 COLORS</a> &#x25a1; <a href="#">UNIQUE</a> </div>
              <div class="rslide-caption-4"> ELEGANT CAPS </div>
            </div>
          </li>
          <li> <img src="<?php bloginfo('template_directory'); ?>/images/home-1/slides/3-bg.jpg" alt="">
            <div class="slider-container">
              <h3 class="rslide-caption-5"> ELEGANT CAPS AND DUMMY TEXT GOES HERE </h3>
              <p class="rslide-caption-6 hidden-xs"> any fancy sentence to be filled in this space </p>
            </div>
          </li>
        </ul>
        <div class="rslides_nav_block">
          <div class="rslides-number">1/2</div>
        </div>
      </div>
    </section>
    <!-- home1-slider -->
    <div class="bottom-line">
      <div class="container">
          <h1 style="text-align: center;padding: 30px;color: #212224;">OUR CATEGORIES</h1>
        <div class="row">
                  <div class="col-md-4 text-center" ng-repeat="cat in cats" ng-if="cat.parent == 0 " style="margin-bottom: 30px;"> 
                  <a href="{{cat.link}}" class="img-fade-hover">
                      <img  src="{{cat.description}}" alt="">
                      <h2 id="text">{{cat.name}}</h2>
                  </a>
                    
                 
                </div>
              </div>
      </div>
    </div>
    <div class="container">
      <div class="gap-50"></div>
      <div class="text-center">
        <ul class="product-categories moving-hover-line" role="tablist">
          <li ng-class="active1" ><a ng-click="tri_active1()" class="new" >New Products</a></li>
          <li ng-class="active2" ><a ng-click="tri_active2()" class="all" >All Products</a></li>
          <li class="hover-line"></li>
        </ul>
      </div>
        </button>
      <div class="tab-content tab-no-style">
        <div class="tab-pane fade in active" id="pl-new-products">
          <div class="products-list pl-carousel">
            <div class="pl-controls" style="visibility: hidden;"> <a href="#" class="pl-ctl-left"></a> <a href="#" class="pl-ctl-right"></a> </div>
            <ul class="pl-pages">
              <li class="active">
                <div class="row">
                  <div class="col-md-3 col-sm-6 pl-item">
                    <figure> <a href="{{products[0].link}}"> <img ng-src="{{products[0].first_image}}" alt=""> </a>
                      <label class="pl-badge">NEW</label>
                      <figcaption> <a href="{{products[0].link}}" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="center"><div class="pl-caption">
                    <p class="pl-name">{{products[0].title.rendered}}</p>
                  </div></a> </figcaption>
                    </figure>
                    <div class="pl-caption">
                      <p class="pl-name">Dummy desc</p>
                      <span class="stars-rating stars-4"><span class="stars"></span></span> </div>
                  </div>
                  <div class="col-md-3 col-sm-6 pl-item">
                    <figure> <a href="{{products[1].link}}" class="pl-w-backside"> <img ng-src="{{products[1].first_image}}" alt=""> <span class="pl-backside"> <img src="images/products/thumbs/1.jpg" alt=""> </span> </a>
                      <label class="pl-badge">- 50%</label>
                      <figcaption> <a href="{{products[1].link}}" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="center"><div class="pl-caption">
                    <p class="pl-name">{{products[1].title.rendered}}</p>
                  </div></a> </figcaption>                    </figure>
                    <div class="pl-caption">
                      <p class="pl-name">Dummy desc</p>
                      <span class="stars-rating"><span class="stars"></span></span> </div>
                  </div>
                  <div class="col-md-3 col-sm-6 pl-item">
                    <figure> <a href="{{products[2].link}}" class="pl-w-backside"> <img ng-src="{{products[2].first_image}}" alt=""> <span class="pl-backside"> <img src="images/products/thumbs/2.jpg" alt=""> </span> </a>
                      <figcaption> <a href="{{products[2].link}}" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="center"><div class="pl-caption">
                    <p class="pl-name">{{products[2].title.rendered}}</p>
                  </div></a> </figcaption>                    </figure>
                    <div class="pl-caption">
                      <p class="pl-name">Dummy desc</p>
                      <span class="stars-rating"><span class="stars"></span></span> </div>
                  </div>
                  <div class="col-md-3 col-sm-6 pl-item">
                    <figure> <a href="{{products[3].link}}" class="pl-w-backside"> <img ng-src="{{products[3].first_image}}" alt=""> <span class="pl-backside"> <img src="images/products/thumbs/2.jpg" alt=""> </span> </a>
                      <figcaption> <a href="{{products[3].link}}" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="center"><div class="pl-caption">
                    <p class="pl-name">{{products[3].title.rendered}}</p>
                  </div></a> </figcaption>                    </figure>
                    <div class="pl-caption">
                      <p class="pl-name">Dummy desc</p>
                      <span class="stars-rating"><span class="stars"></span></span> </div>
                  </div>
                  <div class="col-md-3 col-sm-6 pl-item">
                    <figure> <a href="{{products[4].link}}" class="pl-w-backside"> <img ng-src="{{products[4].first_image}}" alt=""> <span class="pl-backside"> <img src="images/products/thumbs/2.jpg" alt=""> </span> </a>
                      <figcaption> <a href="{{products[4].link}}" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="center"><div class="pl-caption">
                    <p class="pl-name">{{products[4].title.rendered}}</p>
                  </div></a> </figcaption>                    </figure>
                    <div class="pl-caption">
                      <p class="pl-name">Dummy desc</p>
                      <span class="stars-rating"><span class="stars"></span></span> </div>
                  </div>
                  <div class="col-md-3 col-sm-6 pl-item hidden-xs">
                    <figure> <a href="{{products[5].link}}" class="pl-w-backside"> <img ng-src="{{products[5].first_image}}" alt=""> <span class="pl-backside"> <img src="images/products/thumbs/2.jpg" alt=""> </span> </a>
                      <figcaption> <a href="{{products[5].link}}" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="center"><div class="pl-caption">
                    <p class="pl-name">{{products[5].title.rendered}}</p>
                  </div></a> </figcaption>                    </figure>
                    <div class="pl-caption">
                      <p class="pl-name">Dummy desc</p>
                      <span class="stars-rating"><span class="stars"></span></span> </div>
                  </div>
                  <div class="col-md-3 col-sm-6 pl-item hidden-xs">
                    <figure> <a href="{{products[6].link}}" class="pl-w-backside"> <img ng-src="{{products[6].first_image}}" alt=""> <span class="pl-backside"> <img src="images/products/thumbs/2.jpg" alt=""> </span> </a>
                      <figcaption> <a href="{{products[6].link}}" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="center"><div class="pl-caption">
                    <p class="pl-name">{{products[6].title.rendered}}</p>
                  </div></a> </figcaption>                    </figure>
                    <div class="pl-caption">
                      <p class="pl-name">Dummy desc</p>
                      <span class="stars-rating"><span class="stars"></span></span> </div>
                  </div>
                  <div class="col-md-3 col-sm-6 pl-item">
                    <figure> <a href="{{products[7].link}}" class="pl-w-backside"> <img ng-src="{{products[7].first_image}}" alt=""> <span class="pl-backside"> <img src="images/products/thumbs/2.jpg" alt=""> </span> </a>
                      <figcaption> <a href="{{products[7].link}}" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="center"><div class="pl-caption">
                    <p class="pl-name">{{products[7].title.rendered}}</p>
                  </div></a> </figcaption>                    </figure>
                    <div class="pl-caption">
                      <p class="pl-name">Dummy desc</p>
                      <span class="stars-rating"><span class="stars"></span></span> </div>
                  </div>
                  
                </div>
              </li>
              <li>
                <div class="row" >
                    
                  <div class="col-md-3 col-sm-6 pl-item" ng-repeat="product in products_all ">
                    <figure> <a href="{{product.link}}"> <img ng-src="{{product.first_image}}" alt=""> </a>
                      <figcaption> <a href="{{product.link}}" class="pl-button pl-addcart" data-toggle="tooltip" data-placement="center"><div class="pl-caption">
                    <p class="pl-name">{{product.title.rendered}}</p>
                  </div></a> </figcaption>
                    </figure>
                    <div class="pl-caption">
                      <p class="pl-name">Dummy desc</p>
                      <span class="stars-rating stars-4"><span class="stars"></span></span> </div>
                  </div>
                  
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="tab-pane fade" id="pl-featured">
          <div class="products-list pl-carousel">
            <div class="pl-controls"> <a href="#" class="pl-ctl-left"></a> <a href="#" class="pl-ctl-right"></a> </div>
          </div>
        </div>
      </div>
      <!-- pg-body -->
      <?php
    session_start();
$_SESSION['sss']='kk';
?>

<?php get_footer(); ?>