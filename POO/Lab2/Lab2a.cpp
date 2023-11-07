#include <iostream>
#include <string>
#include <ctime>
#include <cstdio>

class File {
private:
    std::string* fileName;
    std::string* fileExtension;
    int* fileSize;
    time_t* creationTime;

public:
    // Constructor implicit
    File() {
        fileName = new std::string("");
        fileExtension = new std::string("");
        fileSize = new int(0);
        creationTime = new time_t(time(nullptr));
    }

    // Constructor cu parametri
    File(const std::string& name, const std::string& extension, int size) {
        fileName = new std::string(name);
        fileExtension = new std::string(extension);
        fileSize = new int(size);
        creationTime = new time_t(time(nullptr));
    }

    // Destructor
    ~File() {
        delete fileName;
        delete fileExtension;
        delete fileSize;
        delete creationTime;
    }

    // functie redunumire
    void rename(const std::string& newName) {
        *fileName = newName;
    }

    // functie alt directoriu
    void transferToDirectory(const std::string& newDirectory) {
        std::string newFilePath = newDirectory + "/" + *fileName + "." + *fileExtension;
        
        if (std::rename((*fileName + "." + *fileExtension).c_str(), newFilePath.c_str()) == 0) {
            std::cout << "Fișierul a fost mutat în directorul " << newDirectory << std::endl;
            *fileName = newFilePath;
        } else {
            std::cerr << "Eroare la mutarea fișierului" << std::endl;
        }
    }

    // functie pentru modificarea anexei
    void changeExtension(const std::string& newExtension) {
        *fileExtension = newExtension;
    }

    // functie afisare
    void displayFileInfo() {
        std::cout << "Numele fișierului: " << *fileName << "." << *fileExtension << std::endl;
        std::cout << "Dimensiunea: " << *fileSize << " bytes" << std::endl;
        std::cout << "Data și ora creării: " << asctime(localtime(creationTime));
    }
};

int main() {
    File myFile("document", "doc", 1024);
    myFile.displayFileInfo();

    myFile.rename("new_document");
    myFile.changeExtension("txt");
    myFile.displayFileInfo();

    myFile.transferToDirectory("/noul_director");
    
    return 0;
}
