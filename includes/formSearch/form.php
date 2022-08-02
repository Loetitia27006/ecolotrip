<link rel="stylesheet" href="form.css">

<div class="subtext">
    <a class="typeTravel" href="#">Séjours</a>
    <a class="typeTravel2 travelTract" href="#">Hébergement </a>
    <a class="typeTravel2" href="#">Transport</a>
</div>
<div class="form">



    <form action="index.php" method="post">
        <div class="search">
            <input type="text" name="search" placeholder="Départ">
            <input type="text" name="search" placeholder="Destination">
        </div>
        <div class="box">
            <div class="date">
                <input id="dateRetour" type="date" name="date" placeholder="Date de départ">
                <input id="dateRetour" type="date" name="date" placeholder="Date de retour">
                <input id="voyageur" type="number" name="voyageurs" id="" min="1" placeholder="voyageur">
               
            </div>
            <div class="filter">
                    <button type="image" src="../../images/filtre.svg" alt=""></button>
                </div>
            <div id = "filtre" class = "modalFiltre">
                <div class = "budget">
                    <h2>Budget</h2>
                    <label for="budget">prix mini</label>
                    <input type="text" name="budget" value="0">
                    <label for="budget">prix maxi</label>
                    <input type="text" name="budget" value="0">
                </div>
                <div>
                    <h2>Expérience</h2>
                    <div class = "experience">

                    
                    <input type="checkbox" name="experience" id="famille" value ="famille">
                    <label for="experience"> famille</label>
                    <input type="checkbox" name="experience" id="enAmoureux" value = "enAmoureux">
                    <label for="en amoureux"> en amoureux</label>
                    <input type="checkbox" name="experience" id="entreAmis" value = "entreAmis">
                    <label for="entre amis">entre amis</label>
                    <input type="checkbox" name="experience" id="bienEtre" value = "bienEtre">
                    <label for="bien etre">bien-être</label>
                    <input type="checkbox" name="experience" id="nature" value = "nature">
                    <label for="nature">nature</label>
                    <input type="checkbox" name="experience" id="insolite" value = "insolite">
                    <label for="insolite">insolite</label>
                    <input type="checkbox" name="experience" id="sport" value = "sport">
                    <label for="sport">sport</label>
                    <input type="checkbox" name="experience" id="culture" value = "culture">
                    <label for="culture">culture</label>
                    </div>
                </div>
                <div class="destination">
                    <h2>Type de destination</h2>
                    <input type="checkbox" name="destination" id="plage" value ="plage">
                    <label for="plage">plage</label>
                    <input type="checkbox" name="destination" id="ville" value = "ville">
                    <label for="ville">ville</label>
                    <input type="checkbox" name="destination" id="mer" value = "mer">
                    <label for="mer">mer</label>
                    <input type="checkbox" name="destination" id="campagne" value = "campagne">
                    <label for="campagne">campagne</label>
                    <input type="checkbox" name="destination" id="montagne" value = "montagne">
                    <label for="montagne">montagne</label>
                </div>
                <div class="escales">
                    <h2>Escale</h2>
                    <input type="radio" name="escales" id="escales" value ="escales">
                    <label for="escales">oui</label>
                    <input type="radio" name="escales" id="escales" value ="escales">
                    <label for="escales">non</label>
                </div>
                <div class="hebergement">
                    <h2>Hébergement</h2>
                    <input type="checkbox" name="hebergement" id="hotel" value ="hotel">
                    <label for="hotel">hotel</label>
                    <input type="checkbox" name="hebergement" id="chambreDHotes" value ="chambreDHotes">
                    <label for="chambreDHotes">chambres d'hôtes</label>
                    <input type="checkbox" name="hebergement" id="camping" value ="camping">
                    <label for="camping">camping</label>
                    <input type="checkbox" name="hebergement" id="gite" value ="gite">
                    <label for="gite">gite</label>
                </div>
                <div class="transport">
                    <h2>Type de transport</h2>
                    <input type="checkbox" name="transport" id="avion" value ="avion">
                    <label for="avion">avion</label>
                    <input type="checkbox" name="transport" id="covoiturage" value ="covoiturage">
                    <label for="covoiturage">covoiturage</label>
                    <input type="checkbox" name="transport" id="bus" value ="bus">
                    <label for="bus">bus</label>
                    <input type="checkbox" name="transport" id="voiture" value ="voiture">
                    <label for="voiture">voiture</label>
                    <input type="checkbox" name="transport" id="transport" value="bateau">
                    <label for="bateau">bateau</label>
                </div>

            </div>
        </div>
        <div class="button">
            <button>Valider</button>
        </div>
    </form>
</div>
<script src="./form.js"></script>