#include <stdio.h>
#include <stdlib.h>

int main()
{
    int nbEleve = 4;
    int nbNotes = 3;
   float notes[4][3]= {{9, 10, 13}, {15, 17, 19}, {4, 10, 11}, {8, 14, 19}};
   int loop, sum, n, i, j, lengthIndi, sumIndi;
   float length, moyenneIndi;
    /* récupère les datas du tableau */
    sum = 0;
    //calcul de la somme de toutes les notes
    for(n = 0; n < 4; n++){ //premiere instance de for: pour chaque colonne on effectue la boucle suivante:

        for ( loop = 0; loop < 3; loop++ ) { //dans la 1ere boucle for, on effectue dans chaque cellule la méthode suivante:

        sum = sum + notes[n][loop]; //on attribue a sum la valeur de toutes les notes de loop (sur n colonnes, et dans chacune de ses colonnes, dans loop lignes)
        //printf("loop %d note %d somme %d",loop,notes[n][loop], sum);
       }
    }
    //printf("La somme des notes est %d", sum);

     //parcours de chaque élève
     sumIndi = 0;
     //calcul du nombre de notes de l'eleve

     for(i=0; i < nbNotes; i++ ){                                       //calcul de la somme de ces notes
        for(j=0; j < nbEleve; j++){
        sumIndi += notes[j][i];
        }
     printf("Somme %d ", sumIndi);
     moyenneIndi = sumIndi/nbNotes;
     printf("La moyenne de l'élève j est %f", moyenneIndi);
    }
}

/*int moyenneGénérale(){
    float moyenne; //pour éviter de récupérer un arrondi, on met en float tout ce qui ne rentre pas dans les boucles for ci-dessus (ici: moyenne & length).
       length = sizeof(notes[n]); //calcule le nb d'elements total dans le tableau "notes"
       //printf("%d %d", sum, length);
       moyenne = sum / length; //calcul standard d'une moyenne
       printf("La moyenne générale est de %5.2lf ", moyenne);

} */

/*int moyenneIndi(){
 float moyenneIndi;
 lengthIndi = sizeof(notes[0]);
 printf("%d", lengthIndi);

}*/
