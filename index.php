<!DOCTYPE html>

<!-- © Thomas.Messina -->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="site.css" />
		<link rel="icon" type="image/png" href="img/exclamation.png" />
        <title>Référencement de Bug</title>
    </head>
    <body>
	<!-- Le JS... -->
<script type="text/javascript">
function toggle_div(bouton, id) { // On déclare la fonction toggle_div qui prend en param le bouton et un id
  var div = document.getElementById(id); // On récupère le div ciblé grâce à l'id
  if(div.style.display=="none") { // Si le div est masqué...
    div.style.display = "block"; // ... on l'affiche...
    bouton.innerHTML = "-"; // ... et on change le contenu du bouton.
  } else { // S'il est visible...
    div.style.display = "none"; // ... on le masque...
    bouton.innerHTML = "+"; // ... et on change le contenu du bouton.
  }
}
</script>
        <table class="reg">
            <tr>
                <td>
                    <img src="img/logo.png" alt="Referencement de Bug" />
                </td>
            </tr>
            <tr>
                <td>
                </td>
            </tr>
            <tr>
                <td>
                    <form action="" method="post" name="reg">
                        <table class="form">
                            <tr>
                                <td align="right">
                                    Titre du Post :
                                </td>
                                <td align="left">
                                    <input name="post" type="text" id="post" maxlength="45" />
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Type de BUG :
                                </td>
								 <td align="left">
                                    <select name="type" id="type">
										<option selected value="900"> Choisissez un type de BUG</option>
                                        <option value="0">Objet IG</option>
                                        <option value="1">Map</option>
                                        <option value="2">Quête</option>
										<option value="3">Donjon/instances/raid</option>
										<option value="4">PNJ</option>
										<option value="5">Boss(Script)</option>
										<option value="6">Autres</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                    Vous êtes :
                                </td>
								<td align="left">
                                    <select name="rang" id="rang">
										<option selected value="900">Un joueur</option>
                                        <option value="0">Un maître du jeu</option>
                                        <option value="1">Un modérateur</option>
                                        <option value="2">Un développeur</option>
										<option value="3">Un administrateur</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right">
                                     Screen(s) :
                                </td>
                                <td align="left">
                                    <input name="screen1" class="screen" type="text" maxlength="254"/>
									<!-- Un bouton avec '+' dedans, et un onclick qui appelle une fonction avec -->
									<!-- en param le bouton et l'id du div à afficher/masquer. -->
									<button type="button" onclick="toggle_div(this,'screen1');">+</button>
									<div id="screen1" style="display:none;">
											<input name="screen2" class="screen" type="text" maxlength="254" />
												<button type="button" onclick="toggle_div(this,'screen2');">+</button>
													<div id="screen2" style="display:none;">
														<input name="screen3" class="screen" type="text" maxlength="254" />
													</div>
									</div>
                                </td>
                            </tr>
							<tr>
                                <td align="right">
                                    Description :
                                </td>
                                <td align="left">
                                    <textarea rows="8" cols="50" name="description" id="description" tabindex="1"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" class="sbm" value="Suivant" id="suivant" name='suiv' />
                                </td>
                            </tr>
                        </table>
                    </form>
					<br />
                    <div class="copy">
                        Copyright ©2015 WoW.Carnage <br />
                        Page de référencement de bug en HTML/PHP/Javascript<br />
						Réalisé par Sanctarius  pour WoW-Carnage
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>