import java.util.Scanner;

public class Methods {

    static final Scanner sc = new Scanner(System.in);

    public static void getRequirements() {
        System.out.println("Developer: Brennan O'Halloran");
        System.out.println("1) Program creates array size at run-time");
        System.out.println("2) Program displays array size");
        System.out.println("3) Program rounds sum and average of numbers to two decimal places");
        System.out.println("4) Numbers *must* be float data type, not double");

         System.out.println();
    }

    public static void convertTemp() {
        Scanner sc = new Scanner(System.in);
        double temperature = 0.0;
        char choice = ' ';
        char type = ' ';

        do{
            System.out.print("Fahrenheit to Celsius? Type \"f\", or Celsius to Fahrenheit? Type \"c\": ");
            type = sc.next().charAt(0);
            type = Character.toLowerCase(type);
            if(type == 'f'){
                System.out.print("Enter temperature in Fahrenheit: ");
                temperature = sc.nextDouble();
                temperature = ((temperature - 32) * 5) / 9;
                System.out.println("Temperature in Celsius = " + temperature);

            }
            else if (type == 'c'){
                System.out.print("Enter temperature in Celsius: ");
                temperature = sc.nextDouble();
                temperature = (temperature * 9/5) + 32;
                System.out.println("Temperature in Fahrenheit = " + temperature);
            }
            else{
                System.out.println("Invalid input, please try again.");
            }

            System.out.print("\nDo you want to convert a temperature (y or n)? ");
            choice = sc.next().charAt(0);
            choice = Character.toLowerCase(choice);

        }
        while(choice == 'y');

        System.out.print("\nThank you for using our Temperature Conversion Program!");
       
    }

    
}
