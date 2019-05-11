# 原型设计模式
当创建给定类的实例的过程很昂贵或很复杂时，就使用原型模式。  
如果一个项目要求你创建某个原型对象的多个实例，就可以使用原型模式。

## 简单演示
```php
abstract class CloneMe {

    public $name;
    public $picture;

    abstract function __clone();

}

class Person extends CloneMe {

    public function __construct() {
        $this->age = '18';
        $this->name = 'Original';
    }

    public function display() {
        echo "name:{$this->name},age:{$this->age}\n";
    }

    public function __clone() {
        // TODO: Implement __clone() method.
    }

}

$worker = new Person();
$worker->display();

$slacker = clone $worker;
$slacker->name = "Cloned";
$slacker->display();
```


## 例子
