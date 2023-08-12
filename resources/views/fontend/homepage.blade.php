
@extends('fontend.layouts.main')
@section('main-container')
  <section class="slider-container">
    <div class="slider">
      <div><img src="img/add.jpg" alt="Ad 1"></div>
      <div><img src="img/add1.jpg" alt="Ad 2"></div>
      <div><img src="img/add2.jpg" alt="Ad 3"></div>
    </div>
  </section>

  <!-- Subscribe section -->
<section class="subscribe-section">
  <h2>Subscribe With Us</h2>
  <p>Stay Hydrated!</p>
  <a href="{{ url('/suscribe') }}" class="subscribe-button">Subscribe</a>
</section>


  <!-- Product listing section -->
  <section class="product-listing">
    <h2>Product Listing</h2>
    <!-- Product 1 -->
    <div class="product">
      <img src="img/20 litter.jpg" alt="Product 1">
      <h3>Product 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      <span>$49.99</span>
      <button>Add to Cart</button>
    </div>

    <!-- Product 2 -->
    <div class="product">
      <img src="img/30 litter.jpg" alt="Product 2">
      <h3>Product 2</h3>
      <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <span>$29.99</span>
      <button>Add to Cart</button>
    </div>

    <!-- Product 3 -->
    <div class="product">
      <img src="img/40 litter.jpg" alt="Product 3">
      <h3>Product 3</h3>
      <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <span>$29.99</span>
      <button>Add to Cart</button>
    </div>
    <div class="show-all-products">
      <a href="products.html">
        <button>Show All Products</button>
      </a>
    </div>
   
  </section>

  <!-- Stay Hydrated and Stay Fresh section -->
  <section class="stay-hydrated-section">
    <h2>Stay Hydrated and Stay Fresh – Throughout the Day!</h2>
    <p>
      With the world now purchasing everything online, we at Bisleri have made sure we have adapted with the times and started our very own Bisleri@doorstep platform to buy all our products, including mineral water and natural Spring Water online. Now, from the comfort of your sofa, you may order any of our products online. They will be delivered to your doorstep ensuring you remain indoors and safe.
    </p>
    <p>
      Sounds interesting? Well, it sure is.
    </p>
    <p>
      We offer online purchase and home delivery options in all major metro cities across India. Choose from a wide range of exclusive Bisleri products such as Bisleri Mineral Water, Vedica, Club Soda, Fonzo, Limonata, Spyci, hand sanitizers and so on.
    </p>
    <p>
      Here are three simple steps to avail the bisleri@doorstep service from the comfort of your own home:
    </p>
    <ol>
      <li>Select a product of your choice from our range of products.</li>
      <li>Select a plan - either a one-time delivery or subscription with Bisleri@doorstep and avail discounts.</li>
      <li>Get your order delivered at your home doorstep.</li>
    </ol>
  </section>




<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
  // Initialize the Slick Slider
  $(document).ready(function(){
    $('.slider').slick({
      dots: true,
      infinite: true,
      speed: 500,
      autoplay: true,
      autoplaySpeed: 3000,
      slidesToShow: 1,
      slidesToScroll: 1
    });
  });
</script>
</body>
</html>
@endsection