<!DOCTYPE html>



<?php

session_start();
include "function/functions.php";
include "function/functions_1.php";
include "function/get_productfunc.php";
 include "function/function_cart.php";


 ?>

 <html>

 <head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
 </head>
 <body>

 <div class="container">
       <!-- <nav>
          <h1>Navigation</h1>
       </nav>
 -->
       <header>
          <h1>Header</h1>
       </header>
       <nav>
         

           <div class="menubar">


                <ul id="menu">

                     <li><a href="index1.php">Home</a></li>
                     <li><a href="#">Products</a></li>
                     <li><a href="my_account.php">My Account</a></li>
                     <li><a href="#">Sign Up</a></li>
                     <li><a href="#">Shopping Cart</a></li>
                     <li><a href="#">Contact Us</a></li>

                 </ul>


               <div id="searchbox">

                   <form method ="get" action="results.php" enctype="multipart/form-data">

                        <input type="text" name="user_query" placeholder="search Item" />
                        <input type="submit" name="search" value="search"/>

                   </form>  
                 

                 </div>  


                  

            </div>
       </nav>

       <!-- <section class="section1">
             <h1>Section1</h1>
             <div class="content">
               <div class="card">
                  <div class="box">
                      Card1
                  </div>
               </div>
               <div class="card">
                  <div class="box">
                      Card2
                  </div>
               </div>
               <div class="card">
                  <div class="box">
                      Card3
                  </div>
               </div>
               <div class="card">
                  <div class="box">
                      Card4
                  </div>
               </div>
             </div>
       </section>
 -->
       <section class="section2">

        <!-- <div id="shoppingcart"> 
          <h1>Section2</h1> 
          
             <span style="float: left"><h2>BIG Sale!!!!!</h2>

            </span>
           </div> -->
        <!--  <div class="shoppingcart"> 
          <nav color><h1>Section2</h1> 
            
             <img src="cart.jpg" alt="cart" style="width:10px;height:20px;">
             <span style="float: left">BIG Sale!!!!!

            </span>

           </div>
          </nav>
          </div> -->
   
           <div class="content">
           
               <div class="left">
                  <div class="card">
                   
                      <div id= "sidebar"> 
                       
                            <div id="sidebar_title">Vehicle Type</div>

                                <ul id="cats">
                                  <?php  getCats();?>

                                </ul> 


                              <div id="sidebar_title">Brands</div>

                             <ul id="cats">

                              <?php getBrands(); ?>


                             </ul>  

                           </div> 
                  </div>
               </div>

       


               <div class="right">
                  
                     <div id="content_area">

                        <!-- total items in the cart -->
                        <div style="background-color:lightblue " >


                          <?php

                            if(!isset($_SESSION['customer_email'])){


                              echo "<a href ='checkout.php' style= 'float:right'>Login</a>";
                            }

                            else{

                               echo "<a href='logout.php' style= 'float:right'>LogOut</a>";



                            }



                            ?>
                            <h3><?php

                             if (isset($_SESSION['customer_email'])) {
                              

                              echo "<b> Welcome:</b>".$_SESSION['customer_email']."<b> to our account :</b>";
                             }



                             ?></h3>


                             <button onclick="window.location.href = 'cart.php';"><img src= "cart.jpg" width="50" height="50"></button>


                            <p style="font-size:150%;"> Total items:<?php total_items() ;?> 
                             _____Total Price:$ <?php total_price() ;?> </p>
                           

                            
                         
                         </div>


                         <?php cart()  ;  ?>
           
                          <!-- for gettig/ detecting the ip address of the iuser  <?php echo $ip = getIp(); ?> -->
                          <div id="products_box">


                          <!-- function to display home page content -->
                          <?php getPro(); ?>


                          <!-- to display category based poducts -->
              
                         <!--  <?php getcatPro(); ?>   -->

 
                           
                          <!-- to get brand based product -->
                        
            

                             
                         </div>

                                 
                        
                       </div>

                 
                 
                 </div>

                 
           </div>



       </section>
       <footer>
         <h1>Footer</h1>

      </div>

    </footer>

       
       
  </div>

 </body>
 </html> 