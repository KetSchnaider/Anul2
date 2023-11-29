#include<bits/stdc++.h>
using namespace std;
struct Data
{
    float x, y;
};

double interpolate(Data f[], float xi, int n)
{
    double result = 0; 

    for (int i=0; i<n; i++)
    {

        double term = f[i].y;
        for (int j=0;j<n;j++)
        {
            if (j!=i)
                term = term*(xi - f[j].x)/double(f[i].x - f[j].x);
        }


        result += term;
    }

    return result;
}
int main()
{

   int n = 7;
   int m = 5;
   float Ksi = 2.56;

        Data f[] = 
        {
        {2.3,9.1}, 
        {2.5,8.5}, 
        {2.65,87.5}, 
        {2.7,12}, 
        {2.85,13.2}, 
        {3,11.7}, 
        {3.1,6.6}
        };
    cout << "Value of Ln(x) is : " << interpolate(f, Ksi , n) <<endl;

    cout << "\nValue of Lm(x) is : " << interpolate(f, Ksi , m) <<endl;

    return 0; }
