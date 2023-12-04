import java.util.Scanner;
import java.util.HashMap;

public class WordLengthCounter {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.println("Enter a line of text: ");
        String inputText = scanner.nextLine();

        // Create a HashMap to store word lengths and their occurrences
        HashMap<Integer, Integer> wordLengthCount = new HashMap<>();

        // Split the input text into words
        String[] words = inputText.split("\\s+");

        // Count the word lengths
        for (String word : words) {
            int wordLength = word.length();
            wordLengthCount.put(wordLength, wordLengthCount.getOrDefault(wordLength, 0) + 1);
        }

        // Print the table
        System.out.println("Word length\tOccurrences");
        for (int i = 1; i <= inputText.length(); i++) {
            int occurrences = wordLengthCount.getOrDefault(i, 0);
            System.out.println(i + "\t" + occurrences);
        }

        scanner.close();
    }
}
