<?php
    session_start();
?>
<?php include_once 'Format/header.php'?>
<?php
        if(isset($_SESSION["userid"])){
            echo "<h3>Hello there ". $_SESSION["useruid"] . "</h3>";
        }         
?>


<body>
    
    <element id = "container">
        <img src = "Assets/arcade.png" alt = "container">
    
        <element id = "logo">
            <img src = "Assets/CU_Arcade.png" alt = "logo">
        </element> 
    
    
        <element id = "intro">
    
            <h3>About CU Arcade</h3>
               
            <p style="color:white"><p class = "text">
                In this day and age, due to the COVID-19 situation in Hong Kong, university students are hard to meet each other face to face 
                in the campus. As students seldom have interaction during the online lessons, they hard to make new friends during the online 
                University life. Besides, many entertainment facilities such as cinema and theme park were forced to closed under the pandemic 
                situation, which severely limited the leisure activities that students can enjoy.  Therefore, as a group of computer software 
                developer, we would like to introduce a new entertaining-base web application to university students in CUHK.
            </p>
        </element>
    
        <a href = "../Loginandregister/Register.php">
            <img element id = "login" alt = "login" src = "Assets/login.png">
        </a>
    
    </element>

</body>


<?php include_once 'Format/footer.php'?>
