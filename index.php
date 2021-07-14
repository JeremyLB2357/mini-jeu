<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/style.css">
    <title>Le mini-jeu pour apprendre</title>
</head>
<body>
    <header>
        <h1>Apprendre PHP en orienté objet</h1>
    </header>
    <main>
        <section>
            <h2>Etape 1: créer ton perso</h2>
            <p>
                Si tu n'as pas encore de personnage, renseigne les champs suivant. <br>
                Sinon, passe directement à l'étape suivante.
            </p>
            <form method="post" action="./script/creation_perso.php">
                <input type="text" placeholder="Nom de personnage" id="nom" name="nom" require>
                <div>
                    <input type="radio" name="classe" id="guerrier" value="guerrier" checked>
                    <label for="guerrier">Guerrier</label><br>
                    <input type="radio" name="classe" id="magicien" value="magicien">
                    <label for="magicien">Magicien</label><br>
                    <input type="radio" name="classe" id="ranger" value="ranger">
                    <label for="ranger">Ranger</label><br>
                </div>
                <button class="btn" type="submit">Créer ton perso</button>
            </form>
        </section>
        <section>
            <form method="get" action="./script/test.php">
                <h2>Etape de test</h2>
                <button class="btn"  type="submit">Lancer le test</button>
            </form>
        </section>
        <section>
            <h2>Espace admin</h2>
            <form method="post" action="./script/creation_table.php">
                <p>ajoute une table pour enrichir le jeu</p>
                <input type="text" placeholder="nom de la table" name="table_nom" id="table_nom" require>
                <button class="btn"  type="submit">Créer une table</button>
            </form>
            <form method="post" action="./script/remplir_table.php">
                <p>remplis ta table pour enrichir le jeu</p>
                <select name="table" id="table">
                    <option value="equipement">equipement</option>
                    <option value="terrain">terrain</option>
                    <option value="objet">objet</option>
                </select>
                <button class="btn"  type="submit">Remplir une table</button>
            </form>
        </section>
    </main>
    

</body>
</html>