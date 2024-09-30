<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certification</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@300;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.0/FileSaver.js"></script>
    <script src="certificate.js"></script>
    <script>
        var na = '';
        var form = document.getElementById("form");
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            var name = document.getElementById("name").value;
            var course = document.getElementById("course").value;
            var start_date = document.getElementById('start-date').value;
            var end_date = document.getElementById('end-date').value;

            document.getElementById('candidate_name').innerText = name;
            document.getElementById('subject').innerText = course;

            document.getElementById('startDate').innerText = start_date;
            document.getElementById('endDate').innerText = end_date;
            na = name.split(' ').join('');

            // Show the certificate
            document.getElementById('main').style.display = 'block';

            // Generate and download the image
            domtoimage.toBlob(document.getElementById('main')).then(function (blob) {
                window.saveAs(blob, na + "-result.png");
            });
        });
    </script>
</head>

<body>

    <!-- Candidate Detail -->
   <form id="form" method="post" action="bonafide.php">
        <h1>Certificate</h1>
        <div class="course">
            <span>Course:</span>
            <select name="course" id="course" class="course" required>
                <option value=""></option>
                <option value="BE Computer Science">BE Computer Science</option>
                <option value="BE Electronics">BE Electronics</option>
                <option value="Bio Technology">Bio Technology</option> 
            </select>
        </div>
        
        <div class="name">
            <span>Name: </span>
            <input type="text" placeholder="name" name="name" required id="name">
        </div>

        <div class="date">
            Start: <input type="date" name="start_date" id="start-date" required>
            End: <input type="date" name="end_date" id="end-date" required>
        </div>
        <div>
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>


    <!-- Certificate -->

    <main id="main">
        <div class="container">

            <div class="certificate-header">
                <h1>Sri Shakthi institute of engineering and Technology<span></h1>
                <!-- <h4 id="date_conatiner">Internship Conducted Between (<span id="startDate"></span> To <span
                        id="endDate"></span>)</h4> -->
            </div>

            <div class="certificate-main" id="form">
                <p>This certificate is certify to</p>
                <h4 class="candidate-name" id="candidate_name"></h4>
                <p>is a Bonafide for studying</i><b><span
                            class="candidate_course" id="subject"></span></b>at Sri Shakthi institute of engineering and Technology.</p>

                <p class="sign">Kannamma</p>
                <div class="hr"></div>
                <h6>Hod Name</h6>
                <h5>Head of Department,SIET</h5>

                <img class="full_logo" src="https://tse2.mm.bing.net/th?id=OIP.2Nsc5uD7mzKVC5yF4AQeogAAAA&pid=Api&P=0&h=180" alt="Infocom">
            </div>
        </div>

        <button id="btn" class="button">Download Button</button>
    </main>
</body>

</html>