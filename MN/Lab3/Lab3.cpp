#include <iostream>
#include <iomanip>
#include <cmath>

using namespace std;

struct Data {
    float x, y;
};

double interpolate(Data f[], float xi, int n) {
    double result = 0;

    for (int i = 0; i < n; i++) {
        double term = f[i].y;
        for (int j = 0; j < n; j++) {
            if (j != i)
                term = term * (xi - f[j].x) / double(f[i].x - f[j].x);
        }

        result += term;
    }

    return result;
}

void calculateDividedDifferences(Data f[], int n, float** dividedDifferences) {
    for (int i = 0; i < n; ++i) {
        dividedDifferences[i][0] = f[i].y;
    }

    for (int j = 1; j < n; ++j) {
        for (int i = 0; i < n - j; ++i) {
            dividedDifferences[i][j] = (dividedDifferences[i + 1][j - 1] - dividedDifferences[i][j - 1]) /
                                        (f[i + j].x - f[i].x);
        }
    }
}

void normalizeCoefficients(float** dividedDifferences, int n) {
    float maxAbsCoefficient = 0.0;
    for (int i = 0; i < n; ++i) {
        maxAbsCoefficient = max(maxAbsCoefficient, abs(dividedDifferences[0][i]));
    }

    for (int i = 0; i < n; ++i) {
        dividedDifferences[0][i] /= maxAbsCoefficient;
    }
}


void writePolynomial(Data f[], int n, int degree, float** dividedDifferences) {
    cout << "Polynomial: ";
    for (int i = 0; i < n; i++) {
        if (dividedDifferences[0][i] != 0) {
            if (i > 0) {
                cout << (dividedDifferences[0][i] > 0 ? " + " : " - ");
            }
            cout << scientific << setprecision(2) << abs(dividedDifferences[0][i]);
            if (i < n - 1) {
                cout << "x";
            }
            if (i < n - 2) {
                cout << "^" << degree - i - 1;
            }
        }
    }
    cout << "\n";
}

int main() {
    int n = 7;
    int m = 5;
    float Ksi = 2.56;

    Data f[] = {
        {2.3, 9.1},
        {2.5, 8.5},
        {2.65, 8.75},
        {2.7, 12},
        {2.85, 13.2},
        {3, 11.7},
        {3.1, 6.6}};

    // Allocate memory for dividedDifferences
    float** dividedDifferences = new float*[n];
    for (int i = 0; i < n; ++i) {
        dividedDifferences[i] = new float[n];
    }

    calculateDividedDifferences(f, n, dividedDifferences);

    // Normalize coefficients
    normalizeCoefficients(dividedDifferences, n);

    cout << "Value of Ln(x) is : " << interpolate(f, Ksi, n) << endl;

    cout << "\nValue of Lm(x) is : " << interpolate(f, Ksi, m) << endl;

    writePolynomial(f, n, n, dividedDifferences);

    // Deallocate memory for dividedDifferences
    for (int i = 0; i < n; ++i) {
        delete[] dividedDifferences[i];
    }
    delete[] dividedDifferences;

    return 0;
}
