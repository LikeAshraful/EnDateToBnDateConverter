<?php

/**
	 * 
	 */
	  /*English date to Bangla date converter Class*/
	class EnToBnDateTimeConverter
	{
		
		public function convertDateTime($enDateTime){

	        //engilsh char list
	        $searchArray= array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", ":", ",");

	        //bangla char list
	        $replaceArray= array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০", "জানুয়ারী", "ফেব্রুয়ারী", "মার্চ", "এপ্রিল", "মে", "জুন", "জুলাই", "আগষ্ট", "সেপ্টেম্বর", "অক্টোবর", "নভেম্বর", "ডিসেম্বর", ":", ",");
	        
	        // convert all english char to bangla char 
	        $bnDateFormat = str_ireplace($searchArray, $replaceArray, $enDateTime);

	       return $bnDateFormat;
	    }
	}

?>