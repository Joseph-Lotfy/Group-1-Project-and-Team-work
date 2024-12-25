let calc = document.getElementById('calc');
let head = document.getElementById('head');
calc.addEventListener('click', function(e){
    if(e.target.closest('.num')){
        let num = e.target.closest('.num');
        let val = num.innerHTML;
        console.log(val)
        if(val === "="){
            try {
                head.value = math.evaluate(head.value);
            } catch (error) {
                head.value = "Error"; // If there's an error in evaluation, display it
            }
        }
        else if(val === 'x'){
            head.value = head.value.slice(0,-1);
        }
        else if(val === 'Π'){
            head.value += '3.14';
        }
        else if(val === 'e'){
            head.value += '2.718';
        }
        else if(val === 'sin'){
            head.value += 'sin(';
        }
        else if(val === 'cos'){
            head.value += 'cos(';
        }
        else if(val === 'tan'){
            head.value += 'tan(';
        }
        else if(val === 'log'){
            head.value += 'log10(';
        }
        else if(val === 'ln'){
            head.value += 'log(';
        }
        else if(val === 'x^2'){
            head.value += '^2';
        }
        else if(val === 'x^3'){
            head.value += '^3';
        }
        else if(val === '√'){
            head.value += 'sqrt(';
        }
        else if(val === 'exp'){
            head.value += 'exp(';
        }
        else{
            head.value += val;
            console.log(val);
        }
    }
    else if(e.target.closest('.C')){
        head.value = "";
    }
});
// Event listener for pressing the Enter key in the input field
head.addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault(); // Prevent the default behavior of the Enter key (form submission or new line)
        try {
            head.value = math.evaluate(head.value); // Evaluate the expression in the input field
        } catch (error) {
            head.value = "Error"; // Display "Error" if there's an issue with the calculation
        }
    }
});