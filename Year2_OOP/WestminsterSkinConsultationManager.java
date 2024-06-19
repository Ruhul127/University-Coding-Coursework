
package Coursework;

import java.util.Scanner;

public class WestminsterSkinConsultationManager {
 
  Scanner scanner = new Scanner(System.in);

  public static void main(String[] args) {
    WestminsterSkinConsultationManager menu = new WestminsterSkinConsultationManager();
    menu.run();
  }

  public void run() {
    while (true) {
      System.out.println("1. Enter Doctor Information");
      System.out.println("2. Print Doctor Information and Exit");

      int selection = scanner.nextInt();
      scanner.nextLine(); 
      
      if (selection == 1) {
        enterDoctorInfo();
      } else if (selection == 2) {
        printDoctorInfoAndExit();
        break;
      } else {
        System.out.println("Invalid selection. Please try again.");
      }
    }
  }

  
  public void enterDoctorInfo() {
    System.out.println("Enter the doctor's name:");
    String name = scanner.nextLine();
    System.out.println("Enter the doctor's license number:");
    String licenseNumber = scanner.nextLine();
    System.out.println("Enter the doctor's specialisation:");
    String specialisation = scanner.nextLine();

   
    this.name = name;
    this.licenseNumber = licenseNumber;
    this.specialisation = specialisation;
  }
 
  public void printDoctorInfoAndExit() {
    System.out.println("Doctor Information:");
    System.out.println("Name: " + name);
    System.out.println("License Number: " + licenseNumber);
    System.out.println("Specialisation: " + specialisation);
  }

  
  private String name;
  private String licenseNumber;
  private String specialisation;
}
