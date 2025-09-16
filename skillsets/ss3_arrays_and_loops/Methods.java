public class Methods {

    public static void getRequirements() {
        System.out.println("Developer: Brennan O'Halloran");
        System.out.println("Program loops through array of strings");
        System.out.println("Use following values: dog, cat, bird, fish, insect");
        System.out.println("Use following loop structures: for, enhanced for, while, do-while");
        System.out.println();
        System.out.println("Note: Pretest loops: for, enhanced for, while. Posttest loop: do-while\n");
    }

    public static void arrays_and_loops() {
        String[] animals = {"dog", "cat", "bird", "fish", "insect"};

        // for loop
        System.out.println("for loop:");
        for (int i = 0; i < animals.length; i++) {
            System.out.println(animals[i]);
        }
        System.out.println();

        // enhanced for loop
        System.out.println("Enhanced for loop:");
        for (String a : animals) {
            System.out.println(a);
        }
        System.out.println();

        // while loop
        System.out.println("while loop:");
        int i = 0;
        while (i < animals.length) {
            System.out.println(animals[i]);
            i++;
        }
        System.out.println();

        // do-while loop
        System.out.println("do...while loop:");
        i = 0;
        do {
            System.out.println(animals[i]);
            i++;
        } while (i < animals.length);
    }
}
