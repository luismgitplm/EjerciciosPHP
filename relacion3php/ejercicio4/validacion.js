document.getElementById('form').addEventListener("submit",function(event){
    event.preventDefault();

    var num = Number(document.getElementById("num").value);

     if (!Number.isInteger(num) || num <= 0) {
            alert('Por favor, introduce un número natural (1, 2, 3, …).');
    } else {
        document.getElementById("form").submit();
    }
});