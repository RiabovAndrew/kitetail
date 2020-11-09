<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/fun.css">

</head>
<body>

@include('inc.header')
@include('inc.body')
@yield('content')
@include('inc.footer')



<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script>
    // self executing function here
    (function() {

        // Get all the keys from document
        var keys = document.querySelectorAll('#calculator span');
// var keys = document.querySelectorAll('#calculator > div.keys > span:nth-child(6)');
        var operators = ['+', '-', 'x', '÷'];
        var decimalAdded = false;

// Add onclick event to all the keys and perform operations
        for(var i = 0; i < keys.length; i++) {
            keys[i].onclick = function(e) {
                // Get the input and button values
                var input = document.querySelector('.screen');
                var inputVal = input.innerHTML;
                var btnVal = this.innerHTML;

                // Now, just append the key values (btnValue) to the input string and finally use javascript's eval function to get the result
                // If clear key is pressed, erase everything
                if(btnVal == 'C') {
                    input.innerHTML = '';
                    decimalAdded = false;
                }

                // If eval key is pressed, calculate and display the result
                else if(btnVal == '=') {
                    var equation = inputVal;
                    var lastChar = equation[equation.length - 1];

                    // Replace all instances of x and ÷ with * and / respectively. This can be done easily using regex and the 'g' tag which will replace all instances of the matched character/substring
                    equation = equation.replace(/x/g, '*').replace(/÷/g, '/');

                    // Final thing left to do is checking the last character of the equation. If it's an operator or a decimal, remove it
                    if(operators.indexOf(lastChar) > -1 || lastChar == '.')
                        equation = equation.replace(/.$/, '');

                    if(equation)
                        input.innerHTML = eval(equation);

                    decimalAdded = false;
                }

                    // Basic functionality of the calculator is complete. But there are some problems like
                    // 1. No two operators should be added consecutively.
                    // 2. The equation shouldn't start from an operator except minus
                    // 3. not more than 1 decimal should be there in a number

                    // We'll fix these issues using some simple checks

                // indexOf works only in IE9+
                else if(operators.indexOf(btnVal) > -1) {
                    // Operator is clicked
                    // Get the last character from the equation
                    var lastChar = inputVal[inputVal.length - 1];

                    // Only add operator if input is not empty and there is no operator at the last
                    if(inputVal != '' && operators.indexOf(lastChar) == -1)
                        input.innerHTML += btnVal;

                    // Allow minus if the string is empty
                    else if(inputVal == '' && btnVal == '-')
                        input.innerHTML += btnVal;

                    // Replace the last operator (if exists) with the newly pressed operator
                    if(operators.indexOf(lastChar) > -1 && inputVal.length > 1) {
                        // Here, '.' matches any character while $ denotes the end of string, so anything (will be an operator in this case) at the end of string will get replaced by new operator
                        input.innerHTML = inputVal.replace(/.$/, btnVal);
                    }

                    decimalAdded =false;
                }

                // Now only the decimal problem is left. We can solve it easily using a flag 'decimalAdded' which we'll set once the decimal is added and prevent more decimals to be added once it's set. It will be reset when an operator, eval or clear key is pressed.
                else if(btnVal == '.') {
                    if(!decimalAdded) {
                        input.innerHTML += btnVal;
                        decimalAdded = true;
                    }
                }

                // if any other key is pressed, just append it
                else {
                    input.innerHTML += btnVal;
                }

                // prevent page jumps
                e.preventDefault();
            }
        }


    })();
</script>
{{--<link rel="stylesheet" href="/js/app.js">--}}

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">


</body>
