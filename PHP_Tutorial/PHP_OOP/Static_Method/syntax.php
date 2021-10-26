<?php
// static trong PHP co the goi truc tiep - khong can tao mot vi du cua mot class dau tien
class ClassName
{
  public static function staticMethod()
  {
    echo "Hello World";
  }
}
// De truy cap mot phuong thuc tinh su dung ten class, hai dau hai cham (::) va ten phuonng thuc
// ClassName::staticMethod();

ClassName::staticMethod();