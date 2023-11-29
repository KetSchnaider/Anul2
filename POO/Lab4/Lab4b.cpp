#include <iostream>
#include <vector>
#include <algorithm>
#include <ctime>
#include <cstdlib>

class CarteDeJoc {
protected:
    int grad;
    std::string culoare;

public:
    CarteDeJoc(int grad, const std::string& culoare)
        : grad(grad), culoare(culoare) {}

    void Intorsa() const {
        std::cout << "Cartea este intoarsa.\n";
    }

    void Deschisa() {
        std::cout << "Cartea este deschisa.\n";
    }
};

class ButucDeCarti {
protected:
    std::vector<CarteDeJoc> carti;

public:
    void AdaugaCarte(const CarteDeJoc& carte) {
        carti.push_back(carte);
    }

    virtual void ScoateCarti() = 0;
};

class ButucOrdine : public ButucDeCarti {
public:
    void ScoateCarti() {
        std::cout << "Scoatere carti in ordine:\n";
        for (const auto& carte : carti) {
            carte.Intorsa();
        }
        std::cout << "\n";
    }
};

class ButucAleator : public ButucDeCarti {
public:
    void ScoateCarti() {
        std::cout << "Scoatere carti aleator:\n";
        std::random_shuffle(carti.begin(), carti.end());
        for (const auto& carte : carti) {
            carte.Intorsa();
        }
        std::cout << "\n";
    }
};

int main() {
    ButucOrdine butucOrdine;
    ButucAleator butucAleator;

    butucOrdine.AdaugaCarte(CarteDeJoc(10, "Caro"));
    butucOrdine.AdaugaCarte(CarteDeJoc(12, "Inima"));
    butucOrdine.AdaugaCarte(CarteDeJoc(14, "Romb"));

    butucAleator.AdaugaCarte(CarteDeJoc(11, "Trefla"));
    butucAleator.AdaugaCarte(CarteDeJoc(8, "Caro"));
    butucAleator.AdaugaCarte(CarteDeJoc(13, "Inima"));

    butucOrdine.ScoateCarti();
    butucAleator.ScoateCarti();

    return 0;
}
