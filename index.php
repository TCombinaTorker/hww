<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        session_start();

        $head    = file_get_contents("head.php");
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
        if(isset($_POST['urun']))
      {
        $urun    = $_POST['urun'];
        }  //message from client


        
        if(isset($_POST['password']))
        {
        $_SESSION['password'] = $_POST['password'];  //page title
        } else {
        $_SESSION['password'] = "";
        }
        if(isset($_POST['username']))
        {
        $_SESSION['username'] = $_POST['username'];  //page title
        } else {
        $_SESSION['username'] = "";
        }
      $username1 = "tuerker";
      $password1 = "admin123";





    if ($page == "home" || $page == "") 
    {                //homepage
            $page = "pages/home.php"; 
    }elseif ($m != "") {
            $page = "pages/message.php";
            $message = fopen("messages/" . $name . date("Y-m-d h:i:sa") . ".txt", "w") or die("Unable to open file!");;
            fwrite($message, "Name:" . $name . "\nSubject:" . $urun . "\nE-Mail:" . $mail . "\nDate:" . date("d-m-y:l") . date("h:i:sa") . "\n \n Message:" . $m);
            fclose($message);
    }elseif ($page == 'admin'){           //   Admin
        if ($_SESSION['username'] == $username1 && ($_SESSION['password'] == $password1)) {
        $page  = "pages/panel.php";
    } else {$page  = "pages/login.php";}
        
    }elseif ($page == 'urun'){        //subjects
            $page = "pages/urunler.php";
    }elseif ($page == 'cv'){              //cv
            $page = "pages/cv.php";
    }elseif ($page == 'about'){           //about
            $page = "pages/about.php";    
    }elseif ($page == 'contact'){         //contact
            $page = "pages/contact.php";
    }elseif ($page == 'kereste'){             //  subjects/cla
            $page = "pages/urun/keresteler/" . $pageNum . ".php";
    }elseif ($page == 'mutfak'){             //   subjects/ir
            $page  = "pages/urun/mutfak/" . $pageNum . ".php";
    }elseif ($page == 'sunum'){           //   subjects/math
            $page  = "pages/urun/sunum/" . $pageNum . ".php";
    } else {
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




