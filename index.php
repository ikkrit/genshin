<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <title>Genshin Impact FanSite</title>
</head>
<body>

    <section class="parallax">
        <img src="/img/main/bg.jpg" alt="" id="bg">
        <img src="/img/main/moon.png" alt="" id="moon">
        <img src="/img/main/mountain.png" alt="" id="mountain">
        <img src="/img/main/road.png" alt="" id="road">
        <div class="parallax__text" id="text">
            <h2>Genshin Impact</h2>
            <p>Le Fan Site</p>
        </div>
    </section>

    <section>
        <h2>salut</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloremque necessitatibus eius iste minus, architecto debitis consequatur exercitationem obcaecati quos autem quo illum repudiandae illo eum neque itaque expedita, accusantium dolorem.</p>
        <a href="/html/main.php">le site</a>
    </section>
    
    <script type="text/javascript">
        let bg = document.getElementById("bg");
        let moon = document.getElementById("moon");
        let mountain = document.getElementById("mountain");
        let road = document.getElementById("road");
        let text = document.getElementById("text");

        window.addEventListener('scroll', () => {
            var value = window.scrollY;

            bg.style.top = value * 0.5 + 'px'; 
            moon.style.left = -value * 0.5 + 'px'; 
            mountain.style.top = -value * 0.15 + 'px'; 
            road.style.top = value * 0.15 + 'px'; 
            text.style.top = value * 1 + 'px'; 
        })
    </script>
</body>
</html>