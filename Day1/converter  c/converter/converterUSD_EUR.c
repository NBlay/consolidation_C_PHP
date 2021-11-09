#include <stdio.h>
#include <stdlib.h>

int main()
{
      char currency;

      printf("Please enter the currency you wish to convert (E for Euro to Dollar; D for Dollar to Euro)");
      scanf("%c",&currency);

      if(currency == 'E'){
        return eur2usd();
      }
    else if(currency == 'D'){
        return usd2eur();
      }
}

int eur2usd()
{
    const float usd2eur = 1.16;
    float money;
    float converted;
    printf("\n Please enter the amount of Euro you wish to convert: ");
    scanf("%f" , &money);
    converted = money*usd2eur;
    printf("You have %f dollars", converted);
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


