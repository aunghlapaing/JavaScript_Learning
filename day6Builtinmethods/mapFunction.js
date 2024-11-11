//Map function is mainly used to check the condition and return the true : false as a new array.

let userName = ['aung hla', 'makao', 'izzy', 'bathat'];

let mapFunction = userName.map (function (name){
    return name == "aung hla";
})
console.log(mapFunction);
