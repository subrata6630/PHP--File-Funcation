# PHP file() Function

Definition and Usage

The file() reads a file into an array.

Each array element contains a line from the file, with newline still attached.

# Syntax
file(path,include_path,context) 

# Example
<?php
print_r(file("test.txt"));
?> 
