// Să se creeze,o ierarhie de moştenire:rechizite de birou - Student,Colaborator – condei de ardezie.

#include <iostream>
#include <string>

class Om {
public:
    Om() {
        std::cout << "Constructor Om\n";
    }

    ~Om() {
        std::cout << "Destructor Om\n";
    }

    void foloseste(const std::string& parametru) const {
        

        // Adaugăm construcția if
        if (parametru == "s") {
            std::cout << "Student folosit.\n";
        } else if (parametru == "c") {
            std::cout << "Colaborator folosit.\n";
        } else if (parametru == "ca") {
            std::cout << "Condeiul de ardezie folosit.\n";
        } else {
            std::cout << "Rechizită necunoscută.\n";
        }
    }
};

class Student : public Om {
public:
    Student() {
        std::cout << "Constructor Student\n";
    }

    ~Student() {
        std::cout << "Destructor Student\n";
    }
};

class Colaborator : public Om {
public:
    Colaborator() {
        std::cout << "Constructor Colaborator\n";
    }

    ~Colaborator() {
        std::cout << "Destructor Colaborator\n";
    }
};

class Practicant : public Student, public Colaborator {
public:
    Practicant() {
        std::cout << "Constructor Practicant\n";
    }

    ~Practicant() {
        std::cout << "Destructor Practicant\n";
    }
};

int main() {
    Om* Colaborator = new Colaborator();
    Colaborator->foloseste("c");
    delete Colaborator;

    Om* Student = new Student();
    Student->foloseste("s");
    delete Student;

    // problema diamantului
    //  Om* Practicant = new Practicant();
    // specificam implicit calea

     Om* Practicant = static_cast<Student*>(new Practicant());
     Practicant->foloseste("ca");
     delete Practicant;
    
    return 0;
}

   
