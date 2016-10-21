<?php
$i = 1;
//array('name' => '', 'type' => '', 'score' => , 'progress' => , 'last_ep' =>, 'airing' => '')
$list = array(
        array('name' => 'Akatsuki no Yona', 'type' => 'TV', 'score' => 8, 
          'progress' => 5, 'last_ep' => 24, 'airing' => "Airing"),
        array('name' => 'Fate/Zero Second Season', 'type' => 'TV', 'score' => 9, 
          'progress' => 7, 'last_ep' => 12, 'airing' => ''),
        array('name' => 'Fate/Stay Night Unlimited Blade Works', 'type' => 'TV', 'score' => 9, 
          'progress' => 3, 'last_ep' => 12, 'airing' => 'Airing')
        array('name' => 'Magic Kaito', 'type' => 'TV', 'score' => 7, 'progress' => 4, 'last_ep' => 24, 'airing' => '')
        array('name' => 'Sword Art Online', 'type' => 'TV', 'score' => 9, 
          'progress' => 7, 'last_ep' => 24, 'airing' => 'Airing')
        array('name' => 'Aldnoah.Zero 2nd Season', 'type' => '', 'score' => 9, 'progress' => 6, 'last_ep' => 12, 'airing' => '')
      );

foreach ($list as $item) {
?>
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
                    <td align="center" width="30" class="td1" style="border-left-width: 1px;">
  <?php echo $i; ?>
</td>
               <td class="td1" style="border-left-width: 0">
 <div style="float: right;">
              <small>
       		<a href="" class="List_LightBox">Edit</a>
                                -
                <a href="" id="xmenu33462"
                   title="View More Information">More</a>
              </small>
            </div>
<a href="" target="_blank" class="animetitle" title="Anime Information">
  <span><?php echo $item['name']; ?></span>
</a>
                          <small><?php echo $item['airing']; ?></small>
          </td>

                    <td class="td1" align="center" width="45">
                                <a href="" title="Click to bring up a text box to edit your current score">
    <span id="scoreval33462">
      <?php echo "\t" . $item['score']; ?>
    </span>
    </a>
    <div id="scorediv33462" style="display: none;">
      <input type="text" id="scoretext33462" size="2">
      <input type="button" value="Go">
    </div>
              </td>

                    <td class="td1" width="50" align="center"><?php echo $item['type']; ?></td>

                    <td class="td1" align="center" width="70">
                                                                <span id="epText33462" onclick="determineEpVisibility('33462');">
        <a href="" title="Click to bring up a text box to edit your current episode number">
          <span id="output33462"><?php echo $item['progress']; ?></span>/ <?php echo $item['last_ep']; ?>
        </a>
      </span>
      <a href="" title="Click to increase your watched ep number by one"
         >
        +
      </a>
                              </td>
                </tr>
</table>
<?php
$i+=1;} ?>
