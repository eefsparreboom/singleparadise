<?php
$date = (isset($_GET['date']) && $_GET['date']!=='') ? $_GET['date'] : '2014';
$duration = (isset($_GET['duration']) && $_GET['duration']!=='') ? $_GET['duration'] : '';
$url = 'http://theridiid.net/city/'.$date;
if($duration!=='')$url.='/'.$duration;
echo file_get_contents($url);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
