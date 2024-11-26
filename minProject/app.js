let result = document.getElementById ('result');


let temp = "";
 function getData (data){
    // console.log (data.innerHTML); //innerText

    let input = data.innerHTML;
    

    if (input == '='){
        //calculation
        console.log(eval(temp)); //eval () function
        result.innerHTML = eval (temp);// 2+1
        temp = eval (temp);
    }else{
        temp += input;
        console.log (temp);
        result.innerHTML = temp; 
       }
 }

 function clearForm (){
    result.innerHTML = 0;
    temp = "";
 }