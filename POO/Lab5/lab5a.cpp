 // Să se creeze, o ierarhie de moştenire: stilou, creion – condei de ardezie.

#include <iostream>

// Base class 1 Stilou
class Stilou {
public:
    Stilou() {
        std::cout << "Constructor Stilou" << std::endl;
    }

    void scrie() {
        std::cout << "Stilou: Scrie..." << std::endl;
    }

    ~Stilou() {
        std::cout << "Destructor Stilou" << std::endl;
    }
};

// Base class 2 Creion
class Creion {
public:
    Creion() {
        std::cout << "Constructor Creion" << std::endl;
    }

    void deseneaza() {
        std::cout << "Creion: Deseneaza..." << std::endl;
    }

    ~Creion() {
        std::cout << "Destructor Creion" << std::endl;
    }
};

// Derived class CondeiDeArdezie
class CondeiDeArdezie : public Stilou, Creion {
public:
    CondeiDeArdezie() {
        std::cout << "Constructor CondeiDeArdezie" << std::endl;
    }

    void scrie() {
        std::cout << "CondeiDeArdezie: Scrie..." << std::endl;
    }

    void deseneaza() {
        std::cout << "CondeiDeArdezie: Deseneaza..." << std::endl;
    }

    ~CondeiDeArdezie() {
        std::cout << "Destructor CondeiDeArdezie" << std::endl;
    }
};

int main() {
    CondeiDeArdezie* condei = new CondeiDeArdezie();
    condei->scrie();
    condei->deseneaza();
    delete condei;

    return 0;
}
