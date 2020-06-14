% les faits: 

depart(150).
depart(126).
option(1).
option(2).
option(3).
option(4).
option(5).
option(6).
option(7).
numero(numero).
montant(montant).
code(code).

% Les regles:

combinaison(A,B) :- 
	depart(A),code(B),
	write('attention elle permet de faire un retrait '). 
combinaison(A,B,C) :- 
	A\=126,B==4,C==4,
	depart(A),option(B),option(C),
	write('Attention ce code permet de donner access a un paiement en ligne') ;
	A\=126,B==5,C==0,
	write('Attention ce code permet de donner access a un paiement en ligne');write('syntax error ou cette combinaison n\'est pas dangereux').
combinaison(A,B,C,D,E,F):-
	B==1,C=<3,
	depart(A),option(B),option(C),numero(D),montant(E),code(F),
	write('ce code permet d\'effectuer un transfert d\'argent').
combinaison(A,B,J,C,D,E,F):-
	A\=126,B==2,J=<4,
	depart(A),option(B),option(J),option(C),numero(D),montant(E),code(F),
	write('ce code permet d\'effectuer un transfert de credit chez orange');
	A\=150,B==3,J=<4,
	depart(A),option(B),option(J),option(C),numero(D),montant(E),code(F),
	write('ce code permet d\'effectuer un transfert de credit').
combinaison(A,B,J,C,D,E,F):-
	A\=150,B==3,J=<4,
	depart(A),option(B),option(J),option(C),numero(D),montant(E),code(F),
	write('ce code permet d\'effectuer un transfert de credit');write('syntax error ou cette combinaison n\'est pas dangereux').
