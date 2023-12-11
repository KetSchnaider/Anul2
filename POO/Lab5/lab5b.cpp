// Să se creeze,o ierarhie de moştenire:rechizite de birou - stilou,creion – condei de ardezie.

#include <iostream>
#include <string>

class RechiziteBirou {
public:
    RechiziteBirou() {
        std::cout << "Constructor RechiziteBirou\n";
    }

    ~RechiziteBirou() {
        std::cout << "Destructor RechiziteBirou\n";
    }

    void foloseste(const std::string& parametru) const {
        

        // Adaugăm construcția if
        if (parametru == "s") {
            std::cout << "Stilou folosit.\n";
        } else if (parametru == "c") {
            std::cout << "Creion folosit.\n";
        } else if (parametru == "ca") {
            std::cout << "Condeiul de ardezie folosit.\n";
        } else {
            std::cout << "Rechizită necunoscută.\n";
        }
    }
};

class Stilou : public RechiziteBirou {
public:
    Stilou() {
        std::cout << "Constructor Stilou\n";
    }

    ~Stilou() {
        std::cout << "Destructor Stilou\n";
    }
};

class Creion : public RechiziteBirou {
public:
    Creion() {
        std::cout << "Constructor Creion\n";
    }

    ~Creion() {
        std::cout << "Destructor Creion\n";
    }
};

class CondeiArdezie : public Stilou, public Creion {
public:
    CondeiArdezie() {
        std::cout << "Constructor CondeiArdezie\n";
    }

    ~CondeiArdezie() {
        std::cout << "Destructor CondeiArdezie\n";
    }
};

int main() {
    RechiziteBirou* creion = new Creion();
    creion->foloseste("c");
    delete creion;

    RechiziteBirou* stilou = new Stilou();
    stilou->foloseste("s");
    delete stilou;

    // problema diamantului
    //  RechiziteBirou* condeiardezie = new CondeiArdezie();
    // specificam implicit calea

     RechiziteBirou* condeiardezie = static_cast<Stilou*>(new CondeiArdezie());
     condeiardezie->foloseste("ca");
     delete condeiardezie;
    
    return 0;
}

   
