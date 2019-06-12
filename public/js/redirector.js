/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function onBranchChanged(type, branch_id) {
    switch (type) {
        case "supplier" :
            //if the value is not "Semua"
            window.location = "http://homestead.test/view/supplier/branch/" + branch_id;
            break;
        case "medicine" :
            window.location = "http://homestead.test/view/obat/branch/" + branch_id;
            break;
        case "worker" :
            window.location = "http://homestead.test/view/karyawan/branch/" + branch_id;
            break;
        case "notesupplier" :
            window.location = "http://homestead.test/view/supplyobat/branch/" + branch_id;
            break;

    }
}
function searchbyParam(type, branch_id, name) {
    switch (type) {
        case "medicine" :
            window.location = "http://homestead.test/view/obat/search/branch/" + branch_id + "/" + name;
            break;
        case "supplier" :

            var url = "http://homestead.test/view/supplier/search/branch/" + branch_id + "/" + name;
            window.location = url;
            break;
    }
}
