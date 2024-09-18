<?php include 'header.php'; ?>

<section id="profile">
    <div class="section__pic-container">
        <img src="./assets/my-pic.jpg" alt="Mohamed Zaheer profile picture" class="my-pic" />
    </div>
    <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Mohamed Zaheer</h1>
        <p class="section__text__p2">Junior Software Engineer</p>
        <div class="btn-container">
            <button class="btn btn-color-2" onclick="window.open('./assets/MyCV.pdf')">Download CV</button>
            <button class="btn btn-color-1" onclick="location.href='Contact.php'">Contact Info</button>
        </div>
        <div id="socials-container">
            <img src="./assets/linkedin.png" alt="My LinkedIn profile" class="icon" onclick="location.href='https://www.linkedin.com/in/mohamed-zaheer-335292246?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app'" />
            <img src="./assets/github.png" alt="My Github profile" class="icon" onclick="location.href='https://github.com/Zaheer2003'" />
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
