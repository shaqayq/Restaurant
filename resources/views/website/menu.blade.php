<style>
  .items{
    display: flex;
    flex-direction: row;
    column-gap: 5%;
  }

  .model-head img {
    width:17%;
    border-radius: 14%;
  }

  .modal-body{
  
    color: black;
    display: flex;
    flex-direction: column;
    row-gap: 12px;
  }
  .number{
    margin: 0 0 0 21px;
    width: 20%;
  }
  .number input{
    width: 43%;
    border: none;
    
  }
  /* .menu-ingredients{
    display: flex;
    justify-content: flex-end;
    margin: 2%;
  } */
  </style>

  <section id="menu" class="menu section-bg blur-background">
      
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Check Our Tasty Menu</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-starters">Rice Elegance</li>
              <li data-filter=".filter-salads">Afghan Specialties</li>
              <li data-filter=".filter-specialty">Vegetarian Bliss</li>
              <li data-filter=".filter-specialty">Froozen food</li>

            </ul>
          </div>
        </div>

        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/admin/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Lobster Bisque</a><span>$5.95</span>
                
            </div>
            
            <div class="menu-ingredients" >
            Lorem, deren, trataro, filede, nerada
              
            </div>
           
            
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/admin/img/menu/bread-barrel.jpg" class="menu-img" alt="">
            <div class="menu-content" >
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Bread Barrel</a>
              <br><span><b>$6.95</b></span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/admin/img/menu/cake.jpg" class="menu-img" alt="">
            <div class="menu-content" >
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Crab Cake</a><span>$7.95</span>
            </div>
            <div class="menu-ingredients">
              A delicate crab cake served on a toasted roll with lettuce and tartar sauce
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/admin/img/menu/caesar.jpg" class="menu-img" alt="">
            <div class="menu-content" >
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Caesar Selections</a><span>$8.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/admin/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
            <div class="menu-content" >
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Tuscan Grilled</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Grilled chicken with provolone, artichoke hearts, and roasted red pesto
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-starters">
            <img src="assets/admin/img/menu/mozzarella.jpg" class="menu-img" alt="">
            <div class="menu-content" >
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Mozzarella Stick</a><span>$4.95</span>
            </div>
            <div class="menu-ingredients">
              Lorem, deren, trataro, filede, nerada
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/admin/img/menu/greek-salad.jpg" class="menu-img" alt="">
            <div class="menu-content" >
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Greek Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach, crisp romaine, tomatoes, and Greek olives
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-salads">
            <img src="assets/admin/img/menu/spinach-salad.jpg" class="menu-img" alt="">
            <div class="menu-content" >
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Spinach Salad</a><span>$9.95</span>
            </div>
            <div class="menu-ingredients">
              Fresh spinach with mushrooms, hard boiled egg, and warm bacon vinaigrette
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-specialty">
            <img src="assets/admin/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content" >
              <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Lobster Roll</a>
              <span>$12.95</span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
          </div>

        </div>

      </div>
    </section>
    

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:black">Order</h5>
 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="items model-head">
            <img src="assets/admin/img/menu/lobster-roll.jpg" class="menu-img" alt="">
            <div class="menu-content">
              <a href="#">Lobster Roll</a>
              <br><span id="price"><b>$6.95</b></span>
            </div>
            <div class="menu-ingredients">
              Plump lobster meat, mayo and crisp lettuce on a toasted bulky roll
            </div>
          </div>
          <div class="items quantity">
            <p>Quantity:</p>
            <div class="number">
            <i class="fa fa-minus" id="decrease"></i>
              <input type="number" class="" value="1" id="quantityInput">
              <i class="fa fa-plus" id="increase"></i>
            </div>
          </div>
          <div class="comment">
          <p><b>Special Instructions:</b></p>
          <textarea name="comment" id="" cols="50" rows="4"></textarea>
          </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-warning btn-block" id="addToCartBtn" >
          Add to card => <span id = "total"></span></button>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Get the input, buttons, span, and button
    var quantityInput = document.getElementById('quantityInput');
    var increaseButton = document.getElementById('increase');
    var decreaseButton = document.getElementById('decrease');
    var priceSpan = document.getElementById('price');
    var addToCartBtn = document.getElementById('addToCartBtn');

    // Initial price value
    var originalPrice = 6.95;

    // Add click event listener for increase button
    increaseButton.addEventListener('click', function () {
      quantityInput.value = parseInt(quantityInput.value, 10) + 1;
      updatePrice();
    });

    // Add click event listener for decrease button
    decreaseButton.addEventListener('click', function () {
      // Ensure the quantity is not less than 1
      if (parseInt(quantityInput.value, 10) > 1) {
        quantityInput.value = parseInt(quantityInput.value, 10) - 1;
        updatePrice();
      }
    });

    // Function to update price and button text
    function updatePrice() {
      var totalPrice = originalPrice * parseInt(quantityInput.value, 10);
      
      addToCartBtn.innerHTML = 'Add to cart => $' + totalPrice.toFixed(2);
    }
  });
</script>
