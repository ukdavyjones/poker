<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <title>Poker</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/main.css" rel="stylesheet" type="text/css">  
    <link href="css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>
    <script src="js/jquery.mousewheel.min.js" type="text/javascript"></script>
    <script src="js/jquery.mCustomScrollbar.js" type="text/javascript"></script>
    <script src="js/swfobject.js" type="text/javascript"></script>
    <script src="js/jquery-tools.js" type="text/javascript"></script>
    <script type="text/javascript">  
      var flashvars = {};
      var params                  =   {};
      params.menu                 =   "false";
      params.salign               =   "t";
      params.scale                =   "noscale";
      params.wmode                =   "transparent";
      params.allowScriptAccess    =   "always";
      params.allownetworking      =   "all";
      var attributes              =   {};
      attributes.id = "sct";
      swfobject.embedSWF("sct.swf", "sct", "0", "0", "10.2", "", flashvars, params, attributes);
    </script>
  </head>
  <body onload="init()">
    <div id="sct"></div>
    <aside>
      <div class="top_buttons">
        <img class="separator" src="images/outer.png" alt="" />
        <div class="top_items ring">
          Ring Games
        </div>
        <img class="separator inner" src="images/inner.png" alt="" />
        <div class="top_items sng">
          SnG Tourneys
        </div>
        <img class="separator" src="images/inner.png" alt="" />
        <div class="top_items mtt">
          MTT Tourneys
        </div>
        <img class="separator outer" src="images/outer.png" alt="" />
        <br class="clear" />
      </div>
      <nav>
        <div class="nav_item">
           <span class="item_left">Currency</span>
           <span class="item_right">Play Money<span class="arrow"></span></span>
           <br class="clear">
        </div>
        <div class="nav_item">
           <span class="item_left">Game Type</span>
           <span class="item_right">Hold`em<span class="arrow"></span></span>
           <br class="clear">
        </div>
        <div class="nav_item">
           <span class="item_left">Limit</span>
           <span class="item_right">No Limit<span class="arrow"></span></span>
           <br class="clear">
        </div>
        <div class="nav_item">
           <span class="item_left">Buy-In</span>
           <span class="item_right">Micro<span class="arrow"></span></span>
           <br class="clear">
        </div>
        <div class="nav_item">
           <span class="item_left">Seats</span>
           <span class="item_right">9<span class="arrow"></span></span>
           <br class="clear">
        </div>
        <div class="nav_item">
           <span class="item_left">Speed</span>
           <span class="item_right">Normal<span class="arrow"></span></span>
           <br class="clear">
        </div>
      </nav>
      <div class="tables">
        <div class="table_info">
          <span>Table: Allerdice NL</span>
          <span>Type: Hold`em</span>
          <span>Limit: NL 0.01$-0.02$</span>
        </div>
        <div class="table_players">
          <span>Seats: 9</span>
          <span>Players: 9</span>
          <span>Wait: 2</span>
        </div>
        <div class="table_game">
          <span>Avg.Pot: 5.51$</span>
          <span>Plr/Flp: 9.12%</span>
        </div>
        <div class="playnow">
          <span class="item_left">Play Now!</span>
          <span class="play_arrow"></span>
          <br class="clear" />
        </div>
      </div>
      <div class="server_time">
        <span>Server Time 12:25 GTM+0</span>
      </div>
      <div class="bottom_buttons">
        <div class="fc"></div>
        <div class="sc"></div>
        <div class="bottom_container">
          <div class="home"></div>
          <div class="lobby"></div>
          <div class="settings"></div>
          <div class="table"></div>
          <br class="clear" />
        </div>
        <div class="tc"></div>
        <div class="frc"></div>
      </div>
    </aside>
    <article>
        <div class="tbls">
          <div class="tbl">
            <div class="fl">
              <img class="tbl_image fl" src="images/table.png" alt="" />
              <div class="fl">
                <span class="tbl_name">Allerdice NL</span><br />
                <span class="tbl_caption">Play Money | Hold`em</span>
              </div>
              <br class="clear" />
            </div>
            <div class="fr">
              <span class="tbl_limit">NL 0.01$ - 0.02$</span>
            </div>
            <br class="clear" />
          </div>
          <div class="tbl">
            <div class="fl">
              <img class="tbl_image fl" src="images/table.png" alt="" />
              <div class="fl">
                <span class="tbl_name">Allerdice NL</span><br />
                <span class="tbl_caption">Play Money | Hold`em</span>
              </div>
              <br class="clear" />
            </div>
            <div class="fr">
              <span class="tbl_limit">NL 0.01$ - 0.02$</span>
            </div>
            <br class="clear" />
          </div>
          <div class="tbl">
            <div class="fl">
              <img class="tbl_image fl" src="images/table.png" alt="" />
              <div class="fl">
                <span class="tbl_name">Allerdice NL</span><br />
                <span class="tbl_caption">Play Money | Hold`em</span>
              </div>
              <br class="clear" />
            </div>
            <div class="fr">
              <span class="tbl_limit">NL 0.01$ - 0.02$</span>
            </div>
            <br class="clear" />
          </div>
          <div class="tbl">
            <div class="fl">
              <img class="tbl_image fl" src="images/table.png" alt="" />
              <div class="fl">
                <span class="tbl_name">Allerdice NL</span><br />
                <span class="tbl_caption">Play Money | Hold`em</span>
              </div>
              <br class="clear" />
            </div>
            <div class="fr">
              <span class="tbl_limit">NL 0.01$ - 0.02$</span>
            </div>
            <br class="clear" />
          </div>
        </div>
        <div class="refresh_c">
          <div class="refresh_caption">
            No more events<br />
for chousen filters
          </div>
          <div class="refresh_b">
            Refresh
          </div>
        </div>
        <div class="chat">
          <div class="chat_row">
            <span class="player_name">Dealer:</span><span class="chat_message">Player`s Nick wins Pot 250 000 with 2 pairs (Aces and Jon)</span>
          </div>
          <div class="chat_row">
            <span class="player_name">Dealer:</span><span class="chat_message">Player`s Nick wins Pot 250 000 with 2 pairs (Aces and Jon)</span>
          </div>
          <div class="chat_row">
            <span class="player_name">Dealer:</span><span class="chat_message">Player`s Nick wins Pot 250 000 with 2 pairs (Aces and Jon)</span>
          </div>
          <div class="chat_row">
            <span class="player_name">Dealer:</span><span class="chat_message">Player`s Nick wins Pot 250 000 with 2 pairs (Aces and Jon)</span>
          </div>
        </div>
    </article>
    
    <br class="clear" />
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/socket.js" type="text/javascript"></script>
  </body>
<html>
    
