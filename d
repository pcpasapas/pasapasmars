[33mcommit fb949dc17af69e1a36f1ea304e6d535076053034[m[33m ([m[1;36mHEAD -> [m[1;32mmain[m[33m, [m[1;31mheroku/main[m[33m)[m
Author: pasapas <pcpasapas@gmail.com>
Date:   Sun Feb 20 10:16:57 2022 +0100

    compte utilisateur

[1mdiff --git a/public/js/app.js b/public/js/app.js[m
[1mindex f8b2722..1b27dfd 100644[m
[1m--- a/public/js/app.js[m
[1m+++ b/public/js/app.js[m
[36m@@ -77889,7 +77889,7 @@[m [mvar render = function () {[m
   return _c([m
     "div",[m
     [[m
[31m-      _c("h5", [_vm._v("Contenu modifié le 20/02 à 10:02 ")]),[m
[32m+[m[32m      _c("h5", [_vm._v("Contenu modifié le 20/02 à 10:02  ")]),[m
       _vm._v(" "),[m
       _c("Logo_"),[m
       _vm._v(" "),[m
[1mdiff --git a/resources/js/components/AcceuilComponent.vue b/resources/js/components/AcceuilComponent.vue[m
[1mindex 21fdc89..4bf1ef6 100644[m
[1m--- a/resources/js/components/AcceuilComponent.vue[m
[1m+++ b/resources/js/components/AcceuilComponent.vue[m
[36m@@ -30,7 +30,7 @@[m [mexport default {[m
 </script>[m
 <template>[m
   <div>[m
[31m-  <h5>Contenu modifié le 20/02 à 10:02 </h5>[m
[32m+[m[32m  <h5>Contenu modifié le 20/02 à 10:02  </h5>[m
   <Logo_></Logo_>[m
   <!-- <logo-component></logo-component> -->[m
   <TitreMenu></TitreMenu>[m
