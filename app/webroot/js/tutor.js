$.fn.editable.defaults.mode = 'inline';
$(document).ready(function() {
    var teachFlag = true;
    populateTeach();
    populateLocation();
});

function populateTeach(){
    $('#teach-jc2').editable();
    $('#teach-jc2').editable('option', 'disabled', true);

    $('#teach-secondary').editable();
    $('#teach-secondary').editable('option', 'disabled', true);

    $('#teach-primary').editable();
    $('#teach-primary').editable('option', 'disabled', true);
}

function populateLocation(){
    $('#location-east').editable();
    $('#location-east').editable('option', 'disabled', true);

    $('#location-west').editable();
    $('#location-east').editable('option', 'disabled', true);
}

function switchTeach(){
    var status = $('#teach-edit').text();
    if(status=="Edit"){
        $('#teach-jc2').editable('option', 'disabled', false);
        $('#teach-secondary').editable('option', 'disabled', false);
        $('#teach-primary').editable('option', 'disabled', false);
        $('#teach-edit').text('Un-Edit');
    }else{
        $('#teach-jc2').editable('option', 'disabled', true);
        $('#teach-secondary').editable('option', 'disabled', true);
        $('#teach-primary').editable('option', 'disabled', true);
        $('#teach-edit').text('Edit');
    }
}

function switchLocation(){
    var status = $('#teach-location').text();
    if(status=="Edit"){
        $('#location-east').editable('option', 'disabled', false);
        $('#location-west').editable('option', 'disabled', false);
        $('#location-edit').text('Un-Edit');
    }else{
        $('#location-east').editable('option', 'disabled', true);
        $('#location-west').editable('option', 'disabled', true);
        $('#location-edit').text('Edit');
    }
}
