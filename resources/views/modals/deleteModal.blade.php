<form method="POST" action="{{route('personnage.delete')}}" id="deleteForm">
    @csrf
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal-title">❗ ATTENTION ❗</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Etes vous sures de vouloir supprimer ce personnage ?</p>
                    <input type="hidden" name="persoIDToDelete" id="persoIDToDelete" value="-1">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </div>
            </div>
        </div>
    </div>
</form>
