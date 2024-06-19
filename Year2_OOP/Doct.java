package Coursework;

import java.util.*;

public class Doct extends Person{
    
    private int LicenseNum;
    private String Specialisation;
    
    public Doct(String name, String surname, String DOB, String number){
        super(name, surname, DOB, number);
        this.LicenseNum = LicenseNum;    
    }

    public void setLicenseNum(int LicenseNum){
        this.LicenseNum = LicenseNum;
    }
    
    public void setSpecialisation(String Specialisation){
        this.Specialisation = Specialisation;
    }
    
    public int getLicenseNum(int LicenseNum){
        return LicenseNum;
    }
    
    public String getSpecialisation(String Specialisation){
        return Specialisation;
    }
    
    @Override
    public String toString(){
        return super.toString() + ", LicenseNum: " + LicenseNum + ", Specialisation: " + Specialisation;
    }
    
}


