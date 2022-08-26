<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Delivery App</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet" />
    <link rel="stylesheet" media="screen and (max-width: 1024px)" href="tablet.css">
    <link rel="stylesheet" media="screen and (max-width: 425px)" href="Large-screen-phone.css">
    <link rel="stylesheet" media="screen and (max-width: 320px)" href="small-screen-size.css">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.png" alt="logo" />
        </div>
        <ul>
            <li class="item"><a href="#">Home</a></li>
            <li class="item"><a href="#">Services</a></li>
            <li class="item"><a href="#">About us</a></li>
            <li class="item"><a href="#">Contact us</a></li>
        </ul>
    </nav>
    <section id="home">
        <h1 class="h-primary">Welcome to MyFood Ordering app</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <p>Lorem ipsum dolor sit amet consectetur,</p>
        <button class="btn">Order Now</button>
    </section>
    
    <section class="services-container">
        <h1 class="h-primary center black">Our Services</h1>
        <div id="services">
            <div class="box">
                <img src="bg2.jpg" alt="Images" />
                <h2 class="h-secondary center">Food Ordering</h2>
                <p id="services-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis similique nulla
                    reprehenderit dolore, accusamus voluptatibus quidem quos inventore labore praesentium, ipsum
                    provident tempore neque quia eveniet amet reiciendis Lorem </p>
            </div>
            <div class="box">
                <img src="bg3.jpg" alt="Images" />
                <h2 class="h-secondary center">Food Catering</h2>
                <p id="services-para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis similique nulla
                    reprehenderit dolore, accusamus voluptatibus quidem quos inventore labore praesentium, ipsum
                    provident tempore neque quia eveniet amet reiciendis a! L.</p>
            </div>
            <div class="box">
                <img src="bg4.jpg" alt="Images" />
                <h2 class="h-secondary center">Bulk Ordering</h2>
                <p id="services-para" class="center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis
                    similique nulla reprehenderit dolore, accusamus voluptatibus quidem quos inventore labore
                    praesentium, ipsum provident tempore neque quia eveniet </p>
            </div>
        </div>
    </section>
    <hr>
    <section id="clients">
        <h1 class="h-primary center black">Our clients</h1>
        <div id="our-clients">
            <div class="client-item">
                <img src="pngtree-skype-creative-icon-png-image_3562046.jpg" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="pngtree-skype-creative-icon-png-image_3562046.jpg" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="apple logo.png" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="apple logo.png" alt="Our Clients">
            </div>
            <div class="client-item">
                <img src="apple logo.png" alt="Our Clients">
            </div>
        </div>
    </section>
    <hr>
    <section id="contact">
        <h1 class="h-primary center black">
            Contact Us
        </h1>
        <div id="contact-box">
            <form action="Backend.php">
                <div class="formgroup">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name">
                </div>
                <div class="formgroup"><label for="Email">Email: </label>
                    <input type="text" name="Email" id="Email" placeholder="Enter Your Email">
                </div>

                <div class="formgroup"><label for="Phone No.">Phone No: </label>
                    <input type="text" name="Phone No." id="Phone No." placeholder="Enter Your Phone No.">

                </div>
                <div class="formgroup"><label for="Address">Address: </label>
                    <input type="text" name="Address" id="Address" placeholder="Enter Your Address">
                </div>
                <div class="formgroup"><label for="Message">Message: </label>
                    <textarea name="Message" id="Message" cols="30" rows="10"></textarea>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <div class="center">
            Copyright &copy; myFoodOrderingApp.com All Rights Reserved.
        </div>
    </footer>
</body>

</html>