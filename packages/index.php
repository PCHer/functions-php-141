<?php

function main(array $args) : array
{
    $favlink = "https://faas-sfo3-7872a1dd.doserverless.co/api/v1/web/fn-bf6699fb-503e-425d-b5de-773c664c1f5f/default/fav";
    $brands = "https://faas-sfo3-7872a1dd.doserverless.co/api/v1/web/fn-bf6699fb-503e-425d-b5de-773c664c1f5f/default/brands";
    $rss = "https://faas-sfo3-7872a1dd.doserverless.co/api/v1/web/fn-bf6699fb-503e-425d-b5de-773c664c1f5f/default/rss";
    $greeting = "<h1><a href='$favlink'>Favorites</a> &nbsp; &nbsp; <a href='$brands'> Brands</a> &nbsp; &nbsp; <a href='$rss'> RSS</a></h1>";


    echo $greeting;

    $today = strtotime("today");
    
    for ($i = 0; $i < 20; $i++) {
	    $datestr = date("Y/m/d", strtotime("-$i days", $today));
	    $page .= "<h1><a href='day?date=$datestr' >$datestr</a></h1>";
    }


    return ["body" => $greeting.$page];
}
