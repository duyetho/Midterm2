<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/dest/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    <h2>Detail</h2>
 
     <div class="container">                                                         
                                                                  
                                                                                   
                <div class="row">                                                           
                  <div class="col-sm-4">                                                            
                    <img src="{{$product->image}}" width="300" height="300" alt="">                                                           
                  </div>                                                            
                  <div class="col-sm-8">                                                            
                    <div class="single-item-body">                                                          
                      <p class="single-item-title">                                                         
                      <h2>{{$product->name}}</h2>                                                           
                      </p>                                                          
                      <p class="single-item-price" style="text-align:left;font-size: 15px;">                                                            
                        <span> @if($product->oldprice==0)                                                            
                          <span class="flash-sale">{{number_format($product->price)}} ?????ng</span>                                                          
                          @else                                                         
                          <span class="flash-del">{{number_format($product->price)}} ?????ng </span>                                                          
                          <span class="flash-sale">{{number_format($product->oldprice)}} ?????ng</span>                                                         
                          @endif</span>                                                         
                      </p>                                                          
                    </div>                                                          
                                                                    
                    <div class="clearfix"></div>                                                            
                    <div class="space20">&nbsp;</div>                                                           
                                                                    
                    <div class="single-item-desc">                                                          
                      <p>{{$product->description}}</p>                                                          
                    </div>                                                          
                    <div class="space20">&nbsp;</div>                                                                                                                               

                    <div class="single-item-options">                                                           
                                                                                                                 
                      <a class="add-to-cart" href="shopping_cart.html"><i                                                           
                          class="fa fa-shopping-cart"></i></a>                                                          
                      <div class="clearfix"></div>                                                          
                    </div>                                                          
                  </div>                                                            
                                                                     
                                                                                                                                                                                                                           
          </div> <!-- #content -->                                                          
        
</body>
</html>