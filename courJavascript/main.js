// alert("hello world!")

// var testVar1 = 1; // var marche partout 
// if (true) {
//     var testVar1 =2
//     alert(testVar1) // affiche 2
// }
// alert(testVar1) // affiche 2


// let testVar2 = 1 // var marche seulement là elle est defini
// if (true) {
//     var testVar2 =2
//     alert(testVar2) // affiche 2
// }
// alert(testVar2) // affiche 1


// Le nombre d’Avengers. // var/let int

// Le nom de famille de l’empereur romain Jules. //cont string

// Le nombre d’étoiles dans l’univers. //var/let bigInt

// Message de bienvenue sur un paillasson. // const string

// Présence d’un détecteur d’empreinte digitale sur un téléphone. // const booleen

// Prix total d’un ordinateur monté à la main. // var/let int

// Noms des 7 nains de Blanche Neige.  //const array

// Profil d’un étudiant sur son portail. // const object 

// La quantité de clones que peux faire Naruto. // var int

// 3 défauts passe-partout à donner à l’embauche (#perfectionniste) // const array

// Etat du chat de Schrödinger (oui, c’est sadique). //const null/booleen

// Un panier sur Amazon. // const collection(=array d'objets)

// Historique des recherches google sur ton pc. // const  collection(=array d'objets)

// Durée en années de la guerre de cent ans. // const int

// Caractéristiques d’un vin. // const objet

// Le nom du prochain président de la république. // var null



// const skieur = {
//     nom : "jojo",
//     chauff: 1,
// }

// var piste =[1,2,3,4];




// function montagne(skieur, piste) {
//     shuffle(piste);
//     if (piste[0] != 1 ) {
//         return skieur.nom + " n'arrivera à le faire";
//     }
//     else{
//         for (let i=0; i < piste.length; i++) {
//             if (skieur.chauff >= piste[i]) {
//                 skieur.chauff++;
//             }
//             else{
//                 return skieur.nom+ " a du s'arreter à la piste "+piste[i];
//             }
//         }
//         return skieur.nom+ " a réussi! ";
//     } 
// }

// alert(montagne(skieur, piste));




// const passager={
//     name: "theodore",
//     calm: 10
// }

// const trajet={
//     auto :50,
//     nonAuto :50,
//     chmnt:0,
//     isAuto: true
// }



// function metro(passanger, journey) {
//     while (journey.auto>0 || journey.nonAuto>0 ) {
//         if (journey.auto<=0) {
//             journey.nonAuto--;
            
//         }
//         else if(journey.nonAuto<=0){
//             journey.auto--;
//         }
//         else{
//             if (Math.random()*100<50) {
//                 journey.auto--;
            
//             }
//             else{
//                 journey.nonAuto--;
//             }
//         }
        
//         if (Math.random()*100<30) {
//             journey.chmnt++;
//             if (Math.random()*100<50) {
//                 passanger.calm--;
//             }    
            
//         }
//         else{
//             if (Math.random()*100<20) {
//                 passanger.calm--;
                
//             }

//         }
//         console.log("changements :"+journey.chmnt+" "+"calme :"+passanger.calm);
//         console.log("nonAuto :"+journey.nonAuto+" "+"Auto :"+journey.auto);
//         if (Math.random()*100>=passanger.calm*10) {
//             console.log( "kill every last one of them!!");
//             return passanger.name+" has killed everyone";
//         }
        
//     }
//     return passanger.name+ " maid it!";
// }

// alert(metro(passager,trajet))

function shuffle(a) { 
    for (let i = a.length - 1; i > 0; i--) { 
        const j = Math.floor(Math.random() * (i + 1)); [a[i], a[j]] = [a[j], a[i]]; 
    } 
    return a; 
}




// Variables

class Caracteristic {
    name;
    probability;
    constructor(name, probability) {
        this.name = name;
        this.probability = probability;
    }
}

class Survivor {
    name;
    strength;
    carac;
    constructor(name, strength, carac) {
        this.name = name;
        this.strength = strength;
        this.carac = carac;
    }
}

const specificities = [
    new Caracteristic('nerd', 50),
    new Caracteristic('sportif', 90),
    new Caracteristic('blonde', 30),
]

const firstnames = ['jean', 'mike', 'kevin', 'marie', 'elodie', 'john'];

const group = new Array();

for (let index = 0; index < 5; index++) {
    var firstnameIndex = Math.floor (Math.random() * (firstnames.length) );
    group.push( new Survivor(
        firstnames[firstnameIndex], 
        Math.floor(Math.random() * 10) + 1, 
        specificities[ Math.floor (Math.random() * (specificities.length) ) ] 
    ));

    firstnames.splice(firstnameIndex, 1);

}

console.log(group);

const killer = { name: 'Jason', health: 20};

// Fonction

function killingSpree(survivors, slayer) {

    // Tant qu'il y a des survivants 
    while(survivors.length > 0) {

        var deaths = new Array();

        // Alors le tueur va essayer de tuer chaque membre restant
        survivors.forEach((survivor, index) => {

            console.log(slayer.name + " s'attaque a " + survivor.name);

            // Si le survivant n'a pas eu de chance, par rapport à sa caractéristique
            if( (Math.random() * 100) >= survivor.carac.probability ) {

                // Test de dégats au tueur
                if( Math.random() >= 0.5 ) {
                    console.log(survivor.name + " inflige " + survivor.strength + " a " + slayer.name) + " avant de mourir !";
                    slayer.health -= survivor.strength;
                }

                console.log(survivor.name + " est mort !");

                deaths.push(survivor.name);

                survivors.splice(index, 1);

            } else {
                console.log( survivor.name + ' arrive a fuir ! ');
            }

        });
        
        console.log('RIP : ' + deaths.join(', '))

    }

    if(slayer.health <= 0) {
        console.log('Apres avoir tue le dernier survivant, il reste moins de 0 pv à ' + slayer.name + '. il est donc mort !');
    } else {
        console.log('Apres avoir tue le dernier survivant, il reste ' + slayer.health + ' a ' + slayer.name + '. il a donc gagne !');
    }
    
}

// Appel

killingSpree(group, killer);
















