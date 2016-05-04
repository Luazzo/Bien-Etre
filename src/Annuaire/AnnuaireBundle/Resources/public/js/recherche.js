(function () {
    var prestataire = document.getElementByName('prestataire'); 
    var localite = document.getElementByName('localite'); 
    var categorie = document.getElementByName('categorie'); 
    var bouton = document.getElementById('log'); 
    
    bouton.addEventListener("click", formValid, false);
    
    function formValid(){
        var valPrest = prestataire.value;
        var valLoc = localite.value;
        var valCat = categorie.value;
        
        if(valPrest !== "" && valLoc !== "" && valCat !== ""){
            alert("ok");
        }else{
            alert("non");
        }
    }
    
})();