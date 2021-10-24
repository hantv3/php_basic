<?php
# Trong PHP một hàm __construct() luôn được gọi khi một object tạo từ một lớp. 
# Sử dụng __contruct() để tích kiệm không phải sử dụng hàm set_name() làm giảm bớt số lượng code viết.
class Fruit
{
    public $name;
    public $color;

    function __construct($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }

}
$apple = new Fruit("Táo");
echo $apple->get_name();
?>