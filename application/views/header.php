<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<style>
    .navigation-top {
        font-size: 14px;
        background-color: whitesmoke;
        font-size: 0.875rem;
        /* left: 0; */
        /* position: absolute; */
        /* right: 0; */
        /* width: 100%; */
        z-index: 3;
        justify-content: center;

    }

    .about,
    .learn,
    .daven,
    .donate,
    .event,
    .my_account,
    .news {
        color: black;
        margin: 17px;
        padding: 17px;
        font-weight: bold;
        font-size: 17px;
    }

    .about:hover,
    .learn:hover,
    .daven:hover,
    .donate:hover,
    .event:hover,
    .my_account:hover,
    .news:hover {
        color: gray;

    }

    .navigation-top,
    .nav {
        text-align: center;
        justify-content: center;
    }


    .footer {
        display: flex;


    }

    .donation-container {
        background-color: aliceblue;
        padding: 2%;
        margin-left: 10%;
        margin-top: 5%;
        height: 460px;
        margin-bottom: 10%;
    }

    .footer-details {
        width: 50%;
        margin: 5%;


    }

    .about-img {
        position: sticky;
        width: 100%;
        margin-bottom: 5%;
    }

    .footer-image {
        width: 50%;
    }

    .footer-img {
        width: 50%;
        height: 50%;
        margin-top: 70px;
    }

    .footer-btn {
        border: none;
        border-radius: 20px;
        color: white;
        padding: 10px;
        font-weight: lighter;
        margin-top: 50px;
        padding-left: 20px;
        padding-right: 20px;
        font-family: "Roboto Slab", serif;
        padding-top: 14px;
        padding-bottom: 14px;
        background-color: black;
        font-size: 14px;
        font-style: normal;
    }

    .donation-title {
        margin-left: 20%;
        font-family: "Roboto Slab", serif;
        margin-top: 3%;
        font-weight: lighter;
        font-size: 18px;

    }

    .donate-btn {
        border: none;
        border-radius: 20px;
        color: white;
        padding: 10px;
        font-weight: lighter;
        margin-top: 50px;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 14px;
        font-family: "Roboto Slab", serif;
        padding-bottom: 14px;
        background-color: black;
        font-size: 14px;
        margin-left: 40%;
        margin-bottom: 40%;

    }



    .h1 {
        color: #222;
        font-size: 14px;
        font-size: 0.875rem;
        font-weight: 800;
        font-family: "Roboto Slab", serif;
        letter-spacing: 0.14em;
        text-transform: uppercase;
    }

    span {
        margin: 5%;
        font-size: 20px;
        font-family: "Roboto Slab", serif;
        font-weight: lighter;
    }

    .about-us {
        margin: 5%;
        font-family: "Roboto Slab", serif;
        font-size: 20px;


    }

    .about-btns-zmanim {
        border: none;
        border-radius: 20px;
        color: white;
        font-family: "Roboto Slab", serif;
        padding: 10px;
        background-color: black;
        font-size: 14px;
        font-weight: lighter;
        font-style: normal;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 14px;
        padding-bottom: 14px;
        margin: 1%;
        margin-left: 40%;
    }

    .about-btns-event {
        border: none;
        border-radius: 20px;
        font-weight: lighter;
        color: white;
        padding: 10px;
        font-family: "Roboto Slab", serif;
        background-color: black;
        font-size: 14px;
        font-style: normal;
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 14px;
        padding-bottom: 14px;
        margin: 1%;
    }

    .about-click-btn {
        display: flex;
    }


    .rabbi-img {
        border-radius: 50%;
        width: 25%;
        margin-left: 38%;
        margin-top: 3%;
        margin-bottom: 5%;

    }

    .about-title {
        font-weight: lighter;
        font-size: 20px;
        margin-top: 5%;
        font-family: "Roboto Slab", serif;
        margin-left: 5%;
    }
    .daven-title{
        font-weight: lighter;
        font-size: 20px;
        margin-top: 5%;
        font-family: "Roboto Slab", serif;
        margin-left: 5%;
    }
    

    .about-our-rabbi {
        font-weight: lighter;
        text-align: center;
        font-size: 18px;
        font-family: "Roboto Slab", serif;
        margin-top: 5%;
    }

    .email-rabbi {
        border: none;
        border-radius: 20px;
        color: white;
        padding: 10px;
        background-color: black;
        font-size: 14px;
        font-style: normal;
        padding-left: 30px;
        font-family: "Roboto Slab", serif;
        padding-right: 30px;
        padding-top: 14px;
        padding-bottom: 14px;
        margin-left: 45%;
    }

    .footer-det {
        font-weight: bold;
    }

    .title-daven {
        text-align: center;
        margin-bottom: 2%;
        font-weight: lighter;
        font-family: "Roboto Slab", serif;
    }

    .daven-details {
        margin-top: 2%;
        margin-bottom: 5%;
        display: list-item;
        text-align: center;
    }

    .account {
        background-color: aliceblue;
        padding: 2%;
        margin-left: 10%;
        margin-top: 5%;
        height: 470px;
        margin-bottom: 10%;
    }
    
    .account_signup {
        background-color: aliceblue;
        padding: 2%;
        margin-left: 10%;
        margin-top: 5%;
        height: 550px;
        margin-bottom: 10%;
    }


    /* .account_login {} */

    .account-fileds {
        margin-left: 20%;
        margin-top: 1%;
    }

    .account-fileds-signup {
        margin-left: 20%;
        margin-top: 1%;
        
    }


    .donation-form {
        margin-left: 20%;
        margin-top: 1%;

    }

    .account-text {
        width: 30%;
        margin: 1%;
    }

    .donate-text {
        width: 30%;
        margin: 1%;

    }

    .login_btn {
        border: none;
        border-radius: 20px;
        color: white;
        font-family: "Roboto Slab", serif;
        padding: 10px;
        background-color: black;
        font-size: 16px;
        font-weight: lighter;
        font-style: normal;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-left: 1%;
        margin-top: 1%;
    }

    .donate-btn {
        border: none;
        border-radius: 20px;
        color: white;
        font-family: "Roboto Slab", serif;
        padding: 10px;
        background-color: black;
        font-size: 14px;
        font-weight: lighter;
        font-style: normal;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-left: 1%;
        margin-top: 1%;

    }

    .signup {
        text-decoration: none;
        border: none;
        color: black;
        font-family: "Roboto Slab", serif;
        font-size: 20px;
        font-weight: lighter;
        font-style: normal;
        padding-left: 20px;
        padding-right: 20px;
        padding-top: 14px;
        padding-bottom: 14px;
        margin-left: 2px;
        margin-top: 2%;

    }
</style>


<body>
    <nav class="navigation-top">
        <ul class="nav nav-pills nav">

            <li class="nav-item">
            <li class="nav-item dropdown">
            <li><a class="nav-link daven" href="index">HOME</a></li>
            <a class="nav-link dropdown-toggle about" data-bs-toggle="dropdown" href="#">ABOUT</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="about">Rav Ori Millrod</a></li>

            </ul>
            </li>
            <li><a class="nav-link daven" href="daven">DAVEN</a></li>
            <li><a class="nav-link donate" href="donate">DONATE</a></li>
            <li><a class="nav-link event" href="#">EVENTS</a></li>
            <li><a class="nav-link learn" href="#">LEARN</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle news" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">NEWS</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">More</a></li>
                    <!-- <li>
                    <hr class="dropdown-divider">
                </li> -->
                </ul>
            </li>
            <li><a class="nav-link my_account" href="account">MY ACCOUNT</a></li>
            </li>
        </ul>
    </nav>