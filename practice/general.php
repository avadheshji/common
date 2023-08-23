Array Questions:

How do you check if an array is empty?

You can use the array.length property and check if it is equal to 0.
What is the difference between array.slice() and array.splice() methods?

The slice() method returns a shallow copy of a portion of an array as a new array, while the splice() method changes the contents of an array by removing, replacing, or adding elements.
How do you sort an array in ascending order?

You can use the array.sort() method without any arguments.
How do you add an element to the beginning of an array?

You can use the array.unshift() method.
How do you find the maximum and minimum values in an array?

You can use the Math.max.apply(null, array) and Math.min.apply(null, array) methods respectively, or use the spread operator [...array] with Math.max() and Math.min().
String Questions:

How do you find the length of a string in JavaScript?

You can use the string.length property.
How do you check if a string is empty?

You can check if the string.length property is equal to 0.
How do you extract a substring from a string?

You can use the string.slice() method or the string.substring() method.
How do you check if a string starts or ends with a specific substring?

You can use the string.startsWith() and string.endsWith() methods respectively.
How do you count the occurrences of a substring in a string?

You can use the string.match() method with a regular expression and check the length of the returned array.
Now, let's continue with the remaining questions:

Array Questions (continued):

How do you remove the first element from an array?

You can use the array.shift() method.
How do you check if an element exists in an array?

You can use the array.includes() method, which returns true if the element is found, or false otherwise.
How do you convert an array to a string in JavaScript?

You can use the array.join() method, specifying the desired separator as an argument.
How do you iterate over an array and perform an action on each element?

You can use the array.forEach() method or a for...of loop.
How do you reverse the order of elements in an array?

You can use the array.reverse() method.
How do you check if two arrays are equal?

You can convert the arrays to JSON strings and compare them using the === operator.
How do you find the index of the first occurrence of an element in an array?

You can use the array.indexOf() method.
How do you remove duplicate elements from an array?

You can use the Set object or iterate over the array and filter out duplicate elements manually.
How do you concatenate two arrays in JavaScript?

You can use the array.concat() method or the spread operator ([...array1, ...array2]).
How do you check if all elements in an array satisfy a condition?

You can use the array.every() method.
How do you find the sum of all elements in an array?

You can use the array.reduce() method.
How do you convert an array of strings to a single string?

You can use the array.join() method with an empty string as the separator.
How do you convert an array of numbers to an array of strings?

You can use the array.map() method, converting each number to a string.
How do you remove falsy values (e.g., false, 0, null) from an array?

You can use the array.filter() method, passing a callback function that returns true for truthy values.
How do you find the average value of elements in an array?

You can calculate the sum of all elements and divide it by the array length.
How do you shuffle the elements of an array?

You can implement a custom shuffling algorithm or use the Fisher-Yates shuffle algorithm.
How do you find the unique elements in an array?

You can use the Set object or create a new array and iterate over the original array, adding elements that are not already present.
How do you flatten a nested array?

You can use the array.flat() method if your environment supports it, or implement a custom flattening algorithm.
How do you check if an array contains only unique elements?

You can compare the length of the array to the length of a Set created from the array.
How do you insert an element at a specific index in an array?

You can use the array.splice() method, passing the index and 0 as the second argument.
String Questions (continued):

How do you remove whitespace from the beginning and end of a string?

You can use the string.trim() method.
How do you convert a string to an array of characters?

You can use the string.split('') method, passing an empty string as the separator.
How do you extract a specific character from a string?

You can use bracket notation string[index], where index represents the desired character's position (starting from 0).
How do you check if a string contains only numeric characters?

You can use a regular expression, such as /^\d+$/, and the string.match() method.
How do you check if a string is a palindrome?

You can compare the string with its reverse by converting it to an array, reversing it, and joining it back into a string.
How do you convert a string to title case (capitalize the first letter of each word)?

You can split the string into an array of words using the string.split() method, capitalize the first letter of each word, and then join them back into a string.
How do you replace all occurrences of a substring in a string?

You can use the string.replace() method with a regular expression and the g flag, or use the split() and join() methods.
How do you count the number of words in a string?

You can split the string into an array of words using the string.split() method and then check the length of the resulting array.
How do you convert a string to a number in JavaScript?

