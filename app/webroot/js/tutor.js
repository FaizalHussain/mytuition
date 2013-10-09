$.fn.editable.defaults.mode = 'inline';
$(document).ready(function() {
    var teachFlag = true;
    populateTeach();
    populateLocation();
    populateQualification();
    populateTutor();
});

function populateTeach(){
    $('#teach_jc2').editable();
    $('#teach_jc2').editable('option', 'disabled', true);

    $('#teach_secondary').editable();
    $('#teach_secondary').editable('option', 'disabled', true);

    $('#teach_primary').editable();
    $('#teach_primary').editable('option', 'disabled', true);
}

function populateLocation(){
    $('#location_east').editable();
    $('#location_east').editable('option', 'disabled', true);

    $('#location_west').editable();
    $('#location_west').editable('option', 'disabled', true);
}

function populateQualification(){
    $('#qualification_university').editable();
    $('#qualification_university').editable('option', 'disabled', true);

    $('#qualification_polytechnic').editable();
    $('#qualification_polytechnic').editable('option', 'disabled', true);

    $('#qualification_jc').editable();
    $('#qualification_jc').editable('option', 'disabled', true);

    $('#qualification_remarks').editable();
    $('#qualification_remarks').editable('option', 'disabled', true);
}

function populateTutor(){
    $('#tutor_jc').editable();
    $('#tutor_jc').editable('option', 'disabled', true);

    $('#tutor_polytechnic').editable();
    $('#tutor_polytechnic').editable('option', 'disabled', true);
}

function switchTeach(){
    var status = $('#teach_edit').text();
    if(status=="Edit"){
        $('#teach_jc2').editable('option', 'disabled', false);
        $('#teach_secondary').editable('option', 'disabled', false);
        $('#teach_primary').editable('option', 'disabled', false);
        $('#teach_edit').text('Un_Edit');
    }else{
        $('#teach_jc2').editable('option', 'disabled', true);
        $('#teach_secondary').editable('option', 'disabled', true);
        $('#teach_primary').editable('option', 'disabled', true);
        $('#teach_edit').text('Edit');
    }
}

function switchLocation(){
    var status = $('#location_edit').text();
    if(status=="Edit"){
        $('#location_east').editable('option', 'disabled', false);
        $('#location_west').editable('option', 'disabled', false);
        $('#location_edit').text('Un_Edit');
    }else{
        $('#location_east').editable('option', 'disabled', true);
        $('#location_west').editable('option', 'disabled', true);
        $('#location_edit').text('Edit');
    }
}

function switchQualification(){
    var status = $('#qualification_edit').text();
    if(status=="Edit"){
        $('#qualification_university').editable('option', 'disabled', false);
        $('#qualification_polytechnic').editable('option', 'disabled', false);
        $('#qualification_jc').editable('option', 'disabled', false);
        $('#qualification_remarks').editable('option', 'disabled', false);
        $('#qualification_edit').text('Un_Edit');
    }else{
        $('#qualification_university').editable('option', 'disabled', true);
        $('#qualification_polytechnic').editable('option', 'disabled', true);
        $('#qualification_jc').editable('option', 'disabled', true);
        $('#qualification_remarks').editable('option', 'disabled', true);
        $('#qualification_edit').text('Edit');
    }
}

function switchTutor(){
    var status = $('#tutor_edit').text();
    if(status=="Edit"){
        $('#tutor_jc').editable('option', 'disabled', false);
        $('#tutor_polytechnic').editable('option', 'disabled', false);
        $('#tutor_edit').text('Un_Edit');
    }else{
        $('#tutor_jc').editable('option', 'disabled', true);
        $('#tutor_polytechnic').editable('option', 'disabled', true);
        $('#tutor_edit').text('Edit');
    }
}

function applyAssignment(id){
    $.ajax({
        type: "post",
        url: getRootURL() + "Tutor/applyAssignment",
        data: {id:id},
        success: function(data){
            document.getElementById("ApplyButton"+id).removeAttribute("onClick");
            document.getElementById("ApplyButton"+id).style = "height:30px;background-color: #FF0000;";
            document.getElementById("ApplyButton"+id).value = "Assignment Applied";
        }
    });
}

