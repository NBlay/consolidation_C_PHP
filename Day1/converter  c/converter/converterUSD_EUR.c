#include <stdio.h>
#include <stdlib.h>

int main()
{
      char currency; //on définit une variable pour laisser le choix entre euros & dollars

      printf("Please enter the currency you wish to convert (E for Euro to Dollar; D for Dollar to Euro)");
      scanf("%c",&currency); // on récupère la valeur entrée par l'user

      if(currency == 'E'){ //mise en place de la condition: si l'user souhaite convertir des Euros en dollars..
        return eur2usd();
      }
    else if(currency == 'D'){ //si l'user souhaite convertir des Dollars en euros
        return usd2eur();
      }
}

int eur2usd() //fonction euro->dollar
{
    const float usd2eur = 1.16; //le taux de change
    float money; //une variable float qui sert a récupérer la valeur entrée par l'user
    float converted; //une variable float qui sert a récupérer la valeur convertie
    printf("\n Please enter the amount of Euro you wish to convert: ");
    scanf("%f" , &money); //on récupère la valeur entrée
    converted = money*usd2eur; //on effectue la conversion
    printf("You have %f dollars", converted); //on renvoie le résultat
}

int usd2eur()
{
    const float eur2usd = 0.86;
    float money;
    float converted;
    printf("Please enter the amount of US Dollars you wish to convert: ");
    scanf("%f" , &money);
    converted = money*eur2usd;
    printf("You have %f euros", converted);
}


