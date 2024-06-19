package Coursework;

import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Collections;
import java.util.Scanner;
import javax.swing.BoxLayout;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JSpinner;
import javax.swing.JTextField;
import javax.swing.SpinnerModel;
import javax.swing.SpinnerNumberModel;
import javax.swing.event.ChangeEvent;
import javax.swing.event.ChangeListener;

class Doctor implements Comparable<Doctor> {
    String surname;
    String licenseNumber;
    String specialisation;

    public Doctor(String surname, String licenseNumber, String specialisation) {
        this.surname = surname;
        this.licenseNumber = licenseNumber;
        this.specialisation = specialisation;
    }

    @Override
    public int compareTo(Doctor other) {
        return this.surname.compareTo(other.surname);
    }
}

public class ConsoleMenu {
    static ArrayList<Doctor> doctors = new ArrayList<>();
    static final int MAX_DOCTORS = 10;

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        while (true) {
            System.out.println("1. PRINT doctors: ");
            System.out.println("2. ADD doctor: ");
            System.out.println("3. DELETE doctor: ");
            System.out.println("4. Press to SAVE: ");
            System.out.println("5. Press to open GUI: ");
            System.out.println("6. EXIT ");
            System.out.println("Enter your choice: ");
            int choice = scanner.nextInt();

            if (choice == 1) {
                printDoctors();
            } else if (choice == 2) {
                addDoctor();
            } else if (choice == 3) {
            deleteDoctors();
            } else if (choice == 4) {
            saveDoctorsToFile();
            } else if (choice == 5) {
            openGUI();
            } else if (choice == 6) {
            break;
            } else {
                System.out.println("Invalid choice");
            }
        }
    }

    public static void printDoctors() {
        Collections.sort(doctors);
        for (Doctor doctor : doctors) {
            System.out.println(doctor.surname + " - " + doctor.licenseNumber + " - " + doctor.specialisation);
        }
    }

    public static void addDoctor() {
        if (doctors.size() < MAX_DOCTORS) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Enter doctor's surname: ");
        String surname = scanner.nextLine();
        System.out.println("Enter doctor's license number: ");
        String licenseNumber = scanner.nextLine();
        System.out.println("Enter doctor's specialization: ");
        String specialisation = scanner.nextLine();
        Doctor doctor = new Doctor(surname, licenseNumber, specialisation);
        doctors.add(doctor);
    }else {
      System.out.println("Maximum number of doctors reached.");
    }
    }
    
    public static void deleteDoctors() {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Enter the license number of the doctor to be deleted: ");
        String licenseNumber = scanner.nextLine();
        for (Doctor doctor : doctors) {
            if (doctor.licenseNumber.equals(licenseNumber)) {
                doctors.remove(doctor);
                System.out.println("Doctor with license number " + licenseNumber + " deleted. Number of doctors remaining: " + doctors.size());
                return;
            }
    }
}

     public static void saveDoctorsToFile() {
        try (BufferedWriter writer = new BufferedWriter(new FileWriter("doctors.txt"))) {
            for (Doctor doctor : doctors) {
                writer.write(doctor.surname + "," + doctor.licenseNumber + "," + doctor.specialisation);
                writer.newLine();
            }
            System.out.println("Doctors saved to file successfully");
        } catch (IOException e) {
        }
    }
    
     public static void openGUI(){
         JFrame frame = new JFrame(" Form");
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        
            }
        

}
      