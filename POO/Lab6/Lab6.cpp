#include <iostream>

class Mammal { // clasa abstracta
public:
    virtual void describe() const = 0;  // functie virtuala pura
};


class Animal : public Mammal {
public:
    void describe() const override 
    {
        std::cout << "Este un animal. " << std::endl;
    }
};

class Human : public Mammal {
public:
    void describe() const override 
    {
        std::cout << "Este un om." << std::endl;
    }
};

class Dog : public Animal {
public:
    void describe() const override 
    {
        std::cout << "Este un câine." << std::endl;
    }
};

class Cow : public Animal {
public:
    void describe() const override 
    {
        std::cout << "Este o vacă." << std::endl;
    }
};

class zoopark {
public:
    void describe(Mammal *mammal) // late binding , run time
    {
        mammal->describe(); 
    }

};

int main() 
{
    Mammal* arr[] = {new Cow(), new Dog()};


    
    Mammal* mammal1 = new Human(); // De cate ori se apeleaza constructorii ?  2
    Mammal* mammal2 = new Dog(); // De cate ori se apeleaza constructorii ?  3

    Human ** hmhm = new Human*[3]; // De cate ori se apeleaza constructorii ?   maybe 3, 0
    
    Dog * d1 = new Dog;

    Cow ol;
    zoopark abc;
    abc.describe(mammal1);
    abc.describe(&ol);

    mammal2->describe();



    for(int i=0 ; i < sizeof(arr) / sizeof(arr[0]) ; i++) {
        arr[i]->describe();
        delete arr[i];
    }

    delete mammal1;
    delete mammal2;
    // delete[] arr;
} // De cate ori aici se apeleaza destructorul pentru d1 0 , ca nu avem delete d1
