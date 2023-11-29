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

double BisectMethod(double a, double b, double epsilon, int& iteratii)
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
    // cout << "Iteratie " << iteratii << ": x = " << x << endl;
  }
  return x;
}

double NewtonMethod(double x0, double epsilon, int& iteratii)
{
  double x = x0;
  while (fabs(f(x)) >= epsilon)
  {
    x = x - f(x) / df(x); //formula metodei lui Newton
    iteratii++;
    // cout << "Iteratie " << iteratii << ": x = " << x << endl;
  }
  return x;
}

double AproxMethod(double x0, double epsilon, int& iteratii)
{
  double x = x0;
  while (fabs(f(x) - x) >= epsilon)
  {
    x = f(x); //formula metodei aproximaatiilor succesive
    iteratii++;
    // cout << "Iteratie " << iteratii << ": x = " << x << endl;
  }
  return x;
}

double SecantMethod(double x0, double x1, double epsilon, int& iteratii)
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
    // cout << "Iteratie " << iteratii << ": x = " << x << endl;
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

      int itBisect = 0;
      double resBisect= BisectMethod(a, b , epsilon, itBisect);
      cout << "Metoda Bisectiei:\n";
      cout << "  Iteratii: " << itBisect << endl;
      cout << "  Solutia: " << setprecision(6) << resBisect << endl;

      int itNewton= 0;
      double rezNewton = NewtonMethod(-1, epsilon, itNewton);
      cout << "Metoda Newton:\n";
      cout << "  Iteratii: " << itNewton << endl;
      cout << "  Solutia: " << setprecision(6) << rezNewton << endl;

      int itAprox = 0;
      double rezAproximSucc = AproxMethod(-1, epsilon, itAprox);
      cout << "Metoda Aproximatiilor Succesive:\n";
      cout << "  Iteratii: " << itAprox << endl;
      cout << "  Solutia: " << setprecision(6) << resBisect << endl;

      int itSec = 0;
      double resSecant = SecantMethod(a,b , epsilon, itSec);
      cout << "Metoda Secantelor:\n";
      cout << "  Iteratii: " << itSec << endl;
      cout << "  Solutia: " << setprecision(6) << resSecant << endl;
      cout << "\n";
    }
  }
  return 0;
}
