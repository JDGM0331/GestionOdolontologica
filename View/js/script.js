$(document).ready(function(){
    $("#frmPatient").dialog({
        autoOpen: false,
        height: 310, 
        width: 400, 
        modal: true, 
        buttons: {
            "Insertar":insertPatient, 
            "Cancelar":cancel
        }
    }); 
}); 

function consultPatient(){
    var url = "index.php?action=consultPatient&identification=" +
    $("#assignIdentification").val(); 
    $("#patient").load(url,function(){            
    }); 
}

function showForm(){
    identification = "" + $("#assignIdentification").val(); // get the value of the elements of a web
    $("#PatIdentification").attr("value",identification); // Access or set atribute values of an element on our page. 

    $("#frmPatient").dialog('open'); 
}

function insertPatient(){
    queryStrig = $("#addPatient").serialize(); // Serialize the elements found within a specific form. 
    url = "index.php?action=addPatient&"+queryStrig; 
    $("#patient").load(url); // Allow to load an external html in a div
    $("#frmPatient").dialog('close'); // Opening a dialog and implementing modal and amodal dialogs. 
}

function cancel(){
    $(this).dialog('close'); 
}