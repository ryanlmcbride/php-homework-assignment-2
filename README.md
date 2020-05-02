# PHP Homework Assignment 2

Create a PHP page (hw07.php) that has a small form at the top and a horizontal rule beneath. When the user presses the submit button the results will be displayed below the horizontal rule. 

The form should ask the user to enter a color value by selecting one from a drop down list or entering the value in a text box.

If the user submits a color, then show that color as the background color of a 1x1 table that has a height and width of 200.

If the user BOTH selects a color and enters a value, then a message should be sent that says to enter only one or the other.

If the user enters an invalid color value, then display an error message (A valid color must have exactly 3 or 6 characters which are all from the following set of symbols: 0123456789ABCDEFabcdef (BONUS!!!)

Make it so that the displayed page keeps the information that the user filled in. The way you do this is as follows: 

1.	When generating a textbox element, if you insert a VALUE attribute with a default value then that is what will be seen. Thus, if $c2 is your PHP variable for the color typed by the user, then you need to print the attribute VALUE='$c2' so that it continues to appear in the textbox after the submit button is pressed. If $c2 has no value then VALUE='' is what will be generated which is okay.
