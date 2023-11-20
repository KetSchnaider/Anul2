#include <iostream>


class ListItem {
public:
    int data;
    ListItem* next;

    // Constructor
    ListItem(int value) : data(value), next(nullptr) {}
};

// Clasa List-coadă
class ListQueue {
private:
    ListItem* front;  // Primul element din coadă
    ListItem* rear;   // Ultimul element din coadă

public:
    // Constructor
    ListQueue() : front(nullptr), rear(nullptr) {}

    // Destructor
    ~ListQueue() {
        while (!isEmpty()) {
            dequeue();
        }
    }

    // Coada este goală sau nu
    bool isEmpty() const {
        return front == nullptr;
    }

    // dimensiunea cozii
    int size() const {
        int count = 0;
        ListItem* current = front;
        while (current != nullptr) {
            count++;
            current = current->next;
        }
        return count;
    }

    // add element in queue
    void enqueue(int value) {
        ListItem* newItem = new ListItem(value);
        if (isEmpty()) {
            front = rear = newItem;
        } else {
            rear->next = newItem;
            rear = newItem;
        }
    }

    // delete element from queue
    void dequeue() {
        if (isEmpty()) {
            std::cerr << "Error: Trying to dequeue from an empty queue." << std::endl;
            return;
        }

        ListItem* temp = front;
        front = front->next;
        delete temp;
    }

    // overload operatorului "+"
    ListQueue operator+(const ListQueue& other) const {
        ListQueue result = *this;

        ListItem* current = other.front;
        while (current != nullptr) {
            result.enqueue(current->data);
            current = current->next;
        }

        return result;
    }

    // overload operatorului "="
    ListQueue& operator=(const ListQueue& other) {
        if (this != &other) {
            // clean memory
            while (!isEmpty()) {
                dequeue();
            }

            // element copy
            ListItem* current = other.front;
            while (current != nullptr) {
                enqueue(current->data);
                current = current->next;
            }
        }

        return *this;
    }

    // if 2 queue are similar
    friend bool operator==(const ListQueue& queue1, const ListQueue& queue2) {
        if (queue1.size() != queue2.size()) {
            return false;
        }

        ListItem* current1 = queue1.front;
        ListItem* current2 = queue2.front;

        while (current1 != nullptr) {
            if (current1->data != current2->data) {
                return false;
            }
            current1 = current1->next;
            current2 = current2->next;
        }

        return true;
    }

    friend bool operator!=(const ListQueue& queue1, const ListQueue& queue2) {
        return !(queue1 == queue2);
    }

    friend bool operator<(const ListQueue& queue1, const ListQueue& queue2) {
    ListItem* current1 = queue1.front;
    ListItem* current2 = queue2.front;

    while (current1 != nullptr && current2 != nullptr) {
        if (current1->data < current2->data) {
            return true;
        } else if (current1->data > current2->data) {
            return false;
        }

        // check for elements
        current1 = current1->next;
        current2 = current2->next;
    }

    // care queue ii mai mare
    return queue1.size() < queue2.size();
}


    friend bool operator>(const ListQueue& queue1, const ListQueue& queue2) {
    ListItem* current1 = queue1.front;
    ListItem* current2 = queue2.front;

    while (current1 != nullptr && current2 != nullptr) {
        if (current1->data < current2->data) {
            return false;
        } else if (current1->data > current2->data) {
            return true;
        }

        // check for elements
        current1 = current1->next;
        current2 = current2->next;
    }

    // care queue ii mai mare
    return queue1.size() < queue2.size();
}

    // overload operator "<<"
    friend std::ostream& operator<<(std::ostream& os, const ListQueue& queue) {
        ListItem* current = queue.front;
        while (current != nullptr) {
            os << current->data << " ";
            current = current->next;
        }
        return os;
    }

    // overload operator ">>"
    friend std::istream& operator>>(std::istream& is, ListQueue& queue) {
        int value;
        is >> value;
        queue.enqueue(value);
        return is;
    }
};

int main() {
    
    ListQueue queue1, queue2;
    
    // adaugare elemente
    queue1.enqueue(1);
    queue1.enqueue(2);
    queue1.enqueue(3);

    queue2.enqueue(4);
    queue2.enqueue(5);

    // display
    std::cout << "Coada 1: " << queue1 << std::endl;
    std::cout << "Coada 2: " << queue2 << std::endl;

    // summ
    ListQueue sumQueue = queue1 + queue2;
    std::cout << "Suma coadelor: " << sumQueue << std::endl;

    // check
    std::cout << "Coada 1 este egala cu Coada 2? " << (queue1 == queue2 ? "Da" : "Nu") << std::endl;

    return 0;
}
