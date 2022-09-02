<footer class="d-block bg-light mt-6 w-100 text-dark">
    <div class="d-flex flex-row justify-content-around align-items-center py-3" style="background-color: #99A5C5 !important;width:100%">
        <p class="col-4">
            Vous pouvez retrouver le groupe de jeu nantais ici :
            <br>
            <a href="https://discord.gg/pd9fgTe" target="_blank"><i class="fa-brands fa-discord"></i></a>
            <a href="https://discord.gg/pd9fgTe" target="_blank">Discord</a>
            <br>
            <a href="https://groups.google.com/g/vtes-nantes/about" target="_blank"><i class="fa-solid fa-user-group"></i></a>
            <a href="https://groups.google.com/g/vtes-nantes/about" target="_blank">vtes-nantes</a>
            <br>Code source du site :
            <a href="https://github.com/Spigushe/vtes-website" target="_blank" rel="noreferrer"><i class="fa-brands fa-github"></i></a>
            <a href="https://github.com/Spigushe/vtes-website" target="_blank" rel="noreferrer">GitHub</a>

        </p>
        <p class="col-4">
            Ce site est un contenu de fan non officiel.
            <br>Ni approuvé, ni promu par
            <a href="https://www.blackchantry.com/" target="_blank">Black Chantry Productions</a>
            <br>Certaines parties des matériaux utilisés sont la propriété de Black Chantry Productions.
            <br>© <a href="https://www.blackchantry.com/" target="_blank">Black Chantry Productions</a>.
            <br>™ <a href="https://www.paradoxinteractive.com/" target="_blank">Paradox Interactive AB.</a>
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script>
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (
        (document.body.scrollTop > 80)
        || (document.documentElement.scrollTop > 80)
    )
    {
        document.getElementById("vtes").classList.remove("col-md-2");
        document.getElementById("vtes").classList.add("col-md-1");
    } else {
        document.getElementById("vtes").classList.remove("col-md-1");
        document.getElementById("vtes").classList.add("col-md-2");
    }
}

function resetLink(tagName) {
    var element = document.getElementsByTagName(tagName);
    for (let elt of element) {
        var aTags = elt.getElementsByTagName("a");
        for (let aTag of aTags) {
            aTag.classList.add("text-reset");
        }
    }
}
resetLink("article");
resetLink("footer");
</script>
</body>
</html>
