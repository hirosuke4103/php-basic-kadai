<?php
// Foodクラスを作る
class Food {
    // プロパティを定義する
    public $name;
    public $price;

    // コンストラクタを定義する
    public function __construct(string $name, int $price ) {
        $this->name = $name;
        $this->price = $price;
    }

    // メソッドを定義する
    public function set_name(string $name) {
        $this->name = $name;
    }
    public function show_name() {
        echo $this->name . '<br>';
    }

    public function set_price(int $price) {
        $this->price = $price;
    }
    public function show_price() {
        echo $this->price . '<br>';
    }
    // 外に値を出す
    public function get_price() {
            return $this->price;
    }
}
// インスタンス化する
$Food = new Food('potato',250);
print_r($Food);


class Animal {
    // プロパティを定義する
    public $name;
    public $height;
    public $weight;


   // コンストラクタを定義する
    public function __construct(string $name, int $height,  int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // メソッドを定義する
    public function set_name(string $name) {
        $this->name = $name;
    }
    public function show_name() {
        echo $this->name . '<br>';
    }

    public function set_height(int $height) {
        $this->height = $height;
    }
    public function set_weight() {
        echo $this->weight . '<br>';
    }
    // 外に値を出す
    public function get_height() {
            return $this->height;
    return $height;
    }
}
// インスタンス化する
$Animal = new Animal('dog',60,5000);
print_r($Animal);

//出した値を取得して出力する 
$show_price = $Food->get_price();
$show_height = $Animal->get_height();
echo '<br>';
echo 'price: ' .$show_price .'<br>';
echo 'Height: ' .$show_height .'<br>';
?>