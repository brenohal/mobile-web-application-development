

import java.util.Scanner;

public class Methods {

    public static void getRequirements() 
    {   
        System.out.println("Developer: Brennan O'Halloran");
        System.out.println("Program evaluates largest of two integers.");
        System.out.println("Note: Program does *not* check for non-numeric characters or non-integer values\n");
    }




    public static void LargestNumber() 
    {   
        Scanner input = new Scanner(System.in);

        System.out.print("Enter integer 1: ");
        int number = input.nextInt();
        System.out.print("Enter integer 2: ");
        int number2 = input.nextInt();

        if (number > number2) {
            System.out.println(number + " is larger than " + number2);
        } else if (number < number2) {
            System.out.println(number2 + " is larger than " + number);
        } else {
            System.out.println("Both numbers are equal.");
        }   
        input.close();
    }


}
