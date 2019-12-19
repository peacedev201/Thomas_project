
<script type="text/javascript">
    $(document).ready(function () {
        $("#article_ids").html('');
<?php foreach ($articleRecord as $key => $value): ?>
            $("#article_ids").append('<?php print '<input type="hidden" name="article[]" value="' . $value . '">' ?>');
<?php endforeach; ?>
    });

</script>
<link href="/css/style.css" type="text/css" media="screen" rel="stylesheet"/> 
<?php $month = array('01' => 'JAN', '02' => 'FEB', '03' => 'MAR', '04' => 'APR', '05' => 'MAJ', '06' => 'JUN', '07' => 'JUL', '08' => 'AUG', '09' => 'SEP', '10' => 'OKT', '11' => 'NOV', '12' => 'DEC'); ?>
<?php $article_name = "article"; ?>
<?php $host = 'http://' . sfConfig::get('app_host_name'); ?>
<div style='margin: 0 auto;width: 790px;border: 0px solid;clear: both;'>
    <div style="width: 791px;background-color: #ffffff;height: 140px;">
        <div style='width: 650px;float: left;'>
            <div style="width: 250px;float: left;">
                <img src="<?php echo $host; ?>/images/new_home/BT_just_nu_head.png" width="200" style="margin: 10px 0px 5px 0px;"/>
            </div>
            
          <span style='float: left;margin-top: 20px;margin-left: 2px;color: #232222; font-size: 21px; font-weight:500; letter-spacing: -0.7px;'>Aktuell <br>
          information <br> från <br> Börstjänaren</span>
            <div style="float: left;margin-left: 143px;margin-top: 21px;">
                <!--  OMX TD -->
              <img src="<?php echo $host; ?>/images/new_home/<?php echo $sf_user->getAttribute('omxArrow') ? $sf_user->getAttribute('omxArrow') : 'greenarrow_horiz.png' ?>" alt="arrow" width="32"/>
              <div style="font-size:12px;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-weight: bold;color:#ffffff"><?php echo $sf_user->getAttribute('omxtime') ? $sf_user->getAttribute('omxtime') : date("H:i", time()) ?></div>
                
              <div style="font-weight:900;font-size:11px;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; margin-top: 0px;line-height: 10px;color: #ffffff"><?php echo $sf_user->getAttribute('omxVal') ? $sf_user->getAttribute('omxVal') : '&nbsp;' ?></div>
                
              <div style="font-weight:bold;color:#232222;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-size: 11px;">OMX S30</div>
                
              <div style="font-weight:bold;color:#232222;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-size: 11px;line-height: 10px;"><?php echo $sf_user->getAttribute('omxIndexVal') ? $sf_user->getAttribute('omxIndexVal') : '&nbsp;' ?></div>
            </div>
            
            <div style="float: left;margin-left: 5%;margin-top: 21px;">
                <!--  OMX TD -->
              <img src="<?php echo $host; ?>/images/new_home/<?php echo $sf_user->getAttribute('spArrow') ? $sf_user->getAttribute('spArrow') : 'greenarrow_horiz.png' ?>" alt="arrow" width="32"/>
              <div style="font-size:11px;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif;  font-weight: bold;color: #ffffff;"><?php echo $sf_user->getAttribute('sptime') ? $sf_user->getAttribute('sptime') : date("H:i", time()) ?></div>
                
              <div style="font-weight:900;font-size:11px;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; margin-top: 0px;line-height: 10px;color: #ffffff;"><?php echo $sf_user->getAttribute('spVal') ? $sf_user->getAttribute('spVal') : '&nbsp;' ?></div>
                
              <div style="font-weight:bold;color:#232222;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-size: 11px;"> S&P 500</div>
                
              <div style="font-weight:bold;color:#232222;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-size: 11px;line-height: 10px;"><?php echo $sf_user->getAttribute('spIndexVal') ? $sf_user->getAttribute('spIndexVal') : '&nbsp;' ?></div>
            </div>
            
            <div style="float: left;margin-top: 5px;"><a href="http://www.borstjanaren.se/" style="padding-right: 14px; float:left;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; position: relative;font-size: 12px; color: #232222;font-weight:normal;text-decoration: none;">Läs på webben</a>
            
            <a href="http://www.borstjanaren.se/sbt_user/sbtNewRegistration" style="float:left;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; position: relative;font-size: 12px; color: #232222;font-weight:normal;text-decoration: none;padding-right: 10px;">Gratis konto</a>
            
            <a href="http://www.borstjanaren.se/borst/borstSubscriber" style="float:left;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; position: relative;font-size: 12px; color: #232222;font-weight:normal;text-decoration: none;padding-right: 14px;">Portfölj</a>
            
            <a href="http://www.borstjanaren.se/borst/borstNewsletter" style="float:left;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; position: relative;font-size: 12px; color: #232222;font-weight:normal;text-decoration: none;padding-right: 14px;">Avregistrera</a>
            
            <a href="http://www.borstjanaren.se/borst/tipAFriendNewBt" style="float:left;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; position: relative;font-size: 12px; color: #232222;font-weight:normal;text-decoration: none;padding-right: 14px;"> en vän</a></div>
        </div>
        
        <div style="float: right;margin-top: 9px;">
            <div style="float: right;margin-right: 10px;">
                <div style="font-size: 26px; font-family: Georgia, 'Times New Roman', Times, serif; color: #232222; font-weight:700; text-align:center;"><?php echo date("d") . ' ' ?> </div>
              
              
                <div style='font-size: 14px; font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif;  color: #232222;line-height: 4px; text-align:center;'><?php echo date("M") == 'May' ? 'MAJ' : (date("M") == 'Oct' ? 'OKT' : strtoupper(date("M"))); ?></div>
                
                <div style='font-size: 12px; font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; color: #232222; font-weight:700; line-height: 20px; text-align:center;'><?php echo ' ' . date("Y"); ?></div>
            </div>
            
            <div style="margin-right: 10px;"><a href="<?php echo $host ?>" ><img src="<?php echo $host; ?>/images/new_home/logo_bt.png" alt="logo" width="98" /></a></div>
        </div>

        <div style="width: 791px;margin-top: 13px;float: left;">
            <div style="width: 480px;float: left;border-right: 1px solid #d3d3d3">
                <table width="100%" cellpadding="0" cellspacing="0" class="common_css">
                    <tbody id="left_side" >
                        <tr id="top_left_side" style="height: 40px;float: left;width: 465px;background-color: #72bf44;"><td>
                        
                        <a href="http://www.borstjanaren.se/" style="padding: 13px 15px 0px 0px; float:left;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; letter-spacing:0.2px; position: relative;font-size: 12px; color: #ffffff; font-weight:5700; text-decoration: none;">LÄS PÅ WEBBEN</a>
                        
                        <a href="http://www.borstjanaren.se/sbt_user/sbtNewRegistration" style="float:left;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; letter-spacing:0.2px; position: relative;font-size: 12px; color: #ffffff;font-weight:normal;font-weight:500; text-decoration: none;padding: 13px 15px 0px 0px;">GRATIS KONTO</a>
            
            <a href="http://www.borstjanaren.se/borst/borstSubscriber" style="float:left;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; letter-spacing:0.2px; position: relative;font-size: 12px; color: #ffffff;font-weight:normal;font-weight:500; text-decoration: none;padding: 13px 15px 0px 0px;">PORTFÖLJ</a>
            
            <a href="http://www.borstjanaren.se/borst/borstNewsletter" style="float:left;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; letter-spacing:0.2px; position: relative;font-size: 12px; color: #ffffff;font-weight:normal;font-weight:500; text-decoration: none;padding: 13px 15px 0px 0px;">AVREGISTRERA</a>
            
            <a href="http://www.borstjanaren.se/borst/tipAFriendNewBt" style="float:left;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; letter-spacing:0.2px; position: relative;font-size: 12px; color: #ffffff;font-weight:normal;font-weight:500; text-decoration: none;padding: 13px 0px 0px 0px;">TIPSA EN VÄN</a>
                        
                        </td></tr>
                        <!-- article -->
                        <?php $cnt = 0; ?>
                        <?php foreach ($articleRecord as $key => $value): ?>
                            <?php $arr = explode("_", $value); ?>
                            <?php if ($arr[2] == "left"): ?>
                                <?php $left_article = $articleRecords[$cnt]; ?>
                                <?php include_partial("newsletter_article_template", array("article" => $left_article, "host" => $host, "side" => "left", "article_name" => $article_name)); ?>
                            <?php endif; ?>
                            <?php $cnt++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <div style="width: 300px;float: left;margin-left: 10px;">
                <table cellpadding="0" cellspacing="0" id="right_side_div">
                    <tr id="ads_1" style="width: 238px;float: left;">
                        <!-- first ad-->
                        <td id="nobj_ads_1">
                            <span style="display: none;" class="n_article_top" >
                                <span class="next_nobj"></span>
                                <input type="hidden" value="<?php echo "Click to edit Ad -1" ?>" class="hidden_vals"/>
                            </span>
                            
                            <span style="color: #232222; font-size: 10px; font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-weight: normal; letter-spacing:0.5px; margin: 0px 0px 1px 0px;float: left;">ANNONS:</span>
                            
                            <span><a href="http://dagensindustri.se/kampanj/borstjan/" class="simplelink" style="text-align: center;">
                                    <span class="float_left pbottom_5 ieadj" style="  width: 100%;">
                                        <?php echo html_entity_decode($ads[0]); ?></span>
                                    </td>
                                    </tr>

                                    <tr style="width: 300px;float: left;">
                                        <!-- forum post -->
                                        <td>
                                            
                                            <table cellpadding="0" cellspacing="0" width="300" style="background-color: #f7941d;border-top-left-radius: 18px;border-bottom-right-radius: 18px;margin-top: 8px;height: 176px;padding-left: 10px;">
                                                <tr>
                                                    <td>
                                                        <a href="http://www.borstjanaren.se/forum/forumHome" title="BT-FORUM"><img src="<?php echo $host; ?>/images/new_home/forum_logo_white.png" width="253" alt="BT-FORUM" style="margin: 12px 0px -2px 15px;"/></a>
                                                        
                                                        <span style="font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-size: 24px; color: #ffffff;float: left;margin: 13px 0px -5px 0px; padding-left:15px; font-weight: 300;">Aktuella forumtrådar</span>
                                                        
                                                        <ul style="color: #ffffff;list-style-position: outside;float: left;margin-top: 9px; padding-left: 15px;width: 225px;" >
                                                            <?php foreach ($forum_post as $post): ?>

                                                                <li style="color: #ffffff;width: 300px;line-height: 16px;">
                                                                    
                                                                    <a style="word-wrap:break-word;width: 225px;font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; color: #ffffff; text-decoration: none; font-size: 13px; line-height: 18px; letter-spacing:0.2px;" href=<?php echo $host . '/forum/commentOnForumTopic/forumid/' . $post->id; ?>><?php echo $post->rubrik ?></a>
                                                                </li>

                                                            <?php endforeach; ?>
                                                        </ul>

                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr style="width: 300px;float: left;">
                                        <td style="width:100%;padding: 6px 0px 5px 0px;">

                                            <img width="300px" style="margin: 2px 0px 0px 0px;" src="<?php echo $host ?>/images/new_home/bt_just_nu_latest_articles1.png" alt="" />

                                        </td>
                                    </tr>

                                    <tr style="width: 300px;float: left;">
                                        <!-- latest BT article  -->
                                        <td>
                                            <ul style="padding-left: 15px; width: 225px;padding-bottom: 2px;color: #232222; list-style-position: inside;margin: 0;  font-family: Georgia, 'Times New Roman', Times, serif; line-height: 20px;">
                                                <?php $link_type = '/borst/borstArticleDetails/article_id/'; ?>
                                                <?php foreach ($btList as $data): ?>
                                                    <li style="color: #828ba4;list-style-position: outside;width: 300px;"><a style="word-wrap:break-word;width: 300px;color: #828ba4; text-decoration: none; font-size: 13px;" href="<?php echo $host . $link_type . $data->article_id ?>"><?php echo $data->title; ?></a></li>
                                                <?php endforeach; ?>
                                            </ul>

                                        </td>
                                    </tr>

                                    <tr style="width: 300px;float: left;">
                                        <td style="width:100%;padding: 6px 0px 5px 0px;">

                                            <img width="300px" style="margin: 0px 0px -8px 0px;" src="<?php echo $host ?>/images/new_home/bt_just_nu_latest_articles2.png" alt="" />

                                        </td>
                                    </tr>

                                    <tr id="blog_1" style="width: 300px;float: left;">
                                        <!-- popular bloggar -->
                                        <td id="nobj_blog_" >
                                            <span style="display: none;" class="n_article_top" >
                                                <span style="visibility:hidden" class="next_nobj" ></span>
                                                <input type="hidden" value="<?php echo "Click to edit Blog" ?>" class="hidden_vals"/>
                                            </span>
                                            
                                            
                                            <table cellpadding="0" cellspacing="0" border="0" >
                                                <!-- middle bloggar view -->
                                                <div style="float: left;width: 300px;">
                                                    <div><img src="<?php echo $host; ?>/images/new_home/blog_logo.png" width="200" style="margin-bottom: -4px;"/></div>
                                                    <div style="float: left;">
                                                        <div style="float: left">
                                                            <?php if ($popular_blog->author_id != '' && $profile_photo->profile_photo_name != ''): ?>
                                                                <a style="text-decoration: none;color: #272a31;" href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . '/sbt/sbtMinProfile/id/' ?><?php echo $popular_blog->author_id; ?>"><img src="<?php echo $host; ?>/uploads/userThumbnail/<?php echo str_replace('.', '_semilarge.', $profile_photo->profile_photo_name); ?>" alt="Thumb Image" width="107" style="border-radius: 10px;" /></a>
                                                                
                                                                
                                                            <?php else: ?>
                                                                <a style="text-decoration: none;" href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . '/sbt/sbtMinProfile/id/' ?><?php echo $popular_blog->author_id; ?>"><img src="<?php echo $host; ?>/images/small_userphoto.jpg" alt="photo" width="85" style="border-radius: 10px;" /></a>
                                                            <?php endif; ?>
                                                        </div>
                                                        
                                                        <div style="float: left;margin-left: 20px; margin-top: 11px;">
                                                            <div style="font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif;font-size: 24px;color: #828ba4;letter-spacing:-1px;">Nybloggat</div>
                                                            
                                                            <div style="float: left;font-size: 15px;color: #f15a22;margin-top: 3px;width: 100%;">
                                                                <a style="text-decoration: none;" href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . '/sbt/sbtBlogDetails/blog_id/' . $popular_blog->id; ?>">
                                                                    <span style="font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-size: 13px;color: #f15a22;letter-spacing:-0.3px; width: 100%;"><?php echo $popular_blog->ublog_title; ?></span>
                                                                </a>
                                                            </div>
                                                            
                                                            <div style="margin-top: 2px;float: left;">
                                                                <span style="font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-size: 12px; color: #828ba4;letter-spacing:-0.3px; width: 100%;"><?php echo substr($popular_blog->created_at, 0, 10); ?></span>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </td>
                                    </tr>


                                    <!-- bottom bloggar view -->
                                    <tr>

                                        <td style='padding: 8px 0px;float: left;'>
                                            <a style="font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-size: 13px; line-height:18px; color: #828ba4 ;text-decoration: none;" href="<?php echo "http://" . $_SERVER['HTTP_HOST'] . '/sbt/sbtBlogDetails/blog_id/' . $popular_blog->id; ?>">
                                                <?php
                                                $search = array('<p', '</p>');
                                                $replace = array('<span', '</span>');
                                                $regex = "/<\/?\w+((\s+(\w|\w[\w-]*\w)(\s*=\s*(?:\".*?\"|'.*?'|[^'\">\s]+))?)+\s*|\s*)\/?>/i";
                                                $str_without_tags = trim(preg_replace($regex, "", html_entity_decode($popular_blog->ublog_description)));
                                                $blogdetails = SbtUserBlog::filterMyStringBlack(html_entity_decode($popular_blog->ublog_description));
                                                $word_arr = str_word_count($str_without_tags, 1); // all words from string with no tags
                                                if (count($word_arr) > 5) { // if words are more than 50, needs to cut the blog
                                                    $strpos1 = strpos($blogdetails, $word_arr[19]);
                                                    $str = substr($blogdetails, 0, strpos($blogdetails, $word_arr[19]));
                                                    $str_no_tag = preg_replace($regex, "", $str); // matching string with no tags
                                                    if (str_word_count($str_no_tag) < 12) {
                                                        $strpos1 = strpos($blogdetails, $word_arr[18]);
                                                        $str = substr($blogdetails, 0, strpos($blogdetails, $word_arr[18]));
                                                        $str_no_tag = preg_replace($regex, "", $str);
                                                    }
                                                    if (str_word_count($str_no_tag) < 12) {
                                                        $strpos1 = strpos($blogdetails, $word_arr[17]);
                                                        $str = substr($blogdetails, 0, strpos($blogdetails, $word_arr[17]));
                                                        $str_no_tag = preg_replace($regex, "", $str);
                                                    }
                                                    $shortDesc = substr($blogdetails, 0, $strpos1) . "</b>";
                                                    $shortDesc = str_replace($search, $replace, $shortDesc);
                                                } else {
                                                    $shortDesc = $blogdetails;
                                                    $shortDesc = str_replace($search, $replace, $shortDesc);
                                                }
                                                $shortDesc = preg_replace("/<img[^>]+\>/i", "", $shortDesc);

                                                $shortDesc = sbtUserBlog::closeTags($shortDesc);
                                                $pos = 0;
                                                while ($pos < strlen($shortDesc)) {
                                                    $firstString = substr($shortDesc, strpos($shortDesc, "object", $pos));
                                                    $firstString = substr($shortDesc, strpos($shortDesc, "embed", $pos));
                                                    $tempstr = $firstString;
                                                    $newString = NewsLetterTable::getStringBetween($firstString, 'width="', '"');
                                                    if ($newString) {
                                                        $tempstr = str_replace($newString, "200", $tempstr);
                                                        $shortDesc = str_replace($firstString, $tempstr, $shortDesc);
                                                    }
                                                    $newString = NewsLetterTable::getStringBetween($firstString, 'height="', '"');
                                                    if ($newString) {
                                                        $tempstr = str_replace($newString, "150", $tempstr);
                                                        $shortDesc = str_replace($firstString, $tempstr, $shortDesc);
                                                    }
                                                    $pos++;
                                                }
                                                ?>
                                                <?php //$shortDesc = SbtUserBlogTable::shortBlogDescription($popular_blog->ublog_description); ?>

                                                <?php echo $shortDesc; ?>
                                            </a>
                                        </td>

                                    </tr>
                                    </table>
                                    </td>
                                    </tr>

                                    <tr style="width: 300px;float: left;">
                                        <!-- blog post -->
                                        <td>
                                            <table cellpadding="0" cellspacing="0" width="300" style="background-color: #d8e3e8;border-top-left-radius: 18px;border-bottom-right-radius: 18px;padding: 10px;margin: 5px 0px 9px 0px;">
                                                <tr>
                                                    <td>
                                                    <a href="http://www.borstjanaren.se/forum/forumHome" title="BT-FORUM"><img src="<?php echo $host; ?>/images/new_home/blog_logo_just_nu.png" width="200" alt="BT-BLOG_LOGO" style="margin: 0px 0px -2px 15px;"/></a>
                                                    
                                                    
                                                        <span style="font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-size: 24px; color: #ffffff;float: left;margin: 8px 0px -5px 0px; padding-left:15px; font-weight: 300;">Fler bloggar</span>
                                                    </td>
                                                </tr>
                                                
                                                <tr><td><ul style="color: #ffffff;list-style-position: outside;padding-left: 15px; width: 225px; margin-top: 9px;" >
                                                            <?php foreach ($blog_post as $post): ?>
                                                                <li>
                                                                    <a style="font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-size: 13px;color: #ffffff;text-decoration: none;line-height: 18px; letter-spacing:0.2px;" href="<?php echo $host . '/sbt/sbtBlogDetails/blog_id/' . $post->id; ?>"><?php echo $post->ublog_title ?></a>
                                                                     </li>
                                                                
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>

                                    <tr id="ads_2" style="width: 300px;float: left;">
                                        <!-- second ad-->
                                        
                                        <td id="nobj_ads_2">
                                            <span style="display: none;" class="n_article_top" >
                                                <span style="visibility:hidden" class="next_nobj" ></span>
                                                <input type="hidden" value="<?php echo "Click to edit Ad -2" ?>" class="hidden_vals"/>
                                            </span>
                                            
                                            <span style="color: #232222; font-size: 10px; font-family: Franklin Gothic Book Regular,Arial,Helvetica,sans-serif; font-weight: normal; letter-spacing:0.5px; margin: 0px 0px 1px 0px;float: left;">ANNONS:</span>
                                            
                                            <span><?php echo html_entity_decode($ads[1]); ?></span>
                                            
                                            <br/>

                                            <div style="border-bottom: 2px solid #f15a22; margin-top: -8px;">&nbsp;</div>
                                            
                                        </td>
                                    </tr>

                                    <tr id="right_side_tr_bottom" style="width: 270px;">
                                        <td>
                                            <table cellpadding="0" cellspacing="0" border="0" style="min-height: 100px;float:left" width="240" class="common_css">
                                                <tbody id="right_side" style="float: left;height: 100%;position: relative;" >

                                                    <?php $cnt = 0; ?>
                                                    <?php $right_flag = false; ?>
                                                    <?php foreach ($articleRecord as $key => $value): ?>
                                                        <?php $arr = explode("_", $value); ?>
                                                        <?php if ($arr[2] == "right"): ?>
                                                            <?php $right_flag = true; ?>
                                                            <?php $left_article = $articleRecords[$cnt]; ?>
                                                            <?php include_partial("newsletter_article_template", array("article" => $left_article, "host" => $host, "side" => "right", "article_name" => $article_name, $this->article_limit => 50, $this->secondLimit => 4)); ?>
                                                        <?php endif; ?>
                                                        <?php $cnt++; ?>
                                                    <?php endforeach; ?>
                                                    <?php if (!$right_flag): ?>
                                                        <tr id="temp_right_tr" valign="top"  ><td style="width: 238px; ">&nbsp;

                                                            </td></tr>
                                                    <?php endif; ?>
                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                    </table>
                                    </div>
                                    
                                    
                                    
                                    

               <img style="margin: 0px 0px 45px 0px; " src="http://www.borstjanaren.se/newsletter/footerbg.png" /><span style="float: left; margin-top: 65px; margin-left: 2px; margin-right:141px; color: #232222; font-family: font-size: 10px; font-family: Georgia, 'Times New Roman', Times, serif; word-spacing: 0.5px; background: url('http://www.borstjanaren.se/images/new_home/footerbg.png') ;padding-left: 5px;padding-top: 11px; width: 715px" height: 26px; © Copyright Morningbriefing Börstjänaren AB <?php echo date('Y'); ?></span>                                
                                    
                                    </div>
                                    
                                    </div>
                                    </div>
                                    
                                    
                                    


