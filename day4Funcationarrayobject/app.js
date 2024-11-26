let userInput = prompt ("Enter the number");
let ans = getNumber (userInput);
console.log ("User input number is :"+ans);

function getNumber (number){ // number is the parameter that used to catched the value from its function call or it can valuse itself.
    return (number);
}

function assign (football = "Addidas"){
    console.log (football);
}
assign ();