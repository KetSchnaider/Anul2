#include <iostream>

struct Vector {
    int* data;  
    int size;   

    void initialize(int initialSize) {
        size = initialSize;
        data = new int[size];
        for (int i = 0; i < size; i++) {
            data[i] = 0;  
        }
    }

    void destroy() {
        delete[] data;
        size = 0;
    }

    void resize(int newSize) {
        int* newData = new int[newSize];
        for (int i = 0; i < newSize; i++) {
            if (i < size) {
                newData[i] = data[i];
            } else {
                newData[i] = 0;
            }
        }
        delete[] data;
        data = newData;
        size = newSize;
    }

    int& operator[](int index) {
        if (index < 0 || index >= size) {
             std::out_of_range("Index out of range");
        }
        return data[index];
    }

    double calculateAveragePositive() {
        int sum = 0;
        int count = 0;
        for (int i = 0; i < size; i++) {
            if (data[i] > 0) {
                sum += data[i];
                count++;
            }
        }
        if (count == 0) {
            return 0.0;
        }
        return static_cast<double>(sum) / count;
    }
};

int main() {
    Vector vector1;
    int size1;

    std::cout << "Introduceți dimensiunea primului vector: ";
    std::cin >> size1;
    vector1.initialize(size1);

    std::cout << "Introduceți elementele primului vector:\n";
    for (int i = 0; i < vector1.size; i++) {
        std::cin >> vector1[i];
    }

    Vector vector2;
    int size2;

    std::cout << "Introduceți dimensiunea celui de-al doilea vector: ";
    std::cin >> size2;
    vector2.initialize(size2);

    std::cout << "Introduceți elementele celui de-al doilea vector:\n";
    for (int i = 0; i < vector2.size; i++) {
        std::cin >> vector2[i];
    }

    std::cout << "Media elementelor pozitive din primul vector: " << vector1.calculateAveragePositive() << std::endl;
    std::cout << "Media elementelor pozitive din cel de-al doilea vector: " << vector2.calculateAveragePositive() << std::endl;

    vector1.destroy();
    vector2.destroy();

    return 0;
}
