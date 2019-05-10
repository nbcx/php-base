# 工厂模式

简单工厂模式是属于创建型模式，又叫做静态工厂方法（Static Factory Method）模式，但不属于23种GOF设计模式之一。简单工厂模式是由一个工厂对象决定创建出哪一种产品类的实例。简单工厂模式是工厂模式家族中最简单实用的模式，可以理解为是不同工厂模式的一个特殊实现。

- 意图：定义一个创建对象的接口，让其子类自己决定实例化哪一个工厂类，工厂模式使其创建过程延迟到子类进行。
- 主要解决：主要解决接口选择的问题。
- 何时使用：我们明确地计划不同条件下创建不同实例时。
- 如何解决：让其子类实现工厂接口，返回的也是一个抽象的产品。
- 关键代码：创建过程在其子类执行。

## 简单工厂
```php
class Simple {

    public static function create($product) {
        switch ($product) {
            case 'text':
                $mfg = new TextFactory();
                break;
            case 'graphic':
                $mfg = new GraphicProduct();
                break;
            default:
                throw new \Error('product non-existent');
                break;
        }
        $mfg->getProperties();
        return $mfg;
    }

}
```

## 抽象工厂
工厂模式中有: 工厂方法(Factory Method) 抽象工厂(Abstract Factory).
```php
//抽象工厂
abstract class Creator {

    protected abstract function factoryMethod();

    public function startFactory() {
        //规定产品的使用流程或方式
        $mfg = $this->factoryMethod();
        return $mfg;
    }

}

//具体生成产品的工厂
class TextFactory extends Creator {

    protected function factoryMethod() {
        // TODO: Implement factoryMethod() method.
        $product = new TextProduct();
        return $product->getProperties();
    }

}
 //产品标准
interface Product {

    public function getProperties();

}
//实际产品
class TextProduct implements Product {

    private $mfgProduct;

    public function getProperties() {
        // TODO: Implement getProperties() method.

        $this->mfgProduct = 'This is text.';
        return $this->mfgProduct;
    }

}
```

## 简单工厂和抽象工厂的区别
在抽象工厂中返回子类的确看起来很像简单工厂。简单工厂把全部的事情，在一个地方都处理完了，然后抽象工厂确实创建一个框架，让子类决定如何实现。  
比方说，在抽象工厂中，startFactory方法提供了一般框架，以便创建产品，startFactory方法依赖工厂方法创建具体类，并制造出实际的产品。可以通过机场Creator类，决定实际制造出的产品是什么。  
简单工厂的做法，可以将对象对创造封装起来，但是简单工厂不具备抽象工厂的弹性，因为简单工厂不能变更正在创建的产品。