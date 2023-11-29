#include <iostream>
#include <math.h>
#define N 4
using namespace std;


float A[4][4] = 
{
    (7.1 + 0.1*N), 1.1, 0.9, -1.3,
    1.1, (8.2 +0.2*N), 2.1, 0.5,
    0.9, 2.1, (9.1+0.3*N), 1.2,
    -1.3, 0.5, 1.2, (10.5+0.4*N),
};

float B[4] = 
{(10.8 + 0.5*N), 
(10.9 +1.5*N), 
(11.5+2.5*N), 
(11.2+N)};

bool verificaSolutie(float x[N]) {
    float epsilon = 0.000001;
    for (int i = 0; i < N; i++) {
        float suma = 0.0;
        for (int j = 0; j < N; j++) {
            suma += A[i][j] * x[j];
        }
        if (fabs(suma - B[i]) > epsilon) {
            return true;
        }
    }
    return false;
}
// Determinantul
float determinant() {
    int n = 4;
    float det = 1.0;

    for (int k = 0; k < n; k++) {
        int maxRow = k;
        for (int i = k + 1; i < n; i++) {
            if (fabs(A[i][k]) > fabs(A[maxRow][k])) {
                maxRow = i;
            }
        }

        if (maxRow != k) {

            for (int j = k; j < n; j++) {
                float temp = A[k][j];
                A[k][j] = A[maxRow][j];
                A[maxRow][j] = temp;
            }

            det = -det;
        }


        if (A[k][k] == 0.0) {
            return 0.0;
        }

        det *= A[k][k]; 
        for (int i = k + 1; i < n; i++) {
            float factor = A[i][k] / A[k][k];
            for (int j = k + 1; j < n; j++) {
                A[i][j] -= factor * A[k][j];
            }
        }
    }

    return det;
}


// Metoda Gauss
void Gauss() {
    int n = 4;
    int k1 = 0;
    for (int k = 0; k < n; k++) {
        if (A[k][k] != 0.0) {
            for (int i = k + 1; i < n; i++) {
                A[i][k] /= A[k][k];
                for (int j = k + 1; j < n; j++) {
                    A[i][j] -= A[i][k] * A[k][j];
                }
                B[i] -= A[i][k] * B[k];
            }
        } else {
            int lin = k;
            do {
                lin++;
            } while (lin < n && A[lin][k] == 0.0);

            if (lin == n) {
                cout << "Sistemul nu are solutie unica" << endl;
                return;
            }

            for (int j = k; j < n; j++) {
                double aux = A[k][j];
                A[k][j] = A[lin][j];
                A[lin][j] = aux;
            }

            double aux_b = B[k];
            B[k] = B[lin];
            B[lin] = aux_b;

            k--;
        }
        k1++;
    }

    if (A[n - 1][n - 1] == 0.0) {
        cout << "Sistemul nu are solutie unica" << endl;
        return;
    }

    B[n - 1] /= A[n - 1][n - 1];

    for (int i = n - 2; i >= 0; i--) {
        double S = 0.0;
        for (int j = i + 1; j < n; j++) {
            S += A[i][j] * B[j];
        }
        B[i] = (B[i] - S) / A[i][i];
    }

    cout << "Metoda Gauss cu eroarea 0.000001:" << endl;
    for (int i = 0; i < n; i++) {
        cout << "x" << i + 1 << " = " << B[i] << endl;
    }

    cout << "\nNr. de iteratii: " << k1 << endl;
}

