<form method="POST" action="{{route('personnage.edit')}}" id="editForm">
    @csrf
    <div class="modal fade" id="formEditPersoModal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">EDITION DU PERSONNAGE ✏</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="persoIDToEdit" id="persoIDToEdit" value="-1">

                    <div class="mb-2">
                        <label for="pseudo" class="form-label">Pseudo</label>
                        <input type="text" class="form-control" id="pseudo" name="pseudo" required>
                    </div>

                    <div class="mb-2">
                        <label for="race" class="form-label">Race</label>
                        <select class="form-select" id="race" name="race">
                            <?php
                            foreach($listRace as $race){
                                echo("<option value=\"{$race->race_id}\">{$race->nom}</option>");
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-2 col-3">
                        <label for="pv" class="form-label">Point de vie</label>
                        <input type="number" class="form-control" id="pv" name="pv" min="1" max="100" value="1">
                    </div>

                    <div class="mb-2">
                        <label for="armure" class="form-label">Armure</label>
                        <select class="form-select" id="armure" name="armure">
                            <?php
                            foreach($listArmure as $armure){
                                echo("<option value=\"{$armure->armure_id}\">{$armure->materiau}</option>");
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="classe" class="form-label">Classe</label>
                        <select class="form-select" id="classe" name="classe">
                            <?php
                            foreach($listClasse as $classe){
                                echo("<option value=\"{$classe->classe_id}\">{$classe->nom}</option>");
                            }
                            ?>
                        </select>
                    </div>

                    <div class="mb-2">
                        <label for="specialisation" class="form-label">Specialisation</label>
                        <select class="form-select" id="specialisation" name="specialisation">

                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary">Editer</button>
                </div>
            </div>
        </div>
    </div>
</form>

