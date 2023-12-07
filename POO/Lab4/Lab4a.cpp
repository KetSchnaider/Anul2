#include <iostream>
#include <string>

class Om {
protected:
    std::string nume;
public:
    Om(const std::string& nume) : nume(nume) {}

    // Operator pentru iesire
    friend std::ostream& operator<<(std::ostream& os, const Om& om) {
        os << "Nume: " << om.nume;
        return os;
    }

    // Operator pentru intrare
    friend std::istream& operator>>(std::istream& is, Om& om) {
        std::cout << "Introduceti numele: ";
        is >> om.nume;
        return is;
    }

    // Constructor de copiere
    Om(const Om& other) : nume(other.nume) {}

    // Operator de atribuire
    Om& operator=(const Om& other) {
        if (this != &other) {
            nume = other.nume;
        }
        return *this;
    }
};

class Colaborator : public Om {
private:
    std::string post;
    double salariu;
public:
    int abc;
    Colaborator(const std::string& nume, const std::string& post, double salariu)
        : Om(nume), post(post), salariu(salariu) {}

    Colaborator() : Om(""), post(""), salariu(0.0) {}

    // Operator pentru iesire
    friend std::ostream& operator<<(std::ostream& os, const Colaborator& colaborator) {
        os << static_cast<const Om&>(colaborator) << ", Post: " << colaborator.post << ", Salariu: " << colaborator.salariu;
        return os;
    }

    // Operator pentru intrare
    friend std::istream& operator>>(std::istream& is, Colaborator& colaborator) {
        is >> static_cast<Om&>(colaborator);  // Citim partea Om
        std::cout << "Introduceti postul: ";
        is >> colaborator.post;
        std::cout << "Introduceti salariul: ";
        is >> colaborator.salariu;
        return is;
    }

    // Constructor de copiere
    Colaborator(const Colaborator& other)
        : Om(other), post(other.post), salariu(other.salariu) {}

    // Operator de atribuire
    Colaborator& operator=(const Colaborator& other) {
        if (this != &other) {
            Om::operator=(other);  // Atribuire pentru clasa de baza
            post = other.post;
            salariu = other.salariu;
        }
        return *this;
    }
};

int main() {
    Colaborator colaborator1("John Doe", "Programator", 5000.0);

    // Testam operatorul de iesire
    std::cout << "Informatii despre colaborator:\n" << colaborator1 << "\n\n";

    // Testam operatorul de intrare
    Colaborator colaborator2;
    std::cout << "Introduceti informatii despre un colaborator:\n";
    std::cin >> colaborator2;
    std::cout << "Informatii despre colaboratorul introdus:\n" << colaborator2 << "\n";

    return 0;
}
