<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <div class="modal-container-add">
    <div class="overlay"></div>
    <div class="modal">
        <button class="close-modal modal-trigger-add">Annuler</button>
        <center><div class="text"><p class="title">Ajouter un élément.</p></div>
        <form action="includer/popup/action/add-pf.php" method="POST">
            <span class="img"><label>Lien de l'image</label><input class="input-txt" type="text" name="image" placeholder="imgur.com/..." require></span></br></br>
            <span class="monochrome"><label>Monochrome</label><input class="checkbox" type="checkbox" name="monochrome"></span></br></br>
            <span class="titre"><label>Titre</label><input class="input-txt" type="text" name="title" placeholder="Silvus Site" require></span></br></br></br>
            <textarea id="textarea" onkeyup="charCount();" name="description" placeholder="Lorem Ipsum" require></textarea></center>
            <p id="textarea_count">0/160 caractères max</p>
            <button name="button" type="submit" class="add">Ajouter</button>
        </form>
        
    </div>
    <script>
        function charCount(){
            var element=document.getElementById('textarea').value.lenght;
            document.getElementById('textarea_count').innerHTML=element="/160 caractères max";
        }
    </script>
    </body>
</html> 