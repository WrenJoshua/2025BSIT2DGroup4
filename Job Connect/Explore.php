<html>
    <head>
        <title>Explore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/Header&Footer.css">
        <link rel="stylesheet" href="css/jobcard.css">
    <style>

    html, body {
        height: 100%;
        display: flex;
        flex-direction: column;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    main {
        flex: 1;
    }








    .BabawNgaBox {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 65px;
        background-color: #8C3C8915;
        box-shadow: 0px 5px 10px #0000008e;
    }

    .SearchSaBox {
        width: 80%;
        padding: 20px;
        background-color: #491541d7;
        border-radius: 15px;
        box-shadow: 0 2px 4px #0000001a;
    }

    .SearchSaBox h1 {
        color: #ffffff;
        text-align: left;
        font-size: 32px;
        margin: 10px 5px 20px 25px;
        font-weight: lighter;
    }

    .SearchDesc {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 20px;
        margin: 0 25px;
        flex-wrap: wrap;
    }

    .SearchDesc p {
        color: #ffffff;
        font-size: 17px;
        margin: 0;
        font-weight: lighter;

    }

    .SearchInputs {
        display: flex;
        align-items: center;
        flex: 1;
        background: #fff;
        border-radius: 30px;
        overflow: hidden;
        border: 1px solid #cccccc;
    }

    .SearchInputs input,
    .SearchInputs select {
        border: 1px solid #ffffff;
        padding: 10px 15px;
        font-size: 16px;
        outline: none;
        flex: 1; 
        min-width: 120px;
    }

    .SearchInputs input {
        border-right: 1px solid #ccc;
    }

    .SearchInputs select {
        background: #fff;
    }

    .SearchButton {
        background-color: #8C3C89;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 20px;
        margin: 2.5px;
        transition: 0.3s;
    }

    .SearchButton:hover {
        background-color: #822d82;
    }

    .SearchField {
        display: flex;
        align-items: center;
        flex: 1;
        min-width: 150px;
    }

    @media (max-width: 768px) {
        
    .BabawNgaBox {
        padding: 30px 15px;
    }

    .SearchSaBox {
        width: 95%;
        padding: 15px;
    }

    .SearchSaBox h1 {
        font-size: 24px;
        margin: 10px 0 15px 0;
    }

    .SearchDesc {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
        margin: 0;
    }

    .SearchInputs {
        flex-direction: column;
        width: 100%;
        gap: 10px;
    }

    .SearchField {
        width: 100%;
    }

    .SearchButton {
        width: 100%;
        margin: 0;
        padding: 12px 0;
        font-size: 16px;
        border-radius: 10px;
    }

    .work {
        display: flex;
        flex-direction: column;
        gap: 50px;
        padding: 0 10px;
        margin: 50px 5px 50px 5px;
    }

    .card {
        width: 100%;
        padding: 15px;
        box-sizing: border-box;
    }

    .card
    .top img {
        width: 60px;
        height: 60px;
        object-fit: cover;
    }

    .Cardfooter {
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }

    .Cardfooter div {
        width: 100%;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .save, .apply {
        flex: 1;
        width: auto;
    }

    h1.Workheader {
        font-size: 22px;
        margin-left: 10px;
        margin-top: 35px;
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

    <div class="BabawNgaBox">
            <div class="SearchSaBox">
                <h1>Find work near your area!</h1>

                <div class="SearchDesc">
                    <p>Over dozens of work<br>to explore!</p>

                    <div class="SearchInputs">
                        <div class="SearchField">
                            <input type="text" placeholder="🔍Search for Jobs">
                        </div>
                        <div class="SearchField">
                            <input type="text" placeholder="📍Location">
                        </div>
                        <div class="SearchField">
                            <select class="💼jobtype">
                                <option value="">💼Entry-level</option>
                                <option value="junior">💼Junior</option>
                                <option value="mid">💼Professionals</option>
                                <option value="senior">💵Commissions</option>
                            </select>
                        </div>
                        <button class="SearchButton">Search</button>
                    </div>
                </div>
            </div>
        </div>

    <!-- PAUSE!!! Sa Dalom nman also INDI NAKOOOOOOOOO. -->

<h1 class="Workheader">Available Work!</h1>

<div class="work">

<div class="card">
  <div class="top">
    <div>
      <div class="title">Graphic Designer</div>
      <div>Pixel Works Studio</div>
    </div>
    <img src="https://learn.g2.com/hubfs/iStock-1191609321%20%281%29.jpg">
  </div>

  <div class="info">
    💼 1-2 yrs<br>
    📍 Philippine, Bacolod City
  </div>

  <div class="Cardfooter">
    <span>Posted a month ago</span>
    <div>
      <button class="save">Save</button>
      <button class="apply">Apply Now</button>
    </div>
  </div>
</div>



<div class="card">
  <div class="top">
    <div>
      <div class="title">Sales Associate</div>
      <div>Shop Smart</div>
    </div>
    <img src="https://static.joblist.com/static/job-descriptions/sales-associate.jpg">
  </div>

  <div class="info">
    📄 1-2 yrs<br>
    📍 Philippine, Bago City
  </div>

  <div class="Cardfooter">
    <span>Posted a month ago</span>
    <div>
      <button class="save">Save</button>
      <button class="apply">Apply Now</button>
    </div>
  </div>
</div>

</div>


</main>

<?php require 'needs/footer.php'; ?>

</body>











</html>