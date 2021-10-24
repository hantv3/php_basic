#### PHP OOP là gì

OOP là viết tắt của Object-Oriented Programming.

Trong đối tượng chứa thuộc tính và phương thức

Note: Trong một lớp, biến được gọi là thuộc tính và hàm được gọi là phương thức.

Một Object được gọi từ class sẽ sử dụng từ khóa new.

##### Từ khóa $this

$this giống như dấu ->, và chỉ sử dụng trong phương thức.

VD:
<?php
class Fruit {
    public $name;
    function set_name($name){
        $this->name = $name;
    }
}
$apple = new Fruit();
?>

**instanceof** là từ khóa dùng để kiểm tra đối tượng có thuộc lớp đó hay không.


