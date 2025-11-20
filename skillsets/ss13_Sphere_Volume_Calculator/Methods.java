import java.util.Scanner;

public class Methods {

    static final Scanner sc = new Scanner(System.in);

    public static void getRequirements() {
        System.out.println("Developer: Brennan O'Halloran");
        System.out.println("Program calculates sphere volume in liquid U.S gallons from user entered diamerter volme in inches, \nand rounds to two decimal points.");
        System.out.println("Must use Java\'s *bulilt in* PI and pow() capabilities");
        System.out.println("Program checks for non integers and non numeric values");
        System.out.println("Program continues to prompt for user entry until no longer requested, prompt accepts upper or lower case letters");

         System.out.println();
    }

    public static void getSphereVolume() {

        int diameter = 0;
        double volume = 0.0;
        double gallons = 0.0;
        char choice = ' ';
        Scanner sc = new Scanner(System.in);

        do {
            System.out.print("Please enter diameter in inches: ");
            while (!sc.hasNextInt()){
                System.out.println("Not a valid integer\n");
                sc.next();
                System.out.print("Please try again - enter diameter in inches: ");

            }
            diameter = sc.nextInt();

            System.out.println();

            volume = (4.0 / 3.0) * Math.PI * Math.pow((diameter / 2.0), 3);
            gallons = volume / 231.0;
            System.out.println("Sphere volume: " + String.format("%.2f", gallons) + " liquid U.S gallons");

            System.out.print("\nDo you want to calculate another sphere volume? (Y/N): ");
            choice = sc.next().charAt(0);
            choice = Character.toUpperCase(choice);
        }
        while (choice == 'Y');
        
        System.out.println("\nThank you for using the Sphere Volume Calculator. Goodbye!");
    }
    

    
}
