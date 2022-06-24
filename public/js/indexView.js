function displayPersonnage(listPersonnages){
    let tbody = document.getElementsByName('tbody');
    for (let personnage of listPersonnages) {
        let tr = document.createElement('tr');
        let pseudo = personnage.pseudo;
        let race = personnage.race;
    }
}
function storePersoToDelete(persoIDToDelete){
    document.getElementById("persoIDToDelete").value = persoIDToDelete.toString();
}

function getInfoPersonnage(persoID){
    for (let personnage of listPersonnages) {
        if(personnage.personnage_id === persoID){
            return personnage;
        }
    }
}

function fillForm(persoID){
    const infoPerso = getInfoPersonnage(persoID);
    console.log(infoPerso);
    let form = document.getElementById("editForm").elements;

    // personnage_id:
    document.getElementById("persoIDToEdit").value = infoPerso.personnage_id;

    // pseudo:
    form['pseudo'].value = infoPerso.pseudo;

    //race:
    for (let option of form['race'].options) {
        if(option.value == infoPerso.race_id){
            option.selected = true;
        }
    }

    //pv
    form['pv'].value = infoPerso.pv;

    //armure:
    for (let option of form['armure'].options) {
        if(option.value == infoPerso.armure_id){
            option.selected = true;
        }
    }

    //classe:
    for (let option of form['classe'].options) {
        if(option.value == infoPerso.classe_id){
            option.selected = true;
        }
    }

    //specialisation:
    updateSpecialisationSelectEdit();

    for (let option of form['specialisation'].options) {
        if(option.value == infoPerso.specialisation_id){
            option.selected = true;
        }
    }
}




let listePersonnagesString = document.currentScript.getAttribute('listPersonnages').replaceAll("\\","");
let listPersonnages = JSON.parse(listePersonnagesString.slice(1,listePersonnagesString.length-1));
