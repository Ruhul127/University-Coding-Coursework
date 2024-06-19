
package Coursework;


public class TestPerson {
    
    public static void main(String[] args) {
        
        Person Bob = new Person("Bob", "Smitch", "12/07/03", "07.....");
        System.out.println(Bob);
        
        Patient Kate = new Patient("Kate", "Jackson", "13/09/96", "078.....", 100);
        Kate.setPatientID(100);
        Kate.setFee(15.0);
        System.out.println(Kate);
        
        Doct Mike = new Doct("Mike", "Harris", "21/02/95", "0783.....");
        Mike.setLicenseNum(20);
        Mike.setSpecialisation("Senior Doctor");
        System.out.println(Mike);
    }
}
