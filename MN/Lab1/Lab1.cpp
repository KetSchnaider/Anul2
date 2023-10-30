
#include <iostream>
#include <cmath>
#include <iomanip>
#define E 2.71828182846
using namespace std;

double f(double x) //ecuatia
{
return 0.1 * pow(E, x) + pow(x,3) - 2 * x + 2 ;}

double df(double x) //derivata ecuatiei
{
    return (pow(E,x)/10) + 3 * pow(x,2)-2;
}

double metodaBisectiei(double a, double b, double epsilon, int& iteratii)
{
  double x = a;
  while ((b - a) >= epsilon)
  {
    x = (a + b) / 2;
    if (f(a) * f(x) < 0)
    {
      b = x;
    }
    else
    {
      a = x;
    }
    iteratii++;
  }
  return x;
}

double metodaNewton(double x0, double epsilon, int& iteratii)
{
  double x = x0;
  while (fabs(f(x)) >= epsilon)
  {
    x = x - f(x) / df(x); //formula metodei lui Newton
    iteratii++;
  }
  return x;
}

double metodaAproxSuccesive(double x0, double epsilon, int& iteratii)
{
  double x = x0;
  while (fabs(f(x) - x) >= epsilon)
  {
    x = f(x); //formula metodei aproximaatiilor succesive
    iteratii++;
  }
  return x;
}

double metodaSecantelor(double x0, double x1, double epsilon, int& iteratii)
{
  double x = x1;
  double x_prev = x0;

  while (fabs(f(x)) >= epsilon)
  {
    double f_x = f(x);
    double f_x_prev = f(x_prev);
    double x_next = x - f_x * (x - x_prev) / (f_x - f_x_prev); //formula metodei secantelor
    x_prev = x;
    x = x_next;
    iteratii++;
  }
  return x;
}

int main() {
  double epsilon = 1e-6;
  double a = -5.0, b = 5.0; //inceputul si sfarsitul intervalului
  int numRadacini = 0; //numarul de radacini

  cout << "Radacinile se afla pe intervalele:\n";
  for (double x = a; x < b; x += 0.01)
  {
    double fx = f(x);
    double fx1 = f(x + 0.01);

    if (fx * fx1 < 0)
    {
      numRadacini++;
      cout << numRadacini << ". Intervalul [" << setprecision(3) << x << ", " << x + 0.01 << "]" << endl;

      int iteratiiBisectie = 0;
      double rezBisectie = metodaBisectiei(x, x + 0.01, epsilon, iteratiiBisectie);
      cout << "\nNumarul de iteratii in metoda Bisectiei: " << iteratiiBisectie << endl;
      cout << "Solutia gasita prin metoda Bisectiei: " << setprecision(6) << rezBisectie << endl;

      int iteratiiNewton = 0;
      double rezNewton = metodaNewton((x + x + 0.01) / 2, epsilon, iteratiiNewton);
      cout << "\nNumarul de iteratii in metoda lui Newton: " << iteratiiNewton << endl;
      cout << "Solutia gasita prin metoda lui Newton: " << setprecision(6) << rezNewton << endl;

      int iteratiiAproxSucc = 0;
      double rezAproximSucc = metodaAproxSuccesive((x + x + 0.01) / 2, epsilon, iteratiiAproxSucc);
      cout << "\nNumarul de iteratii in metoda Aproximatiilor Succesive: " << iteratiiAproxSucc << endl;
      cout << "Solutia gasita prin metoda Aproximatiilor Succesive: " << setprecision(6) << rezNewton << endl;

      int iteratiiSecante = 0;
      double rezSecante = metodaSecantelor(x, x + 0.01, epsilon, iteratiiSecante);
      cout << "\nNumarul de iteratii in metoda Secantelor: " << iteratiiSecante << endl;
      cout << "Solutia gasita prin metoda Secantelor: " << setprecision(6) << rezSecante << endl;
      cout << "\n";
    }
  }
  return 0;
}