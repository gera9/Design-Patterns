class SingletonClass {
    private static SingletonClass instance = null;
    
    private SingletonClass(){
        //Some initialization code as a
        //connection to database server
    }

    public static SingletonClass getInstance(){
        if(SingletonClass.instance == null){
            SingletonClass.instance = new SingletonClass();
        }
        return SingletonClass.instance;
    }
}

public class Singleton {
    public static void main(String[] args) throws Exception {
        SingletonClass s = SingletonClass.getInstance();
        System.out.println(s);
    }
}
