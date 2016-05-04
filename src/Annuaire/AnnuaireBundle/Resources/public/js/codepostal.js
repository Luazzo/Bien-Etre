(function () {
    var localite = document.getElementById('prestataire_profile_localite_id'); 
    var codepost = document.getElementById('prestataire_profile_codepost_id');
    
    localite.addEventListener("change", catchLoc, false);
    $("#prestataire_profile_codepost_id").hide();
   
    function catchLoc(){
        var valLoc = localite.value;
        
            alert(valLoc);
        
    }
    
})();


