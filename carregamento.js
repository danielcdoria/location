let number = document.querySelector("#number");
let counter = 0;
setInterval(() => {
    if (counter == 35){
        clearInterval();
    }else{
        counter += 1;
    number.innerHTML = counter + "%";
    }
    
}, 55);

                           
let number2 = document.querySelector("#number2");
let counterr = 0;
setInterval(() => {
    if (counterr == 25){
        clearInterval();
    }else{
        counterr += 1;
    number2.innerHTML = counterr + "%";
    }
    
}, 70);

let number3 = document.querySelector("#number3");
let counterrr = 0;
setInterval(() => {
    if (counterrr == 40){
        clearInterval();
    }else{
        counterrr += 1;
    number3.innerHTML = counterrr + "%";
    }
    
}, 50);