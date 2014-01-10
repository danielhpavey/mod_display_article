<?php

class getArticle {
	var $articleid;
	var $length;
		
	
function __construct($articleid, $length){
	$this->article = $articleid;
	$this->length = $length;
}
	
	
function getContent(){
	
	$db = JFactory::getDBO();
	$query = $db->getQuery(true); 

	$query -> select ("introtext");
	$query -> from ("#__content");
	$query -> where ("id = " . $this -> article  );


	$db->setQuery($query);
	$result = $db->loadResult();



	 
	return $result;
}

}

?>
