//Filter function is used to search data

let userInfo = ['Aung Hla', 20, 'Programmer'];

let result = userInfo.filter (function(info){
    return info == "Aung Hla";
})

console.log (result);