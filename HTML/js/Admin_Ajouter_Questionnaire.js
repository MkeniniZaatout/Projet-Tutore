var nbclic =0;
function ajoutReponse(div_id) {
    var id = 1;
    var content;
    var idReponse = "reponse-"+id;file:///E:/FirefoxDownload/Admin_Ajouter_Questionnaire(2).php
    var idSupprimer = "Sup-"+id;
    // Question/Reponse Choix Multiple ajouté a la div
    content = '<div id="' + idReponse + '" class="input-group"><span class="input-group-addon">Votre reponse :</span><input id="msg" type="text" class="form-control" name="choixMultiple[]" placeholder="Saisir la reponse" required></div><div id="' + idSupprimer + '"><label><input type="checkbox" name="radioChoix[]" id="True" value="true">Vrai</label><br><label><input type="checkbox" name="radioChoix[]" id="False" value="false">Fausse</label><br><input type="button" value="Supprimer la reponse"';
    content += "onclick='supprimerReponse(\""  + idReponse + "\",\"" + idSupprimer + "\")'></div>";

    var i;
    $("#"+div_id).append(content);

    id++;
    idReponse = "reponse-"+id;
    idSupprimer = "Sup-"+id;

    content += '<div id="' + idReponse + '" class="input-group"><span class="input-group-addon">Votre reponse :</span><input id="msg" type="text" class="form-control" name="choixMultiple[]" placeholder="Saisir la reponse" required></div><div id="' + idSupprimer + '"><label><input type="checkbox" name="radioChoix[]" id="True" value="true">Vrai</label><br><label><input type="checkbox" name="radioChoix[]" id="False" value="false">Fausse</label><br><input type="button" value="Supprimer la reponse"';
    content += "onclick='supprimerReponse(\""  + idReponse + "\",\"" + idSupprimer + "\")'></div>";
  }

  function ajoutReponseVraiFaux(div_id) {
    var id = 1;
    var content;
    // Question/Reponse Vrais ou faux  ajouté a la div
    content = '<div id="reponse-' + id + '" class="input-group"><p>Cocher vrais ou faux</p><label><input type="VRAIS" name="radioVraisFaux" type="radio" id="True">Vrai</label><br><label><input type="radio" name="radioVraisFaux" id="False">Fausse</label></div>';//'<div id="Sup-' + id + '<input type="button" value="Supprimer la reponse" onclick="supprimerReponse()">'
    var i;
    document.getElementById(div_id).innerHTML = content;
    $("#buttonAjoutVraiFaux").remove();
  }

  function ajoutReponseLibre(div_id){
    // nbclic++;
    // Id de la div reponse
    var id = 1;
    var content;
    var idReponse = "reponse-"+id;
    var idSupprimer = "Sup-"+id;
    // Question/Reponse Libre ajouté a la div
    content = '<div id="' + idReponse + '" class="input-group"><span class="input-group-addon">Votre reponse :</span><input id="libre" type="text" class="form-control" name="libre[]" placeholder="Saisir la reponse"></div><div id="' + idSupprimer + '"><input type="button" value="Supprimer la reponse"';
    content += "onclick='supprimerReponse(\""  + idReponse + "\",\"" + idSupprimer + "\")'></div>";

    var i;
    $("#"+div_id).append(content);

    id++;
    idReponse = "reponse-"+id;
    idSupprimer = "Sup-"+id;

    content += '<div id="' + idReponse + '" class="input-group"><span class="input-group-addon">Votre reponse :</span><input id="msg" type="text" class="form-control" name="libre[]" placeholder="Saisir la reponse"></div><div id="' + idSupprimer + '"><input type="button" value="Supprimer la reponse"';
    content += "onclick='supprimerReponse(\""  + idReponse + "\",\"" + idSupprimer + "\")'></div>";

  }

  function supprimerReponse(idReponse,idSupprimer){
    // $("#reponse-"+nbclic).remove();
    // $("#Sup-"+nbclic).remove();
    $("#"+idReponse).remove();
    $("#"+idSupprimer).remove();
    nbclic = nbclic -1;
  }

  function Enable(){
      $("#question").bind("change paste keyup", function() {
        if (document.getElementById("question").value == ''){
          console.log("Activation btn");
          $('#submitInput').prop('disabled', true);
        } else {
          console.log("desactivé btn");
          $('#submitInput').prop('disabled', false);
        }
      });
  }

  function onglet(){
    // Affichage de la premiere colonne 'Vrai/Faux'
    $("#typeChoixMulti:first").show();
    // si un clic est effectué sur les liens des type de reponse
    $(".typeReponse li a").click(function(){
      // on chache tous les div
      $(".typeReponseBlock").hide();
      // on affiche la div qui correspond au lien cliqué
      $("."+$(this).attr("role")).show();
      // On enleve la class active du li précédent
      $(".typeReponse li").removeClass("active");
      // ajout de la class "active" au li
      $(this).parent().addClass("active");
    });
  }

  function ongletImage(){
      $("#typeImage:first").show();
      // cache le contenue de la div typeImage
      $(".typeImageBlock").hide();
      // si un clic est effectué sur les liens des type de reponse
      $(".typeImage li a").click(function(){
        // on affiche la div qui correspond au lien cliqué
        $(".typeImageBlock").show();
        $(".typeImage li").removeClass("active");
        $(this).parent().addClass("active");
        // $(".typeImage li a").click(function(){$(".typeImageBlock").hide();});
      });// click function
  }


  loadimageQuestion = function (e){
                // on récupère le canvas où on affichera l'image
                var canvas = document.getElementById("vue");
                var ctx = canvas.getContext("2d");
                // on réinitialise le canvas: on l'efface, et déclare sa largeur et hauteur à 0
                // ctx.setFillColor("white");
                ctx.fillRect(0,0,canvas.width,canvas.height);
                canvas.width=0;
                canvas.height=0;
                // on récupérer le fichier: le premier (et seul dans ce cas là) de la liste
                var file = document.getElementById("imageQuestion").files[0];
                // l'élément img va servir à stocker l'image temporairement
                var img = document.createElement("img");
                // l'objet de type FileReader nous permet de lire les données du fichier.
                var reader = new FileReader();
                loadimageQuestion = function (e) {
                        // on récupère le canvas où on affichera l'image
                        var canvas = document.getElementById("vue");
                        var ctx = canvas.getContext("2d");
                        // on réinitialise le canvas: on l'efface, et déclare sa largeur et hauteur à 0
                        //ctx.fillStyle="white";
                        ctx.fillRect(0,0,canvas.width,canvas.height);
                        canvas.width=0;
                        canvas.height=0;
                        // on récupérer le fichier: le premier (et seul dans ce cas là) de la liste
                        var file = document.getElementById("imageQuestion").files[0];
                        // l'élément img va servir à stocker l'image temporairement
                        var img = document.createElement("img");
                        // l'objet de type FileReader nous permet de lire les données du fichier.
                        var reader = new FileReader();
                        // on prépare la fonction callback qui sera appelée lorsque l'image sera chargée
                        reader.onload = function(e) {
                            //on vérifie qu'on a bien téléchargé une image, grâce au mime type
                            if (!file.type.match(/image.*/)) {
                                // le fichier choisi n'est pas une image: le champs imageQuestion est invalide, et on supprime sa valeur
                                document.getElementById("imageQuestion").setCustomValidity("Il faut télécharger une image.");
                                document.getElementById("imageQuestion").value = "";
                              }
                              else {
                                // le callback sera appelé par la méthode getAsDataURL, donc le paramètre de callback e est une url qui contient
                                // les données de l'image. On modifie donc la source de l'image pour qu'elle soit égale à cette url
                                // on aurait fait différemment si on appelait une autre méthode que getAsDataURL.
                                img.src = e.target.result;
                                // le champs imageQuestion est valide
                                document.getElementById("imageQuestion").setCustomValidity("");
                                // var MAX_WIDTH = 96;
                                // var MAX_HEIGHT = 96;
                                var MAX_WIDTH = 125;
                                var MAX_HEIGHT = 125;
                                var width = img.width;
                                var height = img.height;

                                // A FAIRE: si on garde les deux lignes suivantes, on rétrécit l'image mais elle sera déformée
                                // Vous devez supprimer ces lignes, et modifier width et height pour:
                                //    - garder les proportions,
                                //    - et que le maximum de width et height soit égal à 96
                                if(width > height)
                                {
                                  height = (height*MAX_HEIGHT)/width;
                                  width = MAX_WIDTH;
                                }
                                else if(height > width)
                                {
                                  width = (width*MAX_WIDTH)/height;
                                  height = MAX_HEIGHT;
                                }
                                else
                                {
                                  height = MAX_HEIGHT;
                                  width = MAX_WIDTH;
                                }
                                canvas.width = width;
                                canvas.height = height;
                                // on dessine l'image dans le canvas à la position 0,0 (en haut à gauche)
                                // et avec une largeur de width et une hauteur de height
                                ctx.drawImage(img, 0, 0, width, height);
                                // on exporte le contenu du canvas (l'image redimensionnée) sous la forme d'une data url
                                var dataurl = canvas.toDataURL("image/png");
                                // on donne finalement cette dataurl comme valeur au champs imageQuestion
                                document.getElementById("imageQuestion").value = dataurl;
                              };
                            }
                        // on charge l'image pour de vrai, lorsque ce sera terminé le callback loadimageQuestion sera appelé.
                        reader.readAsDataURL(file);
                      }
                    }
