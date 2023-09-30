let validate = () => {

    var $fname = document.getElementById("first_name").value;
    var $name = document.getElementById("name").value;
    var $email = document.getElementById("email").value;
    var $phone = document.getElementById("phone").value;

    var $alert_div = document.getElementById("div_alerts");


    if (($fname.length >= 3) && ($name.length >= 3) && ($email.length >= 3) && ($phone.length >= 3)) {

        refresh();

        $alert_div.innerHTML = "<h2 style = 'color : #33ff11'>Inputs submitted, trying to save...</h2>";

        to_database($fname, $name, $email, $phone);


    } else {

        refresh();
        $alert_div.innerHTML = "<h2 style = 'color : #ff3311'>An Error occurred, please refill inputs !</h2>";

    }
}

let to_json_object = () => {

}


let refresh = () => {
    document.getElementById("first_name").value = "";
    document.getElementById("name").value = "";
    document.getElementById("email").value = "";
    document.getElementById("phone").value = "";
    document.getElementById("delete_res").innerHTML = "";
    document.getElementById("update_res").innerHTML = "";
    document.getElementById('index').value = "";
    document.getElementById('index_update').value = "";
    document.getElementById('index_update').disabled = false;
}