<?php
$c = "status_selected";
$o = "status_not_selected";
$status = array($o, $o, $o, $o, $o, $o);
$current_status = $_GET['status'];
$status[$current_status] = $c;
print $current_status;
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="<?php echo $file;?>" />

<title>
mistmountain&#039;s Anime List - MyAnimeList.net
</title>

<link rel="stylesheet" href="/MAL/default_mal/list.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="/MAL/default_mal/style-1.css" />

<link rel="shortcut icon" href="https://myanimelist.cdn-dena.com/images/faviconv5.ico" />

</head>

<body class="ownlist" data-owner="1">

    <table id="mal_control_strip" border="0" cellpadding="0" cellspacing="0">
    <tr>
                      <td id="mal_cs_listinfo">
          <div>
            <strong>
              <a href="/profile/mistmountain">
                <strong>mistmountain</strong>
              </a>
            </strong>
          </div>
          <div>
  <a href="" class="logout">
    Logout
  </a>
</form>
          </div>
        </td>
        <td id="mal_cs_links">
          <div>
            <a href="" class="List_LightBox">Add to List</a>
            <a href="/">Home</a>
          </div>
          <div>
            <a href="/animelist/mistmountain">Anime List</a>
            <a href="/mangalist/mistmountain">Manga List</a>
          </div>
        </td>
        <td id="mal_cs_otherlinks">
                      <div>
              <strong>
                You are viewing your manga list
              </strong>
            </div>
            <div>
              <a href="">History</a>
              <a href="">Forum</a>
              <a href="">Export</a>
            </div>
                  </td>
            <td id="mal_cs_powered" valign="top" align="right">
        <a href="/"><img src="https://myanimelist.cdn-dena.com/images/list-top-powered.gif"></a>
        <div id="search">
          <input id="searchBox" value="Search" type="textbox"/>
          <img src="https://myanimelist.cdn-dena.com/images/magnify.gif" id="searchListButton"/>
        </div>
      </td>
    </tr>
  </table>

    <div id="list_surround">
    <br>

          
<table border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
  <tr>
    <td width="165" class="<?php echo $status[0];?>"
        style="border-width: 1px 1px 1px 1px;" nowrap align="center">
      <a href="<?php echo $link . "?status=0"; ?>" title="16 Entries">
        Currently Watching
      </a>
    </td>
    <td width="75" class="<?php echo $status[1];?>"
        style="border-width: 1px 1px 1px 0;" align="center">
      <a href="<?php echo $link . "?status=1"; ?>" title="397 Entries">
        Completed
      </a>
    </td>
    <td width="75" class="<?php echo $status[2];?>"
        style="border-width: 1px 1px 1px 0;" align="center">
      <a href="<?php echo $link . "?status=2"; ?>" title="46 Entries">
        On Hold
      </a>
    </td>
    <td width="75" class="<?php echo $status[3];?>"
        style="border-width: 1px 1px 1px 0;" align="center">
      <a href="<?php echo $link . "?status=3"; ?>" title="52 Entries">
        Dropped
      </a>
    </td>
    <td width="115" class="<?php echo $status[4];?>"
        style="border-width: 1px 1px 1px 0;" align="center">
      <a href="<?php echo $link . "?status=4"; ?>" title="44 Entries">
        Plan to Watch
      </a>
    </td>
    <td width="115" class="<?php echo $status[5];?>"
        style="border-width: 1px 1px 1px 0;" align="center">
      <a href="<?php echo $link . "?status=5"; ?>" title="Show All Entries">
        All Anime
      </a>
    </td>
  </tr>
</table>
    
    <br><br>
          <table border="0" cellpadding="0" cellspacing="0" width="100%" align="center" class="header_cw">
      <tr>
        <td>
          <div class="header_title">
            <span>Watching</span>
          </div>
        </td>
      </tr>
    </table>

    <table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tr>
                          <td class="table_header" width="30" align="center" style="border-width: 1px 1px 1px 1px;">
            <b><span class="table_headerLink">#</span></b>
          </td>
        
                        <td class="table_header">
                <a href="" class="table_headerLink">
            <strong>Anime Title</strong>
          </a>
        </td>
                          <td class="table_header" width="45" align="center">
            <strong>
              <a href="" class="table_headerLink" rel="#infoscore">Score</a>
            </strong>
            <div id="infoscore" style="display: none;">
              10 - Masterpiece<br>
              9 - Great<br>
              8 - Very Good<br>
              7 - Good<br>
              6 - Fine<br>
              5 - Average<br>
              4 - Bad<br>
              3 - Very Bad<br>
              2 - Horrible<br>
              1 - Appalling
            </div>
          </td>
        
                          <td class="table_header" width="50" align="center" nowrap>
            <strong>
              <a href="" class="table_headerLink" rel="#infotype">Type</a>
            </strong>
            <div id="infotype" style="display: none;">
              TV (Television Series)<br>
              Movie<br>
              OVA (Original Video Animation)
            </div>
          </td>
        
                          <td class="table_header" width="70" align="center" nowrap>
            <strong>
              <a href="" class="table_headerLink">Progress</a>
            </strong>
          </td>
                      </tr>
    </table>

              <?php include "manga_list.php"; ?>
          
        <table border="0" width="100%" cellpadding="0" cellspacing="0">
      <tr>
        <td class="category_totals">
          TV: 14,
          OVA: 1,
          Movies: 0,
          <span title="Specials">Spcl.</span>: 1,
          Eps: 175,
          Days: 3.00,
          Mean Score: 7.9,
          Score <span title="Deviation">Dev.</span>: 0.57
        </td>
      </tr>
    </table>
    <br>
                          <div id="inlineContent" style="display: none;"></div>

      
    
    <div id="copyright" style="text-align: center; margin-top: 10px;">
      MyAnimeList.net is a property of MyAnimeList, LLC. &copy;2015 All Rights Reserved.
    </div>

  <script type="text/javascript">
    window.MAL.magia = "06410c4e6b2518e9add8f6df0ccb2da2876bb8c980aacb43a8dcaa8153c0f92c";
  window.MAL.madoka = "hZrDKm9k6FVRnqd3i%=K";
</script>
</body>
</body>
</html>
</html>