You can use the parseInt() or parseFloat() functions, or the Number() constructor.
How do you check if a string is a valid email address?

You can use a regular expression to validate the email format, such as /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.
How do you check if a string contains only alphabetic characters?

You can use a regular expression, such as /^[a-zA-Z]+$/, and the string.match() method.
How do you pad a string with leading zeros?

You can use the string.padStart() method, specifying the desired length and the character to pad with as arguments.
How do you reverse the characters in a string?

You can convert the string to an array using the string.split('') method, reverse the array, and then join it back into a string using the array.reverse() and array.join('') methods.
How do you convert a string to camel case?

You can split the string into words, capitalize the first letter of each word except the first one, and then join them back into a string.
How do you find the index of the first occurrence of a substring in a string?

You can use the string.indexOf() method.
How do you convert a string to kebab case (lowercase with hyphens)?

You can replace spaces and underscores with hyphens and convert the string to lowercase.
How do you check if a string is a valid URL?

You can use a regular expression to validate the URL format, such as /^(http|https):\/\/([a-z]+\.)?[a-z0-9-]+\.[a-z]{2,}\/?$/i.
How do you check if a string contains only whitespace characters?

You can use the string.trim() method and check if the resulting string is empty.
How do you extract the file extension from a string representing a filename?

You can use the string.slice() method, passing the index of the last occurrence of the dot (.) as the argument.
How do you remove all non-alphanumeric characters from a string?

You can use a regular expression, such as /[^a-zA-Z0-9]/g, and the string.replace() method.ac
These questions cover a broad range of array and string concepts and operations in JavaScript. The answers provided are concise summaries, so further research or experimentation may be required for more complex scenarios.



Solve
Reverse words in a given string	Solve
Longest Common Prefix	Solve
Roman Number to Integer	Solve
Integer to Roman	Solve
Closest Strings	Solve
Divisible by 7	Solve
Encrypt the String – II	Solve
Equal point in a string of brackets	Solve
Isomorphic Strings	Solve
Check if two strings are k-anagrams or not	Solve
Panagram Checking	Solve
Minimum Deletions	Solve
Number of Distinct Subsequences	Solve
Check if string is rotated by two places	Solve





1 array_filter() 

	The array_filter() method filters the values of an array the usage of a callback function. 
	This method passes each value of the input array to the callback function. If this callback function returns true then the current value from the input is returned into the result array.
	
	
programs lists

Peak Element
Find the minimum and maximum element in an array
Write a program to reverse the array
Write a program to sort the given array
Find the Kth largest and Kth smallest number in an array
Find the occurrence of an integer in the array
Sort the array of 0s, 1s, and 2s
Subarray with given Sum
Move all the negative elements to one side of the array
Find the Union and Intersection of the two sorted arrays
Write a program to cyclically rotate an array by one
Find the missing integer
Count Pairs with given sum
Find duplicates in an array
Sort an Array using the Quicksort algorithm
Find common elements in three sorted arrays
Find the first repeating element in an array of integers
Find the first non-repeating element in a given array of integers
Subarrays with equal 1s and 0s
Rearrange the array in alternating positive and negative items
Find if there is any subarray with a sum equal to zero
Find the Largest sum contiguous Subarray
Find the factorial of a large number
Find Maximum Product Subarray
Find the longest consecutive subsequence
Find the minimum element in a rotated and sorted array
Max sum in the configuration
Minimum Platforms
Minimize the maximum difference between the heights
Minimum number of jumps to reach the end
Stock Span problem
Find a triplet that sums to a given value
Smallest positive missing number
Find the row with a maximum number of 1’s
Print the matrix in a Spiral manner
Find whether an array is a subset of another array
Implement two Stacks in an array
Majority Element
Wave Array
Trapping Rainwater
Maximum Index
Max sum path in two arrays
Find Missing And Repeating
Stock buy and sell Problem
Pair with the given sum in a sorted array
Chocolate Distribution Problem
Partition Equal Subset Sum
Smallest Positive integer that can’t be represented as a sum
Coin Change Problem
Longest Alternating subsequence
1. Write a program to print the marks obtained by a student in five tests.

2. Write a program to print the average marks obtained by a student in five tests.

3. Write a program to print a string using an array.

4. Write a program to input a string through the keyboard and print the same.

