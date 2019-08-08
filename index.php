<html>
    
    
    <body>
        <?php include "header.php";?>
        <div class="container" >
            <div class="col-6" style="margin-left: auto; margin-right:auto; background-color: lightgrey; border-radius:5px; padding:10px;">
                <h2>Paypal Integration Demo</h2>
                <form method="post" action="checkout.php">
                    <div class="form-group">
                        <label for="product">Item</label>
                        <input type="text" class="form-control" name="product" placeholder="Item name">
                        
                    </div>
                    <div class="form-group">
                        <label for="price">Amount</label>
                        <input type="text" class="form-control" name="price" placeholder="price">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Pay using PayPal</button>
                </form>
            </div>
        </div>
    </body>
</html>