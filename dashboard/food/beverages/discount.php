<div class="hamburger">
      <div class="container">
        <div class="sec">
          <div class="colorr">
            <div class="grid-item">
              <div class="order-summary">Summary</div>
              <div class="price">Price</div>
              <div class="qtty">Quantity</div>
              <div class="order-name">Name</div>
            </div>
          </div>
        

            <div class="grid-container">
              <div class="colorr">
                <div class="grid-item">
                  <div class="order-summary-none">Total</div>
                  <div class="price-none" id="totalPrice"><?php echo $results ?></div>
                  <div class="ccode-box">Coupon Code<input type="text" name="code" id="code" style="width: 130px;"></div>
                  <div class="ccode-apply"><button onclick="discount()" id="applyButton">Apply</button></div>
                </div>
              </div>
            </div>

   

</div>