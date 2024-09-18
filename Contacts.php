<?php include 'header.php'; ?>

<section id="contact">
    <p class="section__text__p1">Get in Touch</p>
    <h1 class="title">Contact Me</h1>
    <div class="contact-info-upper-container">
        <div class="contact-info-container">
            <img src="./assets/email.png" alt="Email icon" class="icon contact-icon email-icon">
            <p><a href="mailto:mhdzaheer2003@gmail.com">mhdzaheer2003@gmail.com</a></p>
        </div>
        <div class="contact-info-container">
            <img src="./assets/linkedin.png" alt="LinkedIn icon" class="icon contact-icon">
            <p><a href="https://www.linkedin.com/in/mohamed-zaheer-335292246?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">LinkedIn</a></p>
        </div>
    </div>
</section>

<div class="form-control">
        <form class="form-control" method="POST" action="form.php">
            <div class="form-inputs">
                <input type="text" name="name" class="input-field" placeholder="Name">
                <input type="text" name="email" class="input-field" placeholder="Email">
            </div>
            <div class="text-area">
                <textarea name="message" placeholder="Message"></textarea>
            </div>
            <div class="form-button">
                <button type="submit" class="btn">Send <i class="uil uil-message"></i></button>
            </div>
        </form>
    </div>

<?php include 'footer.php'; ?>
