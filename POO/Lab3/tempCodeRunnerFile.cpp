   void dequeue() {
        if (isEmpty()) {
            std::cerr << "Error: Trying to dequeue from an empty queue." << std::endl;
            return;
        }

        ListItem* temp = front;
        front = front->next;
        delete temp;
    }