<!DOCTYPE html>
<html>
   <head>
      <title>Gmail Sender</title>
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body class="bg">

   <div class="wrapper">
         <form method="post" action="SendingImage.php">
            <h2>Gmail Sender App</h2><br>
            Email To :<br>
            <input type="text" name="email" span style="color:black;font-weight:bold"><br></span>
            Subject :<br>
            <input type="text" name="subject" span style="color:black;font-weight:bold"><br></span>
            Body :<br>
            <textarea name="body" span style="color:black;font-weight:bold"></textarea><br></span>
            Attachment :<br>
            <input type="File" id="file" name="File"><br><br>
            <input type="submit" value="SEND" name="submit">          
         </form><br>
         <a href="user_page.php" class="btn">Home</a><br>
         <?php
         if(isset($_POST['submit'])){
            $url = "https://script.google.com/macros/s/AKfycbztbGVDBrSsgoNVFySYiGNPp_j2roS3AGWHpDBj6YJMT-TQi-N9V2pZ6ive0uyYFpUn/exec";
            $ch = curl_init($url);
            curl_setopt_array($ch, [
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_POSTFIELDS => http_build_query([
                  "recipient" => $_POST['email'],
                  "subject"   => $_POST['subject'],
                  "body"      => $_POST['body'],
                  "File"   => $_POST['File']
               ])
            ]);
            $result = curl_exec($ch);
            echo $result;
         }
         ?>
      </div>
   </body>
</html>