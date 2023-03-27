<!DOCTYPE html>
<head>
    <title>Animal Comedy Photography</title>
    <style>
        body{
            background-color:beige;
            
        }
        a:link{
            text-decoration: none;
        }
        a:hover{
            font-size: 125%;
        }
        a{
            color: #0f0f0f;
        }
        p{
            font-family: 'Courier New', Courier, monospace;
            color: #0f0f0f;
            text-align: center;
            font-weight: bolder;
            margin-left: 20px;
            margin-right: 20px;
        }
        h2{
            color:cadetblue;
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: bolder;
            text-align: center;
            margin-bottom: 15px;
            font-size: 70px;
        }
        h1{
            text-align: center;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
        }
        td:hover {
            background-color: #355e3b;
        }
        tr, td{
            padding-left: 10px
            padding-bottom: 5px;
            padding-top: 5px;
            border: 1px solid black;
            border-radius: 10px;
        }
        img{
            float: left;
        }
        h3{
            font-family: 'Courier New', Courier, monospace;
            margin-right: 10px;
            font-size: 100%;
        }
        #gradient {
            height: 100%;
            background-color: red; /* For browsers that do not support gradients */
            background-image: linear-gradient(#849b5c, #bfffc7);
        }
    </style>
</head>
<body>
    <div id="gradient">
    <img src="wordart.png" alt="Wordart Title" width="100%">
    <table border="20" width="100%" height="50%">
        <tr><td><a href='gallery.php?&title=The Bear Fail&photo=1.jpg&descript=When your week just started then life gave you a plot twist:'>
            <img src="1.jpg" alt="image 1" width="50" height="50"><h3>The Bear Fail</h3></a>
        <td rowspan="10">
            <?php
                if(isset($_GET['photo']))
                {
                    $title=$_GET['title'];
                    $image=$_GET['photo'];
                    $subtitle=$_GET['descript'];
                    print"<h1>$title</h1>";
                    print"<img src=$image width=980 height=653 style='margin-left: 10%; margin-right: 10%; position: relative;'>";
                    print"<h1>$subtitle</h1>";
                }
                ?>

        <tr><td><a href='gallery.php?&title=Selfie Cat&photo=2.jpg&descript=When its your first time in a Country and want a picture everywhere:'>
            <img src="2.jpg" width="50" height="50"><h3>Selfie Cat</h3></a></td></tr>
        <tr><td><a href='gallery.php?&title=Moose Out&photo=3.jpg&descript=ME a kid First Time being in Baguio:'>
            <img src="3.jpg" width="50" height="50"><h3>Moose Out</h3></a></td></tr>
        <tr><td><a href="gallery.php?&title=What the Fox Can't&photo=4.jpg&descript=Suddenly remembering an embarrassing moment:">
            <img src="4.jpg" width="50" height="50"><h3>What the fox can't</h3></a></td></tr>
        <tr><td><a href='gallery.php?&title=LOL Lioness&photo=5.jpg&descript=When she finally cracked a joke after fighting for hours:'>
            <img src="5.jpg" width="50" height="50"><h3>LOL Lioness</h3></a>
        <tr><td><a href='gallery.php?&title=OWL NOOO!&photo=6.jpg&descript=When you smol but still wanna sit with your tall friends:'>
            <img src="6.jpg" width="50" height="50"><h3>OWL NOOO!</h3></a>
        <tr><td><a href='gallery.php?&title=Say Owl!&photo=7.jpg&descript=Me at Elementary School ID Picture Taking:'>
            <img src="7.jpg" width="50" height="50"><h3>Say Owl!</h3></a>
        <tr><td><a href='gallery.php?&title=F for the Fallen&photo=8.jpg&descript=I feel the pain, like buying ice cream the fell afterwards :('>
            <img src="8.jpg" width="50" height="50"><h3>F for the Fallen</h3></a>
        <tr><td><a href='gallery.php?&title=Surprised Sealion&photo=9.jpg&descript=POV: You a child seeing magic for the first time'>
            <img src="9.jpg" width="50" height="50"><h3>Surprised Sealion</h3></a>
        <tr><td><a href='gallery.php?&title=Monkey Business&photo=10.jpg&descript=Seeing your friends after 1 hour of sleep with no breakfast and heavy traffic'>
            <img src="10.jpg" width="50" height="50"><h3>Monkey Business</h3></a>
        <tr><td><a href='gallery.php?&title=Moncute&photo=11.jpg&descript=Ad pops up, "There are cute singles in your area."'>
            <img src="11.jpg" width="50" height="50"><h3>Moncute</h3></a>
        <td rowspan="10" width="80%">
        <h2>Why do we need to value Wildlife?</h2>
        <p> Wildlife refers to all the living organisms that are not domesticated, including animals, birds, fish, insects, and plants. 
        These creatures play a crucial role in maintaining the balance of nature and contribute to the sustainability of the planet. 
        Valuing wildlife is, therefore, of utmost importance as they provide us with numerous benefits.</p>
        
        <p>First and foremost, wildlife is an integral part of the planet's biodiversity. 
        Every living organism has a unique role to play in the ecosystem, and the removal of any species can upset 
        the delicate balance of nature. By protecting animal species, we can preserve the genetic diversity of our 
        planet and ensure that all creatures have a place in the world. </p>

        <p>Furthermore, wildlife provides important environmental benefits such as pollination, pest control, 
        and seed dispersal. These benefits contribute to the health and resilience of ecosystems and the agricultural 
        and economic systems that depend on them. For instance, bees are essential pollinators that play a 
        vital role in the production of many crops. Without them, the production of several fruits, vegetables, 
        and nuts would be affected.</p>

        <p>Valuing wildlife is also a matter of ethics. 
        It is our moral responsibility to treat animals and wildlife with respect and compassion. 
        This includes protecting them from unnecessary harm and ensuring their well-being. Many animals are 
        subjected to cruelty and abuse, whether it's through hunting, poaching, or habitat destruction. 
        As responsible members of society, we have a duty to prevent such practices and ensure that animals are treated humanely.       
        In addition, many cultures and societies have long-standing traditions and beliefs that value animals and wildlife. 
        These beliefs are often rooted in a deep appreciation for the interconnectedness of all living things and 
        the importance of maintaining harmony with the natural world. By valuing wildlife, we can honor these traditions and 
        preserve our cultural heritage.</p>
        <tr><td><a href='gallery.php?&title=The Council of Cats&photo=12.jpg&descript=Thy shall not be one of us!'>
            <img src="12.jpg" width="50" height="50"><h3>The Council of Cats</h3></a>
        <tr><td><a href="gallery.php?&title=Almost Chill Monke&photo=13.jpg&descript=When you're already comfortable then someone didn't close the door:">
            <img src="13.jpg" width="50" height="50"><h3>Almost Chill Monke</h3></a>
        <tr><td><a href='gallery.php?&title=Couple of Horsies&photo=14.jpg&descript=Me and my girl taking a picture:'>
            <img src="14.jpg" width="50" height="50"><h3>Couple of Horsies</h3></a>
        <tr><td><a href='gallery.php?&title=WAITTT Squirrel&photo=15.jpg&descript=Me trying to fit 10 activities, 5 presentations and 4 projects deadlined tomorrow:'>
            <img src="15.jpg" width="50" height="50"><h3>WAITTT Squirrel</h3></a>
        <tr><td><a href='gallery.php?&title=Penguin Snub&photo=16.jpg&descript="Talk to the Fin..."'>
            <img src="16.jpg" width="50" height="50"><h3>Penguin Snub</h3></a>
        <tr><td><a href='gallery.php?&title=Soaring Ea---&photo=17.jpg&descript=Someone telling me that everyone can sore high as long as we spread our wings:'>
            <img src="17.jpg" width="50" height="50"><h3>Soaring Ea---</h3></a>
        <tr><td><a href='gallery.php?&title=Kroo Kroo&photo=18.jpg&descript=When you just trying to enjoy life, but it has other plans'>
            <img src="18.jpg" width="50" height="50"><h3>Kroo Kroo</h3></a>
        <tr><td><a href="gallery.php?&title=Mom wasn't asking&photo=19.jpg&descript=The scene at the market when mom doesn't want to buy you a toy:">
            <img src="19.jpg" width="50" height="50"><h3>Mom wasn't asking</h3></a>
        <tr><td><a href='gallery.php?&title=What the Fish!?&photo=20.jpg&descript=Them: Shocked for the amazing thing I did. Me: Shocked for what I was able to do.'>
            <img src="20.jpg" width="50" height="50"><h3>What the Fish!?</h3></a>
        
    </table>

    </div>
</body>
</html>