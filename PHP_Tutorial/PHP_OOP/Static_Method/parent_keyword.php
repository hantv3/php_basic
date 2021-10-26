<?php
// Khi tu mot class con goi phuong thuc static tu lop cha, su dung parent trong pham vi class con
class domain
{
  public static function getWebsiteName()
  {
    echo "W3School.com";
  }
}
class domain3 extends domain
{
  public $websitename;
  public function __construct()
  {
    $this->websitename = parent::getWebsiteName();
  }
}
$domainW3 = new domain3();
echo $domainW3->websitename;