function getClasseSpecialisation(listSpecialisation, select){
    let classeSpecialisations = [];
    for (let specialisation of listSpecialisation) {
        if(specialisation.classe_id == select){
            classeSpecialisations.push(specialisation)
        }
    }
    return classeSpecialisations;
}

function addOptions(listSpecialisations, select){
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

function updateSpecialisationSelectCrea(){
    removeOptions(inputSpeCrea);
    addOptions(getClasseSpecialisation(listSpecialisation, inputClasseCrea.value), inputSpeCrea);
}

function updateSpecialisationSelectEdit(){
    removeOptions(inputSpeEdit);
    addOptions(getClasseSpecialisation(listSpecialisation, inputClasseEdit.value), inputSpeEdit);
}




let listeSpecialisationString = document.currentScript.getAttribute('listSpecialisation').replaceAll("\\","");
let listSpecialisation = JSON.parse(listeSpecialisationString.slice(1,listeSpecialisationString.length-1));

let formCrea = document.getElementById("createForm").elements;
let formEdit = document.getElementById("editForm").elements;

let inputClasseCrea = formCrea["classe"];
let inputSpeCrea = formCrea["specialisation"];
let inputClasseEdit = formEdit["classe"];
let inputSpeEdit = formEdit["specialisation"];



addOptions(getClasseSpecialisation(listSpecialisation, inputClasseCrea.value), inputSpeCrea);
addOptions(getClasseSpecialisation(listSpecialisation, inputClasseEdit.value), inputSpeEdit);

inputClasseCrea.addEventListener('change', updateSpecialisationSelectCrea, false);

inputClasseEdit.addEventListener('change', updateSpecialisationSelectEdit, false);
