var divCO = document.createElement('div');
divCO.id="coDivId"
var div2 = document.createElement('div');

function testCrea() {
    divCO.style.backgroundColor= " rgba(0,0,0,0.5)";
    divCO.style.position = " fixed ";
    divCO.style.width = " 100% ";
    divCO.style.height = " 100% ";
    divCO.style.zIndex= "1";
    divCO.style.display = " flex ";
    divCO.style.justifyContent="center";
    divCO.style.alignItems= "center";
    divCO.style.flexDirection="column"

    div2.style.backgroundColor= " red";
    div2.style.width = " 10% ";
    div2.style.height = " 10% ";



    divCO.innerHTML = "displayBlock";
    document.body.insertBefore(divCO, coSql);
    document.getElementById("coDivId").appendChild(div2);
    console.log("wsh")
}
// let test=true
// if (test) {
//     alert(wsh);
//     test=false;
// }