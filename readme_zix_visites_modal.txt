Francesc Roca Rodríguez Pt07-M14 Dual | 2n DAW
----------------------------------------------

BENVINGUT!

BASE DE DADES:
Per a executar base de dades, només cal entrar a phpMyAdmin, fer clic a "IMPORTAR", inserir el fitxer m14-practica7_froca.sql
i es crearà la BDD i les taules amb algunes visites i un usuari.

ZIX(Fitxers):
ZIX(Fitxers) és una eina que permet pujar fitxers amb extensió txt, pdf i jpg al lloc web, tants com es vulgui.

-És una addició a la pràctica 6, així podem fer que cada usuari tingui el seu lloc on guardar fitxers

Fitxers:
----------------
    -zix.php:
    Primer de tot comprovem que hi ha una sessió iniciada per a que només els usuaris loguejats puguin accedir.
    Ens trobem un tutorial de com utilitzar l'eina.
    Tenim un formulari que ens permet pujar els fitxers, aquest formulari crida a upload.php que fa la feina de guardar els fitxers.
    Tenim un llistat de tots els fitxers que tenim guardats a la nostre carpeta, quan cliquem en algun fitxer, s'ens mostrarà el contingut immediatament a sota.

    -upload.php:
    Codi que guarda el fitxer que puja l'usuari

    -llegirFitxer.php:
    Llegeix el contingut del fitxer que escull l'usuari al fer click al nom del mateix a zix.php

    -zix_model.php:
    Codi que mostra els noms dels fitxers que tenim guardats al directori

Comptador de visites:
Connexió a una base de dades de phpMyAdmin on guardem el número de visites al lloc web.

Fitxers:
----------------
    -visites.php:
    Ens connectem a la bdd que guardarà les visites i cada cop que cridem aquest fitxer augmentarem les visites rebudes.

Modal:
He creat un Modal que he decidit posar al principi de la pàgina principal.
Crec que un Modal és una bona manera d'informar a l'usuari de que el lloc web ha rebut canvis, actualitzacions o nou contingut.
En el Modal que creo, informo a l'usuari de que el lloc ara disposa de la eina ZIX, li dono un link directe a la pàgina per a que pugui provar-ho.

MILLORES fetes a la pràctica:
    Millores a ZIX(Fitxers):
    -Mini tutorial de com utilitzar l'eina.
    -Poder pujar i visualitzar fitxers d'altres extensions i mostrar-los, com ara PDF, JPG... Ho he fet afegint més extensions
    acceptades al fitxer upload.php, la visualització d'imatges la realitzo comprovant si el fitxer que estem llegint és una imatge
    i per tant mostrarla en una etiqueta html per imatges ("img"). El pdf ho mostro comprovant si el fitxer és pdf i amb el següent
    codi html <embed src="files/exemple.pdf" type="application/pdf" width="100%" height="600px" />
    -Crear un MODAL a la pàgina principal que informa a l'usuari de l'addició d'aquesta nova eina
    -Fer que el llistat de fitxers siguin links que només calgui clicar el que volguem per veure el contingut.
    Al principi l'idea era que l'usuari escrivís el nom del fitxer per mostrar-lo pero així trobo molt més còmode.
    -Crear botó que permeti deixar de visualitzar el fitxer obert i ho deixi en blanc

    Millores a Comptador de visites:
    -Col·locar el comptador de visites a totes les pàgines que visualitza l'usuari

    Millora extra (MODAL):
    -Afegir un MODAL per a informar als usuaris de que hem introduït noves eines al lloc web

Propostes de MILLORES: EXPLICAR COM HO FARIA
    Millores per ZIX(Fitxers):
    -Si ho guardo en local, poder crear carpetes i subcarpetes amb mkdir de php.
    -Posar el contingut del fitxer mostrat en un textarea i que es pugui modificar el contingut del fitxer i enviar per a que es guardin
    les modificacions realitzades
    -Tenir els fitxers guardats en una base de dades externa, necessitaria fer inserts a la base de dades.
    -Tinguent la millora de penjar els fitxers en una base de dades, fer que ens poguem baixar els fitxers per si ens
    trobem en un ordinador diferent

    Millores per Comptador de visites:
    -Afegir comptador de visites específic per a cada pàgina, que comprovi a quina pàgina estem en cada moment i ens mostri les visites que ha rebut aquella pàgina específica, a part de les visites generals a tot el lloc.
    -Tinguent feta la millora proposada anteriorment, crear un "rànking" que indiqui quines pàgines tenen més visites en cada moment.

----------------------------------------------
Francesc Roca Rodríguez Pt07-M14 Dual | 2n DAW