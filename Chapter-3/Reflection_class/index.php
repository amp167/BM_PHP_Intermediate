<?php
require_once "Member.php";

$member = new \App\Member();
$ro = new ReflectionObject($member);


echo $ro->isCloneable() ? "True" : "false";
echo "<hr>";

showData(get_class_methods($ro));


/*
$rp = new ReflectionParameter(array('App\Member', 'getDetailinfo'), 0);
echo $rp->isDefaultValueAvailable() ? $rp->getDefaultValue() : "No Default Value";
*/

/*
$rp = new ReflectionProperty("App\Member", "detailInfo");

$mem = new \App\Member();
showData($rp->getValue($mem));

showData(get_class_methods($rp));
*/
/*
$rm = new ReflectionMethod("App\Member", "getDetailinfo");
$mem = new \App\Member();
$rm->invokeArgs($mem, ["Hello"]);
echo $rm->isUserDefined() ? "Yes" : "No";
echo "<br>" . $rm->getNumberOfParameters();
echo "<hr>";


showData(get_class_methods($rm));
*/

/*
$member = new \App\Member();
$rc = new ReflectionClass('App\Member');


echo $rc->getNamespaceName() . "<br>";
echo $rc->getName() . "<br>";
echo $rc->hasMethod("getDetailinfo") . "<br>";
echo $rc->isTrait() . "<br>";
echo "<hr>";
showData(get_class_methods($rc)); */
function showData($ary)
{
    echo "<pre>";
    print_r($ary);
}
