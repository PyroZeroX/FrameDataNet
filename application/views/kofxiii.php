<!DOCTYPE html>
<html class="jPanelMenu">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <title>Frame Data</title>
</head>
<body>
    <div id="jPanelMenu-menu">
    <ul>
        <?php
            foreach($nav as $row)
            {
                echo "<li><a href='./".$row['fighter']."'>".$row['fighter']."</a></li>";
            }
        ?>
    </ul>
    </div>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
            <div class="menu menu-trigger">
                <img src="./img/flame.png" width="21px" height="26px"/>
            </div>
            <div class="headerunit">
                <span class="nav-brand">KOFXIII Frame Data</span>
            </div>
        </div>
      </div>
    </div>
    <div class="container jPanelMenu-panel">
       <h2>Welcome</h2>
       <p>
        Welcome to the mobile KOFXIII Frame Data site, this site was designed for the mobile platform, so for the best viewing experience, please access this site from a mobile device!<br/><br/>
        Please <span class="positive bold">click the flame</span> in the top to reveal the navigation bar, from there, select a character and view the data.<br/><br/>

        We've tried to unify the notation and clean up any oddities in the data, but its not perfect, if you spot anything you know is incorrect, please contact us below!<br/><br/>
        We hope you find this site useful and good luck in your next tournament!<br/><br/>
        PS. Shoutouts to the <span class="positive bold"><a href="http://www.shadowlogic.com.au">Melbourne FGC</a></span>
       </p>

       <h2>Contact</h2>
       <p>
            This site was created by Steve '<a href="http://www.twitter.com/PyroZeroX">PyroZeroX</a>' Andreou and Shaun '<a href="http://www.twitter.com/KnightKinetik">KnightKinetik</a>' Johnson for KOFXIII players around the world.</br></br>
            If you find anything incorrect or have any suggestions, feel free to contact us on Twitter or <a href="mailto:me@pyrozerox.com">Steve via Email</a>

       </p>

       <h2>Frame Data Sources</h2>
       <ul>
           <li><a href='http://www.dreamcancel.com'>Dream Cancel</a></li>
           <li><a href="http://keykakko.wordpress.com/">Keykakko Blog</a></li>
           <li><a href="https://docs.google.com/spreadsheet/lv?pli=1&key=0AsrvpuirdQzwdGM0UDlRcGozMkJBQVZES0F4Zmw1MGc&f=true&noheader=true&gid=1">"The Google Spreadsheet" - @SignedByR</a></li>
       </ul>
    </div> <!-- /container -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="js/jpanel.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-42471054-1', 'framedata.net');
    ga('send', 'pageview');

    var jPM = $.jPanelMenu({
    menu: '#menu',
    trigger: '.menu-trigger',
    duration: 300
    });
    jPM.on();
    </script>
</body>
</html>