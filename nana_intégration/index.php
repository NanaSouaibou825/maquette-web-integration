<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Integration Web</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons déchet 1 -->
 

  <!-- Google Fonts dechet 2 -->

  <!-- Vendor CSS Files -->
  <link href="<?php echo get_template_directory_uri()?>/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/icofont.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/remixicon.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/venobox.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri()?>/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v2.3.1
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: calibri;
}
body{
  background-color: black;
  overflow-x: hidden;
  color: white;
}
a{
  color: white;
}
ul.menu li{
  float: left;
  width: 10%;
  list-style: none;
  font-size: 20px;
  padding: 5px;
}
ul.menu li a{
  color: white;
  display: block;
  text-decoration: none;
  text-align: center;
}
ul.menu li a:hover{
  color: rgb(255, 0, 85);
}
ul.menu li a:active{
  color: rgb(255, 0, 85);
}


ul.footer-menu li{
  float: left;
  width: 10%;
  list-style: none;
  font-size: 15px;
  padding: 5px;
}
ul.footer-menu li:first-child{
  width: 12%;
}
ul.footer-menu li a{
  color: white;
  display: block;
  text-decoration: none;
  text-align: center;
}
ul.footer-menu li a:hover{
  color: rgb(255, 0, 85);
}
ul.footer-menu li a:active{
  color: rgb(255, 0, 85);
}

.panier{
  font-size: 14px;
}
#main-photo{
  height: 300px;
  width: 100%;
  padding: 20px 40px;
}
.list-photo{
  width: 12%;
  display: inline-block;
}
#photo-container{
  margin-left: 60px;
  margin-right: 40px;
}
.right{
  margin-right: 40px;
  padding: 5px;
  float: right;
  height: 800px;
  width: 220px;
}
.block{
  padding: 5px;
  border:1px solid gray;
  font-size: 14px;
  margin-bottom: 15px;
}
.block ul li{
  list-style: none;
  margin-bottom: 5px;
}
.myrow{
  margin-right: 10px;
}
.titre{
  color: gray;
  font-size: 18px;
}
.redtext{
  padding-top: 30px;
  color: rgba(230, 19, 89, 0.699);
  font-weight: bold;
}
.side-text{
  color: rgb(255, 0, 85);
  font-size: 20px;
  font-weight: bold;
}
.supra{
  height: 100px;
  background-color: teal;
}
#site{
  font-size: 28px;
}
.content{
  padding: 0 30px ;
  margin-right: 220px;
}
.title{
  color: rgb(255, 0, 85);
  margin-left: 10px;
  font-weight: bold;
  font-size: 26px;
}
.photo{
  height: auto;
  width: 100%;
}
.line{
  height: 10px;
  background-color: rgb(255, 0, 85);
}

@media (max-width: 768px){

body{
  font-size: 10px;
}
h3{
  font-size: 18px;
}
ul.menu li{
  float: left;
  width: auto;
  list-style: none;
  font-size: 8px;
  padding: 5px;
}
ul.menu li a{
  color: white;
  display: block;
  text-decoration: none;
  text-align: center;
}
ul.menu li a:hover{
  color: rgb(255, 0, 85);
}
ul.menu li a:active{
  color: rgb(255, 0, 85);
}


ul.footer-menu li{
  float: left;
  width: 10%;
  list-style: none;
  font-size: 8px;
  padding: 2px;
}
ul.footer-menu li:first-child{
  width: 12%;
}
ul.footer-menu li a{
  color: white;
  display: block;
  text-decoration: none;
  text-align: center;
}
ul.footer-menu li a:hover{
  color: rgb(255, 0, 85);
}
ul.footer-menu li a:active{
  color: rgb(255, 0, 85)x;
}

.panier{
  font-size: 14px;
}
#main-photo{
  height: 300px;
  width: 100%;
  padding: 10px 30px;
}
.list-photo{
  width: 11%;
  display: inline-block;
}
#photo-container{

}
.right{
  margin-right: 10px;
  padding: 2px;
  float: right;
  height: 800px;
  width: 130px;
}
.block{
  padding: 2px;
  border:1px solid gray;
  font-size: 8px;
  margin-bottom: 10px;
}
.block ul li{
  list-style: none;
  margin-bottom: 5px;
}
.titre{
  color: gray;
  font-size: 8px;
}
.redtext{
  padding-top: 30px;
  color: rgba(230, 19, 89, 0.699);
  font-weight: bold;
}
.side-text{
  color: rgb(255, 0, 85);
  font-size: 8px;
  font-weight: bold;
}
.supra{
  height: 100px;
  background-color: teal;
}
#site{
  font-size: 18px;
}
.content{
  padding: 0 5px ;
  margin-right: 13px;
}
.title{
  color: rgb(255, 0, 85);
  margin-left: 10px;
  font-weight: bold;
  font-size: 16px;
}
.img1{
  height: 30px;
  width: 30px;
}
.img2{
  height: 20px;
  width: 30px;
  margin: 0;
}
.photo{
  height: auto;
  width: 100%;
}
.line{
  height: 10px;
  background-color: rgb(255, 0, 85);
}
.myrow{
  margin-right: 0;
  padding-left: 10px;
}

}

