<form id="formulaire" action="index.php?ctrl=groupes&action=creergroupe" method="post" enctype="multipart/form-data">
    <label for="liste">Insérer votre liste d'élèves (format : .csv)</label>
    <input type="file" id="liste" name="liste"/>
    <label for="nbEleves">Nombre d'élèves par groupe : </label>
    <input type="number" id="nbEleves" name="nbElevesMax"/>
    <button type="submit">Go !</button>
</form>
