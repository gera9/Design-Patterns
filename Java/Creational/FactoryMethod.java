/* Code based on https://www.javatpoint.com/factory-method-design-pattern */

abstract class Plan{
    protected double rate;
    abstract void getRate();

    public void calculateBill(int units){
        System.out.print(units*rate);
    }

}

class DomesticPlan extends Plan{
    // @override
    public void getRate(){
        rate = 3.50;
    }
}

class ComercialPlan extends Plan{
    // @override
    public void getRate(){
        rate = 7.50;
    }
}

class InstitutionalPlan extends Plan{
    // @override
    public void getRate(){
        rate = 5.50;
    }
}

class GetPlanFactory{
    //Use getPlan method to get object of type Plan
    public Plan getPlan(String planType){
        if(planType == null){
            return null;
        }

        if(planType.equalsIgnoreCase("DOMESTICPLAN")){
            return new DomesticPlan();
        }
        else if(planType.equalsIgnoreCase("COMMERCIALPLAN")){
            return new ComercialPlan();
        }
        else if(planType.equalsIgnoreCase("INSTITUTIONALPLAN")){
            return new InstitutionalPlan();
        }
        return null;
    }
}

// Generate Bill
public class FactoryMethod {
    public static void main(String[] args) throws Exception {
       GetPlanFactory planFactory = new GetPlanFactory(); 
       Plan plan = planFactory.getPlan("DOMESTICPLAN");
       System.out.println(plan);
    }
}