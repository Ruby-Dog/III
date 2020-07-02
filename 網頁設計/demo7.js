function displayWeight() {
    var myRange = document.getElementById("rangeWeight");
    var myLabel = document.getElementById("lblWeight");

    myLabel.innerHTML = myRange.value + "Kg";
}

function checkFormData() {
    var myEmail = document.forms["form1"]["email"].value;

    if (myEmail == "") {
        alert("請輸入Email");
            return false;
    }
}