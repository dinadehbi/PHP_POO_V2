<?php
require("../Presentation/BookPresentation.php");

function askQuestion($question)
{
    echo $question;
    return trim(fgets(STDIN));
}

function library_management()
{
    echo chr(27) . chr(91) . 'H' . chr(27) . chr(91) . 'J';
    echo "Welcome to the Books List Manager\n\n";

    $exitProgram = false;
    while (!$exitProgram) {
        echo "+------------------------------------+\n";
        echo "|        Books Management            |\n";
        echo "|------------------------------------|\n";
        echo "|    Please choose an action:        |\n";
        echo "|------------------------------------| \n";
        echo "| [v] - View the Books               |\n";
        echo "| [a] - Add a new Book               |\n";
        echo "| [exit] - Exit the program          |\n";
        echo "| [d] - Delete book                  |\n";  // Updated label for clarity
        echo "+------------------------------------+\n\n";

        $action = askQuestion("Your choice: ");
        switch (strtolower($action)) {
            case 'v':
              
                $bookPresentation = new BookPresentation();
                $bookPresentation->viewBooks();
                break;

            case 'a':
                $bookPresentation = new BookPresentation();
                $bookPresentation->addBook();
                break;

            case 'exit':
                $exitProgram = true;
                break;

            case 'd':
                $bookPresentation = new BookPresentation();
                $title = askQuestion("Enter the title of the book to delete: ");  // Prompt user for the book title
                $bookPresentation->delete($title);  // Call the delete method with the title
                break;

            default:
                echo "Invalid choice. Please try again.\n";
                break;
        }
    }
    echo "Exiting the program. Goodbye!\n";
}

library_management();
