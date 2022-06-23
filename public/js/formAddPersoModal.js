function getClasseSpecialisation(listSpecialisation){
    let classeSpecialisations = [];
    for (let specialisation of listSpecialisation) {
        if(specialisation.classe_id == classe.value){
            classeSpecialisations.push(specialisation)
        }
    }
    return classeSpecialisations;
}

function addOptions(listSpecialisations){
    let select = document.getElementById('specialisation');
    for (let specialisation of listSpecialisations) {
        let option = document.createElement('option');
        option.value = specialisation.specialisation_id;
        option.text = specialisation.type;
        select.add(option);
    }
}

function removeOptions(select) {
    while (select.options.length > 0) {
        select.remove(0);
    }
}

let listeSpecialisationString = document.currentScript.getAttribute('listSpecialisation').replaceAll("\\","");
let listSpecialisation = JSON.parse(listeSpecialisationString.slice(1,listeSpecialisationString.length-1));

addOptions(getClasseSpecialisation(listSpecialisation));

let select = document.getElementById('classe');

select.addEventListener('change', function () {
    removeOptions(document.getElementById('specialisation'));
    addOptions(getClasseSpecialisation(listSpecialisation));
}, false);
