function displayPersonnage(listPersonnages){
    let tbody = document.getElementsByName('tbody');
    for (let personnage of listPersonnages) {
        let tr = document.createElement('tr');
        let pseudo = personnage.pseudo;
        let race = personnage.race;
    }
}

let persoIDToDelete;

function storePersoToDelete(persoID){
    persoIDToDelete=persoID;
    document.getElementById("persoIDToDelete").value = persoIDToDelete.toString();
}


let listePersonnagesString = document.currentScript.getAttribute('listPersonnages').replaceAll("\\","");
let listPersonnages = JSON.parse(listePersonnagesString.slice(1,listePersonnagesString.length-1));

console.log(listPersonnages);
