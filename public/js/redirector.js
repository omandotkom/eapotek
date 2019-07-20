/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function onBranchChanged(type, branch_id) {
    switch (type) {
        case "supplier":
            //if the value is not "Semua"
            window.location = "/view/supplier/branch/" + branch_id;
            break;
        case "medicine":
            window.location = "/view/obat/branch/" + branch_id;
            break;
        case "worker":
            window.location = "/view/karyawan/branch/" + branch_id;
            break;
        case "notesupplier":
            window.location = "/view/supplyobat/branch/" + branch_id;
            break;
        case "salary":
            window.location = "/input/salary/" + branch_id;
            break;
      }
}
function onTransactionBranchChanged(branch_id,from,to){
    window.location = "/view/transaction/" + branch_id + "/" + from + "/" + to;
}
function searchbyParam(type, branch_id, name) {
    switch (type) {
        case "medicine":
            window.location = "/view/obat/search/branch/" + branch_id + "/" + name;
            break;
        case "supplier":
            var url = "/view/supplier/search/branch/" + branch_id + "/" + name;
            window.location = url;
            break;
        case "worker":
            var url = "/view/karyawan/search/branch/" + branch_id + "/" + name;
            window.location = url;
            break;
    }
}
