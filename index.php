<html>
    <head>
        <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="Resources/css/style.css">
        <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <title>Zen Information Systems</title>
    </head>
    <!--<script>
        function write(DATA){
            var url = "write.php";
            var XML = "data.txt";
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.open("POST",url,true);
            xmlhttp.send("D="+DATA+'&F='+XML);
        }
    </script>-->
    <body>
        <header>
            <nav>
                <div class="row">
                    <img src="Resources/img/Blue_on_Transparent.png" alt="Zen Information Systems Logo" class="logo">
                    <ul class="main-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="addressBox">
            <div class="hero-text-box">
                <h1 class="Address1">Zen Information Sytems Limited</h1><h1 class="Address2">34 Swabey Road, Langley, Slough, Berkshire, SL3 8NP</h1>
                <br>
                <a class="btn btn-full" href="https://www.google.com/maps/place/34+Swabey+Rd,+Langley,+Slough+SL3+8NP,+UK/@51.4985785,-0.5608196,15z/data=!4m5!3m4!1s0x487670168a720335:0x4508344c6f32f8c6!8m2!3d51.4990683!4d-0.5452627" target="_blank">Navigate</a>
                <a class="btn btn-ghost" onclick="copyToClipboard('Zen Information Sytems Limited, 34 Swabey Road, Langley, Slough, Berkshire, SL3 8NP')" href="">Copy Address</a>
            </div>
        </section>
        <script>
            const copyToClipboard = str => {
                const el = document.createElement('textarea');
                el.value = str;
                el.setAttribute('readonly', '');
                el.style.position = 'absolute';
                el.style.left = '-9999px';
                document.body.appendChild(el);
                const selected =
                      document.getSelection().rangeCount > 0
                ? document.getSelection().getRangeAt(0)
                : false;
                el.select();
                document.execCommand('copy');
                document.body.removeChild(el);
                if (selected) {
                    document.getSelection().removeAllRanges();
                    document.getSelection().addRange(selected);
                }
                alert("Address Copied");
            };
        </script>
        <section class="section-form card">
            <div class="container">
                <div class="row">
                    <h2>Leave a Message</h2>
                </div>
                <div class="row">
                    <form class="contactForm" method="post">
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="name">Name</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="text" name="name" id="name" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="col span-2-of-3">
                                <input type="email" name="email" id="email" placeholder="Your Email Address" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label for="message">Message</label>
                            </div>
                            <div class="col span-2-of-3">
                                <textarea name="message" id="msg" placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col span-1-of-3">
                                <label>&nbsp;</label>
                            </div>
                            <div class="col span-2-of-3 submitbtn">
                                <input type="submit" id="btnSave" value="Submit" onclick="alert('Response submitted');">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="contactDetails">
            <br><br><h2 id="contactDetail">Contact Details</h2>
        </section>
        <footer>
            
        </footer>
        
        <!--<script>
            const downloadToFile = (content, filename, contentType) => {
                const a = document.createElement('a');
                const file = new Blob([content], {type: contentType});

                a.href= URL.createObjectURL(file);
                a.download = filename;
                a.click();

                URL.revokeObjectURL(a.href);
            };

            document.querySelector('#btnSave').addEventListener('click', () => {
                const textArea = document.querySelector('textarea');

                downloadToFile(textArea.value, 'my-new-file.txt', 'text/plain');
            });
        </script>-->
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    </body>
</html>

<?php             
if(isset($_POST['message']))
{
$data=$_POST['message'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>