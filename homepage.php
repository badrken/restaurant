
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOULUNCH</title>
    <link rel="stylesheet" href="./css/stylee.css">
   
</head>
<body>
  
  
  <header>
   
   <nav>
     <div class="title">YOULUNCH</div>
       <ul class="topnav" id="myTopnav">
           <li><a href="#home">HOME</a></li>
           <li><a href="#menu">MENU</a></li>
           <li><a href="#aboutus">ABOUT US</a></li>
           <li><a href="#contactus">CONTACT US</a></li>
           <li><a href="http://localhost/sprint-2/admin/login.php">LOG IN </a></li>
      
       </ul>
       
   </nav>
</header>

   <section class="home" id="home">
     <img class="logo" src="./css/img/LOGO.jpg" id="logo" >
     <div class="home__data">
      <h1 class="home__title">YOULUNCH</h1>
      <h2 class="home__subtitle">Try the best Moroccan food of <br> the week.</h2>
      <a href="#menu" class="button">View Menu</a>
  </div>
   </section>

<section class="menu" id="menu">
    
    <div class="wrapper">
        <div class="title-menu">
           
            <span>OUR MENU</span>
        </div>
        <div class="menu">
            <div class="single-menu">
                <img src="./css/img/Chicken Fried Salad.jpg" alt="">
                <div class="menu-content">
                    <h4>chicken fried salad <span>$20</span></h4>
                    <p>Fried chicken salad is the perfect blend of crispy chicken and fresh veggies tossed in your favorite dressing.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="./css/img/chicken.jpg" alt="">
                <div class="menu-content">
                    <h4>chicken  <span>$40</span></h4>
                    <p>Moroccan Baked Chicken with Olive and Onion Sauce – Djaj Mhamer</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="./css/img/COUSCOUS.jpg" alt="">
                <div class="menu-content">
                    <h4>COUSCOUS <span>$60</span></h4>
                    <p> traditionally served with a stew spooned on top. Pearl millet and sorghum, especially in the Sahel.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="./css/img/plum meat.jpg" alt="">
                <div class="menu-content">
                    <h4>Plum MEAT <span>$50</span></h4>
                    <p>Moroccan dish 1kg meat and plum fruit cooked in a Moroccan way</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="./css/img/tajin.jpg" alt="">
                <div class="menu-content">
                    <h4>TAJIN <span>$35</span></h4>
                    <p>made with sliced meat, poultry or fish together with vegetables or fruit. Spices, nuts, and dried fruits are also used.</p>
                </div>
            </div>
            <div class="single-menu">
                <img src="./css/img/OIP.jpg" alt="">
                <div class="menu-content">
                    <h4>SEFA <span>$25</span></h4>
                    <p>a famous Moroccan dish which features saffron chicken, lamb or beef hidden within a dome of steamed couscous or broken vermicelli (chaariya).</p>
                </div>
            </div>
        </div>
    </div>
</section>

  
  


<section class="about" id="aboutus">
    <div class="about__container  bd-grid">
        <div class="about__data">
            
            <h2 class="section-title about__initial">We cook the best <br> tasty food</h2>
            <p class="about__description">We cook the best food in the entire city, with excellent customer service, the best meals and at the best price, visit us.</p>
           <p>Hours
            Rooms are available daily, and include breakfast for two each morning from 8 – 9:30.  Lunch is available Wednesday – Sunday from 11 a.m. – 2 p.m.  Dinner is available Wednesday – Saturday from 5 ’til 9.   We do not offer dinner on Sunday night.  Lunch & dinner are not served on Mondays and Tuesdays.  If you register as a guest, we strongly encourage you to contact the inn to make a dining reservation if you are staying with us Wednesday – Sunday, as we often book up 1-2 weeks in advance in off season, and 3-4 weeks in advance during peak season.
            
           <h1> THE OWNERS</h1>
           <span> Jim Johnston & Brandon Branch </span> 
            Jim Johnston & Brandon Branch have a singular goal, which is to offer true five star lodging, dining, and entertainment. The reinvention of the St. Francisville Inn represents the seventh project for the duo. Each man brings a unique combination of skills that, together, have catapulted The Inn into a destination among both Southerners and Europeans alike.</p>
        </div> 

        
     </div>
</section>

<section class="contact" id="contactus">
    <div class="container-fluid">
        <div class="book-card">
            <h1 class="section-title ">
               CONTACT US 
            </h1>
            
            <div class="two-columns-grid">
                <div class="form-group">
                    <input
                        type="text"
                        id="first"
                        class="input"
                        placeholder="First Name*"
                    />
                </div>
                <div class="form-group">
                    <input
                        type="text"
                        id="last"
                        class="input"
                        placeholder="Last Name*"
                    />
                </div>
            </div>

            <div class="two-columns-grid">
                <div class="form-group">
                    <input
                        type="email"
                        id="email"
                        class="input"
                        placeholder="E-mail Address*"
                    />
                </div>
                <div class="form-group">
                    <input
                        type="text"
                        id="phone"
                        class="input"
                        placeholder="comment"
                    />
                </div>
            </div>
            <a href="#" class="submit">SUBMIT</a>
           
          
    </div>
</section>
</main>

<footer class="footer">
<p class="copyright">
    Copyright &copy; 2021 by BADR KENZI @Youcode. All rights reserved.
</p>
</footer>

    
</body>
</html