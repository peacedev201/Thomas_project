<?php

/**
 * Article
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    sisterbt
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Article extends BaseArticle
{
	/*
	*
	* This function returns menu names. 
	*
	*/
	
	public function getMenuItem($index) 
	{ 
		$menu = array('top_borst_menu'=>'BÖRSTJÄNAREN','top_sbt_menu'=>'SYSTER BT','top_bt_shop'=>'BT-SHOP','top_bt_charts'=>'BT-CHARTS','borst_menu_home'=>'HEM','borst_menu_forum'=>'FORUM','borst_menu_share'=>'AKTIER','borst_menu_commodities'=>'RÅVAROR','borst_menu_currencies'=>'VALUTOR','borst_menu_chronicles'=>'KRÖNIKOR','borst_menu_staristik'=>'STARISTIK','borst_menu_buysell'=>'KÖP&SÄLJ','borst_menu_subscriber'=>'ABONNENT','borst_menu_ppm'=>'PPM','sbt_menu_home'=>'HEM','sbt_menu_forum'=>'FORUM','sbt_menu_blog'=>'BLOG','sbt_menu_toplistor'=>'TOPP LISTOR','sbt_menu_user'=>'ANVANDARE','sbt_menu_minprofile'=>'MIN PROFILE','sbt_menu_analysis_details'=>'ARTIKEL','sbt_menu_addanalysis'=>'ARTIKEL / BLOG','bt_shop_home'=>'HEM','bt_shop_forum'=>'FORUM','bt_shop_metastock'=>'METASTOCK','bt_shop_falcon_computers'=>'FALCON COMPUTERS','bt_shop_bocker'=>'BOCKER','bt_shop_utbildningar'=>'UTBILDNINGAR','bt_shop_ppm'=>'PPM','bt_shop_abonnemang'=>'ABONNEMANG','bt_charts_home'=>'HEM','bt_charts_forum'=>'FORUM','bt_charts_varlden'=>'VARLDEN','bt_charts_largeCap'=>'LARGE CAP','bt_charts_midCap'=>'MID CAP','bt_charts_smallCap'=>'SMALL CAP','bt_charts_ravaror'=>'RÄVAROR','bt_charts_valutor'=>'VALUTOR','bt_charts_kalender'=>'KALENDER','top_borst_hem_menu'=>'HEM','top_sbt_hem_menu'=>'HEM');
		
		return $menu[$index];
	}

	/*
	*
	* This function returns menu urls. 
	*
	*/
	
	public function getMenuUrl($index) 
	{ 
		$url = array('top_borst_menu'=>'borst/borstHome','top_sbt_menu'=>'sbt/sbtHome','top_bt_shop'=>'borst_shop/borstShopHome','top_bt_charts'=>'borst_charts/borstChartsHome','borst_menu_home'=>'borst/borstHome','borst_menu_forum'=>'borst/borstForum','borst_menu_share'=>'borst/borstShare','borst_menu_commodities'=>'borst/borstCommodities','borst_menu_currencies'=>'borst/borstCurrencies','borst_menu_chronicles'=>'borst/borstChronicles','borst_menu_staristik'=>'borst/borstStaristik','borst_menu_buysell'=>'borst/borstBuySell','borst_menu_subscriber'=>'borst/borstSubscriber','borst_menu_ppm'=>'borst/borstPpm','sbt_menu_home'=>'sbt/sbtHome','sbt_menu_forum'=>'sbt/sbtForum','sbt_menu_blog'=>'sbt/sbtBlog','sbt_menu_toplistor'=>'sbt/sbtTopLister','sbt_menu_user'=>'sbt/sbtUser','sbt_menu_minprofile'=>'sbt/sbtMinProfile','sbt_menu_analysis_details'=>'sbt/sbtArticleDetails','sbt_menu_addanalysis'=>'sbt/sbtAddAnalysisBlog','bt_shop_home'=>'borst_shop/borstShopHome','bt_shop_forum'=>'borst_shop/borstShopForum','bt_shop_metastock'=>'borst_shop/borstShopMetastocks','bt_shop_falcon_computers'=>'borst_shop/borstShopFalconComputers','bt_shop_bocker'=>'borst_shop/borstShopBocker','bt_shop_utbildningar'=>'borst_shop/borstShopUtbildningar','bt_shop_ppm'=>'borst_shop/borstShopPpm','bt_shop_abonnemang'=>'borst_shop/borstShopAbonnemang','bt_charts_home'=>'borst_charts/borstChartsHome','bt_charts_forum'=>'borst_charts/borstChartsForum','bt_charts_varlden'=>'borst_charts/borstChartsVarlden','bt_charts_largeCap'=>'borst_charts/borstChartsLargeCap','bt_charts_midCap'=>'borst_charts/borstChartsMidCap','bt_charts_smallCap'=>'borst_charts/borstChartsSmallCap','bt_charts_ravaror'=>'borst_charts/borstChartsRavaror','bt_charts_valutor'=>'borst_charts/borstChartsValutor','bt_charts_kalender'=>'borst_charts/borstChartsKalender','top_borst_hem_menu'=>'borst/borstHome','top_sbt_hem_menu'=>'sbt/sbtHome');
		
		return $url[$index];
	}

	/*
	*
	* This function returns selected article.
	*
	*/
	
	public function getSelectedArticle($index) 
	{ 
		$selected_article_cri = Doctrine_Query::create()
	   					      ->from('Article ba')
						      ->where('ba.article_id = ?', $index);

		$selected_article_data = $selected_article_cri->fetchOne();
		return $selected_article_data;
	}
	
	/*
	*
	* This function returns string which contains searched parameters.
	*
	*/
	
	public function getSearchedParameterString($arr)
	{ 
		$param = array();
		
		if($arr['art_id']) $param['art_id'] = $arr['art_id'];
		if($arr['art_title']) $param['art_title'] = $arr['art_title'];
		if($arr['search_katID'][0] > 0) $param['search_katID'] = $arr['search_katID'][0];
		if($arr['search_art_statID'][0] > 0) $param['search_art_statID'] = $arr['search_art_statID'][0];
		if($arr['sort_order']) $param['sort_order'] = $arr['sort_order'];
		if($arr['no_of_pages']) $param['no_of_pages'] = $arr['no_of_pages'];
		if($arr['art_search']) $param['art_search'] = $arr['art_search'];
				
		$ext = http_build_query($param);
		$search_arr = array("&", "=");
		$ext = str_replace($search_arr, "/", $ext);

		return $ext;
	}
	
	/*
	*
	* This function saves article information.
	*
	*/
	
	public function setSelectedArticle($date,$title,$art_statid)
	{ 
		$this->article_date = $date;
		$this->title = $title;
		$this->art_statid = $art_statid;
		$this->save();
	}
	
	/*
	*
	* This function inserts new article.
	*
	*/
	
	public function insertNewArticleRecord($form,$arr) 
	{ 
		$this->article_date = date("Y-m-d H:i:s"); 
		$this->category_id = $form->getValue('category_id');
		$this->type_id = $form->getValue('type_id');
		$this->object_id = $form->getValue('object_id');
		$this->title = $form->getValue('title');
		$this->image = $form->getValue('image');
		$this->image_text = $form->getValue('image_text');
		$this->text = $form->getValue('text');
		$this->author = $form->getValue('author');
		$this->art_statid = $form->getValue('art_statid');
		$this->author_id = $form->getValue('author_id');
		
		if($form->getValue('author'))	$this->author = $form->getValue('author');
		else	$this->author = $arr['author_name'];

		$this->save();
		return $this->article_id;
	}
	
	/*
	*
	* This function returns list of last articles.
	*
	*/
	
	public function getListOfSimilarArticles($objectid,$limit) 
	{ 
		//$limit = 25;
		$similar_article_cri = Doctrine_Query::create()
	   					      ->from('Article ba')
						      ->where('ba.object_id = ? and ba.article_date <= ?', array($objectid,date('Y-m-d H:i:s')))
							  ->andWhereNotIn('ba.art_statid',array(2)) // Ommit internal articles
							  ->orderBy('ba.article_date DESC')
							  ->offset(0)
							  ->limit($limit);
							  
		$similar_article_data = $similar_article_cri->execute();

		$str = '<table cellpadding="0" cellspacing="0" border="0">';
		foreach($similar_article_data as $list)
		{
			$str .= '<tr><td style="color:#000000;">'.substr($list->article_date,0,10).'</td><td><a class="main_link_color" href="https://'.$_SERVER['HTTP_HOST'].'/borst/borstArticleDetails/article_id/'.$list->article_id.'">&nbsp;'.$list->title.'<a/></td></tr>';
		}
		$str .= '</table>';

		return $str;
	}
	
	/*
	* This function to get query for Similar Articles
	*/
	
	public function getListOfSimilarArticlesQuery($objectid)
	{
		$query = Doctrine_Query::create()
	   					      ->from('Article ba')
						      ->where('ba.object_id = ? and ba.article_date <= ?', array($objectid,date('Y-m-d H:i:s')))
							  ->andWhereNotIn('ba.art_statid',array(2)) // Ommit internal articles
							  ->orderBy('ba.article_date DESC');
		return $query;
	}
	
    	/*
	*
	* This function returns list of last articles.
	*
	*/
	
	public function getListOfSimilarArticlesBorst($stock_name,$limit)
	{ 
		//$limit = 25;
		$similar_article_cri = Doctrine_Query::create()
                              ->from('Article ba')
                              ->where('ba.title like ?', "%".$stock_name."%" )
                              //->where('ba.article_date <= ?', array($objectid,date('Y-m-d H:i:s')))
                              //->andWhere('ba.art_statid=?',3)
                              ->andWhereNotIn('ba.art_statid',array(2))
                              ->orderBy('ba.article_date DESC')
			      ->limit($limit);

		$similar_article_data = $similar_article_cri->execute();
		$str = '<table cellpadding="0" cellspacing="0" border="0">';
		foreach($similar_article_data as $list)
		{
			$str .= '<tr><td style="color:#000000;">'.substr($list->article_date,0,10).'</td><td><a class="main_link_color" href="https://'.$_SERVER['HTTP_HOST'].'/borst/borstArticleDetails/article_id/'.$list->article_id.'">&nbsp;'.$list->title.'<a/></td></tr>';
		}
		$str .= '</table>';

		return $str;
	}
	
   /*
	*
	* This function return query by specified order. 
	*
	*/
	public function getSubMenuQuery($submenu_menu,$isSuperAdmin)
	{ 
		$query = Doctrine_Query::create()->from('Article ba');
		
		if($isSuperAdmin==1) $query = $query->where('ba.article_date <= ?', date('Y-m-d H:i:s'));
		else $query = $query->where('ba.article_date <= ? AND ba.art_statid != ?', array(date('Y-m-d H:i:s'),2));
		
		switch($submenu_menu)
		{
			case 'borst_menu_commodities': $query = $query->andWhere('ba.type_id = ?', 27);break; 
			case 'borst_menu_currencies': $query = $query->andWhere('ba.type_id = ?', 28);break; 
			case 'borst_menu_share': $query = $query->andWhere('ba.type_id = ?', 1);break; 
			case 'borst_menu_buysell': $query = $query->andWhere('ba.category_id = ?', 2);break; 
			case 'borst_menu_subscriber': $query = $query->andWhere('ba.category_id = ?', 13);break; 
		}
		$query = $query->orderBy('ba.article_date DESC');
		return $query;
	}
	
   /*
	*
	* This function returns query for specific type of article order.
	*
	*/
	public function getArticleOrderQuery($colname,$id,$column_id,$order) 
	{ 
		$query = Doctrine_Query::create()->from('Article ba');
		if($colname=='kat') $query = $query->where('ba.category_id = ? AND ba.article_date <= ? ', array($id, date('Y-m-d H:i:s')));
		if($colname=='type') $query = $query->where('ba.type_id = ? AND ba.article_date <= ?', array($id, date('Y-m-d H:i:s')));
		if($colname=='obj') $query = $query->where('ba.object_id = ? AND ba.article_date <= ?', array($id, date('Y-m-d H:i:s')));
		
		switch($column_id)
		{
			case 'date': $query = $query->orderBy('ba.article_date '.$order); break;
			case 'title': $query = $query->orderBy('ba.title '.$order); break;
			case 'category': $query = $query->innerJoin('ba.ArticleCategory acat'); $query = $query->orderBy('acat.category_name '.$order); break;
			case 'type': $query = $query->innerJoin('ba.ArticleType atype'); $query = $query->orderBy('atype.type_name '.$order); break;
			case 'object': $query = $query->innerJoin('ba.Objekt obj'); $query = $query->orderBy('obj.object_name '.$order); break;
			case 'default': $query = $query->orderBy('ba.article_date DESC'); break;
		}
		
		if(!$column_id)	$query = $query->orderBy('ba.article_date DESC');

		return $query;
	}	
	
	
   /*
	*
	* This function return query by specified order. 
	*
	*/
	public function setSortOrderQuery($query,$column_id,$order) 
	{ 
		$order = trim($order);
		$query = Doctrine_Query::create()->from('Article ba');
		switch($column_id)
		{
			case 'date': $query = $query->orderBy('ba.article_date '.$order); break;
			case 'title': $query = $query->orderBy('ba.title '.$order); break;
			case 'category': $query = $query->innerJoin('ba.ArticleCategory acat'); $query = $query->orderBy('acat.category_name '.$order); break;
			case 'type': $query = $query->innerJoin('ba.ArticleType atype'); $query = $query->orderBy('atype.type_name '.$order); break;
			case 'object': $query = $query->innerJoin('ba.Objekt obj'); $query = $query->orderBy('obj.object_name '.$order); break;
		}
		return $query;
	}
	
   /*
	*
	* This function return query by specified order. 
	*
	*/
	public function fetchArticleForUpdate($arr) 
	{ 
		$query = Doctrine_Query::create()->from('Article ba');
		$query = $query->where('ba.art_statid != ?', 2);

		$date = date($arr['today'].' 00:00:00'); // Changed and considered timestamp instead of only date.
		if($arr["today"] != "") $query = $query->andWhere('ba.article_date >= ?', $date); 

		$query = $query->orderBy('ba.article_id DESC');
		$query = $query->offset(0)->limit($arr['qty']);
		$data = $query->execute();
		
		return $data;
	}
	
   /*
	*
	* This function returns array containing email addresses. 
	*
	*/
	public function getEmailFromNewsletterAccount($arr) 
	{ 
		$email_arr = array();
		$i = 0;
		
		$query_str = "SELECT DISTINCT n.email as email, abonID, userstatID FROM newsletter_account n, sf_guard_user_profile u WHERE n.email = u.email";
		
		if (isset($arr["abon"]) && $arr["abon"] != 0) 
		{
			if (isset($arr["not_abon"]) && $arr["not_abon"])
				$query_str .= " AND abonID != '{$arr["abon"]}'";
			else 
				$query_str .= " AND abonID = '{$arr["abon"]}'";
		}
			
		if (isset($arr["userstat"]) && $arr["userstat"] != 0) 
		{
			if (isset($arr["not_userstat"]) && $arr["not_userstat"])
				$query_str .= " AND userstatID != '{$arr["userstat"]}'";
			else 
				$query_str .= " AND userstatID = '{$arr["userstat"]}'";
		}
		$query_str .= " ORDER BY email asc";

		$q = Doctrine_Manager::getInstance()->getCurrentConnection();
		$result = $q->execute($query_str);
		foreach($result as $rec)
		{
			$e = trim($rec['email']);
            $valid = filter_var($e, FILTER_VALIDATE_EMAIL);
            if($valid){        
                $email_arr[$i++] = $e;
            }
		}
		
		return $email_arr;	
	}
	
	
   /*
	*
	* This function returns array containing email addresses. 
	*
	*/
	public function getEmailFromNewsletterPublic() 
	{ 
		$email_arr = array();
		$i = 0;
		
		$query_str = "SELECT DISTINCT email FROM newsletter_public ORDER BY email asc";
		$q = Doctrine_Manager::getInstance()->getCurrentConnection();
		$result = $q->execute($query_str);

		foreach($result as $rec)
		{
			$e = trim($rec['email']);
            $valid = filter_var($e, FILTER_VALIDATE_EMAIL);
            if($valid){        
                $email_arr[$i++] = $e;
            }
		}

		return $email_arr;	
	}
	
   /*
	*
	* This function checks the permission to access to the article.
	*
	*/
	public function checkArticlePermission($data) 
	{ 
		$userstatID = sfContext::getInstance()->getUser()->getAttribute('userstatID','','userProperty');
		
		if($data)
		{
			if($data->art_statid == 1)//added by sandeep as || $data->art_statid == 5
			{
				if($this->isSuscribUserForArticle() || $userstatID == 1 || $userstatID == 2 || $userstatID == 3 )
					return 1;
				else 
					return 2;
			}
			
			if($data->art_statid == 2)
			{
				if(sfContext::getInstance()->getUser()->isAuthenticated() && sfContext::getInstance()->getUser()->getAttribute('isSuperAdmin','','userProperty')=='1')
				return 1;
			/*else
				echo "Denna artikel r under bearbetning.";*/
			}
			
			if($data->art_statid == 3)
				return 1;

			
			if($data->art_statid == 4)
			{
				if(sfContext::getInstance()->getUser()->isAuthenticated()) 
					return 1;
				else 
					return 3; 
				//echo "Du mste vara inloggad fr att lsa denna artikel!";
			}
		}
		
	}

        /*
	*
	* This function returns rec in specific order.
	*
	*/
	public function getSelectedBtArticles($comma_separated_article_id) 
	{ 
		if(strlen($comma_separated_article_id) > 0)
		{
			$id_arr = explode(",", $comma_separated_article_id);
			
			$query = Doctrine_Query::create()->from('Article ba');
			$query->select('ba.*, FIELD(ba.article_id, '.$comma_separated_article_id.') AS field'); 
			$query->whereIn('ba.article_id', $id_arr); 
			$query->orderBy('field'); 
			$data = $query->execute(); 
			
			return $data;
		}
		else return '';
	}
        /**
         * this function check that user has purchase the subscription no 21 and returns bool value
         */
        public function isSuscribUserForArticle(){
            
            $result = Doctrine_Query::create()
                            ->select('p.id')
                            ->from('Purchase p')
                            ->leftJoin('Subscription s')
                            ->where('p.id=s.purchase_id')
                            ->andWhere('s.product_id IN (21,92)')
                            ->andWhere('s.end_date >= "'.date('Y-m-d').'"')
                            ->andWhere('s.start_date <= "'.date('Y-m-d').'"')
                            ->andWhere('p.user_id = ?',sfContext::getInstance()->getUser()->getAttribute('user_id', '', 'userProperty'))
                            ->andWhere('p.checkout_status=1')
                            ->andWhere('p.order_processed =1')
                            ->fetchOne();
            
            return $result?$result:0;
        }
        
        //Code for bshop article permission sandeep
        public function checkbtshopArticlePermission($data){
                $userstatID = sfContext::getInstance()->getUser()->getAttribute('userstatID','','userProperty');
		
		if($data)
		{
			if($data->art_statid == 5)
			{
				if($this->isSuscribUserForBtshopArticle())
					return 1;
				else 
					return 2;
			}
                }
        }
        
        //Code for bshop article permission sandeep
        public function isSuscribUserForBtshopArticle(){            
            $result = Doctrine_Query::create()
                            ->from('Purchase p')
                            ->leftJoin('p.Subscription s')
                            ->where('p.id=s.purchase_id')
                            ->andWhere('s.product_id IN (132)')
                            ->andWhere('s.end_date >= "'.date('Y-m-d').'"')
                            ->andWhere('s.start_date <= "'.date('Y-m-d').'"')
                            ->andWhere('p.user_id = ?',sfContext::getInstance()->getUser()->getAttribute('user_id', '', 'userProperty'))
                            ->orderBy('s.id DESC');
            $data=   $result->fetchArray();
            return $data;
        }
        
        //Code for individual article permission rahul
        public function isSuscribUserForInvArticle($purchedArticleId){
            $user = (sfContext::getInstance()->getUser()->getAttribute('user_id', '', 'userProperty')) ? sfContext::getInstance()->getUser()->getAttribute('user_id', '', 'userProperty') : 0;
            $sql = 'SELECT * FROM purchase LEFT JOIN purchased_item ON purchase.id = purchased_item.purchase_id WHERE purchased_item.product_id ='.$purchedArticleId.' AND purchase.user_id ='.$user;
            $con = Doctrine_Manager::getInstance()->connection();
            $result = $con->fetchAll($sql);
            return $result;
        }
        
	/*
	* This function return a perticular article.
	*
	*/
	
	public function getPerticularArticle($id) 
	{
		$query = Doctrine_Query::create()->from('article a');
		$query = $query->where('a.article_id = ?',$id);
		$data = $query->fetchOne();
		return $data;
	}
        
        
        /*
	*
	* This function return query by specified order. 
	*
	*/
	public function fetchPlusArticle() 
	{ 
		$query = Doctrine_Query::create()->from('Article ba');
		$query = $query->where('ba.art_statid = ?', 5);
		$query = $query->orderBy('ba.article_id DESC');
		$query = $query->offset(0)->limit(10);
		$data = $query->execute();
		
		return $data;
	}
}