var inputs = document.querySelectorAll('.inputHidden');
var gameInstance = UnityLoader.instantiate("gameContainer", "Build/Modulor.json", {onProgress: UnityProgress});
var price =  document.querySelector('.price');
//        var gameInstance = UnityLoader.instantiate("gameContainer", "Build/Nouveau dossier.json", {onProgress: UnityProgress});
var data = {};
function UpdateInfo(data){
    inputs[0].value = data.BOrne;
    inputs[1].value = data.Banque;
    inputs[2].value = data.BanqueEnseigne;
    inputs[3].value = data.BarriereComm;
    inputs[4].value = data.Berrobi;
    inputs[5].value = data.ChaiseHaute;
    inputs[6].value = data.ChaiseS;
    inputs[7].value = data.Ipad;
    inputs[8].value = data.Kakemono;
    inputs[9].value = data.Kirro;
    inputs[10].value = data.LeCroise;
    inputs[11].value = data.Mur;
    inputs[12].value = data.MurImage;
    inputs[13].value = data.MurMosaique;
    inputs[14].value = data.PorteDocu;
    inputs[15].value = data.PorteDocuOri;
    inputs[16].value = data.Table;
    inputs[17].value = data.TotemImage;
    inputs[18].value = data.Victorio;
    var i = 0;
    while (i < inputs.length - 1)
    {
        inputs[18].value = (parseInt(inputs[18].value) + parseInt(inputs[i].value));
        i++;
    }
    price.textContent = parseInt(inputs[18].value) * 72 + '€';
    inputs[18].value = parseInt(inputs[18].value) * 72;
    return data;
}
console.log(data);


