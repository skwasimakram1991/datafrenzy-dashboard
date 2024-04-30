<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing-Paga</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/slimNav_sk78.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" integrity="sha512-UiVP2uTd2EwFRqPM4IzVXuSFAzw+Vo84jxICHVbOA1VZFUyr4a6giD9O3uvGPFIuB2p3iTnfDVLnkdY7D/SJJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<style>
    section.login .wrap {
        position: relative;
        display: flex;
        align-items: center;
        max-width: 581px;
        width: 100%;
        justify-content: center;
    }

    .shape1 {
        border-radius: 282px;
        background: var(--Green, #64CA37);
        width: 282px;
        height: 282px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        transition-delay: 2s;
    }

    .shape2 {
        border: 1px solid rgba(255, 255, 255, 0.01);
        background: rgba(130, 130, 130, 0.17);
        backdrop-filter: blur(23.700000762939453px);
        width: 360px;
        height: 180px;
        border-radius: 0 0 300px 300px;
        position: absolute;
        bottom: -33px;
        margin: auto;
        transform-origin: top;
        transition: all 1.9s ease-out;
    }

    img.img2 {
        width: auto;
        max-width: max-content;
        position: relative;
        transform: scale(0);

        transition: all 1s ease-out;
        /* transition-delay: 2s; */
    }

    .text-sec {
        max-width: 581px;
        text-align: center;
        position: absolute;
        width: 100%;
        transform: scale(0);    
        transition: all 1s ease-out;
        transition-delay: 2.3s;
    }
    .text-sec h3 {
        color: var(--Black, #000);
        font-size: 32px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin: 0 0 24px;
    }
    section.login  .text-sec  p{
            color: var(--Black, #000);
        text-align: center;
        font-size: 20px;
        font-style: normal;
        font-weight: 400;
        line-height: 140%;
        margin: 0 0 24px;
    }
    body.active-loader .shape2 {
        transform: rotate(-180deg) translate(0px, 0px);
    }

    body.active-loader2 .shape2 {
        opacity: 0;
    }

    body.active-loader2 img.img2 {
        transform: scale(1);
    }

    body.active-loader2 .shape1 {
        opacity: 0;
    }
    body.active-loader2 .text-sec{
        transform: scale(1);
    }
</style>
<body>
<header class="header2"></header>


