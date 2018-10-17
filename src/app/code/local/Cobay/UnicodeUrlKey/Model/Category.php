<?php
class Cobay_UnicodeUrlKey_Model_Category extends Mage_Catalog_Model_Category
{
    public function formatUrlKey($str)
    {
	    //한글 정규식 패턴(UniCode지원할 경우) : [가-힣]+
	    //태국어 정규식 패턴 : [ก-๙]+
	    //나머지 언어들은 유니코드표 참조
	    $urlKey = preg_replace('#[^0-9a-z가-힣ก-๙]+#i', '-', $str);
	    $urlKey = strtolower($urlKey);
	    $urlKey = trim($urlKey, '-');
        return $urlKey;
    }
}
