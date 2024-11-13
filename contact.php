<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us &#8211; Swift Overseas</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/contact.css">

</head>
<body>

<?php

include 'menu.php';

?>

<a href="#" class="to-top">
    <i>&#8593;</i>
</a>

<section id="contact-us" class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4">Contact &#8211; Us</h1>
            </div>
        </div>
    </div>
</section>

<section id="contact-section" class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 my-4 p-4 body-card">
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam modi nulla asperiores, incidunt repellendus veritatis laboriosam velit cum, commodi laudantium quam hic necessitatibus, ut tempore eaque ex beatae perspiciatis fuga cupiditate doloribus veniam dicta. Dignissimos ullam eaque itaque, nihil a sint nemo nesciunt minus rem delectus corporis, at vero sunt!</p>
                <p><strong> H.M. Plaza, Plot# 34, (12th floor), Roo# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.</strong></p>
                <p>+8801303912984</p>
                <p>+8801303912984</p>
                <p>+8801303912984</p>
                <p>info@swiftoverseas.com</p>
            </div>
            <div class="col-md-6  my-4 p-4 body-card">
                <form>
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" aria-describedby="emailHelp" placeholder="Enter your full name">
                    </div><br>
                    <div class="form-group">
                        <label for="Phone">Phone</label>
                        <input type="number" class="form-control" id="Phone" placeholder="Enter your phone">
                    </div><br>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" id="subject" placeholder="Enter your subject">
                    </div><br>
                    <div class="form-group mb-4">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>


<section id="map-section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ">
                <img class="img-fluid my-3" src="img/Swift-Overseas-logo-wh.png" alt="logo not found!">
                <h4 class="follow">follow us</h4>
                <div class="icons">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                    <i class="fa fa-youtube" aria-hidden="true"></i>
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                </div>
            </div>
            <div class="col-md-4 text-light mt-4">
                <p class="lead">
                H.M. Plaza, Plot# 34, (12th floor), Roo# 07, Road# 02, Sector# 03, Uttara C/A, Dhaka-1230, Bangladesh.
                </p>
                <p>+8801303912984</p>
                <p>+8801303912984</p>
                <p>+8801303912984</p>
                <p>info@swiftoverseas.com</p>
            </div>
            <div class="col-md-4 map">
                <p class="m-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1923.6079817785298!2d90.39849751169872!3d23.864533573947288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c411fec45ab9%3A0xa29fdaaa39a7c771!2sSector-04%2CUttara!5e1!3m2!1sen!2sbd!4v1731394371708!5m2!1sen!2sbd" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </p>
            </div>
        </div>
    </div>
</section>

<?php 
    include "footer.php";
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
// to top button

const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
if (window.pageYOffset > 100) {
    toTop.classList.add("active");
} else {
    toTop.classList.remove("active");
}
})

</script>
    
</body>
</html>