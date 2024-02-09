#include <iostream>
#include <cmath>

// Definim funcția
double F(double x1, double x2) {
    return x1*x1 + 2*x1*x2*x2 + 5*x2*x2 - 2*x1 - 3*x2;
}


void gradient(double x1, double x2, double& grad_x1, double& grad_x2) {
    grad_x1 = 2*x1 + 2*x2*x2 - 2;
    grad_x2 = 4*x1*x2 + 10*x2 - 3;
}

int main() {
    
    double x1 = 0.0;
    double x2 = 0.0;
    double alpha = 0.01; 

    
    double tolerance = 0.0001;
    double diff = tolerance + 1;

    
    while (diff > tolerance) {
        double grad_x1, grad_x2;
        gradient(x1, x2, grad_x1, grad_x2);

    
        double old_x1 = x1;
        double old_x2 = x2;

    
        x1 = x1 - alpha * grad_x1;
        x2 = x2 - alpha * grad_x2;

    
        diff = std::abs(F(old_x1, old_x2) - F(x1, x2));
    }

    
    std::cout << "Minimul functiei este " << F(x1, x2) << " pentru x1 = " << x1 << " si x2 = " << x2 << std::endl;

    return 0;
}
