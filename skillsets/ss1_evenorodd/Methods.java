

import java.util.Scanner;

public class Methods {

    public static void getRequirements() 
    {   
        System.out.println("Developer: Brennan O'Halloran");
        System.out.println("Program evaluates integers as even or odd.");
        System.out.println("Note: Program does *not* check for non-numeric characters.\n");
    }




    public static void EvenOrOdd() 
    {   
        Scanner input = new Scanner(System.in);

        System.out.println("Program evaluates integers as even or odd.");
        System.out.println("Note: Program does *not* check for non-numeric characters.\n");

        System.out.print("Enter integer: ");
        int number = input.nextInt();

        if (number % 2 == 0) {
            System.out.println(number + " is an even number.");
        } else {
            System.out.println(number + " is an odd number.");
        }

        input.close();
    }


}