</style>

<body>

  <!-- ======= entête ======= -->
  <header id="header" style="background-color: black;">
    <div class="container-fluid d-flex ">
      <!-- première ligne -->
      <div class="row" style="width: 100%;">
        <div class="col-sm-5">
          Suivez nous sur : <img src="<?php echo get_template_directory_uri()?>/cc/f.jpg" alt="1" height="30" width="30">
          <img src="<?php echo get_template_directory_uri()?>/cc/t.jpg" alt="2" height="30" width="30">
          <img src="<?php echo get_template_directory_uri()?>/cc/b.jpg" alt="3" height="30" width="30">
          <img src="<?php echo get_template_directory_uri()?>/cc/t..jpg" alt="4" height="30" width="30">
        </div>
        <div class="col-sm-4">
          Rechercher : <input type="text" name="recherche" placeholder="Entrez vos mots cles" style="width: 200px;">
          <button type="submit" class="btn btn-dark btn-sm" >Go</button>

        </div>

        <div class="col-sm-3">
          <select>
            <option>Recherche par marques</option>
            <option>Critere</option>
          </select>
          <select >
              <option>$ Euros</option>
          </select>
          <img src="<?php echo get_template_directory_uri()?>/cc/fr.jpg" alt="5" height="30" width="30">
          <img alt="6" src="<?php echo get_template_directory_uri()?>/cc/en.jpg" height="30" width="30"> 
        </div>

      </div>
        <!-- deuxième ligne 1-->
    </div>

    <div class="row">
      <div class="col-5">
          <h3>My-Sneaker<span>.fr</span></h3>
      </div>
      <div class="col-5"></div>
      <div class="col panier" >
          <a href="" >Mon compte</a> |
          <a href="" >Contact</a>
          <br/>
          <i class="fas fa-cart"></i> Mon panier
          <br/>
          0 Objet(s) 0.00$
      </div>
  </div>
    <ul class="menu" style="width: 100%;min-height:20px;margin: 0;">
        <li><a href="">HOME</a></li>
        <li><a href="">NEWS</a></li>
        <li><a href="">HOMMES</a></li>
        <li><a href="">FEMMES</a></li>
        <li><a href="">ENFANTS</a></li>
        <li><a href="">BLOG</a></li>
        <li><a href="">BOUTIQUES</a></li>
        <li><a href="">PROMOTION</a></li>
        <li><a href="">MARQUES</a></li>
    </ul>

  </header>
  <!-- fin de l'entête -->

  <!-- corps -->
  <main id="main">
    <div>
      <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/1.jpg" id="main-photo"/>
    </div>
    <div id="photo-container" >
      <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/l1.jpg" class="list-photo"/>
      <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/l2.jpg" class="list-photo"/>
      <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/l3.jpg" class="list-photo"/>
      <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/l4.jpg" class="list-photo"/>
      <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/l5.jpg" class="list-photo"/>
      <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/l6.jpg" class="list-photo"/>
      <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/l7.jpg" class="list-photo"/>
      <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/l8.jpg" class="list-photo"/>
    </div>

    <div class="right">
      <div class="block">
        <h4 class="titre">SUIVEZ-NOUS</h4>
        <ul>
          <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/cc/f.jpg" alt="60" class="img1" height="50" width="50"><a href=""></a><img style="margin-left:5px" src="cc/jaime.jpg" class="img2" height="20" width="50"><img style="margin-right:5px" class="img2" src="cc/3000.jpg" height="20" width="50"></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/cc/t.jpg" alt="60" class="img1 height="50" width="50"><a href=""></a> Suivez-nous sur Twitter</li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/cc/b.jpg" alt="60" class="img1 height="50" width="50"><a href=""></a> Le Blog My-sneaker.fr</li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/cc/t..jpg" alt="60" class="img1 height="50" width="50"><a href=""></a> Decouvrez notre Tumber</li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri()?>/cc/y.jpg" alt="60" class="img1 height="50" width="50"><a href=""></a> Notre chaine Youtube</li>
        </ul>
      </div>

      <div class="block">
        <h4 class="titre">CARTE CADEAUX</h4>
        <ul>
          <li>
            <table>
              <tr>
                <td><a href="#"><img src="<?php echo get_template_directory_uri()?>/cc/mk.jpg" class="img1 alt="60" height="50" width="50"><a href=""></a></td>
                <td style="padding-left: 5px;">Offrez de <br><span class="side-text" >50 a 1000 $</span><span class="side-text" style="color: white;"><br>de cadeaux</span></td>
              </tr>
            </table>
          </li>
        </ul>
      </div>

      <div class="block">
        <h4 class="titre">PARTNERS</h4>
        <div class="supra">
          <img src="<?php echo get_template_directory_uri()?>/cc/supra.jpg" alt="mk" height="100%" width="100%"/>
        </div>
      </div>

      <div class="block">
        <h4 class="titre">NOS ENGAGEMENTS</h4>
        <ul>
          <li><a href="#" style="color: white;"><i class="fas fa-truck" style="color: rgb(255, 0, 85);margin-right: 10px;"></i> Paiement 100% securise</a></li>
          <li><a href="#" style="color: white;"><i class="fas fa-truck" style="color: rgb(255, 0, 85);margin-right: 10px;"></i> Satisfait ou rembourse</a></li>
          <li><a href="#" style="color: white;"><i class="fas fa-truck" style="color: rgb(255, 0, 85);margin-right: 10px;"></i> Livraison en 48H</a><img src="cc/col.jpg" style="margin-left: 5px;" class="img1" height="30" width="50"></li>
          <li><a href="#" style="color: white;"><i class="fas fa-truck" style="color: rgb(255, 0, 85);margin-right: 10px;"></i> Invitez vos amis et gagnez de l'argent</a></li>
        </ul>
      </div>

      <div class="block">
        <h4 class="titre">NEWSLETTER</h4>
          <input type="text" style="margin: 5px auto;" placeholder="Inscrivez votre e-mail ici">
          <button type="submit" class="btn btn-dark btn-sm">Ok</button>
      </div>

    </div>

    <div class="content">
      <div class="row">
        <div class="col-sm-12 text" >
          <p class="redtext">Bienvenue sur le site <span id="site">My-Sneaker</span>.fr </p>
          <p style="text-align: justify;">
            Decouvrez notre boutique en ligne sneakers addicts. Du clothing mais surtout la plus grande selection de sneakers en France qui 
            ravira tous les gouts. A l'afflut des nouvelles tendances et ces actus nous vous proposonsde voyager a travers l'Univers des 
            Sneakers. La bibliotheque de la boutique vous offre un voyage a travers le temps et de se re-memorer des souvenirs de jeunesses 
            en voyant toutes ces paires retracant la vie de la sneaker a travers des modeles de legendes. N'attendez plus ! Jugez-en 
            par vous meme !
          </p>
        </div>
      </div>
      
        <h6 class="title" >NEWS AND TOPS</h6>
            <div class="row">
              <div class="col-sm">
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c1.jpg" class="photo"/>
                <div class="line"></div>
                <p style="text-align: justify;"><span style="color: rgb(255, 0, 85);">Le Sneaker grand cru :</span>Supra et Hennesy la celebre marque de cognac... </p>
              </div>
              <div class="col-sm">
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c2.jpg" class="photo"/>
                <div class="line"></div>
                <p style="text-align: justify;"><span style="color: rgb(255, 0, 85);">Interview Kayne West: </span>"La sape ca a de l'importance, c'est sentimental..."</p>
            
              </div>
              <div class="col-sm">
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c3.jpg" class="photo"/>
                <div class="line"></div>
                <p style="text-align: justify;"><span style="color: rgb(255, 0, 85);">Sexy-Sneakers </span>Quand la lingerie se chausse en nike air...</p>
            
              </div>
            </div>

            <div class="row">
              <div class="col-sm">
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c4.jpg" class="photo"/>
                <div class="line"></div>
                <p style="text-align: justify;"><span style="color: rgb(255, 0, 85);">Design </span>Le new-yorkais Marcus K, signe sa collection Nike-Air</p>
              </div>
              <div class="col-sm">
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c5.jpg" class="photo"/>
                <div class="line"></div>
                <p style="text-align: justify;"><span style="color: rgb(255, 0, 85);">Made for Skate : </span>L'Autriche a l'heure de la glisse et de la street-attitude...</p>
            
              </div>
              <div class="col-sm">
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c6.jpg" class="photo"/>
                <div class="line"></div>
                <p style="text-align: justify;"><span style="color: rgb(255, 0, 85);">Converse : </span>La chute d'un empire... </p>
            
              </div>
            </div>

            <div class="row">
              <div class="col-sm">
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c7.jpg" class="photo"/>
                <div class="line"></div>
                <p style="text-align: justify;"><span style="color: rgb(255, 0, 85);">Sneaker-Culture : </span>Skate et Sneaker une vielle histoire... </p>
              </div>
              <div class="col-sm">
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c8.jpg" class="photo"/>
                <div class="line"></div>
                <p style="text-align: justify;"><span style="color: rgb(255, 0, 85);">Adidas et Londres 2012 : </span>Le nouveau spot d'Adidas, avec Snoop-Dog &..</p>
            
              </div>
              <div class="col-sm">
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c9.jpg" class="photo"/>
                <div class="line"></div>
                <p style="text-align: justify;"><span style="color: rgb(255, 0, 85);">French-Connection :  </span>La deferlante des sneakers sur le web francais...</p>
              </div>
            </div>
          
            
            <div class="row myrow">
              <div class="col-sm">
                <h6 class="title" style="color: rgb(255, 251, 0);" >A LA UNE</h6>
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c10.jpg" class="photo"/>
                <div class="line" style="background-color: rgb(255, 251, 0);"></div>
                <div class="row">
                  <div class="col-8">
                      <p style="font-size: 16px;color: rgb(255, 251, 0);">Adidas Star Wars StormTrooper</p>
                  </div>
                  <div class="col-4">
                    <p style="float: right;font-size: 12px;">95,00$ TTC </p>
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <h6 class="title" style="font-size: 20px;color: rgb(65, 225, 190);" >MEILLEURES VENTES</h6>
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c11.jpg" class="photo"/>
                <div class="line" style="background-color: rgb(65, 225, 190);"></div>
                <div class="row">
                  <div class="col-8">
                      <p style="font-size: 16px;color: rgb(65, 225, 190);">Adidas Star Wars Skywalker </p>
                  </div>
                  <div class="col-4">
                    <p style="float: right;font-size: 12px;">95,00$ TTC </p>
                  </div>
                </div>
              </div>
              <div class="col-sm">
                <h6 class="title" style="color: black;">`</h6>
                <img alt="photo" src="<?php echo get_template_directory_uri()?>/cc/c12.jpg" class="photo"/>
                <div class="line" style="background-color: rgb(65, 225, 190);"></div>
                <div class="row">
                  <div class="col-8">
                      <p style="font-size: 16px;color: rgb(65, 225, 190);">Supra Footwear Mia-Muska003</p>
                  </div>
                  <div class="col-4">
                    <p style="float: right;font-size: 12px;">175,00$ TTC </p>
                  </div>
                </div>
            </div>

            
    </div>

  </main>
  <!-- fin corps -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div style="border-top: 15px solid gray;">
      <ul class="footer-menu" style="width: 100%;min-height:50px;margin: 0;">
        <li><a href="">Qui sommes nous ?</a></li>
        <li><a href="">Plan du site</a></li>
        <li><a href="">Partenaires</a></li>
        <li><a href="">Presse</a></li>
        <li><a href="">Mentions legales</a></li>
        <li><a href="">CDV</a></li>
        <li><a href="">F.A.Q</a></li>
        <li><a href="">Mon Compte</a></li>
        <li><a href="">Contact</a></li>
    </ul>
    </div>
    <div class="footer-top">
      <div class="container-fluid">      
        <div class="row">

          <div class="col-sm-2">
            <div class="footer-info">
              <p><a href="#"  style="color: rgb(255, 0, 85);">Marques</a></p>
              <p ><a href="#">9Five Eyewear</a></p>
              <p ><a href="#">Android Home</a></p>
              <p ><a href="#">Black Scale</a></p>
              <p  ><a href="#">Coco and Breezy</a></p>
              <p ><a href="#">Christian Audigier</a></p>
              <p ><a href="#">Crooks and Castles</a></p>
              <p ><a href="#">DimePiece</a></p>
              <p ><a href="#">Ed Hardy</a></p>
              <p ><a href="#">Evisu</a></p>
              <p ><a href="#">Greedy Genius</a></p>
              <p ><a href="#">Hellz Bellz</a></p>
              <p ><a href="#">Married to the Mob</a></p>
              <p ><a href="#">Mitchell & Ness</a></p>
              <p ><a href="#">Melody Ehsani</a></p>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="footer-info">
              <p style="color: rgb(255, 0, 85);"><a href="#"  style="color: rgb(255, 0, 85);">Hommes</a></p>
              <p ><a href="#">9Five Eyewear</a></p>
              <p ><a href="#">Android Home</a></p>
              <p ><a href="#">Black Scale</a></p>
              <p  ><a href="#">Coco and Breezy</a></p>
              <p ><a href="#">Christian Audigier</a></p>
              <p ><a href="#">Crooks and Castles</a></p>
              <p ><a href="#">DimePiece</a></p>
              <p ><a href="#">Ed Hardy</a></p>
              <p ><a href="#">Evisu</a></p>
              <p ><a href="#">Greedy Genius</a></p>
              <p ><a href="#">Hellz Bellz</a></p>
              <p ><a href="#">Married to the Mob</a></p>
              <p ><a href="#">Mitchell & Ness</a></p>
              <p ><a href="#">Melody Ehsani</a></p>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="footer-info">
              <p style="color: rgb(255, 0, 85);"><a href="#"  style="color: rgb(255, 0, 85);">Femmes</a></p>
              <p ><a href="#">9Five Eyewear</a></p>
              <p ><a href="#">Android Home</a></p>
              <p ><a href="#">Black Scale</a></p>
              <p  ><a href="#">Coco and Breezy</a></p>
              <p ><a href="#">Christian Audigier</a></p>
              <p ><a href="#">Crooks and Castles</a></p>
              <p ><a href="#">DimePiece</a></p>
              <p ><a href="#">Ed Hardy</a></p>
              <p ><a href="#">Evisu</a></p>
              <p ><a href="#">Greedy Genius</a></p>
              <p ><a href="#">Hellz Bellz</a></p>
              <p ><a href="#">Married to the Mob</a></p>
              <p ><a href="#">Mitchell & Ness</a></p>
              <p ><a href="#">Melody Ehsani</a></p>
            </div>
          </div>

          <div class="col-sm-2">
            <div class="footer-info">
              <p style="color: rgb(255, 0, 85);"><a href="#"  style="color: rgb(255, 0, 85);">Enfants</a></p>
              <p ><a href="#">9Five Eyewear</a></p>
              <p ><a href="#">Android Home</a></p>
              <p ><a href="#">Black Scale</a></p>
              <p  ><a href="#">Coco and Breezy</a></p>
              <p ><a href="#">Christian Audigier</a></p>
              <p ><a href="#">Crooks and Castles</a></p>
              <p ><a href="#">DimePiece</a></p>
              <p ><a href="#">Ed Hardy</a></p>
              <p ><a href="#">Evisu</a></p>
              <p ><a href="#">Greedy Genius</a></p>
              <p ><a href="#">Hellz Bellz</a></p>
              <p ><a href="#">Married to the Mob</a></p>
              <p ><a href="#">Mitchell & Ness</a></p>
              <p ><a href="#">Melody Ehsani</a></p>
            </div>
          </div>
          <div class="col-sm-4">

            <div class="copyright" style="text-align: left;">
             Copyright   &copy; 2011 <strong><span>my-sneakers.fr</span></strong>. All Rights Reserved
             <br>
             <p style="text-align: left;color: white;"><img src="cc/peel.jpg" alt="19" style="margin-right: 20px;"/><a href="#" style="color: white;text-decoration: underline;"> creation de site e-commerce</a></p>
            </div><br>
            <div >
              <img style="" src="<?php echo get_template_directory_uri()?>/cc/paypal.jpg" alt="20">
            </div>
          </div>

        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files 
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/all.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File 
  <script src="assets/js/main.js"></script>-->

</body>

</html>