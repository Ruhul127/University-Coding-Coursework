
package Coursework;

import java.util.*;

public class Person {
        
       protected String name;
       protected String surname;
       protected String DOB;
       protected String Number;    

    public Person(String name, String surname, String DOB, String Number){
        
        this.name = name;
        this.surname = surname;
        this.DOB = DOB;
        this.Number = Number;
    }

    public String toString(){
        return name + ",surname: " + surname + ",DOB: " + DOB + ",Number " + Number;    
    }
    
    public void setName(String name){
        this.name = name;
    }
    
    public void setSurname(String surname){
        this.surname = surname;
    }
    
    public void setDOB(String DOB){
        this.DOB = DOB;
    }
    
    public void setNumber(String Number){
        this.Number = Number;
    }
    
    public String getName(){
        return name;
    }
    
    public String getSurname(){
        return surname;
    }
    
    public String getDOB(){
        return DOB;
    }
    
    public String getNumber(){
        return Number;
    }

    
    
    










}


