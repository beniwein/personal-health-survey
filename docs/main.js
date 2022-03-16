function display(wrapper2) { 
    if(document.getElementById('yes').checked) {
        document.getElementById("outputPage2").innerHTML
            = document.getElementById("yes").value
            + " YES button checked";
    }
    else if(document.getElementById('no').checked) {
        document.getElementById("outputPage2").innerHTML
            = document.getElementById("no").value
            + " NO button checked";  
    }
    else {
        document.getElementById("outputPage2").innerHTML
            = "Nothing selected";
    }
}