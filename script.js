console.log("salut");



function showDiv() {
    var madiv=document.getElementById('listecommerce');
    if(madiv.style.display === "none"){
    madiv.style.display = "block";
    }
    else {
        madiv.style.display = "none";
    }
 }