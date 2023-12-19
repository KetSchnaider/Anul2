#include <stdio.h>
#include <math.h>

// Definirea funcției integrată
double f(double x) {
    return x*sin(x);
}

// Formula trapezelor
double trapezeRule(double a, double b, int n) {
    double h = (b - a) / n;
    double sum = 0.5 * (f(a) + f(b));
    for (int i = 1; i < n; ++i) {
        sum += f(a + i * h);
    }
    return h * sum;
}

// Formula Simpson
double simpsonRule(double a, double b, int n) {
    double h = (b - a) / n;
    double sum1 = 0, sum2 = 0;

    for (int i = 1; i < n; i += 2) {
        sum1 += f(a + i * h);
    }

    for (int i = 2; i < n - 1; i += 2) {
        sum2 += f(a + i * h);
    }

    return (h / 3) * (f(a) + 4 * sum1 + 2 * sum2 + f(b));
}

// Regula lui Runge pentru formula trapezelor
int rungeTrapezeRule(double a, double b, double e) {
    int n = 2;
    double integral_prev, integral_curr;

    do {
        integral_prev = trapezeRule(a, b, n);
        n *= 2;
        integral_curr = trapezeRule(a, b, n);
    } while (fabs(integral_curr - integral_prev) >= e);

    return n;
}

// Regula lui Runge pentru formula Simpson
int rungeSimpsonRule(double a, double b, double epsilon) {
    int m = 2;
    double integral_prev, integral_curr;

    do {
        integral_prev = simpsonRule(a, b, m);
        m *= 2;
        integral_curr = simpsonRule(a, b, m);
    } while (fabs(integral_curr - integral_prev) >= epsilon);

    return m;
}

int main() {
    double a = 0.5;
    double b = 1.5;

    // Calculul integralei folosind formulele trapezelor și Simpson
    double trapezeResult = trapezeRule(a, b, 1000);
    double simpsonResult = simpsonRule(a, b, 1000);

    // Aplicarea regulei lui Runge pentru trapeze cu o eroare mai mică decât 10
    int nTrapeze = rungeTrapezeRule(a, b, 10);

    // Aplicarea regulei lui Runge pentru Simpson cu o eroare mai mică decât 10^3
    int nSimpson = rungeSimpsonRule(a, b, 103);

    // Afișarea rezultatelor
    printf("Integrala definita a sin(x)/(x^2) de la %f la %f:\n", a, b);
    printf("Folosind formula trapezelor: %lf cu %d divizari\n", trapezeResult, nTrapeze);
    printf("Folosind formula Simpson: %lf cu %d divizari\n", simpsonResult, nSimpson);

    return 0;
}