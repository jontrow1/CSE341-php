function buttonClicked() {
    alert("Clicked!")
}

function changeColor() {
    // This takes the textbox alue based on it's id and places it into the background color style of the first dv based on it's id.
    document.getElementById("box1").style.backgroundColor = document.getElementById("colorText").value;
}