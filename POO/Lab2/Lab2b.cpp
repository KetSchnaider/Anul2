#include <iostream>


class MatrixException {
private:
    std::string message;

public:
    MatrixException(const std::string& msg) : message(msg) {}

    const std::string& getMessage() const {
        return message;
    }
};

class Matrix {
private:
    long** data;
    int numRows;
    int numCols;

public:
    // Constructor implicit
    Matrix() : data(nullptr), numRows(0), numCols(0) {}

    // Constructor cu un parametru
    Matrix(int size) : numRows(size), numCols(size) {
        if (size <= 0) {
            throw MatrixException("Dimensiunea matricei este incorectă.");
        }
        // Alocare dinamică pentru matricea pătrată
        data = new long*[size];
        for (int i = 0; i < size; i++) {
            data[i] = new long[size]();
        }
    }

    // Constructor cu doi parametri 
    Matrix(int rows, int cols) : numRows(rows), numCols(cols) {
        if (rows <= 0 || cols <= 0) {
            throw MatrixException("Dimensiunile matricei sunt incorecte.");
        }
        // Aloc memory
        data = new long*[rows];
        for (int i = 0; i < rows; i++) {
            data[i] = new long[cols]();
        }
    }

    // Destructor
    ~Matrix() {
        if (data) {
            
            for (int i = 0; i < numRows; i++) {
                delete[] data[i];
            }
            delete[] data;
        }
    }

    // Funcție return val
    long getValue(int i, int j) const {
        if (i < 0 || i >= numRows || j < 0 || j >= numCols) {
            throw MatrixException("Indicii sunt în afara limitelor matricei.");
        }
        return data[i][j];
    }

    // Funcție set value
    void setValue(int i, int j, long value) {
        if (i < 0 || i >= numRows || j < 0 || j >= numCols) {
            throw MatrixException("Indicii sunt în afara limitelor matricei.");
        }
        data[i][j] = value;
    }

    // Func sum
    Matrix add(const Matrix& other) const {
        if (numRows != other.numRows || numCols != other.numCols) {
            throw MatrixException("Dimensiunile matricelor nu corespund.");
        }

        Matrix result(numRows, numCols);
        for (int i = 0; i < numRows; i++) {
            for (int j = 0; j < numCols; j++) {
                result.setValue(i, j, getValue(i, j) + other.getValue(i, j));
            }
        }
        return result;
    }

    // Func diference
    Matrix subtract(const Matrix& other) const {
        if (numRows != other.numRows || numCols != other.numCols) {
            throw MatrixException("Dimensiunile matricelor nu corespund.");
        }

        Matrix result(numRows, numCols);
        for (int i = 0; i < numRows; i++) {
            for (int j = 0; j < numCols; j++) {
                result.setValue(i, j, getValue(i, j) - other.getValue(i, j));
            }
        }
        return result;
    }

    // Func multiply
    Matrix multiplyByScalar(long scalar) const {
        Matrix result(numRows, numCols);
        for (int i = 0; i < numRows; i++) {
            for (int j = 0; j < numCols; j++) {
                result.setValue(i, j, getValue(i, j) * scalar);
            }
        }
        return result;
    }

    // Func display
    void printMatrix() const {
        for (int i = 0; i < numRows; i++) {
            for (int j = 0; j < numCols; j++) {
                std::cout << getValue(i, j) << " ";
            }
            std::cout << std::endl;
        }
    }
};

int main() {
    try {
        Matrix matrixA(3, 3);
        Matrix matrixB(3, 3);

        for (int i = 0; i < 3; i++) {
            for (int j = 0; j < 3; j++) {
                matrixA.setValue(i, j, i + j);
                matrixB.setValue(i, j, i - j);
            }
        }

        std::cout << "Matrix A:" << std::endl;
        matrixA.printMatrix();

        std::cout << "Matrix B:" << std::endl;
        matrixB.printMatrix();

        Matrix sum = matrixA.add(matrixB);
        std::cout << "Suma matricelor A și B:" << std::endl;
        sum.printMatrix();

        Matrix difference = matrixA.subtract(matrixB);
        std::cout << "Diferența matricelor A și B:" << std::endl;
        difference.printMatrix();
    } catch (const MatrixException& e) {
        std::cerr << "Eroare: " << e.getMessage() << std::endl;
    }

    return 0;
}
