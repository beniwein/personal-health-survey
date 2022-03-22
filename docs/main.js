// Page 1 + 3 + 5: Slider-Validation:

function validateRange() {
    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'rangeIndex') {
        // Prüfe, ob der Range Slider verändert wurde.
        if (!sliderChanged()) {
            setWarning("Bitte verändere die Position des Sliders.");
            return false;
        } 
  }
}

// Page 2: Radiobutton-Validation:
function validateRadio(){
    let radioButtons = document.getElementsByName(yesNo);
    for (let i = 0; i < radioButtons.length; i++){
        let radio = radioButtons[i];
        if (radio.checked == true) {
            return true;
        }        
    }
    setWarning("Please make your choice.");
    return false;
}

// Page 4: Checkbox-Validation: 

function validateCheckbox() {
    let array = [];
    let checkbox = document.querySelectorAll('input[checkbox]:checked');

    for (let i = 0; i < checkbox.length; i++) {
        array.push(checkbox[i].value);

    if (array.length === 0) {
        setWarning("Please click at least one Checkbox.");
        return false;
    }
    document.getElementById("checkboxValue").value = array.toString();
    }
  }

// Page 6-10: Number-Validation:
function validateNumber() {
    let value = document.getElementById("quantity").value;

    if (value == ""){
        setWarning("Input missing, please verify.");
        return false;
    }
}

// Validation-Warning, all Pages:
function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}    

/*
function validateQuestionMinimal() {
    // Die 'id' des input elements muss hier exakt eingetragen werden.
    // Damit ist diese Funktion nur in bestimmten Fällen wieder verwendbar.
    let inputElement = document.getElementById("text-input-field");
    let value = inputElement.value;

    // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
    if (!value) {
        // Früher mit alert("Bla bla ...");
        setWarning("Bitte gib einen Wert ein.");
        return false;
    }
}

function validateQuestion(inputID, radioName) {
    // MUSS FÜR VERSCHIEDENE TYPEN VON INPUT FELDERN FUNKTIONIEREN.
    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
        // Prüfe, ob der Range Slider verändert wurde.
        if (!sliderHasChanged()) {
            setWarning("Bitte verändere die Position des Sliders.");
            return false;
        }
    }
    else if (inputElement.type === 'radio') {
        let radioButtons = document.getElementsByName(yes_no);
        let selectedValue;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }

        if (!selectedValue) {
            setWarning("Bitte wähle aus, bevor du weitergehst.");
            return false;
        }
    }
    else {
        // Prüfe den 'generellen' Fall für Text-, Zahlenfelder etc.
        let value = inputElement.value;

        // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
        if (!value) {
            // Früher mit alert("Bla bla ...");
            setWarning("Bitte gib einen Wert ein.");
            return false;
        }
    }
}

function sliderChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}
*/