
#include <stdio.h>
#include <string.h>

void regula1(char* arr);
void regula2(char* arr);
void regula3(char* arr);
void regula4(char* arr);
void regula5(char* arr);

int main() {
    char arr[10];
    char vN[1];

    printf("Cuvinte dupa Regula 1:\n");
    regula1(arr);

    printf("\nCuvinte dupa Regula 2:\n");
    regula2(arr);

    printf("\nCuvinte dupa Regula 3:\n");
    regula3(arr);

    printf("\nCuvinte dupa Regula 4:\n");
    regula4(arr);

    printf("\nCuvinte dupa Regula 5:\n");
    regula5(arr);
    
    printf("\n\nAutomatul finit echivalent gramaticii date este:");
    printf("\nAF=(Q, SI, d, q0, F)\n");
    printf("Q = VN U {X} = {S, L, D, X}\n");
    printf("SI = VT = {a,b, c, d, e f, j}\n");
    printf("q0 = S\n");
    printf("F = {X}\n");

	if (vN[1]) {
	    printf("\n1. S -> aS \nd(S,a) := d(S,a) U {S}={S}\n\n");
		printf("2. S -> bS \nd(S,b) := d(S,b) U {S}={S}\n\n");
		printf("3. S -> cD \nd(S,c) := d(S,c) U {D} = {D}\n\n");
		printf("4. S -> dL \nd(S,d) := d(S,d) U {L} = {L}\n\n");
        printf("5. S -> e \nd(S,e) := d(S,e) U {X} = {S,X}\n\n");
		printf("6. L -> eL \nd(L,e) := d(L,e) U {L} = {L}\n\n");
		printf("7. L -> fL \nd(L,f) := d(L,f) U {L} = {L}\n\n");
		printf("8. L -> jD \nd(L,j) := d(L,j) U {D} = {D}\n\n");
        printf("9. L -> eL \nd(L,e) := d(L,e) U {L} = {L}\n\n");
		printf("10. D -> eD \nd(D,e) := d(D,e) U {D} = {D}\n\n");
		printf("11. D -> d \nd(D,d) := d(D,d) U {X} = {D,X}\n\n");
	}

    return 0;
}

void regula1(char* arr) {
    strcpy(arr, "a");
    printf("%s -> ", arr);

    strcat(arr, "d");
    printf("%s -> ", arr);

    strcat(arr, "e");
    printf("%s -> ", arr);

    strcat(arr, "e");
    printf("%s ", arr);
}

void regula2(char* arr) {
    strcpy(arr, "a");
    printf("%s -> ", arr);

    strcat(arr, "b");
    printf("%s -> ", arr);

    strcat(arr, "c");
    printf("%s -> ", arr);

    strcat(arr, "d");
    printf("%s ", arr);
}

void regula3(char* arr) {
    strcpy(arr, "d");
    printf("%s -> ", arr);

    strcat(arr, "f");
    printf("%s -> ", arr);

    strcat(arr, "j");
    printf("%s -> ", arr);

    strcat(arr, "d");
    printf("%s ", arr);
}

void regula4(char* arr) {
    strcpy(arr, "e");
    printf("%s ", arr);
}

void regula5(char* arr) {
    strcpy(arr, "d");
    printf("%s -> ", arr);

    strcat(arr, "f");
    printf("%s -> ", arr);

    strcat(arr, "e");
    printf("%s -> ", arr);

    strcat(arr, "e");
    printf("%s ", arr);
}