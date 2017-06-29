/**
 * Created by cnero on 27-Jun-17.
 */
$(document).ready(function() {
    /**
     * Display or hide elements by type
     */

    $('.type').hide();
    $('#type_input').mouseup(function(){
        $('.type').hide();
        $('.type-' + $(this).val()).show();
    });

    /**
     * generate inputs by type
     */
    $('#inputs_input').change(function(){
        var val = $(this).val();
        $('#inputs').html('');
        var inputs = '';
        for (var cpt = 0; cpt < val; cpt ++){
            inputs+= "<input type='text' name='input["+cpt+"]'>";
        }
        $('#inputs').html(inputs);

    });
});