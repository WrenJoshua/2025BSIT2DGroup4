<html>
<head>
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        html, body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        body {
            background-color: #ffffff;
            margin: 0;
            font-family: Arial, sans-serif;
            color: #46183F;
        }

        main {
            flex: 1;
        }

        .LandingPage {
            background: linear-gradient(to bottom, #5a2b57, #8c3c89);
            padding: 60px 20px 5%;
            text-align: center;
            border-radius: 0 0 40px 40px;
            color: #fff;
            box-shadow: 0px 5px 10px #0000008e;
        }

        .Title {
            font-size: 60px;
            font-weight: bold;
        }

        .Desc {
            font-size: 22px;
            margin-top: 15px;
        }

        .Desc2 {
            font-weight: bold;
            font-size: 64px;
            margin-top: 15px;
        }

        .Desc3 {
            font-style: italic;
            font-size: 18px;
            opacity: 0.9;
            margin-top: 15px;   
        }

        .button {
            margin-top: 30px;
            padding: 12px 30px;
            background-color: #ffffff;
            color: #5a2b57;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        .button:hover {
            background-color: #ffffffcb;
        }

        h1 {
            margin-top: 40px;
            text-align: center;
            font-weight: 600;
        }

        .HowItWorks {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            padding: 20px;
        }

        .card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 20px;
            width: 250px;
            height: auto;
            text-align: center;
            border: 1px solid #e5d3eb;
            box-shadow: 0 4px 10px #0000000d;
            transition: transform 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
        }

        .card h3 {
            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;
            line-height: 1.75;
            color: #5a2b57;
        }


    @media (max-width: 768px) {

    .Title {
        font-size: 36px;
    }
    .Desc {
        font-size: 18px;
    }
    .Desc2 {
        font-size: 28px;
    }
    .Desc3 {
        font-size: 14px;
    }
    .LandingPage {
        padding: 40px 15px;
        border-radius: 0 0 25px 25px;
    }
    .button {
        font-size: 14px;
        padding: 10px 20px;
    }

    .HowItWorks {
        flex-direction: column;
        align-items: center;
        gap: 15px;
        padding: 15px;
    }
    .card {
        width: 90%;
        max-width: 400px;
        padding: 20px;
    }
    .card img {
        width: 70px;
        height: 70px;
    }
    .card h3 {
        font-size: 18px;
    }
    .card p {
        font-size: 14px;
    }

    .Header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 12px 15px;
        flex-wrap: wrap;
    }

    .Logo {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .Logo a {
        font-size: 20px;
    }

    .Logo img {
        width: 35px;
        height: 35px;
    }

    .Navigation {
        display: flex;
        flex-direction: none;
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .Navigation a {
        font-size: 16px;
        font-weight: bold;
    }

    .RightSide {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-left: auto;
    }

    .Profile img {
        width: 32px;
        height: 32px;
    }

    .Profile a {
        font-size: 13px;
    }

    .HeadIcon img {
        width: 20px;
        height: 20px;
    }

    .footercontent {
        flex-direction: column;
        align-items: flex-start;
        gap: 20px;
        text-align: left;
    }
    .footerlinks,
    .footersocial {
        width: 100%;
    }
    .footerlinks a {
        font-size: 14px;
    }
    .icons img {
        width: 22px;
        height: 22px;
    }
    .footerRights {
        font-size: 12px;
        text-align: center;
    }
}

    </style>
</head>

<body>

<?php require 'needs/header.php'; ?>

<main>
<div class="LandingPage">
    <div class="Title"><strong>JobConnect</strong></div>
    <div class="Desc">Find Work. Hire Smart.</div>
    <div class="Desc2">Where Talent <br> Meets Opportunity.</div>
    <br>
    <a href="Explore.php"><button class="button">GET STARTED</button></a>
    
    <div class="Desc3"> <br><br><br>Connecting People. Building Careers. </div>
</div>


<h1>How It Works</h1>
<div class="HowItWorks">
    <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/128/2520/2520864.png">
        <h3>Create your profile</h3>
        <p>Build a professional profile that showcases your skills, experience, and goals. Highlight what makes you unique so employers or clients can easily understand what you offer and why you’re the right fit.</p>
    </div>
    <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/128/3850/3850205.png">
        <h3>Explore Ways To Earn</h3>
        <p>Browse through a variety of earning opportunities tailored to your skills and interests. From freelance gigs to part-time work and long-term projects, find the perfect way to grow your income.</p>
    </div>
    <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/128/4272/4272841.png">
        <h3>Get Paid</h3>
        <p>Receive your payments securely and on time with our reliable payment system. Focus on delivering great work while we make sure you get paid without delays or complications.</p>
    </div>
    <div class="card">
        <img src="https://cdn-icons-png.flaticon.com/128/9166/9166947.png">
        <h3>Find Employees</h3>
        <p>Post your job openings and connect with skilled professionals who match your requirements. Whether you need part-time help or full-time staff, easily find the right people to help your business grow.</p>
    </div>
</div>
</main>

<br><br><br><br><br><br>

<?php require 'needs/footer.php'; ?>

</body>
</html>
