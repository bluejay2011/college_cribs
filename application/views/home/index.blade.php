@layout('layouts/main')
@section('navigation')
	@parent
	<li><a href="/search">Search</a></li>
@endsection
@section('content')
<script>
$(function(){
	$('.carousel').carousel();
  //$('.star').rating();
});
</script>
<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <!-- <div class="active item">{{ HTML::image('img/property/b.jpg', 'College Cribs'); }}</div>
    <div class="item">{{ HTML::image_link('#', 'img/property/b.jpg', 'College Cribs'); }}</div> -->
    <div class="active item"><img data-src="holder.js/1200x300"></div>
    <div class="item"><img data-src="holder.js/1200x300/#000:#fff"></div>
    <div class="item"><img data-src="holder.js/1200x300/#838B8B:#fff"></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div> <!-- /myCarousel -->
<div class='container'>
    <div class='row'>            
      <div class='span12'>
        <h3>Look for my ideal crib:</h3>
        <form>
          <select>
            <option>Any type of property</option>
            <option>Condo</option>
            <option>Dormitory</option>
          </select>
          <select>
            <option>Any price range</option>
            <option>Below Php 5,000</option>
            <option>Php5,000 to Php10,000</option>
          </select>
          <input type='text' class='input-xlarge' placeholder='Property Name, Address, Postal Code'  />
          <button class="btn btn-primary" type="button"  style='margin-top: -1%'>Search!</button>
        </form>
      </div>      
    </div>
    <div class='row'>
      <div class='span6'>
        <div class='row property'>
          <div class='span2 property-img'>
            <img data-src="holder.js/170x150/#838B8B:#fff">
          </div>
          <div class='span3 property-details'>
            <div class='property-name'><a href='#'>My Property</a></div>
            <div class='property-contact-no'>715-0016</div>
            <div class='property-location'>Manila</div>
            <div class='property-relative-location'>FEU, La Salle</div>
          </div>
        </div>
      </div>
      <div class='span3'>
        <br /><br />
        <a href="#">Contact Advertiser</a>
        <br />
        <input class="star" type="radio" name="test-1-rating-2" value="10"/>
        <input class="star" type="radio" name="test-1-rating-2" value="20"/>
        <input class="star" type="radio" name="test-1-rating-2" value="30"/>
        <input class="star" type="radio" name="test-1-rating-2" value="40"/>
        <input class="star" type="radio" name="test-1-rating-2" value="50"/>
      </div>
      <div class='span3'>
        <div class='row'>
          <div><img data-src="holder.js/270x250/#838B8B:#fff"></div>
        </div>
        <br />
        <div class='row'>
          <div><img data-src="holder.js/270x250/#838B8B:#fff"></div>
        </div>
      </div>
    </div>
</div> <!-- /container -->

<div class="hero-unit">
    <div class="row">
        <div class="span6">
            <h1>Welcome to Instapics!</h1>
            <p>Instapics is a fun way to share photos with family and friends.</p>
            <p>Wow them with your photo-filtering abilities!</p>
            <p>Let them see what a great photographer you are!</p>
            <p><a href="about" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
        </div>        
    </div>
</div>

@endsection
