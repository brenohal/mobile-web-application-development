import java.util.Scanner;

class Main
{
    public static void main(String[] args)
    {
        //call statuc void methods (i.e., no object, non-value returning)
        Methods.getRequirements();
       int arraySize=0;
       arraySize=Methods.validateArraySize();
       Methods.calculateNumbers(arraySize);
    }
}