// Based on https://refactoring.guru/es/design-patterns/factory-method
// ...And https://www.javatpoint.com/java-string-equalsignorecase

interface Product {
    public void doStuff();
}

class ProductA implements Product {
    public void doStuff(){
        System.out.println("ProductA: Doing stuff...");
    }

    public String toString(){
        return "Product A";
    }
}

class ProductB implements Product {
    public void doStuff(){
        System.out.println("ProductB: Doing stuff...");
    }

    public String toString(){
        return "Product B";
    }
}

abstract class Creator {
    public void someOperation(){
        Product p = createProduct();
        p.doStuff();
    }

    abstract Product createProduct();
}

class ConcreteCreatorA extends Creator {
    public Product createProduct(){
        return new ProductA();
    }
}

class ConcreteCreatorB extends Creator {
    public Product createProduct(){
        return new ProductB();
    }
}

public class FactoryMethod2 {
    public static void main(String[] args) throws Exception {
        Creator cA = new ConcreteCreatorA();
        Creator cB = new ConcreteCreatorB();

        cA.someOperation();
        cB.someOperation();
        System.out.println("-------------------");
        System.out.println(cA.createProduct());
        System.out.println(cB.createProduct());
        System.out.println("-------------------");
        cA.createProduct().doStuff();
        cB.createProduct().doStuff();
    }
}
