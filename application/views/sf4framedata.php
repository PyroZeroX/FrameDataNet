<!DOCTYPE html>
<html class="jPanelMenu">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/moves.css" rel="stylesheet">
    <link href="css/sf4.css" rel="stylesheet">
    <title><?php echo $game; ?> Frame Data: <?php echo $fighter; ?></title>
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
                <span class="nav-brand"><?php echo $fighter; ?></span>
            </div>
        </div>
      </div>
    </div>
    <div class="container jPanelMenu-panel">
        <?php
        foreach($framedata as $row)
        { ?>
            <div class='fightermove'>
            <h2><?php echo $row['Move']; ?> <?php if($row['Notation'] != '')
            { ?>
            <br/><span class='motion <?php echo str_replace(" ", "", $row['Type'])?>'>[
            <?php
                /*
                    Parse Notation Symbols
                    Applications/helpers/notation_helper.php contains the defintion for parseNotation(str);
                */
                $symbols = explode(',', $row['Notation']);
                foreach($symbols as $symbol)
                {
                    if(strstr($symbol, '+'))
                    {
                        $sentance = explode('+', $symbol);
                        foreach ($sentance as $icon)
                        {
                            if(strstr($icon, ';'))
                            {
                                $input = explode(';', $icon);
                                foreach($input as $i){ echo parseNotation($i); }
                            }
                            else echo parseNotation($icon);
                        }
                    }
                    else if(strstr($symbol, ';'))
                    {
                        $input = explode(';', $symbol);
                        foreach($input as $i){ echo parseNotation($i); }
                    }
                    else echo parseNotation($symbol);
                }
                echo ' ] ('.$row['Type'].')'; } ?></span></h2>
                <div class='moveattribute'>
                    <h1><?php echo $row['Damage']?></h1>
                    <span class='bold'>Damage</span>
                </div>
                <div class='moveattribute'>
                    <h1><?php echo $row['Stun']?></h1>
                    <span class='bold'>Stun</span>
                </div>
                <div class='moveattribute'>
                    <h1><?php echo $row['Startup']?></h1>
                    <span class='bold'>Startup</span>
                </div>
                <div class='moveattribute'>
                    <h1><?php echo $row['Recovery']?></h1>
                    <span class='bold'>Recovery</span>
                </div>
                <div class='moveattribute'>
                    <h1><span class="<?php
                        switch($row['On Guard'])
                        {
                            case $row['On Guard'] >= 1 || $row['On Guard'][0] == '+': echo "positive"; break;
                            case $row['On Guard'] < 0 && $row['On Guard'][0] != '+': echo "negative"; break;
                            default: echo ""; break; 
                        }
                        ?>"><?php echo $row['On Guard'];?></span>
                    </h1>
                    <span class='bold'>Blk Adv.</span>
                </div>
                <div class='moveattribute'>
                    <h1><span class="<?php
                        switch($row['On Hit'])
                        {
                            case $row['On Hit'] >= 1 || $row['On Hit'][0] == '+': echo "positive"; break;
                            case $row['On Hit'] < 0 && $row['On Hit'][0] != '+': echo "negative"; break;
                            default: echo ""; break; 
                        }
                        ?>"><?php echo $row['On Hit'];?></span>
                    </h1>
                    <span class='bold'>Hit Adv.</span>
                </div>
                <div class='movenotes'>
                <?php if($row['Notes'] != "")
                {?>
                    <p><span class='bold'>Notes: </span><?php echo $row['Notes'];?></p>
                <?php } ?>
                </div>
             </div>
            <hr class='clearnav'/>
            <br/><br/>
        <?php }
        ?>
    </div> <!-- /container -->
    <div id="footer">
        <div class="container">        
            <br/><br/>
            <p>&copy;2013 - PyroZeroX / KnightKinetik</p>
        </div>
    </div>
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