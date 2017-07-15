/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 $(document).ready(function(){
      $('.parallax').parallax();
    });
    
$(document).ready(function(){
    $('.collapsible').collapsible();
});

(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

(function($){
  $(function(){

    $('.button-collapse-dropdown').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space

  $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15 // Creates a dropdown of 15 years to control year
  });
  $('#textarea1').val('');
  $('#textarea1').trigger('autoresize'); 

 $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
$(".dropdown-button").dropdown();
 $(document).ready(function(){
    $('ul.tabs').tabs();
  });
 $(document).ready(function(){
    $('ul.tabs').tabs('select_tab', 'tab_id');
  });  
 $(document).ready(function() {
    $('select').material_select();
  });
   $('select').material_select('destroy');
//  $(document).ready(function(){
//    $('#form_login').hide();
//  }); 
//  $('#login').click(function(){
//       $(this).css('color', 'black');
//       $('#form_login').css('maring', '0');
//       $('#form_login').css('padding', '0');
//       $('#form_login').css('width', '100%');
//       $('#form_login').show();
//  });
function autoSerch(data){
  $('input.autocomplete').autocomplete({
    data: data,
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      // Callback function when value is autcompleted.
    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
  });
}       
function autoRefresch(data){
  
} 
function nbVisite(){
            month = document.getElementById('month').value;
            $.ajax({
                url : '/nbVisite', // La ressource ciblée
                type : 'GET', // Le type de la requête HTTP.
                data : 'mois=' + month
            });
        }
function getRequested(url, callback) {
		$.get(url, function(data) {
			//data = $.parseJSON(data);
			callback(data);
		});
}
function notification(){
	/*$.ajax({
	    url: "/notificationInvit",
	    method: "post",
            data: {}
	    }).done(function(data){
                console.log(data);
		notificationButton = document.getElementById('notification');
                notificationButton.className = "material-icons red-text";
                //alert(notificationButton);		
	    });*/
        getRequested("/notificationInvit", function(data) {
                console.log("data");
                newInvitation(data);
	});
}
function newInvitation(data){
    console.log(data.length);
    InvitationBadge = document.getElementById('invitationBadge');
    $('#invitationBadge').html('<span id="invitationBadge" class="new badge" >'+data.length+'</span>Invitation');
    if(data.length !=0){
        notificationButton = document.getElementById('notification');
        notificationButton.className = "material-icons red-text";
       
        //alert(notificationButton);
    }
}
function SetVu(){
        notificationButton = document.getElementById('notification');
        notificationButton.className = "material-icons red-white";
        getRequested("/setInvitationToVu", function(data) {});
}
// changer par un setinterval
setInterval(function(){
		notification();
	}, 9050);
 