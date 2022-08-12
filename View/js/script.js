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

function chargeHours(){
    if( ($("#medical").val() == -1) || ($("#date").val() == "")){
        $("#time").html("<option value='-1' selected='selected'>---Seleccione la hora</option>")
    } else { 
        queryString = "medical="+$("#medical").val()+"&date="+$("#date").val();
        url = "index.php?action=consultHour&" + queryString;
        $("#time").load(url); 
    }
}

function selectHour(){
    if($("#medical").val() == -1){
        alert("Debe seleccionar un médico"); 
    } else if ($("#date").val() == ""){
        alert("Debe seleccionar una fecha");
    }
}

function consultAppointment(){
    url = "index.php?action=consultAppointment&consultIdentification="+$("#consultIdentification").val(); 
    $("#patient2").load(url); 
}

function cancelAppointment(){
    url = "index.php?action=cancelAppointment&cancelIdentification="+$("#cancelIdentification").val(); 
    $("#patient3").load(url); 
}

function confirmCancel(number){
    if(confirm("Esta seguro de cancelar la cita "+number)){
        $.get("index.php",{action:'confirmCancel',number:number},function(message){ /* Execute the action and receive a response */
            alert(message.replace(/(<([^>]+)>)/ig,"")); /* Replace characters within a text string. */
        }); 
    }
    $("#consultCancel").trigger("click"); /* Execute an event of a button automatically */
}