// Metoda Jacobi
void jacobi() {
    int i, j, m, k1 = 0;
    float v, x[N], q[N][N], d[N], s[N][N], t[N][N], x1[N], er;
    for (i = 0; i < N; i++)
        for (j = 0; j < N; j++) {
            if (i == j) {
                s[i][j] = 1 / A[i][j];
                t[i][j] = 0;
            } else {
                s[i][j] = 0;
                t[i][j] = A[i][j];
            }
        }
    for (i = 0; i < N; i++)
        for (j = 0; j < N; j++) {
            v = 0;
            for (m = 0; m < N; m++)
                v += s[i][m] * t[m][j];
            q[i][j] = -v;
        }
    for (i = 0; i < N; i++) {
        v = 0;
        for (m = 0; m < N; m++)
            v += s[i][m] * B[m];
        d[i] = v;
    }
    for (i = 0; i < N; i++)
        x[i] = d[i];
    do {
        k1++;
        for (i = 0; i < N; i++)
            x1[i] = x[i];
        for (i = 0; i < N; i++) {
            v = 0;
            for (m = 0; m < N; m++)
                v += x1[m] * q[i][m];
            x[i] = v + d[i];
        }
        er = fabs(x1[0] - x[0]);
        for (m = 0; m < N; m++)
            if (er < fabs(x1[m] - x[m]))
                er = fabs(x1[m] - x[m]);
    } while (er > 0.000001);
    cout << "Metoda Jacobi cu eroarea 0.000001:" << endl;
    for (i = 0; i < N; i++) {
        cout << "x" << i + 1 << " = " << B[i] << endl;
    }
    cout << "\nNr. de iteratii: " << k1 << endl;
}

// Metoda Gauss-Seidel
void gaussseidel() {
    int i, j, m, k1 = 0, k;
    float v, x[N], q[N][N], d[N], s[N][N], t[N][N], x1[N], er;
    for (i = 0; i < N; i++)
        for (j = 0; j < N; j++) {
            if (i == j) {
                s[i][j] = 1 / A[i][j];
                t[i][j] = 0;
            } else {
                s[i][j] = 0;
                t[i][j] = A[i][j];
            }
        }
    for (i = 0; i < N; i++)
        for (j = 0; j < N; j++) {
            v = 0;
            for (m = 0; m < N; m++)
                v += s[i][m] * t[m][j];
            q[i][j] = -v;
        }
    for (i = 0; i < N; i++) {
        v = 0;
        for (m = 0; m < N; m++)
            v += s[i][m] * B[m];
        d[i] = v;
    }
    k1 = 0;
    for (i = 0; i < N; i++)
        x[i] = d[i];
    do {
        k1++;
        for (i = 0; i < N; i++)
            x1[i] = x[i];
        for (i = 0; i < N; i++) {
            v = 0;
            for (m = 0; m < N; m++)
                v += x[m] * q[i][m];
            x[i] = v + d[i];
        }
        er = fabs(x1[0] - x[0]);
        for (m = 1; m < N; m++)
            if (er < fabs(x1[m] - x[m]))
                er = fabs(x1[m] - x[m]);
    } while (er > 0.000001);
    cout << "Metoda Gauss-Seidel cu eroarea 0.000001:" << endl;
    for (i = 0; i < N; i++) {
        cout << "x" << i + 1 << " = " << B[i] << endl;
    }
    cout << "\nNr. de iteratii: " << k1 << endl;
}

// Meniu pentru alegerea metodei
int main() {
    int i;
    while (true) {
        cout << "" << endl;
        cout << "[ 1 ] Gauss" << endl;
        cout << "[ 2 ] Jacobi" << endl;
        cout << "[ 3 ] Gauss-Seidel" << endl;
        cout << "[ 4 ] Determinant" << endl; 
        cout << "[ 0 ] Iesi din consola" << endl;
        cout << "Comanda >> ";
        cin >> i;

        float x[N];  // Vectorul pentru a stoca solutiile

        switch (i) {
        case 1: 
            Gauss();
            cout << "Verificare solutie Gauss: " << (verificaSolutie(B) ? "Solutie valida" : "Solutie invalida") << endl;
            break;
        case 2: 
            jacobi();
            cout << "Verificare solutie Jacobi: " << (verificaSolutie(B) ? "Solutie valida" : "Solutie invalida") << endl;
            break;
        case 3: 
            gaussseidel();
            cout << "Verificare solutie Gauss-Seidel: " << (verificaSolutie(B) ? "Solutie valida" : "Solutie invalida") << endl;
            break;
        case 4:
            cout << "Determinantul matricei sistemului: " << determinant() << endl;
            break;
        case 0: 
            return 0;
        }
    }
}