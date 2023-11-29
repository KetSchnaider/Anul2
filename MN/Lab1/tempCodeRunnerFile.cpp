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
  }
  return x;
}