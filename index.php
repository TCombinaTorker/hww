<!DOCTYPE html>
<html lang="en">

<head>
    <?php $head    = file_get_contents("head.php");
          print $head; 
    ?>
</head>

<body>
<?php

      if(isset($_GET['p']))
      {
      $page       = $_GET['p'];  //page title
      } else {
        $page = "";
      }
      if(isset($_GET['n']))
      {      
      $pageNum    = $_GET['n'];  //page subtitle
      }else {
        $pageNUm = "";
      }
      if(isset($_POST['message']))
      {
      $m          = $_POST['message'];  //message from client
      } else {
        $m = "";
      }
      if(isset($_POST['name']))
      {
      $name       = $_POST['name'];  //message from client
      } else {
        $name = "pages/error.php";
      }
      if(isset($_POST['mail']))
      {
        $mail       = $_POST['mail'];  //message from client
      } else {
        $mail = "";
      }
        if(isset($_POST['subject']))
      {
        $subject    = $_POST['subject'];
        }  //message from client

    if ($page == "home" || $page == "") 
    {                //homepage
            $page = "pages/home.php"; 
    }elseif ($m != "") {
            $page = "pages/message.php";
            $message = fopen("messages/" . $name . date("Y-m-d h:i:sa") . ".txt", "w") or die("Unable to open file!");;
            fwrite($message, "Name:" . $name . "\nSubject:" . $subject . "\nE-Mail:" . $mail . "\nDate:" . date("d-m-y:l") . date("h:i:sa") . "\n \n Message:" . $m);
            fclose($message);
    }elseif ($page == 'subjects'){        //subjects
            $page = "pages/subjects.php";
    }elseif ($page == 'cv'){              //cv
            $page = "pages/cv.php";
    }elseif ($page == 'about'){           //about
            $page = "pages/about.php";    
    }elseif ($page == 'contact'){         //contact
            $page = "pages/contact.php";
    }elseif ($page == 'func'){            //  subjects/func
            $page = "pages/subjects/functional/" . $pageNum . ".php";
    }elseif ($page == 'cla'){             //  subjects/cla
            $page = "pages/subjects/cla/" . $pageNum . ".php";
    }elseif ($page == 'ir'){             //   subjects/ir
            $page  = "pages/subjects/ir/" . $pageNum . ".php";
    }elseif ($page == 'crypt'){           //   subjects/math
            $page  = "pages/subjects/crypt/" . $pageNum . ".php";
    }elseif ($page == 'math'){           //   subjects/math
        $page  = "pages/subjects/math/" . $pageNum . ".php";
    }else {
            $page = "pages/error.php";
        }



$headerContent   = file_get_contents("header.php");
$pageContent     = (file_get_contents($page));
$footerContent   = file_get_contents("footer.php");



$webPage = $headerContent . '<div id="container">' . $pageContent . "</div>" . $footerContent;
print $webPage;


?>


</body>





</html>




