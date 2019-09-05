function calc(){
    var num1 = document.getElementById("num1").value;
    var opt = document.getElementById("opt").value;
    var num2 = document.getElementById("num2").value;
    switch (opt) {
        case"+":
            var hasil = parseInt(num1)+parseInt(num2);
            document.getElementById("hasil").innerHTML = hasil;
            break;
        case "x":
            var hasil = parseInt(num1)*parseInt(num2);
            document.getElementById("hasil").innerHTML = hasil;
            break;
        case"-":
            var hasil = parseInt(num1)-parseInt(num2);
            document.getElementById("hasil").innerHTML = hasil;
            break;
        case":":
            var hasil = parseInt(num1)/parseInt(num2);
            document.getElementById("hasil").innerHTML = hasil;
            break;
    }
}

function calc2(){
    console.log(document.getElementById("statement").innerHTML.typeof);
}