<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../assets/css/main.css" />
    <noscript>
        <link rel="stylesheet" href="../../assets/css/noscript.css" />
    </noscript>

   <link rel="stylesheet" href="../assets/css/cart/css/style.css" />


    <title>Your Cart</title>
    <style>
        body{}
    </style>
</head>

<body>

     
        <?php foreach ($cartItems as $item) : ?>
            
        <?php endforeach; ?>
  

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-4">
                <h2 class="heading-section" style="font-size: 50px;">Giỏ hàng</h2>

                    
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3 class="h5 mb-4 text-center">Thông tin giỏ hàng</h3>
					<div class="table-wrap">
						<table class="table">
						  <thead class="thead-primary">
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>&nbsp;</th>
						    	<th>Tên sản phẩm</th>
						      <th>Giá</th>
						      <th>Sốlượng</th>
						      <th>Tổng</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" checked>
										  <span class="checkmark"></span>
										</label>
						    	</td>
						    	<td>
                                <img class="img" src="../images/hinh/<?php echo $item['image']; ?>" height="30px" width="30px" />
						    	</td>
						      <td>
						      	<div class="email">
						      		<span><?php echo $item['product_name']; ?>  </span>
						      		<span>Fugiat voluptates quasi nemo, ipsa perferendis</span>
						      	</div>
						      </td>
                              <td><?php echo $item['price']; ?></td>
						      <td class="quantity">
					        	<div class="input-group">
				             	<input type="text" name="quantity" class="quantity form-control input-number" value="2" min="1" max="100">
				          	</div>
				          </td>
                          <td><?php echo $item['price']; ?></td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>

						   
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="../assets/css/cart/js/jquery.min.js"></script>
  <script src=".../assets/css/cart/js/popper.js"></script>
  <script src="../assets/css/cart/js/bootstrap.min.js"></script>
  <script src="../assets/css/cart/js/main.js"></script>





</body>

</html>