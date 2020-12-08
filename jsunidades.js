let regiao = document.getElementsByName("regiao").onchange = function() {
    mudarUnidade();
};

function mudarUnidade() {

    var unid = document.getElementById("unidade");
    var regi = document.getElementById("regiao");
    var valregi = regi.value;

    switch (valregi) {
        case 'NDD':
            document.getElementById("unidSEL").style.display = "inline";
            document.getElementById("unidSELREG").style.display = "inline";
            document.getElementById("unidPOR").style.display = "none";
            document.getElementById("unidCUR").style.display = "none";
            document.getElementById("unidSAO").style.display = "none";
            document.getElementById("unidRIO").style.display = "none";
            document.getElementById("unidBEL").style.display = "none";
            document.getElementById("unidBRA").style.display = "none";
            document.getElementById("unidSAL").style.display = "none";
            document.getElementById("unidREC").style.display = "none";
            document.getElementById("unidNPS").style.display = "none";
            unid.value = "selec", "selecregi";
            break;
        case 'Sul':
            document.getElementById("unidSEL").style.display = "inline";
            document.getElementById("unidSELREG").style.display = "none";
            document.getElementById("unidPOR").style.display = "inline";
            document.getElementById("unidCUR").style.display = "inline";
            document.getElementById("unidSAO").style.display = "none";
            document.getElementById("unidRIO").style.display = "none";
            document.getElementById("unidBEL").style.display = "none";
            document.getElementById("unidBRA").style.display = "none";
            document.getElementById("unidSAL").style.display = "none";
            document.getElementById("unidREC").style.display = "none";
            document.getElementById("unidNPS").style.display = "none";
            unid.value = "selec","portoalegre", "curitiba";
            break;
        case 'Sudeste':
            document.getElementById("unidSEL").style.display = "inline";
            document.getElementById("unidSELREG").style.display = "none";
            document.getElementById("unidPOR").style.display = "none";
            document.getElementById("unidCUR").style.display = "none";
            document.getElementById("unidSAO").style.display = "inline";
            document.getElementById("unidRIO").style.display = "inline";
            document.getElementById("unidBEL").style.display = "inline";
            document.getElementById("unidBRA").style.display = "none";
            document.getElementById("unidSAL").style.display = "none";
            document.getElementById("unidREC").style.display = "none";
            document.getElementById("unidNPS").style.display = "none";

            unid.value = "selec", "saopaulo", "riodejaneiro", "belohorizonte";
            break;
        case 'Centro-Oeste':
            document.getElementById("unidSEL").style.display = "inline";
            document.getElementById("unidSELREG").style.display = "none";
            document.getElementById("unidPOR").style.display = "none";
            document.getElementById("unidCUR").style.display = "none";
            document.getElementById("unidSAO").style.display = "none";
            document.getElementById("unidRIO").style.display = "none";
            document.getElementById("unidBEL").style.display = "none";
            document.getElementById("unidBRA").style.display = "inline";
            document.getElementById("unidSAL").style.display = "none";
            document.getElementById("unidREC").style.display = "none";
            document.getElementById("unidNPS").style.display = "none";
            unid.value = "selec", "brasilia";
            break;
        case 'Nordeste':
            document.getElementById("unidSEL").style.display = "inline";
            document.getElementById("unidSELREG").style.display = "none";
            document.getElementById("unidPOR").style.display = "none";
            document.getElementById("unidCUR").style.display = "none";
            document.getElementById("unidSAO").style.display = "none";
            document.getElementById("unidRIO").style.display = "none";
            document.getElementById("unidBEL").style.display = "none";
            document.getElementById("unidBRA").style.display = "none";
            document.getElementById("unidSAL").style.display = "inline";
            document.getElementById("unidREC").style.display = "inline";
            document.getElementById("unidNPS").style.display = "none";
            unid.value = "selec", "salvador", "recife";
            break;
        case 'Norte':
            document.getElementById("unidSEL").style.display = "inline";
            document.getElementById("unidSELREG").style.display = "none";
            document.getElementById("unidPOR").style.display = "none";
            document.getElementById("unidCUR").style.display = "none";
            document.getElementById("unidSAO").style.display = "none";
            document.getElementById("unidRIO").style.display = "none";
            document.getElementById("unidBEL").style.display = "none";
            document.getElementById("unidBRA").style.display = "none";
            document.getElementById("unidSAL").style.display = "none";
            document.getElementById("unidREC").style.display = "none";
            document.getElementById("unidNPS").style.display = "inline";
            unid.value = "indisponivel";
        default:
            unid.value = "indisponivel";
    }
}