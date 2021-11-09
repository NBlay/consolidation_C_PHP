#include <stdio.h>
#include <stdlib.h>

//on définit la fonction sumNotes hors de main

int sumNotes(a, b, c){
    return a + b + c;
   }

int main()
{
   int a = 9;
   int b = 15;
   int c = 17;
   int sum = 0;
   sum = sumNotes(a, b, c); //on appelle la fonction pour l'utiliser
   printf("Sum = %d", sum);

}
