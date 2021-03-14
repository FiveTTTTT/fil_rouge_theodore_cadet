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

            var div = document.createElement('div');

            var displayBlock = slayer.name + " s'attaque a " + survivor.name;

            // Si le survivant n'a pas eu de chance, par rapport à sa caractéristique
            if( (Math.random() * 100) >= survivor.carac.probability ) {

                // Test de dégats au tueur
                if( Math.random() >= 0.5 ) {
                    displayBlock += '<br>' + survivor.name + " inflige " + survivor.strength + " a " + slayer.name + " avant de mourir !";
                    slayer.health -= survivor.strength;
                }

                displayBlock += '<br>' + survivor.name + " est mort !";
                div.style.backgroundColor= "red";

                deaths.push(survivor.name);

                survivors.splice(index, 1);

            } else {
                displayBlock += '<br>' + survivor.name + ' arrive a fuir ! ';
                div.style.backgroundColor= "green";
            }

            div.style.padding = " 5px ";
            div.style.margin = " 5px ";
            div.style.width = " 350px ";
            
            div.style.color = "white";
            div.innerHTML = displayBlock;
            document.body.appendChild(div);

        });

        var div = document.createElement('div');
        div.style.padding = " 5px ";
        div.style.margin = " 5px ";
        div.style.width = " 350px ";
        div.style.backgroundColor= "black";
        div.style.color = "white";
        div.innerHTML = 'RIP : ' + deaths.join(', ');
        document.body.appendChild(div);
        
    }

    var div = document.createElement('div');

    var lastMessage = '';

    if(slayer.health <= 0) {
        div.style.backgroundColor= "black";
        lastMessage = 'Apres avoir tue le dernier survivant, il reste moins de 0 pv à ' + slayer.name + '. il est donc mort !';
    } else {
        div.style.backgroundColor= "purple";
        lastMessage = 'Apres avoir tue le dernier survivant, il reste ' + slayer.health + ' a ' + slayer.name + '. il a donc gagne !';
    }
    
    div.style.padding = " 5px ";
    div.style.margin = " 5px ";
    div.style.width = " 350px ";
    div.style.color = "white";
    div.innerHTML = lastMessage;
    document.body.appendChild(div);
    
}

// Appel

killingSpree(group, killer);