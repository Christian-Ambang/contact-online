<?php
//include ("connexion_bd.php");

require 'analytics/gapi.class.php';
define('ga_profile_id','134950712');

ini_set('display_errors',1);

$ga = new gapi("", "");

$dimensions = array('browser', 'city','deviceCategory','dateHourMinute','source','medium','campaign');

$metrics    = array('visits','totalEvents','eventsPerSessionWithEvent','pageviews','visitors','exits');

$filter = "pageTitle == CV John Doe | Site.fr";


if(isset($_GET["date"]) && $_GET["date"]=="today"){
	$dateStart='today';
	$dateEnd='today';
} else {
	$dateStart='2019-05-15';
	$dateEnd='today';
}

 
$ga->requestReportData(ga_profile_id,
                       $dimensions,
                       $metrics,
                       //'-visits', // Sort by 'visits' in descending order
					   '-dateHourMinute', // Sort by 'dateHourMinute' in order
                       //null,
					   $filter, // Filter the data
                       $dateStart, // Start Date
                       $dateEnd, // Start Date
                       //'today', // End Date
                       1,  // Start Index
                       500 // Max results
                       );
 
$gaResults = $ga->getResults();

$i=1;
 
foreach($gaResults as $result)
{ ?>
<h1>Analytics</h1>   
<table cellpadding="3" cellspacing="0" border="1">   
<tr>
  <th>n°</th>
  <th>Navigateur</th>
  <th>Visite</th>
  <th>City</th>
  <th>Tag Source</th>
  <th>Medium</th>
  <th>Tag Campaign</th>
  <th>Nb Click</th>
  <th>Device</th>
  <th>Jour</th>	
  <th>Heure</th>
</tr>
	
<tr>
  <td> <?php echo $i++; ?></td>
  <td> <?php echo $result->getBrowser(); ?></td>
  <td> <?php echo $result->getVisitors(); ?></td>
  <td> <?php echo $result->getCity(); ?></td>
  <td>   
	  <a href="/dashboard/contact.php?id=<?php echo $result->getSource(); ?>" target="_blank"><?php echo $result->getSource(); ?> </a>
  </td> 
  <td>
    <?php echo $result->getMedium(); ?>
  </td>
  <td> <?php echo $result->getCampaign(); ?>
  </td>	
  <td> <?php echo $result->getEventsPerSessionWithEvent(); ?></td>
  <td> <?php echo $result->getDeviceCategory(); ?></td>
  <td> <?php echo substr($result->getDateHourMinute(),6,2).'-'.substr($result->getDateHourMinute(),4,2).'-'.substr($result->getDateHourMinute(),0,4); ?></td>	
  <td> <?php echo substr($result->getDateHourMinute(),8,2).':'.substr($result->getDateHourMinute(),10,2); ?></td>	
</tr>
</table>


<?php }

echo "<br> Total Results : {$ga->getTotalResults()}";

?>