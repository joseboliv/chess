<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
        <title>Checkers - Games for the Brain</title>
        <link rel="stylesheet" href="/chess/lib/shared.css" type="text/css" media="screen, projection, print">
        <script type="text/javascript" src="/chess/lib/dynamic.js">
        </script><meta name="viewport" id="vp" content="user-scalable=yes,width=device-width">        
        <script type="text/javascript" src="default.js"></script>
        <link rel="stylesheet" href="default.css" type="text/css" media="screen, projection, print">
    </head>
    <body onload="init()">
    <div class="all">
    <div id="counter">&nbsp;</div>
    <div class="page">    
    <h1>Checkers</h1>
    <div class="content">
        <div class="gameWrapper">
        <div class="boardWrapper">
            <div id="board">
                <div class="line"><img src="me1.gif" name="space77" onclick="didClick(7, 7)" alt=""><img src="black.gif" name="space67" alt=""><img src="me1.gif" name="space57" onclick="didClick(5, 7)" alt=""><img src="black.gif" name="space47" alt=""><img src="me1.gif" name="space37" onclick="didClick(3, 7)" alt=""><img src="black.gif" name="space27" alt=""><img src="me1.gif" name="space17" onclick="didClick(1, 7)" alt=""><img src="black.gif" name="space07" alt=""></div>
                <div class="line"><img src="black.gif" name="space76" alt=""><img src="me1.gif" name="space66" onclick="didClick(6, 6)" alt=""><img src="black.gif" name="space56" alt=""><img src="me1.gif" name="space46" onclick="didClick(4, 6)" alt=""><img src="black.gif" name="space36" alt=""><img src="me1.gif" name="space26" onclick="didClick(2, 6)" alt=""><img src="black.gif" name="space16" alt=""><img src="me1.gif" name="space06" onclick="didClick(0, 6)" alt=""></div>
                <div class="line"><img src="me1.gif" name="space75" onclick="didClick(7, 5)" alt=""><img src="black.gif" name="space65" alt=""><img src="me1.gif" name="space55" onclick="didClick(5, 5)" alt=""><img src="black.gif" name="space45" alt=""><img src="me1.gif" name="space35" onclick="didClick(3, 5)" alt=""><img src="black.gif" name="space25" alt=""><img src="me1.gif" name="space15" onclick="didClick(1, 5)" alt=""><img src="black.gif" name="space05" alt=""></div>
                <div class="line"><img src="black.gif" name="space74" alt=""><img src="gray.gif" name="space64" onclick="didClick(6, 4)" alt=""><img src="black.gif" name="space54" alt=""><img src="gray.gif" name="space44" onclick="didClick(4, 4)" alt=""><img src="black.gif" name="space34" alt=""><img src="gray.gif" name="space24" onclick="didClick(2, 4)" alt=""><img src="black.gif" name="space14" alt=""><img src="gray.gif" name="space04" onclick="didClick(0, 4)" alt=""></div>
                <div class="line"><img src="gray.gif" name="space73" onclick="didClick(7, 3)" alt=""><img src="black.gif" name="space63" alt=""><img src="gray.gif" name="space53" onclick="didClick(5, 3)" alt=""><img src="black.gif" name="space43" alt=""><img src="gray.gif" name="space33" onclick="didClick(3, 3)" alt=""><img src="black.gif" name="space23" alt=""><img src="gray.gif" name="space13" onclick="didClick(1, 3)" alt=""><img src="black.gif" name="space03" alt=""></div>
                <div class="line"><img src="black.gif" name="space72" alt=""><img src="you1.gif" name="space62" onclick="didClick(6, 2)" alt=""><img src="black.gif" name="space52" alt=""><img src="you1.gif" name="space42" onclick="didClick(4, 2)" alt=""><img src="black.gif" name="space32" alt=""><img src="you1.gif" name="space22" onclick="didClick(2, 2)" alt=""><img src="black.gif" name="space12" alt=""><img src="you1.gif" name="space02" onclick="didClick(0, 2)" alt=""></div>
                <div class="line"><img src="you1.gif" name="space71" onclick="didClick(7, 1)" alt=""><img src="black.gif" name="space61" alt=""><img src="you1.gif" name="space51" onclick="didClick(5, 1)" alt=""><img src="black.gif" name="space41" alt=""><img src="you1.gif" name="space31" onclick="didClick(3, 1)" alt=""><img src="black.gif" name="space21" alt=""><img src="you1.gif" name="space11" onclick="didClick(1, 1)" alt=""><img src="black.gif" name="space01" alt=""></div>
                <div class="line"><img src="black.gif" name="space70" alt=""><img src="you1.gif" name="space60" onclick="didClick(6, 0)" alt=""><img src="black.gif" name="space50" alt=""><img src="you1.gif" name="space40" onclick="didClick(4, 0)" alt=""><img src="black.gif" name="space30" alt=""><img src="you1.gif" name="space20" onclick="didClick(2, 0)" alt=""><img src="black.gif" name="space10" alt=""><img src="you1.gif" name="space00" onclick="didClick(0, 0)" alt=""></div>
            </div>
        </div>
        <p id="message">Select an orange piece to move.</p>
        <p class="footnote" style="border-top: 1px solid gray;"><a href="./">Restart...</a> |
            <a href="https://en.wikipedia.org/wiki/English_draughts#Starting_position">Rules</a>
        </p>
    </div>
    <div class="largeAd"></div>
    </div>
        <div class="score">"IQ" Score: 0</div>
        <div id="counterwrap" onclick="misc_toggleTimer()" title="Pause timer"><div id="counterbar">&nbsp;</div></div>
    </div>
    <script>
        var rect = getAdBannerRectangle("checkers");
        var style = 'left: ' + rect.x + 'px; top: ' + rect.y + 'px; ' +
                'width: ' + rect.width + 'px; height: ' + rect.height + 'px';
    document.write('<div id="adSenseSideBanner" style="' + style + '">');
    </script>    
    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4135663670627621" data-ad-slot="1846650649" data-ad-format="auto"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

   <!--div id="adChoice"><a href="javascript:offerAdStyleChoice()">ad style</a></div-->

    <script>
    document.write('</div>');
    window.onresize = positionContentAndBanner;
    </script></div>