import java.util.Scanner;
import java.util.Random;

public class Methods {

    public static void getRequirements() {
        System.out.println("Developer: Brennan O'Halloran");
        System.out.println("Print minimum and maximum integer values");
        System.out.println("Program prompts user to enter desired number of pseudorandom-generated integers (min 1)");
        System.out.println("Program validates user input for integers greater than 0");
        System.out.println("Use following loop structures: for, enhanced for, while, do-while\n");

        System.out.println("Integer.MIN_VALUE: " + Integer.MIN_VALUE);
        System.out.println("Integer.MAX_VALUE: " + Integer.MAX_VALUE);
        System.out.println();
    }

    public static int[] createArray() {
        Scanner sc = new Scanner(System.in);
        int arraySize = 0;

        System.out.print("Enter desired number of pseudo-random integers (min 1): ");

        while (!sc.hasNextInt()) {
            System.out.print("Not valid integer!\n");
            sc.next();
            System.out.print("Please try again. Enter valid integer (min 1): ");
        }
        arraySize = sc.nextInt();

        while (arraySize < 1) {
            System.out.print("\nNumber must be greater than 0. Please enter integer greater than 0: ");
            while (!sc.hasNextInt()) {
                System.out.print("\nNumber must be integer: ");
                sc.next();
                System.out.print("Please try again. Enter integer value greater than 0: ");
            }
            arraySize = sc.nextInt();
        }

        return new int[arraySize];
    }

    public static void generatePseudoRandomNumbers(int[] myArray) {
        Random r = new Random();

        System.out.println("\nfor loop:");
        for (int i = 0; i < myArray.length; i++) {
            System.out.println(r.nextInt()); // 1..10 like the screenshot’s small values
        }

        System.out.println("\nEnhanced for loop:");
        for (int ignored : myArray) {
            System.out.println(r.nextInt()); // full int range, can be negative
        }

        System.out.println("\nwhile loop:");
        int i = 0;
        while (i < myArray.length) {
            System.out.println(r.nextInt()); // full int range
            i++;
        }

        System.out.println("\ndo...while loop:");
        i = 0;
        do {
            System.out.println(r.nextInt()); // full int range
            i++;
        } while (i < myArray.length);
    }
}




