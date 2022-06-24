function storePersoToDelete(persoIDToDelete){
    document.getElementById("persoIDToDelete").value = persoIDToDelete.toString();
}

let listePersonnagesString = document.currentScript.getAttribute('listPersonnages').replaceAll("\\","");
let listPersonnages = JSON.parse(listePersonnagesString.slice(1,listePersonnagesString.length-1));
