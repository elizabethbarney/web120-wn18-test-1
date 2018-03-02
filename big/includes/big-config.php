<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6Lcrq0YUAAAAAPWVD9MWL62O0thVzASwoI77T5GB";
$secretKey = "6Lcrq0YUAAAAABaV1IEMGxdpnujgaG5a099M_yDD";

//echo basename($_SERVER ['PHP_SELF']);
//die; 

define ('THIS_PAGE',basename($_SERVER ['PHP_SELF']));

$nav1['web120/index.php'] = "WEB120 Portal";
$nav1['index.php'] = "Home";
$nav1['Flexbox.php'] = "Flexbox";
$nav1['gallleries.php'] = "Galleries";
$nav1['calendar.php'] = "Calendar";
$nav1['map.php'] = "Map";
$nav1['youtube.php'] = "YouTube";
$nav1['parallax.php'] = "Parallax";
$nav1['siteapp.php'] = "Site vs App";
$nav1['webcam.php'] = "Web Cam";
$nav1['contactme.php'] = "Contact Sara";



switch (THIS_PAGE)
{ 
        
        case "index.php":
        $title = "Elizabeth Barney: WEB120 Portal Website";
        $logo = "fa-home";
        $PageID = "Welcome";
    break;
        
    case "flexbox.php":
        $title = "Elizabeth Barney's Flexbox Research";
        $logo = "";
        $PageID = "Flexbox Research";
    break;
        
    case "galleries.php":
        $title = "Elizabeth Barney's Galleries Research";
        $logo = "";
        $PageID = "Galleries Research";
    break;

    case "map.php":
        $title = "Elizabeth Barney's Google Map";
        $logo = "";
        $PageID = "Map Research";
    break;        
        
     case "calendar.php":
        $title = "Elizabeth Barney's Responsive Calendar Research";
        $logo = "";
        $PageID = "Elizabaeth's Event Calendar";
    break;        
        
     case "youtube.php":
        $title = "Elizabeth Barney's Responsive YouTube";
        $logo = "";
        $PageID = "YouTube";
    break;        
        
    case "parallax.php":
        $title = "Elizabeth Barney's Parallax";
        $logo = "";
        $PageID = "Parallax";
    break;
    
    case "shoppingcarts.php":
        $title = "Elizabeth Barney's Shopping Cart Research";
        $logo = "";
        $PageID = "Shopping Cart Research";
    break;
    
   case "siteapp.php":
        $title = "Elizabeth Barney's Responsive Website vs. Native Mobile App";
        $logo = "";
        $PageID = "Responsive Website vs. Native Mobile App Research";
        break;
    
    case "webcam.php":
        $title = "Elizabeth Barney's Two examples of web cam";
        $logo = "";
        $PageID = "Two examples of Webcam";
    break;
        
        
    default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID = "";
    break;
        

}

function makeLinks($nav)
{
    $myReturn = '';
    foreach($nav as $url => $text)
    {
        if(THIS_PAGE == $url)
        {//add class
           $myReturn .= '<li><a href="' . $url . '" class="selected">' . $text . '</a></li>';            
        }else{//no class
           $myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'; 
  
        }
        
    }
    
    return $myReturn;
}
