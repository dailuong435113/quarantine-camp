function check() {
    var arr = document.getElementByTagName('input');
    var firstname = arr[0].value;
    var lastname = arr[1].value;
    var contact = arr[2].value;
    var address = arr[3].value;
    var sp02 = arr[4].value;
    var res_rate = arr[5].value;
    //Symtoms
    var check1 = arr[7].checked;
    var check2 = arr[8].checked;
    var check3 = arr[9].checked;
    var check4 = arr[10].checked;
    var check5 = arr[11].checked;
    var check6 = arr[12].checked;
    var check7 = arr[13].checked;
    var check8 = arr[14].checked;
    var check9 = arr[15].checked;
    var check10 = arr[16].checked;
    var check11 = arr[17].checked;
    //Genders
    var gender = "";
    var symptoms = "";
    if(arr[6].checked) {
        gender = "Male";
    } else {
        gender = "Female";
    }
    //Is symptoms
    for(var i=7; i<=17; i++) {

    }
    //Is empty?
    if (firstname == "" || lastname == "" || contact == "" || address == "" || sp02 == "" || res_rate == "") {
        alert("Please fill all fields");
        return;
    }
    //Is number?
    if(isNaN(contact) || isNaN(sp02) || isNaN(res_rate)) {
        alert("It must be a number");
        return;
    }
    //Is check?
    if(check1 || check2 || check3) {
        
    } else {
        alert("At least one symptom must be checked");
        return;
    }
    var choice = confirm('Confirm your information\n' + firstname + "\n" + lastname + "\n" + contact + "\n" + address + "\n" + gender + "\n" + symptoms + "\n" + comorbidities + "\n" + pcr_test + "\n" + quick_test + "\n" + sp02 + "\n" + res_rate );
    if(choice == 1) {
        alert("Saved");
    }
}