5. Write a program to find the sum of negative and positive integers.

6. Write a program to find the sum of N numbers in an array

7. Write a program to find the smallest element in the array

8. Write a program to find the largest element in the array

9. Write a program to find the 2nd smallest element in the array

10. Write a program to find the 2nd largest element in the array

11. Write a program to Print the Average of Numbers in array at an even position  

12. Write a program to Print the Average of Numbers in array at an odd position  

13. Write a program to print array elements in reverse order.

14. Write a program to print array elements in reverse order using the swapping method.

15. Write a program to separate even and odd numbers in an array.

16. Write a program to print the frequency of all numbers in an array.

17. Write a program to print the most occurring elements.

18. Write a program to separate even and odd position numbers in an array.

19. Write a program to separate positive and negative numbers in an array.

20. Write a program to print lists of occurring elements in an array.

21. Write a program to insert an element into an array at a specified position 

22. Write a program to delete a specified integer in an array

23. Write a program to search a specified integer in an array

24. Write a program to find the array type 

25. Write a program to sort the elements of an array 

26. Write a program to count distinct elements of an array

27. Write a program to remove duplicate elements in an array

28. Write a program to check if two arrays are the same or not.

29. Write a program to check if two arrays are disjoint or not.

30. Write a program to check if one array is a subset of another array or not.

31. Write a Program to Find the index of an element in an array.

32. Write a Program to Sort an array in Descending order.

33. Write a Program to Merge two unsorted arrays of different lengths.

34. Write a Program to remove an element from an array by index.

35. Write a Program to Find a pair with a given sum in the array.

36. Write a Program to Find two elements whose sum is closest to zero in an Array

37. Write a Program to Move all zeros to the end of an Array.

38. Write a Program to Move all zeros to the Start of an Array.

39. Write a Program to Find the mean and median of an unsorted array.

40. Write a Program to Segregate 0s and 1s in an array.

41. Write a Program to Find the median of two sorted arrays of different sizes.

42. Write a Program to Find the median of two unsorted arrays.

43. Write a Program to Find the Max sum contiguous subarray.

44. Write a Program to Find a pair with maximum product in an array.

45. Write a Program to Find the maximum product of 3 numbers in an array.

46. Write a Program to Count inversions in an array.

47. Write a Program to sort an array of 0s, 1s, and 2s.

48. Write a program to find Maximum the difference between two elements in an array.

49. Write a program to Find the Minimum difference between two elements in an array.

50. Write a Program to Find missing numbers in an array.



Matrix or 2D Array-related problems.

1. Write a Program to read and display a Matrix.

2. Write a Program to Find the sum of all elements in a 2d array or Matrix.

3. Write a Program to find the addition of two matrices.

4. Write a Program to find the multiplication of two matrices.

5. Write a Program to the Subtraction of two matrices.

6. Write a Program to print the square of each element of the 2d array or matrix.

7. Write a Program to find the transpose of a matrix.

8. Write a Program to accept two matrices and check whether they are equal or Not.

9. Write a Program to check whether a given matrix is an identity matrix or not.

10. Write a Program to find whether the given is the matrix is diagonal or not.

11. Write a Program to check whether a matrix is a scalar or not.

12. Write a Program to find the sum of all diagonal elements of a matrix.

13. Write a Program to check whether a matrix is sparse or not.

14. Write a Program to display a lower triangular matrix.

15. Write a Program to display an upper triangular matrix.

16. Write a Program to check whether a matrix is symmetric or not.

17. Write a Program to find the normal and trace of a matrix.

18. Write a Program to find the sum of an upper triangular matrix.

19. Write a Program to find the sum of a lower triangular matrix.

20. Write a Program to find the maximum element in the matrix.

21. Write a Program to find the minimum element in the matrix.

22.  Write a Program to find the position of an element in a 2d array or Matrix.


Learn MSBI | SSIS , SSAS and SSRS -----



Linear Search
Binary Search
Jump Search
Interpolation Search
Exponential Search
Sublist Search (Search a linked list in another list)
Fibonacci Search
The Ubiquitous Binary Search
Recursive program to linearly search an element in a given array
Recursive function to do substring search
Unbounded Binary Search Example (Find the point where a monotonically increasing function becomes positive first time)






