
package Coursework;

import java.util.*;

public class Patient extends Person {
    private int PatientID;
    private Double Fee;

public Patient(String name, String surname, String DOB, String number, int PatientID){
    super(name, surname, DOB, number);
    this.PatientID = PatientID; 
}

public void setPatientID(int PatientID){
    this.PatientID = PatientID;
}

public void setFee(Double Fee){
    this.Fee =Fee;
}

public int getPatientID(int PatientID){
    return PatientID;
}

public Double getFee(Double Fee){
    return Fee;
}

public String toString(){
    return super.toString() + ", PatientID: " + PatientID + ", Fee: " + Fee;
}

}
