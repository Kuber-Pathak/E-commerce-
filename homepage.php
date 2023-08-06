<?php
session_start(); 
  include 'connect.php';
  include 'config.php';
  if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!==true){
    // header(location:login.php);
    echo "<script> window.location.href='login.php';</script>";
    exit;
  }
  else{
    $userid = $_SESSION['userid'];
  }
?>

<!DOCTYPE html>
      <html lang="en">
        <head>
          <title>Kedar Trading Center Official site!</title>
          <link rel="stylesheet" href="index.css?v=<?$version?>" />
      
          <script
            src="https://kit.fontawesome.com/5a78363638.js"
            crossorigin="anonymous"
          ></script>
        </head>
        <body>
          <div class="header">
            <header>
              <div class="sidebar ">
                <div class="icons">
                  <img
                    src="Images/android-hamburger-menu-icon-9.jpg"
                    alt="menu"
                    class="ham"
                    style="width: 42px;"
                  />
                  <img
                  src="Images/cross.png"
                  alt=""
                  class="cross"
                  style="width: 20px; height: 13px;"
                />
                </div>
                <div class="search-bar">
                  <i class="fa-solid fa-magnifying-glass" id="search-bar"></i>
                 </div> 
                 <div class="sidebar-list">
                <nav>
                  <ul>
                    <li>
                      <div class="list-searbar">
                      <a href="">
                        <i class="fa-solid fa-magnifying-glass" id="list-searchbar"
                          ></i
                        ></a
                      >
                      <small> Search</small>
                    </div>
                    </li>
                    <br />
                    <hr />
                    <li><a href="#">Bags</a></li>
                    <li><a href="#">Casual Wear</a></li>
                    <li><a href="#">Fine Jewelry</a></li>
                    <li><a href="#">Inner Wears</a></li>
                    <li><a href="#">Party Wear</a></li>
                  </ul>
                </nav>
                </div>
              </div>
            </header>
            <div class="content">
              <div class="top">
                <div class="main">
                  <a href="homepage.php" class="logo"
                    ><img
                      id="logo"
                      src="Images/logo.png"
                      alt="logo "
                      style="width: 180px;height: 80px;"
                  /></a>
                </div>
                <div class="right">
                  <a href="logout.php" class="user"><i class="fa-solid fa-user"></i> LOGOUT</a>
                  <a href="#" class="cart-icon"
                    ><i class="fa-solid fa-bag-shopping"></i> BAG</a
                  >
                </div>
              </div>
              <div class="middle">
                <div class="contents">
                    <div class="content-texts">
                      <h2>
                        Get up to 25% <br />
                        off new products
                      </h2>
                      <a href="#"">Shop Now <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                      <div class="banner-img">
                        <img src="Images/long.png" alt="" />
                      </div>
                </div>
      
              <section class="section__container musthave__container">
                <h2 class="section__title">Must Have</h2>
                <div class="musthave__grid">
                  <div class="musthave__card">
                    <img src="Images/img-1.jpg" alt="must have" />
                    <h4>Basic long sleeve T-shirt</h4>
                    <p><del>$45.00</del> $75.00</p>
                   <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
                  </div>
                  <div class="musthave__card">
                    <img src="Images/img-2.jpg" alt="must have" />
                    <h4>Ribbed T-shirt with buttons</h4>
                    <p><del>$45.00</del> $75.00</p>
                    <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
                  </div>
                  <div class="musthave__card">
                    <img src="Images/img-3.jpg" alt="must have" />
                    <h4>Jacket withside strips</h4>
                    <p><del>$45.00</del> $75.00</p>
                   <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
                  </div>
                  <div class="musthave__card">
                    <img src="Images/img-5.png" alt="must have" />
                    <h4>High-heel tubular sandals</h4>
                    <p><del>$45.00</del> $75.00</p>
                   <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
                  </div>
                  <div class="musthave__card">
                    <img src="Images/img-6.png" alt="must have" />
                    <h4>Coral fabric belt bag</h4>
                    <p><del>$45.00</del> $75.00</p>
                   <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
                  </div>
                  <div class="musthave__card">
                    <img src="Images/img-2.jpg" alt="must have" />
                    <h4>Piggy skater slogan T-shirt</h4>
                    <p><del>$45.00</del> $75.00</p>
                    <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
                  </div>        
                </div>
              </section>
              <section class="exclusive">
              <div class="exclusive-contents">
                <div class="exclusive-img">
                  <img src="Images/zendaya1.png" alt="" />
                </div>
                <div class="exclusive-content-texts">
                  <h2 >Exclusive Product</h1>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus numquam hic perferendis rerum? Nostrum iste sint, eius laudantium eligendi pariatur maxime, ut quaerat voluptatibus optio hic sapiente similique obcaecati totam?
                  </p>
                  <a href="#""><i class="fa-solid fa-arrow-left"></i> Shop Now </a>
                </div>
                 
            </div>
          </section>
          <section class="section__container musthave__container">
            <h2 class="section__title">Featured Products</h2>
            <div class="musthave__grid">
              <div class="musthave__card">
                <img src="Images/img-3.jpg" alt="must have"/>
                <h4>High-heel tubular sandals</h4>
                <p><del>$45.00</del> $75.00</p>
               <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
              </div>
              <div class="musthave__card">
                <img src="Images/img-6.png" alt="must have" />
                <h4>Coral fabric belt bag</h4>
                <p><del>$45.00</del> $75.00</p>
               <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
              </div>
              <div class="musthave__card">
                <img src="Images/img-2.jpg" alt="must have" />
                <h4>Piggy skater slogan T-shirt</h4>
                <p><del>$45.00</del> $75.00</p>
                <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
              </div>  
              <div class="musthave__card">
                <img src="Images/img-5.png" alt="must have" />
                <h4>Basic long sleeve T-shirt</h4>
                <p><del>$45.00</del> $75.00</p>
               <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
              </div>    
              <div class="musthave__card">
                <img src="Images/img-1.jpg" alt="must have" />
                <h4>Ribbed T-shirt with buttons</h4>
                <p><del>$45.00</del> $75.00</p>
                <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
              </div>  
              <div class="musthave__card">
                <img src="Images/img-3.jpg" alt="must have" />
                <h4>Jacket withside strips</h4>
                <p><del>$45.00</del> $75.00</p>
               <img src="Images/[removal.ai]_c60438a7-f3ae-4b7c-ad92-8e9080cdc57d.png" alt="" class="add-cart">
              </div>
            </div>
          </section>
          <section class="story">
            <div class="right-content">
              <h2 class="right-top">Our Story</h2>
              <p class="right-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolorem necessitatibus itaque, nulla officia iste perferendis ipsa excepturi atque. Minus, impedit velit! Temporibus ratione doloremque quibusdam fugit perspiciatis reiciendis exercitationem Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae sapiea</p>
             <p class="story-button"> <a href="#" >Learn More <i class="fa-solid fa-arrow-right"></i></a></p>
            </div>
            <div class="left-content">
              <img src="Images/bg1.jpg" class="story-image"/>
            </div>
             </section>
            
      <section class="panel">
            <div class="top-panel">
              <div class="panel-items">
                <div class="panel-contents">
                    <h4>HELP</h4>
                    <p>You can call or email us.</p>
                    <p>FAQ's</p>
                    <p>Product Care</p>
                    <p>Stories</p>
                </div>
            </div>
            <div class="panel-items">
              <div class="panel-contents">
                  <h4>SERVICES</h4>
                  <p>Repairs.</p>
                  <p>Personalization</p>
                  <p>Art of Gifting</p>
                  <p>Download our Apps</p>
              </div>
          </div>
          <div class="panel-items">
            <div class="panel-contents">
                <h4>ABOUT KEDAR TRADING CENTER</h4>
                <p>Fashion Shows</p>
                <p>Art's and Culture</p>
                <p>Latest News</p>
                <p>Careers</p>
            </div>
        </div>
        
        <div class="panel-items">
          <div class="panel-contents">
              <h4>CONNECT</h4>
              <p><a href="feedback.php?userid=<?php echo $_SESSION['userid'];  ?>">Contact Us</a></p>
              <p>Follow Us.</p>
          </div>
        </div>
            </div>
      
            <div class="bottom-pannel">
          
            <div class="legal-items">
              <ul class="right-item">
                <li>Sitemap</li>
                <li>Legal & privacy </li>
                <li>Cookies</li>
              </ul>
              <ul class="left-item">
                <li><img src="Images/language.png" alt="" class="language-image"/> </li>
                <li><a href="#">ENGLISH (INTL)</a></li>
              </ul>
            
            </div>
          
            </div>
      
      </section>
      
        </div>
            </div>
          </div>
          <footer>
            <div class="lower-box">
              <ul>
                <li class="first-item">
                  <img
                    src="Images/android-hamburger-menu-icon-9.jpg"
                    alt="menu"
                    class="ham-bottom"
                    style="width: 42px;"
                  />
                  <img
                  src="Images/cross.png"
                  alt=""
                  class="cross-bottom"
                  style="width: 20px; height: 13px;"
                />
                <span class="menu-item">MENU</span>
                </li>
                <li>
                  <a href="#" class="search-bar-3"
                    ><i class="fa-solid fa-magnifying-glass"></i>
      
                    <span class="menu-item">SEARCH</span></a
                  >
                </li>
                <li>
                  <a href="homepage.php" class="home"
                    ><i class="fa-solid fa-house"></i
                  ></a>
                </li>
                <li>
                  <a href="logout.php" class="user"
                    ><i class="fa-solid fa-user"></i
                    ><span class="menu-item">LOGOUT</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="cart"
                    ><i class="fa-solid fa-bag-shopping"></i>
                    <span class="menu-item">BAG</span></a
                  >
                </li>
              </ul>
            </div>
          </footer>
          <script src="index.js"></script>
        </body>
      </html>
