document.addEventListener("DOMContentLoaded", function() {
    document.forms["message"].addEventListener("submit", function(event){
        event.preventDefault(); 
        let nev = document.getElementById('name').value.trim();
        let email = document.getElementById('email').value.trim();
        let targy = document.getElementById('subject').value.trim();
        let uzenet = document.getElementById('message').value.trim();

        if (nev === "" || email === "" || targy === "" || uzenet === "") {
            window.alert("Minden mezőt ki kell tölteni az üzenet elküldéséhez!");
        } else {
            window.alert("Az üzenet elküldése sikeres!");
            document.forms["message"].reset();
        }
    });
});

function feliratkozas(){
    let sub = document.getElementById('sub').value.trim();
    if(sub == ""){
        window.alert("Meg kell adnia egy email címet a feliratkozáshoz!");
    }else{
        window.alert("Feliratkozott a hírlevélre!");
    }
};

function jelent(){
    alert("A jelentkezést elküldte az oktatónak.");
}