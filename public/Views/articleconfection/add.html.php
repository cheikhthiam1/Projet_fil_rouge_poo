<?php

use App\Core\Session;
 










              
            
            $errors = [];
            if(Session::isset('errors')){
               $errors = Session::get("errors");
               Session::unset("errors");
            }
             ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Confection</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <div class="redirection">
        <button class="jreukh"><a href=""></a>
        </button>
    </div>
    <form action="" method="post">
        <input type="hidden" name="" value="">
    
            <input type="hidden" name="action" value="add">
       
            <input type="hidden" name="action" value="">
            <input type="hidden" name="" value="">
      
        <div class="container__form">
            <div class="formulaire">


                <div class="ligne1">
                    <div class="inputs">
                        <label for="">Libelle</label>
                        <input type="libelle" name="libelle" value="">
                    </div>
                    <div class="inputs">
                        <label for="">Categorie</label>
                        <input type="categorie" name="categorie" value="">
                    </div>
                    <div class="inputs">
                        <label for="">Fournisseur</label>
                        <input type="fournisseur" name="fournisseur" value="">
                    </div>
                    <div class="inputs">
                        <label for="">Qte</label>
                        <input type="quantite" name="quantite" value="">
                    </div>
                  >
                </div>
                <div class="a">
                   
                    
                </div>
                <div class="b">
                    <div class="for">
                        <label for="">Produit</label>
                        <select name="produitAP" id="produit" class="form-control">
                        <option value="0">Selectionnez un produit</option>
                       
                    </select>
                        
                    </div>
                    <div class="boutonvalider">
                    <button name="val" value="val">valider</button>
                    </div>
                  
                    <div class="for">
                        <label for="">Quantite</label>
                        <input type="text" name="">
                        <span  class="erreur"></span>
                    </div>
                    <div class="for">
                        <label for="">Unite</label>
                        <select name="unite" id="unite" class="form-control">
                        <option value="0">Selectionnez une unite</option>
                       
                    </select>
                        
                    </div>
                  
                    <div class="for">
                        <label for="">Fournisseur</label>
                        <input type="text" name="fournisseur" value="">
                    </div>
                    <div class="for">
                        <label for="">Reference</label>
                        <input type="text" name="" value="">
                    </div>
                    <!-- <button name="AJOUTER" value="AJOUTER">AJOUTER</button> -->
                    <input type="submit" name="" value="" class="btn-ajouter">

                </div>

            </div>
            <div class="tableau">
                <table class="tableau-style">
                    <thead>
                        <tr>
                            <th>Libelle</th>
                            <th>Categorie</th>
                            <th>Quantite</th>
                            <th>Prix</th>
                            <th>Unite</th>
                            <th>Fournisseur</th>
                            <th>Reference</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                   


                                     <td>
                                     <!-- <input type="submit" name="supprimer" value="supprimer" class="btn-ajouter"> -->
                                        <button type="submit" name="" value="">SUPPRIMER</button>
                                    <!-- <a href="<?= WEB_ROUTE . '?controller=articleconfection&view=supprimer&idu=' . $value['unite'] ?>" onclick="confirm('Vouslez-vous vraiment supprimer ?')" class="text-white"></i>Supprimer</a> -->
                                </td>
                                </tr>
                            
                    </tbody>
                </table>
            </div>
            <div class="glototal">
                <div class="total">
                    <label for=""></label>
                    <input type="text" value=" name=" " class="">
                    <!-- <button>ENREGISTRER</button> -->
                    <input type="submit" name="" value="enregistre" class="btn_enregistrer">
                </div>
            </div>
        </div>
    </form>

</body>

</html>