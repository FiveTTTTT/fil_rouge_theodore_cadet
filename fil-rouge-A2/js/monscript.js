var fondCo = document.createElement('div');
fondCo.id="fondCoId"
fondCo.className="fondCoClasse"
var divCo = document.createElement('div');
divCo.id= "divCoId"
divCo.className="divCoClasse"
const nameMailMdpCo = ["Votre nom","Votre addresse email","Votre mot de passe"]
var isPseudo=false;

// create the connection popUp 
function popUpCo() {
    
    fondCo.style.backgroundColor= " rgba(0,0,0,0.5)";
    fondCo.style.position = " fixed ";
    fondCo.style.width = " 100% ";
    fondCo.style.height = " 100% ";
    fondCo.style.zIndex= "1";
    fondCo.style.display = " flex ";
    fondCo.style.justifyContent="center";
    fondCo.style.alignItems= "center";
    fondCo.style.flexDirection="column"

    // 
    divCo.style.backgroundColor= " red";
    divCo.style.width = " 60% ";
    divCo.style.borderRadius="211px";
    divCo.style.padding="7vh";
    divCo.style.display = " flex ";
    divCo.style.justifyContent="center";
    divCo.style.alignItems= "center";
    divCo.style.flexDirection="column"


    
    document.body.insertBefore(fondCo, coSql);
    document.getElementById("fondCoId").appendChild(divCo);
    nameMailMdp(nameMailMdpCo);
    var tlCo=new TimelineMax();
    tlCo.staggerFrom('.fondCoClasse', 0.1,{x:0,y:0, opacity:0});
    tlCo.staggerFrom('.divCoClasse', 1,{x:0,y:100, opacity:0});
    destroyThat(tlCo)
}

// create 3 
function nameMailMdp(connec) {
    for (let i = 0; i < connec.length; i++) {
        if (i==0) {
            var divCoNmm = document.createElement('div');
            const nMM = connec[i];
            var contenuCo = document.createElement('p');
            contenuCo.innerHTML=nMM;
            var attenduCo = document.createElement('input');
            attenduCo.type="text";
            attenduCo.name="pseudo"
            attenduCo.className="pseudo"

            document.getElementById("divCoId").appendChild(contenuCo);
            document.getElementById("divCoId").appendChild(attenduCo);
        }
        else{
            var divCoNmm = document.createElement('div');
        const nMM = connec[i];
        var contenuCo = document.createElement('p');
        contenuCo.innerHTML=nMM;
        var attenduCo = document.createElement('input');
        attenduCo.type="text";

        document.getElementById("divCoId").appendChild(contenuCo);
        document.getElementById("divCoId").appendChild(attenduCo);
        
        }
        
    }
    var subCo = document.createElement('input');  
    subCo.type="submit";
    subCo.className="buttonCo"
    subCo.onclick="destroyThat(fondCo)"
    subCo.innerHTML = "Me connecter";
    document.getElementById("divCoId").appendChild(subCo);
    if (isPseudo) {
        affichePseudo(pseudo)
    }
}

popUpCo()

function destroyThat(co) {
    $('.buttonCo').click(function(){
        co.reverse();
        var pseudo=$(".pseudo").val();
        
    });
    isPseudo=true;
    // console.log(pseudo)
    // return pseudo;
}

function affichePseudo(nom) {
    var affPseu = document.createElement('div');
    affPseu.id="affPseuId"
    affPseu.style.backgroundColor= " rgba(0,0,0,0.5)";
    affPseu.style.position = " fixed ";
    affPseu.style.width = " 100% ";
    affPseu.style.height = " 100% ";
    affPseu.style.zIndex= "1";
    affPseu.style.display = " flex ";
    affPseu.style.justifyContent="center";
    affPseu.style.alignItems= "center";
    affPseu.style.flexDirection="column"
}



