#include<iostream>
#include<String.h>
using namespace std;
int main(){
	char p[100];
	int key;
	int i,j,choice;
	cout<<"enter a plain text\n";
	cin.getline(p,100);
	cout<<"enter your choice \n 1.Encription \n 2.Decryption \n";
	cin>>choice;
	cout<<"Enter key = ";
	cin>>key;
	// Encription message
	if (choice==1){
		char ch;
		for(i=0;p[i]!='\0';++i){
			ch=p[i];
			//Encript for lowercase letters
			if(ch>='a' && ch<='z'){
				ch=ch+key;
				if(ch>'z'){
					ch=ch-'z'+'a'-1;
				}
				p[i]=ch;
			}
			//Encript for Uppercase letters
			else if(ch>='A' && ch<='Z'){
				ch=ch+key;
				if(ch>'Z'){
					ch=ch-'Z'+'A'-1;
				}
				p[i]=ch;
			}
		}
		cout<<"Encrypted message is ="<<p;
}
	//Decryption message
	else if (choice==2){
		char ch;
		for(i=0;p[i]!='\0';++i){
			ch=p[i];
			//Decrypt for lowercase letters
			if(ch>='a' && ch<='z'){
				ch=ch-key;
				if(ch<'a'){
					ch=ch+'z'-'a'+1;
				}
				p[i]=ch;
			}
			//Decrypt for Uppercase letters
			else if(ch>='A' && ch<='Z'){
				ch=ch-key;
				if(ch<'A'){
					ch=ch+'Z'-'A'+1;
				}
				p[i]=ch;
			}
		}
		cout<<"Decypted message is ="<<p;
	
		
	}
}

