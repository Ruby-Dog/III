function checkFormData() {
    var myEmail = document.forms["form1"]["email"].value;

    if (myEmail == "") {
        alert("請輸入Email");
            return false;
    }
}