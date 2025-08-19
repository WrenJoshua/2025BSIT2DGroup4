<html>
    <head>
        <link rel="stylesheet" href="css/Header&Footer.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        html, body {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        main {
            display: flex;
        }

        body {
            background-color: #ffffff;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 300px;
            height: 100%;
            padding: 20px;
            background-color: #EEE2EE;
            box-shadow: 0 2px 4px #0000001a;
        }

        .searchbox {
            margin-bottom: 20px;
            border-radius: 100%;
        }

        .jobcard {
            background-color: #ffffff;
            height: 150px;
            border-radius: 10px;
            border: 1px solid #00000028;
            padding: 10px;
            line-height: 0.5;
            transition: all 0.3s ease;
        }

        .jobcard:hover {
            box-shadow: 0 4px 8px #0000001a;
            transform: translateY(-5px);
        }

        .jobton {
            width: 200px;
            padding: 10px;
            background-color: #5a2b57ff;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .jobton:hover {
            background-color: #5a2b57ea;
        }

        .Rightcontent {
            flex: 1;
            padding: 20px;
            height: 100%;
        }
        .JobEdit {
            margin-top: 0;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 10px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            margin-top: 5px;
        }

        textarea {
            height: 60px;
            resize: vertical;
        }   

        input, textarea, select {
            padding: 8px;
            border: 1px solid #c9c9c9ff;
            border-radius: 5px;
            font-size: 14px;
        }

        .saveton {
            margin-top: 20px;
            padding: 12px 30px;
            background-color: #5a2b57;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .saveton:hover {
            background-color: #5a2b57ea;
        }

    @media (max-width: 768px) {

    main {
        flex-direction: column;
    }

    .sidebar {
        width: auto;
        height: auto;
        margin: 0;
    }

    .Rightcontent {
        width: auto;
        margin: 0;
    }

    .jobcard {
        width: auto;
    }

    .jobton {
        width: 100%;
    }

    form {
        gap: 8px;
    }

    input, textarea, select {
        width: 100%;
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

    <?php include 'needs/header.php'; ?>

<main>

<div class="sidebar">

        <div class="searchbox">
            <input type="text" placeholder="Search jobs...">
        </div>

        <div class="jobcard">
            <h3>Graphic Designer</h3>
            <p>Pixel Works Studio</p>
            <p>Bacolod City</p>
            <p>Aug 06, 2025</p>
        </div>
        <br><br>
        <div class="jobcard">
            <h3>Sales Associate</h3>
            <p>Shop Smart</p>
            <p>Bago City</p>
            <p>Aug 10, 2025</p>
        </div>

        <br><br>
        <button class="jobton">+ Add New Job</button>
    </div>

    <br>

    <div class="Rightcontent">
        <h2 class="JobEdit">Edit Job Or Create Job</h2>
        <form>
            <label>Job Title</label>
            <input type="text" placeholder="e.g. Graphic Designer">

            <label>Company</label>
            <input type="text" placeholder="e.g. Pixel Works">

            <label>Location</label>
            <input type="text" placeholder="e.g. Bacolod City">

            <label>Job Type</label>
            <select>
                <option>Full Time</option>
                <option>Part Time</option>
                <option>Intern (Kindly Email Us)</option>
            </select>

            <label>Salary</label>
            <select>
                <option>₱5,000 - ₱15,000</option>
                <option>₱15,000 - ₱25,000</option>
                <option>₱25,001 - ₱35,000</option>
                <option>Custom</option>
            </select>

            <label>Job Description</label>
            <textarea placeholder="Describe the role, tasks, and expectations."></textarea>

            <label>Requirements (Skills)</label>
            <input type="text" placeholder="e.g. Adobe Photoshop, Figma">

            <label>Education</label>
            <select>
                <option>Entry-level</option>
                <option>Mid-level</option>
                <option>Senior-level</option>
            </select>

            <label>Application Deadline</label>
            <input type="date">

            <label>Contact Email</label>
            <input type="email" placeholder="Enter email address">

            <button type="submit" class="saveton">Save Changes</button>
        </form>
    </div>

</main>


    <?php include 'needs/footer.php'; ?>

</body>
</html>