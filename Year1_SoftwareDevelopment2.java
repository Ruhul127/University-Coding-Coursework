import java.util.Scanner;
class main {
  public static void main(String[] args) {
    System.out.println("Welcome to the Cruise ship boarding!!!");
    
    //Task 1
    
    char option;  
    Scanner scanner = new Scanner(System.in);
    System.out.println("Press (A) to add. ");
    System.out.println("Press (D) to delete. ");
    System.out.println("Press (E) to display any empty cabins. ");
    System.out.println("Press (D) to delete any customers from cabin.");
    System.out.println("Press (F) to find customer from customer name.");
    System.out.println("Press (S) to store program data.");
    System.out.println("Press (L) to load program data.");
    System.out.println("Press (O) to view passengers Alphabetically.");

    // Selection is made depending on the operator using switch
 option = scanner.next().toUpperCase().charAt(0);
   switch (option) { // matches The Operator with the case values
     case 'E':
       System.out.println("Empty cabin");
     break; // jumps out of the case statement
       
     case 'D':
       System.out.println("Delete cabin");
     break;
       
     case 'F':
       System.out.println("Find cabin");
     break;
       
     case 'S':
       System.out.println("Store program data");
     break;
       
     case 'L':
       System.out.println("Load program data");
     break;
       
     case 'O':
       System.out.println("View passengers Alphabetically");
     break;
       
     case 'A':
       System.out.println("Add");
     break;
     
     
     default:
       System.out.println("invalid option");
     break;
    } /* end of switch */

    
  }
}
